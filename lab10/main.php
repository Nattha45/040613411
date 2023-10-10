<html>
    <body>
        <?php 
            if (isset($_COOKIE['lang'])) {
                if ($_COOKIE['lang'] == 'en') {
                    echo "Welcome";
                } elseif ($_COOKIE['lang'] == 'th') {
                    echo "HI";
                } else {
                    echo "Unsupported language";
                }
            } else {
                echo "Language not set";
            }
        ?>
    </body>
</html>
