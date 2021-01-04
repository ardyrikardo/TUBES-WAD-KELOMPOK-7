<?php

namespace Modules\Homepage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Modules\Program\Entities\Program;
use Modules\Program\Entities\ProgramBuy;
use Modules\Program\Entities\ProgramCategory;
use Modules\Program\Entities\ProgramLocation;
use Modules\Program\Entities\ProgramType;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $types = ProgramType::where('status_id', 1)->get();
        $cats = ProgramCategory::where('status_id', 1)->get();
        $locs = ProgramLocation::all();
        $progs = ProgramType::where('status_id', 1)->inRandomOrder()->take(3)->get();
        return view('homepage::index', compact('types', 'cats', 'locs', 'progs'));
    }

    public function tipe(ProgramType $programtype)
    {
        $types = ProgramType::where('status_id', 1)->get();
        $cats = ProgramCategory::where('status_id', 1)->get();
        $locs = ProgramLocation::all();

        $title = $programtype->name;
        return view('homepage::tipe', compact('types', 'cats', 'locs', 'title', 'programtype'));
    }

    public function cari(Request $request)
    {
        $types = ProgramType::where('status_id', 1)->get();
        $cats = ProgramCategory::where('status_id', 1)->get();
        $locs = ProgramLocation::all();

        $tipe = ProgramType::find($request->program_type_id);
        $kat = ProgramCategory::find($request->program_category_id);
        $lok = ProgramLocation::find($request->program_location_id);

        $title = "Hasil Pencarian: <sup><small>Program</small></sup> " . $tipe->name . ", <sup><small>Kategori</small></sup> " . $kat->name . ", <sup><small>Lokasi</small></sup> " . $lok->name;
        $progs = Program::where('program_type_id', $request->program_type_id)
            ->where('program_category_id', $request->program_category_id)
            ->where('program_location_id', $request->program_location_id)
            ->get();
        return view('homepage::cari', compact('types', 'cats', 'locs', 'title', 'progs'));
    }

    public function program(Program $program)
    {
        $types = ProgramType::where('status_id', 1)->get();
        $cats = ProgramCategory::where('status_id', 1)->get();
        $locs = ProgramLocation::all();

        $title = $program->name;

        return view('homepage::program', compact('types', 'cats', 'locs', 'title', 'program'));
    }

    public function daftar_program(Program $program)
    {

        $p = new ProgramBuy();
        $p->program_id = $program->id;
        $p->user_id = Auth::id();
        $p->price = $program->price;
        $p->save();
        $p->payment_code = "TND-". Auth::id() ."-". Str::slug(Auth::user()->name) ."-". $p->id;
        $p->save();

        Http::post(config('app.ezpay').'transaksi', [
            'payment_code' => $p->payment_code,
            'price' => $p->price,
            'email' => Auth::user()->email,
            'catatan' => "Pembayaran untuk T&D Jogja " . $p->program->name . " untuk akun " . Auth::user()->email
        ]);

        return redirect()->route('program.myprogram');
    }
}
