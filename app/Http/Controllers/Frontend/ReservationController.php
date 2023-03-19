<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        return view('reservations.step-one', compact('reservation'));
    }

    public function StoreStepOne(Request $request)
    {
        $validated = $request->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required', 'email'],
            'tel_number'=>['required'],
            'res_date'=>['required', 'date', new DateBetween, new TimeBetween],
            'guest_number'=>['required'],
        ]);

        if(empty($request->session()->get('reservation'))){
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->sassion()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->sassion()->put('reservation', $reservation);
        }

        return to_route('reservations.step.two');
    }

    public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $res_table_ids = Reservation::orderBy('res_date')->get()->filter(function($value) use($reservation){
            return $value->res_date->format('Y-m-d') == $reservation->res_date->format('Y-m-d');
        })->pluck('table_id');
        $tables = Table::where('status', TableStatus::Avaliable)
                ->where('guest_number', '>=', $reservation->guest_number)
                ->whereNotIn('id', $res_table_ids)->get();
        return view('reservations.step-two', compact('reservation', 'tables'));
    }

    public function StoreStepTwo(Request $request)
    {
        $validated = $request->validate([
            'table_id'=>['required']
        ]);
        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');

        return to_route('thankyou');
    }
}
