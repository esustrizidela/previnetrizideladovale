<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
