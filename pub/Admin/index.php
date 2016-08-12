<?php
var_dump( $_GET );

require_once( "../database.php" );
require_once( "../Models/articles.php" );

$link = db_connect();

if( isset( $_GET['action'] ) )
    $action = $_GET['action'];
else
    $action = "";

if( $action == "add" )
{
    if( !empty( $_POST ) )
    {
        $t = articles_new( $link, $_POST['title'], $_POST['date'], $_POST['content'] );
        /*
        if( $t )
            syslog( LOG_WARNING, "-=[php-qs]=- Ok" );
        else
            syslog( LOG_WARNING, "-=[php-qs]=- !!! All bad");
        */
        header( "Location: index.php" );
    }
    else
        include( "../views/article_admin.php" );
}
elseif( $action == "edit" )
{
    if( !isset( $_GET['id'] ) )
        header( "Location: index.php" );
    $id = (int)$_GET['id'];
    if( !empty( $_POST ) && $id>0 )
    {
        articles_edit( $link, $id, $_POST['title'], $_POST['date'], $_POST['content'] );
        header( "Location: index.php" );
    }
    $article = articles_get( $link, $id );
    include( "../views/article_admin.php" );
}
elseif( $action == "delete" )
{
    $id = $_GET['id'];
    $article = articles_delete( $link, $id );
    header( "Location: index.php" );
}
else
{
    $articles = articles_all( $link );
    include( "../views/articles_admin.php" );
}
?>