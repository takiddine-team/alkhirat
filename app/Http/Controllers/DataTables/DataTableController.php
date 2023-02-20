<?php

namespace App\Http\Controllers\DataTables;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ContributionType;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Project;
use App\Models\ServiceType;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;

class DataTableController extends Controller
{
    public function project_list()
    {
        $projects = Project::query()->get();

        return DataTables::of($projects)
            ->addIndexColumn()
            ->editColumn('start_date', function ($row) {
                return $row->start_date->format('d-m-Y');
            })
            ->editColumn('end_date', function ($row) {
                return $row->end_date->format('d-m-Y');
            })
            ->addColumn('actions', function ($row) {
                return view('pages.admin.projects.buttons', [
                    'value' => $row
                ]);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function activities_list()
    {
        $content = Activity::query()->get();

        return DataTables::of($content)
            ->addIndexColumn()
            ->editColumn('start_date', function ($row) {
                return $row->start_date->format('d-m-Y');
            })
            ->editColumn('end_date', function ($row) {
                return $row->end_date->format('d-m-Y');
            })
            ->addColumn('actions', function ($row) {
                return view('pages.admin.activities.buttons', [
                    'activity' => $row
                ]);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function contrib_list()
    {
        $content = ContributionType::query()->get();

        return DataTables::of($content)
            ->addIndexColumn()
            ->addColumn('actions', function ($row) {
                return view('pages.admin.contrib.buttons', [
                    'content' => $row
                ]);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function user_list()
    {
        $content = User::query()->get();

        return DataTables::of($content)
            ->addIndexColumn()
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->editColumn('role', function ($user) {
                $role = '';
                if ($user->hasRole('superadmin')) {
                    $role = 'سوبر ادمن';
                }
                if ($user->hasRole('admin')) {
                    $role = 'ادمن';
                }
                if ($user->hasRole('beneficiary')) {
                    $role = 'مستفيد';
                }
                if ($user->hasRole('supporter')) {
                    $role = 'مشجع';
                }
                if ($user->hasRole('volunteer')) {
                    $role = 'متطوع';
                }

                return $role;
            })
            ->editColumn('last_login_at', function ($user) {
                $msg = $user->last_login_at?->diffForHumans() ?? 'لم يتم تسجيل الدخول بعد';
                return <<<HTML
                    <div class="badge badge-light fw-bolder">
                        $msg
                    </div>
                HTML;
            })
            ->addColumn('actions', function ($row) {
                return view('pages.admin.users.buttons', [
                    'user' => $row
                ]);
            })
            ->rawColumns(['actions', 'last_login_at'])
            ->make(true);
    }
    
    public function payment_methods()
    {
        $content = PaymentMethod::query()->get();

        return DataTables::of($content)
            ->addIndexColumn()
            ->addColumn('actions', function ($row) {
                return view('pages.admin.payment-methods.buttons', [
                    'content' => $row
                ]);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
    
    public function payments_list()
    {
        $content = Payment::query()->get();

        return DataTables::of($content)
            ->addIndexColumn()
            ->addColumn('supporter', function ($row) {
                return $row->supporter->name;
            }) 
            ->addColumn('payment_method', function ($row) {
                return $row->payment_method->name;
            }) 
            ->addColumn('amount', function ($row) {
                return $row->amount;
            }) 
            ->addColumn('note', function ($row) {
                return $row->note;
            }) 
            ->addColumn('actions', function ($row) {
                return view('pages.admin.payments.buttons', [
                    'content' => $row
                ]);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
    
    public function service_types_list()
    {
        $content = ServiceType::query()->get();

        return DataTables::of($content)
            ->addIndexColumn()
            ->addColumn('actions', function ($row) {
                return view('pages.admin.service-types.buttons', [
                    'content' => $row
                ]);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
