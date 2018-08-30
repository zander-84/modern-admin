<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/23
 * Time: 21:39
 */

namespace zander84\modernadmin\helpers;


class HtmlHelper
{

    public static function column($width)
    {
        $defalut = [12,12,12,12,12];

        if (is_string($width) or is_numeric($width)){
            $defalut = [$width,$width,12,12,12];
        }elseif (is_array($width)){
            $defalut[0] = isset($width[0]) ? $width[0]:$defalut[0];
            $defalut[1] = isset($width[1]) ? $width[1]:$defalut[1];
            $defalut[2] = isset($width[2]) ? $width[2]:$defalut[2];
            $defalut[3] = isset($width[3]) ? $width[3]:$defalut[3];
            $defalut[4] = isset($width[4]) ? $width[4]:$defalut[4];
        }

       return ' col-xl-'.$defalut[0].
           ' col-lg-'.$defalut[1].
           ' col-md-'.$defalut[2].
           ' col-sm-'.$defalut[3].
           ' col-'.$defalut[4];

    }
    
}