<?php

require_once dirname(__FILE__) . '/jsfiddle-skin-proxy.php';

echo jsfiddle_skin_proxy::process($_GET['id'], isset($_GET['result']));

?>