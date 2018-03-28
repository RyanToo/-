<?php 
namespace accuracy;
final class {W:\domains\test\HomeWork 3.3\basket\basket.class.php} extends {
public function showAllProduct(){ 
        $resQuantityProduct = 0;     
        foreach($this->countProduct as $key => $value){
           echo 'Определенный товар  ' . $value->name . $value->type  .', количество: ' . $value->  numberProduct . '<br>';
            $resQuantityProduct = $resQuantityProduct + $value->numberProduct; 
        }
        echo 'Общее количество товаров: ' . $resQuantityProduct;
    }
}
 ?>