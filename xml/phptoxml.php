<?php
    $conn = mysqli_connect("localhost","root","root","employee");
    $sql = "SELECT * FROM dept";
    $rs = mysqli_query($conn, $sql);
    $file = fopen("autogenerated.xml","w");
    
    fputs($file, "<?xml version = '1.0'?> \n");
    fputs($file,"<employee>\n");
    
    while($row = mysqli_fetch_array( $rs, MYSQLI_ASSOC)){
                $dno = $row['dno'];
                $dname = $row['dname'];
				$location = $row['location'];
                fputs($file,"<dept>\n" );
                  fputs($file, "<dno> $dno </dno> \n");
				    fputs($file, "<dname> $dname </dname>\n");
				    fputs($file, "<location> $location </location>\n");
                fputs($file, "</dept>\n" );
            }
    fputs($file, "</employee>" );
    echo "To view generated file <a href='autogenerated.xml'> CLICK HERE</a>";
    
?>




