<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
