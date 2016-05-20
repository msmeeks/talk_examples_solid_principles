<?php

/**
 * Dependency Iversion Principle Solution
 */

// Management Layer
class MembershipManager
{
    /**
     * @var MemberContainer $members
     */
    private $members;

    public function __construct($members) {
        $this->members = $members;
    }

    public function addMember($member) {
        $this->members->add($member);
    }
}

interface MemberContainer
{
    public function add($member);
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
