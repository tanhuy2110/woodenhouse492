@extends ('custommer.layout.main_layout_site')
@section ('title', 'Reservation - Wooden House Restaurant')
@section('content')
    <section class="reservation-area home-three section-padding">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="area-title text-center">
                        <h3>Resrevation Form</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12" id="addReservation">
                    <div class="print-error-msg alert alert-danger" style="display:none">
                        <ul>
                        </ul>
                    </div>
                    <form class="main-reservaton-form" action="{{ route('reservation.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <label for="reservation_name"><i class="fa fa-user-o"></i></label>
                                <input type="text" name="reservation_name" id="reservation_name" placeholder="Your Name">
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <label for="reservation_email"><i class="fa fa-envelope-o"></i></label>
                                <input type="email" name="reservation_email" id="reservation_email" placeholder="Your Email">
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <label for="reservation_date"><i class="fa fa-calendar"></i></label>
                                        <input type="text" id="datepicker" name="reservation_date" placeholder="Expected Day" readonly>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <select class="select-option" id="select-time">
                                            <option value="hide">-- Please Choose Hour --</option>
                                            <option value="11:00">11 : 00</option>
                                            <option value="11:30">11 : 30</option>
                                            <option value="12:00">12 : 00</option>
                                            <option value="12:30">12 : 30</option>
                                            <option value="13:00">13 : 00</option>
                                            <option value="13:30">13 : 30</option>
                                            <option value="14:00">14 : 00</option>
                                            <option value="14:30">14 : 30</option>
                                            <option value="15:00">15 : 00</option>
                                            <option value="15:30">15 : 30</option>
                                            <option value="16:00">16 : 00</option>
                                            <option value="16:30">16 : 30</option>
                                            <option value="17:00">17 : 00</option>
                                            <option value="17:30">17 : 30</option>
                                            <option value="18:00">18 : 00</option>
                                            <option value="18:30">18 : 30</option>
                                            <option value="19:00">19 : 00</option>
                                            <option value="19:30">19 : 30</option>
                                            <option value="20:00">20 : 00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <label for="reservation_phone"><i class="fa fa-phone"></i></label>
                                <input type="text" name="reservation_phone" id="reservation_phone" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <select class="select-option" id="select-size">
                                    <option value="hide">-- Please Choose Size --</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="reservation_message"><i class="fa fa-comment-o"></i></label>
                                <textarea name="reservation_message" id="reservation_message" cols="30" rows="10" placeholder="You can choose few food in advance to serve us better. Thank you !"></textarea>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 check-robot" >
                                <div class="g-recaptcha" style="margin-bottom: 10px"  data-sitekey="6LeiDmUUAAAAAPSBxNiR0qviJeqvtGEITJRRNYb9" data-callback="enableReservationButton">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" class="create-submit" id="submitBtn" disabled>BOOK MY TABLE</button>
                                <p>Please submit your reservation detail & We'll contact you to confirm your booking</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="reservation-call-to-action">
                        <h4>Reserve by Phone</h4>
                        <p>We take reservations for lunch and dinner. To make a reservation, please call us at <a href="#">(+84)-935-103-369</a> between <strong>10:30-20:00</strong>  (GTM +7), all weekdays except Wednesday</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="reservation-private-text">
                        <h4>Private Parties & Events</h4>
                        <p>We are honored to serve you a special day, great in your life such as birthday parties, meeting friends. If the size of the party, the event over 8 wheels, please let us know soon.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{asset('/js/customer/vendor/jquery-ui.js')}}"></script>
    <script>
        $( "#datepicker" ).datepicker({
            minDate: 0,
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.getJSON('http://gd.geobytes.com/GetCityDetails?callback=?', function(data) {
            $(".create-submit").click(function(e){
                e.preventDefault();
                var form_action = $("#addReservation").find("form").attr("action");
                var name = $('#addReservation').find("input[name = 'reservation_name']").val();
                var email = $('#addReservation').find("input[name = 'reservation_email']").val();
                var dateDeafult = $('#addReservation').find("input[name = 'reservation_date']").val() ;
                var date = dateDeafult.replace(/\//g , "-");
                var time = $('#select-time option:selected').val();
                var dateInsert = date.split("-").reverse().join("-") + ' ' + time ;
                var phone = $('#addReservation').find("input[name = 'reservation_phone']").val();
                var person = $('#select-size option:selected').val();
                var message = $('#addReservation').find("textarea[name = 'reservation_message']").val();
                var ipClient = data.geobytesipaddress;
                $.ajax({
                    type: 'POST',
                    url: form_action,
                    data: {
                        name_customer: name,
                        email: email,
                        date: dateInsert,
                        phone_number: phone,
                        size: person,
                        message: message,
                        grecaptcha: grecaptcha.getResponse(),
                        ip_address: ipClient
                    }
                }).done(function (result) {
                    if($.isEmptyObject(result.error)){
                        var name_customer = result.name_customer;
                        var reservation_time = result.date;
                        swal({
                            title: "Thank you "+ name_customer + " !",
                            text: "See you on " + reservation_time + ". Have a good day ^^!",
                            type: "success",
                        }).then(function () {
                            location.reload();
                        });
                    }
                    else {
                        printErrorMsg(result.error);
                    }
                })
            });
        });
        /* Error Validate*/
        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }

        /* Validate disable Button Reservation Submit */
        function enableReservationButton() {
            $('#submitBtn').removeAttr('disabled');
        }
    </script>
@endsection