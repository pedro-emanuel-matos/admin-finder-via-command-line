#!/usr/bin/php
<?php 

// admin finder coded by fr3ak
// visite  https://www.facebook.com/root.Chernobyl
// visite  brasilblackhat.com.br/ 
// visite  https://www.facebook.com/Noon4me/
	error_reporting(0);

		print " \t \t \t \t \t \t \t Admin finder coded by fr3ak \n";
		print " \t \t \t \t \t  visite --> https://www.facebook.com/root.Chernobyl/ \n";
		print " \t \t \t \t \t  visite --> https://brasilblackhat.com.br/ \n";
		print " \t \t \t \t \t  visite --> https://www.facebook.com/Noon4me/ \n \n";



	if(!$argv[1]){
		print "\t \t \t \t \t \t \t  use: php find.php https://site.com \n \n \n \n";
		exit(1);
	}else{
		$site = $argv[1];
		
	}
	$adminpage = array('admin.php','admin/','admin/login.php','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/','memberadmin/','administratorlogin/','adm/','admin/account.php','admin/index.php','admin/login.jsp','admin/admin.php','admin/account.php','joomla/administrator','login.php',
'admin_area/admin.php','admin_area/login.php','siteadmin/login.php','siteadmin/index.php','siteadmin/login.html','admin/account.html','admin/index.html','admin/login.html','admin/admin.html','admin_area/index.php','bb-admin/index.php','bb-admin/login.php','bb-admin/admin.php','admin/home.php','admin_area/login.html','admin_area/index.html','admin/controlpanel.php','admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html','webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html','admin/cp.php','cp.php','administrator/index.php','administrator/login.php','nsw/admin/login.php','webadmin/login.php','admin/admin_login.php','admin_login.php','administrator/account.php','administrator.php','admin_area/admin.html','pages/admin/admin-login.php','admin/admin-login.php','admin-login.php','bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','modelsearch/login.php','moderator.php','moderator/login.php','moderator/admin.php','account.php','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.php','admincontrol.php',
'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.php','adminarea/index.html','adminarea/admin.html','webadmin.php','webadmin/index.php','webadmin/admin.php','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.php','moderator.html','administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html','moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html','admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','user.php','account.html','controlpanel.html','admincontrol.html','panel-administracion/login.php','wp-login.php','adminLogin.php','admin/adminLogin.php','home.php','adminarea/index.php','adminarea/admin.php','adminarea/login.php','panel-administracion/index.php','panel-administracion/admin.php','modelsearch/index.php','modelsearch/admin.php','admincontrol/login.php','adm/admloginuser.php','admloginuser.php','admin2.php','admin2/login.php','admin2/index.php','adm/index.php','adm.php','affiliate.php','adm_auth.php','memberadmin.php','administratorlogin.php');


	foreach($adminpage as $page){
		$a = $site.$page;
		$return = get_headers($a);
		if(eregi('200', $return[0] )){
			print "found in:".$a."\n";
			print "bye \n";
			print "... \n";
			exit(1);
		}else{
			print"not found:".$a."\n";
		}  
	}





?>
