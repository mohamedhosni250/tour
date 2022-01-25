@extends('app')

<section id="hero_2">
    <div class="intro_title">
        <h1>Place your order</h1>
        <div class="bs-wizard row">

            <div class="col-4 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">Your cart</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="cart_transfer.html" class="bs-wizard-dot"></a>
            </div>

            <div class="col-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">Your details</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
            </div>

            <div class="col-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">Finish!</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="confirmation_transfer.html" class="bs-wizard-dot"></a>
            </div>

        </div>
        <!-- End bs-wizard -->
    </div>
    <!-- End intro-title -->
</section>
<!-- End Section hero_2 -->

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
    <!-- End position -->

    <div class="container margin_60">
        <form action="{{ route('order.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-8 add_bottom_15">
                    <div class="form_title">
                        <h3><strong>1</strong>Your Details</h3>
                        <p>
                            Mussum ipsum cacilds, vidis litro abertis.
                        </p>
                    </div>
                    <div class="step">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input value="{{ Auth::user()->name }}" type="text" class="form-control"
                                        id="name" name="name">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input value="{{ Auth::user()->email }}" type="email" id="email_booking"
                                        name="email" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" id="telephone_booking" name="number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>PickUP Location</label>
                                    <input type="text" id="pickup_location" name="pickup_location"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="text" name="order_date" hidden value="{{ $request->date }}">
                        <input type="text" name="adult_count" hidden value=" {{ $request->adult_qty }}">
                        <input type="text" name="child_count" hidden value=" {{ $request->child_qty }}">
                        <input type="text" name="package_name" hidden value=" {{ $request->package_name }}">
                        <input type="text" name="total" hidden
                            value="{{ $request->adult_price * $request->adult_qty + $request->child_price * $request->child_qty }}"></button>
                    </div>
                    <!--End step -->
                    {{-- <div id="policy">
                    <h4>Cancellation policy</h4>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions
                            and general policy.</label>
                    </div>
                    <a href="confirmation.html" class="btn_1 green medium">Book now</a>
                </div> --}}
                </div>

                <aside class="col-lg-4">
                    <div class="box_style_1">
                        <h3 class="inner">- Summary -</h3>
                        <table class="table table_summary">
                            <tbody>
                                <tr>
                                    <td>
                                        Date
                                    </td>
                                    <td class="text-right">
                                        {{ $request->date }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Time
                                    </td>
                                    <td class="text-right">
                                        12.00 AM
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>
                                        Adults
                                    </td>
                                    <td class="text-right">
                                        {{ $request->adult_qty }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Children
                                    </td>
                                    <td class="text-right">
                                        {{ $request->child_qty }}
                                    </td>
                                </tr>

                                <tr class="total">
                                    <td>
                                        Total cost
                                    </td>
                                    <td class="text-right">
                                        {{ $request->adult_price * $request->adult_qty + $request->child_price * $request->child_qty }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn_full" type="submit">Book now</button>
                        <a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>
                    </div>
                    <div class="box_style_4">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>Need <span>Help?</span></h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </aside>

            </div>
        </form>
    </div>
    <!--End container -->
</main>
<!-- End main -->

@push('scripts')
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>

@endpush
