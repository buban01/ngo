<?php
// allows each page to set its own $page_title before including header
if (!isset($page_title)) { $page_title = 'Your NGO Name'; }
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($page_title) ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- AOS for scroll animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/custom.css"/>
   <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .navbar {
      background: linear-gradient(90deg, #3b2d5b, #0d324d);

      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand img {
      height: 40px;
      width: auto;
    }

    .navbar-brand {
      font-family: 'Pacifico', cursive;
      font-size: 26px;
      color: #ffffff !important;
    }

    .nav-link {
      color: #ffffff !important;
      font-weight: 500;
      transition: color 0.3s ease;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .nav-link:hover {
      color:rgb(127, 255, 101) !important;
    }

    .nav-link svg {
      width: 20px;
      height: 20px;
      fill: white;
    }
</style>  
</head>
<body>
  <!-- NAVBAR -->
  <!-- header.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">Kultikari</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#story">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#impact">Reports</a></li>
        <li class="nav-item"><a class="nav-link" href="#expertise">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#president">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

  <main class="pt-5">
