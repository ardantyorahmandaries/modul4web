<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormater;

class ProductController extends Controller
{
    use ResponseFormater;
    public function __construct()
    {
        $this->controllerName = "Get all product";

        $this->controllerMethod = "GET";
    }

    public function getAllProduct()
    {
        $dummydata = [
            "Air Mineral",
            "Kebab",
            "amsm",
            "wdwd",
        ];
    }
}