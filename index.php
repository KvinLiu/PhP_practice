<?php

// $animals = ['dog', 'cat'];

require 'functions.php';

// function dumper($one, $two, $three) {
//     var_dump($one, $two, $three);
// }

// // var_dump($animals);

// dumper('hello', 'big', 'world');

// dd($animals);

// Tod Application

// Todo, comment, user

class Task {
    protected $description;
    protected $completed = false;
    public function __construct($description)
    {
        $this->description = $description;
    }
    public function complete() 
    {
    	$this->completed = true;
    }
    public function isComplete()
    {
    	return $this->completed;
    }
    public function description()
    {
    	return $this->description;
    }
}	

$tasks = [
	new Task('Go to the store'),
	new Task('Finish my screencast'),
	new Task('Clean my room')
];

require 'index.view.php';