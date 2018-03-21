<?php
/**
 * Définitions pour la personnalisation du message pour le plugin
 * Message personnalisé https://github.com/abelass/message_personnalise.
 *
 * @plugin     Larut
 * @copyright  2013 - 2018
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Larut\Messages_personalises
 */

/**
 * Définitions pour la personnalisation du message reservation accepté.
 *
 * @param array $args
 *        	Variables du contexte.
 * @return array Définition.
 */
function messages_personnalises_footer_dist($args) {

	return array(
		'label' => 'Texte footer',
	);
}
