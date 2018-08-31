<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/23
 * Time: 21:39
 */

namespace zander84\modernadmin\helpers;


class Helpers
{

    public static function badge($type='success',$content = '')
    {
        $allow_type = [
            'success' => 'success',
            'danger' => 'danger',
            'info' => 'info',
            'primary' => 'primary',
            'warning' => 'warning',
            'secondary' => 'secondary',
            'dark' => 'dark',
            'light' => 'light',
        ];
        if(isset($allow_type[$type])){
            return '<span class="badge badge-pill  badge-'.$allow_type[$type].'">'.$content.'</span>';
        }
        else{
            return '';
        }
    }
    
}