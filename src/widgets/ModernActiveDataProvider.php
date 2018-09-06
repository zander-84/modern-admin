<?php

namespace zander84\modernadmin\widgets;

use yii\data\ActiveDataProvider;
use Yii;

class ModernActiveDataProvider extends ActiveDataProvider
{

    public function __construct ($config,$orderby='id', $sort = false)
    {

        if( $config instanceof  yii\db\ActiveQuery){
            $conf = $config;
            $config = [];
            $config['query'] = $conf;
        }
        if($orderby){
            $config['query'] = $config['query']->addOrderBy([$orderby => SORT_DESC]);
        }
        isset($config['pagination']) || $config['pagination']['pageSize'] = 10;

        isset($config['sort']) || $config['sort'] = false;

        parent::__construct($config);
    }



}