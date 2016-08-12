<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My First Blog</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <h1>My First Blog</h1>
            <a href="Admin/">Admin tools</a>
            <div>
                <?php foreach( $articles as $a ): ?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Public: <?=$a['date']?></em>
                    <p><?=$a['content']?></p>
                </div>
                <?php endforeach ?>
            </div>
            <footer>
                <p>My First Blog<br>Copyright &copy; 2016</p>
            </footer>        
        </div>
    </body>
</html>