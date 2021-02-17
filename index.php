<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Basic Banking System</title>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container-fluid">
        <div class="row intro py-1" style="background-color:chartreuse;">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h1>Welcome To</h1>
                    <h1>Sparks Bank</h1> 
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
            </div>
        </div>
        <div class="row activity text-center">
            <div class="col-md act">
                <img src="img/user.jpg" class="img-fluid">
                <br>
                <a href="createuser.php"><button style="background-color: #2785C4;">Create a User</button>
            </div>
            <div class="col-md act">
                <img src="img/transfer.jpg" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color: #2785C4;">Make a Transaction</button>
            </div>
            <div class="col-md act">
                <img src="img/history.jpg" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color: #2785C4;">Transaction History</button>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-2">
        <h4>Provide safe and Secure Banking</h4> 
        <p>*ATM *Branches *More About Us</p>
        <p>Made by-<b>Krishna Agrawal</b><br>Sparks Foundation</p>
    </footer>
</body>
</html>
