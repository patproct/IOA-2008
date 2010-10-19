<?
include '2010schedule.php';

$sections = array("Schedule", "Results", "Photos", "Racing info", "About us");
$address = array("schedule", "results", "photos", "info", "about");
$menuArray = array();
$linkTagOpen;
$linkTagClose;
$explodedPath = array();
$footerNav;

function printMenu() {
	global $sections, $address, $menuArray, $linkTagOpen, $linkTagClose, $explodedPath;
	checkArray();
	echo "\t<dl>";
    for ($i = 0;$i < count($sections);$i++) {
			if ($address[$i] != $explodedPath[4]) {
				if (checkArray() == "yes") {
					$linkTagOpen = "<a href=\"../". $address[$i] ."/\">";
					$linkTagClose = "</a>";
					$indexPath = "<p class=\"navHome\"><!-- &ordm;<br /> --><a href=\"../\">Home</a></p>";
				}
				if (checkArray() == "home") {
					$linkTagOpen = "<a href=\"". $address[$i] ."/\">";
					$linkTagClose = "</a>";
					$indexPath = "";
				}
				if (checkArray() == "fail") {
					echo "No can do!";
				}
				if (results() == "results") {
					$subMenu[$i] = "<dd><a href=\"#09results\">2009 Results</a></dd>\n\t\t\t\t\t<dd><a href=\"#08results\">2008 Results</a></dd>";
				} else {
					$subMenu[$i] = "";
				}
			} else {
				$linkTagOpen = "<b>";
				$linkTagClose = "</b>&nbsp;<a href=\"../\">&laquo;</a>";
			}
	       	$menuArray[$i] = "\n\t\t\t\t\t\t<dt class=\"leftMenu\">". $linkTagOpen ."". $sections[$i] ."". $linkTagClose ."</dt>"/*. $subMenu[$i] .""*/;
	        echo $menuArray[$i];
    }
	echo "\n\t\t\t\t\t</dl>\n";
//	echo "\t\t\t\t\t<p align=\"center\">&ordm;</p>\n";
	echo $indexPath;
}

function checkArray() {
	global $address, $explodedPath;
  	$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
//	print_r(parse_url($url));
//	echo "<br/>";
		$currentPath = parse_url($url, PHP_URL_PATH);
		$explodedPath = explode('/', $currentPath, 7);
//	echo $currentPath ."<br />";
//	print_r($explodedPath);
//	echo "<br /><p>". $explodedPath[4] ."</p>";
	if (in_array($explodedPath[4], $address)) {
		return "yes";
	} else {
		if (($explodedPath[4] == "") || ($explodedPath[4] == "index.php")) {
			return "home";
		} else {
			return "fail";
		}
	}
}

function results() {
	global $explodedPath;
	if ($explodedPath[4] == "results") {
		return "results";
	}
}

function curPageURL() {
	$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	return $url;
}

function footer() {
	global $footerNav;
	echo "<!-- <div id=\"footerlogo\"><a href=\"index.html\"><img src=\"http://in-info-web4.informatics.iupui.edu/~patproct/n355/project/images/footer-logo.jpg\" alt=\"IOA: Racing outboards 50 years\" border=\"0\" height=\"90\" width=\"90\" /></a></div>-->
      <h2>Indiana Outboard Association: <b>We race boats!</b></h2>
      <p>Materials at this web site are the property of members of the Indiana Outboard Association. We are pretty good about sharing but ask before you 
use, please. Comments and questions may be directed to <a 
href=\"javascript:mailform()\">Patrick Proctor</a>.<!-- A still more 
glorious dawn awaits, not a sunrise, but a galaxy rise, a sky 
filled with 400 billion suns, the rising of the Milky Way. -->
</p>";
}
?>
