<?php
/**
 * Created by PhpStorm.
 * User: 15770
 * Date: 2018/2/6
 * Time: 9:50
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dingo\Api\Routing\Helpers;
use App\Helpers\Util as Util;
use App\Helpers\Err as Err;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class BaseController extends Controller
{
    use Helpers;
    protected $log_fmt = "%s@%.2f";
    protected $start;
    protected $end;
    protected $request = '';


    function __construct(){
        $req = Request::capture();
        $this->request = $req;
        $created_at = $this->request->only('created_at');
        $updated_at = $this->request->only('updated_at');
        if (isset($created_at)) $this->request->created_at = $this->request->only('created_at');
        if (isset($updated_at)) $this->request->updated_at = $this->request->only('updated_at');
        $exec_log_name = '/logs/exec-time-' . date('Y-m-d') . '.log';
        $this->logger = new Logger('logs');
        $this->logger->pushHandler(
            new StreamHandler(
                storage_path($exec_log_name),
                Logger::DEBUG
            )
        );
    }

    /**
    接口返回数据处理
     */
    public function all(){
        return array_replace_recursive($this->input(), $this->files->all());
    }
    protected function ApiResponse($data = '', $type = 'true', $count = 0, $msg = ''){
        $this->end = microtime(true);
        $ext = ($this->end - $this->start) * 1000;
        $log = vsprintf($this->log_fmt, [$_SERVER['REQUEST_URI'], $ext]);
        $this->logger->debug($log, $this->request->all());
        header('Content-Type: application/json');
        echo json_encode(['data' => $data, 'result' => $type, 'count' => $count, 'msg' => $msg]);
        exit;
    }

}