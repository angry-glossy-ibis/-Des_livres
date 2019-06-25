<?php

namespace App\Http\Controllers;

use App\genrebook;
use App\Livre;
use App\retailer;
use App\sentence;
use App\source;
use DB;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class SourceController extends Controller
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
            'Sources' => source::whereRaw('user_id = ? and LogicalDelete = 0', auth()->id())->paginate(8)
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

        return redirect()->action('SourceController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(source $source)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(source $source)
    {
        return view('livres.edit',
            ['source' => $source]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, source $source)
    {
        //source::where('id', $Source->id)->update(['LogicalDelete' => 1]);
        $source->update(['LogicalDelete' => 1]);
        return redirect()->action('SourceController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(source $source)
    {
        //
    }
}
