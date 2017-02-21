<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Comment_model extends CI_Model
{
    public function get_by_blog($blog_id){
        $this -> db -> order_by('post_data','desc');
        return $this ->db -> get_where('t_comment',array(
            'blog_id'=>$blog_id
        )) ->result();
    }

    public function save($username,$email,$phone,$message,$blog_id){



        $this -> db -> insert('t_comment',array(
            'username' => $username,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'blog_id' => $blog_id,
            'post_data'=>date("Y/m/d h:i:s",time())
        ));
        return $this ->db ->affected_rows();//返回前影响的行数
    }
}