<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{
    public $portfolio_arr;
    public function __construct() {
        $json = File::get(database_path('json/portfolio.json'));
        $this->portfolio_arr = json_decode($json, true);
    }
    public function index(){
        return view('index',[
            "portfolio_arr" => $this->portfolio_arr
        ]);
    }
    public function getPortfolioModal(Request $req){
        foreach($this->portfolio_arr as $portfolio){
            if($req->get('portfolioId') == $portfolio['id']){
                return view('_portfolio_modal',compact(["portfolio"]));
            }
        }
        return 'No project Found!';
    }
}
