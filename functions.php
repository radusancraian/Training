<?php

/**Return a FontAwesome icon
 * @param $code
 * @return string
 */
    function i($code){

        $icon = '<i class="fa fa-'.$code.'"></i>';

        return $icon;

    }

/** Make the date look nice
 * @param $date
 * @return bool|string
 */
    function date_nice($date)
    {
        return date('M j Y h:i A', $date);
    }

