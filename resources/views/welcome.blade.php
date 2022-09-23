<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeNews</title>
    <style>
        body{
            
            background: maroon;
            /* overflow: hidden; */
        }
        .header{
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: underline;
            font-size: 35px;
        }

        .ind_article{
            background: grey;
            padding: 20px;
            margin: 50px;
            border-radius: 30px;
            transition: 0.5s;
        }

        .ind_article:hover{
            border: 2px solid black;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
            font-size:20px;
        }
    </style>
</head>
<body>
    <div class="header" >   
        <h1>{{$header}}</h1>    
    </div>
    <div class="main">
        <div class="main-container">
            <div class="article">
                @foreach($articles as $value)
                <div class="ind_article">
                    <a href="article/{{$value['id']}}"><h1>{{$value['title']}}</h1></a>
                    <p>{{$value['desc']}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="footer"></div>
</body>
</html>

