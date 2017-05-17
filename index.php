<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Default route
    $f3->route('GET /', function($f3) {
        //echo "Hello!";
        
        $f3->set('username', 'keclat');
        $f3->set('password', sha1('drowssap'));
        $f3->set('title', 'Working with Templates');
        $f3->set('temp', 68);
        $f3->set('color', 'purple');
        $f3->set('radius', 10);
        
        $f3->set('bookmarks', array('https://serenesforest.net',
                                    'https://www.reddit.com/r/kancolle/new',
                                    'https://youtube.com'));
        
        $f3->set('addresses', array('primary' => '1000 Apple Ln. Seattle, WA 98030',
                                    'secondary' => '2510 100th Court Tacoma, WA 98030'));
        
        $f3->set('desserts', array('chocolate' => 'Chocolate Mousse',
                                   'vanilla' => 'Vanilla Custard',
                                   'strawberry' => 'Strawberry Shortcake'));
        
        $f3->set('preferredCustomer', true);
        $f3->set('lastLogin', strtotime('-1 week'));
        
        $firstPet = new Pet('Fido', 'pink');
        $f3->set('firstPet', $firstPet);
        
        $secondPet = new Pet('Henrietta', 'purple');
        $f3->set('secondPet', $secondPet);
        
        echo Template::instance()->render('pages/info.html');
    });

    //Run fat free
    $f3->run();
    