@extends('layouts.main')
@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto  text-center">
                <form class="my-5 py-5" method="POST" action="{{url('employeelogin')}}" >
                    @csrf()
                    <h2>دخول موظف</h2>
                    <input name="email" class="form-control my-3" placeholder="email" type="text" />
                    <input name="password" class="form-control my-3" placeholder="password" type="password" />
                    <button class="btn btn-success px-4" type="submit">دخول</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop
