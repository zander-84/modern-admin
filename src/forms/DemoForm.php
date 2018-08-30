<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/25
 * Time: 20:26
 */

namespace zander84\modernadmin\forms;
use Yii;
use zander84\modernadmin\forms\common\ActiveForm;
use zander84\modernadmin\models\Demo;


class DemoForm extends ActiveForm
{

    public $img_obj;
    public $name;
    public $img;
    public $email;
    public $phone;
    public $password;
    public $info;
    public $sex;
    public $is_high;
    public $is_single;
    public $is_married;
    public $hobby;
    public $foods;
    public $waking_time;
    public $rest_time;
    public $today;

    public $ids;
    /**
     * {@inheritdoc}
     */

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['insert_date', 'update_date'], 'safe'],
            //[['hobby','name','today'], 'required'],

            [['img', 'name', 'email', 'phone', 'password', 'info', 'sex', 'is_high', 'is_married', 'is_single', 'waking_time', 'rest_time', 'today', 'ids'], 'string', 'max' => 255],

            [['img_obj'],'file','skipOnEmpty' => true, 'extensions' => 'jpg,jpeg,png', 'maxSize' => 2048*2048],
                [['hobby', 'foods'], 'each', 'rule'=>['string']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        $demo = new Demo();
        return [
            'name' =>$demo->getAttributeLabel('name'),
            'img' => $demo->getAttributeLabel('img'),
            'email' => $demo->getAttributeLabel('email'),
            'phone' => $demo->getAttributeLabel('phone'),
            'password' => $demo->getAttributeLabel('password'),
            'info' => $demo->getAttributeLabel('info'),
            'sex' => $demo->getAttributeLabel('sex'),
            'is_high' => $demo->getAttributeLabel('is_high'),
            'is_married' => $demo->getAttributeLabel('is_married'),
            'is_single' => $demo->getAttributeLabel('is_single'),
            'hobby' => $demo->getAttributeLabel('hobby'),
            'foods' => $demo->getAttributeLabel('foods'),
            'waking_time' => $demo->getAttributeLabel('waking_time'),
            'rest_time' => $demo->getAttributeLabel('rest_time'),
            'today' => $demo->getAttributeLabel('today'),

        ];
    }


    public function saveDemo()
    {
        $model = $this->real_model ? $this->real_model : new Demo();
        $model->name = $this->name;
        $model->img = $this->img;
        $model->email = $this->email;
        $model->phone = $this->phone;
        $model->password = $this->password;
        $model->info = $this->info;
        $model->sex = $this->sex;
        $model->is_high = $this->is_high;
        $model->is_married = $this->is_married;
        $model->is_single = $this->is_single;
        $model->waking_time = $this->waking_time;
        $model->rest_time = $this->rest_time;
        $model->today = $this->today;


        if( $this->hobby) {
            $model->hobby = implode(',', $this->hobby);
        }

        if($this->foods) {
            $model->foods = implode(',', $this->foods);
        }
        if($model->save(false)){
            $_POST['id'] = $model->id;
            return true;
        }else{
            return false;
        }
    }


    public  function findOne($params)
    {
        $mode = Demo::findOne($params);
        if($mode){
            $this->real_model = $mode;
            $this->hobby = explode(',',$mode->hobby);
            $this->foods = explode(',',$mode->foods);
            $this->name = $mode->name;
            $this->img = $mode->img;
            $this->email = $mode->email;
            $this->phone = $mode->phone;
            $this->password = $mode->password;
            $this->info = $mode->info;
            $this->sex = $mode->sex;
            $this->is_high = $mode->is_high;
            $this->is_married = $mode->is_married;
            $this->is_single = $mode->is_single;
            $this->waking_time = $mode->waking_time;
            $this->rest_time = $mode->rest_time;
            $this->today = $mode->today;
        }
        return $this;
    }

    public function delByID($id)
    {
        $model = Demo::findOne(['id'=>$id]);
        if($model){
            return $model->delete();
        }
        return false;
    }

}
