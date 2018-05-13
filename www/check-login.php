<?php
if(($_POST['username']=='admin') && ($_POST['password']=='admin'))
{
    echo "1";
}
?>

/* if the posted values (username + password) are the same as given here, then echo "1" what means "username and password are correct" */
