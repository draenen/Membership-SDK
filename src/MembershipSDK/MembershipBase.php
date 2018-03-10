<?php
/**
 * @file
 * Contains MembershipSDK/MembershipBase
 */

declare(strict_types = 1);

namespace MembershipSDK;

abstract class MembershipBase implements MembershipInterface {
  /**
   * @var string
   */
  protected $memberId;

  public function __construct() {
    // @todo: Generate a unique membership id.
    $this->memberId = '0001';
  }

  /**
   * {@inheritdoc}
   */
  public function getMemberId(): string {
    return $this->memberId;
  }
}
