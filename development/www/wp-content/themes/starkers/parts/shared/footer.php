
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
				<li><a href="http://www.twitter.com/kaelifa">Twitter</a></li>
				<li><a href="http://www.linkedin.com/in/kaelifa">LinkedIn</a></li>
				<li><a href="https://github.com/kaelifa">GitHub</a></li>
				<li><a href="http://endorse.me/kaelifa">Endorse.me</a></li>
				<li><a href="http://pinterest.com/kaelifa/">Pinterest</a></li>
				<!-- <li><a href="http://zerply.com/kaelifa">Zerply</a></li>
				<li><a href="http://www.behance.net/kaelifa">Behance</a></li>
				<li><a href="http://dribbble.com/kaelifa">Dribbble</a></li> -->
			</ul>
		</aside>
		<div class="footerCopy">
			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
		</div>
	</footer>
