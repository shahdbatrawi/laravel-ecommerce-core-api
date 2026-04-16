<?php
namespace App\Repositories;
use App\Models\Product;

class ProductRepository {
    public function getActiveProducts() {
        return Product::where('status', 'active')->paginate(10);
    }
}
