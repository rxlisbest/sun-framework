<?php
/**
 * Created by PhpStorm.
 * User: ruixinglong
 * Date: 2018/1/17
 * Time: 下午12:21
 */
namespace app\controllers;

use Rxlisbest\Sun\Component\Controller;
use app\models\Test;
use Rxlisbest\Sun\Sun;

class IndexController extends Controller
{
    public function index()
    {
        $test = new Test();
        foreach ($test->get() as $row) {
            print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
        }
        $test->where(['a', '>', '1'], [['b', '>', '1'], ['c', '>', '1']], 'OR')->andWhere(['d', '>', '1']);
        var_dump($test->selectSql());
        var_dump(Sun::$app->getRoute()->controller());
        var_dump(Sun::$app->getRoute()->action());
        $this->fetch('', ['t' => '123']);
    }
}