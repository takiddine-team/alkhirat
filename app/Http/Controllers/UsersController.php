<?php

namespace App\Http\Controllers;

use DB;
use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Interfaces\UserRepositoryInterface;
//use App\Http\Validators\BeneficiaryValidator;
use App\Http\Requests\Account\SettingsInfoRequest;
use App\Interfaces\BeneficiaryRepositoryInterface;
use App\Models\Beneficiary;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //use BeneficiaryValidator;
    private UserRepositoryInterface $userRepository;
    private BeneficiaryRepositoryInterface $beneficiaryRepository;

    public function __construct(UserRepositoryInterface $userRepository, BeneficiaryRepositoryInterface $beneficiaryRepository)
    {
        $this->userRepository = $userRepository;
        $this->beneficiaryRepository = $beneficiaryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = theme()->getOption('page');
        $users = $this->userRepository->paginateUsers();
        // $users = $this->userRepository->getAllUsers();

        return view('pages.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $user = new User();
        $user->first_name = 'Ahmed4';
        $user->last_name  = 'Ach4';
        $user->email      = 'ahmed4@ahmed4.com';
        $user->password   = Hash::make('ahmed');
        $user->save();
        $user->assignRole('supporter');

        $this->userRepository->createUserInfo($user);


        return $user;

        // $this->userRepository->createUser();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255",
            "email" => "required|string|max:255|unique:users,email",
            "phone" => "nullable|string|max:255|unique:users,phone",
            "address" => "nullable|string|max:255",
            "password" => "required|string|max:255",
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('pages.admin.users.show', compact('user'));
        $config = theme()->getOption('page');

        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $config = theme()->getOption('page', 'edit');

        $_content = User::findOrFail($id);

        return view('pages.admin.users.modal', compact('_content'));

        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update_user(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $data = $request->validate([
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255",
            "email" => "required|string|max:255|unique:users,email," . $user->id .",id",
            "phone" => "nullable|string|max:255|unique:users,phone," . $user->id .",id",
            "address" => "nullable|string|max:255",
            "password" => "nullable|string|max:255",
        ]);

        $data['password'] = !is_null($data['password']) ? Hash::make($data['password']) : $user->password;

        $user->update($data);

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(SettingsInfoRequest $request, $id)
    {
        //
        try {
            DB::beginTransaction();
            // save user name
            $data = $request->all();
            auth()->user()->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name']
            ]);
            $id = auth()->user()->info->id;
            $this->userRepository->updateUserInfo($data);
            $this->beneficiaryRepository->updateBeneficiary($data, $id);
            DB::commit();
        } catch (Throwable $e) {
            return ($e);
            DB::rollBack();
        }
        return redirect()->back()->with('message', 'Beneficary update successfully');



        // save on user info


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
