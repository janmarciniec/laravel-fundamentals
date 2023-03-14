@extends('layouts.master')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            All Posts
            <a class="btn btn-success" href="">Create</a>
            <a class="btn btn-warning" href="">Trashed</a>
        </div>
        <div class="card-body >
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Public Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="https://picsum.photos/200" alt="" width="80">
                    </td>
                    <td>Lorem ipsum dolor, sit amet</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium repellendus quis qui impedit? Laborum dolores qui molestias sapiente facilis, corporis consequatur numquam fugit quia? Blanditiis maiores assumenda deleniti ab.</td>
                    <td>News</td>
                    <td>2-5-23</td>
                    <td>
                        <a class="btn-sm btn-primary" href="">Edit</a>
                        <a class="btn-sm btn-danger" href="">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection