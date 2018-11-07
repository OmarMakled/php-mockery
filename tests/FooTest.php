<?php


use PHPUnit\Framework\TestCase;
use Mockery as m;

class FooTest extends TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testSet()
    {
        $m = m::mock(Foo::class)->makePartial();
        $m->shouldReceive('query')
            ->once()
            ->andReturn([1]);
        $this->assertEquals(1, $m->count());
    }
}
