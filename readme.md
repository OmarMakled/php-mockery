## Mockery

`Foo.php`

    <?php 

    class Foo{

        public function query()
        {
            return [1,2,3];
        }

        public function count()
        {
            return count($this->query());
        }
    }

`FooTest.php`

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
