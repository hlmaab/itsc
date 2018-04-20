<!-- This page will sho the information of the software -->


<table>
	<tr>
		<th>name</th>
		<th>location</th>
		<th>types</th>
	</tr>
	<tr>
	<!-- display the information of the software by foreach -->
		<?php foreach($result as $attri): ?>
		<td><?php echo $attri; ?></td>
		<?php endforeach; ?>
	</tr>
</table>