<html>
<head>
<title>Simple calculator</title>
<link href="mc-styles.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
	<div class="content">
    
    <?php 
//Variable to print the result
$result = 0;

//Check text boxes

if ( (isset($_POST['num1']) && !empty($_POST['num1'])) || (isset($_POST['num2']) && !empty($_POST['num2']))) {
	$result = calc($_POST['num1'], $_POST['num2'], $_POST['operand']);
	} 
	
	//Calculation function

function calc($num1, $num2, $op)
{
	switch ($op)
		{
			case "+":
			$total = $num1 + $num2;
			return $total;
			break;		
			
			case "-":
			$total = $num1 - $num2;
			return $total;
			break;
			
			case "*":
			$total = $num1 * $num2;
			return $total;
			break;
			
			case "/":
			$total = $num1 / $num2;
			return $total;
			break;
			
			default:
			echo "unknown operator";
		}
}



?>

    
<!-- The calculator form-->
<form name="form1" method="post" action="mycalc.php">
  <table border="0">
    <tr>
      <td>Number 1</td>
      <td>Op.</td>
      <td>Num 2</td>
    </tr>
    <tr>
      <td><input class="fieldborder" type="text" name="num1"  size="10" maxlength="10" value="0"></td>
      <td id="op"><label for="select"></label>
        <select class="fieldborder" name="operand" id="select">
          <option>+</option>
          <option>-</option>
          <option>*</option>
          <option>/</option>
      </select></td>
      <td><input class="fieldborder" type="text" name="num2"  size="10" maxlength="10" value="0"></td>
    </tr>
    <tr>
      <td><input type="submit" name="compute"  value="Compute"></td>
      <td class="mytd" colspan="2"><?php  //Controls wether variables are empty or not
	  if (isset($_POST['num1']) and isset($_POST['operand']) and isset($_POST['num2']))
echo '<b>Result</b><br /> '.$_POST['num1']. ' '. $_POST['operand']. ' ' .$_POST['num2']. " = $result"; 	  
	  ?></td>
    </tr>
  </table>
</form>
    
	</div>
  <div class=".footer">Use "." instead of "," for decimals</div>
</div>
<p>Produced by: <a href="http://www.e-learning-education.gr">http://www.e-learning-education.gr</a></p>
</body>
</html>