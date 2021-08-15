<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\MetaTagsService;
use Butschster\Head\Contracts\MetaTags\MetaInterface;

abstract class BaseController extends Controller
{
    /**
     * @var MetaInterface
     */
    protected $meta;

    /**
     * BaseController constructor.
     * @param MetaTagsService $meta
     */
    public function __construct(MetaTagsService $meta)
    {
        $this->meta = $meta;
    }
}
