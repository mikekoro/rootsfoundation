<footer class="content-info container" role="contentinfo">
  	<div class="row">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>
	<div class="row">
		<div class="large-12 columns">
      		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    	</div>
	</div>
</footer>



<?php wp_footer(); ?>

<script>
  $(document).foundation();
</script>