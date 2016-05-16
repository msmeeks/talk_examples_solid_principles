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
    public function getFriendlyOrgs() {...}

    public function getGaOrg() {...}
}

class DeploymentManager
{
    public function pushPackage() {...}
}

