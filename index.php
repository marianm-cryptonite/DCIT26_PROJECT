<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team Five POS System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
   html,
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.6), #b3e0ff), url('bg.jpeg');
            height: 100vh;
            -webkit-background-size: cover;
            -moz-background-size: cover;
             -o-background-size:cover;
            background-position: center center;
            position: relative;
            background-size: cover;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #fff;
            padding: 0 25px;
            font-size:  15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
            color: #fff;
        }

        .m-b-md span{
            color: #80ccff;

        }
     
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Team Five POS <span>System</span>
            </div>

            <div class="links">
                <a href="Restro/admin/"><b>Admin Log In</b></a>
                <a href="Restro/cashier/"><b>Cashier Log In<b></a>
              <!--   <a href="Restro/customer">Customer Log In</a> -->
            </div>
        </div>
    </div>
</body>

</html>