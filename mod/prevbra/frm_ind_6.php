<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
