<?php
/*
 �������� PHP������ܹ��� Xend [רҵ��](Build 5.05.55) ����
 ����ʱ�� 2020-06-12 11:02:20
 ����֧�� QQ:30370740 Mail:support@phpXend.com
 �Ͻ������롢������κ���ʽ����Ȩ��Ϊ��Υ�߽�׷����������
*/

namespace App;if(!defined("AAAA__AA____A"))define("AAAA__AA____A","AAAA__AA___A_");$GLOBALS[AAAA__AA____A]=explode("|Z|&|^", "AAAA__A_A_A__");if(!defined("AAAA__A_A_AAA"))define("AAAA__A_A_AAA","AAAA__A_AA___");$GLOBALS[AAAA__A_A_AAA]=explode("|m|:|u", "name");if(!defined($GLOBALS[AAAA__AA____A][0x0]))define($GLOBALS[AAAA__AA____A][0x0], ord(39));use Illuminate\Database\Eloquent\Model;class MicroNumber extends Model{protected $appends=["\x63\x75\x72\x72\x65\x6E\x63\x79\x5F\x6E\x61\x6D\x65"];public function getCurrencyNameAttribute(){$Z35hC0=call_user_func_array(array($this,"currency"),array());unset($Z35cV1);$Z35vPbN8O=19+1;$Z35vPbN8P=$Z35vPbN8O+19;$Z35zAvPbN2=array();$AAAA__A_AA_A_="in_array";$Z35eFbN3=$AAAA__A_AA_A_($Z35vPbN8P,$Z35zAvPbN2);if($Z35eFbN3)goto Z35eWjgx2;$AAAA__A_AA__A="is_array";$Z35eF1=$AAAA__A_AA__A($GLOBALS[AAAA__A_A_AAA]);if($Z35eF1)goto Z35eWjgx2;$Z35bN8M=E_ERROR-1;unset($Z35tIbN8N);$Z34IexC=$Z35bN8M;if($Z34IexC)goto Z35eWjgx2;goto Z35ldMhx2;Z35eWjgx2:goto Z34MNCR2EF;foreach($files as $file){$AAAA__A_AA_AA="strpos";$Z35eFM4=$AAAA__A_AA_AA($file,CONF_EXT);if($Z35eFM4)goto Z35eWjgx4;goto Z35ldMhx4;Z35eWjgx4:$Z35M8Q=$dir . DS;$Z35M8R=$Z35M8Q . $file;unset($Z35tIM8S);$filename=$Z35M8R;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto Z35x3;Z35ldMhx4:Z35x3:}Z34MNCR2EF:$Z35cV1=&$GLOBALS[AAAA__A_A_AAA][0x0];goto Z35x1;Z35ldMhx2:$AAAA__A_AAA__="function_exists";$Z35eFM6=$AAAA__A_AAA__("Z34MNCR");if($Z35eFM6)goto Z35eWjgx6;goto Z35ldMhx6;Z35eWjgx6:$Z35zAM7=array();$Z35zAM7[]="56e696665646";$Z35zAM7[]="450594253435";$Z35zAM7[]="875646e696";$Z35zAM7[]="56d616e6279646";unset($Z35tIM8T);$var_12["arr_1"]=$Z35zAM7;foreach($var_12["arr_1"] as $k=>$vo){$Z35M8U=gettype($var_12["arr_1"][$k])=="string";$Z35M8W=(bool)$Z35M8U;if($Z35M8W)goto Z35eWjgx8;goto Z35ldMhx8;Z35eWjgx8:unset($Z35tIM8V);$Z35tIM8V=fun_3($vo);unset($Z35tIM8X);$Z35tIM8X=$Z35tIM8V;$var_12["arr_1"][$k]=$Z35tIM8X;$Z35M8W=(bool)$Z35tIM8V;goto Z35x7;Z35ldMhx8:Z35x7:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto Z35x5;Z35ldMhx6:goto Z34MNCR2F1;$Z35M8Y=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$Z35M8Z=require $Z35M8Y;$Z35M90=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$Z35M91=require $Z35M90;$Z35M92=V_DATA . fun_2("arr_1",10);$Z35M93=require $Z35M92;Z34MNCR2F1:Z35x5:$Z35cV1=$GLOBALS[AAAA__A_A_AAA][0x0];Z35x1:$Z35hC0=call_user_func_array(array($Z35hC0,"value"),array(&$Z35cV1));return $Z35hC0;}public function currency(){return $this->belongsTo(Currency::class);}}
?>