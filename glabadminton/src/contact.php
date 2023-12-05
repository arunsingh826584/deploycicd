<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit1'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  //echo $name +  ;
  $sql = "INSERT INTO  contact(name,email,phone,subject,message) VALUES(:name,:email,:phone,:subject,:message)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':name', $name, PDO::PARAM_STR);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':phone', $phone, PDO::PARAM_STR);
  $query->bindParam(':subject', $subject, PDO::PARAM_STR);
  $query->bindParam(':message', $message, PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
    $msg = "Enquiry  Successfully submited";
    echo '
		<script>
		alert("Thanks for contacting .Shortly we will contact you :)");
		</script>
		';
    $emailid1 = "metaeducatorshubu@gmail.com";
    // $emailid2 = "tourtown47@gmail.com";
    // $emailid3 = "neeteshpandey.7895@gmail.com";
    $mailHtml = "Full Name   : $name \n
                 Email id    : $email \n
                 phone No   :  $phone \n
                 subject     :  $subject \n
                 Message : $message \n
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
    smtp_mailer($emailid1, 'Contact form', $mailHtml);
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
    <!-- phone metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Contact Us</title>
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
                    <img class="first-slide" src="images\slider\3.jpeg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <!-- <span>ARE YOU READY FOR </span>
                            <h1 style="color: black;"><i>"GET-SET BADMINTON TOURNMENT" </i> </h1>
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
                    <img class="second-slide" src="images\slider\2.jpeg" alt="Second slide">
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
         <!--    <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Contact Info</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center" style="background-color: rgb(5,17,8);">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span> GLA UNIVERSITY IBM (BLOCK AB-5) & AUDITORIUM (Beside AB-7 Block)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center" style="background-color: rgb(5,17,8);">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <a href="tel://1234567920">(+91)9926215890</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center" style="background-color: rgb(5,17,8);">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a href="mailto:badminton.coach@gla.ac.in">badminton.coach@gla.ac.in

                                            </a></p>
                                        </span></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center" style="background-color: rgb(5,17,8);">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Website</span> <a href="#">glabadminton.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Contact Us</h3>
                                    <form method="POST"  name="contact">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input required="" type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input pattern="[^ @]*@[^ @]*" required="" type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="phone">Phone No</label>
                                                    <input required="" type="number" class="form-control" name="phone" id="phone" placeholder="Phone No">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input required="" type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea required="" name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button class="btn btn-primary" name="submit1" type="submit" id="submit1" class="main-button">Send Message</button> 
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


    <?php include('includes/footer.php'); ?>
    <?php include('includes/js.php'); ?>
</body>