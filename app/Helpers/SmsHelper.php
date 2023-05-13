<?php

namespace App\Helpers;

use App\Models\SmsLog;
use PhpParser\Node\Stmt\Static_;

class SmsHelper
{

    const USER_ID = "Spherion";
    const PASSWORD = "yuxc9509YU";
    const SENDER_ID = "SKODOS";
    const ENTITY_ID = 1201161891910470181;
    const DOMAIN = "https://events.skoodos.com";
    const SALES_CONTACT = "8377838895";


    private static function createlog($phone, $msg, $template_id, $status, $response)
    {
        return  SmsLog::create([
            'user_id' => SELF::USER_ID,
            'password' => SELF::PASSWORD,
            'sender_id' => SELF::SENDER_ID,
            'phone_no' => $phone,
            'msg' => $msg,
            'entity_id' => SELF::ENTITY_ID,
            'template_id' => $template_id,
            'response' => $response,
            'status' => $status,
        ]);
    }

    public static function sendsms($phone, $Msg, $TemplateID)
    {
        $ch = '';
        $url = 'http://allsms.org/api/SmsApi/SendSingleApi?UserID=' . self::USER_ID . '&Password=' . SELF::PASSWORD . '&SenderID=' . SELF::SENDER_ID . '&Phno=' . $phone . '&Msg=' . urlencode($Msg) . '&EntityID=' . SELF::ENTITY_ID . '&TemplateID=' . $TemplateID;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $output = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($output);
        $status = false;
        if (strtolower(isset($response->status)) == "ok") {
            $status = true;
        }

        return SELF::createlog($phone, $Msg, $TemplateID, $status, $output);
        // return $output;
    }


    public static function userRegister($phone, $name, $event, $chapter, $season, $username, $password, $action = "profile")
    {
        $temId = "1707166999346503940";
        $url = SELF::short_url(self::DOMAIN . '/public/loginadmin');
        $msg = "Dear " . $name . ", thanks for signing up for the event: " . $event . ", chapter: " . $chapter . ", season: " . $season . ". Please upload your " . $action . " on " . $url . " Your username is " . $phone . " and password is " . $password . " Spherion Solutions";
        return self::sendsms($phone, $msg, $temId);
    }

    public static function short_url($long_url)
    {
        $api_url = "https://api-ssl.bitly.com/v4/bitlinks";
        $token = "fe22c16f3f8aa75e0a21f4934b3ebea6701b6906";
        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(["long_url" => $long_url]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $token",
            "Content-Type: application/json"
        ]);

        $arr_result = json_decode(curl_exec($ch));
        return  $arr_result->link;
    }

    public static function vendorCredentialSend($phone, $username, $password)
    {
        $temId = "1707166366608012063";
        $username = strlen($username) > 25 ? (substr($username, 0, 25) . '...') : $username;
        $url = SELF::short_url(SELF::DOMAIN . "/public/loginadmin");
        $msg = "Dear " . $username . ", use your username " . $phone . " and password " . $password . " to manage your profile at " . $url . " Spherion Solutions";
        return self::sendsms($phone, $msg, $temId);
    }


    public static function studentRegistration($phone, $username, $event_name, $chapter_name, $season, $upload, $password)
    {

        $temId = "1707166999346503940";
        $username = strlen($username) > 25 ? (substr($username, 0, 25) . '...') : $username;
        $url = SELF::short_url(SELF::DOMAIN . "/public/loginadmin");
        $msg = "Dear " . $username . ", thanks for signing up for the event: " . $event_name . ", chapter: " . $chapter_name . ", season: " . $season . ". Please upload your " . $upload . " on " . $url . " Your username is " . $phone . " and password is " . $password . " Spherion Solutions";
        return self::sendsms($phone, $msg, $temId);
    }


    public static function formfinalSubmission($phone, $studentname, $eventName, $chapterName, $season, $resultannouncedate)
    {
        $temId = "1707167230046821239";
        $studentname = strlen($studentname) > 25 ? (substr($studentname, 0, 25) . '...') : $studentname;
        $resultannouncedate = \Carbon\Carbon::parse($resultannouncedate)->format('d M Y');
        $msg = "Dear Participant: " . $studentname . ", your form is successfully submitted for the Event: " . $eventName . ", Chapter: " . $chapterName . ", Season: " . $season . ". Results will be announced on " . $resultannouncedate . " Spherion Solutions";
        return self::sendsms($phone, $msg, $temId);
    }


    public static function affilateUserRegistration($phone, $usernamename, $password, $isManages)
    {

        $temId = "1707167230047676675";
        $usernamename = strlen($usernamename) > 25 ? (substr($usernamename, 0, 25) . '...') : $usernamename;
        $role = ($isManages == true) ? "Sales Manager" : "Affiliate";
        $Project = "Skoodos Events";
        $url = SELF::short_url(SELF::DOMAIN . "/public/loginadmin");
        $msg = "Dear Admin User: " . $usernamename . ", you have been assigned a Role: " . $role . " for the Project: " . $Project . ". Your Login: " . $phone . " Password: " . $password . " URL: " . $url . " Spherion Solutions";
        return self::sendsms($phone, $msg, $temId);
    }
}
