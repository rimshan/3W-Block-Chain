<?php

namespace App\Http\Controllers;

use App\history;
use http\Env\Response;
use Illuminate\Http\Request;
use App\financial;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;


class Apicontroller extends Controller
{
    //

    public function getLastPrice($symbol1, $symbol2) {

        $financial = new financial();
        $last_price = json_decode(file_get_contents('https://cex.io/api/last_price/'.$symbol1.'/'.$symbol2), true);


        $financial->last_price = $last_price['lprice'];
        $financial->symbol1 = $last_price['curr1'];
        $financial->symbol2 = $last_price['curr2'];
        $financial->save();




    }
    public function getLastPrices(){
        $this->getLastPrice('BTC','USD');
        $this->getLastPrice('LTC','USD');
        $this->getLastPrice('XRP','USD');
        $this->getLastPrice('ETH','USD');
        return view('home');
    }

    public function getLastPriceTableData(){

        $financials = financial::all();
        //return view("last_price_view",compact('financials'));
        return Datatables::of(financial::all())->make(true);


    }

    public function saveTradeHistory($symbol1,$symbol2){
        $history = new history();
        $trade_history = json_decode(file_get_contents('https://cex.io/api/trade_history/'.$symbol1.'/'.$symbol2), true);
//        foreach($trade_history as $th){
//
////            $history->type = $th['type'];
////            $history->amount = $th['amount'];
////            $history->date = $th['date'];
////            $history->price = $th['price'];
////            $history->tid = $th['tid'];
////            $history->save();
//
//           error_log($th);
//
//        }
       $data = [];
       foreach ($trade_history as $th){
           $temp = new history();
           $temp->type = $th['type'];
           $temp->amount = $th['amount'];
           $temp->date = $th['date'];
           $temp->price = $th['price'];
           $temp->tid = $th['tid'];

           $temp->created_at = Carbon::now()->toDateTimeString();
           $temp->updated_at = Carbon::now()->toDateTimeString();

           $data[]= $temp->attributesToArray();

       }
        history::insert($data);


    }
    public function getTradeHistory(){
        $this->saveTradeHistory('BTC','USD');
        $this->saveTradeHistory('XRP','USD');
        $this->saveTradeHistory('ETH','USD');
        return view('home');

    }

    public function getLastPriceView() {
        return view('last_price_view');
    }

    public function getTradeHistoryTableData(){


        return Datatables::of(history::all())->make(true);



    }
    public function getTradeHistoryView() {
        return view('trade_history_view');
    }
}
