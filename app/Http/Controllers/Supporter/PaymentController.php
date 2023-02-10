<?php

namespace App\Http\Controllers\Supporter;


use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Supporter;

class PaymentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $payments = Payment::query()->latest('id')->paginate();
        $supporters = Supporter::all();
        $methods = PaymentMethod::all();

        return view('pages.admin.payments.index', compact('payments', 'supporters', 'methods'));
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
            "supporter_id" =>  "required",
            "paymentMethod_id" =>  "required",
            "amount" =>  "required",
            "attachment" =>  "nullable|mimetypes:image/jpeg,image/png,image/gif",
            "note" =>  "required",
        ]);

        if ($file = request()->file('attachment')) {
            $data['attachment'] = $file->store('payments', 'public');
        }

        Payment::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $_content = Payment::findOrFail($id);

        return view('pages.admin.payments.show', compact('_content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $_content = Payment::findOrFail($id);
        $supporters = Supporter::all();
        $methods = PaymentMethod::all();

        return view('pages.admin.payments.modal', compact('_content', 'supporters', 'methods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */
    public function update($id)
    {
        $_content = Payment::findOrFail($id);

        $data = request()->validate([
            "supporter_id" =>  "required",
            "paymentMethod_id" =>  "required",
            "amount" =>  "required",
            "attachment" =>  "nullable|mimeType:image/jpeg,image/png,image/gif",
            "note" =>  "required",
        ]);

        if ($file = request()->file('attachment')) {
            $data['attachment'] = $file->store('payments', 'public');
        }
        else {
            $data['attachment'] = $_content->attachment;
        }

        $_content->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $_content = Payment::findOrFail($id);

        $_content->delete();

        return back();
    }

    public function payments()
    {
        $info = auth()->user()->info;
        return view('pages.supporters.payments.payments', compact('info'));
    }
}
