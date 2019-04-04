@extends('admin.layouts.header-footer')
@section('admin.content')
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-12">
                    <h4 class="page-title">POST Info</h4>
                </div>
            </div>
            <!-- End Breadcrumb-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td scope="row">Category</td>
                                        <td>{{$post->category['name']}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Title</td>
                                        <td>{{$post->title}}</td>
                                    </tr>

                                    <tr>
                                        <td scope="row">Cover Image</td>
                                        <td><img src="{{asset($post->image)}}" height="80"
                                                 alt=""></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Description</td>
                                        <td>{{$post->description}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tags</td>
                                        <td>
                                            @foreach($post->post_tags as $tag)
                                                <span>{{$tag->tag['name']}}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Action</td>
                                        <td><a href="{{route('post.edit',$post->id)}}"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--End Row-->
        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
@endsection
