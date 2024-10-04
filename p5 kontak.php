<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Kontak</title>
    </head>

    <body>
        <h1>Form Kontak</h1>
        <form method="POST" action="konfirmasi.php">
            <h3>Hobi:</h3>
            <input type="checkbox" name="hobby[]" value="Lari"> Lari<br>
            <input type="checkbox" name="hobby[]" value="Loncat"> Loncat<br>
            <input type="checkbox" name="hobby[]" value="Renang"> Renang<br><br>

            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" required><br><br>

            <input type="submit" value="Sumbit">
        </form>
    </body>

</html>
