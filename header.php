<?php 
    include '../model/function.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Simplon Côte d'Ivoire</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../public/favicon.png">
    <link rel="stylesheet" href="../public/css/style.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <!-- <i class="bx bxl-c-plus-plus"></i> -->
        <b class="logo-icon">
        <img src="../public/logo-icon.png" alt="homepage" width="40px"/>
        </b>
        <span class="logo_name">SIMPLOM</span>
      </div>
      <ul class="nav-links">
        <!-- <li>
          <a href="dashboard.php" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Simplon</span>
          </a>
        </li> -->
        <li>
          <a href="ajout_participant.php">
            <i class="bx bx-box"></i>
            <span class="links_name">Ajouter Participant</span>
          </a>
        </li>
        <li>
          <a href="liste_des_participants.php">
            <i class="bx bx-box"></i>
            <span class="links_name">Liste des Participants</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
        </div>
      </nav>
