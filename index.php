<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Quản lý hội viên CSM</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/jqx.base.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/jqx.energyblue.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	<script type="text/javascript" src="script/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="script/jqxcore.js"></script>
	<script type="text/javascript" src="script/jqxbuttons.js"></script>
	<script type="text/javascript" src="script/jqxscrollbar.js"></script>
	<script type="text/javascript" src="script/jqxmenu.js"></script>
	<script type="text/javascript" src="script/jqxgrid.js"></script>
	<script type="text/javascript" src="script/jqxgrid.selection.js"></script>
	<script type="text/javascript" src="script/jqxgrid.filter.js"></script>
	<script type="text/javascript" src="script/jqxgrid.sort.js"></script>
	<script type="text/javascript" src="script/jqxdata.js"></script>
	<script type="text/javascript" src="script/jqxlistbox.js"></script>
	<script type="text/javascript" src="script/jqxgrid.pager.js"></script>
	<script type="text/javascript" src="script/jqxdropdownlist.js"></script>
	<script type="text/javascript" src="script/jqxwindow.js"></script>
	<script type="text/javascript" src="script/jqxnumberinput.js"></script>
	<script type="text/javascript" src="script/jqxinput.js"></script>
	<script type="text/javascript" src="script/generatedata.js"></script>
	<script type="text/javascript" src="script/gettheme.js"></script>
	<script type="text/javascript" src="script/globalize.js"></script>
	<script type="text/javascript" src="script/jqxcalendar.js"></script>
	<script type="text/javascript" src="script/jqxdatetimeinput.js"></script>
	<script type="text/javascript" src="script/jqxtooltip.js"></script>
	<script type="text/javascript" src="script/jqxcombobox.js"></script>
	<script type="text/javascript" src="script/jqxgrid.edit.js"></script>
	<script type="text/javascript" src="script/jqxcheckbox.js"></script>
	<script type="text/javascript" src="script/jqxgrid.aggregates.js"></script>
	<script type="text/javascript" src="script/jqxvalidator.js"></script>
	<script type="text/javascript" src="script/jqxexpander.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="head">
		<div class="hdr_abslnklst" id="menu"><?php include "menu.php"; ?></div>
	</div>
	<div class="top_outer">
		<div class="top_inner">
			<div class="top_center"></div>
		</div>
	</div>
	<div class="page_outer">
		<div class="page_inner">
			<div id="page">
				<div id="nav"><?php include "navbar.php" ?></div>
				<div class="content">
					<div id="container">
<?php $_F=__FILE__;$_X='Pz48P3BocA0KCQkJCQkJDQoJCQkJCQk0ZighNHNzNXQoJF9HRVRbJ3AxZzUnXSkpDQoJCQkJCQl7DQoJCQkJCQkJNG5jbDNkNSAibTVtYjVyLnBocCI7DQoJCQkJCQl9DQoJCQkJCQk1bHM1DQoJCQkJCQl7DQoJCQkJCQkJJHAxZzUgPSAkX0dFVFsncDFnNSddLiIucGhwIjsNCgkJCQkJCQk0Zig0c19mNGw1KCRwMWc1KSkgNG5jbDNkNSAiJHAxZzUiOw0KCQkJCQkJCTVsczUgNG5jbDNkNSAibTVtYjVyLnBocCI7DQoJCQkJCQl9DQo1Y2gyIDw8PDVuZA0KCQkJCQk8L2Q0dj4NCgkJCQk8L2Q0dj4NCgkJCTwvZDR2Pg0KCQk8L2Q0dj4NCgk8L2Q0dj4NCgk8ZDR2IGNsMXNzPSJwMWc1X2YyMnQiPg0KCQk8ZDR2IGNsMXNzPSJwMWc1X2YyMnRfNG5uNXIiPg0KCQkJPGQ0diA0ZD0iZjIydCI+DQoJCQkJPGQ0diBzdHlsNT0idzRkdGg6IG8wMHB4OyBmbDIxdDogbDVmdDsgYzJsMnI6ICNjOWMxY2I7IG0xcmc0bi10MnA6IDYwcHg7Ij4NCgkJCQkJPDQ+QzJweXI0Z2h0ICZjMnB5IGEwNm8tYTA2dSBieSBUcjFuIFBoMm5nPC80PjxwPk0mI2FhNzsgbmczJiM3ODk2O24gJiNhN287JiN1b2E7JiM3OTA3O2Mgc2gxcjUgdCYjNzh1Njs0IDwxIGhyNWY9Imh0dHA6Ly9ocW4udm4iIHQxcmc1dD0iX2JsMW5rIiBzdHlsNT0iYzJsMnI6IHI1ZDsiPmh0dHA6Ly9ocW4udm48LzE+PC9wPg0KCQkJCTwvZDR2Pg0KCQkJCTxkNHYgc3R5bDU9Inc0ZHRoOiBldTBweDsgZmwyMXQ6IHI0Z2h0OyB0NXh0LTFsNGduOiByNGdodDsgYzJsMnI6ICNjOWMxY2I7IG0xcmc0bi10MnA6IDYwcHg7Ij4NCgkJCQkJTSYjNzg4aTs0IGNoNCB0NCYjNzg3Njt0IGw0JiNhb3U7biBoJiM3ODc5OyBZTTogczEydjFuZ19wYyBoMiYjNzhlbztjIA0KCQkJCQk8MSBocjVmPSJodHRwOi8vZjJyM20uaHFuLnZuL201bWI1ci5waHA/ZWlhOC1wY3MxMnYxbmciIHQxcmc1dD0iX2JsMW5rIiBzdHlsNT0iYzJsMnI6IHI1ZDsiPnQmIzc4dTY7NCAmI2E3bzsmI2FhZTt5PC8xPg0KCQkJCQk8cD5DJiM3OHVpO20gdGgmI3VvYTsmI3U2NztuZyBtJiM3OHU2OzQgaCYjYXVvOzEgbSYjYWE3OyBuZzMmIzc4OTY7biB3NWJzNHQ1IG4mI2FhdTt5IGtoNCBjaCYjdW9hOzEgJiNhN287JiN1b2E7JiM3OTA3O2MgcyYjNzlhNjsgJiNhN287JiM3ODk2O25nICYjYWlvOyBjJiM3OTY2OzEgdCYjYWFpO2MgZzQmIzc4dW87LjwvcD4NCgkJCQk8L2Q0dj4NCgkJCTwvZDR2Pg0KCQk8L2Q0dj4NCgk8L2Q0dj4NCjVuZDsNCgk/Pg==';eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>
</div>
</body>
</html>