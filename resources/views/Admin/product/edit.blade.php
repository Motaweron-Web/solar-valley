<link rel="stylesheet" href="{{ asset('assets/admin/assets/css/jquery.tagsinput.css') }}">

<script src="{{ asset('assets/admin/assets/js/jquery.tagsinput.js') }}"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}

<form  id="updateForm" class="updateForm" method="POST" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data" >
    @csrf
   @method('PUT')
        <input type="hidden" name="id" value="{{ $product->id }}">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Title_Ar</label>
                    <input type="text"  name="title_ar" value="{{ $product->title_ar }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Sub Ar</label>
                    <input type="text"  name="sub_title_ar" value="{{ $product->title_ar }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Sku</label>
                    <input type="text"  name="sku" readonly value="{{ $product->sku }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Title En</label>
                    <input type="text"  name="title_en" value="{{ $product->title_ar }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Sub En</label>
                    <input type="text"  name="sub_title_en" value="{{ $product->sub_title_en }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>



                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Category</label>
                        <select name="category_id" class="form-control">
                            {{-- <option value="" disabled selected>{{ $product->category->title_en }}</option> --}}
                            @foreach ($categoreis as $category)
                                <option value="{{ $category->id }}" {{ $category->title_en == $product->category->title_en ? 'selected' : '' }}>{{ $category->title_en }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Tag</label>
                    {{-- @foreach ($product as $pro) --}}
                    <input type="text"  name="tags[]" value="@foreach (json_decode($product->tags,true) as $tag) {{  $tag }} @endforeach" data-role="taginput" id="tags_input" class="form-control">
                    {{-- @endforeach --}}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Part Number</label>
                    <input type="number"  name="part_number" value="{{ $product->part_number }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Weight</label>
                    <input type="number"  name="weight" value="{{ $product->weight }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Dimensions</label>
                    <input type="number"  name="dimensions" value="{{ $product->dimensions }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Model Number</label>
                    <input type="number"  name="model_number" value="{{ $product->model_number }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Image</label>
                    <input type="file"  name="image"  class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Description Ar</label>
                    <textarea name="desc_ar" class="form-control" id="" cols="30" rows="10">{{ $product->desc_ar }}</textarea>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Description En</label>
                    <textarea name="desc_en" class="form-control" id="" cols="30" rows="10">{{ $product->desc_en }}</textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary" id="updateButton" >update</button>

        </div>
    </form>

    <script>
        $('#tags_input').tagsInput({
        });
    </script>

