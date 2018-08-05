<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Reservation;
use Illuminate\Http\Request;
use Validator;
use App\Rules\Captcha;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('custommer.layout.reservation');
    }

    public function listReservationAdmin()
    {
        $reservations = Reservation::all();
        return view('admin.reservation', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(),
            [
                'name_customer' => 'required',
                'email' => 'required|email|unique:reservations,email',
                'date' => 'required',
                'phone_number' => 'required',
                'size' => 'required|max:14',
                'grecaptcha' => new Captcha(),
            ],
            [
                'name_customer.required' => 'Your name field is required',
                'size.required' => 'Total Person. How many people?',
                'size.max' => 'Total person over 14 people',
            ]
        );
        if( $validator->passes() ) {
            $createReservation = Reservation::create($request->all());
            return response()->json($createReservation);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    public function reservationCalendar()
    {
        return view('admin.calendar');
    }

    public function reservationCalendarAPI ()
    {
        $calendar = Reservation::all();
        return response()->json($calendar);
    }
}
