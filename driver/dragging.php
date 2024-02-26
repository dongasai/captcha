<?php
/**
 * Created by PhpStorm.
 * User: Dongasai
 * Date: 2017/10/24
 * Time: 17:40
 */

namespace Captcha\driver;


class dragging implements \Captcha\driver
{

    /**
     * img constructor.
     * 初始化
     * @param array $config
     */
    public function __construct($config = [])
    {
        if ($config) {
            foreach ($config as $k=>$v){
                $this->$k=$v;
            }
        }
    }

    /**
     * 验证是否正确
     * @param $code 储存的内容
     * @param $value 提交的内容
     */
    public function check($code ,$value)
    {

    }
    /**
     * 获取验证码
     */
    function getCaptcha($code)
    {
        //创建图片
        $this->createImg();
        //设置干扰元素
        $this->setDisturb();
        //设置验证码
        $this->setCaptcha($code);
        //返回图片对象
        return $this->show();
    }
}