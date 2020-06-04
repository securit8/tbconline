@extends('layouts/back')

@section('title') ტრანზაქციები @endsection

@section('style')

@endsection

@section('main')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-comments"></i>ტრანზაქციები </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th> სახელი/გვარი </th>
                                <th> თანხა </th>
                                <th> გადახდის ტიპი </th>
                                <th> სტატუსი </th>
                                <th> TBC - ტრანზაქციის ნომერი </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td> {{ $order->id }} </td>
                                <td> {{$order->getName() . " " . $order->getLastname()}} </td>
                                <td> {{ $order->getAmount() / 100 }} GEL</td>
                                <td> {{ $order->getType() ==  0 ? "ერთჯერადი" : "რეგულარული" }} </td>
                                <td>
                                    <span class="label label-sm label-{{ $order->getStatus() == "OK" ?  "success" : "danger" }}"> {{ $order->getStatus() == "OK" ? "დასრულებული" : 'უარყოფილი' }} </span>
                                </td>
                                <td> {{$order->getTransID()}} </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        <div class="pull-right">{{ $orders->links()  }}</div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

@endsection

@section('script')

@endsection