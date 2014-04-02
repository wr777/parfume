<?php
$mainAssets = Yii::app()->AssetManager->publish(Yii::app()->theme->basePath . "/web/");
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/camera/camera.js');
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/camera/setting.js');
?>
<!-- section featured -->
<section id="featured">
    <!-- slideshow start here -->
    <div class="camera_wrap" id="camera-slide">

        <!-- slide 1 here -->
        <div data-src="img/slides/camera/slide1/img1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span6">

                            <h2 style="text-shadow: 3px 4px 2px rgba(150, 150, 150, 1);margin-top:200px" class="animated fadeInDown">
                                <strong>Напыляемое<span style="text-shadow: 3px 4px 2px #000;" class="colored">&nbsp;пробковое&nbsp;покрытие</span></strong>
                            </h2>
                            <a class="btn btn-large btn-danger" href="#buy-now"><i class="fa fa-rub"></i> Заказать прямо сейчас с 5% скидкой</a>

                        </div>
                        <div class="span6">
                            <img src="/web/images/vedro.png" alt="" class="animated bounceInDown delay1"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slide 2 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <img src="/web/images/colors-circle.png" alt=""/>
                        </div>
                        <div class="span6">
                            <h2 class="animated fadeInDown"><strong>Заказать <span class="colored">обратный звонок</span></strong></h2>

                            <p class="animated fadeInUp"> Укажите ваш телефон или электронную почту, мы свяжемся с вами в ближайшее время и ответим на все ваши вопросы.</p>

                            <?php echo CHtml::beginForm(array('//contacts'), 'post', array()); ?>
                            <?php echo CHtml::hiddenField('FeedBackForm[name]', 'callback-top', array()); ?>
                            <?php echo CHtml::hiddenField('FeedBackForm[email]', 'callback@isocork77.ru', array()); ?>
                            <?php echo CHtml::hiddenField('FeedBackForm[theme]', 'Callback me', array()); ?>
                            <div class="input-append">
                                <?php echo CHtml::textField('FeedBackForm[text]', '', array('rows' => 3, 'class' => 'span3 input-large')); ?>
                                <?php echo CHtml::htmlButton('Заказать', array('type' => 'submit', 'class' => 'btn btn-danger btn-large')); ?>
                            </div>
                            <?php CHtml::endForm(); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- slide 3 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
            <div class="camera_caption fadeFromLeft">

                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <iframe src="http://www.youtube.com/embed/bnDCKZPjRys?feature=player_embedded&controls=0&theme=light" width="50%" height="100%" frameborder="0" webkitAllowFullScreen="true" mozallowfullscreen="true"
                                    allowFullScreen="true"></iframe>
                        </div>
                        <div class="span6">
                            <h2 class="animated fadeInDown"><strong><span class="colored">Бонусная программа 2014 Изокорк Москва</span></strong> Приведи друга и получи <span class="colored">5%</span> на бонусную карту.</h2>

                            <p class="animated fadeInUp">

                            </p>
                            <!--<img src="img/slides/camera/slide3/browsers.png" alt="" class="animated bounceInDown delay1"/>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slideshow end here -->

</section>
<!-- /section featured -->