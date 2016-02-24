<?php
include "lib/messages.lib";
$messages=getContent();
$messages=addContent($messages);
$messages =censy($messages);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	
</head>
<body>
<div id="container">

    <div id="form">
        <h1>Добавить коментарий </h1>

        
            <form method="Post" action="index.php">
                <label > Ваше имя:</label><input type="text" name="userName">
				<label> Коментарий <textarea name="userMessage"> </textarea>
              
                <input type="submit" name="submit" value="submit">
                
            </form>
    </div>
	<div id="masseges">
	<h1>Люди пишут:</h1>
	<?PHP showContent($messages); ?>
	
	</div>
	</div>
</body>
</html>
