<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm your ticket</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
<table class="table table-dark table-striped"> 
        <thead>
            <tr>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Departure date</th>
                <th scope="col">Return date</th>
                <th scope="col">Class</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
            
        <tbody>
            <tr>
                <td><?php echo $_POST["from"]; ?></td>
                <td><?php echo $_POST["to"]; ?></td>
                <td><?php echo $_POST["dtime"]; ?></td>
                <td><?php echo $_POST["rtime"]; ?></td>
                <td><?php echo $_POST["class"]; ?></td>
                <td><?php echo $_POST["age"]; ?></td>
            </tr>
        </tbody>
</table>
</body>
</html>