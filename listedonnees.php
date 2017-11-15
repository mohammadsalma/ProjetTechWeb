<?php   
requete($bd,$req);    
?>

<table class="">
<caption>donnees de relevés botaniques</caption>
<tr>
    <th><p class="text-error"></p></li>
    <th><p class="text-error"></p></th>
    <th><p class="text-error"></p></th>
    <th><p class="text-error"></p></th>
	  <th><p class="text-error"></p></th>
  	<th><p class="text-error"></p></th>
   
</tr>
<tr>

<? while($row = $req->fetch()) { ?>
        <td><? echo $row['']; ?></td>
        <td><? echo $row['']; ?></td>
        <td><? echo $row['']; ?></td>
        <td><? echo $row['']; ?></td>
    
				<td><? if ($row[''] == "0") { 
					echo ''; 
					} 
				if ($row[''] == "1") { 
					echo '<p class="text-warning"><strong></strong></p>'; 
					} 
			
				if ($row[''] == "2") { 
					echo '<p class="text-error"><strong></strong></p>'; 
				}?></td>
    
				<td>
				<? echo '<a class=""><a>
				<br/>
				'; ?>
				</td> 
</tr>

<? }   
$req->closeCursor();   
?>

</table>
