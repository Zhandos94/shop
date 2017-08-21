<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/prettyPhoto.css',
        'css/price-range.css',
        'css/animate.css',
	    'css/main.css',
	    'css/responsive.css',
        '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'
];


    public $js = [
//	    'js/bootstrap.min.js',
//        'js/jquery.js',
	    'js/jquery.scrollUp.min.js',
	    'js/price-range.js',
        'js/jquery.prettyPhoto.js',
        'js/main.js',
        'js/plugin/jquery.cookie.js',
        'js/plugin/jquery.dcjqaccordion.2.9.js',
        'https://code.jquery.com/ui/1.12.1/jquery-ui.js',
    ];
//<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
//<link rel="stylesheet" href="/resources/demos/style.css">
//<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
//<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
