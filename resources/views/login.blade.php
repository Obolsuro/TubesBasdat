@extends('layout/login')
@section('title','Login')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class='page-inner'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class="card">
                        <div class="card-header">
                            <div class='row'>
                                <div class="col-md-4 col-lg-4"></div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="card-title">Login</div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <button onclick="window.location.href='/register'" class='btn btn-primary'>Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="{{url('masuk')}}">
                            <div class='card-body'>
                                <div class='row'>
                                    <div class="col-md-4 col-lg-4"></div>

                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <button class='btn btn-success' type="submit">Login</button>
                                                </div>
                                            </div>
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