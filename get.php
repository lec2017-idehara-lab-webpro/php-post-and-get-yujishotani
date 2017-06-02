<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>受信側</title>
  </head>

  <body>
  <?php
  	if( !isset($_GET['name'],$_GET['nr'],$_GET['mf'],$_GET['pw']) ||
  		strlen($_GET['name']) == 0 ||
  		strlen($_GET['nr']) == 0 ||
  		strlen($_GET['mf']) == 0 ||
  		strlen($_GET['pw']) == 0
  	)
  	{
  		echo 'Missing Data';
  	}
  	else
  	{
  		foreach($_GET as $k => $v)
  		{
  			echo "$k is $v.";
  			echo "<br>";
  		}
  		}
  ?>
  </body>

</html>
