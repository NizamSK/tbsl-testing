    @extends('website.common.main')

    @section('content')
    <section class="main-banner">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-0">
                    <div class="banner-slider h-100">
                        <img src="{{ asset('website/assets/images/lysaght/banner.jpg') }}" alt="Banner" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center py-5 ps-lg-4 ps-xxl-5" id="contact">
                    <div class="main-form banner-form">
                        <form action="{{ route('lysaght.store') }}" method="post">
                        @csrf
                        <h2 class="sec-title md bold mb-5">Enquire About Reliable Roofing and Wall Cladding Solutions for Your Industry</h2>
                        @if (session()->has('message'))
                            <div class="alert {{ session()->get('alert-class') }}">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="finput required" required placeholder="Type Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Phone No</label>
                                <input type="number" name="phone" value="{{ old('phone') }}" class="finput required" required placeholder="Type Phone No">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Email ID</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="finput required" required placeholder="Type Email ID">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Profession</label>
                                <select name="profession" class="finput required" required>
                                    <option value="">Select Profession</option>
                                    <option>Student</option>
                                    <option>Government Employee</option>
                                    <option>Private Employee</option>
                                </select>
                                @error('profession')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Select Products</label>
                                <select name="product" class="finput required" required>
                                    <option value="">Select Products</option>
                                    <option @selected(old('product') == 'Roof & Wall Cladding')>Roof & Wall Cladding</option>
                                    <option @selected(old('product') == 'Purlins & Girts')>Purlins & Girts</option>
                                    <option @selected(old('product') == 'Decking System')>Decking System</option>
                                    <option @selected(old('product') == 'ILIOS Solar Module Mounting Structure')>ILIOS Solar Module Mounting Structure</option>
                                    <option @selected(old('product') == 'Insulated Roof Systems')>Insulated Roof Systems</option>
                                    <option @selected(old('product') == 'Accessories')>Accessories</option>
                                </select>
                                @error('product')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Quantity in Square feet</label>
                                <input type="text" name="quantity" value="{{ old('quantity') }}" class="finput" placeholder="Sqft">
                                @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Company Name</label>
                                <input type="text" name="company_name" value="{{ old('company_name') }}" class="finput" placeholder="Type Company Name">
                                @error('company_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Choose State</label>
                                <select name="state" id="state" class="finput required" required>
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
                                <select name="city" id="city" class="finput required" required></select>
                                @error('city')
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
                            <img src="{{ asset('website/assets/images/lysaght/about.jpg') }}" alt="About" class="img-fluid">
                            <img src="{{ asset('website/assets/images/lysaght/about2.jpg') }}" alt="About" class="img-fluid">
                            <img src="{{ asset('website/assets/images/lysaght/about3.jpg') }}" alt="About" class="img-fluid">
                            <img src="{{ asset('website/assets/images/lysaght/about4.jpg') }}" alt="About" class="img-fluid">
                        </div>
                        <div class="about-count">1</div>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-5">
                    <h2 class="sec-title mb-4 mb-xxl-5">Why you should trust Lysaght<sup>&reg;</sup></h2>
                    <ul class=" ps-0 mb-4 mb-xxl-5 about-points">
                        <li class="desc lg bg-white px-3 px-lg-4 py-3 mb-3 br10 active">Global legacy of over 150 years and the trust of TATA</li>
                        <li class="desc lg bg-white px-3 px-lg-4 py-3 mb-3 br10">Design engineering and leak-proof performance</li>
                        <li class="desc lg bg-white px-3 px-lg-4 py-3 mb-3 br10">Value-Added Services – Roof Diagnostics & AMC</li>
                        <li class="desc lg bg-white px-3 px-lg-4 py-3 mb-3 br10">360° Solution - Design, Manufacturing, and Construction</li>
                    </ul>
                    <a href="#contact" class="common-btn">Contact Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="primary-bg text-center value text-white overflow-hidden py-5">
        <div class="container">
            <h2 class="sec-title mb-5 text-white">Get roofing solutions built to last</h2>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row text-start justify-content-center">
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/lysaght/icon1.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Stylish and durable</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/lysaght/icon2.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Insulated roof with thermal efficiency</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/lysaght/icon3.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Comfortable and energy-saving </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-lg-5 px-lg-4">
                            <div class="value-box h-100 d-flex align-items-center p-3 p-lg-4">
                                <img src="{{ asset('website/assets/images/lysaght/icon4.svg') }}" alt="Icon" class="img-fluid me-2 me-md-3 me-lg-4">
                                <div class="subtitle">Wide range to fit every need</div>
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
                <div class="ptabs text-center">
                    <a href="javascript:;" class="active">Roof Purlins  & Girts</a>
                    <a href="javascript:;">Roof and Wall Cladding</a>
                    <a href="javascript:;">Insulated Roof Systems</a>
                    <a href="javascript:;">Decking System</a>
                    <a href="javascript:;">Accessories</a>
                    <a href="javascript:;">ILIOS®</a>
                </div>
            </div>
            <!-- <div class="d-none d-lg-block" style="height: 50px;"></div> -->
            <div class="pcontent-wrap text-center pt-5" id="pcontent-wrap">
                <div class="pcontent" style="display: block;">
                    <img src="{{ asset('website/assets/images/lysaght/product1.jpg') }}" alt="Product" class="img-fluid mb-4 mb-lg-5"><br>
                    <a href="#contact" class="common-btn">Contact Now</a>
                </div>
                <div class="pcontent">
                    <img src="{{ asset('website/assets/images/lysaght/product2.jpg') }}" alt="Product" class="img-fluid mb-4 mb-lg-5"><br>
                    <a href="#contact" class="common-btn">Contact Now</a>
                </div>
                <div class="pcontent">
                    <img src="{{ asset('website/assets/images/lysaght/product3.jpg') }}" alt="Product" class="img-fluid mb-4 mb-lg-5"><br>
                    <a href="#contact" class="common-btn">Contact Now</a>
                </div>
                <div class="pcontent">
                    <img src="{{ asset('website/assets/images/lysaght/product4.jpg') }}" alt="Product" class="img-fluid mb-4 mb-lg-5"><br>
                    <a href="#contact" class="common-btn">Contact Now</a>
                </div>
                <div class="pcontent">
                    <img src="{{ asset('website/assets/images/lysaght/product5.jpg') }}" alt="Product" class="img-fluid mb-4 mb-lg-5"><br>
                    <a href="#contact" class="common-btn">Contact Now</a>
                </div>
                <div class="pcontent">
                    <img src="{{ asset('website/assets/images/lysaght/product6.jpg') }}" alt="Product" class="img-fluid mb-4 mb-lg-5"><br>
                    <a href="#contact" class="common-btn">Contact Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="primary-bg text-center text-white overflow-hidden py-5 brochures">
        <div class="container">
            <h2 class="sec-title mb-5 text-white">Customised roofing for all projects</h2>
            <p class="subtitle mb-5">We provide value engineering through roofing solutions for diverse industries and professionals:</p>
            <div class="row mb-2">
                <div class="col-sm-6 col-md-3 mb-4">
                    <img src="{{ asset('website/assets/images/lysaght/brochure1.jpg') }}" alt="Brochure" class="img-fluid mb-3">
                    <p class="desc md mb-0">Manufacturing facilities</p>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <img src="{{ asset('website/assets/images/lysaght/brochure2.jpg') }}" alt="Brochure" class="img-fluid mb-3">
                    <p class="desc md mb-0">Metro projects</p>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <img src="{{ asset('website/assets/images/lysaght/brochure3.jpg') }}" alt="Brochure" class="img-fluid mb-3">
                    <p class="desc md mb-0">Educational buildings</p>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <img src="{{ asset('website/assets/images/lysaght/brochure4.jpg') }}" alt="Brochure" class="img-fluid mb-3">
                    <p class="desc md mb-0">Re-roofing projects</p>
                </div>
            </div>
            <a class="common-btn" href="#contact">Contact Now</a>
        </div>
    </section>
    <!-- <section class="primary-bg text-center text-white overflow-hidden py-5" id="projects">
        <div class="container">
            <h2 class="sec-title mb-5 text-white">Heading</h2>
            <p class="subtitle mb-5">Lorem ipsum dolor sit amet consectetur. Varius venenatis libero in nunc.</p>
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/6hZdU-n2Q38?si=-C6Iqwm37yrk8Tz-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <a class="common-btn mt-5" href="#contact">Contact Now</a>
        </div>
    </section> -->
    <!-- <section class="primary-bg text-center text-white overflow-hidden py-5" id="projects">
        <div class="container">
            <h2 class="sec-title mb-5 text-white">Our Projects</h2>
            <p class="subtitle mb-5">Lorem ipsum dolor sit amet consectetur. Varius venenatis libero in nunc.</p>
            <div class="project-slider">
                <div>
                    <img src="{{ asset('website/assets/images/lysaght/project1.jpg') }}" alt="Project" class="w-100 mb-2">
                    <p class="subtitle">Insulated Roof Systems</p>
                </div>
                <div>
                    <img src="{{ asset('website/assets/images/lysaght/project2.jpg') }}" alt="Project" class="w-100 mb-2">
                    <p class="subtitle">Products Range Roof & wall cladding sheets</p>
                </div>
                <div>
                    <img src="{{ asset('website/assets/images/lysaght/project3.jpg') }}" alt="Project" class="w-100 mb-2">
                    <p class="subtitle">Purlins and Girts</p>
                </div>
                <div>
                    <img src="{{ asset('website/assets/images/lysaght/project4.jpg') }}" alt="Project" class="w-100 mb-2">
                    <p class="subtitle">Decking System</p>
                </div>
                <div>
                    <img src="{{ asset('website/assets/images/lysaght/project5.jpg') }}" alt="Project" class="w-100 mb-2">
                    <p class="subtitle">ILIOS® – Solar Module Mounting Solutions</p>
                </div>
            </div>
            <a class="common-btn mt-4" href="#contact">Contact Now</a>
        </div>
    </section> -->

    <section class="py-5 case" id="case">
        <div class="container py-5">
            <div class="row flex-md-row-reverse align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('website/assets/images/lysaght/case.png') }}" alt="Case" class="img-fluid d-inline-block">
                </div>
                <div class="col-md-6">
                    <h2 class="sec-title mb-4">The Complete Package - From Design to Construction</h2>
                    <p class="subtitle mb-5">Lysaght<sup>&reg;</sup> offers a 360° solution covering everything from design and manufacture to construction. We are with you every step of the way, ensuring your project's success. </p>
                    <a class="common-btn" href="#contact">Contact Now</a>
                </div>
            </div>

        </div>
    </section>

    <section class="awards py-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7 mb-4 mb-md-0">
                    <div class="bg-white br20 text-center px-3 px-lg-5 py-4">
                        <div class="award-slider">
                            <div>
                                <img src="{{ asset('website/assets/images/lysaght/award1.png') }}" alt="Award" class="img-fluid d-inline-block">
                                <P class="subtitle"><em>Achievement Award for Construction Health, Safety and Environment by Construction Industry Development Council</em></P>
                            </div>
                            <div>
                                <img src="{{ asset('website/assets/images/lysaght/award2.png') }}" alt="Award" class="img-fluid d-inline-block">
                                <P class="subtitle"><em>Best Product under Roofing and Cladding category by Construction Times Awards 2017</em></P>
                            </div>
                            <div>
                                <img src="{{ asset('website/assets/images/lysaght/award3.png') }}" alt="Award" class="img-fluid d-inline-block">
                                <P class="subtitle"><em>Most Trusted Roofing Brand under Construction category by the 7th EPC World Awards</em></P>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 ps-lg-5 pe-lg-5">
                    <h2 class="sec-title text-white mb-4">Let's build together</h2>
                    <p class="subtitle text-white mb-0">Contact us today to learn more about our low-cost building construction solutions, PEB buildings, and warehouse construction options.</p>
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

