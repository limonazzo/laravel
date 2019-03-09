<?php

namespace App\Http\Controllers\Bitso;

use App\Models\BitcointModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {

        $builder= BitcointModel::whereDate('created_at', '>', now()->subHours(24))
            ->orderBy('created_at','asc');



        $bc = $builder->get();
        $data = [];
        foreach ($bc as $item) {
            $data[] = [
                $item->created_at->timestamp * 1000,
                $item->price
            ];
        }

        $scaleup = (integer) $builder->max('price') + 1000;
        $scaledown = (integer) $builder->min('price') - 1000;

        return view('bitso.home',compact('data','scaledown','scaleup'));
    }
}
