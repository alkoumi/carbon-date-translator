<?php

namespace Alkoumi\CarbonDateTranslator;

use Carbon\Carbon;
use Illuminate\Support\Facades\Config;

/* 
 * this class translates carbon date difference to arabic 
 */
class Translator{
    // convert s given date to arabic string
    public static function inArabic($theDate){

        if ($theDate < Carbon::now()){
            //START
            $date = $theDate->diffForHumans();

            $dateArray = explode(" ", $date);


            //$dateArray[0] is number, $dateArray[1] is the time period , $dateArray[2] is the word ago

            // handlin seconds
            if($dateArray[1] == "second" || $dateArray[1] == "seconds" ){

                if($dateArray[0] == 1){

                    $arPeriod = "قبل ثانية واحدة";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "قبل " . "ثانيتين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "قبل " . $dateArray[0] . " ثواني";

                }else{

                    $arPeriod = "قبل ".  $dateArray[0] . " ثانية";

                }

                // handling minutes
            }elseif($dateArray[1] == "minute" || $dateArray[1] == "minutes" ){

                if($dateArray[0] == 1){

                    $arPeriod = "قبل ". "دقيقة واحدة";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "قبل ". "دقيقتين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "قبل ". $dateArray[0] . " دقائق";

                }else{

                    $arPeriod = "قبل ". $dateArray[0] . " دقيقة";

                }

                // handling hours
            }elseif($dateArray[1] == "hour" || $dateArray[1] == "hours" ){

                if($dateArray[0] == 1){

                    $arPeriod = "قبل " . "ساعة واحدة";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "قبل " . "ساعتين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "قبل " . $dateArray[0] . " ساعات";

                }else{

                    $arPeriod = "قبل ". $dateArray[0] . " ساعة";

                }

                //handling days
            }elseif($dateArray[1] == "day" || $dateArray[1] == "days" ){

                if($dateArray[0] == 1){

                    $arPeriod = "قبل " . " يوم واحد";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "قبل " . "يومين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "قبل ".  $dateArray[0] . " أيام";

                }else{

                    $arPeriod = "قبل ".  $dateArray[0] . " يوم";

                }
                // handling weeks
            }elseif($dateArray[1] == "week" || $dateArray[1] == "weeks" ){

                if($dateArray[0] == 1){

                    $arPeriod = "قبل " . "إسبوع";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "قبل " . "إسبوعين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "قبل ". $dateArray[0] . " أسابيع";

                }else{

                    $arPeriod = "قبل ". $dateArray[0] . " إسبوع";

                }
                //handling months
            }elseif($dateArray[1] == "month" || $dateArray[1] == "months" ){

                if($dateArray[0] == 1){

                    $arPeriod = "قبل " . "شهر";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "قبل " . "شهرين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "قبل " . $dateArray[0] . " شهور";

                }else{

                    $arPeriod = "قبل " . $dateArray[0] . " شهر";

                }
                //handling years
            }elseif($dateArray[1] == "year" || $dateArray[1] == "years" ){

                if($dateArray[0] == 1){

                    $arPeriod = "قبل ".  "سنة";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "قبل " . "سنتين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "قبل " . $dateArray[0] . " سنوات";

                }else{

                    $arPeriod = "قبل " . $dateArray[0] . " سنين";

                }

            }



            return $arPeriod;

        }else{
           // START
            $date = $theDate->diffForHumans();

            $dateArray = explode(" ", $date);


            //$dateArray[0] is number, $dateArray[1] is the time period , $dateArray[2] is the word ago

            // handlin seconds
            if($dateArray[1] == "second" || $dateArray[1] == "seconds" ){

                if($dateArray[0] == 1){

                    $arPeriod = "بعد ثانية واحدة";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "بعد " . "ثانيتين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "بعد " . $dateArray[0] . " ثواني";

                }else{

                    $arPeriod = "بعد ".  $dateArray[0] . " ثانية";

                }

                // handling minutes
            }elseif($dateArray[1] == "minute" || $dateArray[1] == "minutes" ){

                if($dateArray[0] == 1){

                    $arPeriod = "بعد ". "دقيقة واحدة";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "بعد ". "دقيقتين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "بعد ". $dateArray[0] . " دقائق";

                }else{

                    $arPeriod = "بعد ". $dateArray[0] . " دقيقة";

                }

                // handling hours
            }elseif($dateArray[1] == "hour" || $dateArray[1] == "hours" ){

                if($dateArray[0] == 1){

                    $arPeriod = "بعد " . "ساعة واحدة";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "بعد " . "ساعتين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "بعد " . $dateArray[0] . " ساعات";

                }else{

                    $arPeriod = "بعد ". $dateArray[0] . " ساعة";

                }

                //handling days
            }elseif($dateArray[1] == "day" || $dateArray[1] == "days" ){

                if($dateArray[0] == 1){

                    $arPeriod = "بعد " . " يوم واحد";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "بعد " . "يومين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "بعد ".  $dateArray[0] . " أيام";

                }else{

                    $arPeriod = "بعد ".  $dateArray[0] . " يوم";

                }
                // handling weeks
            }elseif($dateArray[1] == "week" || $dateArray[1] == "weeks" ){

                if($dateArray[0] == 1){

                    $arPeriod = "بعد " . "اسبوع";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "بعد " . "اسبوعين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "بعد ". $dateArray[0] . " أسابيع";

                }else{

                    $arPeriod = "بعد ". $dateArray[0] . " اسبوع";

                }
                //handling months
            }elseif($dateArray[1] == "month" || $dateArray[1] == "months" ){

                if($dateArray[0] == 1){

                    $arPeriod = "بعد " . "شهر";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "بعد " . "شهرين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "بعد " . $dateArray[0] . " شهور";

                }else{

                    $arPeriod = "بعد " . $dateArray[0] . " شهر";

                }
                //handling years
            }elseif($dateArray[1] == "year" || $dateArray[1] == "years" ){

                if($dateArray[0] == 1){

                    $arPeriod = "بعد ".  "سنة";

                }elseif($dateArray[0] == 2){

                    $arPeriod = "بعد " . "سنتين";

                }elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  ){

                    $arPeriod = "بعد " . $dateArray[0] . " سنوات";

                }else{

                    $arPeriod = "بعد " . $dateArray[0] . " سنين";

                }

            }



            return $arPeriod;

        }
    }
}