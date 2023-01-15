@extends('Admin.layouts.master')

@section('content')
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
    {{--    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">




    <form method="POST" id="updateForm" class="updateForm" action="{{ route('about_us.update', $about_us->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $about_us->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Title Ar :</label>
                                <input type="text" name="title_ar" value="{{ $about_us->title_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sub Ar :</label>
                                <input type="text" name="sub_title_ar" value="{{ $about_us->sub_title_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Hash Ar :</label>
                                <input type="text" name="hash_ar" value="{{ $about_us->hash_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Title En :</label>
                                <input class="form-control" name="title_en" value="{{ $about_us->title_en }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Title En :</label>
                                <input class="form-control" name="client_count" value="{{ $about_us->client_count }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sub En :</label>
                                <input class="form-control" name="sub_title_en" value="{{ $about_us->sub_title_en }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Hash En :</label>
                                <input type="text" name="hash_en" value="{{ $about_us->hash_en }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- about_us -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-body">
                        <div class="container_ar">
                            <h5 class="mb0">about_us Ar</h5>
                            <textarea class="form-control" id="mytextarea" name="desc_ar" id="exampleFormControlTextarea1" rows="3">{{ $about_us->desc_ar }}</textarea>
                        </div>

                        <div class="container_en">
                            <h5 class="mb0">about_us Ar</h5>
                            <textarea class="form-control" id="mytextarea1" name="desc_en" id="exampleFormControlTextarea1" rows="3">{{ $about_us->desc_en }}</textarea>
                        </div>
                    </div>


                    <div>
                        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End about_us -->


@endsection
@section('js')
    @include('Admin.layouts.myAjaxHelper')

    <script src="{{ asset('assets/admin/js/tinymce.min.js') }}" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
        tinymce.init({
            selector: '#mytextarea1'
        });

        var columns = [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'title_en',
                name: 'title_en'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
        showData('{{ route('about_us.index') }}', columns);

        // deleteModel
        deleteScript('{{ route('category.destroy', ':id') }}');


        showEditModal('{{ route('about_us.index', ':id') }}');
        editScript();
    </script>
@stop
