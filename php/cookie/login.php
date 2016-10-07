<?php
$user = 'vikalp';
$pass = 'vikalp007';
if (isset($_POST['username']) && isset($_POST['password'])) 
{
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) 
    {
          if (isset($_POST['rememberme'])) 
         {
            if (isset($_COOKIE['username']))
			{
				echo "Welcome Back $user";
			}
			else
			{
				setcookie('username', $_POST['username'], time()+60*60*24*365);
				setcookie('password', md5($_POST['password']), time()+60*60*24*365);
				echo 'Cookie set';
			}
         } 
		 else
		 {
			 if (isset($_COOKIE['username']))
			{
				setcookie('username', $_POST['username'], time()-100);
				setcookie('password', md5($_POST['password']), time()-100);
				echo 'Cookie deleted!!';
			}
			echo "welcome user";
			
		 }
    } 
    else 
    {
          echo 'Username/Password Invalid';
    }
} 
else 
{
echo 'You must supply a username and password.';
}

?>
