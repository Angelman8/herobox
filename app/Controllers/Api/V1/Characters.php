<?php

namespace App\Controllers\Api\V1;

use Illuminate\Http\Request;

use Response;
use App\Http\Requests;
use App\Controllers\Controller;
use App\Models\Character\Character;

class Characters extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $characters = Character::all();

        if ($characters->isEmpty()) {
            return Response::json([
                'error' => [
                    'message' => 'No content',
                ],
            ], 404);
        }

        return Response::json([
            'data' => $characters,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $character = new Character([
            'first_name' => 'Arcadia',
            'last_name' => 'Townsend',
            'description' => 'A test character for testing purposes. Testy test.',
        ]);

        $character->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display a specific character.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $character = Character::find($id);

        if (!$character) {
            return Response::json([
                'error' => [
                    'message' => 'Character does not exist',
                ],
            ], 404);
        }

        return Response::json([
            'data' => $lesson,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
