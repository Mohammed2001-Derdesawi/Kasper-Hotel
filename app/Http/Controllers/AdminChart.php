<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class AdminChart extends Controller
{
    public function indexChartAdmin() {
        $data = User::select('id','created_at')->get()->groupBy(function($data){
            return Crabon::parse($data->created_at)->format('M');
        });

        $users=[];
        $userCount=[];

        foreach($data as $user => $values){
            $users[] = $user;
            $userCount[] = count($values);
        }

        return view('admindashboardlayout.main-page',['data'=>$data , 'users'=>$users , 'userCount'=>$userCount]);
    }
}
