<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 3 - Selesai</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .big-yellow {
      font-size: 40px;
      color: yellow;
      text-align: center;
    }

    .big-purple {
      font-size: 40px;
      color: purple;
      text-align: center;
    }
  </style>
</head>
<body style="display: flex;">
    <div id="notif-overlay" onclick="hideNotification()">
    <!-- Added image element for notification -->
    <img src="images/enpisi.png" alt="Notification Image" id="notif-image">
    <div class="overlay-text">Horayyy! Kamu telah menyelesaikan Level 3!</div>
  </div>
  <div class="menu-container">
    <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 40px;">Level 3</h1> 
      <div style="padding: 0 0 30px 0;">
        <img src="images/soal3 done.png" alt="soal1"> 
      </div>
      <div class="button-container">
        <a href="/Menu Materi" class="button">Materi</a>
        <a href="/Player Menu" class="button">Main Menu</a>
        <a href="/Level Menu" class="button">Next</a>
      </div>
    </div>
  </div>
  <footer>
    <div>
      <h6>2024 Web World. Kelompok 8</h6>
    </div>
  </footer>

  <audio autoplay loop hidden>
    <source src="bgm/bgm_menu.mp3" type="audio/mpeg">
  </audio>

  <script src="js/notifikasi.js"></script>

</body>
</html>
