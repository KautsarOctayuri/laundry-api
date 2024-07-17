<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaundryOrder;
use App\Models\Customer;
use App\Models\LaundryService;

class LaundryOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'laundry_service_id' => 'required|exists:laundry_services,id',
            'weight' => 'required|integer',
        ]);

        $order = LaundryOrder::create([
            'customer_id' => $request->customer_id,
            'laundry_service_id' => $request->laundry_service_id,
            'weight' => $request->weight,
        ]);

        return response()->json($order, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
