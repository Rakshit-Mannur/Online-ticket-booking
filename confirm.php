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
    <link rel="stylesheet" href="style1.css">
   
</head>
<body>
<table class="table table-dark table-striped"> 
        <thead>
            <tr>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Departure date</th>
                <th scope="col">Class</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
            
        <tbody>
            <tr>
                <td><?php echo $_POST["from"]; ?></td>
                <td><?php echo $_POST["to"]; ?></td>
                <td><?php echo $_POST["dtime"]; ?></td>
                <td><?php echo $_POST["class"]; ?></td>
                <td><?php echo $_POST["age"]; ?></td>
            </tr>
        </tbody>
</table>
<div style="width: 500px;
	height: 100px;
	position: absolute;
	left: 0;
	right: 0;
  	margin: auto">
   <h2 style="text-align:center;font-family:tahoma;color:white;margin-top: 20px">Select your slot</h2>
   <div style="text-align: center;">
        <input type="radio" id="time" name="time" value="male">
        <label for="male" style="color: white;">9:00 pm</label>
        <input type="radio" id="time" name="time" value="female" style="margin-left: 20px;">
        <label for="female" style="color: white;">9:30 pm</label>
        <input type="radio" id="time" name="time" value="other" style="margin-left: 20px;">
        <label for="other" style="color: white;">10:00 pm</label> 
        <br/>
        <form>
        <button formaction="/starks/payment.php" class="btn btn-dark" style="margin-top: 20px;margin-left: 10px;">Proceed to payment</button>
        </form>
    </div>
</div>
</body>
</html>