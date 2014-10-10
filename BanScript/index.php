<form><input type=button value="Refresh" onClick="window.location.reload()"></form>
<style>
*{font-family: Tahoma; font-size: 13px;} 
td{padding: 3px; border: 1px #CACACA solid; background: #FAFAFA;} 
h1{font-size: 23px; color: #224466;}
</style>
<? include("./inc/db_config.php");?>
<h1>Nick bans:</h1>
<hr>
	<? include("./inc/bans.php");?>
<h1>IP bans:</h1>
<hr>
	<? include("./inc/ip-bans.php");?>
<h1>Warnings:</h1>
<hr>
	<? include("./inc/warnings.php");?>
<h1>Mutes:</h1>
<hr>
        <? include("./inc/mutes.php");?>