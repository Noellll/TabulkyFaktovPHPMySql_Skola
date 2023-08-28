<html>
<title>
Home
</title>
<body>
<table width = "100%" height = "100%" class="white" bgcolor = "white" border="0" cellspacing="0" cellpadding="0">
<tr bgcolor = "#66a3ff" width = "100%" height = "10%"><td></td><td width = "100%" height = "15%"><h1>Drevohračky s.r.o.</h1><p>Vypracoval: Noel Pach<br>Cvičiaci: &nbsp doc. Ing. Jaroslav Kultán, PhD.<br>Prednášajúci: &nbsp doc. Ing. Jaroslav Kultán, PhD.</p></td>
</tr>
<meta charset="UTF-8">
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "7%"><A HREF="index.php"><h3>Home</h3></A></td><tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "7%"><A HREF="subor2.php"><h3>Analýzy</h3></A></td><td></td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "7%"><A HREF="onas.php"><h3>O nás</h3></A></td width = "10%" height = "90%"></td><td></td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "7%"><A HREF="mojeprojekty.php"><h3>Moje projekty</h3></A></td><td></td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "7%"><A HREF="vyrobok.php"><h3>Výrobky</h3></A></td><td></td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "7%"></td><td></td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "50%"></td><td>
<?php
echo '<br /><br /><center>';
echo '<b><h1>Portfólio výrobkov</h1>  </b><br/><br /> ' ;
$var = mysqli_connect("sql4.webzdarma.cz","pach1boreccz6890","pjrU16e9#Y7mRd-K1Ao@","pach1boreccz6890") or die ("connect error");
$sql= "select * 
from Výrobok";
$res = mysqli_query($var,$sql) or die ("registration error");
       while($row=mysqli_fetch_assoc($res)){
           echo $row["id_vyr"]."         ". $row["nazovvyr"]. "         ". $row["id_typ"]. "        ". $row["predjedncen"]. "		". $row["vyrobnejednaklady"].  "<br>";
		}

?>
</td></tr>

</table>
</body>
</html>