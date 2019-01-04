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

        isset($config['pagination']) || $config['pagination']['pageSize'] = 10;
        isset($config['sort']) || $config['sort'] = false;

        if($orderby && !isset($_GET['sort'])){
            $config['query'] = $config['query']->addOrderBy([$orderby => SORT_DESC]);
        }
        parent::__construct($config);
    }



}