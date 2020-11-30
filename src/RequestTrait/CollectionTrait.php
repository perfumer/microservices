<?php

namespace Perfumer\Microservices\RequestTrait;

trait CollectionTrait
{
    /**
     * @var int
     */
    public $limit = 0;

    /**
     * @var int
     */
    public $offset = 0;

    public function getCollectionTraitQueryString()
    {
        $query_string = [];

        if ($this->limit > 0) {
            $query_string['limit'] = (int) $this->limit;
        }

        if ($this->offset > 0) {
            $query_string['offset'] = (int) $this->offset;
        }

        return http_build_query($query_string);
    }
}
