<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');