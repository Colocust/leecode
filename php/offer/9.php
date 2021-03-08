<?php

class CQueue
{

	private $push;
	private $pop;
	private $popLen;
	private $pushLen;

	/**
	 */
	function __construct ()
	{
		$this->pop = [];
		$this->push = [];
		$this->popLen = 0;
		$this->pushLen = 0;
	}

	/**
	 * @param Integer $value
	 * @return NULL
	 */
	function appendTail ($value)
	{
		$this->push[] = $value;
		$this->pushLen++;

		return null;
	}

	/**
	 * @return Integer
	 */
	function deleteHead ()
	{
		if ($this->popLen == 0 && $this->pushLen == 0) {
			return -1;
		}
		if ($this->popLen == 0) {
			while ($this->pushLen != 0) {
				$this->pop[] = array_pop($this->push);
				$this->popLen++;
				$this->pushLen--;
			}
		}
		$this->popLen--;
		return array_pop($this->pop);
	}
}

/**
 * Your CQueue object will be instantiated and called as such:
 * $obj = CQueue();
 * $obj->appendTail($value);
 * $ret_2 = $obj->deleteHead();
 */