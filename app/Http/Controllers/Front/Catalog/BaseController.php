<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Front\BaseController as GuestBaseController;
use Butschster\Head\Contracts\MetaTags\MetaInterface;

abstract class BaseController extends GuestBaseController
{
    /**
     * BaseController constructor.
     * @param MetaInterface $meta
     */
    public function __construct(MetaInterface $meta)
    {
        parent::__construct($meta);
    }
}
