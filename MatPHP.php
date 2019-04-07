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
	public function getData() {
		return $this->data;
	}
	public function isEqual(self $matrix): bool
	{
		return $this->getData() === $matrix->getData();
	}
	public function inverse() {

	}
	public function determinant() {

	}
	public function zeros(int $size_w,int $size_h=1) {
		$this->data=[];
		for($x=0;$x<$size_h;$x++){
			$row=[];
			for($y=0;$y<$size_w;$y++){
				$row[]=0;
			}
			$this->data[]=$row;
		}
	}
	public function ones(int $size_w,int $size_h=1) {
		$this->data=[];
		for($x=0;$x<$size_h;$x++){
			$row=[];
			for($y=0;$y<$size_w;$y++){
				$row[]=1;
			}
			$this->data[]=$row;
		}
	}
}
