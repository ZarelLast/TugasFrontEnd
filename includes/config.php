<?php
$CURRENT_PAGE = "";
$PAGE_TITLE = "";
$THEME = "day";
switch ($_SERVER["SCRIPT_NAME"]) {
	case "/frondend_meet13/about.php":
		$CURRENT_PAGE = "About";
		$PAGE_TITLE = "About Us";
		break;
	case "/frondend_meet13/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contact Us";
		break;
	case "/frondend_meet13/index.php":
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Welcome to my homepage!";
}
