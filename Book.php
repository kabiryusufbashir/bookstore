<?php
    class Book{
        
        public $isbn;
        public $title;
        public $author;
        public $page;
        public $available;

        public function __construct(
            int $isbn, 
            string $title, 
            string $author, 
            int $page, 
            int $available=0){
                $this->isbn = $isbn;
                $this->title = $title;
                $this->author = $author;
                $this->page = $page;
                $this->available = $available;
        }
        

        public function getPrintableTitle() : string{
            $result = '<i>' . $this->title .'</i> - ' . $this->author;
                if(!$this->available){
                    $result .= '<b>Not Available</b>';
                }
                return $result;
        }

        public function getCopy() : bool{
            if($this->available < 1){
                return false;
            }else{
                return $this->available--;
                return true;
            }
        }
    }

    /* $book = new Book("7867666565556", "Introduction to Computer Application", "Kabir Yusuf Bashir", "200",  12);
  
    if($book->getCopy()){
        echo 'Here is your Copy of <b>'.$book->title.'</b> Sir <b>' .$book->available .' </b> Copies Left';
    }else{
        echo 'Please Call again Sir, We don\'t have a Copy Now ' .$book->available;
    } */
?>