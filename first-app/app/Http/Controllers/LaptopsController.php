<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Http\Requests\LaptopFormRequest;

class LaptopsController extends Controller
{
    private static function getData() {
        return [
            ['id' => 1, 'name' => 'lenovo', 'brand' => 'lenovo'],
            ['id' => 2, 'name' => 'dell', 'brand' => 'dell'],
            ['id' => 3, 'name' => 'acer', 'brand' => 'acer'],
            ['id' => 4, 'name' => 'asus', 'brand' => 'asus'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET

        return view('laptops.index', [
            'laptops' => Laptop::all(),
            'userInput' => '<script>alert("hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET
        return view('laptops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaptopFormRequest $request)
    {
        // POST
        $data = $request->validated();

        Laptop::create($data);

        return redirect()->route('laptops.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $laptop)
    {
        // GET
        return view('laptops.show', [
            'laptop' => $laptop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        // GET
        return view('laptops.edit', [
            'laptop' => $laptop
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LaptopFormRequest $request, Laptop $laptop)
    {
        // POST 
        $data = $request->validated();

        $laptop->update($data);

        return redirect()->route('laptops.show', $laptop->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE
    }
}