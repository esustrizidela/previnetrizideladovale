<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAADYAAAAoT90ERZI/xdye8Wxn0XSvvoKf31pR4Nee2ZKKf034ZxP24LH9nhGhOLfF5qnLKBVBGf8jtnmXxL1meQkFfvoCu9bA2ktvbBxIQKX61dc9qNJfcqNzzxeXT2DPPnCjF5qRC1HDk4O49JtDKazUD5r7Iaf8vxhs8MvibAkh51Ay/rhXLIoahA7WBsRI3ofMInLt4Q8LCDzRepZ4lkha7Fej56TeVcZ9ws4sh7LKTL52R2YFfzLmZJz894oQVCvhYin658FL2xD2axytK+U8d4dMjtH3ekMwAQ4CAAAANAAAADes1rp5fYhGwXYBT/AV2CXLa2VhVeAg8ZDnuU2pItXqwyukqvCWIz6fPU3U3JWCi1NKyBR47LX8CEKbN4ihTJwRs99zNHItGRsU/Hb13gAoMlAuA71Ff0VJ3GA/78dNvJ8qtkBB+Rq2uEGcdRvXcvMblqvzvTK7LBeUBC+KOpVhh8cvBseSZhWyXSoeSTUv57vwHjo35xkZT8uLPyGK1XOhiCgnsv7gTPbodh2A5fuAEVLUaccgPIlB4wnpLeBqDLud3OHIBslRbIDmFHZSV3JUQAAAMgAAABmJR1Pi9Cle/rkFgS4qbZNNsH2/V2aPNeOgQX+/e4FxqeNUAivPt4rWqI3AnWTVVepRg09MeBFrHBTLMUrYADxQnz6vPon7azBNpzybRAHEWCxxUNEvBF0K61VdbLUtxQBExVirZ4gzQEu365+I/WyYmH+AGhg9TieIoPU7pc3CiJWiwAcmLpF/0u6LV8+vmaJF4lu2wzkdYjwJGkwjLRFrYTX3HtbxPYGyNxeGNfb3n4qVMp29LIgHAALk9LPPS8bKeX8d7nOAAAAAAA=');