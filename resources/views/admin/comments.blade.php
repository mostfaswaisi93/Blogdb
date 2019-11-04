@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>
                        Comments
                        <a href="/admin/comments/create" class="btn btn-default pull-right">Create New</a>
                    </h2>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Post</th>
                                <th>Comment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                            <tr>
                                <td>{{$comment->post->title}}</td>
                                <td>{{$comment->content}}</td>
                                <td>
                                    <a href="" data-method="DELETE" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{$comments->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection