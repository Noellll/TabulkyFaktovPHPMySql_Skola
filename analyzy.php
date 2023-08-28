<?php
function vstup($dimenzia,$uroven):string
{
    $r="";
    switch ($dimenzia) {
        case 'cas':
            switch ($uroven) {
                case '1':
                    $r="rok";
                    break;
                case '2':
                    $r="mesiac";
                    break;
                case '3':
                    $r="den";
                    break;
                default:
                    // code...
                    break;}
            break;
        case 'priestor':
            switch ($uroven) {
                case '1':
                    $r="vuc";
                    break;
                case '2':
                    $r="okres";
                    break;
                case '3':
                    $r="mesto";
                    break;
                default:
                    // code...
                    break;}
            break;
        case 'vyrobok':
            switch ($uroven) {
                case '1':
                   $r="id_skupina";
                    break;
                case '2':
                    $r="id_typ";
                    break;
                case '3':
                    $r="id_vyr";
                    break;
                default:
                    // code...
                    break;}
            break;
        default:
            // code...
            break;
    }
    return $r;
}
function velicina($vel):string 
{
    $v="";
switch ($vel) {
    case 'prijmy':
        $v="sum(PRIJEM)";
        break;
    case 'naklady':
        $v="sum(NAKLADY)";
        break;
    case 'zisk':
        $v="sum(ZISK)";
        break;
    default:
        // code...
        break;
}
return $v;
}
if($_POST){
$con=mysqli_connect("sql4.webzdarma.cz","pach1boreccz6890","pjrU16e9#Y7mRd-K1Ao@","pach1boreccz6890");

if ($con->connect_error) { 
  die("connection failed" . $con->connect_error);
}
$zmena = 0;
switch ($_POST["pocet"])
{
    case "1": 
       $sql="select ".vstup($_POST["dimenzia"],$_POST["uroven"])." as dim,".velicina($_POST["velicina"])." as sledovana_velicina from tf3 group by dim";
       if($_POST["dimenzia"] == "cas" and $_POST["uroven"] == "2"){
		   $sql="select rok,".vstup($_POST["dimenzia"],$_POST["uroven"])." as dim,".velicina($_POST["velicina"])." as sledovana_velicina from tf3 group by dim,rok";
		   $zmena = 2;
	   }
       if($_POST["dimenzia"] == "cas" and $_POST["uroven"] == "3"){
		   $sql="select rok,mesiac,".vstup($_POST["dimenzia"],$_POST["uroven"])." as dim,".velicina($_POST["velicina"])." as sledovana_velicina from tf3 group by dim,rok,mesiac";
	       $zmena = 3;
	   }	   
        	   	   
       $result=mysqli_query($con,$sql);	   
	   echo "<center>";
       while($row=mysqli_fetch_assoc($result)){
		   if($zmena ==2){
			   echo "&nbsp".$row["dim"]." ".$row["rok"]." ".$row["mesiac"]." ". $row["sledovana_velicina"]."<br>";
		   } 
		   else if($zmena ==3){
			   echo "&nbsp".$row["dim"]." ".$row["rok"]." ".$row["mesiac"]." ".$row["den"]." ". $row["sledovana_velicina"]."<br>";
		   } 
           else{
           echo "&nbsp".$row["dim"]." ". $row["sledovana_velicina"]."<br>";
		   }
       }
        break;
    case "2": //cas/priestor
    echo "<table><thead><tr><td></td>";
    $c=array();
        $sql="select ".vstup("cas","1")." as cas from tf3 group by cas";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
           $c[]=$row["cas"];
       }
    $p=array();
        $sql="select ".vstup($_POST["dimenzia"],$_POST["uroven"])." as priestor from tf3 group by priestor";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
           $p[]=$row["priestor"];
       }
    foreach ($p as $value) {
        echo "<th> $value </th>";
    }
	$cc = 3;
    echo "</tr></thead><tbody>";
    foreach ($c as $valuec) {
        echo "<tr><th>$valuec</th>";
        foreach ($p as $valuep) {
            $sql="select ".velicina($_POST["velicina"])." as sledovana_velicina from tf3 where ".vstup($_POST["dimenzia"],$_POST["uroven"])." = '".$valuep."' and ".vstup("cas","1")." = '".$valuec."'"; //echo "$sql <br>";
            $result=mysqli_query($con,$sql);
            $hh=mysqli_fetch_assoc($result)["sledovana_velicina"];
            if($hh)
            echo "<td>$hh</td>";
        else echo"<td>0</td>";
		echo "</center>";
        }
    }
echo "</tbody></table>";

        break;
    
    default:  
        break;
}

    mysqli_close($con);
} 
    ?>