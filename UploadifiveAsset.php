<?php

namespace flyok666\uploadifive;

use yii\web\AssetBundle;

class UploadifiveAsset extends AssetBundle {

    public $sourcePath = '@vendor/flyok666/yii2-uploadifive/assets';
    public $basePath = '@webroot/assets';
    public $css = ['uploadifive.css'];
    public $js = ['jquery.uploadifive.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
