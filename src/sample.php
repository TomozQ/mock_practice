<?php

class Sample {
	private function changeStr(string $str)
	{
		return $str . ". hello php.";
	}

	public function helloWorld()
	{
		$str = "hello world";
		return $this->changeStr($str);
	}
}
