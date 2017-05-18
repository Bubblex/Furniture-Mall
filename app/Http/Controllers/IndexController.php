<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\GoodsTypeRepository;

class IndexController extends Controller
{
    protected $goodsType;

    public function __construct(GoodsTypeRepository $goodsType) {
        $this->goodsType = $goodsType;
    }

    /**
     * 首页
     *
     * @return void
     */
    public function homePage() {
        $goodsTypes = $this->goodsType->getNormalTypes();

        return view('home.index')->with([
            'goodsTypes' => $goodsTypes
        ]);
    }
}
