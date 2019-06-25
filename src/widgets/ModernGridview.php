<?php

namespace zander84\modernadmin\widgets;

use yii\grid\GridView;
use Yii;


class ModernGridview extends GridView
{
    public $min_width = '100px';
    public $tableOptions = ['class' => 'table table-hover table-striped table-bordered '];
    public $nullDisplay;
    public $formatter;
    public $layout = "{summary}\n<p></p><div style=\"overflow-x: auto;\">{items}</div>\n{pager}";


    public function init ()
    {
        parent::init();
        if(!$this->pager){
            $this->pager = [
                //'options'=>['class'=>'hidden']//关闭自带分页
                'firstPageLabel' =>'First',
                'prevPageLabel' => 'Prev',
                'nextPageLabel' => 'Next',
                'lastPageLabel' => 'Last',
                'maxButtonCount' => 10,
                'pageCssClass'=>'page-item',
                'linkOptions'=>['class'=>'page-link'],
                'disabledListItemSubTagOptions'=>['tag' => 'a', 'class' => 'page-link'],

                'options' => ['class' => 'pagination pagination-flat '],
            ];
        }

    }

    public static function widget($config = [])
    {
        ob_start();
        ob_implicit_flush(false);
        try {
            /* @var $widget Widget */
            $config['class'] = get_called_class();
            $widget = Yii::createObject($config);

            //____ setting
            if($widget->min_width){
                $widget->tableOptions = array_merge($widget->tableOptions ,['style'=>'min-width:'.$widget->min_width]);
            }
            $widget->formatter = Yii::$app->getFormatter();
            $widget->formatter->nullDisplay = $widget->nullDisplay;


            $out = '';
            if ($widget->beforeRun()) {
                $result = $widget->run();
                $out = $widget->afterRun($result);
            }
        } catch (\Exception $e) {
            // close the output buffer opened above if it has not been closed already
            if (ob_get_level() > 0) {
                ob_end_clean();
            }
            throw $e;
        }

        return ob_get_clean() . $out;
    }

}
