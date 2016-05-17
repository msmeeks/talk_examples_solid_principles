<?php

/**
 * Open-Closed Principle Resolution
 */

interface Metric
{
    public function processMetric();
}

class FooMetric implements Metric
{
    public function processMetric() {...}
}

class BarMetric implements Metric
{
    public function processMetric() {...}
}

class MetricManager
{
    public function processMetrics($metrics) {
        foreach ($metrics as $metric) {
            $metric->processMetric();
        }
    }
}

