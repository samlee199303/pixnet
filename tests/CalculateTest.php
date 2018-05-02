<?php
namespace Pixnet\Tests;

use PHPUnit\Framework\TestCase;
use Pixnet\Ups;
use Pixnet\BlackCat;
use Pixnet\Sf;
use Pixnet\Hct;
use Pixnet\Post;
use Pixnet\Calculate;

class CalculateTest extends TestCase
{
    public function testUps()
    {
        $ups = new Ups();
        $calculate = new Calculate();
        
        $upsAmericafee = $calculate->calculateFee($ups, 5,'America');
        $this->assertEquals($upsAmericafee, 300);
    }

    public function testSf()
    {
        $sf = new Sf();
        $calculate = new Calculate();

        $sfChinafee = $calculate->calculateFee($sf, 5,'China');
        $this->assertEquals($sfChinafee, 300);
    }

    public function testBlackCat()
    {
        $blackCat = new BlackCat();
        $calculate = new Calculate();

        $blackCatChinafee = $calculate->calculateFee($blackCat, 5,'China');
        $this->assertEquals($blackCatChinafee, 300);

        $blackCatTaiwanfee = $calculate->calculateFee($blackCat, 5,'Taiwan');
        $this->assertEquals($blackCatTaiwanfee, 150);
    }

    public function testHct()
    {
        $hct = new Hct();
        $calculate = new Calculate();

        $hctTaiwanfee = $calculate->calculateFee($hct, 5,'Taiwan');
        $this->assertEquals($hctTaiwanfee, 155);
    }

    public function testPost()
    {
        $post = new Post();
        $calculate = new Calculate();

        $postTaiwanfee = $calculate->calculateFee($post, 5,'Taiwan');
        $this->assertEquals($postTaiwanfee, 160);
    }
}