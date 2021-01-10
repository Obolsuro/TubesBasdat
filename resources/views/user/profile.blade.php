@extends('./layout/main')
@section('title','Profile')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class='page-inner'>
            <div class='row'>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <form method="post" action="updateProfile">
                                    @csrf
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" name="uname" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder"><?= $user[0]['uname'] ?></label>
                                    </div>
                                    <span class="text-primary"><i><?= date("d-m-Y", strtotime($user[0]['bd'])) ?></i></span>
                                    <br>
                                    <div class="social-media">
                                        <button class="btn btn-info  btn-sm btn-link">
                                            <span class="btn-label just-icon"><i class="fas fa-upload"></i> </span>
                                        </button>
                                    </div>
                                </form>
                                <form method="post" action="hapusAkun">
                                    @csrf
                                    <div class="view-profile">
                                        <button class="btn btn-danger">Hapus Akun</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row user-stats text-center">
                                <div class="col">
                                    <div class="number"><?= $tweet ?></div>
                                    <div class="title">Tweets</div>
                                </div>
                                <div class="col">
                                    <div class="number"><?= $followers ?></div>
                                    <div class="title">Followers</div>
                                </div>
                                <div class="col">
                                    <div class="number"><?= $following ?></div>
                                    <div class="title">Following</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card card-profile text-center">
                        <form method="get" action="logout">
                            @csrf
                            <div class="view-profile">
                                <button class="btn btn-primary">Logout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection