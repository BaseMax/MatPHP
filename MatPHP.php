<?php
/**
*
* @Name : MatPHP.php
* @Version : 1.0
* @Programmer : Max
* @Date : 2019-04-07
* @Released under : https://github.com/BaseMax/MatPHP/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/MatPHP
*
**/
class MatPHP {
	private $data=[];
	function __construct(array $matrix) {
		$this->data=$matrix;
	}
	public function size() {
		return count($this->data);
	}
	public function exponentiation(array $matrix) {}
	public function modulus(array $matrix) {}
	public function division(array $matrix) {}
	public function addition(array $matrix) {
		$result=[];
		return $result;
	}
	public function subtraction(array $matrix) {
		$result=[];
		return $result;
	}
	public function multiplication(array $matrix) {
		$result=[];
		return $result;
	}
}
