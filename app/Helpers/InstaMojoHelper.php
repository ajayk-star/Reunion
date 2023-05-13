<?php

namespace App\Helpers;

use App\Models\InstamojoToken;
use App\Models\PaymentInstamojoPaymentDetails;
use App\Models\PaymentInstamojoRequest;
use App\Models\PaymentInstamojoResponseRaw;
use App\Models\PaymentMethod;
use App\Models\PaymentMode;
use App\Models\Season;
use App\Models\StudentRegistration;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InstaMojoHelper
{


    public static function pay($name, $email, $phone, $referralCode, $theme, $chapter, $season, $sac_code_id, $tax_type_id, $tax_id)
    {

        $token = self::getToken();
        $amount = self::getamount($theme, $chapter, $season);
        $amount_without_tax = self::amount_without_tax($theme, $chapter, $season);
        return self::CreatePaymentRequest($theme, $chapter, $season, $name, $email, $phone, $referralCode, $amount, $token, $sac_code_id, $tax_type_id, $tax_id, $amount_without_tax);
    }


    private static function CreatePaymentRequest($theme, $chapter, $season, $name, $email, $phone, $referralCode, $amount, $token, $sac_code_id, $tax_type_id, $tax_id, $amount_without_tax)
    {


        $purpose = "Registration Fees";
        $model = new PaymentInstamojoRequest();
        $model->theme_id                = $theme;
        $model->chapter_id              = $chapter;
        $model->season                  = $season;
        $model->purpose                 = $purpose;
        $model->buyer_name              = $name;
        $model->email                   = $email;
        $model->phone                   = $phone;
        $model->amount                  = $amount;
        $model->amount_without_tax      = $amount_without_tax;
        $model->sac_code_id             = $sac_code_id;
        $model->tax_type_id             = $tax_type_id;
        $model->tax_id                  = $tax_id;
        $model->referral_code           = $referralCode;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, env('INSTAMOJO_PAYMENT_REQUEST_URL'));
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $token));

        $payload = array(
            'purpose' => $purpose,
            'amount' => $amount,
            'buyer_name' => $name,
            'email' => $email,
            'phone' => $phone,
            'redirect_url' => route('payment.response'),
            'send_email' => 'false',
            'webhook' => route('payment.webhook'),
            'allow_repeated_payments' => 'False'
        );

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);
        $resp = json_decode($response, true);


        $model->payment_request_id                      = $resp['id'];
        $model->user                                    = $resp['user'];
        $model->payment_status                          = $resp['status'];
        $model->sms_status                              = $resp['sms_status'];
        $model->email_status                            = $resp['email_status'];
        $model->shorturl                                = $resp['shorturl'];
        $model->longurl                                 = $resp['longurl'];
        $model->redirect_url                            = $resp['redirect_url'];
        $model->webhook                                 = $resp['webhook'];
        $model->scheduled_at                            = $resp['scheduled_at'];
        $model->expires_at                              = $resp['expires_at'];
        $model->allow_repeated_payments                 = $resp['allow_repeated_payments'];
        $model->mark_fulfilled                          = $resp['mark_fulfilled'];
        $model->payment_request_created_at              = $resp['created_at'];
        $model->payment_request_modified_at             = $resp['modified_at'];
        $model->resource_uri                            = $resp['resource_uri'];

        $model->save();

        $raw = new PaymentInstamojoResponseRaw();
        $raw->request_id = $model->id;
        $raw->payment_request_id = $resp['id'];
        $raw->response = $response;
        $raw->save();

        return $model->id;
    }

    private static function getamount($event, $chapter, $season)
    {
        $model =  Season::where(['theme_id' => $event, 'chapter_id' => $chapter, 'season' => $season])->first();
        return Helper::chargeableamount($model->tax_type_id, $model->tax->percentage, $model->booking_amount);
    }

    private static function amount_without_tax($event, $chapter, $season){
        $model =  Season::where(['theme_id' => $event, 'chapter_id' => $chapter, 'season' => $season])->first();
        return Helper::amountWithoutTax($model->tax_type_id, $model->tax->percentage, $model->booking_amount);
    }


    private static function storeToken($response)
    {

        $resp = json_decode($response, true);
        $model = new InstamojoToken();
        $model->access_token = $resp['access_token'];
        $model->expires_in = $resp['expires_in'];
        $seconds = ($resp['expires_in'] + 1) / 10;
        $model->expires_in_datetime = \Carbon\Carbon::now()->addSeconds($seconds)->format('Y-m-d H:i:s');
        $model->scope = $resp['scope'];
        $model->token_type = $resp['token_type'];
        $model->save();
        return $model->access_token;
    }

    public static function getToken()
    {
        $token = InstamojoToken::where('expires_in_datetime', '>', \Carbon\Carbon::now()->subSeconds(300)->format('Y-m-d H:i:s'))->latest()->first();
        if (empty($token)) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, env('INSTAMOJO_ACCESS_TOKEN_URL'));
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

            $payload = array(
                'grant_type' => 'client_credentials',
                'client_id' => env('INSTAMOJO_CLIENT_ID'),
                'client_secret' => env('INSTAMOJO_CLIENT_SECRET')
            );

            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
            $response = curl_exec($ch);
            curl_close($ch);
            return SELF::storeToken($response);
        }
        return $token->access_token;
    }


    public static function PaymentDeatils($paymentID)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, env('INSTAMOJO_PAYMENT_DETAILS_URL') . $paymentID . '/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . SELF::getToken()));

        $response = curl_exec($ch);
        curl_close($ch);

        return Self::paymentResponseCapture($paymentID, $response);
        // return $response;
    }

    private static function storelog($requestId, $response)
    {
        $resp = json_decode($response, true);

        $raw = new PaymentInstamojoResponseRaw();
        $raw->request_id = $requestId;
        $raw->payment_id = isset($resp['id']) ? $resp['id'] : NULL;
        $raw->response = $response;
        $raw->save();
        return;
    }

    public static function paymentResponseCapture($paymentID, $response)
    {
        $resp = json_decode($response, true);


        $model = PaymentInstamojoRequest::where('payment_id', $paymentID)->latest()->first();
        if (isset($resp['id'])) {
            $model->payment_id                  = $resp['id'];
        }
        if (isset($resp['title'])) {
            $model->title                  = $resp['title'];
        }
        if (isset($resp['payment_type'])) {
            $model->payment_type                  = $resp['payment_type'];
        }
        if (isset($resp['payment_request'])) {
            $model->payment_request                  = $resp['payment_request'];
        }
        if (isset($resp['link'])) {
            $model->link                  = $resp['link'];
        }
        if (isset($resp['product'])) {
            $model->product                  = $resp['product'];
        }
        if (isset($resp['seller'])) {
            $model->seller                  = $resp['seller'];
        }
        if (isset($resp['currency'])) {
            $model->currency                  = $resp['currency'];
        }
        if (isset($resp['amount'])) {
            $model->amount                  = $resp['amount'];
        }
        if (isset($resp['payout'])) {
            $model->payout                  = $resp['payout'];
        }
        if (isset($resp['fees'])) {
            $model->fees                  = $resp['fees'];
        }
        if (isset($resp['total_taxes'])) {
            $model->total_taxes                  = $resp['total_taxes'];
        }
        if (isset($resp['affiliate_id'])) {
            $model->affiliate_id                  = $resp['affiliate_id'];
        }
        if (isset($resp['affiliate_commission'])) {
            $model->affiliate_commission                  = $resp['affiliate_commission'];
        }
        if (isset($resp['instrument_type'])) {
            $model->instrument_type                  = $resp['instrument_type'];
        }
        if (isset($resp['billing_instrument'])) {
            $model->billing_instrument                  = $resp['billing_instrument'];
        }
        if (isset($resp['failure'])) {
            $model->failure                  = $resp['failure'];
        }
        if (isset($resp['created_at'])) {
            $model->payment_order_created_at                  = $resp['created_at'];
        }
        if (isset($resp['updated_at'])) {
            $model->payment_order_created_at                  = $resp['updated_at'];
        }
        if (isset($resp['tax_invoice_id'])) {
            $model->tax_invoice_id                  = $resp['tax_invoice_id'];
        }
        if (isset($resp['resource_uri'])) {
            $model->resource_uri                  = $resp['resource_uri'];
        }
        if (isset($resp['status'])) {
            $model->order_status                  = $resp['status'];
        }
        if (isset($resp['success'])) {
            $model->success                  = $resp['success'];
        }
        if (isset($resp['message'])) {
            $model->message                  = $resp['message'];
        }

        // $model->payment_request             = isset($resp['payment_request']) ? $resp['payment_request'] : NULL;
        // $model->link                        = isset($resp['link']) ? $resp['link'] : NULL;
        // $model->product                     = isset($resp['product']) ? $resp['product'] : NULL;
        // $model->seller                      = isset($resp['seller']) ? $resp['seller'] : NULL;
        // $model->currency                    = isset($resp['currency']) ? $resp['currency'] : NULL;
        // $model->amount                      = isset($resp['amount']) ? $resp['amount'] : NULL;
        // // $model->name                        = isset($resp['name']) ? $resp['name'] : NULL;
        // // $model->email                       = isset($resp['email']) ? $resp['email'] : NULL;
        // // $model->phone                       = isset($resp['phone']) ? $resp['phone'] : NULL;
        // $model->payout                      = isset($resp['payout']) ? $resp['payout'] : NULL;
        // $model->fees                        = isset($resp['fees']) ? $resp['fees'] : NULL;
        // $model->total_taxes                 = isset($resp['total_taxes']) ? $resp['total_taxes'] : NULL;
        // $model->affiliate_id                = isset($resp['affiliate_id']) ? $resp['affiliate_id'] : NULL;
        // $model->affiliate_commission        = isset($resp['affiliate_commission']) ? $resp['affiliate_commission'] : NULL;
        // $model->instrument_type             = isset($resp['instrument_type']) ? $resp['instrument_type'] : NULL;
        // $model->billing_instrument          = isset($resp['billing_instrument']) ? $resp['billing_instrument'] : NULL;
        // $model->failure                     = isset($resp['failure']) ? $resp['failure'] : NULL;
        // $model->payment_order_created_at          = isset($resp['created_at']) ? $resp['created_at'] : NULL;
        // $model->payment_order_updated_at          = isset($resp['updated_at']) ? $resp['updated_at'] : NULL;

        // $model->tax_invoice_id              = isset($resp['tax_invoice_id']) ? $resp['tax_invoice_id'] : NULL;
        // $model->resource_uri                = isset($resp['resource_uri']) ? $resp['resource_uri'] : NULL;
        // $model->order_status                = isset($resp['status']) ? $resp['status'] : NULL;
        // $model->success                     = isset($resp['success']) ? $resp['success'] : NULL;
        // $model->message                     = isset($resp['message']) ? $resp['message'] : NULL;
        $model->save();

        Self::storelog($model->id, $response);

        if (isset($resp['status']) && $resp['status'] == true) {
            SELF::UserRegisterNow($resp['name'], $resp['email'], substr($resp['phone'],-10), $model);
        }
        return $model->id;
    }

    public static function UserRegisterNow($name, $email, $phone, $response)
    {
        $model = User::where('phone', $phone)->first();
        if (empty($model)) {
            $random = rand(100000,999999);
            $model = new User();
            $model->role_id = User::ROLE_STUDENT;
            $model->name = $name;
            $model->email = $email;
            $model->phone = $phone;
            $model->avtar = Helper::defaultAvtar(Helper::seasonId($response->theme_id,$response->chapter_id,$response->season));
            $model->password = Hash::make($random);
            // $model->password = Hash::make('password');
            $model->actual_password = $random;
            $model->save();
        }

        $userRegistraionModel = new StudentRegistration();
        $userRegistraionModel->user_id = $model->id;
        $userRegistraionModel->theme_id = $response->theme_id;
        $userRegistraionModel->chapter_id = $response->chapter_id;
        $userRegistraionModel->season = $response->season;
        $userRegistraionModel->season_id = self::seasonid($response->theme_id, $response->chapter_id, $response->season);
        $userRegistraionModel->phone = $phone;
        $userRegistraionModel->referral_code = $response->referral_code;

        $userRegistraionModel->payment_mode_id = PaymentMode::PAYMENT_MODE_ONLINE;
        $userRegistraionModel->payment_platform_id = Helper::plateformId();
        $userRegistraionModel->payment_method_id = PaymentMethod::PAYEMENT_METHOD_INSTAMOJO;
        $userRegistraionModel->enrollment_no = Helper::enrollmentno($name, date('Y'));
        $userRegistraionModel->payment_detail = $response->payment_id;
        $userRegistraionModel->payment_date = $response->created_at;


        $userRegistraionModel->save();
        $name = $model->name;
        $event = $userRegistraionModel->theme->name;
        $chapter = $userRegistraionModel->chapter->name;
        $season = $userRegistraionModel->season;
        SmsHelper::userRegister($userRegistraionModel->phone, $name, $event, $chapter, $season, $model->name, $model->actual_password);
        return;
    }

    private static function seasonid($theme_id, $chapter_id, $season)
    {
        $s =   Season::where(['theme_id' => $theme_id, 'chapter_id' => $chapter_id, 'season' => $season])->latest()->first();
        return $s->id;
    }
}
