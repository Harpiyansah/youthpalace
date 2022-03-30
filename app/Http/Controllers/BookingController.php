<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function createPDF()
    {
        $items = Booking::all();

        view()->share('booking', $items);
        $convertPdf = PDF::loadView('pdf_view', $items);

        return $convertPdf->download('pdf_file.pdf');
    }
}
