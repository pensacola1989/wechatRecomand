<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: dd
 * Date: 13-10-21
 * Time: 下午2:41
 * wc_xx wecaht_xx
 */
class Wechat_model extends CI_Model {

    var $wcId = '';
    var $wcWid = '';
    var $wcDate = '';
    var $wcType = '';
    var $wcDes = '';
    var $imgUrl = '';
    var $like = '';
    var $isVerify = '';

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * @param type: module type
     * @param limit: how many to get
     */
    public function getWechat($type,$limit = 10)
    {
        switch($type)
        {
            case 'random':
                $this->db->select('*')
                        ->from('info')
                        ->order_by('rand()')
                        ->limit($limit);

                $query = $this->db->get();

                if($query->num_rows() > 0)
                {
                    return $query->result();
                }
                return null;

                break;
            case 'verify':

                break;
            case 'latest':

                break;
        }
    }

    /*
     * get wechat by category
     * @param $category : category
     * @param $limit: how many to be got
     */
    public function getWechatByCategory($category,$limit)
    {

    }
}