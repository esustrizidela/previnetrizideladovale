<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
