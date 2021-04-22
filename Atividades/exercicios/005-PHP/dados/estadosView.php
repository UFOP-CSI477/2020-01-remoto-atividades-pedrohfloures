<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
    <a href="estadosViewInsert.php">Inserir</a>
    
    <form>
        <table class="table table-bordered table-hover">
            <tr class="table-dark">
               <td>ID</td>
               <td>Nome</td>
               <td>Sigla</td>
            </tr>
            <?php
                while($e = $estados->fetch())
               {
            ?>
            <tr>
                <td><?php echo $e['id']; ?></td>
                <td><?php echo $e['nome']; ?></td>
                <td><?php echo $e['sigla']; ?></td>
            </tr>
            <?php
               }
            ?>
        </table>
    </form>
</body>
</html>