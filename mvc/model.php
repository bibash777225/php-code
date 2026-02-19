<?php
class ProductionModel {
    private $product ;
     public function __ construct(){
        // For simplicity well use a hardcoded array instead of a real database 
        $this->products=[
            ['id'=>1 ,'name'=>"Apple",'price'=>0.5]
            ['id'=>2 ,'name'=>"mango",'price'=>0.3]
            ['id'=>3 ,'name'=>"orange",'price'=>0.7]
        ];
     }


     //function to get  all product 
     public function getAllProducts(){
        return $this->product;
     }
}
?>