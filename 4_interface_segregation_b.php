<?php

/**
 * Interface Segregation Principle Solution
 */

interface Worker
{
    public function work();
}

interface Eater
{
    public function eat();
}

class Employee implements Worker, Eater
{
    public function work() {...}
    public function eat() {...}
}

class Robot implements Worker
{
    public function work() {...}
}

class Manager
{
    /**
     * @param Worker[] $workers
     */
    public function manage($workers) {
        foreach ($workers as $worker) {
            $worker.work();
        }
    }
}

class Caterer
{
    /**
     * @param Eater[] $eaters
     */
    public function feed($eaters) {
        foreach ($eaters as $eater) {
            $eater.eat();
        }
    }
}
