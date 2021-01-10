@extends('./layout/main')
@section('title','Search')

@section('content')
<div class="main-panel">
    <div class="content">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th hidden>ID</th>
                                        <th hidden>name</th>
                                        <th>People</th>
                                        <th>Follow</th>
                                </thead>

                                <tbody>
                                    <?php foreach ($user as $orang) : ?>
                                        <tr>
                                            <td hidden>
                                                <?= $orang['_id'] ?>
                                            </td>
                                            <td hidden>
                                                <?= $orang['uname'] ?>
                                            </td>
                                            <td>
                                                <div class="item-list">

                                                    <div class="info-user ml-3">
                                                        <div class="avatar">
                                                            <img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                                                        </div>
                                                        <div class="username"><?= $orang['uname'] ?></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <form method="post" action="follow">
                                                    @csrf
                                                    <input type="hidden" name="id" value="<?= $orang['_id'] ?>">
                                                    <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection