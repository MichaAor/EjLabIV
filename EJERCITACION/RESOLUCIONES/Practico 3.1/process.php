

<?php 
//manejo de arrays
//Se tiene el siguiente string:

//DECLARACION DEL STRING
$nombre = 'juan,maria,pepe,andrea,jorgelina,cecilia';

//1 - Crear un arreglo de nombres y mostrarlo por pantalla:

$arrayNombres = explode(',',$nombre);

foreach ($arrayNombres as $value) {
	echo $value . '<br>';
}
//2 - ordenarlos alfabeticamente de forma ascendente

sort($arrayNombres);
echo '<br>'. 'ORDENADOS' .'<br> <br>';


foreach ($arrayNombres as $value) {
	echo $value . '<br>';

}

//3 - convertir en mayúscula el primer caracter de cada nombre
//y pasarlo a un nuevo array

$nuevoArray = array();
foreach($arrayNombres as $value){
	
	$nuevo = ucfirst($value);
	$nuevoArray [] = $nuevo;
	//array_push($nuevoArray, $nuevo);

}
foreach($nuevoArray as $value){
	echo $value . '<br>';

}
//4 - obtener la cantidad de valores del nuevo array y crear 
//un array asociativo investigando la funcion //array_combine(). Comprobar que al crear un array de keys
//tengan la misma cantidad de elementos antes de combinarlos
$cantidadNombres = count($nuevoArray);
echo $cantidadNombres . '<br>';

$keys = array(1,2,3,4,5,6);
$cantidadKeys = count($keys);

if($cantidadNombres == $cantidadKeys){
	$arrayAsociativo = array_combine($keys, $nuevoArray);
}
//5 - mostrarlo por pantalla 
foreach ($arrayAsociativo as $key => $value) {
	echo $key . " : " . $value . '<br>';
}

//6 - Hacer una función que reciba por parametro un valor y mostrar por pantalla si ese valor existe en el array
function existeValor($valor, $array){
	if(in_array($valor, $array)){
		echo 'El valor existe';
	}else{
		echo 'El valor no existe';
		echo '<br>';
	}
}
existeValor('Andrea', $arrayAsociativo);
existeValor('Cirilo', $arrayAsociativo);


//7 - Hacer una funcion que reciba una key y un array y si existe muestre el valor asociado a esa key

function mostrarValor($key, $array){

	 if(array_key_exists($key, $array)){
	 	echo $array[$key];
	 	echo '<br>';
	 }else{
	 	echo 'Clave inexistente';
	 	echo '<br>';
	 }

}
mostrarValor(2,$arrayAsociativo);

mostrarValor(20,$arrayAsociativo);

//8 -Armar una función que dado un array, retorne todas sus claves en un string separado por comas

function clavesEnString($array){
	$claves = array_keys($array);
	$stringClaves = implode(',',$claves);
	return $stringClaves;
}

$clavesEnCadena = clavesEnString($arrayAsociativo);
echo '<br>' . $clavesEnCadena . '<br>';
 ?>
