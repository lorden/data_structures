<?php

class Stack {
    private $items = array();

    public function pop() {
        // return array_pop($this->items);
        $length = count($this->items);
        $popped = $this->items[$length - 1];
        $this->items = array_slice($this->items, 0, $length - 1);
        return $popped;
    }

    public function push($value) {
        // array_push($this->items, $value);
        $this->items[] = $value;
    }

    public function __toString() {
        $output = "TOP\n";
        for($i = count($this->items) - 1; $i >= 0; $i--){
            $output .= "{$this->items[$i]}\n";
        }
        $output .= "BOTTOM\n";
        return $output;
    }

    public function peek() {
        return $this->items[count($this->items) - 1];
    }
}

/* Test
$s = new Stack();
$s->push(1);
$s->push(2);
echo 'Peek ', $s->peek(), "\n";
$s->push(3);
$s->push(4);
echo 'Popped ', $s->pop(), "\n";
$s->push(5);
echo 'Popped ', $s->pop(), "\n";
echo 'Peek ', $s->peek(), "\n";
echo 'Popped ', $s->pop(), "\n";
$s->push(6);
echo 'Peek ', $s->peek(), "\n";
echo $s;
*/
