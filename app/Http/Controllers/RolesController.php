<?php

namespace App\Http\Controllers;

use App\Libraries\Utilities;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
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
        $Roles   = Role::all();
        $Permissions = Permission::all();
        return view("Roles.index",compact('Buttons','Roles','Permissions'));
    }
    function store()
    {
        try
        {

        }
        catch (\Exception $e)
        {

        }
    }
    function update()
    {

    }
    function delete()
    {

    }
}
