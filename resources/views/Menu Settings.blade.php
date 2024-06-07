<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting - Dunia Web</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container" >
        <h1 class="title">Settings</h1>
        <form action="#">
            <div class="setting-item">
                <label for="language" style="font-weight: bold;">Pilih Bahasa:</label>
                <label for="indonesia">Bhs Indonesia</label>
                <input type="radio" id="indonesia" name="language" value="indonesia">
                <label for="english">Bhs Inggris</label>
                <input type="radio" id="english" name="language" value="english">
            </div>
            <div class="setting-item">
                <label for="volume" style="font-weight: bold;">Volume:</label>
                <input type="range" id="volume" name="volume" min="0" max="100">
            </div>
            <div class="setting-item">
                <label for="screen-mode" style="font-weight: bold;">Screen Mode:</label>
                <label for="full">Full Screen</label>
                <input type="radio" id="full" name="language" value="full">
                <label for="english">Windowed</label>
                <input type="radio" id="wide" name="language" value="wide">
            </div>
            <div class="setting-item">
                <label for="resolution">Resolusi</label>
                <select id="resolution" name="resolution">
                    <option value="800x600">800x600</option>
                    <option value="1024x768">1024x768</option>
                    <option value="1280x720">1280x720</option>
                    <option value="1920x1080">1920x1080</option>
                </select>
            </div>
        </form>
        <a href="/Player Menu" class="button" >Back</a>
    </div>

<audio autoplay loop hidden>
  <source src="bgm/bgm_menu.mp3" type="audio/mpeg">
</audio>
</body>
</html>
