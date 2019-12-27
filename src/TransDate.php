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
            $theDate < Carbon::now() ? $zaman = 'قبل ' : $zaman = 'بعد ';
            $theDate = $theDate->diffForHumans();
            $dateArray = explode(' ', $theDate); //return $dateArray; // ["1","day","ago"]
            //$period is number, $dateArray[1] is the time $dateArray[0] , $dateArray[2] is the word ago
            $time = $dateArray[1];
            $period = $dateArray[0];
            //$dateArray[0] >= 3 ?  $period = (new self)->TransNumbers($dateArray[0]) : $period = $dateArray[0];
            if ((new self())->isSecond($time)) {
                return (new self())->handelSeconds($period, $zaman);
            }
            // handl minutes
            if ((new self())->isMinute($time)) {
                return (new self())->handelMinutes($period, $zaman);
            }
            // handl hours
            if ((new self())->isHour($time)) {
                return (new self())->handelHours($period, $zaman);
            }
            // handl days
            if ((new self())->isDay($time)) {
                return (new self())->handelDays($period, $zaman);
            }
            // handl weeks
            if ((new self())->isWeek($time)) {
                return (new self())->handelWeeks($period, $zaman);
            }
            // handl months
            if ((new self())->isMonth($time)) {
                return (new self())->handelMonths($period, $zaman);
            }
            // handl years
            if ((new self())->isYear($time)) {
                return (new self())->handelYears($period, $zaman);
            }
        }

        public function isSecond($time)
        {
            Str::startsWith($time, 'second') ? $isSecond = true : $isSecond = false;

            return $isSecond;
        }

        public function isMinute($time)
        {
            Str::startsWith($time, 'minute') ? $isMinute = true : $isMinute = false;

            return $isMinute;
        }

        public function isHour($time)
        {
            Str::startsWith($time, 'hour') ? $isHour = true : $isHour = false;

            return $isHour;
        }

        public function isDay($time)
        {
            Str::startsWith($time, 'day') ? $isDay = true : $isDay = false;

            return $isDay;
        }

        public function isWeek($time)
        {
            Str::startsWith($time, 'week') ? $isWeek = true : $isWeek = false;

            return $isWeek;
        }

        public function isMonth($time)
        {
            Str::startsWith($time, 'month') ? $isMonth = true : $isMonth = false;

            return $isMonth;
        }

        public function isYear($time)
        {
            Str::startsWith($time, 'year') ? $isYear = true : $isYear = false;

            return $isYear;
        }

        public function handelSeconds($period, $zaman)
        {
            if ($period == 1) {
                return $zaman.'ثانية واحدة';
            } elseif ($period == 2) {
                return $zaman.'ثانيتين';
            } elseif ($period >= 3 && $period <= 10) {
                return $zaman.$this->TransNumbers($period).' ثواني';
            } else {
                return $zaman.$this->TransNumbers($period).' ثانية';
            }
        }

        public function handelMinutes($period, $zaman)
        {
            if ($period == 1) {
                return $zaman.'دقيقة واحدة';
            } elseif ($period == 2) {
                return $zaman.'دقيقتين';
            } elseif ($period >= 3 && $period <= 10) {
                return $zaman.$this->TransNumbers($period).' دقائق';
            } else {
                return $zaman.$this->TransNumbers($period).' دقيقة';
            }
        }

        public function handelHours($period, $zaman)
        {
            if ($period == 1) {
                return $zaman.'ساعة';
            } elseif ($period == 2) {
                return $zaman.'ساعتين';
            } elseif ($period >= 3 && $period <= 10) {
                return $zaman.$this->TransNumbers($period).' ساعات';
            } else {
                return $zaman.$this->TransNumbers($period).' ساعة';
            }
        }

        public function handelDays($period, $zaman)
        {
            if ($period == 1) {
                return $zaman.' يوم';
            } elseif ($period == 2) {
                return $zaman.'يومين';
            } elseif ($period >= 3 && $period <= 10) {
                return $zaman.$this->TransNumbers($period).' أيام';
            } else {
                return $zaman.$this->TransNumbers($period).' يوم';
            }
        }

        public function handelWeeks($period, $zaman)
        {
            if ($period == 1) {
                return $zaman.' أسبوع';
            } elseif ($period == 2) {
                return $zaman.' أسبوعين';
            } elseif ($period >= 3 && $period <= 10) {
                return $zaman.$this->TransNumbers($period).' أسابيع';
            } else {
                return $zaman.$this->TransNumbers($period).' أسبوع';
            }
        }

        public function handelMonths($period, $zaman)
        {
            if ($period == 1) {
                return $zaman.'شهر';
            } elseif ($period == 2) {
                return $zaman.' شهرين';
            } elseif ($period >= 3 && $period <= 10) {
                return $zaman.$this->TransNumbers($period).' شهور';
            } else {
                return $zaman.$this->TransNumbers($period).' شهر';
            }
        }

        public function handelYears($period, $zaman)
        {
            if ($period == 1) {
                return $zaman.'سنة';
            } elseif ($period == 2) {
                return $zaman.' سنتين';
            } elseif ($period >= 3 && $period <= 10) {
                return $zaman.$this->TransNumbers($period).' سنوات';
            } else {
                return $zaman.$this->TransNumbers($period).' سنة';
            }
        }

        protected function TransNumbers($value)
        {
            if (is_string($value)) {
                $arabic_eastern = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
                $arabic_western = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

                return str_replace($arabic_western, $arabic_eastern, $value);
            }

            return $value;
        }
    }
