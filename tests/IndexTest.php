<?php
/**
 * Created by PhpStorm.
 * User: ruixinglong
 * Date: 2018/10/8
 * Time: 10:53 AM
 */
namespace Tests;

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(
            \app\models\Test::class,
            \app\models\Test::ins()
        );
    }

    public function testSelect()
    {
        $this->assertEquals(
            '1',
            '1'
        );
    }
}