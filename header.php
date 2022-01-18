<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal@4.0.5/dist/scrollreveal.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Source Sans Pro', sans-serif !important;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .brand-btn {
        background: none;
        color: #40a6a7;
        border-color: #40a6a7;
      }
      .brand-btn:hover {
        background: #40a6a7;
        color: #fff;
      }
      .brand-font {
        color: #40a6a7;
      }
      .display-4 {
        font-size: 3rem;
      }
      .vh-25 {
        height: 25vh;
      }
      .vh-50 {
        height: 50vh;
      }
      .vh-75 {
        height: 75vh;
      }
      .bg-50 {
        background: rgba(0,0,0,0.5);
      }
      .card-columns {
        column-count: 1;
      }
      footer {
        background: linear-gradient(0deg, rgba(247,247,247,1) 0%, rgba(255,255,255,1) 30%);
      }
      .cs-hidden {
        height: 1px;
        opacity: 0;
        filter: alpha(opacity=0);
        overflow: hidden;
      }
      .lslide img {
        max-width: 100vw;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        .flex-md-equal > * {
          -ms-flex: 1;
          flex: 1;
        }
        .card-columns {
          column-count: 2;
        }
      }
      /*@media (max-width: 768px) {
        .navbar {
          background-color: #fff !important;
        }
        .nav-link {
            color: #7d858b !important;
        }
        .navbar h1 a {
          color: #343a40!important;
        }
      }
      .negative-nav {
        margin-top: -56px;
      }*/
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top shadow-sm py-3">
        <h1 class="mb-0 d-flex align-items-center">
          <a href="<?php echo site_url(); ?>" class="text-dark text-uppercase">Baby<span class="font-weight-bold">Bliss</span>
          </a>
          <small class="mb-0 ml-2 text-secondary" style="width: min-content; font-size: 14px;">Infant Massage Consultation</small>
        </h1>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-secondary" href="<?php echo site_url(); ?>/about/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="<?php echo site_url(); ?>/services/">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="<?php echo site_url(); ?>/resources/">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="<?php echo site_url(); ?>/contact/">Contact</a>
            </li>
          </ul>
        </div>
      </nav>