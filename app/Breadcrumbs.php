<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breadcrumbs extends Model
{
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
