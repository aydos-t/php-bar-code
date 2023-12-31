<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP-BarCode</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <h3>Barcode Generation Form</h3><br/>
        <div class="box">
            <form method="post" action="bar-code.php">
                <div class="form-group" style="width: 40%">
                    <label>Barcode Text</label>
                    <input type="text" name="bartext" id="bartext" placeholder="Enter Barcode Text" required
                           data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="generate-btn" value="Generate" class="btn btn-success"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>