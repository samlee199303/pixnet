<?php
namespace Pixnet\Tests;

use PHPUnit\Framework\TestCase;

use Pixnet\Maze;

class MazeTest extends TestCase
{
    /**
     * @test
     * @dataProvider getBestPathTestProvider
     * @param string $map
     * @param int    $expectedResult
     */
    public function getBestPathTest($map, $expectedResult)
    {
        $maze = new Maze();
        
        $result = $maze->getBestPath($map);
        
        $this->assertEquals($expectedResult, $result);
    }

    public function getBestPathTestProvider()
    {
        return [
            ['10101011
01010100
00S10101
01010001
0100101E
11010110', 8]
        ];
    }
}
