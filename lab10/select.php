<html>
    <body>
        <?php 
            if(isset($_GET['language'])){
                setcookie('lang', $_GET['language'], time()+10);
            }
        ?>
        <a href="./main.php">back to main</a>
    </body>
</html>
