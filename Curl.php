<?php
/**
 * Created by PhpStorm.
 * User: lumening
 * Date: 2016/9/5
 * Time: 20:04
 */

class Curl {
    /**
     * @param string $url 链接
     * @param array $options curl参数
     * @return mixed
     */
    protected function setUrl($url,$options=array()) {
        $ch = curl_init($url);//选定url
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//返回结果不自动输出
        foreach($options as $option=>$value) {
            curl_setopt($ch, $option, $value);
        }
        $contents = curl_exec($ch);
        curl_close($ch);
        return $contents;
    }

} 
