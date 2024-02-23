@extends('website.common.main')

@section('content')
<section class="main-banner-lys position-relative">
    <div class="banner-slider">
        {{-- <img class="img-fluid" src="{{asset('website/assets/images/lysaght/banner2.jpg')}}" alt="Banner"> --}}
        <img class="img-fluid" src="{{asset('website/assets/images/lysaght/banner7.jpg')}}" alt="Banner">
        <img class="img-fluid" src="{{asset('website/assets/images/lysaght/banner3.jpg')}}" alt="Banner">
        <img class="img-fluid" src="{{asset('website/assets/images/lysaght/banner4.jpg')}}" alt="Banner">
        <img class="img-fluid" src="{{asset('website/assets/images/lysaght/banner6.jpg')}}" alt="Banner">
    </div>
    <img src="{{asset('website/assets/images/lysaght/banner-bg.svg')}}" alt="Banner bg" class="brand">
    <div class="container position-relative py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-0">
                <div class="banner-caption">
                    {{-- <div class="pe-4">
                        <img src="{{asset('website/assets/images/lysaght/shelterforall.svg')}}" alt="Shelter for all" class="img-fluid mb-3 mb-lg-4">
                    </div> --}}
                    <h1 class="btitle text-white mb-4">One-Stop Solution For All Your Roof and Wall Cladding Needs</h1>
                    {{-- <p class="subtitle text-white mb-4 mb-xl-5">Our Promise: Your Peace of Mind</p> --}}
                    <div class="d-flex align-items-center mb-3 mb-lg-4">
                        <img class="me-2 me-sm-3" src="{{asset('website/assets/images/banner-icon1.svg')}}" alt="Icon" width="60" height="60">
                        <div class="desc md text-white">Design and Engineering Excellence</div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-lg-4">
                        <img class="me-2 me-sm-3" src="{{asset('website/assets/images/banner-icon2.svg')}}" alt="Icon" width="60" height="60">
                        <div class="desc md text-white">150 years of Legacy and Trust</div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-lg-4">
                        <img class="me-2 me-sm-3" src="{{asset('website/assets/images/banner-icon3.svg')}}" alt="Icon" width="60" height="60">
                        <div class="desc md text-white">Global Safety Benchmarks</div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-lg-4">
                        <img class="me-2 me-sm-3" src="{{asset('website/assets/images/banner-icon4.svg')}}" alt="Icon" width="60" height="60">
                        <div class="desc md text-white">Advanced Multi-locational Manufacturing Capabilities</div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-lg-4">
                        <img class="me-2 me-sm-3" src="{{asset('website/assets/images/banner-icon5.png')}}" alt="Icon" width="60" height="60">
                        <div class="desc md text-white">In-built with Energy Efficient Technology</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center pe-lg-0" id="contact">
                <div class="main-form lys-form px-3 px-lg-4 py-4">
                    <form action="{{ route('lysaght.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="utm_source" value="{{ request()->get('utm_source') }}">
                    <input type="hidden" name="utm_medium" value="{{ request()->get('utm_medium') }}">
                    <input type="hidden" name="utm_campaign" value="{{ request()->get('utm_campaign') }}">
                    <input type="hidden" name="utm_term" value="{{ request()->get('utm_term') }}">
                    <input type="hidden" name="utm_content" value="{{ request()->get('utm_content') }}">
                    <input type="hidden" name="fbclid" value="{{ request()->get('fbclid') }}">
                    <input type="hidden" name="gcid" value="{{ request()->get('gclid') }}">

                    <h2 class="sec-title md bold text-white mb-4">To get the best solution reach out to LYSAGHT<sup>&reg;</sup> by filling this form</h2>
                    @if (session()->has('message'))
                        <div class="alert {{ session()->get('alert-class') }}">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" class="finput required" required placeholder="Type Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phone No <span class="text-danger">*</span></label>
                            <input type="number" name="phone" value="{{ old('phone') }}" class="finput required" required placeholder="Type Phone No">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email ID <span class="text-danger">*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}" class="finput required" required placeholder="Type Email ID">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Profession <span class="text-danger">*</span></label>
                            <select name="profession" class="finput required" required>
                                <option value="">Select Profession</option>
                                <option {{ (old("profession") == 'Student' ? "selected":"") }}>Student</option>
                                <option {{ (old("profession") == 'Government Employee' ? "selected":"") }}>Government Employee</option>
                                <option {{ (old("profession") == 'Private Employee' ? "selected":"") }}>Private Employee</option>
                            </select>
                            @error('profession')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label>Select Products <span class="text-danger">*</span></label>
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
                            <label>Quantity in Square feet <span class="text-danger">*</span></label>
                            <input type="text" name="quantity" value="{{ old('quantity') }}" class="finput" placeholder="Sqft">
                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="col-md-12 mb-3">
                            <label>Company Name <span class="text-danger">*</span></label>
                            <input type="text" name="company_name" value="{{ old('company_name') }}" class="finput" placeholder="Type Company Name">
                            @error('company_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Choose State <span class="text-danger">*</span></label>
                            <select name="state" id="state" class="finput required" required>
                                <option value="">Choose State</option>
                                @foreach($data['states'] as $state)
                                    <option {{ (old("state") == $state->id ? "selected":"") }} value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                            @error('state')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Choose City <span class="text-danger">*</span></label>
                            @if(old('city'))
                                <select name="city" id="city" class="finput required" required>
                                    @foreach($data['cities'] as $city)
                                        <option {{ (old("city") == $city->id ? "selected":"") }} value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            @else
                                    <select name="city" id="city" class="finput required" required>
                                        <option value="">Select city</option>
                                    </select>
                            @endif

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
                        <div class="col-md-12 text-center text-md-start">
                            <button type="submit" class="common-btn">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>
<section class="counter-sec pt-5 mt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="h-100 py-3 py-lg-4 px-4 counter-single">
                    <h3 class="number mb-2">150+</h3>
                    <p class="ndesc">Years of Manufacturing Excellence</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="h-100 py-3 py-lg-4 px-4 counter-single">
                    <h3 class="number mb-2">120+</h3>
                    <p class="ndesc">Projects Executed</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="h-100 py-3 py-lg-4 px-4 counter-single">
                    <h3 class="number mb-2">100+</h3>
                    <p class="ndesc">Reputed Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about lys bg-white py-5" id="about">
    <div class="container py-lg-5">
        <h2 class="sec-title mb-4 mb-xl-5 text-center">Why Lysaght<sup>&reg;</sup> Is <span class="grad-text">The Ultimate</span> <span class="grad-text">Choice</span></h2>
        <div class="row justify-content-between mb-4">
            <div class="col-lg-6 col-xl-5 mb-4 mb-lg-0 pe-xl-0">
                <img src="{{asset('website/assets/images/lysaght/why-img.jpg')}}" alt="Why Img" class="w-100 h-100 object-fit-cover br30">
            </div>
            <div class="col-lg-6 text-center text-md-start">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="why-single h-100 p-4 br10">
                            <img src="{{asset('website/assets/images/lysaght/why-icon1.png')}}" alt="Why Icon" class="mb-3 mb-lg-4">
                            <p class="desc md text-white">150 Years of Global Legacy</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="why-single h-100 green p-4 br10">
                            <img src="{{asset('website/assets/images/lysaght/why-icon2.png')}}" alt="Why Icon" class="mb-3 mb-lg-4">
                            <p class="desc md text-white">Design Engineering and Leak-Proof Performance</p>
                        </div>
                    </div>
                </div>
                <div class="row flex-md-row-reverse">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="why-single h-100 p-4 br10">
                            <img src="{{asset('website/assets/images/lysaght/why-icon3.png')}}" alt="Why Icon" class="mb-3 mb-lg-4">
                            <p class="desc md text-white">360° Solution - Design, Manufacturing, & Construction</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="why-single h-100 green p-4 br10">
                            <img src="{{asset('website/assets/images/lysaght/why-icon4.png')}}" alt="Why Icon" class="mb-3 mb-lg-4">
                            <p class="desc md text-white">Value-Added Services – Roof Diagnostics & AMC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center"><a href="#contact" class="common-btn common-btn2">Contact Now</a></div>
    </div>
</section>
<section class="py-5 case lys" id="case">
    <div class="container py-lg-5">
        <div class="row">
            <div class="col-xl-11">
                <div class="row mt-5 ptabs-wrap flex-md-row-reverse">
                    <div class="col-md-6 pe-xl-5">
                        <h2 class="sec-title mb-4 text-center text-md-start">The Complete Package - From Design to Construction</h2>
                        <div class="d-flex flex-wrap flex-row flex-md-column justify-content-center justify-content-md-start ptabs package lys">
                            <a class="d-flex align-items-center justify-content-between active" href="javascript:;">On-Time Project Delivery
                                <img src="{{asset('website/assets/images/lysaght/package-icon1.png')}}" alt="Package" class="ms-2">
                            </a>
                            <a class="d-flex align-items-center justify-content-between" href="javascript:;">World Class Safety Practices and Processes
                                <img src="{{asset('website/assets/images/lysaght/package-icon2.png')}}" alt="Package" class="ms-2">
                            </a>
                            <a class="d-flex align-items-center justify-content-between" href="javascript:;">Proactive Roof Diagnostics
                                <img src="{{asset('website/assets/images/lysaght/package-icon3.png')}}" alt="Package" class="ms-2">
                            </a>
                            <a class="d-flex align-items-center justify-content-between mb-0" href="javascript:;">AMC (Annual Maintenance Contract)
                                <img src="{{asset('website/assets/images/lysaght/package-icon4.png')}}" alt="Package" class="ms-2">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pcontent-wrap h-100" id="pcontent-wrap">
                            <div class="pcontent h-100" style="display: block;">
                                <img src="{{ asset('website/assets/images/lysaght/package1.jpg') }}" alt="Package" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="pcontent h-100">
                                <img src="{{ asset('website/assets/images/lysaght/package2.jpg') }}" alt="Package" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="pcontent h-100">
                                <img src="{{ asset('website/assets/images/lysaght/package3.jpg') }}" alt="Package" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="pcontent h-100">
                                <img src="{{ asset('website/assets/images/lysaght/package4.jpg') }}" alt="Package" class="w-100 h-100 object-fit-cover">
                            </div>
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
            <h2 class="sec-title mb-2">Our Offerings</h2>
            <p class="subtitle mb-5">We provide valuable engineering expertise through our roof and wall cladding solutions for diverse industry sectors</p>
        </div>
        <div class="row mt-5 ptabs-wrap">
            <div class="col-md-6 pe-xl-5">
                <div class="d-flex flex-wrap flex-row flex-md-column justify-content-center justify-content-md-start ptabs lys">
                    <a href="javascript:;" class="active">Roof and Wall Cladding</a>
                    <a href="javascript:;">Roof Purlins & Girts</a>
                    <a href="javascript:;">Insulated Roof Systems</a>
                    <a href="javascript:;">Decking System</a>
                    <a href="javascript:;">ILIOS<sup>&reg;</sup></a>
                    <a href="javascript:;">Accessories</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pcontent-wrap" id="pcontent-wrap">
                    <div class="pcontent" style="display: block;">
                        <img src="{{ asset('website/assets/images/lysaght/product2.jpg') }}" alt="Product" class="img-fluid mb-4"><br>
                        <p class="desc mb-4">The LYSAGHT<sup>&reg;</sup> range of colour coated roof and wall cladding profiles from Tata BluesScope Steel are suitable for a variety of applications and design considerations. The roof and wall cladding profiles are manufactured from high strength ZINCALUME<sup>&reg;</sup> steel and COLORBOND<sup>&reg;</sup> steel exhibiting wider spanning capabilities with better uplift performance. Aesthetic appearance, longer life, environment-friendly, capability of sustaining high wind, and impact load, are some of the benefits of the LYSAGHT<sup>&reg;</sup> roof and wall cladding sheets.</p>
                        <div class="text-center text-md-start"><a href="#contact" class="common-btn common-btn2">Explore</a></div>
                    </div>
                    <div class="pcontent">
                        <img src="{{ asset('website/assets/images/lysaght/product1.jpg') }}" alt="Product" class="img-fluid mb-4"><br>
                        <p class="desc mb-4">LYSAGHT<sup>&reg;</sup> Roof Purlins and Girts are light-weight structural steel members, designed in accordance with the As/Nzs 4600: 1996 Cold Formed Steel Structures, utilising high Strength Zinc-coated Steel. Available in ZED-plus™ Sections, these roof purlins can be used over single spans or un-lapped and lapped continuous spans in multi-bay buildings. Lapped continuous spans result in considerable capacity increase in the system. LYSAGHT<sup>&reg;</sup> CEE-plus™ Sections may be used in single spans, and un-lapped continuous spans in multi-bay building, and are ideal as eave purlins or where compact sections are required for detailing.</p>
                        <div class="text-center text-md-start"><a href="#contact" class="common-btn common-btn2">Explore</a></div>
                    </div>
                    <div class="pcontent">
                        <img src="{{ asset('website/assets/images/lysaght/product3.jpg') }}" alt="Product" class="img-fluid mb-4"><br>
                        <p class="desc mb-4">LYSAGHT<sup>&reg;</sup> profiles can be used in Single Skin and Double skin Insulated Roof systems. LYSAGHT<sup>&reg;</sup> roof and wall systems provide superior energy efficiency combined with aesthetic looks for the commercial construction sector. These systems are dependent on specific requirements and can be tailored to suit the thermal, acoustic, ventilation or economic requirements. Below are some Typical Insulated roof systems with LYSAGHT<sup>&reg;</sup> roof profiles.</p>
                        <div class="text-center text-md-start"><a href="#contact" class="common-btn common-btn2">Explore</a></div>
                    </div>
                    <div class="pcontent">
                        <img src="{{ asset('website/assets/images/lysaght/product4.jpg') }}" alt="Product" class="img-fluid mb-4"><br>
                        <p class="desc mb-4">Structural decking sheets in form of Smartdek and Ezydek are innovative systems specially developed for Indian construction fraternity. Structural Decking is an economic steel formwork deck that provides a stable and safe working platform to allow wet concrete to be poured. Structural Decking also acts as a tensile reinforcement imparting strength to the concrete slab. The steel decking sheets are suitable for all forms of construction – masonry, steel frame, concrete frame & all segments – Infrastructural, industrial, commercial & residential.</p>
                        <div class="text-center text-md-start"><a href="#contact" class="common-btn common-btn2">Explore</a></div>
                    </div>
                    <div class="pcontent">
                        <img src="{{ asset('website/assets/images/lysaght/product5.jpg') }}" alt="Product" class="img-fluid mb-4"><br>
                        <p class="desc mb-4">The selection of right accessories is as critical as choosing the right roof and walling material. We supply high-quality accessories that not only match, but are also compatible with our cladding material. They ensure longevity, are weatherproof as well as leak-proof and enhance aesthetics of the buildings.</p>
                        <div class="text-center text-md-start"><a href="#contact" class="common-btn common-btn2">Explore</a></div>
                    </div>
                    <div class="pcontent">
                        <img src="{{ asset('website/assets/images/lysaght/product6.jpg') }}" alt="Product" class="img-fluid mb-4"><br>
                        <p class="desc mb-4">ILIOS<sup>&reg;</sup> offers premium solar module mounting solutions for ground and roof-top applications. These customised solar mounting systems are manufactured from cold rolled Zn-Al / Zn coated steel and offer higher corrosion resistance, weight optimisation and quick installation. ILIOS<sup>&reg;</sup> offers a complete solar mounting solution for executing turnkey solar power projects that includes design detailing, engineering support, installation and material supply. LYSAGHT<sup>&reg;</sup> multi-locational manufacturing facilities ensure on-time project delivery.</p>
                        <div class="text-center text-md-start"><a href="#contact" class="common-btn common-btn2">Explore</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="d-none d-lg-block" style="height: 50px;"></div> -->

    </div>
</section>
<section class="text-center overflow-hidden py-5 sol-sec" style="background-color: #EBEBEB">
    <div class="container">
        <h2 class="sec-title mb-4">Customised Roof and Wall Cladding Solutions For All Your Needs</h2>
        <p class="subtitle mb-5">We offer valuable engineering solutions for a variety of industry sectors through our expertise in roof and wall cladding solutions.</p>
        <div class="row mb-2">
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('website/assets/images/lysaght/brochure1.jpg') }}" alt="Brochure" class="img-fluid br10 mb-3">
                <p class="desc md mb-0">Manufacturing Facilities</p>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('website/assets/images/lysaght/brochure2.jpg') }}" alt="Brochure" class="img-fluid br10 mb-3">
                <p class="desc md mb-0">Metro Projects</p>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('website/assets/images/lysaght/brochure3.jpg') }}" alt="Brochure" class="img-fluid br10 mb-3">
                <p class="desc md mb-0">Warehouses</p>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('website/assets/images/lysaght/brochure4.jpg') }}" alt="Brochure" class="img-fluid br10 mb-3">
                <p class="desc md mb-0">Re-roofing Projects</p>
            </div>
        </div>
        <a class="common-btn common-btn2" href="#contact">Enquire Now</a>
    </div>
