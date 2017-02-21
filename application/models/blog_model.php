<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    public function get_all()
    {
       //限制 $this ->db ->limit(3);
        $this ->db ->order_by('post_data','desc');//排序规则
       return $this->db->get('t_blog') -> result();
    }
    public function get_by_category($cate_id)
    {
        //限制 $this ->db ->limit(3);
        $this ->db ->order_by('post_data','desc');//排序规则
        return $this->db->get_where('t_blog',array(
            'cate_id' => $cate_id
        )) -> result();
    }
    public function get_by_id($blog_id){
        //return $this ->db -> get_where('t_blog',array('blog_id'=>$blog_id)) ->row();

        $this ->db -> select('blog.*,cate.cate_name');
        $this ->db -> from('t_blog blog');
        $this ->db -> join('t_blog_category cate','blog.cate_id=cate.cate_id');
        $this ->db ->where('blog.blog_id',$blog_id);
        //等于select blog.*,cate.cate_name from t_blog blog join t_blog_category cate on blog.cate_id = cate.cate_id where blog,blog_id = 4
        return $this ->db ->get()->row();
//       或者 $query = $this ->db ->query('select blog.*, cate.cate_name from t_blog blog join t_blog_category cate on blog.cate_id=cate.cate_id where blog,blog_id='.$blog_id);
//        return $query->row();
    }
    public function get_by_page($offset = 0){
       $this -> db -> order_by('post_data','desc');
        $this ->db -> limit(6,$offset);
        $rs = $this ->db->get('t_blog');
        return $rs ->result();
    }
}