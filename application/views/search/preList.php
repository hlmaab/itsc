<!-- This page will display the location or category that can be selected -->

<?php foreach($result as $row): ?>
	<a href="<?php base_url(); ?>software/<?php echo $type; ?>/<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a>
<?php endforeach; ?>