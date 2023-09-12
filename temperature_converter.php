<?php
    
    if(isset($_POST['convert'])){
        $celsius = $_POST['celsiusInput'];
        $converter = $_POST['converter'];
        if($converter == "F"){
            $output = ($celsius * 9/5) + 32;
        }elseif($converter == "K"){
            $output = $celsius + 273.15;
        }else{
            $output = " Please Input Celsius Value";
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Temperature Converter</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .converter-container {
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
        <div class="col-md-6 offset-md-3 converter-container">
            <h1>Temperature Converter</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="celsiusInput">Celsius</label>
                    <input type="number" name="celsiusInput" class="form-control" id="celsiusInput" placeholder="Enter Celsius">
                </div>
                
                <div class="form-group">
                    <select class="form-control" name="converter">
                        <option value="F">Fahrenheit</option>
                        <option value="K">Kelvin</option>
                    </select>
                </div>
                
                <button type="submit" name="convert" class="btn btn-primary" id="convertButton">Convert</button>
                
                <div class="form-group">
                    <?php 
                        if($output>0){
                            ?>
                                <h2 style="background: #FFC302; padding: 10px 0; margin-top:10px;"><?= $output ?></h2>
                            <?php
                        }else{
                            ?>
                            <h2 style="color:red; padding: 10px 0; margin-top:10px;" class="farenhigjt_no"> <?= $output ?></h2>
                            <?php
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>




</body>
</html>
