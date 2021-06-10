<?php
use PHPUnit\Framework\TestCase;
final class pop_pushTest extends TestCase
{
    protected $name;
    protected function setUp():void
    {
        $this->name = [];
    }
    public function testEmpty()
    {
        $this->assertTrue(empty($this->name));
    }
    public function testPush()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', $this->name[count($this->name)-1]);
        $this->assertFalse(empty($this->name));
    }
    public function testPop()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', array_pop($this->stack));
        $this->assertTrue(empty($this->stack));
    }
}
?>