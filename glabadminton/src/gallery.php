<?php
$conn = mysqli_connect("db", "root", "example", "glabadminton");
$results = $conn->query("SELECT * FROM gallery");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Badminton</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include('includes/header_css.php'); ?>

</head>
<!-- body -->

<body class="main-layout ">
    <?php include('includes/navbar.php'); ?>
    <!-- brand -->
    <div class="brand" id='3'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <?php while ($data = $results->fetch_assoc()) : ?>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                            <div class="brand_box">
                                <img src="admin/gallery/<?php echo $data['photo'] ?>" alt="">
                                <br>
                                <br>
                                <h1> <?php echo $data['quotes'] ?></h1>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images\gallery\1.jpeg" alt="img" />
                            <br>
                            <h1>Maitree</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images\gallery\2.jpeg" alt="img" />
                            <br>
                            <h1>Aagaaz</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images\gallery\3.jpeg" alt="img" />
                            <br>
                            <h1>Mix-Doubles</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6  margin ">
                        <div class="brand_box">
                            <img src="images\gallery\4.jpeg" alt="img" />
                            <br>
                            <h1>Shuttle Rush</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images\gallery\5.jpeg" alt="img" />
                            <br>
                            <h1>Training Sessions</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images\gallery\6.jpeg" alt="img" />
                            <br>
                            <h1>Get-Set Tournament</h1>
                        </div>
                    </div>



                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6  margin">
                        <div class="brand_box">
                            <img src="images\gallery\7.jpeg" alt="img" />
                            <br>
                            <h1>Prize Distribution</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images\gallery\8.jpeg" alt="img" />
                            <br>
                            <h1>Shuttler's Meet</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images\gallery\9.jpeg" alt="img" />
                            <br>
                            <h1>Maitree closing Ceremony</h1>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->

    <?php include('includes/footer.php'); ?>
    <?php include('includes/js.php'); ?>

</body>

</html>