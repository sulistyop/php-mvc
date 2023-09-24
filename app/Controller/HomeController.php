<?php

namespace Sulis\BelajarPhpMvc\Controller;

class HomeController extends BaseController
{
    public function index(): void
    {
        $this->view('index');
    }
    public function hello(): void
    {
        $this->view('hello');
    }
    public function world(): void
    {
        $this->view('world');
    }

    public function about(): void
    {
        $this->view('about');
    }
}