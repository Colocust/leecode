<?php

class MyQueue {
    private $popStack;
    private $pushStack;

    /**
     * Initialize your data structure here.
     */
    function __construct() {
        $this->popStack = new SplStack();
        $this->pushStack = new SplStack();
    }

    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->pushStack->push($x);
        return null;
    }

    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop() {
        if ($this->empty()) {
            return null;
        }
        if ($this->popStack->isEmpty()) {
            while (!$this->pushStack->isEmpty()) {
                $this->popStack->push($this->pushStack->pop());
            }
        }
        return $this->popStack->pop();
    }

    /**
     * Get the front element.
     * @return Integer
     */
    function peek() {
        if ($this->empty()) {
            return null;
        }
        if ($this->popStack->isEmpty()) {
            while (!$this->pushStack->isEmpty()) {
                $this->popStack->push($this->pushStack->pop());
            }
        }
        return $this->popStack->top();
    }

    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty() {
        if ($this->popStack->isEmpty() && $this->pushStack->isEmpty()) {
            return true;
        }
        return false;
    }
}
/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */


