<?php 
class BlogPost {
    public $id;
    public $title;
    public $content;
    public $createdAt;
    public $createdAtInMilliseconds;

    function get_created_at_time_in_ms(){
        $stamp = strtotime($this->$createdAt);
        $time_in_ms = $stamp * 1000;

        return $time_in_ms;
    }

    function get_id(){
        return $this->id;
    }

    function get_title(){
        return $this->title;
    }

    function get_content(){
        return $this->content;
    }

    function get_created_at(){
        return $this->createdAt;
    }

    function set_id($id){
        $this->id = $id;
    }

    function set_title($title){
        $this->title = $title;
    }

    function set_content($content){
        $this->content = $content;
    }

    function set_created_at($createdAt){
        $stamp = strtotime($createdAt);
        $time_in_ms = $stamp * 1000;

        $this->createdAt = $createdAt;
        $this->createdAtInMilliseconds = $time_in_ms;
    }
}

?>