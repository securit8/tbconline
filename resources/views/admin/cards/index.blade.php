@extends('layouts/back')

@section('title') ბარათები @endsection

@section('style')

@endsection

@section('main')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-comments"></i>დამახსოვრებული ბარათები </div>
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
                                <th> ყოველთვიურად ჩამოჭრის თარიღი </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cards as $card)
                                <tr>
                                    <td> {{ $card->id }} </td>
                                    <td> {{$card->getName() . " " . $card->getLastname()}} </td>
                                    <td> {{ $card->getAmount() / 100 }} GEL</td>
                                    <td> {{ $card->created_at->format('d') }} რიცხვი</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="pull-right">{{ $cards->links()  }}</div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

@endsection

@section('script')

@endsection