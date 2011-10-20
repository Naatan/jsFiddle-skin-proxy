<?php

require_once dirname(__FILE__) . '/jsfiddle-skin-proxy.php';

try {
	echo jsfiddle_skin_proxy::process($_GET['id'], isset($_GET['result']));
} catch (Exception $e) {
	// invalid id
}

?>