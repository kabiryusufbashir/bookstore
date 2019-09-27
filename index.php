<?php
    $number = 123;
    var_dump($number);
    $number = 'abc';
    //var_dump($number);

    echo '<h1>Arrays</h1>';
    $books = [
        'Introduction to Computer Applications'=>[
            'author'=> 'Yusuf',
            'status'=> true,
            'cost'=> 3400
        ],
        'Web Development'=>[
            'author'=>'Kabir Yusuf Bashir',
            'status'=> false,
            'cost'=> null
        ]

        ];
    print_r($books);

    $books['Maths'] = ['author'=>'Jime', 'status'=>true,'cost'=>3500];

    echo '<h2>New book Added</h2>';
    print_r($books);

    echo '<h2>Unset an Array</h2>';

    unset($books['Web Development']);
    print_r($books);
    
    echo '<hr>';
    $people = [];
    var_dump(isset($people[90]));

?>