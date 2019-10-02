<?php
    namespace Bookstore\Domain;

    class Book{
        
        private $isbn;
        private $title;
        private $author;
        private $page;
        private $available;

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

        public function getIsbn() : int{
            return $this->isbn;
        }

        public function getTitle() : string{
            return $this->title;
        }

        public function getAuthor() : string{
            return $this->author;
        }

        public function getPage() : int{
            return $this->page;
        }

        public function isAvailable() : bool{
            return $this->available;
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

        public function addCopy(){
            $this->available++;
        }
    }

    /* $book = new Book("7867666565556", "Introduction to Computer Application", "Kabir Yusuf Bashir", "200",  12);
  
    if($book->getCopy()){
        echo 'Here is your Copy of <b>'.$book->title.'</b> Sir <b>' .$book->available .' </b> Copies Left';
    }else{
        echo 'Please Call again Sir, We don\'t have a Copy Now ' .$book->available;
    } */
?>