<?php

namespace zander84\modernadmin\widgets;

use yii\data\ActiveDataProvider;
use Yii;

class ModernActiveDataProvider extends ActiveDataProvider
{
    public $actionId;

    public function __construct ($config,$orderby='id', $actionId = null, $pagination = [], $sort = false)
    {

        if($actionId){
            Yii::$app->controller->action->id = $actionId;
        }
        if( $config instanceof  yii\db\ActiveQuery){
            $conf = $config;
            $config = [];
            $config['query'] = $conf;
        }
        if($orderby){
            $config['query'] = $config['query']->orderBy([$orderby => SORT_DESC]);
        }
        isset($config['pagination']['pageSize']) || $config['pagination']['pageSize'] = 10;
        (isset($config['pagination']['pageSize']) && !$config['pagination']['pageSize']) || $config['pagination']['pageSize'] = 10;
        isset($config['sort']) || $config['sort'] = false;

        parent::__construct($config);
    }



}