<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">

    <style>
    html,
    body {
      font-family: 'Poppins', sans-serif;
      position: relative;
      height: 150%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    

  </style> 
  </head>
  <body>
  <div class="navbar"">
        <nav class="navbar navbar-expand-lg  fixed-top m0-3 mt-0"  style="background-color:#FFFFFF;">
            <div class="container-fluid">
            <div class="p-2 w-100 bd-highlight  d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start" >
          <a href="#" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <use width="10" height="5" role="img" aria-label="Bootstrap"><img  src="<?php echo base_url('assets/icon/logo.svg');?>" alt="logo" ></use>
          </a>

          <ul class="nav col-20 col-lg-auto  justify-content-center my-md-0 text-small">
            <li>
            <a class="link-dark" href="#" onclick="showConfirmationIG(); return false;"><img style="width: 80px; height: 80px;"  src="<?php echo base_url('assets/icon/instagram.svg');?>" alt="logo" > </a>
            </li>
            <li>
            <a class="link-dark" href="#" onclick="showConfirmationTK(); return false;"><img style="width: 80px; height: 80px;"  src="<?php echo base_url('assets/icon/tiktok.svg');?>" alt="logo" > </a>
            </li>
            
          </ul>
        </div>
        <div class="p-1 flex-shrink-1 bd-highlight text-center " style="width: 110px; background-color: #34CBC7; font-size: 16px; font-family: poppins; color: #FFFFFF;"><p class="mt-4"><b>Contact Us</b></p></div>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <br>
    <a href="#" href="#" onclick="showConfirmationYT(); return false;"  style="position: fixed; right: 0; bottom: 0; z-index: 9999;" >
  <img src="<?php echo base_url('assets/icon/Hubungi.svg');?>" alt="Teks Alternatif Gambar">
</a>

