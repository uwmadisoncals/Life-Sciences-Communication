<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div class="inner">
			<div id="pre-footer">
			<div class="linksContainer">
			<h3>Resources</h3>
        	<ul id="quick_links">
            	<li class="quick_links_list">
                	<ul>
                    	
                        <li><a href="https://learnuw.wisc.edu/" title="Learn@UW">Learn@UW</a></li>
                        <li><a href="https://courses.cals.wisc.edu/cals/" title="CALS Course Pages">Course Pages</a></li>
                        
                        <li><a href="/students/undergraduate-programs/advising/" title="Advising">Advising</a></li>
                        <li><a href="/students/undergraduate-programs/financial-aid/" title="Financial Aid">Financial Aid</a></li>
                        <li><a href="/students/undergraduate-programs/ups-office/">Undergraduate Programs &amp; Services</a></li>
                        
                        <li><a href="http://www.cals.wisc.edu/gradstudies/" title="Graduate Studies">Graduate Studies</a></li>
                        <li><a href="/students/undergraduate-programs/career-development/" title="Career Services">CALS Career Services</a></li>
                	
                      <li><a href="https://cals-wisc-csm.symplicity.com/students/" title="BuckyNet">BuckyNet</a></li>
                    </ul>
       	      </li>
            	<li class="quick_links_list">
                	<ul>
                    	
                        <li><a href="/alumni-friends/get-involved/" title="Get Involved">Get Involved</a></li>
                        <li><a href="/alumni-friends/enhance-your-career/" title="Enhance Your Career">Enhance Your Career</a></li>
                        <li><a href="http://www.supportuw.org/making-a-gift/school-college/cals/" title="Give to CALS">Give to CALS</a></li>
                        <li><a href="http://www.today.wisc.edu/" title="Campus Events">Campus Events</a></li>
                        <li><a href="http://cals.wisc.edu/grow/" title="Grow Magazine">Grow Magazine</a></li>
                        <li><a href="http://www.uwalumni.com/" title="Wisconsin Alumni Association">WAA</a></li>
                        <li><a href="http://walsaa.org/" title="Wisconsin Agriculture and Life Sciences Alumni Association">WALSAA</a></li>
                        <li><a href="http://www.uwbadgers.com/" title="UW Athletics">UW Athletics</a></li>
                    </ul>
            </li>
            	                        
            </ul>
            <div class="clearfix"></div>
			</div>
			<div class="linksContainer right">
				<h3>Support</h3>
				<p>You can help support Life Sciences 
Communication by making a gift to the 
University of Wisconsin Foundation.</p>
				<a href="#" class="button">Make a Gift</a>
				<p class="address">Department of Life Sciences Communication | Hiram Smith Hall
1545 Observatory Dr Madison, WI 53706
(608) 262-1464 | lsc@lsc@wisc.edu</p>
			</div>
			<div class="clearfix"></div>
        </div>
        
        <div class="relative">
       
        <div class="copyright">
        	<img src="<?php echo get_template_directory_uri(); ?>/images/footercrest.png" alt="University of Wisconsin Madison" />
        	<div>&copy; Copyright 2013 The Board of Regents of the University of Wisconsin System</div>
        	<a href="http://www.wisc.edu">University of Wisconsin Madison</a>
	        <!--<img src="<?php echo get_template_directory_uri(); ?>/images/uwcrest_footer.png" alt="University of Wisconsin Madison" align="center" />  -->
            <div class="soc_icon_group"></div>
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */
				
					get_sidebar( 'footer' );
			?>
		</div>
		
		<div class="socialRef">
			<a href="#" class="twitter">Twitter</a>
			<a href="#" class="youtube">Youtube</a>
			<a href="#" class="facebook">Facebook</a>
		</div>
			<div class="clearfix"></div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>