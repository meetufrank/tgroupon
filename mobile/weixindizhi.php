<?php

/*
    方倍工作室 http://www.fangbei.org/
    CopyRight 2014 All Rights Reserved
*/


define('APPID',         $config['appidphonecs']);
define('APPSECRET',     $config['appSecretphonecs']);


class class_weixin
{
    var $appid = APPID;
    var $appsecret = APPSECRET;




    //构造函数，获取Access Token
    public function __construct($appid = NULL, $appsecret = NULL)
    {
        if($appid && $appsecret){
            $this->appid = $appid;
            $this->appsecret = $appsecret;
        }
    }

    //生成OAuth2的URL
    public function oauth2_authorize($redirect_url, $scope, $state = NULL)
    {
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$this->appid."&redirect_uri=".$redirect_url."&response_type=code&scope=".$scope."&state=".$state."#wechat_redirect";
        return $url;
    }

    //生成OAuth2的Access Token
    public function oauth2_access_token($code)
    {
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$this->appid."&secret=".$this->appsecret."&code=".$code."&grant_type=authorization_code";
        $res = $this->http_request($url);
        return json_decode($res, true);
    }

    //生成随机字符串
    function create_noncestr($length = 16)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++ ){
            $str.= substr($chars, mt_rand(0, strlen($chars)-1), 1);
        }
        return $str;
    }

    //生成签名
    function get_biz_sign($bizObj)
    {
        //参数小写
        foreach ($bizObj as $k => $v){
            $bizParameters[strtolower($k)] = $v;
        }
        //字典序排序
        ksort($bizParameters);
        //URL键值对拼成字符串
        $buff = "";
        foreach ($bizParameters as $k => $v){
            $buff .= $k."=".$v."&";
        }
        //去掉最后一个多余的&
        $buff2 = substr($buff, 0, strlen($buff) - 1);
        //sha1签名
        return sha1($buff2);
    }

    //HTTP请求（支持HTTP/HTTPS，支持GET/POST）
    protected function http_request($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

}



?>