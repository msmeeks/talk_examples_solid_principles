<?php

/**
 * Dependency Iversion Principle Violation
 */

// Management Layer
class MembershipManager
{
	private $members;

	public function __constructor__(MemberList $members) {
		$this->members = $members;
	}

	public function addMember($member) {
		$this->members->append($member);
	}
}

// Storage Layer
class MemberList
{
	public function append($member) { echo "add $member"; }
}
