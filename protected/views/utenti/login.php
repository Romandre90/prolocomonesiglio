<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<?php
	if(isset(Yii::app()->user))
		echo "<h2>".Yii::app()->user->getName()."</h2>";
	else
		echo "effettua il login";
?>
<table id="login" class="bordered">
	<caption class = "caption_forum"><h2> Login: </h2><p>Inserisci le credenziali</p></caption>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'E-mail'); ?>
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'email'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
			<p class="hint">
				Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo CHtml::submitButton('Login'); ?>
		</td>
	</tr>
</table>

<?php $this->endWidget(); ?>
</div><!-- form -->
