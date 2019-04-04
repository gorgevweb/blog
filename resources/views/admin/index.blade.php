@extends('admin.layouts.header-footer')
@section('admin.content')
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-12">
                    <h4 class="page-title">BLOG</h4>
                </div>
            </div>
            <!-- End Breadcrumb-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-primary">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabe-1"><i
                                            class="icon-home"></i> <span class="hidden-xs">POSTS</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-2"><i
                                            class="icon-user"></i> <span class="hidden-xs">CATEGORIES</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-3"><i
                                            class="icon-user"></i> <span class="hidden-xs">TAGS</span></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="tabe-1" class="container tab-pane active">
                                    <div class="row pt-2 pb-2">
                                        <a href="{{route('post.create')}}"
                                           class="btn btn-success waves-effect waves-light m-1">Create a
                                            Post</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($posts as $post)
                                                <tr>
                                                    <td scope="row">{{$post->title}}</td>
                                                    <td>{{$post->category['name']}}</td>
                                                    <td><p>{{$post->description}}</p>
                                                    </td>
                                                    <td><img src="{{asset($post->image)}}" height="80"
                                                             alt=""></td>
                                                    <td>
                                                        <a href="{{route('post.show',$post->id)}}"><i class="fa fa-eye"></i></a>
                                                        <a href="{{route('post.edit',$post->id)}}"><i
                                                                class="fa fa-edit"></i></a>
                                                        <i class="fa fa-trash post-delete" style="cursor: pointer"
                                                           data-id="{{$post->id}}"></i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div id="tabe-2" class="container tab-pane fade">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" id="category_name" class="form-control">
                                                </td>
                                                <td>
                                                    <button type="button"
                                                            class="btn btn-success waves-effect waves-light m-1 category-create">
                                                        New
                                                    </button>
                                                </td>
                                            </tr>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <th scope="row"><input type="text" name="name"
                                                                           class="form-control"
                                                                           id="category-name-{{$category->id}}"
                                                                           value="{{$category['name']}}"></th>
                                                    <td>
                                                        <i class="fa fa-edit category-edit"
                                                           data-id="{{$category->id}}"></i>
                                                        <i class="fa fa-trash category-delete"
                                                           data-id="{{$category->id}}"></i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="tabe-3" class="container tab-pane fade">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="col">Tag Name</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" id="tag_name" class="form-control">
                                                </td>
                                                <td>
                                                    <button type="button"
                                                            class="btn btn-success waves-effect waves-light m-1 tag-create">
                                                        New
                                                    </button>
                                                </td>
                                            </tr>
                                            @foreach($tags as $tag)
                                                <tr>
                                                    <td scope="row"><input type="text" id="tag-name-{{$tag->id}}"
                                                                           value="{{$tag->name}}"
                                                                           class="form-control"></td>
                                                    <td>
                                                        <i class="fa fa-edit tag-update" data-id="{{$tag->id}}"></i>
                                                        <i class="fa fa-trash tag-delete" data-id="{{$tag->id}}"></i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->
        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
@endsection
@section('script')
    <script src="{{asset('admin/js/pages/blog.js')}}"></script>
@endsection
