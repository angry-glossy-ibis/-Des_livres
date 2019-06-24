<?php

namespace App\Http\Controllers;

use App\genrebook;
use App\Livre;
use App\retailer;
use App\sentence;
use App\source;
use DB;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',[
            'Sources' => source::whereRaw('user_id = ? and LogicalDelete = 0', auth()->id())->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('livres.create',[
            'Genrebook' => [], 'livre'=> [],
            'Retailer' => [], 'Sentence' => [],
            'Source' => [],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        if (DB::select('select * from genrebook where NameGenre = \' ? \'', [$request->input('NameGenre')]) == 0)
//        DB::insert('insert into genrebook (NameGenre) values (?)', [$request->input(NameGenre)]);
//        $id_GanreBook = DB::select('select * from genrebook where NameGenre = ?', [$request->input(NameGenre)]);

//        $livre = new Livre();
//        $livre = Livre::create();

        $Genrebook = genrebook::create(['NameGenre' => $request->NameGenre]);
        $Retailer = retailer::create(['Title_Retailer' => $request->Title_Retailer , 'Site' => $request->Site]);

        $attributes = $request->only([
            'Title_Livre',
            'Volume',
            'Image',
        ]);
        $attributes['genrebook_id'] = $Genrebook->id;

        $livre = Livre::create($attributes);
        sentence::create(['retailer_id' => $Retailer->id, 'livre_id' => $livre->id, 'Price' => $request->Price]);
        source::create(['user_id' => $request->user()->id, 'livre_id' => $livre->id, ]);

        return redirect()->action('LivreController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function edit(Livre $livre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livre $livre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livre $livre)
    {

    }
}
