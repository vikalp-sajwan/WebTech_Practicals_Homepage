<head>  
    <style>
    td,th{ border: 1px solid black;
        }
    </style>
</head>
<body>
<h2>List of employees of this department</h2>
<?php
		$connection = mysqli_connect('localhost','root','root','employee');
		mysqli_select_db($connection, 'employee');
		$dno = $_POST['department'];
		
		 
		$deptemp = mysqli_query($connection, "SELECT * FROM pers WHERE dno = $dno");
		 
        echo "<table style='border:1px solid black'>";
        echo "<tr><th>Emp ID</th><th>Emp Name</th><th>Designation</th></tr>";   
		while($row = mysqli_fetch_array( $deptemp, MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td>".$row['empcode']."</td>";
                echo "<td>".$row['empname']."</td>";
                echo "<td>".$row['designation']."</td>";
//                echo $row['empcode']." ".$row['empname']." ".$row['designation']; 
                echo "</tr>";
            }
        echo "</table>";
	 echo "</body>";
?>
   