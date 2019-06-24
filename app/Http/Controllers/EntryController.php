<?php

namespace App\Http\Controllers;

use App\Entry;
use App\genrebook;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use App\Http\Requests\StoreRoomRequest;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        //Выборка всех записей в блоге
        $entries = Entry::orderBy('id')->paginate(1);

        return view('entries.index', [
            'entries' => $entries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Создаём в ОЗУ объект класса Entry
        $entry = new Entry();

        //Вызов шаблона
        //resources/views/entries/create.blade.php
        return view('entries.create', [
            'entry' => $entry,
        ]);

        //return redirect(route('entries.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //КАК ВОЗВРАЩАТЬ БЕЗ ГАЛИМОГО ГОВНА
    public function store(StoreRoomRequest $request)
    {


//        $Genrebook = genrebook::created(['NameGenre' => $request->NameGenre]);
//
//        $attributes = $request->only([
//            'Title_Livre',
//            'Volume',
//            'Image',
//        ]);
//        $attributes['genrebook_id'] = $Genrebook->id;
//
//        $livre = Livre::create($attributes);
//
//        $Retailer

        //Внешний ключ, указывающий на автора записи
        //$attributes['user_id'] = $request->user()->id;
        //$attributes['user_id'] = 1;



        return redirect(route('entries.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        //Вызов шаблона
        //resources/views/entries/create.blade.php
        return view('entries.edit', [
            'entry' => $entry,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRoomRequest $request, Entry $entry)
    {
        $attributes = $request->only([
            'title',
            'content',
        ]);

        $entry -> update($attributes);

        return redirect(route('entries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function remove(Entry $entry)
    {
        return view('entries.remove', [
            'entry' => $entry,
        ]);
    }

    public function destroy(Entry $entry)
    {
        $entry->delete();

        return redirect(route('entries.index'));
    }
}
