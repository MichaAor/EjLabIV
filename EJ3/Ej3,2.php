<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$birth = $_POST["birth"];
$sex = $_POST["sex"];

$role = $_POST["role"];
$interest = $_POST['a'];

$date = explode("-",$birth);

/*print_r($date);*/
var_dump($interest);

if(is_string($name) && is_string($email) && is_string($pass) && checkdate($date[1],$date[2],$date[0])){
echo "TODO CORRECTO";
    echo  "<table>";

        echo  "<thead>";
            echo  "<th>Your Basic Info</th>";
        echo  "</thead>";
        echo  "<tbody>";
            echo "<tr>";
                echo  "<td>Name</td>";
                echo  "<td>".$name."</td>";
            echo  "</tr>"; 
            echo  "<tr>";
                echo  "<td>Email</td>";
                echo  "<td>".$email."</td>";
            echo  "</tr>";  
            echo  "<tr>";
                echo  "<td>Password</td>";
                echo  "<td>".$pass."</td>";
            echo  "</tr>";  
            echo  "<tr>";
                echo  "<td>BirthDay</td>";
                echo  "<td>".$birth."</td>";
            echo  "</tr>"; 
            echo  "<tr>";
                echo  "<td>Sex</td>";
                echo  "<td>".$sex."</td>";
            echo  "</tr>";    
        echo  "</tbody>";


        echo  "<thead>";
            echo  "<th>Your Profile</th>";
        echo  "</thead>";
        echo  "<tbody>";
            echo  "<tr>";
                echo  "<td>Role</td>";
                echo  "<td>".$role."</td>";
            echo  "</tr>";  
            echo  "<tr>";
                echo  "<td>Interest</td>";
                echo  "<td>hola</td>";
            echo  "</tr>";     
        echo  "</tbody>";

    echo  "</table>";
}
?>