<?php

namespace OpenAdmin\PHPInfo\Http\Controllers;

use OpenAdmin\Admin\Layout\Content;
use Illuminate\Routing\Controller;
use OpenAdmin\PHPInfo\PHPInfo;

class PHPInfoController extends Controller
{
    public function index(Content $content, PHPInfo $info)
    {
        $info = $info::toCollection();

        return $content
            ->title('PHP info')
            ->description('An overview of your php ini settings')
            ->body(view('phpinfo::index', ["info"=>$info]));
    }
}
