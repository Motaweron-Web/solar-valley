<link rel="stylesheet" href="{{ asset('assets/admin/assets/css/jquery.tagsinput.css') }}">
<script src="{{ asset('assets/admin/assets/js/jquery.tagsinput.js') }}"></script>

{{--<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>--}}

<style>
    .taggs {
        width: 240px !important;
        min-height: 60px !important;
        height: 60px !important;
    }
</style>
<form id="addForm" class="addForm" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" >
    @csrf

    @foreach ($products as $product)
        <input type="hidden" name="id" value="{{ $product->id ?? '' }}">
    @endforeach
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Title_Ar</label>
                    <input type="text"  name="title_ar" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Sub Ar</label>
                    <input type="text"  name="sub_title_ar" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Sku</label>
                    <input type="text"  name="sku" readonly value="{{ $sku }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Title En</label>
                    <input type="text"  name="title_en" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Sub En</label>
                    <input type="text"  name="sub_title_en" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>






                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option class="form-control" value="" hidde selected>{{ @$product->category->id }}</option>
                            @foreach ($categoreis as $category)
                            <option class="form-control" value="{{ $category->id }}">{{ $category->title_ar }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Tag</label>
                    <input type="text"  name="tags[]" data-role="tagsinput" id="tags_input" class="form-control">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Part Number</label>
                    <input type="number"  name="part_number" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Weight</label>
                    <input type="number"  name="weight" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Dimensions</label>
                    <input type="number"  name="dimensions" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Model Number</label>
                    <input type="number"  name="model_number" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Image</label>
                    <input type="file"  name="image" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Description Ar</label>
                    <textarea name="desc_ar" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Description En</label>
                    <textarea name="desc_en" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary" id="addButton">create</button>
        </div>
    </form>

    <script>
        $('#tags_input').tagsInput({
        });
        $('#tags_input_tagsinput').addClass('form-control taggs');
    </script>

