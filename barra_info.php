<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAAB4AQAAH9QKtaq60pVOsEX8HcXhaaOb/UEwZaam7Bx9ijZejeCr6p1m7tu6TVi0rHTm7olwWym/pwyAga3t/mTO8yJv9sSp7bZHgTJUcn0LCQfQsIcPsONs2mBBbqbw3FselplVmjQ1gR2+H/Md97aZh85ekTTwjEMLohI55tZoAs8DoFxXrq29xxuspCktGODQTfzKy0hzpbtUAnygs/0ejcnn55dO7jauUmW0dHJgmMiaMugwNMW74PJm3Y0gV1yvA3pSH6erYMO0rfGk1tP7K/zp0SY1vSQ6514CbI7rUcqIjGh+Fa0ciOAhJVsHJR5OFWdW43cGTpJkKMgxtehFEzXK6RksS15hf5X/Qmv4Mz+ziq6cl/fFRBz8jiqcgu7D6qY0JyehHVKQAK4TF+V2wEDdMHKy6DdhkwDJi2bzmb1ChUbQoP6Cfw/h1HOKF9EIHT2pXCR8bB6tNGdi4r8R+z2yJ46ZmxvQxKD9tWUv4ZqOOWdmEk090zFqQwgAAAB4AQAAaffRTRqtdMDKABavnGWjSUx5mlHn6hKlMEJhWaN9aqp+mXxrdtaPgyRY9JC3O5PkDKu9YL2t74UM21d/Kv9irEMUt/mTm5RByO62KS1N2eSXa07m7KEsot/2225dLHhQLAZ9HCZk/Pjk36Djr8dyXVkpnpuA5m6q/vI+6Ve0Z2riCmWhAydhK21sIRC1b+VzvSGuY/4RigKdw8h7IBFHyKYOW7vPPgYA9DIhB7+ibpQRGUoFe7BG4I/SpIF8RPCJM5hV2rMjZ61SzLIaEgH3QoQ9cb6cxaWZw3mpw0/24Kl/hlYWbC1ErOU1L0HwALmWv0SzR6Vf0NRSndTMqXVWyh1HNhsN9fXynvm3oaAzKqEeMeayYdSgLy+7gwEeVEhO3tKLZEx9CrjeF4KOQujP1JpE1m4Z0Zv1EmYNODlqxf38IpL8hU8MElmcoYlfy4tp+YtgD9PyIRS6bwG6Rq043OCKN+/yN1RaBGSl4/YxHOw66iPDditiNVEAAAB4AQAANz9wbcElH86APHwvccDe0tycex+0Em+UY5tqIUJt6xUZfHONOZh9HJnvEqIsQS2nPqpyPiR15LsUf3VTjpvW22bUkgvSKl/4CqjipebBNhT5LGj6JwS1PoTXW8WGPSP9m76LyFcR8ysp3GoPuTQgDbIQrtQ/rECuAjUsQvGXLPiA3YsgxNXGFVCNMm+y3F0aLumap9gnW3DqJkDke/dHYZ6ydQ2bJLL4x+iz7+jCpWwicpqWYTUWi3gxXM7RGsHGAaUafo41Pt2kS7uOwdsXZCx32XrYxAlcRK2yQICpl5UsaVEBLQ79SdpxY73l1FyhT45OYcRNzanSXC4A2co+oEPWiiwrRrWYjKkZ/VMDfNuYrKusql+XKPRgBzkZryWGdohGeuJ4MZja4hWVrgovZ1MkVOXI/HIVIMbHBrngcHNtIMf/7Pq7EIOtqTpWlS9Mg3JCtsjYOoK6QAjDi69WlMgM0iEjLzPGQG/nDlTPaErPMV+jdXphSgAAAAA=');
