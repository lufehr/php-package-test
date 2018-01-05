<?php

namespace Fireup\Test;

use function fireup\get_test_string;

class StringTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @test
   */
  public function it_returns_a_test_string()
  {
    $this->assertEquals(
      'This is a test.',
      get_test_string()
    );
  }
}