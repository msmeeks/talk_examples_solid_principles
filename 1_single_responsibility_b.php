<?php

/**
 * Single Responsibility Principle Resolution
 */

class PackageManager
{
    public function makePackage() {...}

    public function getPackage() {...}
}

class OrgListManager
{
    public function getOrgs() {...}
}

class DeploymentManager
{
    public function pushPackage() {...}
}

