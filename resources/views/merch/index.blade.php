@extends('merch.layouts.app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>控制台</h2>
        </div>
    </div>

    <div class="wrapper wrapper-content">

        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">more <i class="fa fa-angle-double-right"></i></span>
                        <h5>今日订单</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><span class="text-danger">{{}}</span>&nbsp;<small>笔</small></h1>
                        <small>成交金额：&yen;{{}}</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">more <i class="fa fa-angle-double-right"></i></span>
                        <h5>昨日订单</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><span class="text-danger">{{}}</span>&nbsp;<small>笔</small></h1>
                        <small>成交金额：&yen;{{}}</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">more <i class="fa fa-angle-double-right"></i></span>
                        <h5>本月订单</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><span class="text-danger">{{}}</span>&nbsp;<small>笔</small></h1>
                        <small>成交金额：&yen;{{}}</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">more <i class="fa fa-angle-double-right"></i></span>
                        <h5>历史订单</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><span class="text-danger">{{}}</span>&nbsp;<small>笔</small></h1>
                        <small>成交金额：&yen;{{}}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection