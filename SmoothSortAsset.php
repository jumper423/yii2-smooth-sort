<?php

namespace jumper423\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class SmoothSortAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/smooth-sort/src';

    public $js = [
        'jquery.smooth-sort.js',
    ];

    public function init()
    {
        parent::init();
        $this->depends[] = JqueryAsset::className();
    }
}