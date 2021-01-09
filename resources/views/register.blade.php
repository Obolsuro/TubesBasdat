@extends('layout/login')
@section('title','Register')

@section('content')
<div class="content">
    <div class='page-inner'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-header">
                        <div class='row'>
                            <div class="col-md-4 col-lg-4"></div>
                            <div class="col-md-4 col-lg-4">
                                <div class="card-title">Sign-Up</div>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="{{url('daftar')}}">
                        <div class='card-body'>
                            <div class='row'>
                                <div class="col-md-4 col-lg-4"></div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Re-Password</label>
                                        <input type="password" class="form-control" id="re-password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="BD">Birth Date</label>
                                        <input type="date" name='BD' class="form-control" id="BD">
                                    </div>
                                    <div class="form-group">
                                        <button class='btn btn-primary'>Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection