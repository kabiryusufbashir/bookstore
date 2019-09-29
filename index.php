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
            
            echo '<table>';
            echo 
            '<tr>
                <th>Title</th>
                <th>Author</th>
                <th>Available</th>
                <th>Pages</th>
                <th>Isbn</th>
            </tr>';
            $booksJson = file_get_contents('./book.json'); 
            $books = json_decode($booksJson, true); 
        
            foreach($books as $book){
                echo '<tr>';
                echo '<td>'.$book['title'].'</td>';
                echo '<td>'.$book['author'].'</td>';
                echo '<td>'.$book['available'].'</td>';
                echo '<td>'.$book['pages'].'</td>';
                echo '<td>'.$book['isbn'].'</td>';
                echo '</tr><br>';
            }
            echo '</table>';
            if (isset($_GET['title'])){ 
                echo '
                <p>Looking for <b>' . $_GET['title'] . '</b>
                </p>'; 
                if (bookingBook($books, $_GET['title'])) { 
                    echo 'Booked!';
                    updateBook($books);    
                } else {        
                    echo 'The book is not available...';    
                }
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
    