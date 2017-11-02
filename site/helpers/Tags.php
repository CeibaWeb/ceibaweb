<?php

namespace Statamic\SiteHelpers;

use Statamic\Extend\Tags as AbstractTags;
use Statamic\API\Parse;

class Tags extends AbstractTags
{
    /**
     * The {{ site:example }} tag
     *
     * @return mixed
     */
    public function example()
    {
        $str = '{{ title }}';
        return Parse::template($str);
    }
}
