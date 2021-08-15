<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class CoreFilter
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Builder
     */
    protected $builder;

    /**
     * @var string
     */
    protected $delimiter = ',';

    /**
     * CoreFilter constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return array|null|string
     */
    public function filters()
    {
        return $this->request->query();
    }

    /**
     * @param Builder $builder
     * @return Builder
     */
    public function apply(Builder $builder)
    {
        $this->builder = $builder;
        foreach ($this->filters() as $filter => $params) {
            if (method_exists($this, $filter)) {

                if (is_array($params)) {
                    foreach ($params as $id => $value) {
                        call_user_func_array([$this, $filter], array_filter([$id, $value]));
                    }
                } else {
                    call_user_func_array([$this, $filter], array_filter([$params]));
                }
            }
        }

        return $this->builder;
    }

    /**
     * Преобразовываем несколько параметров атрибута в массив
     *
     * @param $param
     * @return array
     */
    protected function paramToArray($param)
    {
        return explode($this->delimiter, $param);
    }
}