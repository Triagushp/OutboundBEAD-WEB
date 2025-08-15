<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingKalenderController extends Controller
{
    // API untuk frontend
    public function getAvailableDates()
    {
        $bookings = Booking::select('tanggal', 'status')->get();

        $dates = $bookings->map(function($booking){
            return [
                'date' => $booking->tanggal,
                'status' => $booking->status
            ];
        });

        return response()->json($dates);
    }
}
