<?php
$result = mysql_query("SELECT `ip`,`reason`,`banner`,`time`,`expires` FROM `ipbans` ORDER BY time DESC");
if($result != null){
//Table Header//
	echo "
	<table width=\"100%\">
	<tr bgcolor='#FFFFFF' style=\"font-weight:bold\">
		<td>IP</td>
		<td>Reason</td>
		<td>Banned by:</td>
		<td>When:</td>
		<td>End at:</td>
	</tr>";

	while($row = mysql_fetch_assoc($result)){
		//Convert time	$date_start = date("M d Y / g:i", substr($row['time'],0,10));
		$date_end = date("M d Y / g:i", substr($row['expires'],0,10));
		//Check if perm//
		if($row['expires'] == "0"){$date_end = "Never";}
		//Table goes here//
		echo "
		<tr>
		<td>".$row['ip']."</td>
		<td>".$row['reason']."</td>
		<td>".$row['banner']."</td>
		<td>$date_start</td>
		<td>$date_end</td>
		</tr>";
	}
	echo"</table>";
}
?>