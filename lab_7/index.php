<?php

	$title = "Home Page";

?>

<DOCTYPE html>
<HTML><HEAD>
<TITLE><?php echo $title;  ?></TITLE>
<style>
	table {
		width:250px;
		border: #000 solid 2px;
		margin: 10px 0 0 100px;
		border-collapse: collapse;
	}
	td {
		border:#000 solid 4px;
		alignment-adjust: central;
	}
</style>
</HEAD>

<BODY>
	<p>
		<a href="index.php">Page 1</a>&nbsp;&nbsp;<a href="p2.php">Page 2</a>&nbsp;&nbsp;<a href="p3.php">Page 3</a>
	</p>
	<h3>Arrays in PHP Chapter 7</h3>

	<ol>
		<li>Size is not declared</li>
		<li>May hold diverse data types</li>
	</ol>
	
	<p>List array with reserved word &quot;array&quot;</p>
	<table>
	<?php
		$myarray = array(101, "John", "Johnson", "937-512-4131");
		$counter = count($myarray);
		for ($i=0; $i < $counter ; $i++) {
			echo "<tr><td>";
			var_dump($myarray[$i]);
			echo "</tr></td>";
		}
		
		for ($i=0; $i < $counter ; $i++) {
			echo "<tr><td>";
			echo($myarray[$i]);
			echo "</tr></td>";
		}
		
	?>
	
	</table>
	<!---
	<br>
	<p>List array with starting &quot;array&quot; index</p>
	<br>
	<table>
	<?php
		$month = array(1=> "Bob", "Steve", "David", "Trenton", "Katie", "Kelly", "Ian", "Terry");
		$counter = count($month);
		
		foreach ($$month as $myMon) {
				echo "<tr><td>";
			echo($month[$k]);
			echo "</tr></td>";	
		}	
	?>
	</table>--->
	<br>
	<p>Specific non-consective numeric indexes</p>
	<br>
	<table>
	<?php
		echo "<th>Building</th>";
		echo "<th>Room Number</th>";
		$office = array (10=> 325, 2=>222, 5=>5328);
		foreach ($office as $key => $value) {
			echo "<tr><td>";
			echo "$key";
			echo "</td><td>";
			echo "$value";
			echo "</td></tr>";
		}
	?>
	</table>
	
	<br>
	<p>Assigning Values</p>
	<br>
	<table>
	<?php
		
		$friend[0]="Mary";
		$friend[1]="Zech";
		$friend[2]="Ian";
		$friend[3]="Nick";
		$friend[] = "Stacey";
		$friend[] = "Megan";
		$friend[] = "Ron";
		
		foreach ($friend as $value) {
			echo $value;
			if ($value != "Ron") {
				echo ", ";
			}
		}
		
		echo "<br><br>";
		
		unset ($friend[4]);
		foreach ($friend as $value) {
			echo $value;
			if ($value != "Ron") {
				echo ", ";
			}}
		
	?>
	</table>
	

</BODY>

</HTML> 