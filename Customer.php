<?php
    class Customer{
        private $id;
        private $firstname;
        private $surname;
        private $email;
        private static $lastId;

        public function __construct(int $id, string $firstname, string $surname,string $email){
            
            if($id == null){
                $this->id = ++self::$lastId;
            }else{
                $this->id = $id;
                if($id > self::$lastId){
                    self::$lastId = $id;
                }
            }

            $this->id = $id;
            $this->firstname = $firstname;
            $this->surname = $surname;
            $this->email = $email;
        } 

        public function getId() : int{
            return $this->id;
        }

        public function getFirstname() : string{
            return $this->firstname;
        }

        public function getSurname() : string{
            return $this->surname;
        }

        public function getEmail() : string{
            return $this->email;
        }
    }

    $cust1 = new Customer(1, "Yusuf", "Bashir", "kabiryusufbashir@gmail.com");
    $cust2 = new Customer(3, "Kabir", "Bashir", "kabirbashir@gmail.com");
    $cust3 = new Customer(6, "Hassan", "Bashir", "hassanbashir@gmail.com");

    var_dump($cust1);

?>