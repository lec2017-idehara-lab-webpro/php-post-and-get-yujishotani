<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
if( !isset($_GET['id'],$_GET['name']) ||
  strlen($_GET['id']) == 0 ||
  strlen($_GET['name']) == 0
)
{
  echo 'Missing Data';
}
else //¬‚è—§‚½‚È‚©‚Á‚½ê‡
{
print$_GET['id'];

print('no');

print$_GET['name'];

print('sankonnnitiha');
  }

?>


  </body>
</html>