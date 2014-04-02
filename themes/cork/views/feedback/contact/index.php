<?php
$this->pageTitle = Yii::t('FeedbackModule.feedback', 'Contacts');
$this->breadcrumbs = array(Yii::t('FeedbackModule.feedback', 'Contacts'));
Yii::import('application.modules.feedback.FeedbackModule');
Yii::import('application.modules.install.InstallModule');
?>

<?php $this->widget('yupe\widgets\YFlashMessages'); ?>
<h1><?php echo Yii::t('FeedbackModule.feedback', 'Contacts'); ?></h1>

<section id="content">
    <div class="map">
        <div style="padding: 5px; border: 1px solid #CCC">
            <?php
            Yii::import('ext.gmap.*');
            $gMap = new EGMap();
            $gMap->zoom = 9;
            $gMap->setWidth('100%');
            $gMap->setHeight('300');

            $gMap->setCenter(55.930657, 37.641885);

            // Create marker
            $marker = new EGMapMarker(55.930657, 37.641885, array('title' => 'Демонстрация готовых объектов'));
            $gMap->addMarker($marker);


            $marker = new EGMapMarker( 55.705046, 37.622939, array('title' => 'Офис'));
            $gMap->addMarker($marker);


            $gMap->renderMap();
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span8">
                <h4>Свяжитесь с нами, заполнив контактную форму</h4>

                <div class="form">
                    <?php $form = $this->beginWidget(
                        'bootstrap.widgets.TbActiveForm',
                        array(
                            'id' => 'feedback-form',
                            'type' => 'vertical',
                            'inlineErrors' => true,
                            'htmlOptions' => array(
                                'class' => 'well',
                            )
                        )
                    ); ?>

                    <p class="note"><?php echo Yii::t('FeedbackModule.feedback', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('FeedbackModule.feedback', 'are required.'); ?></p>

                    <?php echo $form->errorSummary($model); ?>

                    <?php if ($model->type): ?>
                        <div class='row-fluid control-group <?php echo $model->hasErrors('type') ? 'error' : ''; ?>'>
                            <?php echo $form->dropDownListRow($model, 'type', $module->types, array('class' => 'span6', 'required' => true)); ?>
                        </div>
                    <?php endif; ?>

                    <div class='row-fluid'>

                        <div class='span6 field control-group <?php echo $model->hasErrors('name') ? 'error' : ''; ?>'>
                            <?php echo $form->textFieldRow($model, 'name', array('class' => 'span12', 'required' => true)); ?>
                        </div>

                        <div class='span6 field row-fluid control-group <?php echo $model->hasErrors('email') ? 'error' : ''; ?>'>
                            <?php echo $form->textFieldRow($model, 'email', array('class' => 'span12', 'required' => true)); ?>
                        </div>

                    </div>

                    <div class='row-fluid control-group <?php echo $model->hasErrors('theme') ? 'error' : ''; ?>'>
                        <?php echo $form->textFieldRow($model, 'theme', array('class' => 'span12', 'required' => true)); ?>
                    </div>

                    <div class='row-fluid control-group <?php echo $model->hasErrors('text') ? 'error' : ''; ?>'>
                        <?php echo $form->textAreaRow($model, 'text', array('class' => 'span12', 'rows' => 10, 'required' => true)); ?>
                    </div>

                    <?php if ($module->showCaptcha && !Yii::app()->user->isAuthenticated()): ?>
                        <?php if (CCaptcha::checkRequirements()): ?>

                            <?php echo $form->labelEx($model, 'verifyCode'); ?>

                            <?php $this->widget(
                                'CCaptcha',
                                array(
                                    'showRefreshButton' => true,
                                    'imageOptions' => array(
                                        'width' => '150',
                                    ),
                                    'buttonOptions' => array(
                                        'class' => 'btn',
                                    ),
                                    'buttonLabel' => '<i class="icon-repeat"></i>',
                                )
                            ); ?>

                            <div class='row-fluid control-group <?php echo $model->hasErrors('verifyCode') ? 'error' : ''; ?>'>
                                <?php echo $form->textFieldRow($model, 'verifyCode', array('placeholder' => Yii::t('FeedbackModule.feedback', 'Insert symbols you see on image'), 'class' => 'span6', 'required' => true)); ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php
                    $this->widget(
                        'bootstrap.widgets.TbButton',
                        array(
                            'buttonType' => 'submit',
                            'type' => 'primary',
                            'label' => Yii::t('FeedbackModule.feedback', 'Send message'),
                        )
                    ); ?>


                    <?php $this->endWidget(); ?>
                </div>

            </div>
            <div class="span4">
                <div class="clearfix"></div>
                <aside class="right-sidebar">

                    <div class="widget">
                        <h5 class="widgetheading">Контактная информация<span></span></h5>

                        <ul class="contact-info">
                            <li>
                                <label>Адрес:</label>
                                <i>Демонстрация готовых объектов</i>
                                <br/>Москва, Aлтуфьевское шоссе 5 км от мкада
                                <br/>
                                <br/>
                                <i>Офис</i>
                                <br/> Москва, Большая тульская 43
                            </li>
                            <li><label>Телефон: </label>+79296078021</li>
                            <li><label>Email: </label> info@isocork77.ru</li>
                        </ul>

                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
