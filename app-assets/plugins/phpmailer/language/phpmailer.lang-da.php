<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');