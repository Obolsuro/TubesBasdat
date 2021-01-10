@extends('./layout/main')
@section('title','tweet')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header text-right">
                <form method="get" action="addTweet">
                    <button class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        add tweet
                    </button>
                </form>
            </div>
            <?php foreach ($tweet as $con) : ?>
                <div class="row">
                    <div class="col-md-4 text-right">
                        <form method='post' action="deleteTweet">
                            @csrf
                            <input type="hidden" name='id' value="<?= $con['_id'] ?>">
                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-post card-round">
                            <img class="card-img-top" src="../assets/img/blogpost.jpg" alt="Card image cap">
                            <div class="card-body">
                                <form method="post" action="detail">
                                    @csrf
                                    <button class="btn btn-success"><i class="icon-social-twitter">SeeTweet</i></button>
                                    <input type="hidden" name="id" value="<?= $con['id'] ?>">
                                </form>
                                <div class="separator-solid"></div>
                                <h3 class="card-title">
                                    <?= $con['content'] ?>

                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        @endsection