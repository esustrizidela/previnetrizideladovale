<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');