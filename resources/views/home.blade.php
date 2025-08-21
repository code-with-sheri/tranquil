<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquil.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: Arial;
        }
        p{
            letter-spacing: -1px;
        }
        .logo{
            cursor: pointer;
            color: #181818;
            font-size: 100px;
            letter-spacing: -5px;
            align-items: center;
            justify-content: center;
            display: flex;
            transition: transform 0.4s;
            transform-origin: bottom;
        }
        .logo:hover{
            transform: scaleY(1.1);
        }
        .btns{
            gap: 20px;
            outline: none;
            text-align: center;
        }
        .btn{
            cursor: pointer;
            padding: 10px 12px;
            border: none;
            background-color: #181818;
            color: white;
            font-size: 11px;
            border-radius: 50px;
            transition: 0.25s;
        }
        .btn:hover{
            background-color: black;
        }
        .dot {
            font-family: monospace;
            margin-left: -15px; 
        }
        #writing-part {
            display: none;
            opacity: 0; 
            transition: opacity 0.5s ease;
        }
    </style>
</head>
<body>
    <div style="height: 30vh;"></div>

    <div>
        <h1 class="logo">Tranquil<span class="dot">.</span></h1>
    </div>

    <br>

    <div class="btns">
        <a href="new-note,php"><button class="btn" onclick="open_new_note()"><i class="fa-solid fa-plus"></i> New Note</button></a>
        <a href="saved-notes.php"><button class="btn" onclick="open_new_note()">Saved Notes</button></a>
        <a href="settings.php"><button class="btn" onclick="open_new_note()">Settings</button></a>
        <a href="howtouse.php"><button class="btn" onclick="open_new_note()">How to use?</button></a>
    </div>

    <script src="app.js">

    </script>

    <div id="writing-part">
        <textarea id="note_input" placeholder="Start typing..."></textarea>
    </div>

    <script>
        function open_new_note() {

            document.querySelector('.logo').style.transition = 'opacity 1s ease';
            document.querySelector('.btns').style.transition = 'opacity 1s ease'; 
            
            document.querySelector('.logo').style.display = 'none';
            document.querySelector('.btns').style.display = 'none';
  
        }
    </script>
</body>
</html>