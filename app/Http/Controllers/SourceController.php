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
        DB::enableQueryLog();
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
            'Genrebooks' => genrebook::where('LogicalDelete', 0)->get(), 'livre'=> [],
            'Retailers' => retailer::where('LogicalDelete', 0)->get(), 'Sentence' => [],
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

                $Genrebook= genrebook::firstOrCreate(['NameGenre' => $request->get('NameGenre')]);
                $attributes = $request->only(['Title_Retailer', 'Site']);
                $Retailer = Retailer::where('Title_Retailer', '=', $attributes['Title_Retailer'])
                    ->orWhere('Site', '=', $attributes['Site']) ->firstOrCreate($attributes);

                $attributes = $request->only([
                    'Title_Livre',
                    'Volume',
                    'Image',
                ]);
                $attributes['genrebook_id']= $Genrebook->id;

                $livre = Livre::where('Title_Livre', '=', $attributes['Title_Livre'])
                    ->orWhere('genrebook_id', '=', $attributes['genrebook_id'])
                    ->orWhere('Volume', '=', $attributes['Volume'])
                    ->orWhere('LogicalDelete', 0)->firstOrCreate($attributes);

                $attributes = $request->only([
                    'Price',
                ]);
                $attributes['livre_id'] = $livre->id;
                $attributes['retailer_id'] = $Retailer->id;

                sentence::Where('livre_id', '=', $attributes['livre_id'])
                    ->orWhere('retailer_id', '=', $attributes['retailer_id'])
                    ->orWhere('Price', '=', $attributes['Price'])->firstOrCreate($attributes);
                if (source::where('user_id', '=', $request->user()->id)
                    ->orWhere('livre_id', '=', $livre->id)
                    ->orWhere('Condition',  0)->orWhere('LogicalDelete',  0)->count()>0)
                source::Where('user_id', '=', $request->user()->id)
                    ->orWhere('livre_id', '=', $livre->id)
                    ->orWhere('Condition',  0)->orWhere('LogicalDelete',  0)->firstOrCreate(['user_id' => $request->user()->id, 'livre_id'=> $livre->id]);
//            }


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

        dd(DB::getQueryLog());
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
        dd(DB::getQueryLog());
       // source::where('id', $request->id)->update(['LogicalDelete' => 1]);
        //$source::saved(['LogicalDelete', 1]);
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
