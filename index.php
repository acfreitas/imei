<!DOCTYPE html>
<html>
<head>
    <title>IMEI Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="jumbotron">
        <h1>IMEI Generator</h1>
        <p>Generator of IMEI code</p>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="imei-form" class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label for="imei" class="col-lg-2 control-label">IMEI:</label>
                <label for="code" class="col-lg-2 control-label"><?php require 'imei.php';?></label>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <form action="imei.php" method="post"><input type=Submit value="New IMEI" ></form>
                </div>
            </div>
        </form>
    </div>
</body>
</html>