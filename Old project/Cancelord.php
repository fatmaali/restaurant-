<?php
//include "connect.php";
include "resevationclass.php";
//connecttodatabase("party");
//connectToDatabase("party");
/*  <tr>
            <td class="style1">
                Costumer ID</td>
            <td class="style1">
                Full Name</td>
            <td class="style1">
                Username</td>
            <td class="style1">
                Password</td>
                <td class="style1">
                Email</td>

                
        </tr>*/
$s=new orderReservation();
$q=$s->searchIsdeletedrr();
//echo $q[0][0][0][1];
//echo $q[1][1][0][4];
//print_r( $q[1]);
echo count($q); 
echo '<table border="3">';
 	for ($row = 0 ;$row < count($q);$row=$row+2)
 	{
		
	
 // echo "<table>";
	echo "<tr>";
//	echo  @$q[$row][$coulm] ;
	//echo "</tr>";
	for ($i =0; $i <7 ;$i++)
	{
		
	
	echo "<td>";
	echo @$q[$row][$row][0][$i];
	echo "</td>";
}
	echo "</tr>";
	echo "<tr>";
	$row++;
	for($j=0; $j <7 ; $j++ ){
		echo "<td>";
	echo @$q[$row][$row][0][$j];
	echo "</td>";
}
	echo "</tr>";
	
}
echo "</table>";
?>