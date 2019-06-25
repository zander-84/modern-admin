<?php
namespace zander84\modernadmin\widgets;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use zander84\modernadmin\helpers\HtmlHelper;

class ModernCard
{


    public static function beginRow($options = ['class'=>'row match-heights'])
    {
       return ModernLayout::beginTag([['div',$options]]);
    }

    public static function endRow()
    {
        return ModernLayout::endTag(['div']);
    }

    public static function beginColumn($col = 12, $class='')
    {
        return ModernLayout::beginTag([['div',['class'=>HtmlHelper::column($col).' '.$class ]]]);
    }

    public static function endColumn()
    {
        return ModernLayout::endTag(['div']);
    }

    //public static function

    public static function beginCard ( $card_config=[] )
    {
        $card_config = self::cardDefaultOptions($card_config);

        $card_html = ModernLayout::beginTag([
            ['div',['class'=>HtmlHelper::column($card_config['col'])]],
            ['div',['class'=>$card_config['cardClass']]],
        ]);

            if(isset($card_config['cardHeader']['enable']) && $card_config['cardHeader']['enable']){
                $card_html .= ModernLayout::beginTag([['div',['class'=>'card-header']]]);

                    if($card_config['cardHeader']['title']){
                        $card_html .= ModernLayout::beginTag([['h4',['class'=>'card-title']]]);
                        $card_html .= $card_config['cardHeader']['title'];
                        $card_html .= ModernLayout::endTag(['h4']);
                    }

                    $card_html .= ModernLayout::beginTag([['a',['class'=>'heading-elements-toggle']],['i',['class'=>'la la-ellipsis-v font-medium-3']]]);
                    $card_html .= ModernLayout::endTag(['i','a']);

                    $card_html .= ModernLayout::beginTag([['div',['class'=>'heading-elements']],['ul',['class'=>'list-inline mb-0']]]);
                        if($card_config['cardHeader']['actions']['collapse']){
                            $card_html .= ModernLayout::beginTag([['li'],['a',['data-action'=>'collapse']],['i', ['class'=>'ft-minus']]]);
                            $card_html .= ModernLayout::endTag(['i','a','li']);
                        }
                        if($card_config['cardHeader']['actions']['reload']){
                            $card_html .= ModernLayout::beginTag([['li'],['a',['href'=>$card_config['cardHeader']['actions']['reload'],'style'=>['color'=>'#6B6F82']]],['i', ['class'=>'ft-rotate-cw']]]);
                            $card_html .= ModernLayout::endTag(['i','a','li']);
                        }
                        if($card_config['cardHeader']['actions']['expand']){
                            $card_html .= ModernLayout::beginTag([['li'],['a',['data-action'=>'expand']],['i', ['class'=>'ft-maximize']]]);
                            $card_html .= ModernLayout::endTag(['i','a','li']);
                        }
                    $card_html .= ModernLayout::endTag(['ul','div']);

                $card_html .= ModernLayout::endTag(['div']);
            }

            $card_html .= ModernLayout::beginTag([
                ['div',['class'=>'card-content collapse show']],
                ['div',['class'=>'card-body']],
            ]);

                if($card_config['cardText']){
                    $card_html .= ModernLayout::beginTag([
                        ['div',['class'=>'card-text']],
                        ['p']
                    ]);
                    $card_html .= $card_config['cardText'];
                    $card_html .= ModernLayout::endTag(['p', 'div']);
                }

        return $card_html;
    }

    public static function endCard()
    {
        return ModernLayout::endTag(['div','div','div','div']);
    }

    protected static function cardDefaultOptions($card_config = [])
    {
        isset($card_config['col']) || $card_config['col'] = 6;
        isset($card_config['cardClass']) || $card_config['cardClass'] = '';
        $card_config['cardClass'] ='card '.$card_config['cardClass'];

        isset($card_config['cardHeader']['enable']) || $card_config['cardHeader']['enable'] = false;
        isset($card_config['cardHeader']['title']) || $card_config['cardHeader']['title'] = 'Info';
        isset($card_config['cardHeader']['actions']['collapse']) || $card_config['cardHeader']['actions']['collapse'] = true;
        isset($card_config['cardHeader']['actions']['reload']) || $card_config['cardHeader']['actions']['reload'] = true;
        isset($card_config['cardHeader']['actions']['expand']) || $card_config['cardHeader']['actions']['expand'] = true;

        isset($card_config['cardText']) || $card_config['cardText'] = false;

        return $card_config;
    }


}
