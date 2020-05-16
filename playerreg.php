<?php
	session_start();
		$conn = mysqli_connect('localhost','root','');
		mysqli_select_db($conn,'players');
			if(isset($_POST['submit']))
			{
				
                    $name=$_POST['name'];
                    $ign=$_POST['ign'];
                    $xp=$_POST['xp'];
                    $psr=$_POST['psr'];
                    $csr=$_POST['csr'];
                    $country=$_POST['country'];
				    $role=implode(',',$_POST['ch']);
				
						$q1 = "INSERT INTO solo(`name`, `ign`, `xp`, `psr`, `csr`,`country`,`role`) VALUES('$name','$ign','$xp','$psr','$csr','$country','$role')";
								
							$request = mysqli_query($conn,$q1);
							if($request)
                                   echo "Registered successfully...";
							else
                                printf("error: %s\n", mysqli_error($conn));
			}
	   mysqli_close($conn);
?>



