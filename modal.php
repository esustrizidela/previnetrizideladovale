<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');