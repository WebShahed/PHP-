<?php
	$Number = array("100","200","300","400","500");
	 sort($Number);
	 echo "<h4>Sort Array in Ascending Order - sort()</h4> <br>";
	 
	 foreach( $Number as $num){
		 echo $num."<br>";
		 
	 }
	 
	 echo "<h4>Sort Array in Descending Order - rsort()</h4> <br>";
	 $new =array("2","4","6","8","10");
	 rsort($new);
	 $lenght =count($new);
	 
	 for($i=0;$i < $lenght;$i++){
		 echo $new[$i]."<br>";
	 }
	 
	 echo"<br>";
	 echo "<h4>According to Value - asort()</h4>";
	 
	 $v =array("Shahed" => "90","Rifat"=> "20", "Fahad" => "30","Khalid" => "19");
	 asort($v);
	foreach($v as $i => $j){
		echo "Name =".$i." , Age = ".$j."<br>";
	}
	echo "<br>";
	echo "<h4>According to Key - ksort()</h4>";
	$fm =$v;
	ksort($fm);
	foreach($fm as $r => $e){
		echo "Name = ".$r." , Age = ".$e."<br>";
	}
	 echo "<br>";
	echo "<h4>Sort Array (Descending Order), According to Value - arsort()</h4>";
	$sr =$v;
	arsort($sr);
	foreach( $sr as $s => $a){
		echo "Name =".$s." , Age =".$a."<br>";
	}
	echo "<br>";
	echo "<h4>Sort Array (Descending Order), According to Key - krsort()</h4>";
	$sm=$v;
	krsort($sm);
	foreach($sm as $l => $k){
		echo "Name =".$l." ,Age =".$k."<br>";
	}
	
	



?>