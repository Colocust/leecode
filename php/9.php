<?php

class CQueue {
    private $stack;
    private $popStack;

    /**
     */
    function __construct() {
        $this->stack = [];
        $this->popStack = [];
    }

    /**
     * @param Integer $value
     * @return NULL
     */
    function appendTail($value) {
        $this->stack[] = $value;
        return null;
    }

    /**
     * @return Integer
     */
    function deleteHead() {
        if (empty($this->popStack)) {
            while (!empty($this->stack)) {
                $this->popStack[] = array_pop($this->stack);
            }
        }
        if (empty($this->popStack)) {
            return -1;
        }
        return array_pop($this->popStack);
    }
}

/**
 * Your CQueue object will be instantiated and called as such:
 * $obj = CQueue();
 * $obj->appendTail($value);
 * $ret_2 = $obj->deleteHead();
 */