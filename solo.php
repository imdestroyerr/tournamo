<html>
    <head>
        <link rel="stylesheet" type="text/css" href="solo.css">
        <meta name="viewport" content="width=device-width, initial-scale=0.3">
    </head>
    <body>
        <nav>
            <p>SOLO PLAYERS</p>
        </nav>
        <div>
       
         

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players";
         

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
                   
   
           
                 $sql = "SELECT  name,ign,xp,psr,csr,country,role FROM solo";
                         $result = $conn->query($sql);
                        
                        
                      

                    
if ($result->num_rows > 0) 
{
   
    while($row = $result->fetch_assoc())
    {
        echo "<div class='display'>";
        echo		"<table>";
        echo				"<tr>";
        echo					"<th>NAME</th>";
        echo					"<th>IGN</th>";
        echo					"<th>COUNTRY</th>";
        echo					"<th>XP</th>";
        echo					"<th>PSR</th>";
        echo                    "<th>CSR</th>";
        echo                    "<th>ROLE</th>";
        echo				"</tr>";
        	       $name = $row['name'];
					$ign = $row['ign'];
					$country = $row['country'];
					$xp = $row['xp'];  
                    $psr= $row['psr'];
                    $csr = $row['csr'];
                    $role = $row['role'];
                 
                 
                 echo 	"<tr >";
					echo 		"<td>$name</td>";
					echo 		"<td>$ign</td>";
					echo 		"<td>$country</td>";
					echo 		"<td>$xp</td>";
                    echo 		"<td>$psr</td>";
                    echo 		"<td>$csr</td>";
                    echo 		"<td>$role</td>";
					echo 	"</tr>";

                    echo	"</table>";
                    echo "</div>";	
                    echo "<br><br>";
      
    }
     
    
} 
else
{
    
    echo "<div style='color:#e94b3c; font-size:40px'> No players registered</div>";
}                    
$conn->close();
?>
 </div>
    
    </body>
</html>