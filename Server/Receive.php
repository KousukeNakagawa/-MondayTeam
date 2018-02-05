<?php
# データベース接続
$id = $_GET['id']; #idを取得
$dbh = new PDO('mysql;dbname=TowerBattle;host=localhost',
				 'root',
				 'H@chiouji1');
				 
#idを取得 
$playerid=$id;

if($id==2){
	$playerid=$playerid-1;
}
else{
	$playerid=$playerid+1;
}

# プレイヤー情報
$sql = "SELECT currentObj,nextObj,score FROM Player WHERE id=$playerid";
$sth = $dbh->prepare($sql); 
$sth->execute();  //実行
$result=$sth->fetch(PDO::FETCH_ASSOC);

header('Access-Control-Allow-Origin: *');
echo json_encode($result);
