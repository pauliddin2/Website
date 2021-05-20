<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            background-color: rgba(226, 179, 183, 0.91);
        }
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
            background-color: #df7e9f;
            border-radius: 5rem;

        }
        .container-inside{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            width: 70vw;
            background-color: #de4685;
            border-radius: 5rem;
        }

        .four-o-four{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .four-0-four--number{
            font-size: 15rem;
            margin: 0;
            color: #430505;
        }

        .page-not-found{
            font-size: 5rem;
            color: #f0e7e7;
            margin: 0;
        }


        @media (max-width: 800px) {
            .container{
                border-radius: 0rem;
            }

            .four-0-four--number{
                font-size: 5rem;
                margin: 0;
                color: #430505;
            }
            .page-not-found{
                font-size: 3rem;
                color: #f0e7e7;
                margin: 0;
            }

        }



    </style>
</head>
<body>

<div class="container">
   <div class="container-inside">
       <div class="four-o-four">
           <h1 class="four-0-four--number">404</h1>

               <p class="page-not-found">Page not found</p>

       </div>
       <a href="/home"><button type="button" class="btn btn-info">Back to Home</button></a>
   </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
