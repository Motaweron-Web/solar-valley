@extends('Admin.layouts.master')

@section('content')
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />--}}
{{--    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">


    <div class="row mt-4">
        <div class="col-12">
            <div class="card" style="padding: 13px">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Service List</h5>
                    <div class="add-btn">

                        <button type="button" class="btn btn-primary addBtn">Add</button>
                    </div>
                </div>
                <div class="table">
                    <table class="table table-responsive data-table YAJRA" id="dataTable" style=" width: 100% !important;" >
                        <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!--   edit and create modal   -->
            <div class="modal fade" id="editOrCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="modal-body">

                        </div>
                    </div>
                </div>
            </div>
            <!--   edit and create modal   -->

            <!--  delete Modal -->
            <div class="modal fade" id="delete_modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input id="delete_id" name="id" type="hidden">
                            <p>Do You Want to Delete <span id="title" class="text-danger"></span>؟</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal" id="dismiss_delete_modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary dismiss_delete_modal" id="delete_btn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Delete -->

        </div>
    </div>


@endsection
@section('js')
    @include('Admin.layouts.myAjaxHelper')

    <script>

        var columns = [
            {data: 'id', name: 'id'},
            {data: 'title_en', name: 'title_en'},
            {data: 'desc_en', name: 'desc_en'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        showData('{{route('service.index')}}', columns);
    //    add Model
        showAddModal('{{route('service.create')}}');
        addScript();
        // deleteModel
        destroyScript('{{route('service.destroy',':id')}}');

        showEditModal('{{route('service.edit',':id')}}');
        editScript();
    </script>
@stop
