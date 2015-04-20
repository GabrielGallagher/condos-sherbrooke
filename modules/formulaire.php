<form action="<?php echo BASE_URL; ?>information" method="POST">
	<div id="form">
		<?php if($message) echo '<div class="error">' . $message . ' </div>'; ?>
		<div class="field">
			<label for="nom">Nom * :</label>
			<input type="text" name="nom" id="nom" value="<?php echo $nom; ?>" />
		</div>
		<div class="field">
			<label for="courriel">Courriel * :</label>
			<input type="text" name="courriel" id="courriel" value="<?php echo $courriel; ?>"/>
		</div>
		<div class="field">
			<label for="telephone">T&eacute;l&eacute;phone :</label>
			<input type="text" name="telephone" id="telephone" value="<?php echo $telephone; ?>"/>
		</div>
		<div class="field">
			<label for="unitee">Message :</label>
			<textarea rows="2" cols="21" name="question" id="question"><?php echo $comments; ?></textarea>
		</div>
		<div class="field">
			<label for="captcha">Captcha : </label>
			<?php echo recaptcha_get_html($publickey, $error); ?>
		</div>
		<div class="submit">
			<input type="submit" value="ENVOYER" class="button" />
			<input type="hidden" name="action" value="send" />
		</div>
	</div>
</form>