@extends('admin.layouts.header-footer')
@section('admin.content')
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-12">
                    <h4 class="page-title">Edit post</h4>
                </div>
            </div>
            <!-- End Breadcrumb-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('post.update',$post->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                               placeholder="Title" value="{{$post->title}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="description">Description</label>
                                        <textarea rows="5" name="description" class="form-control"
                                                  id="description">{{$post->description}}</textarea>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="choose_category">Choose Category</label>
                                        <select class="form-control single-select" name="category_id"
                                                id="choose_category">
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{$category->id}}" {{($category->id == $post->category->id) ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="choose_tags">Choose Tags</label>
                                        <select class="form-control multiple-select" name="tags[]" multiple="multiple"
                                                id="choose_tags">

                                            @foreach ($post->post_tags as $tag)
                                                {{$data[] = $tag->tag_id}}
                                            @endforeach

                                            @foreach($tags as $tag)
                                                <option
                                                    value="{{$tag->id}}" {{(isset($data) && in_array($tag->id,$data)) ? 'selected' : ''}}>{{$tag->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="inputGroupFile01">Cover Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                   id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <a href="{{asset($post->image)}}" target="_blank">
                                            <img src="{{asset($post->image)}}" alt="" height="80">
                                        </a>
                                    </div>
                                </div>


                                <div class="form-group my-3">
                                    <input type="hidden" id="post_id" value="{{$post->id}}">
                                    <button type="submit" class="btn btn-light px-5"><i class="ti-save"></i> Save Post
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

        </div>

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
            $('.remove_photo').on('click', function () {
                const $this = $(this);
                const id = $this.data('id');
                const post_id = $('#post_id').val();
                $.ajax({
                    url: route('photo.delete'),
                    type: "post",
                    data: {id: id, post_id: post_id},
                    success: function (data) {
                        if (data.success) {
                            $this.remove();
                            $('#photo-' + id).remove();
                            swal('Photo Deleted')
                        }
                    }, error: function () {
                        swal('Oops, something went wrong')
                    }
                });
            });
        })
    </script>
@endsection
