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
        if (isset($_COOKIE['username'])) {
            echo "You are " . $_COOKIE['username']; } 
        else { 
            echo "You are not authenticated."; 
        } 
    ?>    
        </p> 
    <?php 
        if (isset($_GET['title']) && isset($_GET['author'])) 
        { 
    ?>    
        <p>The book you are looking for is</p>    
            <ul>        
                <li><b>Title</b>: 
                    <?php echo $_GET['title']; ?>
                </li>        
                <li><b>Author</b>: 
                    <?php echo $_GET['author']; ?>
                </li>    
            </ul> 
        <?php 
        }else { 
        ?>    
            <p>You are not looking for a book?</p>
        <?php 
        }
        $books = [        
                    [            
                        'title' => 'To Kill A Mockingbird', 
                        'author' => 'Harper Lee',    
                        'available' => true,           
                        'pages' => 336,            
                        'isbn' => 9780061120084        
                    ],        
                    [            
                        'title' => '1984',   
                        'author' => 'George Orwell',      
                        'available' => true,    
                        'pages' => 267,     
                        'isbn' => 9780547249643        
                    ],        
                    [            
                        'title' => 'One Hundred Years Of Solitude',     
                        'author' => 'Gabriel Garcia Marquez',      
                        'available' => false,           
                        'pages' => 457,          
                        'isbn' => 9785267006323        
                    ],    
                ];
           echo  '<ul>'; 
                    
                    foreach ($books as $book): 
                    
                    echo '       
                        <li>            
                            <i>
                                '.$book['title'].'
                            </i> 
                                '.$book['author'];
                                 
                                if (!$book['available']):           
                                    echo '<b>Not available</b>'; 
                                endif;        
                                    echo '</li>'; 
                        endforeach;
            echo   '</ul>';
        ?>    
                
    </body> 
</html>
    