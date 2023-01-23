<form id="updateForm" class="updateForm"     method="POST" >
    @csrf
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card" style="padding: 13px">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Who will be install system :</label>
                                <input type="text" name="title_ar" disabled value="{{ $quote->who_install }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">System completed by :</label>
                                <input type="text" name="sub_title_ar" disabled value="{{ $quote->system_complete }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Monthly electric usage in kWh :</label>
                                <input type="text" name="hash_ar" disabled value="{{ $quote->usage }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Solar system type :</label>
                                <input class="form-control" name="title_en" disabled value="{{ $quote->system_type }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Solar panels place  :</label>
                                <input class="form-control" name="client_count" disabled value="{{ $quote->panels_place }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Materials on your roof :</label>
                                <input class="form-control" name="sub_title_en" disabled value="{{ $quote->your_roof }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Message :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->message }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Name :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->first_name }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">NickName :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->last_name }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Phone :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->phone }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->email }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Preferred Contact  :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->prefer_contact }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->address }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">State :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->state }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">City :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->city }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Zip Code :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->zip }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Country :</label>
                                <input type="text" name="hash_en" disabled value="{{ $quote->country }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </form>

