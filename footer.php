<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
<div class="clearfix"></div>
</div><!-- end of #inner-page-wrapper .inner -->
</div><!-- end of #inner-page-wrapper -->
<?php endif ?>
</main>

<footer class="footer">
	<div class="region-footer-container">
		<div class="footer-logo">
			<img alt="Footer Logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-1logo.png"
				width="193" height="145" />
			<img class="logo2" alt="Footer Logo"
				src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-2logo.png" width="220" height="100" />
		</div>
		<div class="footer-mid">
			<div class="footer-contact">
				<strong>Contact Info</strong>
				<div class="fci-wrapper">
					<div class="footer-contact-item">
						<span class="ai-font-phone"></span>
						<?php echo do_shortcode('[ai_phone href="+1.281.335.0335"] 281.335.0335[/ai_phone]')?>
					</div>
					<div class="footer-contact-item">
						<span class="ai-font-envelope-f"></span>
						<?php echo do_shortcode('[mail_to email="kalebmonroe@kw.com"] kalebmonroe@kw.com[/mail_to]')?>
					</div>
					<div class="footer-contact-item">
						<span class="ai-font-location-c"></span>
						<span class="location">1700 East Walnut Avenue,
							<br> Suite 400, El Segundo, CA</span>
					</div>
				</div>
			</div>
			<div class="footer-nav">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
			</div>
			<div class="footer-group">
				<ul class="footer-social">
					<li>
						<a href="[ai_client_facebook]" target="_blank" aria-label="facebook">
							<span class="ai-font-facebook"></span>
						</a>
					</li>
					<li>
						<a href="[ai_client_instagram]" target="_blank" aria-label="instagram">
							<span class="ai-font-instagram"></span>
						</a>
					</li>
					<li>
						<a href="[ai_client_twitter]" target="_blank" aria-label="twitter">
							<span class="ai-font-twitter"></span>
						</a>
					</li>
					<li>
						<a href="[ai_client_youtube]" target="_blank" aria-label="youtube">
							<span class="ai-font-youtube"></span>
						</a>
					</li>
				</ul>
				<p class="copyright">Copyright ©
					<?php echo do_shortcode('[currentYear]')?> <span class="sitename">The Monroe Team . </span> All
					rights
					reserved. | <a class="terms" href="<?php echo do_shortcode('[blogurl]')?>/terms">Terms of Use</a> |
					<a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap</a>.
					<?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?>
				</p>
				<div class="mls">
					<em class="ai-font-eho" title="MLS"></em>
					<em class="ai-font-realtor-mls" title="MLS"></em>
				</div>
			</div>
		</div>
		<p class="footer-outro">The Monroe Team is committed to providing an accessible website. If you have difficulty
			accessing content, have difficulty viewing a file on the website, or notice any accessibility problems,
			please
			contact us at
			<?php echo do_shortcode('[ai_phone href="+1.281.335.0335"] 281.335.0335[/ai_phone]')?> to specify the nature
			of
			the accessibility issue and any assistive technology you
			use. We strive to provide the content you need in the format you require.
		</p>
	</div>

</footer>

<?php do_action('aios_neighborhoods_footer')?>
<?php do_action('aios_landing_page_footer')?>

</div><!-- end of #main-wrapper -->


<?php wp_footer(); ?>
</body>

</html>