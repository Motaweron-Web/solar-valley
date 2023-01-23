@extends('Admin.layouts.master')

@section('content')
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
    {{--    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">




    <form method="POST" id="updateForm" class="updateForm" action="{{ route('setting.update', $settings->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $settings->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Logo :</label>
                                <input type="file" name="logo" value="{{ $settings->logo }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Banner Home :</label>
                                <input type="text" name="banner_home" value="{{ $settings->banner_home }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Titl Ar :</label>
                                <input type="text" name="title_ar" value="{{ $settings->title_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Title En :</label>
                                <input class="form-control" name="title_en" value="{{ $settings->title_en }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Year Of Experince :</label>
                                <input class="form-control" name="year_of_experince" value="{{ $settings->year_of_experince }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Phone :</label>
                                <input class="form-control" name="phone" value="{{ $settings->phone }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email :</label>
                                <input type="text" name="email" value="{{ $settings->email }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address Ar :</label>
                                <input type="text" name="address_ar" value="{{ $settings->address_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address En :</label>
                                <input type="text" name="address_en" value="{{ $settings->address_en }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Youtube :</label>
                                <input type="text" name="youtube" value="{{ $settings->youtube }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Facebook :</label>
                                <input type="text" name="facebook" value="{{ $settings->facebook }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Twitter :</label>
                                <input type="text" name="twitter" value="{{ $settings->twitter }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Terms Conditions :</label>
                                <input type="text" name="terms_conditions" value="{{ $settings->terms_conditions }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Shipping Policy :</label>
                                <input type="text" name="shipping_policy" value="{{ $settings->shipping_policy }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Returns :</label>
                                <input type="text" name="returns" value="{{ $settings->returns }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Work Date :</label>
                                <input type="text" name="work_date" value="{{ $settings->work_date }}"
                                    class="form-control" />
                            </div>
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
    <script>
      editScript();
    </script>
@stop
