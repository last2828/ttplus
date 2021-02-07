<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Butschster\Head\Contracts\MetaTags\MetaInterface;

abstract class BaseController extends Controller
{
    /**
     * @var MetaInterface
     */
    protected $meta;

    /**
     * BaseController constructor.
     * @param MetaInterface $meta
     */
    public function __construct(MetaInterface $meta)
    {
        $this->meta = $meta;
    }
}
