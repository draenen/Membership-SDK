<?php
/**
 * @file
 * Contains MembershipTest.
 */

declare(strict_types = 1);

use MembershipSDK\MembershipBase;
use PHPUnit\Framework\TestCase;

class TestMembership extends MembershipBase {
}

final class MembershipTest extends TestCase {
  public function testGetMemberId(): void {
    $membership = new testMembership();
    $this->assertEquals('0001', $membership->getMemberId());
  }
}
