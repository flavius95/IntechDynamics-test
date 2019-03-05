<!--Template for footer section-->
<footer class="container">
    <div class="bottom-wrapper">
        <div class="secondary-nav">
            <div class="container">
                <span>&copy;<?php echo date('Y'); ?> All Rights Reserved</span>
            </div>
            <nav class="blog-nav">
                <ul>
                    <li><img class="navbar-brand" src="<?php echo get_template_directory_uri();?>/images/logo1.png"/></li>
                    <li><span>Powered by</span></li>
                    <li><a class="social" href="#"><img src="<?php echo get_template_directory_uri();?>/images/twitter-social.jpeg"></a></li>
                    <li><a class="social" href="#"><img src="<?php echo get_template_directory_uri();?>/images/linkedin-social.jpeg"></a></li>
                    <li><a class="social" href="#"><img src="<?php echo get_template_directory_uri();?>/images/youtube-social.jpeg"></a></li>
                    <li><a class="social" href="#"><img src="<?php echo get_template_directory_uri();?>/images/facebook-social.jpeg"></a></li>
                    <li><a class="secondary-nav-item" href="#">Contact</a></li>
                    <li><a class="secondary-nav-item" href="#">Sitemap</a></li>
                    <li><a class="secondary-nav-item" href="#">Terms and Conditions</a></li>
                    <li><a class="privacy" href="#">Privacy Policy</a></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
