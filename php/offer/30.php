<?php

class MinStack
{
	private $min;
	private $s;

	/**
	 * initialize your data structure here.
	 */
	function __construct ()
	{
		$this->s = [];
		$this->min = [];
	}

	/**
	 * @param Integer $x
	 * @return NULL
	 */
	function push ($x)
	{
		if (empty($this->min) || end($this->min) >= $x) {
			$this->min[] = $x;
		}
		$this->s[] = $x;
		return null;
	}

	/**
	 * @return NULL
	 */
	function pop ()
	{
		$end = end($this->s);
		if (end($this->min) == $end) {
			array_pop($this->min);
		}
		array_pop($this->s);
		return null;
	}

	/**
	 * @return Integer
	 */
	function top ()
	{
		return end($this->s);
	}

	/**
	 * @return Integer
	 */
	function min ()
	{
		return end($this->min);
	}
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->min();
 */