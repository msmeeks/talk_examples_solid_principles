<?php

/**
 * Dependency Iversion Principle Solution
 */

// Management Layer
interface MemberContainer
{
	public function add($member);
}

class MembershipManager
{
	private $members;

	public function __construct(MemberContainer $members) {
		$this->members = $members;
	}

	public function addMember($member) {
		$this->members->add($member);
	}
}

// Storage Layer
class MemberQueue implements MemberContainer
{
	public function add($member) {
		echo "enqueue $member";
	}
}

class RemoteMemberList implements MemberContainer
{
	public function add($member) {
		echo "call webservice to add $member";
	}
}
