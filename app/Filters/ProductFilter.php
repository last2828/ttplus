<?php

namespace App\Filters;

class ProductFilter extends CoreFilter
{
    public function attributes($attributeId, $attributeValues)
    {
        return $this->builder->whereHas('attributes', function($query) use ($attributeId, $attributeValues) {
            $query->where('product_attribute_id', $attributeId)
                    ->whereIn('value', $this->paramToArray($attributeValues));
        });
    }
}