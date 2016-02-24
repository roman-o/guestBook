<?php
include "lib/word.lib";
$cens = getWord ();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	
</head>
<body>
<div id="container">

    <div id="form">
        <h1>Редактирование стоп листа </h1>

        
            <form method="Post" action="cens.php">
                <label > Ввидете слово для добавления:<input type="text" name="addWord">
				<?php	$cens=addWord ($cens);?>
				<input type="submit" name="add"  value="add">
				<hr>
				<label> Ввидете слово для удаления: <input type="text" name="delWord">
				 <?php	$cens=delWord ($cens);?>
                <input type="submit" name="delete"  value="delete">
               
                
            </form>
    </div>
	<div id="masseges">
	<h1>Список слов стоп листа:</h1>
<?php show ($cens);?>
	</div>
	</div>
</body>
</html>

