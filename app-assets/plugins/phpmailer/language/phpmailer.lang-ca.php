<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
