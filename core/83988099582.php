<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
