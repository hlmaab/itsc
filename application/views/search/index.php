<?php echo validation_errors(); ?>

<?php echo form_open('/keyword'); ?>
	<input type="input" name="name" value=""></textarea>
	
	<input type="submit" name="submit" value="Submit" />
</form>

<!--- Routing -->
<a href="<?php base_url(); ?>common" > common </a>
<a href="<?php base_url(); ?>locations" > location </a>
<a href="<?php base_url(); ?>category" > category </a>