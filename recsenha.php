<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');