<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Order;

class PdfController extends Controller
{
    public function generatePDF($orderId)
    {
        $order = Order::with('components')->findOrFail($orderId);
        $data = [
            'order' => $order,
            'totalCost' => $order->total_cost,
        ];

        $pdf = PDF::loadView('pdf.order', $data);
        return $pdf->stream('order_'.$order->n_order.'.pdf');
    }
}
