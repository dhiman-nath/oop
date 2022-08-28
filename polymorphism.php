<?php

interface need_code{
	public function calArea();
}

class Circle implements need_code{
	private $radius;

	public function  __construct($radius_val){
	$this->radius = $radius_val;
	}

	public function calArea(){
	return pi()*$this->radius**2;

	}

}


class Rectangle implements need_code{
	private $height;
	private $width;
	public function __construct($height_val,$width_val){
		$this->height = $height_val;
		$this->width = $width_val;
	}

	public function calArea(){
		return $this->height * $this->width;
	}
}

$circle = new Circle(10);
echo "Radius of circle : ".$circle->calArea() ."<br/>";
$rectangle = new Rectangle(30,20);

echo "Area of Rectangle : " .$rectangle->calArea();

?>