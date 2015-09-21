<?php
/* @var $this DiscussioniController */

$this->breadcrumbs=array(
	'Discussioni',
);
?>

<?php 
Yii::app()->user->getState('PRO') == 1;
?>

<?php $i=0; foreach ($argomenti as $argomento):?>
	<table class=bordered id=argomento >
		<caption class=caption_forum >
		<?php
			echo "<h2>". $argomento->Titolo. "</h2>"
		?>
		</caption>
		<thead>
			<tr>
				<th>Titolo</th>
				<th>Descrizione</th>
				<th>Moderatore</th>
				<th>Apertura</th>
			</tr>
		<thead>
	  	<tbody>
		 	<?php foreach ($discussioni[$i++] as $discussione):?>
			<tr>
				<td><?php echo $discussione->Titolo?></td>
				<td id=descrizione ><?php echo $discussione->Descrizione?></td>
				<td><?php echo $moderatori[$discussione->Moderatore]?></td>
				<td><?php echo $discussione->DataCreazione?></td>
			</tr>
			<?php endforeach;?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan=4 > <button class=button id=editing >Nuova</button></td>
			</tr>
		</tfoot>
	</table>
<?php endforeach;?>