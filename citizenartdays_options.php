<?php
/**
 * Options du plugin Citizen Art Daysau chargement
 *
 * @plugin     Citizen Art Days
 * @copyright  2013 - 2018
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Citizenartdays\Options
 */

if (!defined('_ECRIRE_INC_VERSION'))
	return;

//Mettre par défaut le cookie langue en DE
if (!isset($_COOKIE['spip_lang'])) {
	include_spip('inc/cookie');
	//Soit un cookie lang est présent
	spip_setcookie('spip_langue_preferee', 'de', time() + 3660 * 24 * 365, chemin_cookie());
	spip_setcookie('spip_lang', 'de', time() + 3660 * 24 * 365, chemin_cookie());

}
?>
