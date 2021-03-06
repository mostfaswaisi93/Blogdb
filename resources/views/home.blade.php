@extends('layout')

@section('content')

<div class="container">
    <div class="row form-search">
        <form method="GET" action="" accept-charset="UTF-8" role="form">
            <div class="col-md-10">
                <input class="form-control" placeholder="Search..." name="search" type="text">
            </div>
            <div class="col-md-2">
                <input class="btn btn-block btn-default" type="submit" value="Sumbit">
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach ($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$post->title}} - <small>by {{$post->author}}</small>
                    <span class="pull-right">
                        Thu, Jan 10, 2019 7:50 AM
                    </span>
                </div>
                <div class="panel-body">
                    <p>{{$post->body}}</p>
                    <p>
                        Tags:
                        <span class="label label-danger">No tag found.</span>
                    </p>
                    <p>
                        <span class="btn btn-sm btn-success">ipsum</span>
                        <span class="btn btn-sm btn-info">Comments <span class="badge"></span></span>
                        <a href="/post/{{$post->id}}" class="btn btn-sm btn-primary">See more</a>
                    </p>
                </div>
            </div>
            @endforeach
            <div class="center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>

@endsection