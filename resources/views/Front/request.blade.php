@extends('Front.layouts.master')

@section('content')

<div class="module-content module-search-warp">
    <div class="pos-vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <form class="form-search">
              <input
                class="form-control"
                type="text"
                placeholder="type words then enter"
              />
              <button></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
  </div>

  <section class="page-title page-title-14" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
      <div class="bg-section">
        <img src="{{ asset('assets/front') }}/assets/images/page-titles/14.jpg" alt="Background" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="title">
              <h1 class="title-heading">Request quote</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact contact-4" id="contact-4">
    <div class="container">
      <div class="contact-panel contact-panel-3">
        <div class="heading heading-6">
          <p class="heading-subtitle">
            Improving The Performance Of Solar Energy.
          </p>
          <h2 class="heading-title">
            Discover Independence Through Using The Power Of Solar Panels!
          </h2>
          <p class="heading-desc">
            We offer products, solutions, and services across the entire
            energy value chain. We support our customers on their way to a
            more sustainable future – no matter how far along the journey to
            energize society with affordable energy systems.
          </p>
          <div class="advantages-list-holder">
            <div class="row">
              <div class="col-12 col-lg-6">
                <ul class="list-unstyled advantages-list advantages-list-3">
                  <li>Reliabe and performance</li>
                  <li>Solar material financing</li>
                  <li>In-time manufacturing</li>
                </ul>
              </div>
              <div class="col-12 col-lg-6">
                <ul class="list-unstyled advantages-list advantages-list-3">
                  <li>50% more energy output</li>
                  <li>Built using ntype mono</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="contact-action">
            <a class="btn btn--primary" href="page-about.html"
              >learn more <i class="energia-arrow-right"></i></a
            ><a class="btn btn--bordered btn--white" href="page-faqs.html"
              >our core values</a
            >
          </div>
          <div class="contact-quote contact-quote-3">
            <img src="{{ asset('assets/front') }}/assets/images/icons/noteicon-2.png" alt="icon" />
            <p>
              Receive an accurate quote within 3-5 days when you fill out
              this form. Or, give us a call:
              <a href="tel:01061245741">(002) 01061245741</a>
            </p>
          </div>
        </div>
        <div class="contact-card">
          <div class="contact-body">
            <h5 class="card-heading">Request A Quote</h5>
            <p class="card-desc">
              We take great pride in everything that we do, control over
              products allows us to ensure our customers receive the best
              quality service.
            </p>
            <form id="addForm" class="form-qoute" method="post" action="{{ route('store.request') }}">
                @csrf
              <div class="mb-20">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="select-1"
                      >Who will be install system?</label
                    >
                    <select class="form-control" id="select-1" name="who_install">
                      <option value="local contractor">local contractor</option>
                      <option value="foreign contractor">foreign contractor</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="select-2"
                      >System completed by?</label
                    >
                    <select class="form-control" id="select-2" name="system_complete">
                      <option value="3:6 months">3:6 months</option>
                      <option value="6:12 months">6:12 months</option>
                      <option value="12:24 months">12:24 months</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-usage"
                      >Monthly electric usage in kWh?</label
                    >
                    <input
                      class="form-control"
                      type="text"
                      id="contact-usage"
                      name="usage"
                      placeholder="1254 KWH"
                      required=""
                    />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="select-3"
                      >Solar system type?</label
                    >
                    <select class="form-control" id="select-3" name="system_type">
                      <option value="OffGrid">OffGrid</option>
                      <option value="OnGrid">OnGrid</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="select-4"
                      >Solar panels place?</label
                    >
                    <select class="form-control" id="select-4" name="panels_place">
                      <option value="huge farm">huge farm</option>
                      <option value="small farm">small farm</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="select-5"
                      >Materials on your roof?</label
                    >
                    <select class="form-control" id="select-5" name="your_roof">
                      <option value="comp shingle">comp shingle</option>
                      <option value="roof shingle">roof shingle</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="contact-projects"
                      >Tell us about your project
                    </label>
                    <textarea
                      class="form-control"
                      id="contact-projects"
                      placeholder="Add other data"
                      name="message"
                      cols="30"
                      rows="10"
                    >
                    </textarea>
                  </div>
                </div>
              </div>
              <div class="mb-20">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-first-name"
                      >First name</label
                    >
                    <input
                      class="form-control"
                      type="text"
                      id="contact-first-name"
                      name="first_name"
                      placeholder="Mahmoud"
                      required=""
                    />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-last-name"
                      >Last name</label
                    >
                    <input
                      class="form-control"
                      type="text"
                      id="contact-last-name"
                      name="last_name"
                      placeholder="Adel"
                      required=""
                    />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-phone"
                      >Phone</label
                    >
                    <input
                      class="form-control"
                      type="text"
                      id="contact-phone"
                      name="phone"
                      placeholder="Phone"
                      required=""
                    />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-email"
                      >Email</label
                    >
                    <input
                      class="form-control"
                      type="email"
                      id="contact-email"
                      name="email"
                      placeholder="Email"
                      required=""
                    />
                  </div>
                </div>
              </div>
              <div class="mb-20">
                <div class="row">
                  <div class="col-12">
                    <label class="form-label"
                      >Preferred Contact Method</label
                    >
                    <div class="custom-radio-group" id="custom-radio-group">
                      <div class="custom-control">
                        <input
                          class="custom-control-input"
                          type="radio"
                          id="customRadioInline1"
                          data-id="all-check"
                          data-value="all"
                          name="prefer_contact"
                        />
                        <label for="customRadioInline1">all</label>
                      </div>
                      <div class="custom-control">
                        <input
                          class="custom-control-input"
                          type="radio"
                          id="customRadioInline2"
                          data-id="email-check"
                          data-value="email"

                          name="prefer_contact"
                        />
                        <label for="customRadioInline2">email</label>
                      </div>
                      <div class="custom-control">
                        <input
                          class="custom-control-input"
                          type="radio"
                          id="customRadioInline3"
                          data-id="phone-check"
                          data-value="phone"

                          name="prefer_contact"
                        />
                        <label for="customRadioInline3">phone</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-12">
                    <label class="form-label" for="contact-address"
                      >Street address</label
                    >
                    <input
                      class="form-control"
                      type="text"
                      id="contact-address"
                      name="address"
                      placeholder="write street address"
                      required=""
                    />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-city"
                      >City</label
                    >
                    <input
                      class="form-control"
                      type="text"
                      id="contact-city"
                      name="city"
                      placeholder="write city"
                      required=""
                    />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="select-6">State</label>
                    <select class="form-control" id="select-6" name="state">
                      <option value="Alabama">Alabama</option>
                      <option value="New york">New york</option>
                      <option value="california">california</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-zip"
                      >ZIP code</label
                    >
                    <input
                      class="form-control"
                      type="text"
                      id="zip"
                      name="zip"
                      placeholder="2145"
                      required=""
                    />
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="select-7">Country</label>
                    <select class="form-control" id="select-7" name="country">
                      <option value="default">United states</option>
                      <option value="AL">England</option>
                      <option value="ger">germany</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="select-8"
                      >Ship to address type</label
                    >
                    <select class="form-control" id="select-8">
                      <option value="default">commercial</option>
                      <option value="AL">other</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <div
                      class="custom-radio-group"
                      id="custom-radio-group-2"
                    >
                      <div class="custom-control">
                        <input
                          class="custom-control-input"
                          type="radio"
                          id="customRadioInline4"
                          name="customRadioInline4"
                        />
                        <label for="customRadioInline4"
                          >i agree to the
                          <a href="javascript:void(0)"
                            >terms and conditions
                          </a></label
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-12">
                    <button class="btn btn--secondary w-100" btn-submit type="submit">
                      submit request <i class="energia-arrow-right"></i>
                    </button>
                  </div>
                  <div class="col-12">
                    <div class="contact-result"></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


  <script>

var allChecked = $('#customRadioInline1').data('value')
        if(allChecked.checked) {
            console.log('dasda');
        }


    function addScript(){
        $(document).on('submit', 'Form#addForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#addForm').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                method : 'POST',
                beforeSend: function () {
                    $('#addButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                        ' ></span> <span style="margin-left: 4px;">انتظر ..</span>').attr('disabled', true);
                },
                success: function (data) {
                    if (data.status == 200) {
                        alert('Success')
                        window.ajax.reload();

                    } else if(data.status == 405){
                       alert('Error')
                    }
                    else
                        toastr.error('هناك خطأ ما ..');
                    $('#addButton').html(`اضافة`).attr('disabled', false);
                    $('#editOrCreate').modal('hide')
                },
                // error: function (data) {
                //             //e ewe
                //     } else {
                //         //asaa
                //     }

                // },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    }
  </script>

@endsection
