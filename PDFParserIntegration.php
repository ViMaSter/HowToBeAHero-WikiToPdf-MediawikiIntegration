<?php

if (!defined('MEDIAWIKI')) {
	die('Not an entry point.');
}

if (!defined('ParamProcessor_VERSION')) {
	die('PDFParserIntegration requires extension ParamProcessor');
}

global $wgExtensionFunctions,$wgExtensionMessagesFiles, $wgExtensionCredits, $wgHooks, $wgResourceModules, $wgMessagesDirs;

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'PDFParser Integration',
	'version' => '0.1.0',
	'author' => 'Vincent Mahnke',
	'url' => 'https://github.com/ViMaSter/HowToBeAHero-WikiToPdf-MediawikiIntegration',
	'descriptionmsg' => 'pdfparserintegration-desc'
);

$wgMessagesDirs['PDFParserIntegration'] = __DIR__ . '/i18n';

$wgExtensionFunctions[] = function() {
	global $wgHooks;

	$wgHooks['SkinBuildSidebar'][] = 'PDFParserIntegration\Hooks::onSkinBuildSidebar';
};
