<!doctype html>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>Adashino Portfolio</title>
        <meta name="description" content="あだしのの自己紹介ページ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti&display=swap" rel="stylesheet">
                
        <!--リセットCSS-->
         <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
                
        <!--オリジナルCSS-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!--ファビコン-->
        <link rel="icon" type="image/png" href="fabicon.png">
    </head>
    
    <body>
        @yield('content')
    </body>

</html>