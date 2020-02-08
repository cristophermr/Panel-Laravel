<?php

namespace App\Http\Controllers;

use App\Libraries\Utilities;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    private $Utilities = "";

    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->middleware("auth");
        $this->Utilities = new Utilities();
    }

    function index()
    {
        $Buttons = $this->Utilities->acciones();
        $Roles = Role::all();
        $Users = User::all();
        $Countries = DB::table('countries')->get();
        $Provinces = DB::table('geo1')->get();
        return view('Users.index', compact("Buttons", "Users", "Roles", "Countries", "Provinces"));
    }

    function store(Request $request)
    {
        $rules = $request->validate([
            'dni' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users|max:120',
            'country' => 'required',
            'geo1' => 'required',
            'geo2' => 'required',
            'geo3' => 'required',
            'geo4' => 'required',
            'address' => 'required|min:10|max:191',
        ]);
        try {
            if ($request->rol != "") {
                $Pass = $this->Utilities->randomPassword();
                $User = new User();
                $User->dni = $request->dni;
                $User->name = $request->name;
                $User->birthday = $request->bd;
                $User->email = $request->email;
                $User->password = bcrypt($Pass);
                $User->nationality = $request->country;
                $User->province = $request->geo1;
                $User->canton = $request->geo2;
                $User->district = $request->geo3;
                $User->neighborhood = $request->geo4;
                $User->address = $request->address;
                $User->save();
                $User->syncRoles($request->rol);
                $this->Utilities->SendPassword($User, $Pass);
                return back()->with('alert', 'Se agrego el usuario correctamente!');
            } else {
                return back()->with('alert-error', 'No se selecciono un rol para el usuario');
            }
        } catch (\Exception $e) {
            $this->Utilities->Saveerrors($e);
            return back()->with('alert-error', 'Algo salio mal, por favor vuelva a intentarlo o contacte al proveedor de servicios');
        }
    }

    function update(Request $request)
    {
        try {
            if ($request->rol != "") {
                $User = User::findOrFail($request->id);
                $User->name = $request->name;
                $User->email = $request->email;
                if ($request->change_password == true) {
                    $Pass = $this->Utilities->randomPassword();
                    $User->password = bcrypt($Pass);
                    $this->Utilities->SendPassword($User, $Pass);
                }
                $User->lock = $request->lock;
                $User->save();
                $User->syncRoles($request->rol);
                return back()->with('alert', 'Se actualizo el usuario correctamente!');
            } else {
                return back()->with('alert-error', 'No se selecciono un rol para el usuario');
            }
        } catch (\Exception $e) {
            $this->Utilities->Saveerrors($e);
            return back()->with('alert-error', 'Algo salio mal, por favor vuelva a intentarlo o contacte al proveedor de servicios');
        }
    }

    function destroy(Request $request)
    {
        try {
            $User = User::findOrFail($request->id);
            $User->delete();
            return back()->with('alert', 'Se actualizo el usuario correctamente!');

        } catch (\Exception $e) {
            $this->Utilities->Saveerrors($e);
            return back()->with('alert-error', 'Algo salio mal, por favor vuelva a intentarlo o contacte al proveedor de servicios');
        }
    }
}