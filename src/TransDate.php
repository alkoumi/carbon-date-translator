<?php

    namespace Alkoumi\CarbonDateTranslator;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Config;
    /*
     * this class translates carbon date difference to arabic
     */
    class TransDate
    {
        public static function inArabic($theDate)
        {
            // Define The Zaman after or before
            $theDate < Carbon::now() ? $zaman = "قبل " : $zaman = "بعد ";
            $theDate = $theDate->diffForHumans();
            $dateArray = explode(" ", $theDate);
            //return $dateArray; // ["1","day","ago"]
            //$dateArray[0] is number, $dateArray[1] is the time period , $dateArray[2] is the word ago
            // handl seconds
            if($dateArray[1] == "second" || $dateArray[1] == "seconds" )
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."ثانية واحدة";
                }
                elseif($dateArray[0] == 2)
                {
                    return $zaman. "ثانيتين";
                }
                elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " ثواني";
                }
                else
                {
                    return $zaman.  $dateArray[0] . " ثانية";
                }
            }
            // handl minutes
            if($dateArray[1] == "minute" || $dateArray[1] == "minutes" )
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."دقيقة واحدة";
                }
                elseif($dateArray[0] == 2)
                {
                    return $zaman. "دقيقتين";
                }
                elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " دقائق";
                }
                else
                {
                    return $zaman.  $dateArray[0] . " دقيقة";
                }
            }
            // handl hours
            if($dateArray[1] == "hour" || $dateArray[1] == "hours" )
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."ساعة";
                }
                elseif($dateArray[0] == 2)
                {
                    return $zaman. "ساعتين";
                }
                elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " ساعات";
                }
                else
                {
                    return $zaman.  $dateArray[0] . " ساعة";
                }
            }
            // handl days
            if($dateArray[1] == "day" || $dateArray[1] == "days" )
            {
                if($dateArray[0] == 1)
                {
                    return $zaman." يوم";
                }
                elseif($dateArray[0] == 2)
                {
                    return $zaman. "يومين";
                }
                elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " أيام";
                }
                else
                {
                    return $zaman.  $dateArray[0] . " يوم";
                }
            }
            // handl weeks
            if($dateArray[1] == "week" || $dateArray[1] == "weeks" )
            {
                if($dateArray[0] == 1)
                {
                    return $zaman." أسبوع";
                }
                elseif($dateArray[0] == 2)
                {
                    return $zaman. " أسبوعين";
                }
                elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " أسابيع";
                }
                else
                {
                    return $zaman.  $dateArray[0] . " أسبوع";
                }
            }
            // handl months
            if($dateArray[1] == "month" || $dateArray[1] == "months" )
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."شهر";
                }
                elseif($dateArray[0] == 2)
                {
                    return $zaman. " شهرين";
                }
                elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " شهور";
                }
                else
                {
                    return $zaman.  $dateArray[0] . " شهر";
                }
            }
            // handl years
            if($dateArray[1] == "year" || $dateArray[1] == "years" )
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."سنة";
                }
                elseif($dateArray[0] == 2)
                {
                    return $zaman. " سنتين";
                }
                elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " سنوات";
                }
                else
                {
                    return $zaman.  $dateArray[0] . " سنة";
                }
            }
        }

    }
