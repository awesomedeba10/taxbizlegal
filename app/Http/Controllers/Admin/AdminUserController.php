<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index(Request $request) {
            $query = Admin::query();

            if ($request->filled('query')) {
                $search = $request->input('query');

                $query->where(function ($q) use ($search) {
                    $q->where('email', 'like', "%{$search}%")
                    ->orWhere('first_name', 'like', "%{$search}%")
                    ->orWhere('designation', 'like', "%{$search}%");
                });
            }

            /** @noinspection PhpUndefinedMethodInspection */
            $users = $query->paginate(10)->withQueryString();

        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function create(Request $request) {
        Admin::create([
            'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
            'designation' => $request->designation,
            'phone'       => $request->phone,
            'email'       => $request->email,
            'is_active'   => true,
            'password'    => Hash::make($request->password),
        ]);

    return redirect()->route('admin.users.index')->with('success', 'Admin user created successfully.');
    }
}
