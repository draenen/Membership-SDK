<?php
/**
 * @file
 * Contains MembershipSDK/MembershipInterface
 */

declare(strict_types = 1);

namespace MembershipSDK;

interface MembershipInterface {
  /**
   * Return the unique member identifier.
   */
  public function getMemberId(): string;
}
