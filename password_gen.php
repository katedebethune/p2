<?php
//error_reporting(-1); # Report all PHP errors
//ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>

    <title>password_generator_logic</title>
    <?php require 'wg_logic.php'; ?>
    
</head>

<body style='background-color: lightblue'>



<form action="password_gen.php" method="post">
    <div style='background-color: lightgreen; margin: 12px; 
			padding: 10px; width: 450px;
			border-color: darkgreen;
			border-style: solid;
			border-width: 0px 2px 1px 0px;'>
    Number of words: 
	<select name='num_words'>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
	</select>
    <br/>
    Add a symbol: <input type='radio' name='number' value='1' checked='checked'>yes
     	       <input type='radio' name='number' value='0'>no
    <br/>
    Add a number: <input type='radio' name='symbol' value='1' checked='checked'>yes
     	       <input type='radio' name='symbol' value='0'>no
    <br/>
    Capitalize first word: <input type='radio' name='uc' value='1'checked='checked'>yes
     	       <input type='radio' name='uc' value='0'>no
    <br> 
    </div>
    <input type="submit">
</form>

<?php  
/* echo pickWords(4,1,1,1); */

/* echo $_POST['num_words'];
echo $_POST['number'];
echo $_POST['symbol'];
echo $_POST['uc']; */

/* pickWords($_POST); */

echo pickWords($_POST['num_words'], $_POST['number'], $_POST['symbol'], $_POST['uc']);


/* foreach($_POST as $item) {
	echo $item;
} */

/* print_r($_POST); */

?> 


</body>
</html>

