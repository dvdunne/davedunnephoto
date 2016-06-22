<?php

defined('DS') ? null : define('DS' , DIRECTORY_SEPARATOR);
if ($_SERVER['SERVER_NAME'] == "sandbox.dev"){
	defined('SITE_ROOT') ? null : define('SITE_ROOT' , DS.'media'.DS.'sf_sandbox'.DS.'davedunnephoto.com'.DS);
} else {
	defined('SITE_ROOT') ? null : define('SITE_ROOT' , '/home2/xxx/');
}

defined('LIB_PATH') ? null : define('LIB_PATH' , SITE_ROOT.DS.'includes');



require_once(LIB_PATH.DS."functions.php");
?>
