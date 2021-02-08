<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Front\BaseController as GuestBaseController;
use App\Services\MetaTagsService;

abstract class BaseController extends GuestBaseController
{
    /**
     * BaseController constructor.
     * @param MetaTagsService $meta
     */
    public function __construct(MetaTagsService $meta)
    {
        parent::__construct($meta);
    }
}
