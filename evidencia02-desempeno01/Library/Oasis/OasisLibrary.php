<?php

namespace Modules\Home\Http\Library\Oasis;

use Illuminate\Support\Str;

/**
 * @version <DEV>
 * @since 2021/Octuber/26
 */

class OasisLibrary {

    /**
     * @todo Change Date to String for Oaisis Standar
     * @param Date type request <Required MM-DD-YYYY>;
     * @return YYYYMMDD;
     */

    public static function dateToStr( $date ) {
        $date_format = "";
        if (strpos($date, '-')) {
            $date_elements = explode('-', $date);
            $date_format = "{$date_elements[2]}{$date_elements[0]}{$date_elements[1]}";
        }
        return $date_format;
    }

    /**
     * @todo Change String to Date for HHS Standar
     * @param Date type request <Required YYYYMMDD>;
     * @return MM-DD-YYYY;
     */
    public static function strToDate( $date ) : string {
        $date_format = "";
        if ($date != "") {
            $year = Str::substr($date, 0, 4);
            $month = Str::substr($date, 4, 2);
            $day = Str::substr($date, 6, 2);
            $date_format = "{$month}-{$day}-{$year}";
        }
        return $date_format;
    }

}
