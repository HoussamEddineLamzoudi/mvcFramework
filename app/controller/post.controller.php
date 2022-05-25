<?php

class post extends controller
{
    public function __construct()
    {
        $this->postModel = $this->model('posts');
    }
    public function index()
    {
    }

}
