<?php

/**
 * Interface Segregation Principle Violation
 * Adapted from http://www.oodesign.com/interface-segregation-principle.html
 */

interface Worker {
    public function work();
    public function eat();
}

class Employee implements Worker{
    public function work() {...}
    public function eat() {...}
}

class Robot implements Worker{
    public function work() {...}
    public function eat() { return; }
}

class Manager {
    /**
     * @param Worker[] $workers
     */
    public function manage($workers) {
        foreach ($workers as $worker) {
            $worker.work();
        }
    }
}

class Caterer {
    /**
     * @param Worker[] $workers
     */
    public function feed($workers) {
        foreach ($workers as $worker) {
            $worker.eat();
        }
    }
}
