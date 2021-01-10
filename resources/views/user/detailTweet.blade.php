@extends('./layout/main')
@section('title','Tweets')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card card-post card-round">
                        <img class="card-img-top" src="../assets/img/blogpost.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="avatar">
                                    <img src="../assets/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="info-post ml-2">
                                    <p class="username"><?= $user[0]['uname'] ?></p>
                                    <p class="date text-muted"><?= $tweet[0]['created_at'] ?></p>
                                </div>
                            </div>
                            <div class="separator-solid"></div>

                            <h3 class="card-title">
                                "<?= $tweet[0]['content'] ?>"
                            </h3>
                            <form method="post" action="reply">
                                @csrf
                                <div class="form-group form-floating-label">
                                    <input type="hidden" name="id" value="<?= $tweet[0]['id'] ?>">
                                    <input id="inputFloatingLabel" name="reply" type="text" class="form-control input-border-bottom" required>
                                    <label for="inputFloatingLabel" class="placeholder">Reply</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card full-height">
                        <div class="card-header">
                            <div class="card-title">Reply</div>
                            <div class="text-primary">Total (<?= count($tweets) ?>)</div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($tweets as $cek) : ?>
                                <ol class="activity-feed">
                                    <li class="feed-item">
                                        <time class="date" datetime="9-17"><?= date("d-m-Y", strtotime($cek['created_at'])); ?></time>
                                        <span class="text"><i><?= $cek['content'] ?></i></span>
                                    </li>
                                </ol>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection