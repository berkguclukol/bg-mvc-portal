<?php

class home extends Controller
{
    public function index()
    {
        $this->render("layout/header");
        $this->render("home");
        $this->render("layout/footer");
    }
}