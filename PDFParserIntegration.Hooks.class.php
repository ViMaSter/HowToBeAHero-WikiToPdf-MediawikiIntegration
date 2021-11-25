<?php


namespace PDFParserIntegration {
        class Hooks
        {
                public static function onTemplateBuildToolbox( $baseTemplate, &$toolbox ) {
                        unset($toolbox["print"]);
                        global $wgPDFParserURL;
                        $toolbox["htbah-print"] = [
                                'msg'  => 'pdfparserintegration-sidebar-text',
                                'href'  => $wgPDFParserURL.urlencode($baseTemplate->getSkin()->getContext()->getTitle()$,
								'id'    => 'htbah-print',
                        ];
                        return true;
                }
        }
}
