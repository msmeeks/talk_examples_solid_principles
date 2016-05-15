<?php

/**
 * Single Responsibility Principle Violation
 */

class PackageDeploymentManager
{
	public function makePackage() {...}

	public function getFriendlyOrgs() {...}

	public function getGaOrg() {...}

	public function pushPackage() {...}
}
