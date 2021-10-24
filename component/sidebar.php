<?php
 session_start();
 if (!$_SESSION['isLogin']) {
 header("location: ../page/loginPage.php");
 }else {
 include('../db.php');
 }
 echo '
 <! doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <title>PERPUSTAKAAN!</title>
    <style>
      * {
        font-family: "Quicksand", sans-serif;
      }
      .side-bar {
        width: 260px;
        background-color: #16347a;
        min-height: 100vh;
      }
      a {
        padding-left: 10px;
        font-size: 13px;
        text-decoration: none;
        color: white;
      }
      .menu i {
        padding-left: 20px;
      }
      .menu .content-menu {
        padding: 9px 7px;
      }
      .isActive {
        background-color: #071853 !important;
        border-right: 8px solid #010e2f;
      }
      i {
        color: white;
      }  
      
      #backgound{
        background-image:url("https://cdn0-production-images-kly.akamaized.net/8hnpIcvnowmn0er9cgHlDHJT5XM=/673x379/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1017658/original/035927600_1444628523-kpl-640x386.jpg");

    }
    </style>
  </head>

  <body>
    <aside>
      <div class="d-flex " id="backgound">
      <div class="bar">
      <a>HELLO WORLD</a>
        </div>
        <div class="side-bar">
          <h2 class="text-light text-center pt-2">PERPUSTAKAAN</h2>
          <hr />
          <div class="menu">
          <div class="content-menu">
          <i class="fa fa-user"></i>
          <a href="./profilePage.php" style="font-weight: 600"
            >Profile</a
          >
        </div>
            <div class="content-menu">
              <i class="fa fa-columns"></i>
              <a href="./userDashboard.php" style="font-weight: 600"
                >Dashboard</a
              >
            </div>
            <div class="content-menu">
              <i class="fa fa-list"></i>
              <a href="./listMahasiswaPage.php" style="font-weight: 600"
                >List Peminjaman</a
              >
            </div>
            <div class="content-menu">
              <i class="fa fa-plus-square"></i>
              <a href="./addMahasiswaPage.php" style="font-weight: 600"
                >Peminjaman</a
              >
            </div>
            <div class="content-menu">
              <i class="fa fa-sign-out"></i>
              <a href="../process/logoutProcess.php" style="font-weight: 600"
                >Logout</a
              >
            </div>
            <hr />
          </div>
        </div>
        ' ?>

