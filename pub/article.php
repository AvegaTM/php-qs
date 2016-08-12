<?php
    require_once( "database.php" );
    require_once( "Models/articles.php" );

    $link = db_connect();
    $article = articles_get( $link, $_GET['id'] );

    include( "views/article.php" );
?>