<?php

class post extends controller
{
    public function __construct()
    {
        $this->postModel = $this->model('posts');
    }
    public function index()
    {
        // echo "uuu_post";
    }

    public function edit($id)
    {

        $this->postModel->edit($id);
    }
}
