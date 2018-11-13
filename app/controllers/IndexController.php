<?php
/**
 * Created by PhpStorm.
 * User: ruixinglong
 * Date: 2018/1/17
 * Time: 下午12:21
 */

namespace app\controllers;

use Rxlisbest\Sun\Web\Component\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->fetch('', ['name' => 'sun-framework']);
    }
}