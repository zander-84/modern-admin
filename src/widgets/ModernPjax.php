<?php
namespace zander84\modernadmin\widgets;
use Yii;
use yii\widgets\Pjax;

class ModernPjax extends Pjax
{
    public $enablePushState = false;
    public $timeout = false;

    public static function begin($config = [])
    {
        $config['class'] = get_called_class();

        isset($config['enablePushState']) || $config['enablePushState'] = false;
        isset($config['timeout']) || $config['timeout'] = false;

        /* @var $widget Widget */
        $widget = Yii::createObject($config);
        static::$stack[] = $widget;

        $view = $widget->getView();
        $view->registerJs('
            function modernPjaxBegin(e){
               var index = layer.load(1, {
                            shade: [0.3,"rgba(0, 0, 0, 0.2)"] 
                    });
            }
            function modernPjaxEnd(){
               layer.closeAll("loading");
              !function(e,n,a){var t=a("html"),i=a("body");a(\'a[data-action="collapse"]\').on("click",function(e){e.preventDefault(),a(this).closest(".card").children(".card-content").collapse("toggle"),a(this).closest(".card").find(\'[data-action="collapse"] i\').toggleClass("ft-minus ft-plus")}),a(\'a[data-action="expand"]\').on("click",function(e){e.preventDefault(),a(this).closest(".card").find(\'[data-action="expand"] i\').toggleClass("ft-maximize ft-minimize"),a(this).closest(".card").toggleClass("card-fullscreen")}),a(".scrollable-container").length>0&&a(".scrollable-container").perfectScrollbar({theme:"dark"}),a(\'a[data-action="reload"]\').on("click",function(){a(this).closest(".card").block({message:\'<div class="ft-refresh-cw icon-spin font-medium-2"></div>\',timeout:2000,overlayCSS:{backgroundColor:"#FFF",cursor:"wait"},css:{border:0,padding:0,backgroundColor:"none"}})}),a(\'a[data-action="close"]\').on("click",function(){a(this).closest(".card").removeClass().slideUp("fast")}),a(\'.card .heading-elements a[data-action="collapse"]\').on("click",function(){var e,n=a(this).closest(".card");parseInt(n[0].style.height,10)>0?(e=n.css("height"),n.css("height","").attr("data-height",e)):n.data("height")&&(e=n.data("height"),n.css("height",e).attr("data-height",""))});var n=a(".chartjs"),o=n.children("canvas").attr("height");if(n.css("height",o),i.hasClass("boxed-layout")&&(i.hasClass("vertical-overlay-menu")||i.hasClass("vertical-compact-menu"))){var s=a(".main-menu").width(),l=a(".app-content").position().left-s;i.hasClass("menu-flipped")?a(".main-menu").css("right",l+"px"):a(".main-menu").css("left",l+"px")}a(".nav-link-search").on("click",function(){a(this);var e=a(this).siblings(".search-input");e.hasClass("open")?e.removeClass("open"):e.addClass("open")})}(window,document,jQuery);      
            }
            $("#' . $config['id'] . '").off("pjax:send")
            $("#' . $config['id'] . '").off("pjax:success")
            $("#' . $config['id'] . '").on("pjax:send",modernPjaxBegin)
            $("#' . $config['id'] . '").on("pjax:success",modernPjaxEnd)
        ');


        return $widget;
    }
}