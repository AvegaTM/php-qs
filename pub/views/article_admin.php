<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My First Blog</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div>
            <h1>My First Blog</h1>
            <div>
                <form method="POST" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <p><label>Name<input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required></label></p>
                    <p><label>Date<input type="date" name="date" value="<?=$article['date']?>" class="form-item" required></label></p>
                    <p><label>Content<textarea class="form-item" name="content" required><?=$article['content']?></textarea></label></p>
                    <p><input type="reset" value="Reset" class="btn"><input type="submit" value="Save" class="btn"></p>
                </form>
            </div>
            <footer>
                <p>My First Blog<br>Copyright &copy; 2016</p>
            </footer>        
        </div>
    </body>
</html>