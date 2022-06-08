<?php 

// try {
	
// 	echo "Sup1";
// 	throw new Exception('Klaida',101);

// } catch (Exception $e) {
// 	echo("Nepavykęs bandymas prisijungti " . $e->getCode());
// }

// try {
//     print "this is our try block n";
//     throw new Exception();
// } catch (Exception $e) {
//     print "something went wrong, caught yah! n";
// } 

function simple()
{
	throw new Exception("Simple Exception mn");
}

function runtime()
{
	throw new RuntimeException("Runtime Exception mn");
}

function funkcija($price)
{
	if($price > 1000){
		throw new Exception("Range exceeds limits");
	}

	if($price < 100){
		throw new Exception("Range subceeds limits");
	}
	if(($price > 100)&&($price < 1000)){
		throw new RuntimeException("Range runtime is fine");
	}
}


try {
	funkcija(1111);
}catch(RuntimeException $e){;
	echo "{$e->getMessage()}";
}
catch(Exception $e){;
	echo "{$e->getMessage()}";
}
