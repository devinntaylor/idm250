<?php 

// the template for displaying the footer 

// contains the closing of the content div and all the content after 


?>



<footer class="footer">

<!-- <div class="footer-menu">
<?php wp_nav_menu(['theme_location' => 'footer_menu'])?>
</div> -->

<div class="social-menu">
<?php wp_nav_menu(['theme_location' => 'social_menu']);?>
</p>

</footer>
<?php wp_footer(); ?>
</body>
</html>