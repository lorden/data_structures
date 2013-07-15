<?php

class Node {
    public $value = null;
    public $next = null;

    public function __construct($value){
        $this->value = $value;
    }
}

class LinkedList {
    public $root = null;

    public function add_last($node){
        if(is_null($this->root)){
            $this->root = $node;
        } else {
            $parent = $this->root;
            while(!is_null($parent->next)){
                $parent = $parent->next;
            }
            $parent->next = $node;
        }
    }

    public function __toString(){
        if(is_null($this->root)) {
            return "Empty list\n";
        } else {
            $output = $this->root->value;
            $node = $this->root->next;
            while(!is_null($node)){
                $output .= ' -> ' . $node->value;
                $node = $node->next;
            }
            return $output;
        }
    }
}

/* Test
$n = new Node(1);
$ll = new LinkedList();
$ll->add_last($n);
$n = new Node(2);
$ll->add_last($n);
$n = new Node(4);
$ll->add_last($n);
$n = new Node(3);
$ll->add_last($n);
echo $ll;
*/
