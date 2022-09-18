<?php
   /*-------------------------------------------------------------------------*/
    //EJ1
    echo "<br> Ejercicio 1<br>";

    $name = 'juan,maria,pepe,andrea,jorgelina,cecilia';
    //a
    echo "<br>a) : <br>";
    $arrName = explode(",",$name);
    print_r($arrName);

    //b
    sort($arrName,SORT_STRING);
    echo "<br>b) : <br>";
    print_r($arrName);

    //c
    $newArray;

    for($i = 0; $i < count($arrName); $i++){
      $newArray[$i] = ucfirst($arrName[$i]);
    }
    echo "<br>c) : <br>";
    print_r($newArray);

    //d y e
    $valNew = count($newArray);
    
    $keys = [1,2,3,4,5,6];

    $valK = count($keys);
    $arrayAss = array_combine($keys,$newArray);

    echo "<br>d y e) : <br>";
    if($valNew == $valK){
    print_r($arrayAss);
    }
    echo "<br>";

    /*-------------------------------------------------------------------------*/
    //EJ2
    echo "<br> Ejercicio 2<br>";

    $val = rand(1,10);
    $arr = [2,5,9,8];
    
    exists($val, $arr);
    

    function exists($val,$arr){
      if(in_array($val,$arr)){
        echo "El valor se encuentra en el arreglo";
      }else{
        echo "El valor no se encuentra en el arreglo";
      }
      echo "<br>";
    }

    /*-------------------------------------------------------------------------*/
    //EJ3
    echo "<br> Ejercicio 3<br>";

    $arrKV = [1=>"a", 2=>"b", 3=>"c", 4=>"d"];
    containK($val,$arrKV);


    function containK($val,$arrK){
      if(array_key_exists($val,$arrK)){
        echo "El valor asociado a la key es:" . $arrK[$val];
      }else{
        echo "Ningun valor esta asociado a la key";
      }
      echo "<br>";
    }

    /*-------------------------------------------------------------------------*/
    //EJ4
    echo "<br> Ejercicio 4<br>";

    $arrK = array_keys($arrKV);

    $strK = implode(",",$arrK);

    echo "RESOLUCION: " . $strK;
?>