@extends('app')

<section class="parallax-window" data-parallax="scroll" data-image-src="{{ url('front/img/single_tour_bg_1.jpg') }}"
    data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Arc de Triomphe</h1>
                    <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                    <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                            class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                            class="icon-smile"></i><small>(75)</small></span>
                </div>
                <div class="col-md-4">
                    <div id="price_single_main">
                        from/per person <span><sup>$</sup>52</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End section -->

<main>
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Category</a>
                </li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->


    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-8" id="single_tour_desc">
                <div id="single_tour_feat">
                    <ul>
                        <li><i class="icon_set_1_icon-4"></i>Museum</li>
                        <li><i class="icon_set_1_icon-83"></i>3 Hours</li>
                        <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                        <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                        <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                        <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                        <li><i class="icon_set_1_icon-29"></i>Tour guide</li>
                    </ul>
                </div>

                <p class="d-none d-md-block d-block d-lg-none"><a class="btn_map" data-toggle="collapse"
                        href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map"
                        data-text-original="View on map">View on map</a>
                </p><!-- Map button for tablets/mobiles -->

                <div id="Img_carousel" class="slider-pro">
                    <div class="sp-slides">

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="/css/images/blank.gif"
                                data-src="{{ url('front/img/slider_single_tour/1_medium.jpg') }}">
                        </div>
                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                data-src="{{ url('front/img/slider_single_tour/2_medium.jpg') }}">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                data-src="{{ url('front/img/slider_single_tour/3_medium.jpg') }}">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                data-src="{{ url('front/img/slider_single_tour/4_medium.jpg') }}">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                data-src="{{ url('front/img/slider_single_tour/5_medium.jpg') }}">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                data-src="front/img/slider_single_tour/6_medium.jpg"
                                data-small="front/img/slider_single_tour/6_small.jpg"
                                data-medium="front/img/slider_single_tour/6_medium.jpg"
                                data-large="front/img/slider_single_tour/6_large.jpg"
                                data-retina="front/img/slider_single_tour/6_large.jpg">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                data-src="front/img/slider_single_tour/7_medium.jpg"
                                data-small="front/img/slider_single_tour/7_small.jpg"
                                data-medium="front/img/slider_single_tour/7_medium.jpg"
                                data-large="front/img/slider_single_tour/7_large.jpg"
                                data-retina="front/img/slider_single_tour/7_large.jpg">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                data-src="front/img/slider_single_tour/8_medium.jpg"
                                data-small="front/img/slider_single_tour/8_small.jpg"
                                data-medium="front/img/slider_single_tour/8_medium.jpg"
                                data-large="front/img/slider_single_tour/8_large.jpg"
                                data-retina="front/img/slider_single_tour/8_large.jpg">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                data-src="front/img/slider_single_tour/9_medium.jpg"
                                data-small="front/img/slider_single_tour/9_small.jpg"
                                data-medium="front/img/slider_single_tour/9_medium.jpg"
                                data-large="front/img/slider_single_tour/9_large.jpg"
                                data-retina="front/img/slider_single_tour/9_large.jpg">
                        </div>
                    </div>
                    <div class="sp-thumbnails">
                        <img alt="Image" class="sp-thumbnail"
                            src="{{ url('front/img/slider_single_tour/1_medium.jpg') }}">
                        <img alt="Image" class="sp-thumbnail"
                            src="{{ url('front/img/slider_single_tour/2_medium.jpg') }}">
                        <img alt="Image" class="sp-thumbnail"
                            src="{{ url('front/img/slider_single_tour/3_medium.jpg') }}">
                        <img alt="Image" class="sp-thumbnail"
                            src="{{ url('front/img/slider_single_tour/4_medium.jpg') }}">
                        <img alt="Image" class="sp-thumbnail"
                            src="{{ url('front/img/slider_single_tour/5_medium.jpg') }}">
                        <img alt="Image" class="sp-thumbnail"
                            src="{{ url('front/img/slider_single_tour/6_medium.jpg') }}">
                        <img alt="Image" class="sp-thumbnail"
                            src="{{ url('front/img/slider_single_tour/7_medium.jpg') }}">
                        <img alt="Image" class="sp-thumbnail"
                            src="{{ url('front/img/slider_single_tour/8_medium.jpg') }}">
                        <img alt="Image" class="sp-thumbnail"
                            src="{{ url('front/img/slider_single_tour/9_medium.jpg') }}">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <h3>Description</h3>
                    </div>
                    <div class="col-lg-9">
                        <h4>Paris in love</h4>
                        <p>
                            Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu
                            detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae
                            adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique
                            te qui.
                        </p>
                        <h4>What's include</h4>
                        <p>
                            Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu
                            detraxit constituam, an mel iudico constituto efficiendi.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list_ok">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                    <li>Ut est saepe munere ceteros</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list_ok">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End row  -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-3">
                        <h3>Schedule</h3>
                    </div>
                    <div class="col-lg-9">

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            1st March to 31st October
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Monday
                                        </td>
                                        <td>
                                            10.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tuesday
                                        </td>
                                        <td>
                                            09.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Wednesday
                                        </td>
                                        <td>
                                            09.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Thursday
                                        </td>
                                        <td>
                                            <span class="label label-danger">Closed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Friday
                                        </td>
                                        <td>
                                            09.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Saturday
                                        </td>
                                        <td>
                                            09.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sunday
                                        </td>
                                        <td>
                                            10.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><em>Last Admission</em></strong>
                                        </td>
                                        <td>
                                            <strong>17.00</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            1st November to 28th February
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Monday
                                        </td>
                                        <td>
                                            10.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tuesday
                                        </td>
                                        <td>
                                            09.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Wednesday
                                        </td>
                                        <td>
                                            09.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Thursday
                                        </td>
                                        <td>
                                            <span class="label label-danger">Closed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Friday
                                        </td>
                                        <td>
                                            09.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Saturday
                                        </td>
                                        <td>
                                            09.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sunday
                                        </td>
                                        <td>
                                            10.00 - 17.30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><em>Last Admission</em></strong>
                                        </td>
                                        <td>
                                            <strong>17.00</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-3">
                        <h3>Reviews </h3>
                        <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a
                            review</a>
                    </div>
                    <div class="col-lg-9">
                        <div id="general_rating">11 Reviews
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                    class="icon-smile"></i>
                            </div>
                        </div>
                        <!-- End general_rating -->
                        <div class="row" id="rating_summary">
                            <div class="col-md-6">
                                <ul>
                                    <li>Position
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Tourist guide
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Price
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Quality
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile voted"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End row -->
                        <hr>
                        <div class="review_strip_single">
                            <img src="{{ url('front/img/avatar1.jpg') }}" alt="Image" class="rounded-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Jhon Doe</h4>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque
                                interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac
                                ante ipsum primis in faucibus."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                    class="icon-smile"></i>
                            </div>
                        </div>
                        <!-- End review strip -->

                        <div class="review_strip_single">
                            <img src="{{ url('front/img/avatar3.jpg') }}" alt="Image" class="rounded-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Jhon Doe</h4>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque
                                interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac
                                ante ipsum primis in faucibus."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                    class="icon-smile"></i>
                            </div>
                        </div>
                        <!-- End review strip -->

                        <div class="review_strip_single last">
                            <img src="{{ url('front/img/avatar2.jpg') }}" alt="Image" class="rounded-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Jhon Doe</h4>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque
                                interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac
                                ante ipsum primis in faucibus."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile"></i><i
                                    class="icon-smile"></i>
                            </div>
                        </div>
                        <!-- End review strip -->
                    </div>
                </div>
            </div>
            <!--End  single_tour_desc-->

            <aside class="col-lg-4">
                <p class="d-none d-xl-block d-lg-block d-xl-none">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                        aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on
                        map</a>
                </p>
                {{-- start of form --}}
                <form action="{{ route('checkout') }}">
                    @csrf
                    @method('get')
                    <div class="box_style_1 expose">
                        <h3 class="inner">- Booking -</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> Select a date</label>
                                    <input name="date" class="date-pick form-control" type="text">
                                    {{-- data-date-format="M d, D" --}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><i class=" icon-clock"></i> Time</label>
                                    <input class="time-pick form-control" value="12:00 AM" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div id="adult_price" class="form-group">
                                    <label>Adults : {{ $package->adult_price }} usd </label>
                                    <input name="adult_price" hidden id="adults_price" type="text"
                                        value="{{ $package->adult_price }}">
                                    <input name="child_price" hidden id="childs_price" type="text"
                                        value="{{ $package->child_price }}">
                                        <input name="package_name" hidden id="package_name" type="text"
                                        value="{{ $package->title }}">
                                    <div class="numbers-row">
                                        <input name="adult_qty" type="text" value="1" id="adults"
                                            class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                            <div id="child_price" class="col-6">
                                <div class="form-group">
                                    <label>Children : {{ $package->child_price }} usd </label>
                                    <div class="numbers-row">
                                        <input name="child_qty" type="text" value="0" id="children"
                                            class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <table class="table table_summary">
                            <tbody>
                                <tr>
                                    <td>
                                        Adults
                                    </td>
                                    <td id="adult_count" class="text-right">
                                        0
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Children
                                    </td>
                                    <td id="child_count" class="text-right">
                                        0
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Adult Amount
                                    </td>
                                    <td id="total1" class="text-right">
                                        <span class="adult_total"> {{ $package->adult_price }} </span> USD
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Child Amount
                                    </td>
                                    <td id="total1" class="text-right">
                                        <span class="child_total"> 0 </span> USD
                                    </td>
                                </tr>
                                {{-- <tr class="total">
                                <td>
                                    Total cost
                                </td>
                                <td class="text-right">
                                    150 USD
                                </td>
                            </tr> --}}
                            </tbody>
                        </table>

                    </div>
                    <button type="submit" class="btn_full">Book now</button>
                </form>

                {{-- end of form --}}
                <!--/box_style_1 -->

                <div class="box_style_4">
                    <i class="icon_set_1_icon-90"></i>
                    <h4><span>Book</span> by phone</h4>
                    <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>

            </aside>
        </div>
        <!--End row -->
    </div>
    <!--End container -->

    <div id="overlay"></div>
    <!-- Mask on input focus -->

</main>
<!-- End main -->


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#adult_count').text(document.getElementById('adults').value);
            $('#adult_price .button_inc').click(function() {
                var adultPrice = document.getElementById('adults').value * document.getElementById(
                    'adults_price').value;

                $('.adult_total').text(adultPrice);
                $('#adult_count').text(document.getElementById('adults').value);
            });
            $('#child_price .button_inc').click(function() {
                var childPrice = document.getElementById('children').value * document.getElementById(
                    'childs_price').value;
                $('.child_total').text(childPrice);
                $('#child_count').text(document.getElementById('children').value);

            });
        });
    </script>
@endpush
