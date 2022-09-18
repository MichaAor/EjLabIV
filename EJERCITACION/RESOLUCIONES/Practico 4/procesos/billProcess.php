<?php 

if($_GET){
	$time = time();
	$fecha = date("Y-m-d", $time);
	if($_GET['fecha'] < $fecha){
		header("location: ../bill-content.php");
	}else{
		echo "<script> if(confirm('La fecha ingresada pertecenece al futuro. Vuelva a realizar la carga.'));";
		echo "window.location = '../add-bill.php';
		</script>";
	}
}else{
	echo "<script> if(confirm('Error en el método de envio de datos'));";
		echo "window.location = '../add-bill.php';
		</script>";
}

 ?>