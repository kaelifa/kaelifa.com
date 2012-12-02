
	<footer class="layoutFooter">
		<h2>Contact me</h2>
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
		</div>

		<aside class="social">
			<h3>Elsewhere</h3>
			<ul>
				<li><a class="icon icon1 icon-twitter" title="Twitter" href="http://www.twitter.com/kaelifa">t</a></li>
				<li><a class="icon icon1 icon-linkedin" title="LinkedIn" href="http://www.linkedin.com/in/kaelifa">l</a></li>
				<li><a class="icon icon2 icon-github" title="GitHub" href="https://github.com/kaelifa">j</a></li>
				<!-- <li><a class="icon icon-endorse-me" title="Endorse.me" href="http://endorse.me/kaelifa">Endorse.me</a></li>
				<li><a class="icon icon-pinterest" title="Pinterest" href="http://pinterest.com/kaelifa/">Pinterest</a></li> -->
				<!--
				<li><a class="icon icon1 icon-zerply" title="Zerply" href="http://zerply.com/kaelifa">z</a></li>
				<li><a class="icon icon2 icon-behance" title="Behance" href="http://www.behance.net/kaelifa">G</a></li>
				<li><a class="icon icon1 icon-dribbble" title="Dribbble" href="http://dribbble.com/kaelifa">d</a></li>
				<li><a class="icon icon-colourlovers" title="colourlovers" href="http://www.colourlovers.com/lover/Fuchsia">ColourLovers</a></li>
				-->
			</ul>
		</aside>
		<div class="footerCopy">
			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
		</div>
	</footer>
