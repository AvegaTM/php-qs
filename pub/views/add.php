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
                <form method="post" action="index.php">
                    <p><label>Name</label><input type="text" name="title" value="" class="form-item" autofocus required></p>
                    <p><label>Date</label><input type="date" name="date" value="" class="form-item" required></p>
                    <p><label>Content</label><textarea class="form-item" name="content" required></textarea></p>
                    <p><input type="submit" value="Save" class="btn"></p>
                </form>
            </div>
            <footer>
                <p>My First Blog<br>Copyright &copy; 2016</p>
            </footer>        
        </div>
    </body>
</html>