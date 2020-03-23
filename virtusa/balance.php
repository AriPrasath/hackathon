<?php
session_start();

if(!$_SESSION['accno'])
{
    header('location:SignIn.php');
}else{
    // echo "welcome".$_SESSION['accno'];
}
?>
<html>
<head>
    <title>Current Balance</title>
     <link rel="icon" href="assets/img/tech%20geeks%2021.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<style>
    .navbar-light .navbar-nav .active>.nav-link {
        color: #8a8a8a;
        transition: 0.5s;
    }

    .navbar-light .navbar-nav .active>.nav-link:hover,
    .active {
        color: #4dabf7;
    }

    .card {
        text-align: center;
        
    }

    input[type="text"] {
        border: #4dabf7;
        font-size: 20px;
        color: #4dabf7;
        font-weight: 400;  
        box-shadow:inset 0 0 3px #4dabf7;
        font-size: 10px;
        padding-left: 3px;
        border-radius: 5px font-size: 10px;
        padding-left: 3px;
        border-radius: 5px
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <img src="assets/img/tech%20geeks%2021.jpg" style="width: 50px">
        <a class="navbar-brand" href="#">TECH GEEKS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php"><i class="fas fa-home">Home</i> <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="withdraw.php"><i class="fas fa-money-bill-alt" > Withdraw</i> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="deposit.php"><i class="fas fa-piggy-bank" > Deposit </i><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="balance.php" style="color: #4dabf7"><i class="fas fa-wallet"> Current Balance</i><span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item active">
                    <a class="nav-link" href="transfer.php"><i class="fas fa-exchange-alt"> Transfer</i><span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="settring.php"><i class="fas fa-cog"> Settings</i><span class="sr-only">(current)</span></a>
                </li> -->
                <!--    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        contact
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Facebook</a>
                        <a class="dropdown-item" href="#">Instagram</a>
                        <a class="dropdown-item" href="#">Twitter</a>
                    </div>
                </li>-->
            </ul>
            <div class="nav-item active">
                <p style="margin-right:10px; padding-top:10px; color:black ">Welcome  
                    <?php
                    echo $_SESSION['accno']; 
                    ?>
                <span class="sr-only">(current)</span></p>
            </div>
        </div>
        <form class="form-inline my-2 my-lg-0">
               
                <button class="btn btn-outline-primary my-2 my-sm-0" id="searchbu" type="submit">Logout</button>
            </form>
    </nav>
    <br>
    <center>
        <div class="card shadow-lg p-3 mb-5 bg-white rounded " style="width: 18rem;">
            <img src="assets/img/undraw_personal_finance_tqcd.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Current Balance</h5>
               
            </div>
        </div>
    </center>
</body></html>