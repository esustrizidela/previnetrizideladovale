<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
