<div id="blog_controller">
	<?php foreach($records as $r){
		echo '<h3>'. $r->title . '</h3>';
		echo '<p>'. $r->content . '</p>';
	}
	?>
	
</div>