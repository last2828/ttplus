<?php

namespace App\Filters;

class ProductFilter extends CoreFilter
{
    /**
     * Фильтр по атрибутам продуктов
     *
     * @param $attributeId
     * @param $attributeValues
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function attributes($attributeId, $attributeValues)
    {
        $columns = [
            'id',
            'name',
            'slug'
        ];

        $result = $this->builder
                            ->select($columns)
                            ->whereHas('attributes', function($query) use ($attributeId, $attributeValues) {
                                $query
                                    ->where('product_attribute_id', $attributeId)
                                    ->whereIn('value', $this->paramToArray($attributeValues));
                            });

        return $result;
    }
}