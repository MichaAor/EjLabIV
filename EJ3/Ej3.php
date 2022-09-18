<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
        //EJ1
        $myNumber = 123; 
        $numberString = "123";
        echo "Ejercicio 1<br>";
        echo "myNumber = 123; <br>";
        echo "numberString = 123;<br>";
        //A
        echo $myNumber + $numberString . "<br>"; 
        //B
        echo $numberString + $myNumber . "<br>";
        //C
        echo $numberString . $myNumber . "<br>";

        //RTA: A. Se lleva a cabo una suma. //B. Se lelva a cabo otra suma //C. Se concatena.

        /*-------------------------------------------------------------------------*/
        //EJ2
        echo "<br> Ejercicio 2 <br>";
        echo "  
        a.	1 == ”1”    <br>
        b.	1 === ”1”   <br>
        c.	!null       <br>
        d.	!false      <br>
        e.	“”          <br>
        f.	“ “         <br>
        g.	“tested”    <br>
        h.	1-1         <br>";
        if(1-1)
            echo "<br> it`s right";
        
         //RTA: A.True //B.False //C.True //D.True //E.False //F.True //G.True //H.False

         //EJ2
         function mult($val1, $val2){
            echo "El resultado de la mult es: " . $val1 * $val2 . "<br>";
         }

         function div($val1, $val2){
            echo "El resultado de la div es: " . $val1 / $val2 . "<br>";
         }

         /*-------------------------------------------------------------------------*/
         //EJ3
         echo "<br> Ejercicio 3 <br>";

         $val1 = 8;
         $val2 = 4;
         echo "Para los valores 8 y 4: <br>";
         
         mult($val1,$val2);
         div($val1,$val2);

        /*-------------------------------------------------------------------------*/ 
         //EJ4
         echo "<br> Ejercicio 4 <br>";

         $array = [  
            1     => "first value",
            "1"  => "second value",    
            1.2  => "tirth value",    
            true => "fourth value",    
            1+0.2 => "fifth value",    
            false !== null => "sixth value"
        ];
        
        echo("<pre>");
            var_dump($array);
        echo("</pre>"); 

        echo "El largo del arreglo es de 1, su contenido es 'sixth value'.";

        /*-------------------------------------------------------------------------*/
        //EJ5
        echo "<br> Ejercicio 5 <br>";

        $people = [ 
            ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
            ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
            ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
            ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
            ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
            ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
            ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
        ];

        echo "<br> a. Imprima por pantalla el total de mayores de edad. <br>";
        foreach ($people as $v) {
            foreach ($v as $k => $v1) {
                if(strcmp($k,'age') == 0 && $v1 >=18){
                    echo("<pre>");
                    var_dump($v);
                    echo("</pre>"); 
                }
            }
        }

        echo "<br> b. De mujeres menores de edad. <br>";
        foreach ($people as $v) {
            foreach ($v as $k => $v1) {
                if(strcmp($k,'sex') == 0 && strcmp($v1,'f') == 0){
                    echo("<pre>");
                    var_dump($v);
                    echo("</pre>"); 
                }
            }
        }

        echo "<br> c. Cree una web que muestre una tabla con esos datos.<br>";
        echo  "<table>";
            echo  "<thead>";
                echo  "<th>Name</th>";
                echo  "<th>Age</th>";
                echo  "<th>Sex</th>";
            echo  "</thead>";
            echo  "<tbody>";
                foreach ($people as $v) {
                    foreach ($v as $k => $v1) {   
                            echo  "<td>".$v1."</td>";
                    }
                    echo  "</tr>";
                }
            echo  "</tbody>";
        echo  "</table>";
        
        /*-------------------------------------------------------------------------*/
        //EJ6
        echo "<br> Ejercicio 6 <br>";

        date_default_timezone_set("AMERICA/BUENOS_AIRES");

        echo "El dia de la semana es: " . date("l"); 

        if(strcmp(date("l"),"Saturday")==0 || strcmp(date("l"),"Sunday")==0 ){
            echo "Es fin de semana";
        }
        echo "<br>";

        /*-------------------------------------------------------------------------*/
        //EJ7
        echo "<br> Ejercicio 7 <br>";

        $product = ["Mascota","Ropa"];

        $type_sale  = $product[rand(0,1)];
        $total_sale = rand(0,3000);

        if(strcmp($type_sale, "Mascota") == 0) {
            echo "No se puede realizar el envío";
        }else{
            if($total_sale < 200){
                echo "Los gastos de envío son 80 pesos";
            }elseif($total_sale > 600){
                echo "Los envios son gratis";
            }

            if($total_sale > 2000){
                echo "Su codigo de descuento es: CODEDESC33";
            }
        }
        echo "<br>";

        /*-------------------------------------------------------------------------*/
        //EJ8
        echo "<br> Ejercicio 8 <br>";

        $a=rand(1,10);    $b=rand(1,10);    $c=rand(1,10);    $d=rand(1,10);

        echo "a: " .$a." b: ".$b." c: ".$c." d: ".$d;

        $mayor = $a;

        if($mayor <$b){
            $mayor = $b;
            if($mayor<$c){
                $mayor = $c;
                if($mayor<$d){
                   $mayor = $d; 
                }
            }
        }
        if($mayor<$c){
            $mayor = $c;
            if($mayor>=$d){
               $mayor = $d; 
            }
        }

        echo "<br> El mayor es: ". $mayor;

        //LA SEGUNDA OPCION ES

        echo "<br> El mayor es: ". max($a,$b,$c,$d);

        /*-------------------------------------------------------------------------*/
        //EJ9 y 10
        echo "<br> Ejercicio 9 y 10 <br>";

        class Person{
            private $name;
            private $age;
            private $sex;

            public function __construct($name,$age,$sex){
                $this->name = $name;
                $this->age = $age;
                $this->sex = $sex;
            }
            

            public function getName(){
            return $this->name;
            }

            public function setName($name): self{
                $this->name = $name;
            return $this;
            }

            public function getAge(){
            return $this->age;
            }

            public function setAge($age): self{
                $this->age = $age;
            return $this;
            }

            public function getSex(){
            return $this->sex;
            }

            public function setSex($sex): self{
                $this->sex = $sex;
            return $this;
            }
        }

        if(is_string($_POST["name"])==true && is_numeric($_POST["age"])==true && is_string($_POST["sex"])==true){
            $person = new Person($_POST["name"],$_POST["age"],$_POST["sex"]);
            echo  "<table>";
                echo  "<thead>";
                    echo  "<th>Name</th>";
                    echo  "<th>Age</th>";
                    echo  "<th>Sex</th>";
                echo  "</thead>";
                echo  "<tbody>";
                    echo  "<td>".$person->getName()."</td>";
                    echo  "<td>".$person->getAge()."</td>";
                    echo  "<td>".$person->getSex()."</td>";
                    echo  "</tr>";
                echo  "</tbody>";
            echo  "</table>";
        }else{
            header("Location: http://localhost/EJLAB4/Ej3,9.html");
        } 
        ?>   
    </body>
</html>