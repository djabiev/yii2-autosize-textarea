<?php

namespace djabiev\yii\assets;

use Yii;

class AutosizeTextareaAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/autosize/dist';
    public $js = [
        'autosize.min.js',
    ];

    /**
     * If you override this method, make sure you call the parent implementation in the last.
     */
    public function init()
    {
        $js = <<<SCRIPT
$(function() {
    $("textarea").each(function(){
        autosize($(this));
    });
});
SCRIPT;
        Yii::$app->view->registerJs($js, \yii\web\View::POS_READY);

        parent::init();
    }
}
