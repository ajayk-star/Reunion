<?php

namespace App\Helpers;

use App\Models\Campaign;
use App\Models\Chapter;
use App\Models\Event;
use App\Models\Institute;
use App\Models\PaymentPlatform;
use App\Models\Affiliate;
use App\Models\Season;
use App\Models\SeasonCity;
use App\Models\SeasonInstitute;
use App\Models\StudentRegistration;
use App\Models\Twinkle\AwardCategoryGroup;
use App\Models\Twinkle\Essential;
use App\Models\Twinkle\SponsorTitle;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Str;

class Helper
{

    const CAMPAIGN_CHAPTER_WISE = 1;
    const CAMPAIGN_MULTI_CHAPTER = 2;
    const CAMPAIGN_NATIONALISED = 3;
    const CAMPAIGN_INSTITUTE_SPECIFIC = 4;
    const TAX_TYPE_INCLUSIVE = 1;
    const TAX_TYPE_EXCLUSIVE = 2;
    const PHONE_TYPE_LANDLINE = 1;
    const PHONE_TYPE_PHONE = 2;

    public static function sponsorTitleId($title)
    {
        $model = SponsorTitle::updateOrCreate([
            'sponsor_title'   => strtolower($title),
        ], [
            'sponsor_title'   => strtolower($title),
        ]);
        return $model->id;
    }

    public static function seasonId($theme_id, $chapter_id, $season)
    {
       $season= Season::where(['theme_id'=>$theme_id, 'chapter_id'=>$chapter_id, 'season'=>$season])->first();
       return $season->id;
    }

    public static function generateSeasonSlug($theme_id, $chapter_id, $season, $campaign_id, $institute_id = NULL)
    {

        $theme = Event::where('id', $theme_id)->first();
        $strname = strtolower(str_replace(' ', '-', $theme->name));


        if (SELF::CAMPAIGN_CHAPTER_WISE == $campaign_id || SELF::CAMPAIGN_MULTI_CHAPTER == $campaign_id) {
            $chapter = Chapter::where('id', $chapter_id)->first();
            $middleTerm = strtolower(str_replace(' ', '-', $chapter->name));
        }

        if (SELF::CAMPAIGN_NATIONALISED == $campaign_id) {
            $middleTerm = "in-india";
        }

        if (SELF::CAMPAIGN_INSTITUTE_SPECIFIC == $campaign_id) {
            $institute = Institute::where('id', $institute_id)->first();
            $middleTerm = strtolower(str_replace(' ', '-', $institute->name));
        }



        return $str = $strname . '-' . $middleTerm . '-season-' . $season;
    }

    public static function scopeOptions()
    {
        $arr = [
            1 => "Chapter Wise",
            2 => "Multi-Chapter [Zone]",
            3 => "Nationalized",
            4 => "Institute Specific",
        ];
        return $arr;
    }


    public static function removeEmptyValuesAndSubarrays($array)
    {
        foreach ($array as $k => &$v) {
            if (is_array($v)) {
                $v = self::removeEmptyValuesAndSubarrays($v);  // filter subarray and update array
                if (!sizeof($v)) { // check array count
                    unset($array[$k]);
                }
            } elseif (!strlen($v)) {  // this will handle (int) type values correctly
                unset($array[$k]);
            }
        }
        return $array;
    }

    public static function VideoCode($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
        $youtube_id = $my_array_of_vars['v'];
        return $youtube_id;
    }


    public static function plateformId()
    {
        if (Agent::isMobile()) {
            return PaymentPlatform::MOBILE;
        }
        if (Agent::isDesktop()) {
            return PaymentPlatform::DESKTOP;
        }
        return 0;
    }


    public static function AffiliateCode($str = NULl)
    {
        $name = "";
        if (!empty($str)) {
            $name =  substr($str, 0, 4);
        }
        if (empty($name)) {

            $string = rand(1000000000, 9999999999);
        } else {
            $string = rand(1000, 9999);
        }

        $req = $name . $string;

        $ref = Affiliate::where('code', $req)->get();
        if (!empty($ref)) {
            return strtolower($req);
        }
        return self::AffiliateCode($str);
    }

    public static function season($seasonId)
    {
        return Season::where('id', $seasonId)->first();
    }


    public static function enrollmentno($username, $year)
    {
        $name =  strtoupper(substr($username, 0, 4));


        $randno = rand(100000, 999999);

        $req = $name . '/' . $year . '/' . $randno;

        $ref = StudentRegistration::where('enrollment_no', $req)->get();
        if (!empty($ref)) {
            return $req;
        }
        return self::enrollmentno($username, $year);
    }

    public static function taxTypeOptions()
    {

        $arr = [
            1 => 'Inclusive',
            2 => 'Exclusive',
        ];

        return $arr;
    }

    public static function chargeableamount($taxType, $taxpercentage, $amount)
    {

        if ($taxType == SELF::TAX_TYPE_INCLUSIVE) {
            // $amt = ceil(($amount * 100) / (100 + $taxpercentage));
            // $amt = ceil($amount);
            $amt = sprintf('%0.2f', round($amount, 2));
        } else {
            $amt = sprintf('%0.2f', round(($amount * (100 + $taxpercentage)) / 100), 2);
        }
        return $amt;
    }

    public static function amountWithoutTax($taxType, $taxpercentage, $amount)
    {

        if ($taxType == SELF::TAX_TYPE_INCLUSIVE) {
            // $amt = ceil(($amount * 100) / (100 + $taxpercentage));
            $amt = sprintf('%0.2f', round(($amount * 100) / (100 + $taxpercentage), 2));
        } else {
            // $amt = ceil(($amount * (100 + $taxpercentage)) / 100);
            // $amt = ceil($amount);
            $amt = sprintf('%0.2f', round($amount, 2));
        }
        return $amt;
    }

    public static function PhoneType()
    {
        return [
            1 => 'Landline',
            2 => 'Mobile'
        ];
    }

    public static function taxableamount($charegableamount, $percentage)
    {
        return sprintf('%0.2f', round((($charegableamount * $percentage) / 100), 2));
    }

    public static function defaultAvtar($season_id)
    {

        $ess = Essential::where('season_id', $season_id)->first();

        return $ess->backend_default_profile;
    }


    // public static function AwardTitle(){
    //     return [
    //         1=>"School",
    //         2=>"Class Teacher",
    //         3=>"Student",
    //     ];
    // }

    public static function PagePlacement(){

        $arr = [

            1=>"Header",
            2=>"Body",
            3=>"Footer"

        ];

        return $arr;
    }
}
