<?php
     session_start();
        if( isset( $_SESSION['counter'] ) )
        {
        $_SESSION['counter'] += 1;
        }
        else
        {
        $_SESSION['counter'] = 1;
        }
?>
<html>
<head>
<title>Counter using session</title>
</head>
<body>
    <?php
       
        echo "You have visited this page <strong>". $_SESSION['counter']." time</strong> in this session.";
        
    ?>

</body>
</html>
