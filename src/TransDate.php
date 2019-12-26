<?php

    namespace Alkoumi\CarbonDateTranslator;
    use Carbon\Carbon;
    use Illuminate\Support\Str;

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
            $dateArray = explode(" ", $theDate); //return $dateArray; // ["1","day","ago"]
            //$dateArray[0] is number, $dateArray[1] is the time period , $dateArray[2] is the word ago
            $time = $dateArray[1];
            // handl seconds
            if((new self)->isSecond($time))
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."ثانية واحدة";
                } elseif($dateArray[0] == 2)
                {
                    return $zaman. "ثانيتين";
                } elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " ثواني";
                } else
                {
                    return $zaman.  $dateArray[0] . " ثانية";
                }
            }
            // handl minutes
            if((new self)->isMinute($time))
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."دقيقة واحدة";
                } elseif($dateArray[0] == 2)
                {
                    return $zaman. "دقيقتين";
                } elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " دقائق";
                } else
                {
                    return $zaman.  $dateArray[0] . " دقيقة";
                }
            }
            // handl hours
            if((new self)->isHour($time))
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."ساعة";
                } elseif($dateArray[0] == 2)
                {
                    return $zaman. "ساعتين";
                } elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " ساعات";
                } else
                {
                    return $zaman.  $dateArray[0] . " ساعة";
                }
            }
            // handl days
            if((new self)->isDay($time))
            {
                if($dateArray[0] == 1)
                {
                    return $zaman." يوم";
                } elseif($dateArray[0] == 2)
                {
                    return $zaman. "يومين";
                } elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " أيام";
                } else
                {
                    return $zaman.  $dateArray[0] . " يوم";
                }
            }
            // handl weeks
            if((new self)->isWeek($time))
            {
                if($dateArray[0] == 1)
                {
                    return $zaman." أسبوع";
                } elseif($dateArray[0] == 2)
                {
                    return $zaman. " أسبوعين";
                } elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " أسابيع";
                } else
                {
                    return $zaman.  $dateArray[0] . " أسبوع";
                }
            }
            // handl months
            if((new self)->isMonth($time))
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."شهر";
                } elseif($dateArray[0] == 2)
                {
                    return $zaman. " شهرين";
                } elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " شهور";
                } else
                {
                    return $zaman.  $dateArray[0] . " شهر";
                }
            }
            // handl years
            if((new self)->isYear($time))
            {
                if($dateArray[0] == 1)
                {
                    return $zaman."سنة";
                } elseif($dateArray[0] == 2)
                {
                    return $zaman. " سنتين";
                } elseif($dateArray[0] >= 3 && $dateArray[0] <= 10  )
                {
                    return $zaman. $dateArray[0] . " سنوات";
                } else
                {
                    return $zaman.  $dateArray[0] . " سنة";
                }
            }
        }

        public function isSecond($time)
        {
            Str::startsWith($time,'second') ? $isSecond = true : $isSecond = false ;
            return $isSecond;
        }

        public function isMinute($time)
        {
            Str::startsWith($time,'minute') ? $isMinute = true : $isMinute = false ;
            return $isMinute;
        }

        public function isHour($time)
        {
            Str::startsWith($time,'hour') ? $isHour = true : $isHour = false ;
            return $isHour;
        }

        public function isDay($time)
        {
            Str::startsWith($time,'day') ? $isDay = true : $isDay = false ;
            return $isDay;
        }

        public function isWeek($time)
        {
            Str::startsWith($time,'week') ? $isWeek = true : $isWeek = false ;
            return $isWeek;
        }

        public function isMonth($time)
        {
            Str::startsWith($time,'month') ? $isMonth = true : $isMonth = false ;
            return $isMonth;
        }

        public function isYear($time)
        {
            Str::startsWith($time,'year') ? $isYear = true : $isYear = false ;
            return $isYear;
        }

    }
