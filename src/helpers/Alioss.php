<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 2018/8/23
 * Time: 21:39
 */

namespace zander84\modernadmin\helpers;
use OSS\OssClient;
use Yii;
use yii\web\UploadedFile;

class Alioss
{
    public $accessKeyId;
    public $accessKeySecret;
    public $endpoint;
    public $bucket;
    public $dir;
    public $readPath;
    public $prefix = '';

    public function getInstance($model, $attribute)
    {
        return UploadedFile::getInstance($model, $attribute);
    }

    public function getInstances($model, $attribute)
    {
        return UploadedFile::getInstances($model, $attribute);
    }

    public function getInstanceByName($name)
    {
        return UploadedFile::getInstanceByName($name);
    }
    

    //批量
    //______________________________________________________________________
    public function getInstancesByName($name)
    {
        return UploadedFile::getInstancesByName($name);
    }
    public  function initForOSS($file_object)
    {
        $security = Yii::$app->getSecurity();
        $prefix = $this->prefix;
        $filename = $prefix . uniqid() . $security->generateRandomString(8) . '.' . $file_object->extension;

        return ['name' =>$filename, 'content' => file_get_contents($file_object->tempName) ];
    }

    public  function uploadImg($fileObject)
    {
        $fileInfo = $this->initForOSS($fileObject);

        $accessKeyId = $this->accessKeyId;
        $accessKeySecret = $this->accessKeySecret;
        $endpoint = $this->endpoint;
        $bucket = $this->bucket;
        $dir = trim($this->dir,'/');
        $readPath =trim($this->readPath,'/').'/'.$dir.'/';

        try{
            $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
            $ossClient->putObject($bucket,$dir.'/'.$fileInfo['name'], $fileInfo['content']);
            return $readPath.$fileInfo['name'];
        }catch (\Exception $e){
            return false;
        }

    }

    public function deleteImg($filename)
    {

        $accessKeyId = $this->accessKeyId;
        $accessKeySecret = $this->accessKeySecret;
        $endpoint = $this->endpoint;
        $bucket = $this->bucket;

        try{
            $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
            $ossClient->deleteObject($bucket, $this->dir.'/'.basename($filename));
            return true;
        }catch (\Exception $e){
            return false;
        }

    }

    public  function changeImg($fileObject, $oldfilename=null)
    {
        if($oldfilename){
            if(!$this->deleteImg($oldfilename)){
                return false;
            }
        }

        return $this->uploadImg($fileObject);
    }



}