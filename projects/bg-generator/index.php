<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background generator</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image:linear-gradient(95deg,  rgba(34,193,195, 0.8), rgba(253,187,45,0.8)), url('/projects/bg-generator/img/jigsaw.svg');">
    <header class="header">
        <h1 class="heading">Background Generator_<br><span class="toggle" onclick="controlToggle()">&#9207;</span></h1>
        

        <div class="controls">
            
            <div class="control-group">
                <input type="color" class="color-picker color-picker__one" value="#22C1C3">
            </div>

            <div class="control-group">
                <input type="color" class="color-picker color-picker__two" value="#FDBB2D">
            </div>

            <div class="control-group">
                <label for="gradient-angle">Gradient angle_</label> 
                <input name ="gradient-angle" type="range" min="1" max="360" step="10" class="range-picker">
            </div>

            <div class="control-group">
                <label for="gradient-angle">Opacity_</label> 
                <input type="range" min="0" max="1" step=".01" class="opacity-picker">
            </div>

            <div class="control-group control-group__bg"></div>


            <div class="bg-selector">
                <div class="bg bg--jigsaw" data-bg="jigsaw"></div>
                <div class="bg bg--piano-man" data-bg="piano-man"></div>
                <div class="bg bg--overcast" data-bg="overcast"></div>
                <div class="bg bg--topography" data-bg="topography"></div>
                <div class="bg bg--cutout" data-bg="cutout"></div>
                <div class="bg bg--eyes" data-bg="eyes"></div>
                <div class="bg bg--yyy" data-bg="yyy"></div>
            </div>

        </div>

    </header>
    <footer>

    </footer>
<script src="script.js"></script>
</body>
</html>