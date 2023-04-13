<?php
class controller
{
    public function __construct() {
    }
    public function render($file,$data = [])
    {
        return view::render($file,$data);
    }
}