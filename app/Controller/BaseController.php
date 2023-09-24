<?php

namespace Sulis\BelajarPhpMvc\Controller;

class BaseController
{
    protected function view($viewName) {
        include(__DIR__ . '/../View/' . $viewName . '.php');
    }
}