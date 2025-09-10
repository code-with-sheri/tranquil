<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquil.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    @vite(['resources/css/home.css'])
</head>
<body>
    
    <div style="height: 100vh; width: 100vw; display: flex; flex-direction: column; align-items: center; justify-content: center;">

    <div class="logo">
        Tranquil<span class="dot">.</span>
    </div>

    <div class="btns-section">
        <a href="./new-note.blade.php" class="btn">New Note <i class="fa-solid fa-plus"></i></a>
        <a href="./saved-notes.blade.php" class="btn">Saved Notes <i class="fa-solid fa-bookmark"></i></a>
        <a href="./settings.blade.php" class="btn">Settings <i class="fa-solid fa-gear"></i></a>
        <a href="./howtouse.blade.php" class="btn">How to Use <i class="fa-solid fa-question"></i></a>
    </div>

</body>
</html>