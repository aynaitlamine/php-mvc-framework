<?php


class Pages extends Controller
{
    public function __construct()
    {
        //echo "Loaded";
    }

    public function Index($param)
    {
        echo $param;
        return $this->view("index");
    }
}
