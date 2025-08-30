<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquil.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap"  rel="stylesheet">
    
    @vite('resources/css/home.css')
</head>
<body>
    
    <div style="height: 100vh; width: 100vw; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div class="logo">
            Tranquil<span class="dot">.</span>
        </div>

    <div class="btns" style="margin-top: 20px;">
        <a href="./new-note.blade.php" class="btn">New Note</a>
        <a href="./howtouse.blade.php" class="btn">How to Use</a>
        <a href="./saved-notes.blade.php" class="btn">Saved Notes</a>
        <a href="./settings.blade.php" class="btn">Settings</a>
    </div>

</body>
</html>