<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charaset="UTF-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>


<body>

<?php
	
	mb_internal_encoding("utf8");
	$pdo=new PDO("mysql:dbname=lessn01;host=localhost;","root","mysql");
	$stmt=$pdo->query("select*from 4each_keijiban");
	
	
	?>
	
	
   <header>
        
       <img src="4eachblog_logo.jpg">  
   
        <ul class="menu">
        <li>トップ</li>
        <li>プロフイール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
        </ul>
    </header>
    
    <main>
    <div class="left">
        
        <h1>プログラミングに役立つ掲示板</h1>
		
	     <h3>入力フォーム</h3>
        <form method="post" action="insert.php">
		
        <div>
          <label>ハンドルネーム</label>
          <br>
          <input type="text" class="text" size="35" name="handlename">
          
        </div> 
        <div>
          <label>タイトル</label>
          <br>
          <input type="text" class="text" size="35" name="title">
         
        </div>
        <div>
          <label>コメント</label>
          <br>
          <textarea cols="35" rows="7" name="comments"></textarea>
          
        </div>
        <div>
          <input type="submit" class="submit" value="投稿する">
				
        
        </div>
		 	
         
			
		<?php
			
			while($row=$stmt->fetch()){
		
		echo "<div class='kiji'>";
		echo"<h4>".$row['title']."</h4>";
		echo"<div class='contents'>";
		echo $row['comments'];
		echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
		echo"</div>";
		echo"</div>";
	}	
			?>
			
	
		</form>	
         
      </div>
     <div class="right">
        <ul>
        <h3>人気の記事</h3>
        <li>PHP オススメ本</li>
        <li>PHP　MyAdminの使い方</li>
        <li>今人気のエディタ　Top5</li>
        <li>HTMLの基礎</li>
        <h3>オススメリンク</h3>
        <li>インターノウス株式会社</li>
        <li>XMAPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Bracketsのダウンロード</li>
        <h3>カテゴリ</h3>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>
        </ul>
        </div>
     </main>
    
    <footer>copyright c internous|4each blog is tha one which prvides A to Z about programing</footer>
  

  </body>
  </html>