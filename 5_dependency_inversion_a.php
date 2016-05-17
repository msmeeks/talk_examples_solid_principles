<?php

/**
 * Dependency Iversion Principle Violation
 */

// Management Layer
class MembershipManager
{
	/** @var MemberList $members */
    private $members;

    public function __constructor__($members) {
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
