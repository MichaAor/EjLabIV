<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Greeting</title>
</head>
<body>
    <form action="process.php" method="POST">
        <table align="center">
            <thead>Práctico N° 4.1</thead>
            <tr>
                <th>
                    <h3>Saludando</h3>
                </th>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione un idioma</b></p>
                    <input type="radio" name="language" value="spanish"> Catellano
                    <input type="radio" name="language" value="english"> Ingles
                    <input type="radio" name="language" value="portugues"> Portugues
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione una acción</b></p>
                    <input type="radio" name="optionGreet" value="greet"> Saludar
                    <input type="radio" name="optionGreet" value="sayGoodbye"> Despedirse
                    <input type="radio" name="optionGreet" value="other"> Otro Mensaje
                    <br>
                    <textarea name="message" placeholder="Mensaje|Message|Mensagem"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit"> Procesar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>