<div id="contact" class="contact">
	<div class="container">
		<?php cpotheme_block( 'home_contact', 'contact-heading section-heading' ); ?>

		<div class="row">
			<div class="column col4x2">
				<p>GAIA Junior est une Junior Création, membre du mouvement CNJE des Junior-Entreprises de France. GAIA Junior est la première Junior Création avec la double compétence en développement durable et big data.GAIA Junior est une Junior Création, membre du mouvement CNJE des Junior-Entreprises de France. GAIA Junior est la première Junior Création avec la double compétence en développement durable et big data.</p>
				<p>Issu d'une fusion de deux écoles (ESI Business School et IA School), le groupe GEMA se lance aujourd'hui dans l'aventure Junior Entreprise, fort des compétences multiples de ses élèves et de ses responsables pédagogiques, et animé de la détermination sans faille des 19 membres de GAIA Junior.</p>
			</div>
			<div class="column col4x1">
				<?php
			 	$contact_form_plugin = cpotheme_get_option('plugin_select');
				$form_id = cpotheme_get_option( 'form_id' );

				if ( $contact_form_plugin === 'wpforms' ) {
					$shortcode_tag = 'wpforms';
				} elseif ( $contact_form_plugin === 'cf7' ) {
					$shortcode_tag = 'contact-form-7';
				} elseif ( $contact_form_plugin === 'kali-forms' ) {
					$shortcode_tag = 'kaliform';
				}

				if ( $shortcode_tag !== '' && $form_id !== '' && $form_id !== 'default' ) {
					echo do_shortcode( '[' . esc_html( $shortcode_tag ) . ' id="' . absint( $form_id ) . '"]' );
				}

				?>
			</div>
			<div class="clear"></div>
			<div class="clear"></div>
		</div>
	</div>
</div>
