@extends('layouts.default')
@section('content')
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
    
@stop
