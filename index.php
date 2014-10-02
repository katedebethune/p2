<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- validation error on the following line (09/16/2014)
    Bad value X-UA-Compatible for attribute http-equiv on element meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kate de Bethune - csci e15 - p2 - Password Generator - October 2014</title>
    
    <?php require 'wg_logic.php'; ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    
   <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <style>
      * {
      		/*border-width: 1px; 
			border-style: dashed; */
	  }
      body {
        font-family: 'Raleway', sans-serif;
      }
	
		
		h1, h2, h3, h4, p {
			text-align:center;
			/*border-width: 1px;*/
			/*border-style: dashed;*/
			
		}
	
		.container {
			width:50%;
			min-width:600px;
			margin-bottom:50px;
			border-width: 1px;
			border-style: solid;
			border-color: red; 
		}	
		
		img {
			display:block;
			margin:auto;
			width:100%;
			border: 4px solid #000;
		}
		
		.pw_form {
			background-color: #9BD644; 
			color: #333;
			/* margin: 12px; */ 
			display:block;
			margin: 0 auto;
			padding: 20px; 
			/* width: 550px; */
			border-color: #333; 
			border-style: solid;
			border-width: 0px 0px 5px 0px;
		}
		
		.pw_output h2 {
			background-color: #E6F291; 
			color: #333;
			display:block;
			margin: 0 auto;
			padding: 20px;
			text-align: center;
		}
		
		.left h1,h2,h3,h4, p {
			text-align:left;
		}
		
		
		.callout {
			font-weight:bold;
			
		}
		
		li {
			padding: 0px 0px 0px 10px;
		}	
		
		.radio_buttons {
			display: block;
			font-size: 1.25em;
			width: 400px;
			/* float: left; */
			clear: none;
			padding: .1em 0 .1em 0;
		}
		
		input {
			background: white;
			padding: .25em;
		}
			
	
	</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   
   <body class="container">
     <h1>An XKCD-style Password Generator</h1>
    
    <form action="index.php" method="post">
    
	<div class="pw_form">
    <fieldset>
    <div class="radio_buttons callout">
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
    
    Add a symbol:  <input type='radio' name='number' value='1' checked='checked'>yes
     	       <input type='radio' name='number' value='0'>no
    <br/>
    Add a number: <input type='radio' float='right' name='symbol' value='1' checked='checked'>yes
     	       <input type='radio' name='symbol' value='0'>no
    <br/>
    Capitalize first word:  <input type='radio' float='right' name='uc' value='1'checked='checked'>yes
     	       <input type='radio' name='uc' value='0'>no
    <br> 
    <input type="submit">
    </div>
    
    </fieldset>
    
    </div>
    
</form>

	<div class="pw_output">
	<h2><?php 
		echo pickWords($_POST['num_words'], $_POST['number'], $_POST['symbol'], $_POST['uc']);
	?> 
	</h2>
	</div>

    <div class="left">
    
    <h2>How does the password generator work?</h2>
    <p>Generate an XKCD-style password by selecting among the following options:
    	<li>number of words</li>
    	<li>a symbol</li>
    	<li>a number</li>
    	<li>first letter capitalized</li> </p>
    <p>Press submit and you'll see a new password you can use.</p>
    
    <h2>What is an XKCD-style password generator anyway?</h2>
    <p>Randall Munroe, the creator of the XKCD comic, put forth the idea that 
    passwords made up of multiple, memorable words, would be much easier for
    humans to remember and much harder for computers to hack. By contrast, the
    average password composed of one, commonly-used, English word, with a few
    additional symbols and numbers is quite hard for the average human to
    remember while being relatively easy for a computer to crack. </p>
    
     
    
    <img src = "img/xkcd_img.png" alt="xkcd_img" >
    <p>Image courtesy of <a href="http://xkcd.com/license.html">xkcd.com</a></p>
    
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
