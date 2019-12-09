<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset='<?php bloginfo( 'charset' ); ?>'>

    <meta name='viewport' content='width=device-width, initial-scale=1.0' />

    <?= wp_head()?>

</head>

<body class="bg-light">            

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

        <a class="navbar-brand" href="<?= get_home_url(); ?>">

            إبداع ترافيل

          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ">

              <li class="nav-item active">

                <a class="nav-link" href="<?= get_home_url(); ?>">الرئيسية <span class="sr-only">(current)</span></a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="<?= get_home_url(); ?>/about">عن الشركة</a>

              </li>

              <li class="nav-item dropdown ">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  الأقسام

                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <a class="dropdown-item" href="<?= get_home_url(); ?>/category/السياحة-الداخلية/">سياحة داخلية</a>
                  <a class="dropdown-item" href="<?= get_home_url(); ?>/category/السياحة-الخارجية/">سياحة خارجية</a>
          
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item"><b>العروض</b></a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="<?= get_home_url(); ?>/category/عروض-الطيران/">عروض و حجز الطيران</a>
                  <a class="dropdown-item" href="<?= get_home_url(); ?>/category/عروض-حجز-البري/">عروض و حجز البرى</a>
                  <a class="dropdown-item" href="<?= get_home_url(); ?>/category/النقل-و-الليموزين/">النقل و اللموزين</a>
                  <a class="dropdown-item" href="<?= get_home_url(); ?>/category/التأشيرات-السياحية/">التأشيرات السياحية</a>
                  <a class="dropdown-item" href="<?= get_home_url(); ?>/category/عروض-حجز-الفنادق/">عروض و حجز الفنادق</a>
                  
          <div class="dropdown-divider"></div>
                  <a class="dropdown-item"><b>سياحة دينية</b></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= get_home_url(); ?>/category/السياحة-الدينية-الحج/">حج</a>
                  <a class="dropdown-item" href="<?= get_home_url(); ?>/category/السياحة-الدينية-العمرة/">عمرة</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= get_home_url(); ?>/contact">تواصل معنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= get_home_url(); ?>/reports">الإبلاغ عن مشكلة</a>
              </li>
            </ul>
              <ul class="navbar-nav mr-auto social">
                 <li class="nav-item"><a href="www.facebook.com/ebdaa.travel.eg"><i class="fab fa-facebook-f"></i></a></li>

                <li class="nav-item"><a href="www.facebook.com/ebdaa.travel.eg"><i class="fab fa-twitter"></i></a></li>

                <li class="nav-item"><a href="www.facebook.com/ebdaa.travel.eg"><i class="fab fa-instagram"></i></a></li>
               </ul>



          </div>            

        </div>

    </nav>

    <div class="wallpaper text-center">

        <div class="text">

            <h1>إبداع-ترافيل</h1>

            <p>لخدمات السياحة</p>            

        </div>

    </div>

      <div class="M-counter pt-4 pb-4 ">

        <div class="col-sm-12">

            <div class="item col-xs-12 col-sm-4 float-right text-center">

              <h4><i class="fas fa-bullseye"></i></h4>

              <h3><span class='numscroller' data-min='1' data-max='40' data-delay='3' data-increment='3'>40</span></h3>

              <p>عام من الخبرة</p>

              <h3>في مجال السياحة</h3>

            </div>

            <div class="item col-xs-12 col-sm-4 float-right text-center">

              <h4><i class="fas fa-landmark"></i></h4>

              <h3><span class='numscroller' data-min='1' data-max='3' data-delay='1' data-increment='3'>3</span></h3>

              <p>الترتيب الثالث على مستوى مصر</p>

              <h3>في اصدار التذاكر لرحلات لبنان وسوريا</h3>

            </div>

            <div class="item col-xs-12 col-sm-4 float-right text-center">

              <h4><i class="fas fa-hands-helping"></i></h4>

              <h3><span class='numscroller' data-min='1' data-max='1984' data-delay='50' data-increment='100'>1984</h3>

              <p>ميلاديًا</p>

              <h3>تم التأسيس</h3>

            </div>

        </div>

      </div>

