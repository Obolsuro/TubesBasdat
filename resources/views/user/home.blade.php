@extends('./layout/main')
@section('title','Home')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <?php foreach ($tweet as $con) : ?>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="card card-post card-round">
                            <div class="card-body">
                                <div class="separator-solid"></div>
                                <h3 class="card-title">
                                    <a href="#">
                                        " <?= $con['content'] ?> "
                                    </a>
                                </h3>
                                <br>
                                <form method="post" action="detail">
                                    @csrf
                                    <button class="btn btn-success"><i class="icon-social-twitter">SeeTweet</i></button>
                                    <input type="hidden" name="id" value="<?= $con['id'] ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    @endsection