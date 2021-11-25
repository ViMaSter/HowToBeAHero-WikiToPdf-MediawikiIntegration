# PDF Parser integration
Integrates the [PDF Parser](https://github.com/Setup007/HowToBeAHero-WikiToPdf) built for [How to be a Hero](https://howtobeahero.de/) into a MediaWiki installation.

# Installation
* Clone this repository into a folder called `PDFParser` inside your `/extensions`-folder of your MediaWiki root-folder
* Add `wfLoadExtension( 'PDFParser' );` to the `/LocalSettings.php`-file
* Configure Reverseproxy for the Parser and set URL in `LocalSettings.php`
* e.g. $wgPDFParserURL = "https://pdf.howtobeahero.de?title=";

