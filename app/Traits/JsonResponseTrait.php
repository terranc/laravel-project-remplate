<?php

namespace App\Traits;


/**
 * Class JsonResponseTrait
 *
 * @package App\Traits
 */
trait JsonResponseTrait {

    private $redirect_url;

    protected $DB_ERROR = -501;
    protected $AUTH_ERROR = -401;
    protected $PERMISSION_ERROR = -403;
    protected $NO_FOUND_ERROR = -404;
    protected $SYS_ERROR = -500;

    /**
     * @param int    $code
     * @param string $message
     * @param null   $data
     *
     * @return array
     */
    protected function apiArray($code = 200, $message = '', $data = null) {
        if (is_array($code)) {
            $res = [
                'code' => $code['code'],
                'message' => $code['message'],
                'data' => $code['data'],
            ];
        } else {
            $res = [
                'code' => $code,
                'message' => $message,
                'data' => $data,
            ];
        }
        return $res;
    }


    /**
     * @param int    $code
     * @param string $message
     * @param null   $data
     *
     * @return \Illuminate\Http\JsonResponse
     * 返回值规范说明:
     * 1、成功正数（多种成功情况，不同的正数数字标示,原则上是不样的message对应不同的code）
     * 2、报错、失败、异常负数（返回数据集，但数据集为[]或null，不属于报错、失败、异常，所以视为成功，仅仅暂无数据而已）
     * 3、404、403、500等http status code可以均直接加上`-`号(如:-404),作为错误code,方便大家一目了然
     */
    protected function apiResponse($code = 200, $message = '', $data = null) {
        $res = $this->apiArray($code, $message, $data);
        if ($this->redirect_url) {
            $res['redirect_url'] = $this->redirect_url;
        }
        return \Response::json($res)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

    protected function success($message = '', $data = null) {
        return $this->apiResponse(200, $message ?: 'Success', $data);
    }

    protected function error($message = 'Error', $data = null, $code = -1) {
        return $this->apiResponse($code, $message, $data);
    }

    protected function noFound($message = '', $data = null) {
        return $this->error('没有找到对象' . ($message ? (':' . $message) : ''), $data, $this->NO_FOUND_ERROR);
    }

    protected function unauthorized() {
        return $this->error('验证失败，请先登录', null, $this->AUTH_ERROR);
    }

    protected function forbidden() {
        return $this->error('权限不足', null, $this->PERMISSION_ERROR);
    }

    protected function dbError($data = null) {
        return $this->error('数据库错误', $data, $this->DB_ERROR);
    }

    protected function sysError() {
        return $this->error('系统错误', null, $this->SYS_ERROR);
    }

    /**
     * 设置 data.url 的值
     *
     * @param       $url
     * @param array $param
     *
     * @return $this
     */
    protected function redirectUrl($url, $param = []) {
        $this->redirect_url = url($url, $param);
        return $this;
    }
}
