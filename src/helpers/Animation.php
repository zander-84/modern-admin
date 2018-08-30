<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/30
 * Time: 15:01
 */

namespace zander84\modernadmin\helpers;

class Animation
{

    public static function modalSwalWithPjax($pjax, $type, $title='Good job!', $content= '')
    {
        $url = \Yii::$app->request->getUrl();
        $type === true && $type = 'success';
        $type === false && $type = 'error';

        $allow_type = [
            'success' => 'success',
            'error' => 'error',
            'info' => 'info',
            'warning' => 'warning',
            'question' => 'question',
        ];

        if(isset($allow_type[$type])){
            echo  '<script> layer.closeAll("loading");$(".modal").modal("hide"); swal("' . $title . '", "' . $content . '", "' . $allow_type[$type] . '");$.pjax.reload({ url:  "'.$url.'", container: "#'.$pjax.'",replace:false,timeout:false });</script>';
        }
    }
}