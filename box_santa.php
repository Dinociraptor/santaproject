<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Письмо Дедушке Морозу</title>
    <link rel="icon" href="img/favicon.svg"/>
    <link rel="stylesheet" href="css/style.css"/> 
</head>
<body class ="body" >
    <div>
        <link href="https://fonts.cdnfonts.com/css/balsamiq-sans-2" rel="stylesheet">
        <header class="header" >
            <p class="header_title"> ПИСЬМО ДЕДУШКЕ МОРОЗУ</h1>
<img class="logo" src="/santa_sleigh.png">
        </header>
		<div class="lettersent">
			<div class="card">
				<h3 class="h3-mail">От кого:</h3>
				<p><?php echo $_POST['username']?></p>
 				<img class="card-image" src="/img/seal.png"/>
			</div>
			<div class="card card-second">
				<h3 class="h3-mail">Кому:</h3>
				<p> Деду Морозу</p><br>
				<h3 class="h3-mail">Куда:</h3>
				<p> Резеденция Деда Мороза</p>				

			</div>
		</div>

<footer class="footer">
    
<?php
//Настройка скрипта https://daruse.ru/zapis-v-bazu-dannyix-mysql-php-formu
if (isset($_POST['username'])&& isset ($_POST['parentname']) && isset ($_POST['emailparent']) && isset ($_POST['mailsanta'])){
	$username = $_POST['username'];
	$parentname = $_POST['parentname'];
	$emailparent = $_POST['emailparent'];
	$mailsanta = $_POST['mailsanta'];

	try {
		$db = new PDO ("mysql:host=localhost;dbname=santa", 'root', '');
		$db->query("SET NAMES 'utf8'");
		
		$data = array('username'=> $username, 'parentname' => $parentname, 'emailparent'=> $emailparent, 'mailsanta'=> $mailsanta);
		$query = $db->prepare("INSERT INTO mail (username, parentname, emailparent, mailsanta) values (:username, :parentname, :emailparent, :mailsanta)");
		$query->execute($data);
		$result = true;
	}
	catch (PDOException $e) {
		print "Ошибка!: " . $e->getMessage() . "<br/>";
	}

}

?>
	С любовью для детей от Дедушки Мороза
		</footer>
	
		<script src="/js/script.js"></script>
	
	</body>
	</html>