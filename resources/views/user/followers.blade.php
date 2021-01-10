@extends('./layout/main')
@section('title','Followers')

@section('content')
<div class="main-panel">

    <div class="content">
        <div class='page-inner'>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card card-round">
                        <div class="card-body">
                            <div class="card-title fw-mediumbold">Followers</div>
                            <div class="card-list">
                                <?php foreach ($user as $hasil) : ?>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username"><?= $hasil['uname'] ?></div>
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection