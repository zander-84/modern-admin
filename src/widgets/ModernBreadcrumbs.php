<?php
namespace zander84\modernadmin\widgets;
use yii\base\Widget;
use yii\helpers\Url;

class ModernBreadcrumbs extends Widget
{

    public $currentPage = '';

    //____ [['url'=>[]','name'=>'', 'active'=>false]]
    public $pageList = [];

    public function run ()
    {
        $html = '<div class="content-header row">';
        $html .=    '<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">';
        $html .=        '<h3 class="content-header-title mb-0 d-inline-block">'.$this->currentPage.'</h3>';
        $html .=            '<div class="row breadcrumbs-top d-inline-block">';
        $html .=                '<div class="breadcrumb-wrapper col-12">';
        $html .=                    ' <ol class="breadcrumb">';

        foreach ($this->pageList as $item){
            $active = isset($item['active']) && $item['active'] ? 'active' : '';
            $data_pjax = isset($item['data-pjax']) && !$item['data-pjax'] ? 'data-pjax=0' : '';
            if($active){

                $html .= '<li class="breadcrumb-item '.$active.' ">'.$item['name'].'</a>';
            }else{
                $html .= '<li class="breadcrumb-item "><a '.$data_pjax.' href="'.Url::to($item['url']).'">'.$item['name'].'</a>';
            }
        }

        $html .=                    '</ol>';
        $html .=                '</div>';
        $html .=            '</div>';
        $html .=    '</div>';
        $html .= '</div>';

        return $html;
    }



}