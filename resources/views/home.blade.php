@extends('layouts.app')

@section('content')
    <style>.button {
            display: block;
            width: 115px;
            height: 25px;
            background: #4E9CAF;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }</style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                    <div class="panel-body">
                        <a style="display: inline;width: 115px;height: 25px;background: #2a88bd;padding: 10px;text-align: center;border-radius: 5px;color: white;font-weight: bold" href="/last_price">Fetch last price</a>
                        <a style="display: inline;width: 115px;height: 25px;background: #2a88bd;padding: 10px;text-align: center;border-radius: 5px;color: white;font-weight: bold" href="/last_price_view">View last prices</a>
                    </div>
                    <div class="panel-body">
                        <a style="display: inline;width: 115px;height: 25px;background: #2a88bd;padding: 10px;text-align: center;border-radius: 5px;color: white;font-weight: bold" href="/trade_history">Fetch trade history</a>
                        <a style="display: inline;width: 115px;height: 25px;background: #2a88bd;padding: 10px;text-align: center;border-radius: 5px;color: white;font-weight: bold" href="/trade_history_view">View trade history</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
