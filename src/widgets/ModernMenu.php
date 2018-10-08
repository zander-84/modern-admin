<?php
namespace zander84\modernadmin\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class ModernMenu extends Widget
{


    public $items;
    public $dashboard_url = 'modern/index';
    public $is_multitabs = false;

    public function run ()
    {
        return Html::tag('ul', $this->renderItems($this->items), ['class'=>'navigation navigation-main', 'id'=>'main-menu-navigation', 'data-menu'=>'menu-navigation']);
    }


    protected function renderItems($items, $counts=0)
    {
        $html = '';
        foreach ($items as $item){

            $label = $item['label'];
            $icon = isset($item['icon']) ? $item['icon'] : null;
            $options = isset($item['options']) ? $item['options'] : [];

            if(isset($item['url']) && $item['url']){
                $href =  Url::to($item['url']);
                $breadcrumbs = isset($item['breadcrumbs']) ? $item['breadcrumbs']:[];
                $is_active = $this->isActive($item['url'], $breadcrumbs);

            }else{
                $href = '#';
                $is_active = false;
            }
            $active_options = $is_active ? ['class' => 'active'] : [];

            if(isset($item['items']) && $item['items']){

                $html .=  Html::tag('li',
                    Html::tag('a',$this->renderIcon($icon).$this->renderLable($label,['class'=>'menu-title']),['href'=>$href]).
                    Html::tag('ul', $this->renderItems($item['items'],1), ['class'=>'menu-content']),
                    ['class'=>'nav-item']
                );
            }
            else{

                if($this->is_multitabs){
                    $counts_options = ['class' => 'multitabs', 'href' => $href, 'data-type' => "info", 'data-iframe'=>"true"];
                    $counts_1_options = ['class' => 'menu-item multitabs', 'href' => $href, 'data-type' => "info", "data-iframe" => "true"];
                }else{
                    $counts_1_options = ['class' => 'menu-item', 'href' => $href];
                    $counts_options = ['href' => $href];
                }


                if($counts == 1) {
                    $html .= Html::tag(
                        'li',
                        Html::tag('a', $label, $counts_1_options),
                        $active_options
                    );
                }else{
                    $html .= Html::tag(
                        'li',
                        Html::tag('a', $this->renderIcon($icon).$this->renderLable($label, ['class'=>'menu-title']), $counts_options),
                        array_merge(['class' => "nav-item"], $active_options)
                    );
                }
            }
        }

        return $html;
    }


    protected function renderIcon($icon)
    {
        if($icon) {
            return Html::tag('i', '', ['class' => $icon]);
        }
    }


    protected function renderLable($label, $label_options)
    {
        if($label) {
            return Html::tag('span', $label, $label_options);
        }
    }


    protected function isActive($item, $breadcrumbs)
    {
        $route = Yii::$app->controller->getRoute();

        if($route == $this->dashboard_url ){
            if(isset($item['id']) && Yii::$app->request->get('id') == $item['id']){
                return true;
            }else{
                return false;
            }
        }else{
            if(isset($item[0]) && trim($item[0],'/') == $route){
                return true;
            }elseif (in_array('/'.trim($route,'/'), $breadcrumbs)){
                return true;
            }
            else{
                return false;
            }
        }
    }
}