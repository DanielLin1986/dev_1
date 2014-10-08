<html>
<head>
<meta content="text/html" http-equiv="content-type" charset="utf-8"/>
<title>Dectect Client Type</title>
</head>
<body>
<div style="margin:150px auto;text-align:center;border:1px dashed #f00;width:240px;padding:25px 5px;">
 
<?php
 
function is_mobile(){
 
$regExp="/nokia|iphone|android|samsung|htc|motorola|blackberry|ericsson|huawei|dopod|amoi|gionee|^sie\-|^bird|^zte\-|haier|";
 
$regExp.="blazer|netfront|helio|hosin|novarra|techfaith|palmsource|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
 
$regExp.="symbian|smartphone|midp|wap|phone|windows ce|CoolPad|webos|iemobile|^spice|longcos|pantech|portalmmm|";
 
$regExp.="alcatel|ktouch|nexian|^sam\-|s[cg]h|^lge|philips|sagem|wellcom|bunjalloo|maui|";
 
$regExp.="jig\s browser|hiptop|ucweb|ucmobile|opera\s*mobi|opera\*mini|mqqbrowser|^benq|^lct";
 
$regExp.="480×640|640x480|320x320|240x320|320x240|176x220|220x176/i";
 
        if(!isset($_SERVER['HTTP_USER_AGENT'])){
 
                return true;
 
        }else{
 
                return @$_GET['mobile'] || isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']) || preg_match($regExp, strtolower($_SERVER['HTTP_USER_AGENT']));
 
        }
 
}
 
?>
 
<input value="<?php echo '您是'.(is_mobile()? '手机' : '电脑').'用户';?>" readonly /><br />
 
<a href="/" onClick="alert('<?php echo $_SERVER['HTTP_USER_AGENT'].'\r\nIP:'.$_SERVER['REMOTE_ADDR']; ?>');return false;">查看UA信息</a> <a href='http://localhost'>返回首页</a>
 
</div>
</body>
</html>