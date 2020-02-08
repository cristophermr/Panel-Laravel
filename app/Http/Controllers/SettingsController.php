<?php

namespace App\Http\Controllers;

use App\Libraries\Utilities;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    private $Utilities = "";
    /**
     * SettingsController constructor.
     */
    public function __construct()
    {
        $this->middleware("auth");
        $this->Utilities = new Utilities();
    }

    public function index()
    {
        $Buttons = $this->Utilities->acciones();
        $configs = Setting::all();
        return view('config.index',compact('configs','Buttons'));
    }
    public function store(Request $request)
    {
        if(Setting::where("key",$request->key)->count() > 0)
        {
            return back()->with('alert-error', 'La llave ya existe, por favor ingresar otra llave');
        }else
        {
            $Config = new Setting();
            $Config->name = $request->title;
            $Config->key = $request->key;
            $Config->value = $request->value;
            $Config->save();
            return back()->with('alert', 'Se agrego el registro!');
        }

    }
    public function update(Request $request)
    {
        $config = Setting::findOrFail($request->id);
        $config->update($request->all());
        return back()->with('alert', 'Actualizado!');
    }
}
