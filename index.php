<?php
    $looking = isset($_GET['title']) || isset($_GET['author']); 
?>

<!DOCTYPE html> <html lang="en"> 
    <head>   
        <meta charset="UTF-8">
        <title>Bookstore</title> 
    </head> 

    <body>
    <?php
        include './functions.php';
    ?>    
    <p>
    <?php 
        echo loginMessage(); 
        $booksJson = file_get_contents('./book.json'); 
        $books = json_decode($booksJson, true); 
            if (isset($_GET['title'])){ 
                echo '<p>Looking for <b>' . $_GET['title'] . '</b></p>'; 
            } else {    
                echo '<p>You are not looking for a book?</p>'; 
            } 
    ?>
    </p>
    <?php
           echo 
           '<ul>';
                foreach ($books as $book):    
                    echo '
                        <li>        
                            <a href="?title='.$book['title'].'"> '
                                . printableTitle($book).'       
                            </a>    </li>';
                endforeach; 
            echo   '</ul>';
        ?>    
                
    </body> 
</html>
    