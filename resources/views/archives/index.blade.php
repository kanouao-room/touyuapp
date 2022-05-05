<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>記事一覧</title>
    <style>
        body{
            /* width: 800px; */
            /* background-color:white; */
            text-align:center;
            /* background-image: url(images/image2.jpg); */
            /* background-repeat: no-repeat; */
            /* background-size: contain; */
            /* background-position:center; */
            font-family: Arial, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
             font-size: 20px;
        }
        .text1{
            margin:30px 30px 30px 30px;
            font-size: 20px;
        }
        .same-width-list {
        width: 300px;
        height: 200px;
        }
        button{
            width: 300px;
            height:100px;
            background-color:#FFEFD5;
            font-size: 20px;
        }
        form{
            margin:30px 30px 100px 30px;
            
        }
    </style>
</head>
<body>
    <h1>灯油入れた日記録アプリ</h1>


 <form>
  <select class="same-width-list">
    <option value="1" name="question" value="担当者A">担当者A</option>
    <option value="2" name="question" value="担当者B">担当者B</option>
    <option value="3" name="question" value="担当者C">担当者C</option>    
    <select/>

<p> 作業した日付を入力して下さい。</p>
<p><input type="text"></p>


    <p class="text1">灯油を入れたら下の登録ボタンを押して下さい。</p>
    <p><button type="submit">登録する</button>

    </form>    
    <p>過去記録一覧</p>

</body>
</html>