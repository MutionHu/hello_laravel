@extends('layouts.default')
@section('content')
@if (Auth::check())
    <div class="row">
        <div class="col-md-8">
            <section class="status_form">
                @include('shared._status_form')
            </section>
            <h4>
                微聊列表
            </h4>
            <hr>
            @include('shared._feed')
        </div>
        <aside class="col-md-4">
            <section class="user_info">
                @include('shared._user_info',['user'=>Auth::user()])
            </section>
            <section class="stats mt-2">
                @include('shared._stats',['user'=>Auth::user()])
            </section>
        </aside>
    </div>
@else
<div class="jumbotron">
    <h1>
        Home Page
    </h1>
    <p class="lead">
        欢迎来到妙妙屋
    </p>
    <p>
        一切皆有可能        
    </p>
    <p >
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
</div>    
@endif
       
@stop
