<?php
namespace zander84\modernadmin\widgets;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

class ModernLayout
{
    
    public static function beginTag($tags)
    {
        $begin_tags = '';
        foreach ($tags as $tag){
            if(!isset($tag[1])) $tag[1] = [];
            $begin_tags .= Html::beginTag($tag[0], $tag[1]);
        }
        return $begin_tags;
    }

    public static function endTag($tags)
    {
        $end_tags = '';
        foreach ($tags as $tag){
            $end_tags .=  Html::endTag($tag);
        }
        return $end_tags;
    }


}