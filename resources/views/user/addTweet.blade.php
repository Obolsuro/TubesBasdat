@extends('./layout/main')
@section('title','addTweet')

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
                                    <div class="card-title">Tweet</div>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="{{url('add')}}">
                            @csrf
                            <div class=' card-body'>
                                <div class='row'>
                                    <div class="col-md-4 col-lg-4"></div>

                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="tweet">Tweet</label>
                                            <input type="text" class="form-control" name="tweet" id="tweet" placeholder="Masukan Tweet mu" required>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <button class='btn btn-success' type="submit">Post</button>
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
</div>

@endsection