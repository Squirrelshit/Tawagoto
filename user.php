<?php
//This page displays the profile of an user
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=neon">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Userpage</title>
    </head>
    <body>
<link async href="http://fonts.googleapis.com/css?family=neon" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
<style>
body {
  color: white;
  font-family: 'Roboto', sans-serif;
  text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
background: #f85032; /* Old browsers */
background: -moz-linear-gradient(top,  #f85032 0%, #f16f5c 50%, #f6290c 51%, #f02f17 71%, #e73827 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f85032), color-stop(50%,#f16f5c), color-stop(51%,#f6290c), color-stop(71%,#f02f17), color-stop(100%,#e73827)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #f85032 0%,#f16f5c 50%,#f6290c 51%,#f02f17 71%,#e73827 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #f85032 0%,#f16f5c 50%,#f6290c 51%,#f02f17 71%,#e73827 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #f85032 0%,#f16f5c 50%,#f6290c 51%,#f02f17 71%,#e73827 100%); /* IE10+ */
background: linear-gradient(to bottom,  #f85032 0%,#f16f5c 50%,#f6290c 51%,#f02f17 71%,#e73827 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f85032', endColorstr='#e73827',GradientType=0 ); /* IE6-9 */
    height: 100%;
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
</style>
    	<div class="header">
	    </div>
        <div class="content">
<?php
if(isset($_SESSION['username']))
{

?>
<div class="box">
	<div class="box_left">
    </div>
	<div class="box_right">
    </div>
    <div class="clean"></div>
</div>
<?php
}
else
{
?>
<div class="box">
	<div class="box_left">
    </div>
	<div class="box_right">
    </div>
    <div class="clean"></div>
</div>
<?php
}
if(isset($_GET['id']))
{
	$id = intval($_GET['id']);
	$dn = mysql_query('select username, email, avatar, signup_date, status, userpage from users where id="'.$id.'"');
	if(mysql_num_rows($dn)>0)
	{
		$dnn = mysql_fetch_array($dn);
?>
<?php
if($_SESSION['userid']==$id)
{
?>
<?php
}
?>
<table style="width:500px;">
	<tr>
    	<td><?php
if($dnn['avatar']!='')
{
	echo '<img src="'.htmlentities($dnn['avatar'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:130px;max-height:130px;" />';
}
else
{
	echo 'This user has no avatar.';
}
?></td>
    	<td class="left"><h1><?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?></h1>
        Status: <?php echo htmlentities($dnn['status'], ENT_QUOTES, 'UTF-8'); ?><br />
    	Email: <?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?><br />
        This user joined <?php echo htmlentities($dnn['signup_date'], ENT_QUOTES, 'UTF-8'); ?><br />
        Userpage: <br />
        <?php echo htmlentities($dnn['userpage'], ENT_QUOTES, 'UTF-8'); ?><br />
    </tr>
</table>
<?php
if(isset($_SESSION['username']) and $_SESSION['username']!=$dnn['username'])
{
?>
<?php
}
	}
	else
	{
		echo 'This user doesn\'t exist.';
	}
}
else
{
	echo 'The ID of this user is not defined.';
}
?>

	</body>
</html><?php
//This page display the profile of an user
include('config.php');
