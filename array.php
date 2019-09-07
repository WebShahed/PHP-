<?php 
	$cars =array("owl" , "carousel" , "wow" , "mixitup" ,"counter", "footer");
	echo "The name is= ".$cars[5];
	echo"<br>";
	$lenght =count($cars);
	for ($i=0; $i < $lenght; $i++) { 
		echo $cars[$i]."<br>";
		
	}

	//Associative Array
	echo"<br>";
		$person =array(
			"name" => " A Rahman",
			"age" => "20",
			"education" => "<h3>Diploma In Eng.</h3>"
		);
		echo $person ['name'];
		echo "<br>";
		echo $person ['education'];
		echo "<br>";

			echo "<h1>associative Array using Froeach Loop </h1>";
			echo"<br>";
			$Age =array(
				"Khalid" => "45","Rifat" => "68", "Rasel" => "90",
			);
			foreach($Age as $x => $y){
				echo "Name ".$x." Age ".$y;
				echo "<br>";
			}
 ?>