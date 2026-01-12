<?php
/* Template Name: Directory */
get_header();

$ngrok_url = 'https://fae6f2060cd0.ngrok-free.app';
?>



<div>Directory<div>

<div style="margin-bottom: 10px;">
  <a href="<?php echo home_url('/home'); ?>">home</a>
</div>

<div style="margin-bottom: 10px;">
  <a href="<?php echo home_url('/about'); ?>">About</a>
</div>

<div style="margin-bottom: 10px;">
  <a href="<?php echo home_url('/visa'); ?>">Visa</a>
</div>

<div style="margin-bottom: 10px;">
  <a href="<?php echo home_url('/wordpress-for-agencies'); ?>">WordPress for Agencies</a>
</div>

<div style="margin-bottom: 10px;">
  <a href="<?php echo home_url('/wordpress-for-general-clients'); ?>">WordPress for Clients</a>
</div>

<div style="margin-bottom: 10px;">
  <a href="<?php echo home_url('/services'); ?>">Services</a>
</div>


<?php get_footer(); ?>