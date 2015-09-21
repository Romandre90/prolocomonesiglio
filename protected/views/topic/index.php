<?php
/* @var $this TopicController */

$this->breadcrumbs=array(
	'Topic',
);
?>
<table class=bordered>
<thead>
	<tr>
		<th> Argomento </th>
		<th> Descrizione </th>
		<th> Data creazione </th>
		<th> Ultima modifica </th>
	</tr>
</thead>
<?php foreach ($topics as $topic):?>
<tr>
	<td><?php echo $topic->titolo; ?></td>
	<td><?php echo $topic->descrizione; ?> </td>
	<td><?php echo $topic->data_creazione; ?> </td>
	<td><?php echo $topic->ultima_modifica; ?> </td>
</tr>
<?php endforeach;?>
</table>