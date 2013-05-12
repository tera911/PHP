<?php
    session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <meta name="author" content="M@nyu">
                <meta http-equiv="Content-language" content="ja">
                <title>通知ったー α ﾃｽﾄ</title>
    </head>
    <style type="text/css">
      /*  div{
            outline: 1px solid red;
        }*/
        *{
            margin:0;
            padding:0;
        }
        body{
            font-family:'ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
            font-size:11px;
        }
        #wrap{
            width:800px;
            margin:0 auto;
        }
        #title{
            padding:20px;
            font-size:3em;
            margin:5px auto 0 150px;
        }
        #login{
            width:240px;
            height:110px;
            margin:0 auto;
            padding:20px;
            text-align:center;
            
        }
        #login button[type="submit"]{
            font-size:2em;
            height:70px;
            width:200px;
            color:#F00;
            background-color:#0F0FFF;
            -webkit-border-radius:15px;
            -moz-border-radius:15px;
            border-radius: 15px;
            border:0px;
            border-bottom:1px solid #0F0FFF;
            border-left:1px solid #00F;
        }
        #detail{
            font-size:1.5em;
            margin:20px auto 0 50px;
            padding:20px 0;
            width:500px;
            text-align:left;
        }
        #footer{
            width:100%;
            border-top:1px solid gray;
        }
        #footer p{
            margin:10px;
            text-align: center;
        }
        
    </style>
<body>
    <div id="wrap">
        <div id="title">
            <h1>通知ったー α</h1>
        </div>
        
        <div id="login">
            <form action="./twitter/login.php">
                <button type="submit">Login</button>
            </form>
        </div>
        
        <div id="detail">
            <ul>
                <li>これはああああ</li>
                <li>これはああああ</li>
            </ul>
        </div>
        <div id="footer">
            <p>Copyright &copy; 2013 M@nyu All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
