<?php
$wgExtensionCredits['other'][] = array
(
	'path' => __FILE__,
	'name' => "HeadScript",
	'description' => "Allows scripts to be added just before </head> to the wiki as configured in the LocalSettings.php file.",
	'version' => 1.1,
	'author' => "JinRyuu",
	'url' => "http://www.mediawiki.org/wiki/Extension:HeadScript",
);

// Explicitly defining global variables.

$wgHeadScriptCode = '<!-- No Head Script -->';
$wgHeadScriptName = '<!-- No Script Name -->';

// Code for adding the head script to the wiki.

$wgHooks['BeforePageDisplay'][] = 'HeadScript';

function HeadScript(OutputPage &$out, Skin &$skin)
{
	global $wgHeadScriptCode, $wgHeadScriptName;

	$out->addHeadItem($wgHeadScriptName, $wgHeadScriptCode);

	return true;
}
?>