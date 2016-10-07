<html>
<head>
    <script>
        function Validate()
        {
            
          if(f1.department.selectedIndex==-1)
          {
            alert("please select a department!!!");
            f1.department.focus();
            return false;
          }
        }
    </script>
</head>
<body>
    <h2>Select a Department for list of Employees</h2>
    <form name="f1" action="http://localhost/department/getdeptinfo.php" method="post" onsubmit="return Validate();">
        <?php
            $connection = mysqli_connect('localhost','root','root','employee');
            mysqli_select_db($connection, 'employee');

            $deptinfo = mysqli_query($connection, "SELECT * FROM dept");
            echo "<select name='department' size='".mysqli_num_rows($deptinfo)."'>"; 

            while($row = mysqli_fetch_array( $deptinfo, MYSQLI_ASSOC)){
                $dno = $row['dno'];
                $dname = $row['dname'];
                echo "<option value='$dno'>$dno $dname</option>";
            }
        ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
  
</body>
</html>