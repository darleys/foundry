<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */
function smarty_modifier_multicharenc ($string)
{
	$pattern = array();
    $pattern[0] = '/\&/';
    $pattern[1] = '/</';
    $pattern[2] = "/>/";
    $pattern[4] = '/"/';
    $pattern[5] = "/'/";
    $pattern[6] = "/%/";
    $pattern[7] = '/\(/';
    $pattern[8] = '/\)/';
    $pattern[9] = '/\+/';
    $pattern[10] = '/-/';
    $replacement = array();
    $replacement[0] = '&amp;';
    $replacement[1] = '&lt;';
    $replacement[2] = '&gt;';
    $replacement[4] = '&quot;';
    $replacement[5] = '&#39;';
    $replacement[6] = '&#37;';
    $replacement[7] = '&#40;';
    $replacement[8] = '&#41;';
    $replacement[9] = '&#43;';
    $replacement[10] = '&#45;';
    return preg_replace($pattern, $replacement, $string);
}
?>