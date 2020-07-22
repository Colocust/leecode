<?php

class CustomStack {
  private $stack;
  private $size;
  private $maxSize;

  /**
   * @param Integer $maxSize
   */
  function __construct($maxSize) {
    $this->maxSize = $maxSize;
    $this->stack = [];
    $this->size = 0;
  }

  /**
   * @param Integer $x
   * @return NULL
   */
  function push($x) {
    if ($this->size === $this->maxSize) {
      return null;
    }
    array_push($this->stack, $x);
    $this->size++;
    return null;
  }

  /**
   * @return Integer
   */
  function pop() {
    if ($this->size == 0) {
      return -1;
    }
    $this->size--;
    return array_pop($this->stack);
  }

  /**
   * @param Integer $k
   * @param Integer $val
   * @return NULL
   */
  function increment($k, $val) {
    if ($this->size == 0) {
      return null;
    }
    $size = min($this->size, $k);
    for ($i = 0; $i < $size; $i++) {
      $this->stack[$i] += $val;
    }
    return null;
  }
}

/**
 * Your CustomStack object will be instantiated and called as such:
 * $obj = CustomStack($maxSize);
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $obj->increment($k, $val);
 */