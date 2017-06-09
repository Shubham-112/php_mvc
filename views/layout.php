<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP MVC</title>
    </head>
    
    <body>
        <header>
            <a href='/php_mvc_blog'>PHP MVC BLOG</a>
            <a href='?controller=posts&action=index'>Posts</a>
        </header>
        
        <?php require_once('routes.php') ?>
        
        <footer>
            Dark_Shadow &copy; 2017
        </footer>
    </body>
</html>