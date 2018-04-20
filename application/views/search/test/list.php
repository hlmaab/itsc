<!-- This page will display all the result found by similiar matching -->
<!-- Cannot use $base_URL() here since it will automatically append the element from last operation -->

<?php foreach($result as $row): ?>
	<a href="http://localhost/itsc/result/<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a>
<?php endforeach; ?>