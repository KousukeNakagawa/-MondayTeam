<?php
# 変数をゲットする
	$var_01 = $_GET[''];	
	$data = $_;
	
	function receive_json($data){
		#ヘッダーを指定
		header("Content-Type: application/json; charset=utf-8");
		#JSON形式のデータを出力する
		echo $data;		
	}
	
	#配列を作成	'KEY'=>'VALUE'
	$array = ['AAA'=>'data1',
          'BBB'=>'data2',
          'CCC'=>'data3',
          'DDD'=>'data4',
          'EEE'=>'data5'
        ];
        
	#配列をJSON形式に変換
	$jsonstr =  json_encode($array);
	
	receive_json($jsonstr);
?>
