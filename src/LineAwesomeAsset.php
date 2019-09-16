<?php
namespace kilyakus\lineawesome;

class LineAwesomeAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/line-awesome';
    }
    public $css = [
        'css/line-awesome.css',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
