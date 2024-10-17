<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <style>
    .flash {
        position: fixed;
        top: 0;
        left: 0;
        background-color: #91d96a;
        padding: 10px 20px;
        margin: 5px 5px 0px 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transform: translateX(-100%);
        transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        z-index: 1000;
    }

    .flash.show {
        opacity: 1;
        transform: translateX(0);
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
            transform: translateX(0);
        }
        100% {
            opacity: 0;
            transform: translateX(-100%);
        }
    }

    .flash.hide {
        animation: fadeOut 1s forwards;
    }

    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    p {
        margin-top: 20px;
    }
    </style>
</head>
<body>

    <?php
    session_start();

    if(isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        
        echo "<span class='flash'>$message</span>";
    }
    ?>
    <p>Добро Пожаловать на сайт</p>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const flashElement = document.querySelector('.flash');
        flashElement.classList.add('show');

        setTimeout(() => {
            flashElement.classList.add('hide');
        }, 4000); 
    });
</script>
</html>