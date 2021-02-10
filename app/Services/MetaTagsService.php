<?php

namespace App\Services;

use Butschster\Head\Contracts\MetaTags\MetaInterface;

class MetaTagsService extends CoreService
{
    /**
     * @var MetaInterface
     */
    private $meta;

    /**
     * MetaTagsService constructor.
     * @param MetaInterface $meta
     */
    public function __construct(MetaInterface $meta)
    {
        $this->meta = $meta;
    }

    /**
     * @param null $title
     * @param null $keywords
     * @param null $description
     * @return MetaInterface
     */
    public function getMetaTags($title = null, $keywords = null, $description = null)
    {
        $meta = $this->meta->setTitle($title)
                            ->setKeywords($keywords)
                            ->setDescription($description);

        return $meta;
    }
}