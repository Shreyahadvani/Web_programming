<!DOCTYPE html>
<html>
<head>
<title>3rd Lab Program</title>
<meta http-equiv="refresh" content="1">
<style>
      .a 
      {
        color: white;
        font-size: 50px;
        color:red;
		background-color:black;
		font-family:digital dream fat;
		src:url(digital-dream);
	  }
    </style>
<body>
    <div>
        <?php
		echo "<table colspan=5 border=4 class=a>";
		echo "<tr>";
		echo "<td>";
        date_default_timezone_set("Asia/Calcutta");
        echo date("h:i:s a");
		echo "</tr>";
		echo "</td>";
		echo "</table>";
        ?>
    </div>	
</body>
</head>
</html>