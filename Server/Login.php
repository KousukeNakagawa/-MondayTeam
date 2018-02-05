<?php
# データベース接続
$sql = 'INSERT INTO Player(currentObj, nextObj, score) VALUES(0,0,0)'; 

$dbh = new PDO('mysql;dbname=TowerBattle;host=localhost',
				 'root',
				 'H@chiouji1');
				 
$sth = $dbh->prepare($sql);
$sth->execute();

# プレイヤーを返す
$sql = 'SELECT id FROM Player';
$sth = $dbh->prepare($sql); 
$sth->execute();
$result=$sth->fetchAll();

header('Access-Control-Allow-Origin: *');
echo json_encode($result);
