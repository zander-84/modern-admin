<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 2017/9/14
 * Time: 下午9:06
 */

namespace zander84\modernadmin\bootstrap;
use Yii;
use yii\base\BootstrapInterface;
use zander84\modernadmin\compones\Request;

class ModernInit implements BootstrapInterface{



    public function bootstrap($app)
    {


        $tmp = Yii::$app->components['request'];
        $tmp['class'] = Request::class;

        Yii::$app->setComponents(['request'=>$tmp]);

        //____ alias
        Yii::setAlias('@modern-layouts', '@vendor/zander-84/modern-admin/src/views/layouts');
        Yii::setAlias('@modern-sites', '@vendor/zander-84/modern-admin/src/views/sites');
        Yii::setAlias('@modern-views', '@vendor/zander-84/modern-admin/src/views');
        Yii::setAlias('@modern-demo', '@vendor/zander-84/modern-admin/src/views/demo');
        Yii::setAlias('@modern-assets', '@vendor/zander-84/modern-admin/src/views/assets');

        //____ brand
        if(!isset(Yii::$app->params['modern_dashboard']['brand'])){
            Yii::$app->params['modern_dashboard']['brand'] = 'Dashboard';
        }

        //____ icheck
        isset(Yii::$app->params['modern_dashboard']['icheck']['type']) || Yii::$app->params['modern_dashboard']['icheck']['type'] = 'flat';
        isset(Yii::$app->params['modern_dashboard']['icheck']['box']) || Yii::$app->params['modern_dashboard']['icheck']['box'] = 'purple';
        isset(Yii::$app->params['modern_dashboard']['icheck']['radio']) || Yii::$app->params['modern_dashboard']['icheck']['radio'] = 'purple';


        isset(Yii::$app->params['modern_dashboard']['theme_color']) || Yii::$app->params['modern_dashboard']['theme_color'] = 'warning';
        isset(Yii::$app->params['modern_dashboard']['theme_color_size']) || Yii::$app->params['modern_dashboard']['theme_color_size'] = '#FF9149';




        $defaults = [
            //____ 边框线条 menu-bordered
            'menu_bordered'=>'menu-bordered',

            //____     bg-blue-grey     bg-primary  bg-danger  bg-success bg-blue   bg-pink
            'nav_left' => 'bg-grey',
            //____     bg-blue-grey bg-gradient-x-grey-blue    bg-primary bg-gradient-x-primary
            //____     bg-danger bg-gradient-x-danger          bg-success  bg-gradient-x-success
            //____     bg-blue bg-gradient-x-blue              bg-cyan bg-gradient-x-cyan
            //____     bg-pink bg-gradient-x-pink
            'nav_right' => '',

            //____ navbar-semi-dark  navbar-light  如果是深色  bg-lighten无效
            'nav_dark_light' => 'navbar-semi-dark',

            //____ bg-lighten-[number]
            'nav_lighten' => 'bg-lighten-4',

            //____ menu-light menu-dark
            'meun_dark_light' =>'menu-light',
        ];

        $this->doStyle($defaults);

    }

    public function doStyle($defaults)
    {

        foreach ($defaults as $k=>$v){
            if( !isset(Yii::$app->params['modern_dashboard']['style'][$k]) ){
                Yii::$app->params['modern_dashboard']['style'][$k] = $v;
            }
        }

    }
}
