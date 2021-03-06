<?php
namespace basket;
class basket{
    public $countProduct = [];
    public function addProduct($product){                                      
       $product->numberProduct = 1;  
        if(array_key_exists($product->name, $this->countProduct)){
            $this->countProduct[$product->name]->numberProduct++;
            echo 'Товар добавлен в корзину<br>';
        }
        else{
            $this->countProduct[$product->name] = $product;
        }
    }
    public function deleteAllProduct($product){
        echo $product->name . ' удалён';
        unset($this->countProduct[$product->name]);
    }
    public function deleteOneProduct($product){
        if(array_key_exists($product->name, $this->countProduct)){   
            if($this->countProduct[$product->name]->numberProduct > 0){
                 $this->countProduct[$product->name]->numberProduct--;
                 echo 'Товар ' . $this->countProduct[$product->name]->name. ' удалён из корзины<br>';
            } 
        }
    }
    public function sum(){   
        $res = 0;
        foreach($this->countProduct as $key => $value){
            $res = $res + ($value->price * $value->numberProduct);
        }
        return $res;
    }
}