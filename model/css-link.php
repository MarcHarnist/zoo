<?php

/**************************************************************************************************************/
/****** Nom : cssLink                                                                                    ******/
/**************************************************************************************************************/
/****** Description : crée un lien css pour head si un fichier css existe dans root/css/ avec ce nom      *****/
/**************************************************************************************************************/
/****** Paramètres :                                                                                     ******/
/****** [STRING] $page -> Nom du fichier pour lequel il faut chercher un fichier css s'il existe         ******/
/**************************************************************************************************************/
/****** Valeurs retournées : chaîne de caractères avec le lien css                                       ******/
/**************************************************************************************************************/
/****** Auteur : Marc Harnist                                                                            ******/
/**************************************************************************************************************/
/****** Version : 1.0                                                                                    ******/
/**************************************************************************************************************/
/****** Créée le : 04/03/2018                                                                            ******/
/**************************************************************************************************************/
/****** Modifiée le : 04/03/2018                                                                         ******/
/**************************************************************************************************************/

function cssLink($page = "style"){
	
	// Css file by default
	$css_link = '';//head CSS links by default

	// CSS = root/css/ in 2018. Constant defined in model/config/config.php
	if(is_file(CSS . $page . '.css')){
		//If a css file exists with this name
		$css_link.= "\n\t"; // add return and tab. Works only with ""!
		$css_link.= '<link rel="stylesheet" href="' . CSS_URL . $page . '.css">';
		$css_link.= "\n"; // add return and tab. Works only with ""!
	}
	return ($css_link);
}