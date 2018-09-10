<?php 
//Tuliskan kode anda di bawah ini
	$nilai=strlen($_POST['nilai']) ? $_POST['nilai'] : "Inputan tidak boleh kosong" ;


	echo "Input  =  ". $_POST['nilai'];

	echo "<br>===========================================<br>";

	printPyramid(0);

 	function printPyramid($i){
    	global $nilai;
    	printSpace($nilai, $i);
    	printStar($nilai, $i);
    	echo "<br>";

    	if(++$i < $nilai)
      		printPyramid($i);
  	}
  	function printSpace($j,$i){
    	global $nilai;
    	if($j < $nilai - $i - 1){
      		echo "&nbsp;&nbsp;";
      		printSpace  ($j + 1, $i);
    	}
  	}
  	function printStar($k, $i){
    	global $nilai;
    	if($k>$nilai - $i - 1){
      		echo "* &nbsp;";
      		printStar($k - 1, $i);
    	}
  	}
echo "<br>===========================================<br>";

  	$angka=$_POST['nilai'];
  	$i=0;
  	rekursif($angka);

  	for($ha=1; $ha<=$angka; $ha++){
  		if($ha % 2 == 0){
  			$genap[]=$ha;

  		}else{
  			$ganjil[]=$ha;
  		}
  	}
  	echo "Genap : ";
  	foreach ($genap as $keygenap ) {
  		# code...
  		echo $keygenap.',';
  	}
  	echo "<br>";
  	echo "Ganjil : ";
  	foreach ($ganjil as $keganjil) {
  		# code...
  		echo $keyganjil.',';
  	}


?>
