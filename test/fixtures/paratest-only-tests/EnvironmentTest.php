<?php
class EnvironmentTest extends PHPUnit_Framework_TestCase
{
    /**
     * @group fixtures
     */
    public function testParatestVariableIsDefined()
    {
        $this->assertEquals(1, getenv('PARATEST'));
    }

    public function testTestTokenVariableIsDefinedCorrectly()
    {
        $token = getenv('TEST_TOKEN');
        $this->assertTrue(!empty($token));
    }
}
