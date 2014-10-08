<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小考拉澳洲代购</title>
</head>

<body>
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
	
	if(is_mobile()){
		echo "<script language='javascript' type='text/javascript'>location.href='smartphone/index.html'</script>";
	} else {
		echo "<script language='javascript' type='text/javascript'>location.href='web/index.php'</script>";
	}

//echo '您是'.(is_mobile()? '手机' : '电脑').'用户';
 
?>
</body>
</html>
