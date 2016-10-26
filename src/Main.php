<?php
require_once "ultimate-web-scraper/support/http.php";
require_once "ultimate-web-scraper/support/web_browser.php";
require_once "ultimate-web-scraper/support/simple_html_dom.php";
require_once "Page.php";
require_once "AthenaPage.php";
$Athena = new AthenaPage("https://1039.portal.athenahealth.com/");
foreach ($Athena->parse() as $url) {
	echo $url . "<br>";
}
?>
