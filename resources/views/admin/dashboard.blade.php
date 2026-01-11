@extends('layouts.admin')

@section('title')
    الرئيسة
@endsection

@section('contentheader')
    test TITLE HEAdER
@endsection

@section('content')
    <div class="row" style="background-image: url({{ asset('assets/admin/imgs/dash.jpg') }}); background-size: cover; min-height: 500px;">
        <div class="col-md-12">
            <h1 style="color: white; padding-top: 200px; text-align: center; font-size: 50px;">مرحباً بك في نظام المبيعات</h1>
        </div>

    </div>
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.dashboard') }}"></a>
@endsection

@section('contentheaderactive')
    عرض
@endsection

@section('content')
    test hereer
@endsection
