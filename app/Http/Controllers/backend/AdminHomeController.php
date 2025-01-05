<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Admins;
use App\Models\backend\FAQs;
use App\Models\backend\Team;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TotalAdmins = Admins::count();
        $TotalTeam = Team::count();
        $TotalFAQs = FAQs::count();

        return view('backend.index', compact('TotalAdmins', 'TotalTeam', 'TotalFAQs'));
    }

    public function registerAdmin()
    {
        $url = url('/admin/register');
        $data = compact('url');

        return view('backend.admin-add')->with($data);
    }

    public function submitAdminRecord(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'contact' => 'required',
        ]);

        $admin = new Admins();
        $admin->first_name = $request['first_name'];
        $admin->last_name = $request['last_name'];
        $admin->email = $request['email'];
        $admin->contact = $request['contact'];
        $admin->password = bcrypt($request['password']); // Ensure to hash the password
        $admin->status = 1;
        $admin->save();

        return redirect('/admin/admins-list');
    }

    public function showAdminRecord()
    {
        $admins = Admins::all();
        $data = compact('admins');

        return view('backend/admins-list')->with($data);
    }

    public function deleteAdminRecord(string $id)
    {
        $admin = Admins::find($id);
        if (! is_null($admin)) {
            $admin->delete();
        }

        return redirect()->route('admin.show');
    }

    public function editAdminRecord($id)
    {
        $admin = Admins::find($id);
        if (is_null($admin)) {
            return redirect()->route('admin.show');
        } else {
            $url = url('/admin/update').'/'.$id;
            $data = compact('admin', 'url');

            return view('backend.admin-add')->with($data);
        }
    }

    public function updateAdminRecord(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'contact' => 'required',
        ]);

        $admin = Admins::find($id);
        if ($admin) {
            $admin->first_name = $request['first_name'];
            $admin->last_name = $request['last_name'];
            $admin->email = $request['email'];
            $admin->contact = $request['contact'];
            $admin->password = bcrypt($request['password']); // Ensure to hash the password
            $admin->save();
        }

        return redirect()->route('admin.show');
    }
}
