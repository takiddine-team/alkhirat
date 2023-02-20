<?php
namespace App\Http\Controllers\Service;
use App\Http\Controllers\Controller;
use App\Interfaces\ServiceRepositoryInterface;
use App\Models\Beneficiary;
use App\Models\Beneficiary_service;
use App\Models\Service;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller {

  private ServiceRepositoryInterface $serviceRepository;
  public function __construct(ServiceRepositoryInterface $serviceRepository)
  {
    $this->serviceRepository = $serviceRepository;
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    $services = $this->serviceRepository->getAllService();
    return view('pages.admin.services.index')->with('services', $services);

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
  public function store(Request $request)
  {
    $data = $request->all();
    $service = $this->serviceRepository->createService($data);
    $services = Service::get();
    return redirect()->back()->with('message', 'تمت اضافة الخدمة بنجاح');
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

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Service::where('id',$id)->delete();
    return redirect()->back()->with('message', 'تمت ازالة الخدمة بنجاح');
  }


  public function beneficiaries(Service $service)
  {
    $beneficiaries = Beneficiary::query()->with('User', 'User.user', 'beneficiary_service')->get();

    return view('pages.admin.services.beneficiaries', compact('service','beneficiaries'));
  }


  public function save_beneficiaries(Request $request, Service $service)
  {
    $data = $request->validate([
      'beneficiaries' => [
        'required',
        'array'
      ],
      'beneficiaries.*.id' => [
        'nullable',
        'numeric',
      ],
      'beneficiaries.*.quantity' => [
        'nullable',
        'numeric',
      ],
      'beneficiaries.*.note' => [
        'nullable',
        'string',
      ],
    ]);

    $service->beneficiary()->delete();

    $bs = collect($data['beneficiaries'])->map(function ($item) use ($service) {
      if (array_key_exists('id', $item))
        return [
          "beneficiary_id" => $item['id'],
          "service_id" => $service->id,
          "quantity" => $item['quantity'],
          "note" => $item['note'],
        ];
    })->filter()->toArray();

    Beneficiary_service::insert($bs);

    return redirect()->route('services.index');

  }

}

?>