<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action=' ' method="post">
    number 1 : <input type='number' name='number_1'/><br>
    number 2 : <input type='number' name='number_2'/><br>
    <input name="operator"type='submit' value='+'/>
    <input name="operator"type='submit' value='-'/>
    <input name="operator"type='submit' value='*'/>
    <input name="operator"type='submit' value='/'/>
    <input name="operator"type='submit' value='%'/>
    </form>
<?php

switch ($_REQUEST['operator']) {
  case '+':
    echo $_REQUEST['number_1']+$_REQUEST['number_2'] ;
    break;
  case '-':
    echo $_REQUEST['number_1']-$_REQUEST['number_2'] ;
    break;
  case '*':
    echo $_REQUEST['number_1']*$_REQUEST['number_2'] ;
    break;
  case '/':
    echo $_REQUEST['number_1']/$_REQUEST['number_2'] ;
    break;
  case '%':
    echo $_REQUEST['number_1']%$_REQUEST['number_2'] ;
    break;
}
 ?>
  </body>
</html>
