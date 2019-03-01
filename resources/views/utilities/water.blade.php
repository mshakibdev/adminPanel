@extends('master')
@section('content')
<div class="contaier">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action text-center " >Zone-1</a>
                    <a class="list-group-item list-group-item-action text-center" >Zone-2</a>
                    <a class="list-group-item list-group-item-action text-center" >Zone-3</a>
                    <a class="list-group-item list-group-item-action text-center" >Zone-4</a>
                </div>
            </div>
            <div class="col-8">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-success">Send Sms</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td><button type="button" class="btn btn-success">Send Sms</button></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td><button type="button" class="btn btn-success">Send Sms</button></td>
                    </tr>
                    </tbody>
                </table>
                <a type="button" class="btn btn-outline-success" href="{{route('onetomany')}}">Send All</a>

            </div>

        </div>


</div>

@stop