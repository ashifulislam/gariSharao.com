@extends('layouts.superAdmin.superAdminMaster')

@section('content')
    <h3 style="margin-left:8px;">All Categories</h3>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>

                <th>Title</th>
                <th>Description</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($categories as $categories)
                    <td>{{$categories->id}}</td>

                    <td>{{$categories->title}}</td>
                    <td>{{$categories->description}}</td>
                    {{--                <td><span class="tag tag-success"></span></td>--}}
                    <td>
                        <button data-toggle="modal"  data-mytitle="{{$categories->title}}" data-myDescription="{{$categories->description}}"  data-catid="{{$categories->id}}" class="btn btn-info" data-target="#edit" >Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger" data-toggle="modal" class="btn btn-info" data-catid="{{$categories->id}}"  data-target="#delete">Delete</button>
                    </td>
            </tr>
            @endforeach


            </tbody>
        </table>
    </div>
    <!-- Button trigger modal -->
    <button style="margin-left:8px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add New
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">New Category</h4>
                </div>
                <form name="category" action="{{route('productCategory.store')}}" method="post">
                    @csrf
                    @include('layouts.superAdmin.categoryAddForm')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                </div>
                <form  action="{{route('productCategory.update','test')}}" method="post">

                    {{method_field('patch')}}
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="category_id" id="cat_id" value="">
                        {{--                    <input type="hidden" name="category_id" id="cat_id" value="">--}}
                        @include('layouts.superAdmin.categoryAddForm')
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center"  id="myModalLabel">Delete </h4>
                </div>
                <form name="category" action="{{route('productCategory.destroy','test')}}" method="post">
                    @method('delete')
                    @csrf

                    <div class="modal-body">
                        <p class="text-center">
                            Are you want to sure delete?
                        </p>
                        <input type="hidden" name="category_id" id="cat_id" value="">
                        {{--                    <input type="hidden" name="category_id" id="cat_id" value="">--}}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Delete </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
