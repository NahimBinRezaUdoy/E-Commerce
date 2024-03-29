@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">
                    </div><br>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div><br>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
