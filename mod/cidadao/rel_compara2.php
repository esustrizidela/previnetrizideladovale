<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
