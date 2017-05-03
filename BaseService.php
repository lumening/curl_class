<?php
/**
 * Created by PhpStorm.
 * User: lumening
 * Date: 2016/9/5
 * Time: 20:33
 */
require_once "Curl.php";

class BaseService extends Curl {
    /**
     * @param string $request_url 链接
     * @param array $params 需要发送给服务器的文件或者参数
     * @param array $options curl参数
     * @return mixed
     */
    public function post($request_url, $params=array(), $options=array()) {
        $options[CURLOPT_POST] = true;
        $options[CURLOPT_POSTFIELDS] = $params;
        return $this->setUrl($request_url, $options);
    }
    public function delete($request_url, $params=array(), $options=array()) {
        $options[CURLOPT_POSTFIELDS] = $params;
        return $this->setUrl($request_url, $options);
    }
    public function get($request_url, $options=array()) {
        return $this->setUrl($request_url, $options);
    }
} 
