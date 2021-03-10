<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../media/css/transition.css">



    <link rel="stylesheet" href="../media/css/deret.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a3d4329e56.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Fibonanci</title>
</head>

<body>
    <section>
        <div class="transition transition2 is-active">
    </section>
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="../index.php"><img src="../asset/img/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto text-right">
                        <li class="nav-item ">
                            <a class="nav-link" href="../index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SERVICE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PRICING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                OTHERS
                            </a>
                            <div class="dropdown-menu active-home" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../form/deret.php">Fibbonanci </a>
                                <a class="dropdown-item" href="../form/aritmatika.php">Barisan Aritmetika</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Writters</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="../form/form.html">REGISTER</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <section class="fibonannci">
        <div class="form-containers">
            <div class="fibonancis">
                <form action="" class="fibonanci-" method="get">
                    <h2 class="tittle">
                        Fibonanci
                    </h2>
                    <div class="input-field">
                        <input type="number" name="angka1" id="" value="" placeholder="Bilangan 1">
                    </div>
                    <div class="input-field">
                        <input type="number" name="angka2" id="" value="" placeholder="Bilangan 2">
                    </div>
                    <div class="input-field">
                        <input type="number" name="deret" id="" value="" placeholder="Jumlah deret">
                    </div>
                    <input class="btn solid" type="submit" value="Hasil">
                    <input class="btn solid" type="reset" value="Reset">
                </form>


            </div>
            <?php
            if (isset($_GET['angka1']) && isset($_GET['angka2']) && isset($_GET['deret'])) {
                $a1 = $_GET['angka1'];
                $a2 = $_GET['angka2'];
                $deret = $_GET['deret'];
            ?>
                <div class="result-containers">
                    <div class="fibonancis-result">
                        <div class="fibonancis-results">
                            <h5>Hasilnya : </h5>
                            
                            <span class="result"><?php echo "$a1 $a2" ?></span>

                            <?php
                            for ($i = 1; $i <= $deret; $i++) {

                                $hasil = $a2 + $a1;

                                echo  " $hasil";

                                $a1 = $a2;
                                $a2 = $hasil;

                            ?>
                            <?php
                            } ?>
                        </div>
                        
                    </div>
                   
                </div>
            <?php
            }
            ?>
        </div>
    </section>

    <script src="../media/js/app.js"></script>
</body>

</html>