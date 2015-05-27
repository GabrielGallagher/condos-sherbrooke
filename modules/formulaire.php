<form action="" method="POST">
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
			<label for="question">Message:</label>
			<textarea rows="2" cols="21" name="question" id="question"><?php echo $comments; ?></textarea>
		</div>
		<div class="field">
            <p>Cochez cette case avant d'envoyer le formulaire. Ça prévient le spam.</p>
            <label for="not-spam"><input type="checkbox" name="not-spam" id="not-spam"> Je suis un humain!</label>
		</div>
		<div class="submit">
			<input type="submit" value="ENVOYER" class="button" />
			<input type="hidden" name="action" id="action" value="send" />
		</div>
	</div>
</form>