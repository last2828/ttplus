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
     * SetMetaService constructor.
     * @param MetaInterface $meta
     */
    public function __construct(MetaInterface $meta)
    {
        $this->meta = $meta;
    }

    /**
     * @param $title
     * @param $keywords
     * @param $description
     * @return mixed
     */
    public function getMetaTags($title, $keywords, $description)
    {
        $meta = $this->meta->setTitle($title)
                            ->setKeywords($keywords)
                            ->setDescription($description);

        return $meta;
    }
}