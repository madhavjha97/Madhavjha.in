<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        /*======================
            404 page styles
        ======================*/
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f3f3;
            font-family: "Arvo", serif;
        }
        .page_404 {
            text-align: center;
            padding: 90px;
        }
        .four_zero_four_bg {
            background-image: url('https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif');
            height: 300px;
            background-position: center;
            background-size: cover;
        }
        .four_zero_four_bg h1 {
            font-size: 80px;
            margin: 0;
            line-height: 300px;
            color: #fff;
        }
        .contant_box_404 {
            margin-top: -50px;
        }
        .contant_box_404 h3 {
            font-size: 24px;
            margin: 20px 0;
        }
        .contant_box_404 p {
            font-size: 16px;
            color: #636363;
        }
        .link_404 {
            display: inline-block;
            padding: 10px 25px;
            background-color: #39ac31;
            color: #fff;
            text-decoration: none;
            margin-top: 20px;
            border-radius: 5px;
        }
        @media (max-width: 768px) {
            .four_zero_four_bg {
                height: 200px;
            }
            .four_zero_four_bg h1 {
                font-size: 60px;
                line-height: 200px;
            }
        }
        @media (max-width: 480px) {
            .four_zero_four_bg {
                height: 150px;
            }
            .four_zero_four_bg h1 {
                font-size: 40px;
                line-height: 150px;
            }
            .contant_box_404 h3 {
                font-size: 20px;
            }
            .contant_box_404 p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div class="page_404">
    <div class="four_zero_four_bg">
        <h1>404</h1>
    </div>
    <div class="contant_box_404">
        <h3>It looks like you're lost</h3>
        <p>The page you are looking for is not available!</p>
        <a href="{{ url('/') }}" class="link_404">Go to Home</a>
    </div>
</div>
</body>
</html>
