<?php

namespace PDFParserIntegration {
	class Hooks
	{
		public static function onTemplateBuildToolbox( $baseTemplate, &$toolbox ) {
			unset($toolbox["print"]);	
			$toolbox["htbah-print"] = [
				'msg'  => 'pdfparserintegration-sidebar-text',
				'href'  => "http://howtobeahero.de:1117/?title=".$baseTemplate->getSkin()->getContext()->getTitle(),
				'id'    => 'htbah-print',
			];
			return true;
		}
	}
}
