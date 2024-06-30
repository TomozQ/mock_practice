<?php
use \PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__) . "/../sample.php");

class TestSample extends TestCase
{
	public function testReturnHelloWorld()
	{
		$sample = new Sample();
		$result = $sample->helloWorld();

		$this->assertEquals("hello world.", $result);
	}
}