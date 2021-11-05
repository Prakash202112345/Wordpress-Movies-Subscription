<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="contact" class="footer-one iq-bg-dark">
     
	 <!-- Address -->
	 <div class="footer-top">
		 <div class="container-fluid">
			 <div class="row footer-standard">
				 <div class="col-lg-7">
					 <div class="widget text-left">
						 <div class="menu-footer-link-1-container">
							 <ul id="menu-footer-link-1" class="menu p-0">
								 <li id="menu-item-7314" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7314">
									 <a href="#">Terms Of Use</a>
								 </li>
								 <li id="menu-item-7316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7316">
									 <a href="privacy-policy.html">Privacy-Policy</a>
								 </li>
								 <li id="menu-item-7118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7118">
									<a href="faq.html">FAQ</a>
								</li>
								 <li id="menu-item-7118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7118">
									 <a href="watch-video.html">Watch List</a>
								 </li>
							 </ul>
						 </div>
					 </div>
					 <div class="widget text-left">			
						 <div class="textwidget">
							 <p><small>© 2021 STREAMIT. All Rights Reserved. All videos and shows on this platform are trademarks of, and all related images and content are the property of, Streamit Inc. Duplication and copy of this is strictly prohibited. All rights reserved.</small></p>
						 </div>
					 </div>                        
				 </div>
				 <div class="col-lg-2 col-md-6 mt-4 mt-lg-0">
					 <h6 class="footer-link-title">
						 Follow Us :
					 </h6>
					 <ul class="info-share"> 
						 <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
						 <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
						 <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
						 <li><a target="_blank" href="#"><i class="fa fa-github"></i></a></li>
					 </ul>

				 </div>
				 <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
					 <div class="widget text-left">
						 <div class="textwidget">
							 <h6 class="footer-link-title">Streamit App</h6>
							 <div class="d-flex align-items-center">
								 <a class="app-image" href="#">
									 <img src="<?php echo get_template_directory_uri() ?>/assets/images/footer/01.jpg" alt="play-store">
								 </a><br>
								 <a class="ml-3 app-image" href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/footer/02.jpg" alt="app-store"></a>
							 </div>
						 </div>
					 </div>
				 </div>
			 </div>
		 </div>
	 </div>
	 <!-- Address END -->
 </footer>

   <!-- MainContent End-->
   <!-- back-to-top -->
   <div id="back-to-top">
	  <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
   </div>
   <!-- back-to-top End -->
   <!-- jQuery, Popper JS -->
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-3.4.1.min.js"></script>
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/popper.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
   <!-- Slick JS -->
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/slick.min.js"></script>
   <!-- owl carousel Js -->
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script>
   <!-- select2 Js -->
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/select2.min.js"></script>
   <!-- Magnific Popup-->
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.magnific-popup.min.js"></script>
   <!-- Slick Animation-->
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/slick-animation.min.js"></script>
   <!-- Custom JS-->
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/custom.js"></script>
   <script src="<?php echo get_template_directory_uri() ?>/assets/js/rtl.js"></script>

		<?php wp_footer(); ?>

	</body>
</html>
