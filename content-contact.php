<section id="contact">
	<div class="container">
		<h1>Contact</h1>
		<div id="contactInfos">
			<h2>Une question ?</h2>
			<p>Que ce soit simplement pour obtenir plus d’informations sur moi ou pour une proposition d’emploi, n’hésitez pas à me contacter via le formulaire de contact ou par les autres moyens mis à votre disposition.</p>
			<div class="contactLink">
				<span>Tél&nbsp;: <a href="tel:0499385833" title="téléphonez-moi">0499 38 58 33</a></span>
			</div>
			<div class="contactLink">
				<span>Mail&nbsp;: <a href="mailto:iacuzzogiovanni@gmail.com" title="envoyez-moi un mail">iacuzzogiovanni@gmail.com</a></span>
			</div>
			<div class="social">
				<a href="https://www.facebook.com/GioGio8" title="ajoutez-moi sur facebook" class="icon-facebook-circled"><span>facebook</span></a>
				<a href="https://twitter.com/IacuzzoG" title="suivez-moi sur twitter" class="icon-twitter-circled"><span>twitter</span></a>
				<a href="http://www.linkedin.com/pub/giovanni-iacuzzo/59/639/151" title="ajoutez-moi sur linkedin" class="icon-linkedin-circled"><span>facebook</span></a>
			</div>
		</div>
		<div id="contactForm">
			<form action="<?php bloginfo('template_directory'); ?>/contact-mail.php" method="post">
				<fieldset>
					<div class="inputContainer"><input type="text" placeholder="Nom" name="nom" id="nom"/><span class="errorText">Ce champs doit être rempli</span></div>
					<div class="inputContainer email"><input type="email" placeholder="Email" name="email" id="email"/><span class="errorText">Ce champs doit contenir une email</span></div>
					<div class="inputContainer"><input type="tel" placeholder="Tél" name="tel" id="tel"/><span class="errorText">Ce champs doit contenir un numéro</span></div>
					<div class="inputContainer sujet"><input type="text" placeholder="Sujet" name="sujet" id="sujet"/><span class="errorText">Ce champs doit être rempli</span></div>
					<div class="textareaContainer"><textarea placeholder="Message" name="message" id="message"></textarea><span class="errorText">Ce champs doit être rempli</span></div>
					<div>
						<button type="submit">envoyer</button>
					</div>
					<span class="formIsSend">Votre message a bien été envoyé&nbsp;!</span>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="clear"></div>
</section>