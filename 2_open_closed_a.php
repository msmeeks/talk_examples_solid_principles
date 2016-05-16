<?php

/**
 * Open-Closed Principle Violation
 */

class FooMetric
{
    public function processFooMetric() { echo "foo metric"; }
}

class BarMetric
{
    public function processBarMetric() { echo "bar metric"; }
}

class MetricManager
{
    public function processMetrics($metrics) {
        foreach ($metrics as $metric) {
            if ($metric instanceof FooMetric) {
                $metric->processFooMetric();
            } else if ($metric instanceof BarMetric) {
                $metric->processBarMetric();
            }
        }
    }
}