</section>
<section class="value overflow-hidden py-5 lys-solution sol2" style="background-color: #F5F5F5">
    <div class="container">
        <h2 class="sec-title mb-5 text-center">Get Exclusive Roof and <span class="grad-text">Wall Cladding Solutions</span></h2>
        <div class="row justify-content-center text-center text-md-start">
            <div class="col-lg-6 mb-4 mb-lg-5 px-lg-4">
                <div class="value-box h-100 d-flex flex-column flex-md-row align-items-center align-items-md-start p-3 p-lg-4">
                    {{-- <div class="icon mb-2 mb-md-3 mb-lg-4 d-inline-flex align-items-center align-items-md-start justify-content-center"> --}}
                    <img src="{{ asset('website/assets/images/lysaght/icon1.svg') }}" alt="Icon" class="img-fluid mb-3 mb-lg-4">
                    {{-- </div> --}}
                    <div class="ps-md-3">
                        <div class="subtitle mb-3">Occupant Comfort</div>
                        <p class="desc mb-0">LYSAGHT<sup>&reg;</sup> roof products provide optimal comfort for your building users. They are fire-resistant, termite-proof, and durable. They also reduce heat, noise, and glare.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-5 px-lg-4">
                <div class="value-box h-100 d-flex flex-column flex-md-row align-items-center align-items-md-start p-3 p-lg-4">
                    {{-- <div class="icon mb-2 mb-md-3 mb-lg-4 d-inline-flex align-items-center align-items-md-start justify-content-center"> --}}
                    <img src="{{ asset('website/assets/images/lysaght/icon2.svg') }}" alt="Icon" class="img-fluid mb-3 mb-lg-4">
                    {{-- </div> --}}
                    <div class="ps-md-3">
                        <div class="subtitle mb-3">Energy Efficient</div>
                        <p class="desc mb-0">LYSAGHT<sup>&reg;</sup> roof products reflect heat and light, lowering your cooling and lighting costs. They also feature Thermatech<sup>&reg;</sup> technology, which improves the thermal efficiency of your building. They can also support roof-top solar solutions, helping you save on electricity bills.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-5 px-lg-4">
                <div class="value-box h-100 d-flex flex-column flex-md-row align-items-center align-items-md-start p-3 p-lg-4">
                    {{-- <div class="icon mb-2 mb-md-3 mb-lg-4 d-inline-flex align-items-center align-items-md-start justify-content-center"> --}}
                    <img src="{{ asset('website/assets/images/lysaght/icon3.svg') }}" alt="Icon" class="img-fluid mb-3 mb-lg-4">
                    {{-- </div> --}}
                    <div class="ps-md-3">
                        <div class="subtitle mb-3">Customised Solutions</div>
                        <p class="desc mb-0">LYSAGHT<sup>&reg;</sup> roof products come in various profiles, shapes, colours, and finishes, allowing you to customize your roof according to your preferences and needs. They can suit any roof design and integrate with other building materials, creating a harmonious and attractive look for your building.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-5 px-lg-4">
                <div class="value-box h-100 d-flex flex-column flex-md-row align-items-center align-items-md-start p-3 p-lg-4">
                    {{-- <div class="icon mb-2 mb-md-3 mb-lg-4 d-inline-flex align-items-center align-items-md-start justify-content-center"> --}}
                    <img src="{{ asset('website/assets/images/lysaght/icon4.svg') }}" alt="Icon" class="img-fluid mb-3 mb-lg-4">
                    {{-- </div> --}}
                    <div class="ps-md-3">
                        <div class="subtitle mb-3">Value Added Services</div>
                        <p class="desc mb-0">LYSAGHT<sup>&reg;</sup> roof products are backed by a comprehensive warranty and technical support from Tata BlueScope Steel, a leading steel manufacturer in India. They also offer on-site roll forming facilities, ensuring fast and accurate installation. They are also available through a network of resellers and distributors across the country, providing you with easy access to quality roof solutions.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center"><a href="#contact" class="common-btn common-btn2">Explore</a></div>
    </div>
