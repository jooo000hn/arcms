<?php
/**
 * 前端基于layuicms2.0 ，后端基于arphp 5.1.14
 *
 * @author assnr assnr@coopcoder.com
 *
 * 本项目仅供学习交流使用，如果用于商业请联系授权
 */
namespace arcms\ctl\main;
use \ar\core\Controller as Controller;

/**
 * 控制器
 */
class Doc extends Controller
{
    public function addressDoc()
    {
        $this->display('/doc/addressDoc');
    }

    public function bodyTabDoc()
    {
        $this->display('/doc/bodyTabDoc');
    }

    public function navDoc()
    {
        $this->display('/doc/navDoc');
    }
}
