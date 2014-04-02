<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
<head prefix="og: http://ogp.me/ns#
    fb: http://ogp.me/ns/fb#
    article: http://ogp.me/ns/article#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
    <meta charset="<?php echo Yii::app()->charset; ?>"/>
    <meta name="keywords" content="<?php echo $this->keywords; ?>"/>
    <meta name="description" content="<?php echo $this->description; ?>"/>
    <meta property="og:title" content="<?php echo CHtml::encode($this->pageTitle); ?>"/>
    <meta property="og:description" content="<?php echo $this->description; ?>"/>
    <?php
    $mainAssets = Yii::app()->AssetManager->publish(Yii::app()->theme->basePath . "/web/");

    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/flexslider.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/prettyPhoto.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/camera.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/jquery.bxslider.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/style.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/green.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/bootstrap-switch.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/fix.css');

    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/blog.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/prettify.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/modernizr.custom.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/toucheffects.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.easing.1.3.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.bxslider.min.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.prettyPhoto.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.cookie.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.flexslider.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/bootstrap-switch.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/animate.js');

    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/custom.js');
    ?>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php $wide = ($_COOKIE['mode'] == 'wide') ? true : false; ?>

    <script>
        jQuery(document).ready(function ($) {
            var mode = 'boxed';
            $("#make-wide").click(function () {
                if ($('#wrapper').hasClass("boxed")) {

                    $('#wrapper').removeClass("boxed");
                    $('#root-container').removeClass("container");

                    $('#top-nav-hook').removeClass("container");
                    $('#top-nav-hook').addClass("container-fluid");

                    $('#top-nav-logo').removeClass("container");
                    $('#top-nav-logo').addClass("container-fluid");

                    mode = 'wide';

                } else {

                    $.cookie($('#wrapper').addClass("boxed"));
                    $('#root-container').addClass("container");

                    $('#top-nav-hook').removeClass("container-fluid");
                    $('#top-nav-hook').addClass("container");

                    $('#top-nav-logo').removeClass("container-fluid");
                    $('#top-nav-logo').addClass("container");

                    mode = 'boxed';
                }
                $.cookie("mode", mode, {expires: 365, path: '/'});
                return false;
            });
        });
    </script>
</head>

<body>

<div id="wrapper" class="<?php echo $wide ? '' : 'boxed'; ?>">
    <!-- start header -->
    <header>
        <div class="top">
            <div id="top-nav-hook" class="<?php echo $wide ? 'container-fluid' : 'container'; ?>">
                <div class="row">
                    <a href="#" id="make-wide" class="btn btn-inverse btn-mini pull-left" style="margin: 0px 10px 10px 10px;">&nbsp;<i class="fa fa-expand fa-2"></i>&nbsp;</a>

                    <div class="pull-right">
                        <p class="topcontact"><i class="icon-phone"></i> +7 929 6078021, +7 985 6006130, +7 495 6516119</p>
                    </div>

                </div>
            </div>
        </div>

        <div id="top-nav-logo" class="<?php echo $wide ? 'container-fluid' : 'container'; ?>">
            <div class="row nomargin">
                <div class="span1">
                    <div class="logo">
                        <a href="/"><img src="/web/images/cork-logo.png" alt=""/></a>
                    </div>
                </div>
                <div class="span11 pull-right">
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', array('name' => 'top-menu')); ?>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <?php if ($this->id == 'site' && $this->action->id == 'index') $this->renderPartial('//layouts/_slider'); ?>

    <?php //$this->widget('application.components.widgets.HomeCarousel', array('limit' => 32)); ?>

    <!-- container -->
    <div id='root-container' class='<?php echo $wide ? '' : 'container'; ?>'>
        <!-- flashMessages -->
        <?php $this->widget('yupe\widgets\YFlashMessages'); ?>
        <!-- breadcrumbs -->
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            array(
                'links' => $this->breadcrumbs,
            )
        );?>
        <div class="row-fluid">
            <div class="span12">
                <!-- content -->
                <section class="span12 content">
                    <?php echo $content; ?>
                </section>
                <!-- content end-->
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php $this->renderPartial('//layouts/_footer'); ?>
    <!-- footer end -->

    <!-- container end -->
    <?php $this->widget(
        "application.modules.contentblock.widgets.ContentBlockWidget",
        array("code" => "STAT", "silent" => true)
    ); ?>
</body>
</html>
