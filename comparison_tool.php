<?php
    if(isset($_POST['compare'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
        $out = ($num1 > $num2 ) ? "$num1 is large" : " $num2 is large";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Number Comparison Tool</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .comparison-container {
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
        <div class="col-md-6 offset-md-3 comparison-container">
            <h1>Number Comparison Tool</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="number1">Number 1</label>
                    <input type="number" name="num1" class="form-control" id="number1" placeholder="Enter Number 1">
                </div>
                <div class="form-group">
                    <label for="number2">Number 2</label>
                    <input type="number" name="num2" class="form-control" id="number2" placeholder="Enter Number 2">
                </div>
                <button type="submit" name="compare" class="btn btn-primary" id="compareButton">Compare</button>
            </form>
            <div class="mt-4"><?php echo $out; ?></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
