<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');