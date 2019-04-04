@extends('admin.layouts.header-footer')
@section('admin.content')
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-12">
                    <h4 class="page-title">Creating a new post</h4>
                </div>
            </div>
            <!-- End Breadcrumb-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                               placeholder="Title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="description">Description</label>
                                        <textarea rows="5" name="description" class="form-control"
                                                  id="description"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label for="choose_category">Choose Category</label>
                                        <select class="form-control single-select" name="category_id" id="choose_category">
                                            <option value="">-</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="choose_tags">Choose Tags</label>
                                        <select class="form-control multiple-select" name="tags[]" multiple="multiple"
                                                id="choose_tags">
                                            <option value="">-</option>
                                            @foreach($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="inputGroupFile01">Cover Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group my-3">
                                    <button type="submit" class="btn btn-light px-5"><i class="icon-plus"></i> Add Post
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
@endsection
@section('script')

    <script>
        $(document).ready(function () {
            $('.single-select').select2();
            $('.multiple-select').select2();
            $('#my_multi_select2').multiSelect({
                selectableOptgroup: true
            });

        })
    </script>
@endsection
