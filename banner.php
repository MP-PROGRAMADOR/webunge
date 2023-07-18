<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title></title>
    <style>
        .bannerLateral{
            background-color: rgba(0, 0, 0, 0.1);
            /* background-color: rgba(255, 125, 0, 0.5); */
            width: 350px;
            height: 275px;
            position: fixed;
            right: 0;
            bottom: 0;
            z-index: 111;
            overflow-y: auto;
            border-radius: 5px;

        }
        .bannerLateral a{
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px 5px;
            color: #000;
            font-weight: bold;
        }

        .btn-tw{
            position: fixed;
            width: 55px;
            height: 55px;
            line-height: 55px;
            bottom: 30px;
            right: 20px;
            background-color: #55acee;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 0px 1px 10px rgba(0,0,0, 0.3);
            transition: 0.3s;
            display: none;
            z-index: 111;
        }
        .btn-tw:hover{
            text-decoration: none;
            color: #55acee;
            background-color: #fff;
        }

        @media screen and (max-width: 1024px) {
            .bannerLateral{
                display: none;
            }
            .btn-tw{
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="bannerLateral">
       

       <a class="twitter-timeline" href="https://twitter.com/F_Ntutumu?ref_src=twsrc%5Etfw">Tweets del Rector</a> 
       <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <!-- <a class="twitter-timeline" href="https://twitter.com/diploegpress?ref_src=twsrc%5Etfw">Tweets del Rector</a> 
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
    </div> 

    <a href="https://twitter.com/F_Ntutumu?ref_src=twsrc%5Etfw" target="_blank" class="btn-tw">
        <i class="fab fa-twitter"></i>
    </a>


</body>
</html>