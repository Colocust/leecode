<?php

class MinStack {
    private $stack;
    private $minStack;

    /**
     * initialize your data structure here.
     */
    function __construct() {
        $this->stack = new SplStack();
        $this->minStack = new SplStack();
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stack->push($x);
        if ($this->minStack->isEmpty() || $this->minStack->top() >= $x) {
            $this->minStack->push($x);
        }
        return null;
    }

    /**
     * @return NULL
     */
    function pop() {
        if ($this->stack->isEmpty()) {
            return null;
        }
        $pop = $this->stack->pop();
        if ($pop == $this->minStack->top()) {
            $this->minStack->pop();
        }
        return null;
    }

    /**
     * @return Integer
     */
    function top() {
        if ($this->stack->isEmpty()) {
            return null;
        }
        return $this->stack->top();
    }

    /**
     * @return Integer
     */
    function getMin() {
        if ($this->minStack->isEmpty()) {
            return null;
        }
        return $this->minStack->top();
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */