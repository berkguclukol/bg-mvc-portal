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
    public function products()
    {
        $this->render("layout/header");
        $this->render("products/view");
        $this->render("layout/footer");
        $this->render("products/script");
    }
    public function shippers()
    {
        $this->render("layout/header");
        $this->render("shippers/view");
        $this->render("layout/footer");
        $this->render("shippers/script");
    }
    public function suppliers()
    {
        $this->render("layout/header");
        $this->render("suppliers/view");
        $this->render("layout/footer");
        $this->render("suppliers/script");
    }
    public function orders()
    {
        $this->render("layout/header");
        $this->render("orders/view");
        $this->render("layout/footer");
        $this->render("orders/script");
    }


}