<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title>Redes 2</title>

    <style>
        body{
            margin: 0;
            padding: 0; 
        }
        .contenedor{
            position: absolute;
            top: 30%;
            left: 35px;         
            z-index: 111;
        }
        .barra{
            margin: 120px 0;
            height: 270px;
            width: 30px;
            position: fixed;
           
           
        }
        .barra li{
             list-style: none;
             height: 55px;
             width: 70px;
             margin: 0 -40px;
             position: relative;
        }
        .barra li a{
            text-decoration: none;
            font-size: 1.5em;
            height: 100%;
            width: 100%;
        }
        .barra li a{
            position: absolute;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .barra li span{
            position: absolute;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        :root{
            --color1: rgba(19, 19, 19, 0.986);
        }
        .barra  li .span{
            transition: .5s;
            height: 28px;
            width: 70px;
            margin: 15px -10px;
            font-size: .8em;
            background-color: var(--color1);
        }
        li:hover span{
            transform: translateX(92px);
        }
        .barra li span:before{
            content:"";
            position: absolute;
            height: 20px;
            width: 12px;
            background-color: var(--color1);
            clip-path: polygon(0 49%, 100% 0, 100% 100%);  
            left: -10px;  
        }
        .fa-facebook-f{
            border-radius: 0 7px 0 0;
            background-color: #3b5998;
        }
        .fa-instagram-square{
           
            background-color: #125688;
        }
        .fa-square-twitter{
           
            background-color: #55acee;
        }
        .fa-whatsapp{
            border-radius: 0 0 7px 0;
            background-color: #4dc247;
        }
    </style>
</head>
<body>

    <div class="contenedor">
        <ul class="barra">
            <li>
                <span class="span">Facebook </span>
                <a href="https://www.facebook.com/profile.php?id=100093179426681" target="_blank" class="fab fa-facebook-f"></a>
            </li>
            <li>
                <span class="span">Instagram </span>
                <a href="#" class="fab fa-instagram-square"></a>
            </li>
            <li>
                <span class="span">Twitter </span>
                <a href="https://twitter.com/OnlineUnge" target="_blank" class="fab fa-square-twitter"></a>
            </li>
            <li>
                <span class="span">WhatsApp </span>
                <a href="https://wa.me/240555386696" target="_blank" class="fab fa-whatsapp"></a>
            </li>
           
        </ul>
    </div>
    
</body>
</html>