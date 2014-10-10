<?php
define('db_host','>Enter host<');
define('db_user','>DB user<');
define('db_passwd','>Enter Passwd<');
define('db_name','>Enter db name<');
//Database Connection//
@mysql_connect(db_host,db_user,db_passwd) or die("<b>ERROR:</b> ".mysql_error());
@mysql_select_db(db_name);
?>