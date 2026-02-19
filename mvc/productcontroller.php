<?php

//The controller decides what to featch and which 
require 'model.php';
class ProductController{
    private $model;
     public function __construct(){
        $this->model=new productModel();

     }
     //action is display all product 
     public function ListProducts(){
        //1. feact data from the model 
        $product=$this->model->getAllProduct();
        //3 pass the data in the view
        require 'view.php';

     }
}
// simulate a request to list product 
$controller=new ProductController();
$controller->ListProducts();
?>