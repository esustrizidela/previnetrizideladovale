<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');