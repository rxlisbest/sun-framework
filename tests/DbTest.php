<?php
/**
 * Created by PhpStorm.
 * User: ruixinglong
 * Date: 2018/10/8
 * Time: 10:53 AM
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Rxlisbest\Sun\Sun;

class DbTest extends TestCase
{
    private $db_class = 'Rxlisbest\Sun\Web\Component\Db';
    private $mysql;
    private $db;
    private $dbname = 'sun_test';

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $database_config = Sun::$config['database'];
        $this->mysql = Sun::createObject($this->db_class, [$database_config]);

        $database_config['dsn'] .= "dbname={$this->dbname}";
        $this->db = Sun::createObject($this->db_class, [$database_config]);
    }

    /**
     * create database
     * @name: testCreateDatabase
     * @return void
     * @author: RuiXinglong <ruixl@soocedu.com>
     * @time: 2017-06-19 10:00:00
     */
    public function testCreateDatabase()
    {
        $result = $this->mysql->createDatabase('sun_test');
        $this->assertEquals(
            $result,
            true
        );
    }

    /**
     * create table
     * @name: testCreateTable
     * @return void
     * @author: RuiXinglong <ruixl@soocedu.com>
     * @time: 2017-06-19 10:00:00
     */
    public function testCreateTable()
    {
        $result = $this->db->create('sun_test');
        $this->assertEquals(
            $result,
            true
        );
    }

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