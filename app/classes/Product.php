<?php
namespace App\classes;
class Product
{
    protected $products=[];
public function getAllProduct(){
    return[
        0=>[
            'id'=> 1,
            'name' => 'T-shirt',
            'Brand' => 'Yellow',
            'price' => '1000',
            'description' => 'Excellent T Shirt',
            'image' => 'p1.jpg',
        ],
        1=>[
            'id'=> 2,
            'name' => 'Mobile',
            'Brand' => 'Realme',
            'price' => '10000',
            'description' => 'Excellent Mobile Phone',
            'image' => 'p2.jpg',
        ],
        3=>[
            'id'=> 3,
            'name' => 'Smart Watch',
            'Brand' => 'Huawei',
            'price' => '1000',
            'description' => 'Excellent T Shirt',
            'image' => 'p3.jpg',
        ],
        0=>[
            'id'=> 1,
            'name' => 'T-shirt',
            'Brand' => 'Yellow',
            'price' => '1000',
            'description' => 'Excellent T Shirt',
            'image' => 'p1.jpg',
        ],
        1=>[
            'id'=> 2,
            'name' => 'Mobile',
            'Brand' => 'Realme',
            'price' => '10000',
            'description' => 'Excellent Mobile Phone',
            'image' => 'p2.jpg',
        ],
        3=>[
            'id'=> 3,
            'name' => 'Smart Watch',
            'Brand' => 'Huawei',
            'price' => '1000',
            'description' => 'Excellent T Shirt',
            'image' => 'p3.jpg',
        ],
    ];
}
public function getAllProductByID($id){
    $this->products = $this->getAllProduct();
    foreach($this->products as $data){
        if($data['id'] == $id ){
            return $data;
        }
    }
}
}