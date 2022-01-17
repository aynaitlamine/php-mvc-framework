<?php


class Pages extends Controller
{

    protected $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function Index()
    {
        return $this->view("index");
    }
}
