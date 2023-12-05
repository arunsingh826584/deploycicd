<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit2'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];
  $year = $_POST['year'];
  $message = $_POST['message'];
  //echo $name +  ;
  $sql = "INSERT INTO  members(name,email,phone,course,year,message) VALUES(:name,:email,:phone,:course,:year,:message)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':name', $name, PDO::PARAM_STR);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':phone', $phone, PDO::PARAM_STR);
  $query->bindParam(':course', $course, PDO::PARAM_STR);
  $query->bindParam(':year', $year, PDO::PARAM_STR);
  $query->bindParam(':message', $message, PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
    $msg = "Enquiry  Successfully submited";
    echo '
		<script>
		alert("Thanks for joining our club .Shortly we will contact you :)");
		</script>
		';
    $emailid1 = "metaeducatorshubu@gmail.com";
    // $emailid2 = "tourtown47@gmail.com";
    // $emailid3 = "neeteshpandey.7895@gmail.com";
    $mailHtml = "Full Name   : $name \n
                 Email id    : $email \n
                 phone No   :  $phone \n
                 course     :  $course \n
                 year     :  $year \n
                 Reason : $message \n
    ";
    function smtp_mailer($to, $subject, $msg)
    {
      require_once("smtp/class.phpmailer.php");
      $mail = new PHPMailer();
      $mail->SMTPDebug  = 3;
      $mail->IsSMTP();
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'tls';
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 587;
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      $mail->Username = "metacrestors@gmail.com";
      $mail->Password = "iambossji24";
      $mail->SetFrom("metacrestors@gmail.com");
      $mail->Subject = $subject;
      $mail->Body = $msg;
      $mail->AddAddress($to);
      $mail->Send();
    //   if (!$mail->Send()) {
    //     return 0;
    //   } else {
    //     return 1;
    //   }
    }
    smtp_mailer($emailid1, 'Members Joining Request', $mailHtml);
    // smtp_mailer($emailid2, 'Contact form', $mailHtml);
    // smtp_mailer($emailid3, 'Contact form', $mailHtml);
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
  } else {
    echo '
		<script>
		alert("Something went wrong. Please try again later" );
		</script>
		';
  }
}

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
    <title>Join Badminton Club</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include('includes/header_css.php'); ?>
    <link rel="stylesheet" href="css/contact_css.css">

</head>

<body class="main-layout ">
    <?php include('includes/navbar.php'); ?>
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images\slider\2.jpeg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <!-- <span>ARE YOU READY FOR </span>
                            <h4 style="color: black;"><i>"GET-SET BADMINTON TOURNMENT" </i> </h4>
                            <p style="color: black;">It is an inter-university tournmnet for every studends .
                                The winners will be award with cash prize & certificate for all Participatent </p> -->
                            <ul class="social_icon">
                                <li> <a target="blank" href="https://www.youtube.com/channel/UC8zjJ_IPVJI0gXaPKP1WWZw"><i class="fa fa-youtube"></i></a></li>
                                <li> <a target="blank" href="https://instagram.com/badminton_gla?igshid=3g2h5p5ja3kv"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images\slider\3.jpeg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <ul class="social_icon">
                                <li> <a target="blank" href="https://www.youtube.com/channel/UC8zjJ_IPVJI0gXaPKP1WWZw"><i class="fa fa-youtube"></i></a></li>
                                <li> <a target="blank" href="https://instagram.com/badminton_gla?igshid=3g2h5p5ja3kv"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images\slider\1.jpeg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <ul class="social_icon">
                                <li> <a target="blank" href="https://www.youtube.com/channel/UC8zjJ_IPVJI0gXaPKP1WWZw"><i class="fa fa-youtube"></i></a></li>
                                <li> <a target="blank" href="https://instagram.com/badminton_gla?igshid=3g2h5p5ja3kv"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-7">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">Join Badminton Club</h3>
                        <form method="POST" name="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">Full Name</label>
                                        <input required="" type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="email">Email-Id (GLA Email id only)</label>
                                        <input required="" type="email" class="form-control" name="email" id="email" placeholder="Email(offical) ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="phone">Phone No</label>
                                        <input required="" type="number" class="form-control" name="phone" id="phone" placeholder="Phone No">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="course">Course</label>
                                        <input required="" type="text" class="form-control" name="course" id="course" placeholder="Course Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="year">Year</label>
                                        <input required="" type="number" class="form-control" name="year" id="year" placeholder="Year">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="#">Why you want to join us ?</label>
                                        <textarea required="" name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Min. One line"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <button class="btn btn-primary" name="submit2" type="submit" id="submit1" class="main-button">Send Message</button> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-stretch">
                    <div class="info-wrap w-100 p-5 img" style="background-image:url(images/pv-sindhu.jpg)">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
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
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images\gallery\1.jpeg" alt="img" />
                            <br>
                            <h4>Maitree</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images\gallery\2.jpeg" alt="img" />
                            <br>
                            <h4>Aagaaz</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images\gallery\3.jpeg" alt="img" />
                            <br>
                            <h4>Mix-Doubles</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6  margin ">
                        <div class="brand_box">
                            <img src="images\gallery\4.jpeg" alt="img" />
                            <br>
                            <h4>Shuttle Rush</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images\gallery\5.jpeg" alt="img" />
                            <br>
                            <h4>Training Sessions</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images\gallery\6.jpeg" alt="img" />
                            <br>
                            <h4>Get-Set Tournament</h4>
                        </div>
                    </div>



                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6  margin">
                        <div class="brand_box">
                            <img src="images\gallery\7.jpeg" alt="img" />
                            <br>
                            <h4>Prize Distribution</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images\gallery\8.jpeg" alt="img" />
                            <br>
                            <h4>Shuttler's Meet</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images\gallery\9.jpeg" alt="img" />
                            <br>
                            <h4>Maitree closing Ceremony</h4>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <a href="gallery.php" class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
    <?php include('includes/js.php'); ?>
</body>