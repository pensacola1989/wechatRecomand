<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dd
 * Date: 13-10-21
 * Time: 下午1:40
 * To change this template use File | Settings | File Templates.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Wechat_model','wechat');
    }

    public function index()
    {
        $data['data']['random'] = $this->wechat->getWechat('random',8);
        $data['header']['wechatCategory'] = $this->wechat->getWechatType();
//        var_dump($data['data']['wechatCategory']);
        //var_dump($data['data']['random'][0]->wechatname);
        $data['template'] = 'template/home';
        $this->load->view('main',$data);
    }


}