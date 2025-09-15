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
    
    <div class="main-wrapper">

        <div class="logo">
            Tranquil<span class="dot">.</span>
        </div>

        <div class="btns-section">
            <a href="{{ url('/new-note') }}" class="btn">New Note <i class="fa-solid fa-plus"></i></a>
            <a href="{{ url('/saved-notes') }}" class="btn">Saved Notes <i class="fa-solid fa-bookmark"></i></a>
            <a href="{{ url('/settings') }}" class="btn">Settings <i class="fa-solid fa-gear"></i></a>
            <a href="{{ url('/how-to-use') }}" class="btn">How to Use <i class="fa-solid fa-question"></i></a>
        </div>

    </div>

</body>
</html>