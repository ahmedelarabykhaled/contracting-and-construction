@extends('layouts.main')
@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto  text-center">
                <form class="my-5 py-5" method="POST" action="{{url('userlogin')}}">
                    @csrf()
                    <h2>دخول</h2>
                    <input class="form-control my-3" name="email" placeholder="email" type="text" />
                    <input class="form-control my-3" name="password" placeholder="password" type="password" />
                    <button class="btn btn-success px-4" type="submit">دخول</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop
