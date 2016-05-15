<?php

/**
 * Liskov Substitution Principle Violation
 */

class Rectangle
{
	protected $width;
	protected $height;

	public function setHeight($v) { $this->height = $v; }

	public function getHeight() { return $this->height; }

	public function setWidth($v) { $this->width = $v; }

	public function getWidth() { return $this->width; }

	public function getArea() {
		return $this->height * $this->width;
	}
}

class Square extends Rectangle
{
	public function setHeight($v) {
		$this->width = $v;
		$this->height = $v;
	}

	public function setWidth($v) {
		$this->width = $v;
		$this->height = $v;
	}
}

class AreaChecker
{
	/**
	 * @param Rectangle $rectangle
	 */
	public function checkArea($rectangle) {
		$rectangle->setHeight(5);
		$rectangle->setWidth(4);
		$area = $rectangle->getArea();
		assertEqual($area, 20);
	}
}
	
