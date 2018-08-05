@extends ('custommer.layout.main_layout_site')
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
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <label for="reservation_date"><i class="fa fa-calendar"></i></label>
                                <input type="text" id="datepicker" name="reservation_date" placeholder="Expected Day" readonly>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <label for="reservation_time"><i class="fa fa-clock-o"></i></label>
                                <input type="text" name="reservation_time" id="reservation_time" placeholder="Expected Time">
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <label for="reservation_person"><i class="fa fa-user-plus"></i></label>
                                <input type="text" name="reservation_person" id="reservation_person" placeholder="Total Person">
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <label for="reservation_phone"><i class="fa fa-phone"></i></label>
                                <input type="text" name="reservation_phone" id="reservation_phone" placeholder="Phone No">
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
                        <p>We take reservations for lunch and dinner. To make a reservation, please call us at <a href="#">(+84)-935-103-369</a> between 10am-8pm (GTM +7), All weekdays except Wednesday</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="reservation-private-text">
                        <h4>Private Parties & Events</h4>
                        <p>We are honored to serve you a special day, great in your life such as birthday parties, weddings, conferences or meeting friends. If the size of the party, the event over 15 wheels, please let us know soon.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                var dateInsert = date.split("-").reverse().join("-") + ' ' + $('#addReservation').find("input[name = 'reservation_time']").val();
                var phone = $('#addReservation').find("input[name = 'reservation_phone']").val();
                var person = $('#addReservation').find("input[name = 'reservation_person']").val();
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