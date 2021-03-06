<?php
/**
 * Utilisations de pipelines par Citizen Art Days
 *
 * @plugin     Citizen Art Days
 * @copyright  2013 - 2018 - 2018
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Citizenartdays\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION'))
	return;

/*
 * Un fichier de pipelines permet de regrouper
 * les fonctions de branchement de votre plugin
 * sur des pipelines existants.
 */

function citizenartdays_jquery_plugins($scripts) {
	$scripts[] = "javascript/jquery.ticker.js";
	return $scripts;
}
?>