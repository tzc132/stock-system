<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.55) 创建
 创建时间 2020-06-24 11:44:51
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace App\Console\Commands;if(!defined("A___AAAA_A_"))define("A___AAAA_A_","A___AAAA_AA");$GLOBALS[A___AAAA_A_]=explode("|^|}|~", "A___AAA____");if(!defined($GLOBALS[A___AAAA_A_][0]))define($GLOBALS[A___AAAA_A_][0], ord(9));use Illuminate\Console\Command;class RemoveQueue extends Command{protected $signature="\x72\x65\x6D\x6F\x76\x65\x5F\x71\x75\x65\x75\x65";protected $description="\xE5\xAE\x9A\xE6\x9C\x9F\xE7\xA7\xBB\xE9\x99\xA4\xE7\xA7\xAF\xE5\x8E\x8B\xE4\xBB\xBB\xE5\x8A\xA1";public function handle(){$G378O=!defined("A___AAA_AA_");if($G378O)goto G37eWjgx2;$G37bN8R=5-5;if($G37bN8R)goto G37eWjgx2;$G37bN8P=5-5;$G37bN8Q=$G37bN8P/2;if($G37bN8Q)goto G37eWjgx2;goto G37ldMhx2;G37eWjgx2:define("A___AAA_AA_","A___AAA_AAA");goto G37x1;G37ldMhx2:G37x1:unset($G37tI8O);$GLOBALS[A___AAA_AA_]=explode("|F|a|>","start1|F|a|>queues:*|F|a|>list|F|a|>end");$this->comment($GLOBALS[A___AAA_AA_][00]);unset($G37tI8O);$A___AAA__AA=\Illuminate\Support\Facades\Redis::connection();unset($G37tI8O);$A___AAA_A__=$A___AAA__AA->keys($GLOBALS[A___AAA_AA_]{0x1});foreach($A___AAA_A__ as $A___AAA_A_A){$G378O=$A___AAA__AA->type($A___AAA_A_A)==$GLOBALS[A___AAA_AA_][2];$G378S=(bool)$G378O;$G37bN8T=5+1;$G37bN8U=5>$G37bN8T;if($G37bN8U)goto G37eWjgx5;unset($G37tIvPbN8V);$G37IItr="qX";$G37bN8W=strlen($G37IItr)==1;if($G37bN8W)goto G37eWjgx5;if($G378S)goto G37eWjgx5;goto G37ldMhx5;G37eWjgx5:unset($G37tIM8X);$G37Mtun="login";$G37lFkgHhx6=$G37Mtun;$G37M8Y=$G37lFkgHhx6=="admin";if($G37M8Y)goto G37eWjgxc;goto G37ldMhxc;G37eWjgxc:goto G37cgFhx7;goto G37xb;G37ldMhxc:G37xb:$G37M91=$G37lFkgHhx6=="user";if($G37M91)goto G37eWjgxa;goto G37ldMhxa;G37eWjgxa:goto G37cgFhx8;goto G37x9;G37ldMhxa:G37x9:goto G37x6;G37cgFhx7:unset($G37tIM8Z);$url=str_replace($depr,"|",$url);unset($G37tIM90);$array=explode("|",$url,2);G37cgFhx8:unset($G37tIM92);$info=parse_url($url);unset($G37tIM93);$path=explode("/",$info["path"]);G37x6:$G378P=13*E_CORE_ERROR;$G378Q=$G378P+2792;$G378R=$A___AAA__AA->llen($A___AAA_A_A)>$G378Q;$G378S=$G378O&&$G378R;goto G37x4;G37ldMhx5:G37x4:if($G378S)goto G37eWjgxd;if(is_object(null))goto G37eWjgxd;$G37bN94=md5(5)=="wuNErC";if($G37bN94)goto G37eWjgxd;goto G37ldMhxd;G37eWjgxd:if(isset($config[0]))goto G37eWjgxf;goto G37ldMhxf;G37eWjgxf:goto G37Mtun208;if(is_array($rules))goto G37eWjgxh;goto G37ldMhxh;G37eWjgxh:Route::import($rules);goto G37xg;G37ldMhxh:G37xg:G37Mtun208:goto G37xe;G37ldMhxf:goto G37Mtun20A;$G37M95=$path . EXT;if(is_file($G37M95))goto G37eWjgxj;goto G37ldMhxj;G37eWjgxj:$G37M96=$path . EXT;$G37M97=include $G37M96;goto G37xi;G37ldMhxj:G37xi:G37Mtun20A:G37xe:$A___AAA__AA->del($A___AAA_A_A);goto G37x3;G37ldMhxd:G37x3:}$this->comment($GLOBALS[A___AAA_AA_]{3});}}
?>