<?php

defined('DS') ? null :  define('DS', DIRECTORY_SEPARATOR);

if ($_SERVER['SERVER_NAME'] == "sandbox.dev"){
    defined('SITE_ROOT') ? null : define('SITE_ROOT' , DS.'media'.DS.'sf_sandbox'.DS.'davedunnephoto.com'.DS);
} else {
    defined('SITE_ROOT') ? null : define('SITE_ROOT' , '/home2/xxx/');
}

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

require_once(LIB_PATH.DS."config.php");

require_once(LIB_PATH.DS."functions.php");

require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");
require_once(LIB_PATH.DS."pagination.php");

require_once(LIB_PATH.DS."user.php");
require_once(LIB_PATH.DS."photograph.php");
require_once(LIB_PATH.DS."comment.php");
require_once(LIB_PATH.DS."gallery.php");


//require_once(LIB_PATH.DS."class.phpmailer.php");
//require_once(LIB_PATH.DS."class.smtp.php");


?>