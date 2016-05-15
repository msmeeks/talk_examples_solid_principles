<?php

/**
 * Interface Segregation Principle Solution
 * Adapted from http://www.oodesign.com/interface-segregation-principle.html
 */

interface Worker
{
	public function work();
}

interface Eater {
	public function eat();
}

class Employee implements Worker, Eater {
	public function work() {...}
	public function eat() {...}
}

class Robot implements Worker {
	public function work() {...}
}

class Manager {
	/**
	 * @var Worker[] $workers
	 */
	private $workers;

	public function setWorkers($workers) {
		$this->workers = $workers;
	}

	public function manage() {
		foreach ($this->workers as $worker) {
			$worker.work();
		}
	}
}
