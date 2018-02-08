<?php
/**
 * Created by PhpStorm.
 * User: 15770
 * Date: 2018/2/6
 * Time: 9:45
 */

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;

class OneController extends BaseController
{
    use Helpers;
    public function index(){
        return 111;
    }
}