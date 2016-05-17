<?php

/**
 * Single Responsibility Principle Violation
 */

class PackageDeploymentManager
{
    public function makePackage() {...}

    public function getOrgs() {...}

    public function pushPackage() {...}
}
