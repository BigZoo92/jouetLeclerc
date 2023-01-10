<?php

/**
 * Template Name: Login
 */
get_header()
?>  
<?php if ( is_user_logged_in() ) { ?>
	<a href="<?php echo wp_logout_url(get_permalink()) ?>">Déconnexion</a>

<?php } else { ?>
	<form id="login" method="post" action="<?php echo wp_login_url( get_permalink() ) ?>">
		<fieldset>
			<label>Login :</label>
			<input type="text" value="" name="log" />
			<label>Mot de passe : </label>
			<input type="password" value="" name="pwd"  />
			<input type="submit" value="Connexion" />
		</fieldset>
	</form>

    <?php } ?>
