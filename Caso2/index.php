<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 100%;
        }
        td {
            padding: 10px;
        }
        #titulo {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 20px;
            border-bottom: 2px solid #cccccc;
            padding-bottom: 10px;
        }
        #derecha {
            text-align: right;
            color: #333333;
            font-weight: bold;
        }
        #boton {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        #boton:hover {
            background-color: #45a049;
        }
        input[type="text"], input[type="password"] {
            width: calc(100% - 16px);
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
            margin: 5px 0;
        }
        input[type="checkbox"] {
            margin-left: 10px;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <section>
        <?php
        error_reporting(0);
        session_start();

        if (!isset($_SESSION['admin'])) {
        ?>
        <form name="frmLogin" method="POST" action="login.php">
            <table border="0" cellspacing="5" cellpadding="15">
                <tr>
                    <td colspan="3">
                        <p id="titulo">Acceso</p>
                    </td>
                </tr>
                <tr>
                    <td id="derecha" width="150">Usuario</td>
                    <td><input type="text" name="txtUsuario" value="" required /></td>
                    <td rowspan="4">
                        <img src="logo.jpg" width="200" height="200" alt="Logo" />
                    </td>
                </tr>
                <tr>
                    <td id="derecha">Clave</td>
                    <td>
                        <input type="password" name="txtClave" maxlength="4" required />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="remember" value="ON" />
                        Recordar la clave
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input id="boton" type="submit" name="btnLogin" value="LOGIN" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">
                        <?php
                        } else {
                            header('location:principal.php');
                        }
                        if (isset($_SESSION['error'])) {
                            echo '<div class="error">' . $_SESSION['error'] . '</div>';
                            unset($_SESSION['error']);
                        }
                        ?> 
                    </td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>