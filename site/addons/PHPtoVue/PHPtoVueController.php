<?php

namespace Statamic\Addons\PHPtoVue;

use Statamic\Extend\Controller;

class PHPtoVueController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->view('index');
    }

    public function getPostsRetrieve() {
        return \Statamic\API\Entry::whereCollection('blog');
    }
}
