<?php
namespace Pixnet;
/**
*
*/
class Maze
{
    /**
     * @param string $map
     * @return int
     */
    public function getBestPath($map)
    {
        $path = str_replace([PHP_EOL, ' '], '', $map);
        
        // 取出起點到終點
        preg_match('/S(0|1)*E/', $path, $startToEnd);
        // 取出空格      
        preg_match_all('/0+/', $startToEnd[0], $result);
        
        $bestPath = count($result[0]);

        return $bestPath;
    }
}
