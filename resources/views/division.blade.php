@extends('master')
@section('content')
    <div class="contaier">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="list-group success" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action text-center"   href={{route('water')}}>Dhaka</a>
                        <a class="list-group-item list-group-item-action text-center" href={{route('water')}}>Chittagong</a>
                        <a class="list-group-item list-group-item-action text-center"  href={{route('water')}}>Rajsahi</a>
                        <a class="list-group-item list-group-item-action text-center"  href={{route('water')}}>Rangpur</a>
                        <a class="list-group-item list-group-item-action text-center"  href={{route('water')}}>Khulna</a>
                        <a class="list-group-item list-group-item-action text-center" href={{route('water')}}>Rangpur</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection