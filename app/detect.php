<?php

require_once 'm/mobile_detect.php'; /** Class(es) for Mobile detection and data **/

$detect = new Mobile_Detect;

$browser_t = ($detect->isMobile() ? ($detect->isTablet() ? 'smartphone' : 'mobile') : 'web'); 




	 ?>