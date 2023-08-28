<html>
<title>
Súbor2
</title>
<body>
<table width = "100%" height = "100%" class="white" bgcolor = "white" border="0" cellspacing="0" cellpadding="0">
<tr bgcolor = "#66a3ff" width = "100%" height = "10%"><td></td><td width = "100%" height = "15%"><h1>Drevohračky s.r.o.</h1><p>Vypracoval: Noel Pach<br>Cvičiaci: &nbsp doc. Ing. Jaroslav Kultán, PhD.<br>Prednášajúci: &nbsp doc. Ing. Jaroslav Kultán, PhD.</p></td>
</tr>
<meta charset="UTF-8">
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "5%"><A HREF="index.php"><h3>Home</h3></A></td><td>

<form action="subor2.php" method="post"> 
<h2>
	<label for="pocet">&nbsp &nbsp &nbsp &nbsp Počet parametrov:</label>

<select name="pocet" id="pocet">
  <option value="1">1</option>
  <option value="2">2</option>
  
  </select>
<label for="dimenzia">Dimenzia:</label>

<select name="dimenzia" id="dimenzia">
	<option value="cas">čas</option>
	<option value="vyrobok">výrobok</option>
	<option value="priestor">priestor</option>
</select>
<label for="uroven">Úroveň:</label>

<select name="uroven" id="uroven">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  
</select>

</select>
<label for="velicina">Sledovaná veličina:</label>

<select name="velicina" id="velicina">
  <option value="prijmy">príjmy</option>
  <option value="naklady">náklady</option>
  <option value="zisk">zisk</option>
  
</select>
<button type="submit">Vykonaj</button>
</h2>
</form>







<td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "5%"><A HREF="subor2.php"><h3>Analýzy</h3></A></td><td><center><i>Pri dvojparametrovej analýze, je prednastavená prvá dimenzia čas a teda si nemôžete vybrať ako druhý parameter čas</i></center><td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "5%"><A HREF="onas.php"><h3>O nás</h3></A></td><td></td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "5%"><A HREF="mojeprojekty.php"><h3>Moje projekty</h3></A></td><td></td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "7%"><A HREF="vyrobok.php"><h3>Výrobky</h3></A></td><td></td></tr>
<tr height = "30"><td bgcolor = "#ff4d4d" align="center" width = "15%" height = "51%"></td><td><?php
include("analyzy.php");
?></td></tr>

</p>
</table>
</body>
</html>