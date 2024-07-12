<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angajat</title>
    <style>
          body {
            font-family: 'Cambria', sans-serif;
            background-image: url('../FORMS.jpg');
            background-color: #f4f4f4;
            margin: 0;
            background-size: cover;
            background-position: left;
            background-position-y:10%;
            background-position-x:1%;
            background-repeat: no-repeat;
        }

        .navbar {
            background-color: #212529;
            padding: 10px;
            text-align: center;
            color: #fff;
        }

        .navbar a {
            background-color: #212529;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
            text-decoration: none;
        }
        
        .navbar a:hover {
            background-color: #0056b3;
        }

        form {
            margin: 0 auto; 
            max-width: 400px; 
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h3 {
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: background 0.25s, border-color 0.25s, color 0.25s;
            background: #f9f9f9;
            outline: none;
        }

        input:focus {
            background: #ffffff;
        }

        input::placeholder {
            color: #bbbbbb;
        }

        button {
            width: 100%;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Arial', sans-serif;
            font-weight: 600;
            font-size: 1.1em;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
        }

        button[type="submit"]:hover {
            background-color: #4ca049;
        }

        button[type="delete"] {
            background-color: #e74c3c;
            color: #fff;
        }

        button[type="delete"]:hover {
            background-color: #c0392b;
        }

        .read-button {
            width: 225px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px auto 0; 
            display: block; 
        }

        .read-button:hover {
            background-color: #0056b3;
        }

        
        @media screen and (max-width: 600px) {
            form {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation Bar with Back Button -->
    <div class="navbar">
        <a href="../../index.php">Înapoi</a>
    </div>

    <div style="margin-bottom: 20px;"></div> 

    <!-- Add Angajat Form -->
    <form action="angajat_handler.inc.php" method="post">
        <h3>Introduce - Angajat</h3>
        <input type="number" name="id_departament" placeholder="Id Departament">
        <input type="text" name="nume_ang" placeholder="Nume">
        <input type="text" name="prenume_ang" placeholder="Prenume">
        <input type="email" name="email_ang" placeholder="Email">
        <input type="tel" name="numar_telefon" placeholder="Numar Telefon">
        <input type="number" name="salariu" placeholder="Salariu">
        <div style="margin-bottom: 10px;"></div>
        <label for="data_inceput">Data angajare:</label>
        <div style="margin-bottom: 10px;"></div>
        <input type="date" name="data_angajare" placeholder="Data Angajare">
        <button type="submit">Introduce</button>
    </form>

    <div style="margin-bottom: 20px;"></div>

    <button class="read-button" onclick="window.location.href='angajat_read.php';">Listare Angajat</button>

    <div style="margin-bottom: 20px;"></div>

    <!-- Update-Angajat Form -->
    <form action="angajat_update.inc.php" method="post">
        <h3>Update Angajat</h3>
        <input type="number" name="id_angajat" placeholder="Id Angajat">
        <br>
        <input type="number" name="id_departament" placeholder="Id Departament">
        <input type="text" name="nume_ang" placeholder="Nume">
        <input type="text" name="prenume_ang" placeholder="Prenume">
        <input type="email" name="email_ang" placeholder="Email">
        <input type="tel" name="numar_telefon" placeholder="Numar Telefon">
        <input type="number" name="salariu" placeholder="Salariu">
        <div style="margin-bottom: 10px;"></div>
        <label for="data_inceput">Data angajare:</label>
        <div style="margin-bottom: 10px;"></div>
        <input type="date" name="data_angajare" placeholder="Data Angajare">
        <button type="submit">Update</button>
    </form>

    <div style="margin-bottom: 20px;"></div> 

    <!-- Delete-Angajat Form -->
    <form action="angajat_delete.php" method="post">
        <h3>Delete - Angajat</h3>
        <h4 style="color: gray;">(Alegeți un parametru după care vreți să stergeți)</h4>
        <input type="number" name="id_angajat" placeholder="Id Angajat">
        <input type="number" name="id_departament" placeholder="Id Departament">
        <input type="text" name="nume_ang" placeholder="Nume">
        <input type="text" name="prenume_ang" placeholder="Prenume">
        <input type="email" name="email_ang" placeholder="Email">
        <input type="tel" name="numar_telefon" placeholder="Numar Telefon">
        <input type="number" name="salariu" placeholder="Salariu">
        <div style="margin-bottom: 10px;"></div>
        <label for="data_inceput">Dată angajare:</label>
        <div style="margin-bottom: 10px;"></div>
        <input type="date" name="data_angajare" placeholder="Data Angajare">
        <button type="delete">Delete</button>
    </form>

    <div style="margin-bottom: 20px;"></div> 

</body>

</html>
