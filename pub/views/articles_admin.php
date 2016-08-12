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
                <a href="index.php?action=add">Add new article</a>
                <table class="admin-table" border="1">
                    <tr>
                        <th class="date">Дата</th>
                        <th class="headofart">Заголовок</th>
                        <th class="edit"></th>
                        <th class="remove"></th>
                    </tr>
                    <?php foreach( $articles as $a ): ?>
                    <tr>
                        <td class="date"><?=$a['date']?></td>
                        <td class="headofart"><?=$a['title']?></td>
                        <td class="edit"><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                        <td class="remove"><a onclick = "return confirm('Вы уверены?')" href="index.php?action=delete&id=<?=$a['id']?>">Удалить</aa></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
            <footer>
                <p>My First Blog<br>Copyright &copy; 2016</p>
            </footer>        
        </div>
    </body>
</html>