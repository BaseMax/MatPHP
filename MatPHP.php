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
	function __construct(array $matrix,bool $check=true) {
		// print_r($matrix);
		$size=count($matrix);
		if($matrix !== [] && $check === true) {
			$type=gettype($matrix[0]); // 'array' or other...
			// $type=$this->getType($matrix[0]); // 'array' or other...
			// print $type."\n";
			foreach($matrix as $row) {
				if(gettype($row) !== $type) {
					print "Error: Different type!\n";
					return;
				}
				if(is_array($row)) {
					if(count($row) != $size) {
						print "Error: Different size!\n";
						return;
					}
				}
			}
		}
		$this->data=$matrix;
	}
	public function getType($value)
	{
		if(is_null($value))
			return "NULL";
		if(is_float($value))
			return "float";
		if(is_int($value))
			return "integer";
		if(is_bool($value))
			return "boolean";
		if(is_array($value))
			return "array";
		if(is_string($value))
			return "string";
		if(is_numeric($value))
			return "numeric";
		if(is_object($value))
			return "object";
		if(is_resource($value))
			return "resource";
		return "unknown";
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
	public function setData(array $matrix) {
		$this->data=$matrix;
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
$mat=new MatPHP([1,2,3,4,5,6,7,8,9]);
// $mat=new MatPHP([1,2,3,4,5,6,7,8,9,[0,5,10]]);
print_r( $mat->getData() );

// $z=new MatPHP([]);
// $z->zeros(2);
// print_r( $z->getData() );
