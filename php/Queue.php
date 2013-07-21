<?php

class Queue {
    private $items = array();

    public function dequeue() {
        foreach($this->items as $i => $item){
            $dequeued = $item;
            unset($this->items[$i]);
            break;
        }
        return $dequeued;
    }

    public function enqueue($value) {
        $this->items[] = $value;
    }

    public function __toString() {
        $output = array();
        foreach($this->items as $i => $item){
            $output[] = "{$this->items[$i]}";
        }
        $output = "FRONT [ " . implode(' | ', $this->items) . " ] BACK";
        return $output;
    }

    public function peek() {
        foreach($this->items as $i => $item){
            $peek = $item;
        }
        return $item;
    }
}

/* Test 
$q = new Queue();
$q->enqueue(1);
$q->enqueue(2);
echo 'Peek ', $q->peek(), "\n";
$q->enqueue(3);
$q->enqueue(4);
echo 'Popped ', $q->dequeue(), "\n";
$q->enqueue(5);
echo 'Popped ', $q->dequeue(), "\n";
echo 'Peek ', $q->peek(), "\n";
echo 'Popped ', $q->dequeue(), "\n";
$q->enqueue(6);
echo 'Peek ', $q->peek(), "\n";
echo $q;
*/
