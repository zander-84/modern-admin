<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/25
 * Time: 20:26
 */

namespace zander84\modernadmin\forms;
use Yii;
use yii\base\Model;
use zander84\modernadmin\models\Demo;

class DemoSearchForm extends Model
{


    public $name;
    public $phone;
    public $sex;
    public $is_married;
    public $is_high;
    public $is_single;
    public $waking_time;
    public $rest_time;
    public $today;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['hobby','name','today'], 'required'],
            [['name'], 'string', 'max' => 10],
            [['phone', 'sex', 'is_high', 'is_married', 'is_single', 'waking_time', 'rest_time', 'today'], 'string', 'max' => 255],
        ];
    }


    public function query()
    {
       return Demo::find()
           ->andFilterWhere(['like', 'name', $this->name])
           ->andFilterWhere(['like', 'phone',$this->phone]);
    }

}
