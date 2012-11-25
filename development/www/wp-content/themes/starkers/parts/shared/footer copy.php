
	<footer class="layout-footer">
		<h2>Contact me</h2>

		<form action="contact.php" method="post">
			<fieldset class="form-input-text form-required">
				<label for="name">Name</label>
				<input type="text" value="" name="name" id="name" placeholder="Enter your name" />
			</fieldset>
			<fieldset class="form-input-text form-required">
				<label for="email">Email</label>
				<input type="text" value="" name="email" id="email" placeholder="Email address" />
			</fieldset>
			<fieldset class="form-textarea">
				<label for="message">Message</label>
				<textarea rows="10" cols="30" id="message" name="message" placeholder="Your message"></textarea>
			</fieldset>
			<fieldset class="form-buttons">
				<input type="submit" value="Send message" class="input-submit" />
			</fieldset>
		</form>

		<aside class="sub-content">
			<h3>Elsewhere</h3>
			<ul>
				<li><a href="http://www.twitter.com/kaelifa">Twitter</a></li>
				<li><a href="http://www.linkedin.com/in/kaelifa">LinkedIn</a></li>
				<li><a href="https://github.com/kaelifa">GitHub</a></li>
				<li><a href="http://endorse.me/kaelifa">Endorse.me</a></li>
				<!-- <li><a href="http://zerply.com/kaelifa">Zerply</a></li>
				<li><a href="http://www.behance.net/kaelifa">Behance</a></li>
				<li><a href="http://dribbble.com/kaelifa">Dribbble</a></li> -->
			</ul>
		</aside>
		&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
	</footer>
