<?php

/**
 * Single Responsibility Principle Resolution
 */

class PackageManager
{
    public function makePackage() {...}
}

class OrgListManager
{
    public function getOrgs() {...}
}

class DeploymentManager
{
    public function pushPackage() {...}
}

