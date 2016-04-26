<?php
namespace yarcode\fa;

use yii\web\AssetBundle;

class FontAwesomeBundle extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public $css = [
        'css/font-awesome.min.css'
    ];
}
