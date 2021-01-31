<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Breadcrumbs
 *
 * @package App\Models
 *
 * Breadcrumbs for custom rendering catalogs for dunkernmotoren and jianhai
 */
class Breadcrumbs extends Model
{
    /**
     * @param $route
     * @param $dunker
     * @param $jianghai
     * @param $categories
     * @return \Illuminate\Support\HtmlString
     * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\InvalidBreadcrumbException
     * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\UnnamedRouteException
     * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\ViewNotSetException
     */
    public static function renderBreadcrumbs($route, $dunker, $jianghai, $categories)
    {
        switch (true):
            case ($route == 'pages.catalog.dunkermotoren.index'):
                return \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog-brand', $dunker);
                break;
            case ($route == 'pages.catalog.dunkermotoren.category'):
                return \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog-brand-category', $dunker, $categories->first());
                break;
            case ($route == 'pages.catalog.dunkermotoren.group'):
                return \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog-brand-category-group', $dunker, $categories->first(), $categories->first()->groups->first());
                break;

        endswitch;

        switch (true):
            case ($route == 'pages.catalog.jianghai.index'):
                return \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog-brand', $jianghai);
                break;
            case ($route == 'pages.catalog.jianghai.category'):
                return \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog-brand-category', $jianghai, $categories->first());
                break;

        endswitch;
    }

}
