<?php

class customers extends Controller
{
    public function index()
    {
        $this->render("common/header");
        $this->render("customers");
        $this->render("common/footer");
    }
}