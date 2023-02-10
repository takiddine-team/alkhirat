<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $methods = PaymentMethod::query()->paginate();

        return view('pages.admin.payment-methods.index', compact('methods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string|max:255'
        ]);

        PaymentMethod::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $_content = PaymentMethod::findOrFail($id);

        return view('pages.admin.payment-methods.modal', compact('_content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $_content = PaymentMethod::findOrFail($id);

        $data = request()->validate([
            'name' => 'required|string|max:255'
        ]);

        $_content->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        PaymentMethod::query()->findOrFail($id)->delete();

        return back();
    }
}
