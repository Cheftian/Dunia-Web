<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 1 - 1</title>
  <link rel="stylesheet" href="css/style_narasi.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="display:flex;">

<!-- <header id="header">
        <div class="row">
            <a href="index.html" class="navbar-brand" style="font-size: 30px;">HOME</a>
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button class="button-container">
                    Soal
                </button>
            </div>            
        </div>
    </header> -->


<div id="cutscene1" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/enpisi_yes.png" alt="Notification Image" id="notif-image"></img>
    <div class="overlay-text">
    <h6>Utopia</h6>  
    Kau benar, inilah nama duniaku!</div>
  </div>
<div id="cutscene2" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/soal1.png" alt="Notification Image"></img>
  </div>
<div id="cutscene3" class="cutscene-overlay" onclick="hideCutscene()" style="background-color: rgba(10, 10, 10, 0.95);">
  <img src="images/soal1done.png" alt="Notification Image"></img>
  </div>



  <div class="menu-container">
    <div class="menu-form">
      <h1 style="color: rgb(189, 43, 226); font-size: 45px;">LEVEL 1</h1> 
      <div>
        &lt;body&gt; 
      </div>
      <div>
        <a class="soal">
          <button class="button-sublevel-done">&lt;h1&gt; Dunia Web &lt;/h1&gt;</button></a> 
      </div>
      <div>
        <a href="/Level1 4" class="soal">
          <button class="button-sublevel">(2).....&lt;/b&gt&lt/p&gt;</button></a>
      </div>
      <div>
        <a class="soal">
          <button class="button-sublevel-disable"> (3)..... Dunia Web&lt/p&gt;</button></a>
      </div>
      <div>
        <a class="soal">
          <button class="button-sublevel-disable"> &ltp&gt;Dunia yang tidak pernah Anda (4).....</button></a>
      </div>
      <div>
        &lt;/body&gt;
      </div>
      <h1 style="color: rgb(189, 43, 226); font-size: 15px; padding-top:20px;">Pilih soal berikutnya!!</h1>
      <div class="button-container">
      <!-- <a href="/Level1 2" class="button">Back</a> -->
      <a href="/Menu Materi" class="button">Materi</a>
      <a class="button" onclick="showNextCutscene(2)">Soal</a>
      <a class="button" onclick="showNextCutscene(3)">Target</a>
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