</section>





<section class="primary-bg lys-solution py-5">
    <div class="container py-lg-4">
        <h2 class="sec-title text-white text-center mb-4 mb-lg-5">What People Say</h2>
        <div class="row mb-4 text-center text-md-left">
            <div class="col-md-6 mb-4 pb-xl-2">
                <div class="bg-white p-3 p-md-4 p-xl-5 br30">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/HsqESBSJs-0" width="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    </div>
                    <h4 class="subtitle f-600 mt-3">Mr. H. E. Sriprakash Shastry</h4>
                    <p class="desc mb-0">Partner – Ashwathanarayana &amp; Eswara LLP</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 pb-xl-2">
                <div class="bg-white p-3 p-md-4 p-xl-5 br30">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/5H65wDiHdE8" width="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    </div>
                    <h4 class="subtitle f-600 mt-3">Mr. Pulkit Garg</h4>
                    <p class="desc mb-0">Associate VP – Projects, JCB</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 pb-xl-2">
                <div class="bg-white p-3 p-md-4 p-xl-5 br30">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/TVhMaIjdF1Q" width="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    </div>
                    <h4 class="subtitle f-600 mt-3">Mr. S K Nandi (2017)</h4>
                    <p class="desc mb-0">Principal Architect – Civil, CP Kukreja</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 pb-xl-2">
                <div class="bg-white p-3 p-md-4 p-xl-5 br30">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/D9_rM86pP_Y" width="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    </div>
                    <h4 class="subtitle f-600 mt-3">Mr. Ravi Jain</h4>
                    <p class="desc mb-0">RCC Infra (Certified Govt. Contractor)</p>
                </div>
            </div>
        </div>
        {{-- <div class="award-slider2">
            <div>
                <div class="bg-white br10 py-4 px-3 px-lg-4 mb-3 mb-md-4 d-flex align-items-start">
                    <img class="rounded-circle me-2 me-lg-3" src="{{asset('website/assets/images/user.jpg')}}" alt="User" width="60" height="60">
                    <div>
                        <p class="desc sm f-600 mb-2">Name</p>
                        <p class="desc mb-0">Lorem ipsum dolor sit amet consectetur. Massa sit tortor aenean porttitor condimentum. Amet sit elit justo venenatis enim lectus. Dictum eu ornare tellus auctor. Pellentesque et lobortis faucibus.</p>
                    </div>
                </div>
                <div class="bg-white br10 py-4 px-3 px-lg-4 mb-3 mb-md-4 d-flex align-items-start">
                    <img class="rounded-circle me-2 me-lg-3" src="{{asset('website/assets/images/user.jpg')}}" alt="User" width="60" height="60">
                    <div>
                        <p class="desc sm f-600 mb-2">Name</p>
                        <p class="desc mb-0">Lorem ipsum dolor sit amet consectetur. Massa sit tortor aenean porttitor condimentum. Amet sit elit justo venenatis enim lectus. Dictum eu ornare tellus auctor. Pellentesque et lobortis faucibus.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-white br10 py-4 px-3 px-lg-4 mb-3 mb-md-4 d-flex align-items-start">
                    <img class="rounded-circle me-2 me-lg-3" src="{{asset('website/assets/images/user.jpg')}}" alt="User" width="60" height="60">
                    <div>
                        <p class="desc sm f-600 mb-2">Name</p>
                        <p class="desc mb-0">Lorem ipsum dolor sit amet consectetur. Massa sit tortor aenean porttitor condimentum. Amet sit elit justo venenatis enim lectus. Dictum eu ornare tellus auctor. Pellentesque et lobortis faucibus.</p>
                    </div>
                </div>
                <div class="bg-white br10 py-4 px-3 px-lg-4 mb-3 mb-md-4 d-flex align-items-start">
                    <img class="rounded-circle me-2 me-lg-3" src="{{asset('website/assets/images/user.jpg')}}" alt="User" width="60" height="60">
                    <div>
                        <p class="desc sm f-600 mb-2">Name</p>
                        <p class="desc mb-0">Lorem ipsum dolor sit amet consectetur. Massa sit tortor aenean porttitor condimentum. Amet sit elit justo venenatis enim lectus. Dictum eu ornare tellus auctor. Pellentesque et lobortis faucibus.</p>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="text-center">
            {{-- <a class="common-btn md common-btn2" href="#contact">Enquire Now</a> --}}
        </div>
    </div>
</section>
<section class="checkpoints py-5">
    <div class="container py-lg-4">
        <div class="checkpoint-wrap">
            <h2 class="sec-title text-center mb-4">Checkpoints</h2>
            <div class="row justify-content-between mb-lg-5">
                <div class="col-md-5 mb-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3 position-relative">
                        <div class="subtitle position-relative">Choose the Right Material</div>
                    </div>
                </div>
                <div class="col-md-5 mb-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3 position-relative">
                        <div class="subtitle position-relative">Choose the Right Engineering</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mb-lg-5">
                <div class="col-md-5 mb-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3 position-relative">
                        <div class="subtitle position-relative">Choose the Right Solution</div>
                    </div>
                </div>
                <div class="col-md-5 mb-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3 position-relative">
                        <div class="subtitle position-relative">Choose the Right Quality</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 mb-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3 position-relative">
                        <div class="subtitle position-relative">Choose the Right Construction</div>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                <div class="col-md-6 mb-3 mb-md-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3">
                        <div class="subtitle">Choose the Right Material</div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3">
                        <div class="subtitle">Choose the Right Solution</div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3">
                        <div class="subtitle">Choose the Right Quality</div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3">
                        <div class="subtitle">Choose the Right Engineering</div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-4">
                    <div class="check-single px-3 px-md-4 py-4 br10 d-flex align-items-center">
                        <img src="{{asset('website/assets/images/checkpoint.svg')}}" alt="Checkpoint" class="me-3">
                        <div class="subtitle">Choose the Right Construction</div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<section class="awards lys py-5" style="background-color: #EBEBEB">
    <div class="container py-lg-5">
        <h2 class="sec-title mb-4 text-center d-block d-md-none">Let's Build Together</h2>
        <div class="row align-items-center">
            <div class="col-md-6 col-xl-5 mb-4 mb-md-0">
                <div class="award-wrap br20 text-center px-3 px-lg-5 py-4">
                    <div class="award-slider">
                        <div>
                            <img src="{{ asset('website/assets/images/lysaght/award1.png') }}" alt="Award" class="img-fluid d-inline-block br20">
                            <P class="subtitle text-white mt-3"><em>Achievement Award for Construction Health, Safety and Environment by Construction Industry Development Council</em></P>
                        </div>
                        <div>
                            <img src="{{ asset('website/assets/images/lysaght/award2.png') }}" alt="Award" class="img-fluid d-inline-block br20">
                            <P class="subtitle text-white mt-3"><em>Best Product under roof and Cladding category by Construction Times Awards 2017</em></P>
                        </div>
                        <div>
                            <img src="{{ asset('website/assets/images/lysaght/award3.png') }}" alt="Award" class="img-fluid d-inline-block br20">
                            <P class="subtitle text-white mt-3"><em>Most Trusted roof Brand under Construction category by the 7th EPC World Awards</em></P>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-5 ps-lg-5 pe-lg-4">
                <h2 class="sec-title mb-4 d-none d-md-block">Let's Build Together</h2>
                <p class="subtitle mb-0">Contact us today to learn more about our low-cost building construction solutions, PEB buildings, and warehouse construction options.</p>
                <div class="text-center text-md-start">
                    <a class="common-btn common-btn2 mt-4" href="#contact">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="footer-form py-5" style="background-color: #16284B">
    <div class="container py-xl-4">
        <div class="row">
            <div class="col-lg-10 col-xl-9">
                <div class="main-form label-lightblue px-3 px-lg-4 py-4">
                    <form action="{{ route('lysaght.store') }}" method="post">
                    @csrf
                    <h2 class="sec-title bold text-white mb-2 mb-xl-3">Let's build together</h2>
                    <p class="subtitle text-white mb-4 mb-xl-5">To get the best solution reach out to our LYSAGHT<sup>&reg;</sup> expert by filling this form</p>
                    @if (session()->has('message'))
                        <div class="alert {{ session()->get('alert-class') }}">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label>Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" class="finput required" required placeholder="Type Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label>Phone No <span class="text-danger">*</span></label>
                            <input type="number" name="phone" value="{{ old('phone') }}" class="finput required" required placeholder="Type Phone No">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label>Email ID <span class="text-danger">*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}" class="finput required" required placeholder="Type Email ID">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label>Profession <span class="text-danger">*</span></label>
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
                        {{-- <div class="col-lg-6 mb-3">
                            <label>Select Products <span class="text-danger">*</span></label>
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
                        <div class="col-lg-6 mb-3">
                            <label>Quantity in Square feet <span class="text-danger">*</span></label>
                            <input type="text" name="quantity" value="{{ old('quantity') }}" class="finput" placeholder="Sqft">
                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="col-lg-6 mb-3">
                            <label>Company Name <span class="text-danger">*</span></label>
                            <input type="text" name="company_name" value="{{ old('company_name') }}" class="finput" placeholder="Type Company Name">
                            @error('company_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Choose State <span class="text-danger">*</span></label>
                                    <select name="state" id="state2" class="finput required" required>
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
                                    <label>Choose City <span class="text-danger">*</span></label>
                                    <select name="city" id="city2" class="finput required" required></select>
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label>Message</label>
                            <textarea name="message" id="message" class="finput ">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="common-btn common-btn2">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>-->
<div class="sticky-right">
    <a class="common-btn common-btn2" href="#contact">Enquire Now</a>
</div>
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
    $('#state2').change(function(){
        $('#city2').html('');
        var state = $('#state2').val();
        $.ajax({
            'type':'POST',
            'url' : "{{ route('cities.by.stateid') }}" ,
            data: {'_token': '{{ csrf_token() }}',state_id:state},
            beforeSend:function(){
                $('#loading2').html('<small class="text text-danger">Fetching....</small>');
            },
            success:function(response){
                $('#city2').html('<option value="">Select City</option>');
                if(response.length > 0){
                    $.each(response, function (key, value) {
                        $('#city2').append('<option value="'+value.id+'"> ' + value.name +  '</option>');
                    });
                }
            }
        });
    })
</script>
@endsection()

