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
                                <div class="name">Hizrian, 19</div>
                                <div class="job">Frontend Developer</div>
                                <div class="desc">A man who hates loneliness</div>
                                <div class="social-media">
                                    <a class="btn btn-info  btn-sm btn-link" href="#">
                                        <span class="btn-label just-icon"><i class="fas fa-upload"></i> </span>
                                    </a>
                                </div>
                                <div class="view-profile">
                                    <a href="#" class="btn btn-danger btn-block">Hapus Akun</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row user-stats text-center">
                                <div class="col">
                                    <div class="number">125</div>
                                    <div class="title">Post</div>
                                </div>
                                <div class="col">
                                    <div class="number">25K</div>
                                    <div class="title">Followers</div>
                                </div>
                                <div class="col">
                                    <div class="number">134</div>
                                    <div class="title">Following</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection