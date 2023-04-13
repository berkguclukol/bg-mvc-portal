<?php

class home extends Controller
{
    public function index()
    {
        $this->render("common/header");
        $this->render("home");
        $this->render("common/footer");
    }
}