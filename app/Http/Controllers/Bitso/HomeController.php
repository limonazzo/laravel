<?php

namespace App\Http\Controllers\Bitso;

use App\Models\BitcointModel;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {

        // Prices history
        $builder= BitcointModel::whereDate('created_at', '>', now()->subHours(24))
            ->orderBy('created_at','asc');


        $bc = $builder->get();
        $data = [];
        foreach ($bc as $item) {
            // date to UTC for flotcharts ¬¬
            $date = Carbon::createFromFormat('Y-m-d H:i:s',$item->created_at->format('Y-m-d H:i:s'),'utc');
            $data[] = [
                $date->timestamp * 1000,
                $item->price
            ];
        }

        // "zoom" correct Y axis
        $scaleup = ceil( $builder->max('price') );
        $scaledown = floor( $builder->min('price') );

        return view('bitso.home',compact('data','scaledown','scaleup'));
    }
}
