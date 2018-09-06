<?php

namespace zander84\modernadmin\models\rbac;

use Yii;

/**
 * This is the model class for table "rbac_auth_assignment".
 *
 * @property string $item_name
 * @property string $user_id
 * @property int $created_at
 *
 * @property RbacAuthItem $itemName
 */
class RbacAuthAssignment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rbac_auth_assignment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_name', 'user_id'], 'required'],
            [['created_at'], 'integer'],
            [['item_name', 'user_id'], 'string', 'max' => 64],
            [['item_name', 'user_id'], 'unique', 'targetAttribute' => ['item_name', 'user_id']],
            [['item_name'], 'exist', 'skipOnError' => true, 'targetClass' => RbacAuthItem::className(), 'targetAttribute' => ['item_name' => 'name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_name' => Yii::t('app', 'Item Name'),
            'user_id' => Yii::t('app', 'User ID'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemName()
    {
        return $this->hasOne(RbacAuthItem::className(), ['name' => 'item_name']);
    }

    public static function remove($userid)
    {
        $auth = Yii::$app->authManager;
        $oldRole = $auth->getRolesByUser($userid);
        if($oldRole){
            if(!$auth->revokeAll($userid)){
                return false;
            }
        }
        return true;
    }

    public static function assign($userid, $roleid)
    {
        $auth = Yii::$app->authManager;
        $role = $auth->getRole($roleid);
        if(!$role){
            return false;
        }
        else{
            return $auth->assign($role, $userid);
        }
    }

    public static function getRoleNameByUser($userid)
    {
        $auth = Yii::$app->authManager;
        $role = $auth->getRolesByUser($userid);
        if($role){
            return (array_keys($role))[0];
        }
        return null;
    }
}
