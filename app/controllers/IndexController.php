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
        var_dump(Test::ins()->select());
        var_dump(Sun::$app->getRoute()->controller());
        var_dump(Sun::$app->getRoute()->action());
        $this->fetch('', ['t' => '123']);
    }
}