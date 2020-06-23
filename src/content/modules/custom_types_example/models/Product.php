<?php

class Product extends Page{
    public $type = "product";

    public function getIcon() : string{
        return "fas fa-shopping-cart";
    }
}

