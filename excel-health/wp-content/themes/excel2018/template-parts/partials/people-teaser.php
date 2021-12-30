<?php
  // TODO - refactor this in future to not use ugly fancybox.
  
  // For now ... generate an ID based on the person's name+title. Currently assumes they're only in there once!
  $id = $post['lt_name'] . "-" . $post['lt_title'];

  $id = eh_clean_class($id);
?>  

<div class="person teaser">
	<img src="<?php echo $post['lt_image']; ?>" alt="<?php echo $post['lt_name']; ?>" />
	<h3 class="person--name"><?php echo $post['lt_name']; ?></h3>
	<p class="person--job-title"><?php echo $post['lt_title']; ?></p>
	<p class="person--description-link"><a href="#<?php echo $id; ?>" class="btn btn-white fancybox">Read More</a></p>
	<div style="display:none;width:600px;">
		<div id="<?php echo $id; ?>" class="team-desc">
			<div style="max-width:600px">
			<?php echo $post['lt_description']; ?>
			</div>
		</div>
	</div>
</div>