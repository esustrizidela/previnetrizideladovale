<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');