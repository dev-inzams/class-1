<?php
 if(isset($_POST['check'])){
     $userValue = $_POST['userValue'];
     if($userValue % 2 == 0){
         $output = "Even";
     }else{
         $output = "ODD";
     }
 }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Even/Odd Number Checker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .checker-container {
            max-width: 400px;
            margin: auto;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 checker-container">
            <h1>Even/Odd Number Checker</h1>
            <form method="POST"> 
                <div class="form-group">
                    <label for="numberInput">Enter a Number</label>
                    <input type="number" name="userValue" class="form-control" id="numberInput" placeholder="Enter a number">
                </div>
                <button type="submit" name="check" class="btn btn-primary" id="checkButton">Check</button>
            </form>
            <div class="mt-4" id="result"><?php echo $output; ?></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
