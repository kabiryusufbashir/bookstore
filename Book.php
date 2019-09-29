<?php
    class Book{
        public $isbn;
        public $title;
        public $author;
        public $page;
        public $available;

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

    $book = new Book();
    $book->isbn = "7867666565556";
    $book->title = "Introduction to Computer Application";
    $book->author = "Kabir Yusuf Bashir";
    $book->pages = "200";
    $book->available = true;

    if($book->getCopy()){
        echo 'Here is your Copy Sir';
    }else{
        echo 'Please Call again Sir, We don\'t have a Copy Now';
    }
?>