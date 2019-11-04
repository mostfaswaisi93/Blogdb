@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>
                        Categories

                        <a href="categories/create" class="btn btn-default pull-right">Create New</a>
                    </h2>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Post Count</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>sedd</td>
                                <td>1</td>
                                <td>
                                    <a href="categories/1/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/1" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>ut</td>
                                <td>4</td>
                                <td>
                                    <a href="categories/2/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/2" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>id</td>
                                <td>1</td>
                                <td>
                                    <a href="categories/3/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/3" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>occaecati</td>
                                <td>0</td>
                                <td>
                                    <a href="categories/4/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/4" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>sint</td>
                                <td>3</td>
                                <td>
                                    <a href="categories/5/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/5" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>quia</td>
                                <td>2</td>
                                <td>
                                    <a href="categories/6/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/6" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>ipsum</td>
                                <td>4</td>
                                <td>
                                    <a href="categories/7/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/7" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>quisquam</td>
                                <td>3</td>
                                <td>
                                    <a href="categories/8/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/8" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>unde</td>
                                <td>6</td>
                                <td>
                                    <a href="categories/9/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/9" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>voluptatum</td>
                                <td>1</td>
                                <td>
                                    <a href="categories/10/edit" class="btn btn-xs btn-info">Edit</a>
                                    <a href="categories/10" data-method="DELETE"
                                        data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection