<?php
$this->breadcrumbs = array('Калькулятор');
Yii::import('application.modules.feedback.FeedbackModule');
Yii::import('application.modules.feedback.models.FeedBackForm');
Yii::import('application.modules.install.InstallModule');
$model = new FeedBackForm();
?>
<?php $this->widget('yupe\widgets\YFlashMessages'); ?>


<script>
    $(function () {

        function calculate() {
            var walls = 0;
            var celling = 0;

            if (isNumber($('#FeedBackForm_walls').val())) {
                walls = parseFloat($('#FeedBackForm_walls').val());
                $('#walls-cost').html(walls * 365);
            }
            if (isNumber($('#FeedBackForm_celling').val())) {
                celling = parseFloat($('#FeedBackForm_celling').val());
                $('#celling-cost').html(celling * 465);
            }

            var square = walls + celling;

            $('#gun-cost').html($('#FeedBackForm_gun').bootstrapSwitch('state') ? 2865 : 0);

            if ($('#FeedBackForm_tape').bootstrapSwitch('state')) {
                $('#tape-cost').html((square / 250) * 2200);
            } else {
                $('#tape-cost').html(0);
            }

            if (isNumber($('#FeedBackForm_weight').val())) {
                var weight = parseFloat($('#FeedBackForm_weight').val());
                $('#weight-cost').html(weight * 180);
            }

            var total = 0;
            total += parseFloat($('#walls-cost').html());
            total += parseFloat($('#celling-cost').html());
            total += parseFloat($('#tape-cost').html());
            total += parseFloat($('#weight-cost').html());
            total += parseFloat($('#gun-cost').html());
            total += square * 1.8 * 350
            $('#total-cost').html(total);
        }

        function isNumber(n) {
            return !isNaN(parseFloat(n)) && isFinite(n);
        }

        $('#FeedBackForm_walls').on('change keyup paste', function () {
            this.value = this.value.replace(/[^0-9\.]/g, '');
            calculate();
        });

        $('#FeedBackForm_celling').on('change keyup paste', function () {
            this.value = this.value.replace(/[^0-9\.]/g, '');
            calculate();
        });

        $('#FeedBackForm_gun').on('switch-change',function (e, data) {
            calculate();
        }).bootstrapSwitch();

        $('#FeedBackForm_tape').on('switch-change',function (e, data) {
            calculate();
        }).bootstrapSwitch();

        $('#FeedBackForm_weight').on('change keyup paste', function () {
            this.value = this.value.replace(/[^0-9\.]/g, '');
            calculate();
        });

    });
</script>

<h1 class="calculator">Калькулятор стоимости</h1>


<div class="form">
    <?php $form = $this->beginWidget(
        'bootstrap.widgets.TbActiveForm',
        array(
            'id' => 'calculator-form',
            'type' => 'horizontal',
            'inlineErrors' => true,
            'htmlOptions' => array(
                'class' => 'no-well',
            )
        )
    ); ?>

    <div class="row-fluid">
        <div class="span6 alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Расход материала</h4>
            1,8 кг на 1 м<sup>2</sup> цена 350 <i class="fa fa-rub"></i>/1 кг
        </div>
    </div>

    <?php echo $form->errorSummary($model); ?>

    <div class="row-fluid">
        <div class="span9">
            <label>Стены</label>
            <input type="text" id="FeedBackForm_walls" name="FeedBackForm[walls]" value="" class="span4">
            <span class="help-inline"> м<sup>2</sup></span>
            <span class="help-block">1 цвет - 365 <i class="fa fa-rub"></i>/м<sup>2</sup></span>
        </div>
        <div class="calc-cost span3 pull-right">
            <span id="walls-cost">0</span> <i class="fa fa-rub"></i>
        </div>
    </div>
    <hr/>

    <div class="row-fluid">
        <div class="span9">
            <label>Потолок</label>
            <input type="text" id="FeedBackForm_celling" name="FeedBackForm[celling]" value="" class="span4">
            <span class="help-inline"> м<sup>2</sup></span>
            <span class="help-block">1 цвет - 465 <i class="fa fa-rub"></i>/м<sup>2</sup></span>
        </div>
        <div class="calc-cost span3 pull-right">
            <span id="celling-cost">0</span> <i class="fa fa-rub"></i>
        </div>
    </div>
    <hr/>

    <div class="row-fluid">
        <div class="span9">
            <label class="checkbox">
                <input id="FeedBackForm_gun" name="FeedBackForm[gun]" type="checkbox" data-on-text="ВКЛ" data-off-text="ВЫКЛ" value=""> Текстурный пистолет
            </label>
        </div>
        <div class="calc-cost span3 pull-right">
            <span id="gun-cost">0</span> <i class="fa fa-rub"></i>
        </div>
    </div>
    <hr/>

    <div class="row-fluid">
        <div class="span9">
            <label class="checkbox">
                <input id="FeedBackForm_tape" name="FeedBackForm[tape]" type="checkbox" data-on-text="ВКЛ" data-off-text="ВЫКЛ" value=""> Cкотч, плёнка: на каждые 250 м<sup>2</sup> поверхности - 2200 <i class="fa fa-rub"></i>.
            </label>
        </div>
        <div class="calc-cost span3 pull-right">
            <span id="tape-cost">0</span> <i class="fa fa-rub"></i>
        </div>
    </div>
    <hr/>

    <div class="row-fluid">
        <div class="span9">
            <label>Стрительные веса</label>
            <input type="text" id="FeedBackForm_weight" name="FeedBackForm[weight]" value="" class="span4">
            <span class="help-inline"> м<sup>2</sup></span>
            <span class="help-block">180 <i class="fa fa-rub"></i>/м<sup>2</sup></span>
        </div>
        <div class="calc-cost span3 pull-right">
            <span id="weight-cost">0</span> <i class="fa fa-rub"></i>
        </div>
    </div>
    <hr/>

    <div class="well">
        <div class="row-fluid">
            <div class="span9">
                <h1 style="margin-top: 20px;">ИТОГО</h1>
            </div>
            <div class="total-cost span3 pull-right">
                <span id="total-cost">0</span> <i class="fa fa-rub"></i>
            </div>
        </div>
    </div>

    <?php
    $this->widget(
        'bootstrap.widgets.TbButton',
        array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => 'Оформить заказ',
        )
    ); ?>


    <?php $this->endWidget(); ?>
</div>
