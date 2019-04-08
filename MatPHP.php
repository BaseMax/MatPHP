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
	function __construct(array $matrix=[],bool $check=true) {
		// print_r($matrix);
		if($matrix !== [] && $check === true) {
			if(isset($matrix) && is_array($matrix[0])) {
				$size=count($matrix[0]);
				$type=gettype($matrix[0]); // 'array' or other...
				// $type=$this->getType($matrix[0]); // 'array' or other...
				// print $type."\n";
				foreach($matrix as $row) {
					if(gettype($row) !== $type) {
						print "Error: Different type!\n";
						return;
					}
					if(is_array($row)) {
						// print count($row)." != ".$size."\n";
						if(count($row) != $size) {
							print "Error: Different size!\n";
							return;
						}
					}
				}
			}
		}
		$this->data=$matrix;
	}
	public function setData(array $matrix=[],bool $check=true) {
		return $this->__construct($matrix,$check);
	}
	public function isEmpty(): bool {
		return empty($this->data) || is_null($this->data);
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
	// public function exponentiation(array $matrix) {}
	// public function modulus(array $matrix) {}
	public function division(array $matrix) {
		$result=[];
		return $result;
	}
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
	public function getSize() {
		$rows=count($this->data);
		$columns=0;
		// if($this->data === []) {
		if($this->data !== []) {
			if(is_array($this->data[0])) {
				$columns=count($this->data[0]);
			}
			else {
				$columns=1;
			}
		}
		return [$rows,$columns];
	}
	public function isEqual(self $matrix): bool
	{
		return $this->getData() === $matrix->getData();
	}
	public function inverse() {

	}
	public function determinant() {

	}
	public function resize(int $size_w=null,int $size_h=null) {
		// print_r($this->data);
		// print count($this->data)."\n";
		// for($x=$size_w;$x<=count($this->data);$x++) {
		// 	unset($this->data[$x]);
		// }
		for($x=0;$x<=count($this->data);$x++) {
			if($size_h !== null && $x < $size_w) {
				for($y=$size_h;$y<=count($this->data);$y++) {
					unset($this->data[$x][$y]);
				}
			}
			else if($size_w !== null) {
				unset($this->data[$x]);
			}
		}
	}
	public function zeros(int $size_w,int $size_h=1) {
		$this->data=[];
		$row=[];
		for($y=0;$y<$size_w;$y++){
			$row[]=0;
		}
		for($x=0;$x<$size_h;$x++){
			$this->data[]=$row;
		}
		// for($x=0;$x<$size_h;$x++){
		// 	$row=[];
		// 	for($y=0;$y<$size_w;$y++){
		// 		$row[]=0;
		// 	}
		// 	$this->data[]=$row;
		// }
	}
	public function ones(int $size_w,int $size_h=1) {
		$this->data=[];
		$row=[];
		for($y=0;$y<$size_w;$y++){
			$row[]=1;
		}
		for($x=0;$x<$size_h;$x++){
			$this->data[]=$row;
		}
		// for($x=0;$x<$size_h;$x++){
		// 	$row=[];
		// 	for($y=0;$y<$size_w;$y++){
		// 		$row[]=1;
		// 	}
		// 	$this->data[]=$row;
		// }
	}
}
// $mat=new MatPHP([1,2,3,4,5,6,7,8,9]);
// $mat=new MatPHP([1,2,3,4,5,6,7,8,9,[0,5,10]]);
// $mat=new MatPHP([[1,2,3],[4,5,6]]);
$mat=new MatPHP([]);
$mat->setData([1,2,3]);
print_r( $mat->getData() );
// print_r( $mat->getSize() );
$mat->resize(2,2);
// $mat->resize(1,2);
print_r( $mat->getData() );
// print_r( $mat->getSize() );
$mat=new MatPHP();
// print_r( $mat->getData() );
// $z=new MatPHP([]);
// $z->zeros(2);
// print_r( $z->getData() );
