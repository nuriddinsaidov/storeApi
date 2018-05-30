<?php

namespace App\Filters;

use App\Product;
use Illuminate\Database\Eloquent\Builder;

class ProductFilters extends Filters
{

    public function category($id){

        return $this->builder->where('category_id',$id);

    }

    public function user($id){

        return $this->builder->where('user_id',$id);

    }

    public function name($product){

        return $this->builder->where('name', $product);

    }

    public function tags($name){

        $productIds = Product::withAnyTags(explode(',', $name))->pluck('id');

        foreach ($productIds as $id){
            $ids[] = $id;
        }

        return $this->builder->WhereIn('id',$ids);

    }

}