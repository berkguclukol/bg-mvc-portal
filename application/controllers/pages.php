<?php

class pages extends Controller
{
    public function customers()
    {
        $this->render("layout/header");
        $this->render("customers/view");
        $this->render("layout/footer");
        $this->render("customers/script");
    }
    public function employees()
    {
        $this->render("layout/header");
        $this->render("employees/view");
        $this->render("layout/footer");
        $this->render("employees/script");
    }

}