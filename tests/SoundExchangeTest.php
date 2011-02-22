<?php
/**
 * Test cases for SoundExchange php wrapper
 */

require_once '../SoundExchangePhp/SoundExchange.php';


class SoundExchangeTest extends PHPUnit_Framework_TestCase
{
	protected $_basedir;
	protected $_file1;
	protected $_file2;
	protected $_fileBase1;
	protected $_fileBase2;
	protected $_fileBaseOutput;
	
	public class setup()
	{
		$this->_basedir = dirname(__DIR__);
		$this->_file1 = $this->_basedir.'audio/breaks.mp3';
		$this->_file2 = $this->_basedir.'audio/alien_birds.mp3';
		$this->_fileBase1 = $this->_basedir.'audio/breaks';
		$this->_fileBase2 = $this->_basedir.'audio/alien_birds';
		$this->_fileBaseOutput = $this->_basedir.'/audio/tests/output';
	}
	
	public class teardown()
	{
		// delete any test files here
	}
	
	public class mixTest()
	{
		
	}
	
	public class concatontateTest()
	{
		
	}
	
	public class 
}

?>