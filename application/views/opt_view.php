<div>
	<h2>Create</h2>
	<?php echo form_open('site/create');?>

	<p>
		<label for="title">Title: </label>
		<input type="text" id="title" />
	</p>

	<p>
		<label for="content">Content: </label>
		<input type="text" id="content" />
	</p>

	<p>
		<input type="submit" id="submit" value="SUBMIT" />
	</p>

	<?php echo form_close(); ?>

	<h2>Read</h2>
	<?php if(isset($records)) : foreach($records as $row) : ?>
	<h3><?php echo anchor("site/delete/$row->id", $row->title); ?></h3>
	<div><?php echo $row->content; ?></div>
	
	<?php endforeach; ?>
	<?php else : ?>

	<h3>No records Found</h3>

	<?php endif; ?>
</div>