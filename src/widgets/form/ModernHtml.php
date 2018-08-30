<?php
namespace zander84\modernadmin\widgets\form;
use yii\base\InvalidParamException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Created by PhpStorm.
 * User: M
 * Date: 2017/8/13
 * Time: 下午4:01
 */

class ModernHtml extends Html{

    protected static function activeListInput($type, $model, $attribute, $items, $options = [])
    {
        $name = isset($options['name']) ? $options['name'] : static::getInputName($model, $attribute);
        $selection = isset($options['value']) ? $options['value'] : static::getAttributeValue($model, $attribute);

        if (!array_key_exists('unselect', $options)) {
            $options['unselect'] = '';
        }
        else{
            if(isset($options['unselect']) && $options['unselect']===false){
                unset($options['unselect']);
            }
        }

        if (!array_key_exists('id', $options)) {
            $options['id'] = static::getInputId($model, $attribute);
        }
        return static::$type($name, $selection, $items, $options);
    }

    public static function getAttributeName($attribute)
    {
        if (preg_match(static::$attributeRegex, $attribute, $matches)) {
            return $matches[0];
        }

        throw new InvalidParamException('Attribute name must contain word characters only.');
    }

}