	</div> <!-- layoutMain closing div -->

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<div class="media aboutTheAuthor">
		<div class="mediaImage">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
		</div>
		<div class="mediaDescription authorDescription">
			<h3 class="mediaTitle">About <?php echo get_the_author() ; ?></h3>
			<?php the_author_meta( 'description' ); ?>
		</div>
	</div>
	<?php endif; ?>

	<footer class="layoutFooter" role="contentinfo">
		<!-- <h2>Contact me</h2>
		<div class="contact">
			<form action="contact.php" method="post">
				<fieldset class="formField formText formRequired">
					<label for="name">Name</label>
					<input type="text" value="" name="name" id="name" placeholder="Enter your name" />
				</fieldset>
				<fieldset class="formField formText formRequired">
					<label for="email">Email</label>
					<input type="text" value="" name="email" id="email" placeholder="Email address" />
				</fieldset>
				<fieldset class="formField formTextarea">
					<label for="message">Message</label>
					<textarea rows="10" cols="30" id="message" name="message" placeholder="Your message"></textarea>
				</fieldset>
				<fieldset class="formControls">
					<input type="submit" value="Send message" class="input-submit" />
				</fieldset>
			</form>
		</div> -->

		<nav class="social">
			<ul>
				<li><a title="Email" href="mailto:kaelifa@gmail.com"><!-- <i class="icon icon-email"></i> --> Email</a></li>
				<li><a title="Twitter" href="http://www.twitter.com/kaelifa"><!-- <i class="icon icon-twitter"></i> --> Twitter</a></li>
				<li><a title="LinkedIn" href="http://www.linkedin.com/in/kaelifa"><!-- <i class="icon icon-linkedin"></i> --> LinkedIn</a></li>
				<li><a title="GitHub" href="https://github.com/kaelifa"><!-- <i class="icon icon-github"></i> --> Github</a></li>
				<li><a title="Pinterest" href="http://pinterest.com/kaelifa/"><!-- <i class="icon icon-pinterest"></i> --> Pinterest</a></li>
				<li><a title="Flickr" href="http://www.flickr.com/photos/kaelifa/"><!-- <i class="icon icon-flickr"></i> --> Flickr</a></li>
				<li><a title="Fitbit" href="http://www.fitbit.com/user/23F5CX"><!-- <i class="icon icon-fitbit"></i> --> Fitbit</a></li>
				<li><a title="Runkeeper" href="http://runkeeper.com/user/kaelifa"><!-- <i class="icon icon-runkeeper"></i> --> Runkeeper</a></li>
				<li><a title="colourlovers" href="http://www.colourlovers.com/lover/kaelifa"><!-- <i class="icon icon-colourlovers"></i>  -->ColourLovers</a></li>
				<li><a title="pinboard" href="https://pinboard.in/u:kaelifa"><!-- <i class="icon icon-pinboard"></i>  -->Pinboard</a></li>
				<li><a title="goodreads" href="http://www.goodreads.com/kaelifa"><!-- <i class="icon icon-goodreads"></i>  -->goodreads</a></li>
				<li><a title="coderwall" href="https://coderwall.com/kaelifa"><!-- <i class="icon icon-coderwall"></i>  -->coderwall</a></li>
				<li><a title="helpmewrite" href="http://helpmewrite.co/me/kaelifa"><!-- <i class="icon icon-helpmewrite"></i>  -->helpmewrite</a></li>
				<li><a title="helpmewrite" href="http://lanyrd.com/profile/kaelifa/"><!-- <i class="icon icon-lanyrd"></i>  -->Lanyrd</a></li>

				<!--
				<li><a title="gimmebar" href="https://gimmebar.com/loves/kaelifa"><i class="icon icon-gimmebar"></i> Gimmebar</a></li>
				<li><a title="Zerply" href="http://zerply.com/kaelifa"><i class="icon icon-zerply"></i> Zerply</a></li>
				<li><a title="Behance" href="http://www.behance.net/kaelifa"><i class="icon icon-behance"></i> Behance</a></li>
				<li><a title="Dribbble" href="http://dribbble.com/kaelifa">class="icon icon-dribbble" Dribbble</a></li>

				<li><a title="Storify" href="http://storify.com/kaelifa"><i class="icon icon-storify"></i> Storify</a></li>
				-->
			</ul>
		</nav>

		<div class="footerCopy">
			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
		</div>
	</footer>
