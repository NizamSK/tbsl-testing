@extends('website.common.main')

@section('content')
    <section class="main-banner">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-0">
                    <div class="banner-slider h-100">
                        <img src="{{ asset('website/assets/images/durashine/banner.jpg') }}" alt="Banner" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center py-5 ps-lg-4 ps-xxl-5" id="contact">
                    <div class="main-form banner-form">
                        <form action="{{ route('durashine.store') }}" method="post">
                        @csrf
                        <h2 class="sec-title md bold mb-5">Get a Free Quote on Innovative Metal Roofing and Wall Cladding</h2>
                        @if (session()->has('message'))
                            <div class="alert {{ session()->get('alert-class') }}">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="finput" placeholder="Type Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Phone No</label>
                                <input type="number" name="phone" value="{{ old('phone') }}" class="finput" placeholder="Type Phone No">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Email ID</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="finput" placeholder="Type Email ID">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Choose State</label>
                                <select name="state" id="state" class="finput">
                                    <option value="">Choose State</option>
                                    @foreach($data['states'] as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                                @error('state')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Choose City</label>
                                <select name="city" id="city" class="finput"></select>
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Choose product</label>
                                <select name="product" id="product" class="finput">
                                    <option value="">Choose Product</option>
                                    <option value="Roof Sheet"> Roof Sheet</option>
                                    <option value="Wall Sheets"> Wall Sheets </option>
                                    <option value="Tile"> Tile </option>
                                    <option value="Longline Crimp"> Longline Crimp </option>
                                    <option value="Liner"> Liner </option>
                                </select>
                                @error('product')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Quantity in Square feet</label>
                                <input type="text" name="quantity" value="{{ old('quantity') }}" class="finput">
                                @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Message</label>
                                <textarea name="message" id="message" class="finput ">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="common-btn">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about py-5" id="about">
        <div class="container py-lg-5">
            <div class="row flex-md-row-reverse">
                <div class="col-md-6 mb-4 mb-lg-0">
                    <div class="position-relative">
                        <div class="about-slider">
                            <img src="{{ asset('website/assets/images/durashine/about.jpg') }}" alt="About" class="img-fluid">
                            <img src="{{ asset('website/assets/images/durashine/about2.jpg') }}" alt="About" class="img-fluid">
                            <img src="{{ asset('website/assets/images/durashine/about3.jpg') }}" alt="About" class="img-fluid">
                        </div>
                        <div class="about-count">1</div>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-5">
                    <h2 class="sec-title mb-5">About the <strong>DURASHINE<sup>&reg;</sup></strong></h2>
                    <p class="subtitle mb-5 py-xl-5">Lorem ipsum dolor sit amet consectetur. Massa eu lorem viverra faucibus semper tellus nunc elit ullamcorper. Scelerisque mauris lacus ut donec aenean. Nunc elit amet fermentum dolor cras at ultricies non praesent. Urna feugiat at turpis.</p>
                    <a href="#contact" class="common-btn">Contact Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="primary-bg text-center text-white overflow-hidden value py-5">
        <div class="container">
            <h2 class="sec-title mb-5 text-white">Value Propositions</h2>
            <p class="subtitle mb-5">Lorem ipsum dolor sit amet consectetur. Varius venenatis libero in nunc.</p>
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="row text-start justify-content-center">
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/durashine/icon1.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Performs better during rains</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/durashine/icon2.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">High Strength with Load Bearing Capacity</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/durashine/icon3.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Cooler Interiors</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/durashine/icon4.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Better corrosion resistance ensures longer life</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/durashine/icon5.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Aesthetically Appealing</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/durashine/icon6.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Wide Product Range</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/durashine/icon7.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Mark of Genuinity</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/durashine/icon8.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Recommended Fabricators</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" id="products">
        <div class="container py-lg-5">
            <div class="text-center">
                <h2 class="sec-title mb-4 mb-lg-5">Our Products</h2>
                <p class="subtitle mb-5">Lorem ipsum dolor sit amet consectetur. Varius venenatis libero in nunc.</p>
                <div class="ptabs text-center">
                    <a href="javascript:;" class="active">Liner</a>
                    <a href="javascript:;">Roof Sheets & Wall sheets</a>
                    <a href="javascript:;">LongLine Crimp</a>
                    <a href="javascript:;">Tile</a>
                    <a href="javascript:;">Accessories</a>
                </div>
            </div>
            <!-- <div class="d-none d-lg-block" style="height: 50px;"></div> -->
            <div class="pcontent-wrap pt-5" id="pcontent-wrap">
                <div class="pcontent" style="display: block;">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0"><img src="{{ asset('website/assets/images/durashine/product1.jpg') }}" alt="Product" class="w-100"></div>
                        <div class="col-md-6">
                            <h3 class="sec-title mb-4">Liner</h3>
                            <p class="subtitle mb-4">Lorem ipsum dolor sit amet consectetur. Massa eu lorem viverra faucibus semper tellus nunc elit ullamcorper. Scelerisque mauris lacus ut donec aenean. Nunc elit amet fermentum dolor cras at ultricies non praesent. Urna feugiat at turpis.</p>
                            <a href="#contact" class="common-btn">Contact Now</a>
                        </div>
                    </div>
                </div>
                <div class="pcontent">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0"><img src="{{ asset('website/assets/images/durashine/product2.jpg') }}" alt="Product" class="w-100"></div>
                        <div class="col-md-6">
                            <h3 class="sec-title mb-4">Roof Sheets & Wall sheets</h3>
                            <p class="subtitle mb-4">Lorem ipsum dolor sit amet consectetur. Massa eu lorem viverra faucibus semper tellus nunc elit ullamcorper. Scelerisque mauris lacus ut donec aenean. Nunc elit amet fermentum dolor cras at ultricies non praesent. Urna feugiat at turpis.</p>
                            <a href="#contact" class="common-btn">Contact Now</a>
                        </div>
                    </div>
                </div>
                <div class="pcontent">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0"><img src="{{ asset('website/assets/images/durashine/product3.jpg') }}" alt="Product" class="w-100"></div>
                        <div class="col-md-6">
                            <h3 class="sec-title mb-4">LongLine Crimp</h3>
                            <p class="subtitle mb-4">Lorem ipsum dolor sit amet consectetur. Massa eu lorem viverra faucibus semper tellus nunc elit ullamcorper. Scelerisque mauris lacus ut donec aenean. Nunc elit amet fermentum dolor cras at ultricies non praesent. Urna feugiat at turpis.</p>
                            <a href="#contact" class="common-btn">Contact Now</a>
                        </div>
                    </div>
                </div>
                <div class="pcontent">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0"><img src="{{ asset('website/assets/images/durashine/product4.jpg') }}" alt="Product" class="w-100"></div>
                        <div class="col-md-6">
                            <h3 class="sec-title mb-4">Tile</h3>
                            <p class="subtitle mb-4">Lorem ipsum dolor sit amet consectetur. Massa eu lorem viverra faucibus semper tellus nunc elit ullamcorper. Scelerisque mauris lacus ut donec aenean. Nunc elit amet fermentum dolor cras at ultricies non praesent. Urna feugiat at turpis.</p>
                            <a href="#contact" class="common-btn">Contact Now</a>
                        </div>
                    </div>
                </div>
                <div class="pcontent">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0"><img src="{{ asset('website/assets/images/durashine/product5.jpg') }}" alt="Product" class="w-100"></div>
                        <div class="col-md-6">
                            <h3 class="sec-title mb-4">Accessories</h3>
                            <p class="subtitle mb-4">Lorem ipsum dolor sit amet consectetur. Massa eu lorem viverra faucibus semper tellus nunc elit ullamcorper. Scelerisque mauris lacus ut donec aenean. Nunc elit amet fermentum dolor cras at ultricies non praesent. Urna feugiat at turpis.</p>
                            <a href="#contact" class="common-btn">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="primary-bg text-center text-white overflow-hidden py-5 brochures">
        <div class="container">
            <h2 class="sec-title mb-5 text-white">Product brochures</h2>
            <p class="subtitle mb-5">Lorem ipsum dolor sit amet consectetur. Varius venenatis libero in nunc.</p>
            <div class="row mb-2">
                <div class="col-sm-6 col-md-3 mb-4">
                    <img src="{{ asset('website/assets/images/durashine/brochure1.jpg') }}" alt="Brochure" class="img-fluid mb-3">
                    <p class="desc md mb-0">Material Storage & Installation Guidelines</p>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <img src="{{ asset('website/assets/images/durashine/brochure2.jpg') }}" alt="Brochure" class="img-fluid mb-3">
                    <p class="desc md mb-0">Proactive Roof Care Guidelines</p>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <img src="{{ asset('website/assets/images/durashine/brochure3.jpg') }}" alt="Brochure" class="img-fluid mb-3">
                    <p class="desc md mb-0">LongLine Crimp 4 Pager</p>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <img src="{{ asset('website/assets/images/durashine/brochure4.jpg') }}" alt="Brochure" class="img-fluid mb-3">
                    <p class="desc md mb-0">Roof and wall single pager</p>
                </div>
            </div>
            <a class="common-btn" href="#contact">Contact Now</a>
        </div>
    </section>

    <!-- <section class="py-5 case text-center" id="case">
        <div class="container py-5">
            <h2 class="sec-title mb-4">Case Studies</h2>
            <p class="subtitle mb-5">Lorem ipsum dolor sit amet consectetur. Varius venenatis libero in nunc.</p>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="case-box p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <img src="{{ asset('website/assets/images/durashine/case1.jpg') }}" alt="Case" class="img-fluid mb-2">
                            <div class="subtitle"><em>Veeline Media Limited, Surat</em></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="case-box p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <img src="{{ asset('website/assets/images/durashine/case2.jpg') }}" alt="Case" class="img-fluid mb-2">
                            <div class="subtitle"><em>Building Stories; Spanning Capabilities</em></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="case-box p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <img src="{{ asset('website/assets/images/durashine/case3.jpg') }}" alt="Case" class="img-fluid mb-2">
                            <div class="subtitle"><em>JSW</em></div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="common-btn mt-4" href="#contact">Contact Now</a>

        </div>
    </section> -->

    <section class="awards py-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7 mb-4 mb-md-0">
                    <div class="primary-bg br20 text-center text-white px-3 py-4">
                        <img src="{{ asset('website/assets/images/durashine/award1.png') }}" alt="Award" class="img-fluid m-3">
                        <img src="{{ asset('website/assets/images/durashine/award2.png') }}" alt="Award" class="img-fluid m-3">
                        <img src="{{ asset('website/assets/images/durashine/award3.png') }}" alt="Award" class="img-fluid m-3">
                        <img src="{{ asset('website/assets/images/durashine/award4.png') }}" alt="Award" class="img-fluid m-3">
                        <img src="{{ asset('website/assets/images/durashine/award5.png') }}" alt="Award" class="img-fluid m-3">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 ps-lg-5 pe-lg-5">
                    <h2 class="sec-title mb-4">Awards & Recognition</h2>
                    <p class="subtitle mb-0">Lorem ipsum dolor sit amet consectetur. Varius venenatis libero in nunc.</p>
                    <a class="common-btn mt-4" href="#contact">Contact Now</a>
                </div>
            </div>
        </div>
    </section>


@endsection()
@section('custom_script')
    <script type="text/javascript">
        $('#state').change(function(){
            $('#city').html('');
            var state = $('#state').val();
            $.ajax({
                'type':'POST',
                'url' : "{{ route('cities.by.stateid') }}" ,
                data: {'_token': '{{ csrf_token() }}',state_id:state},
                beforeSend:function(){
                    $('#loading').html('<small class="text text-danger">Fetching....</small>');
                },
                success:function(response){
                    $('#city').html('<option value="">Select City</option>');
                    if(response.length > 0){
                        $.each(response, function (key, value) {
                            $('#city').append('<option value="'+value.id+'"> ' + value.name +  '</option>');
                        });
                    }
                }
            });
        })
    </script>
@endsection()
