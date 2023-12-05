 <?php
    $conn = mysqli_connect("db", "root", "example", "glabadminton");
    $results = $conn->query("SELECT * FROM lasteventwinner");
    $alumni = $conn->query("SELECT * FROM alumnicorner");
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
     <title>Badminton : GLA university Club </title>
     <meta name="keywords" content="">
     <meta name="description" content="">
     <meta name="author" content="">
     <?php include('includes/header_css.php'); ?>

 </head>
 <!-- body -->

 <body class="main-layout ">
     <?php include('includes/navbar.php'); ?>
     <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <img class="first-slide" src="images\slider\1.jpeg" alt="First slide">
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
                     <img class="third-slide" src="images\slider\3.jpeg" alt="Third slide">
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

     <!-- about -->
     <div class="about" id='1'>
         <div class="container">
             <div class="row">
                 <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                     <div class="about_img">
                         <figure><img src="images\gallery\aboutus.jpeg" alt="img" /></figure>
                     </div>
                 </div>
                 <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                     <div class="about_box">
                         <h3>About Us</h3>
                         <span>Badminton Club</span>
                         <p>GLAU Badminton Club, established in 2012-13 under the guidance of our respected coach Amit Sharma.
                             <br> We are the family of 45+ students including both boys and girls and about 40+ alumini. We provide an environment for the sports enthusiasm who want to built and boost their physical and personality devlopment.
                             <br> We have 6 courts allowing most of the players to practice at a specific time. With support of our Coach we have been the Runner Up Trophy lifter at LNMIIT, Jaipur and KIET, Ghaziabad.
                         </p>
                     </div>

                 </div>
             </div>
         </div>
     </div>
     <!-- end about -->
     <div id='2'>
         <div class="brand">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="titlepage">
                             <h2>Club head</h2>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="container">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="container">
                             <div class="thumbnail">
                                 <img src="images\team\1.jpeg" alt="Presiden" style="width:100%">
                                 <div class="caption">
                                     <ul>
                                         <li>
                                             <h2>Coach- Mr. Amit Sharma</h2>
                                         </li>
                                         <li> Contact No- <b>(+91)9926215890</b> </li>
                                         <li>Email id- <b>badminton.coach@gla.ac.in</b> </li>
                                     </ul>
                                     <br>
                                 </div>
                             </div>
                             </a>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="thumbnail">
                             <div class="container">
                                 <img src="images\team\2.jpg" alt="Presiden" height="200">
                                 <div class="caption">
                                     <ul>
                                         <li>
                                             <h2>President- Mr Akshat Singh</h2>
                                         </li>
                                         <li>Contact No-<b>(+91)6395601635</b> </li>
                                         <li>Course-<b>M.Sc (2nd year)</b> </li>
                                         <li>Email id-<b>akshat.singh_msc.mic20@gla.ac.in</b> </li>
                                     </ul>
                                     <br>
                                 </div>
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="thumbnail">
                             <div class="container">
                                 <img src="images\team\3.jpg" alt=">Vice-president" style="width:100%">
                                 <div class="caption">
                                     <ul>
                                         <li>
                                             <h2>Vice President- Mr Auysh Singh</h2>
                                         </li>
                                         <li>Contact No-<b>(+91)7037687999</b> </li>
                                         <li>Course-<b>Diploma(CS , 3rd year)</b> </li>
                                         <li>Email id-<b>ayush.singh_csd19@gla.ac.in</b> </li>
                                     </ul>
                                     <br>
                                 </div>
                             </div>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="brand">
                 <div class="container">
                     <div class="row">
                         <!-- <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Our Club head</h2>
                        </div>
                    </div> -->
                     </div>
                 </div>

                 <div class="container">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="container">
                                 <div class="thumbnail">
                                     <img src="images\team\4.jpg" alt="Presiden" style="width:100%">
                                     <div class="caption">
                                         <ul>
                                             <li>
                                                 <h2>President:Jalanki Nayak</h2>
                                             </li>
                                             <li> Contact No- <b>(+91)9598266529</b> </li>
                                             <li>Course-<b>B.tech CSE(4th year)</b> </li>
                                             <li>Email id- <b>jalanki.nayak_cs18@gla.ac.in</b> </li>
                                         </ul>
                                         <br>
                                     </div>
                                 </div>
                                 </a>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="thumbnail">
                                 <div class="container">
                                     <img src="images\team\5.jpg" alt="Presiden" style="width:100%">
                                     <div class="caption">
                                         <ul>
                                             <li>
                                                 <h2>Vice President- Rano</h2>
                                             </li>
                                             <li>Contact No-<b>(+91)8171470477</b> </li>
                                             <li>Course-<b>B.Pharm(3rd year)</b> </li>
                                             <li>Email id-<b>rano.gla_bph19@gla.ac.in</b> </li>
                                         </ul>
                                         <br>
                                     </div>
                                     </a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="thumbnail">
                                 <div class="container">
                                     <img src="images\team\6.jpeg" alt=">Vice-president" style="width:100%">
                                     <div class="caption">
                                         <ul>
                                             <li>
                                                 <h2>IT Coordinator- Mr Shubhanshu Nishad</h2>
                                             </li>
                                             <li>Contact No-<b>(+91)9455593295</b> </li>
                                             <li>Course-<b>B.Tech CS,CCV (2nd year)</b> </li>
                                             <li>Email id-<b>shubhanshu.nishad_cs.ccv20@gla.ac.in</b> </li>
                                         </ul>
                                         <br>
                                     </div>
                                 </div>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- winners -->
             <div class="brand" id='3'>
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="titlepage">
                                 <h2>Last Event winners</h2>
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
                                         <img src="admin/lasteventwinner/<?php echo $data['photo'] ?>" alt="">
                                         <h3><?php echo $data['eventname'] ?></h3>
                                         <h1> <?php echo $data['winnername'] ?></h1>
                                         <p>Rank :<?php echo $data['rank'] ?></p>
                                     </div>
                                 </div>

                             <?php endwhile; ?>
                         </div>
                     </div>
                 </div>

                 <!-- winner -->
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


                                 <div class="col-md-12">
                                     <a href="gallery.php" class="read-more">See More</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- end brand -->
                 <!-- clients -->
                 <div class="clients" id='4'>
                     <div class="container">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="titlepage">
                                     <h2>UPCOMING EVENTS </h2>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="clients_red">
                     <div class="container">
                         <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                             <!-- Indicators -->
                             <ul class="carousel-indicators">
                                 <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                                 <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                                 <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                             </ul>
                             <!-- The slideshow -->
                             <div class="carousel-inner">
                                 <div class="carousel-item">
                                     <div class="testomonial_section">
                                         <div class="full center">
                                         </div>
                                         <div class="full testimonial_cont text_align_center cross_layout">
                                             <div class="cross_inner">
                                                 <h3>Shuttle run<br><strong class="ornage_color">Fresher event for 1st years</strong></h3>
                                                 <p>An event to kickstart your journey in the college, to show off your skills and to nurture them even more. The main of this event to cope gap between senior and junior , it is type of fresher party for the 1st years, Shuttle Run provide you the best opportunity to shine among the crowd and make a name for yourself . Excepted date to this event is <b> mid-september</b>.So , to increase your hunger and show that your are worthy of being someone your club can rely on in the future, we provide you with an opportunity of cut-throat singles' matches .</i>
                                                 </p>
                                                 <div class="full text_align_center margin_top_30">
                                                     <img src="icon/testimonial_qoute.png">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="carousel-item active">

                                     <div class="testomonial_section">
                                         <div class="full center">
                                         </div>
                                         <div class="full testimonial_cont text_align_center cross_layout">
                                             <div class="cross_inner">
                                                 <h3>Get set <br><strong class="ornage_color">Inter-university</strong></h3>
                                                 <p>When you start getting better, the challenges also must start getting difficult. So, to make sure that you don't get struck and to raise the bar of difficulties a little higher, after the Shuttle Run in <b>mid-October</b> we, at Get-Set provide freshers' the opportunity to prove your worth by competing with the Seniors & champions ones who already stand at the pinnacle and for those it is a chance to try out the new talent and show off their skills and experience. With the help of this tournament, you will sure get the boost and encouragement that you need to hone your skills.</i>
                                                 </p>
                                                 <div class="full text_align_center margin_top_30">
                                                     <img src="icon/testimonial_qoute.png">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </div>

                                 <div class="carousel-item">

                                     <div class="testomonial_section">
                                         <div class="full center">
                                         </div>
                                         <div class="full testimonial_cont text_align_center cross_layout">
                                             <div class="cross_inner">
                                                 <h3>Intra-state Tournament<br><strong class="ornage_color">Chance to get play outside the campus</strong></h3>
                                                 <p>After competing with college buddy's, our club also provides break to show your talent outside the campus , where you get chance to familiar with other colleges friends . It is a collection of friendship healthy rivalry and some cut-throat competitions all while embedding the spirit of sportsmanship in each and every individual. The festival with it's high voltage matches is sure to boil anyone's blood and increase their craving for victory.It's provide a teammates sprite that helps you to grow in your domain.</i>
                                                 </p>
                                                 <div class="full text_align_center margin_top_30">
                                                     <img src="icon/testimonial_qoute.png">
                                                 </div><i>Gratified by - Shruti Doneria </i>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>

                         </div>

                     </div>
                 </div>
                 <div id='5'>
                     <section id="testimonials" class="container-">
                         <h3 class=" text-center pt-3 my-5 pb-0 text-danger" style="font-size: 3rem;font-weight: 400;">
                             Alumni Corner
                         </h3>
                         <div class="row">
                             <div class="col-sm-10 m-auto">
                                 <div id="slider4" class="carousel slide mb-5" data-ride="carousel">
                                     <ol class="carousel-indicators">
                                         <li class="" data-target="#slider3" data-slide-to="0"></li>
                                         <li data-target="#slider4" data-slide-to="1" class="active"></li>
                                         <li data-target="#slider4" data-slide-to="2 " class=""></li>
                                     </ol>
                                     <div class="carousel-inner">
                                         <div class="carousel-item active">
                                             <div id="events-update" class="card jumbotron jumbotron-expand-md  mx-5 py-0 px-5 " style="border: none;background-color: black;">
                                                 <div class="card-body text-center text-white ">
                                                     <img class="m-3" src="alumna\ankursirji.jpg" style="width: 15rem; height: 15rem; border-radius: 150px;border: 2px solid #dc3545; ">
                                                     <h4 class="text-danger">Mr. Ankur kumar</h4>
                                                     <small>BBA Wipro(job)</small>
                                                     <p class="my-3 text-white"><i>"Know what is happening around you, and match your pace with the world race."</i></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <?php while ($data = $alumni->fetch_assoc()) : ?>
                                             <div class="carousel-item ">
                                                 <div id="events-update" class="card jumbotron jumbotron-expand-md  mx-5 py-0 px-5 " style="border: none;background-color: black;">
                                                     <div class="card-body text-center text-white ">
                                                         <!-- <img class="m-3" src="alumna\<?php echo $data['link'] ?>.jpg" style="width: 15rem; height: 15rem; border-radius: 150px;border: 2px solid #dc3545;"> -->
                                                         <img src="admin/alumni/<?php echo $data['alumniphoto'] ?>" style="width: 15rem; height: 15rem; border-radius: 150px;border: 2px solid #dc3545;" alt="<?php echo $data['alumniname'] ?> ">
                                                         <h4 class="text-danger"> <?php echo $data['alumniname'] ?> </h4>
                                                         <small><?php echo $data['alumnicourse'] ?> <?php echo $data['alumnijob'] ?></small>
                                                         <p class="my-3 text-white"><i>" <?php echo $data['alumnithought'] ?> "</i></p>
                                                     </div>
                                                 </div>
                                             </div>
                                         <?php endwhile; ?>
                                         <div class="carousel-item">
                                             <div id="events-update" class="card jumbotron jumbotron-expand-md  mx-5 py-0 px-5 " style="border: none;background-color: black;">
                                                 <div class="card-body text-center text-white ">
                                                     <img class="m-3" src="alumna\2.jpg" style="width: 15rem; height: 15rem; border-radius: 150px;border: 2px solid #dc3545;">
                                                     <h4 class="text-danger">Mr Satyam Kaushal </h4>
                                                     <small>B.Tech(CS) TCS</small>
                                                     <p class="my-3 text-white"><i>"We put the "BAD" in badminton "
                                                             "</i></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <div id="events-update" class="card jumbotron jumbotron-expand-md  mx-5 py-0 px-5 " style="border: none;background-color: black;">
                                                 <div class="card-body text-center text-white ">
                                                     <img class="m-3" src="alumna\3.jPG" style="width: 15rem; height: 15rem; border-radius: 150px;border: 2px solid #dc3545;">
                                                     <h4 class="text-danger">Mr Satyam Kaushal </h4>
                                                     <small>B.Tech(CS) TCS</small>
                                                     <p class="my-3 text-white"><i>"We put the "BAD" in badminton "
                                                             "</i></p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                     <!--CONTROLS-->
                                     <a href="#slider4" class="carousel-control-prev" data-slide="prev">
                                         <span class="carousel-control-prev-icon"></span>
                                     </a>

                                     <a href="#slider4" class="carousel-control-next" data-slide="next">
                                         <span class="carousel-control-next-icon"></span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </section>
                 </div>

                 <?php include('includes/footer.php'); ?>
                 <?php include('includes/js.php'); ?>

 </body>

 </html>