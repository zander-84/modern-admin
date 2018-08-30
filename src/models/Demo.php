<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/25
 * Time: 20:26
 */

namespace zander84\modernadmin\models;
use Yii;
/**
 * This is the model class for table "demo".
 *
 * @property int $id
 * @property string $name text
 * @property string $img image
 * @property string $email Icon
 * @property string $phone Prepend
 * @property string $password password
 * @property string $info textarea
 * @property string $sex dropdownlist
 * @property string $is_high RadioList
 * @property string $is_married checkbox
 * @property string $is_single Switch
 * @property string $hobby DropMultiDownList
 * @property string $foods tags
 * @property string $waking_time start_time
 * @property string $rest_time end_time
 * @property string $today time
 * @property string $insert_date
 * @property string $update_date
 */
class Demo extends \yii\db\ActiveRecord
{

    public $img_obj;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'demo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['insert_date', 'update_date'], 'safe'],
            //[['hobby','name','today'], 'required'],

            [['img', 'name', 'email', 'phone', 'password', 'info', 'sex', 'is_high', 'is_married', 'is_single', 'waking_time', 'rest_time', 'today'], 'string', 'max' => 255],

            [['img_obj'],'file','skipOnEmpty' => true, 'extensions' => 'jpg,jpeg,png', 'maxSize' => 2048*2048],
                [['hobby', 'foods'], 'each', 'rule'=>['string']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'img' => Yii::t('app', 'Img'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'password' => Yii::t('app', 'Password'),
            'info' => Yii::t('app', 'Info'),
            'sex' => Yii::t('app', 'Sex'),
            'is_high' => Yii::t('app', 'Is High'),
            'is_married' => Yii::t('app', 'Is Married'),
            'is_single' => Yii::t('app', 'Is Single'),
            'hobby' => Yii::t('app', 'Hobby'),
            'foods' => Yii::t('app', 'Foods'),
            'waking_time' => Yii::t('app', 'Waking Time'),
            'rest_time' => Yii::t('app', 'Rest Time'),
            'today' => Yii::t('app', 'Today'),
            'insert_date' => Yii::t('app', 'Insert Date'),
            'update_date' => Yii::t('app', 'Update Date'),
        ];
    }


    public function saveDemo()
    {
        if( $this->hobby) {
            $this->hobby = implode(',', $this->hobby);
        }

        if($this->foods) {
            $this->foods = implode(',', $this->foods);
        }
        $this->save(false);

        if($this->errors){
            var_dump($this->errors);
            exit;
        }

        $this->hobby = explode(',', $this->hobby);
        $this->foods = explode(',', $this->foods);
    }
}
