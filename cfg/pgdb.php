<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');