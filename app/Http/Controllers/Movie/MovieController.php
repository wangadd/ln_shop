<?php

namespace App\Http\Controllers\Movie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class MovieController extends Controller
{
    public function index(){
        $keys='movie_shop12';
        $data=[];
        for ($i=1;$i<=30;$i++){
            $bit=Redis::getBit($keys,$i);
            $data[$i]=$bit;
        }
        $info=[
            'data'=>$data
        ];
        return view('movie.seat',$info);
    }

    /**
     * 执行订座
     * @param $k
     */
    public function doMovie($k){
        $status=1;
        $keys='movie_shop12';
        Redis::setbit($keys,$k,$status);
        echo "订座成功";
        header('refresh:2;url=/movie');
    }
}
