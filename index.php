<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <link href="style.css" rel="stylesheet"><link>
    <h1 align="center">Calculadora</h1>
    <div id="principal">
        <form name="calculadora">
            <table align="center">
                <tr>
                    <td colspan="5"><input id="pantalla" type="textfield" name="display" value=""></td>
                </tr>
                <tr>
                    <td><input type="button" name="num" value="7" onClick="document.calculadora.display.value += '7'"></td>
                    <td><input type="button" name="num" value="8" onClick="document.calculadora.display.value += '8'"></td>
                    <td><input type="button" name="num" value="9" onClick="document.calculadora.display.value += '9'"></td>
                    <td><button><</button></td>
                    <td><input type="reset" name="ope" value="DEL"></td>
                </tr>
                <tr>
                    <td><input type="button" name="num" value="4" onClick="document.calculadora.display.value += '4'"></td>
                    <td><input type="button" name="num" value="5" onClick="document.calculadora.display.value += '5'"></td>
                    <td><input type="button" name="num" value="6" onClick="document.calculadora.display.value += '6'"></td>
                    <td><input type="button" name="ope" value="/" onClick="document.calculadora.display.value += '/'"></td>
                    <td><input type="button" name="ope" value="x" onClick="document.calculadora.display.value += 'x'"></td>
                </tr>
                <tr>
                    <td><input type="button" name="num" value="1" onClick="document.calculadora.display.value += '1'"></td>
                    <td><input type="button" name="num" value="2" onClick="document.calculadora.display.value += '2'"></td>
                    <td><input type="button" name="num" value="3" onClick="document.calculadora.display.value += '3'"></td>
                    <td><input type="button" name="ope" value="+" onClick="document.calculadora.display.value += '+'"></td>
                    <td><input type="button" name="ope" value="-" onClick="document.calculadora.display.value += '-'"></td>
                </tr>
                <tr>
                    <td><input type="button" name="num" value="." onClick="document.calculadora.display.value += '.'"></td>
                    <td><input type="button" name="num" value="0" onClick="document.calculadora.display.value += '0'"></td>
                    <td colspan="3"><input type="button" name="num" value="=" onClick="document.calculadora.display.value += '='"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>