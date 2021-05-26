<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleRequest;
use App\Models\Category;
use Exception;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\PeopleRepository;
use App\Services\People\CreatePeople\Contracts\CreatePeopleService;
use App\Services\People\UpdatePeople\Contracts\UpdatePeopleService;

class PeopleController extends Controller
{

    /**
     * Bloqueio do método index para os usuários normais.
     */
    public function __construct() {
        $this->middleware('category.people', ['only' => ['index']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $peopleRepository = app(PeopleRepository::class);

        $user = Auth::user();

        $peoples = $peopleRepository->getPeoples($user->people_id);
        $categories = Category::get();

        return view('peoples.index', compact('peoples', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeopleRequest $request)
    {
        $peopleService = app(CreatePeopleService::class);

        try {
            $people = $peopleService->setDados($request->all())->handle();

            return redirect()->route('peoples.show', ['people' => $people->id])->with('success', 'Pessoa cadastrada com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Houve um erro ao realizar o procedimento: ' . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        return view('peoples.show', compact('people'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        $peopleService = app(UpdatePeopleService::class);

        try {
            $people = $peopleService->setDados($request->all())
                        ->setPeople($people)
                        ->handle();

            return redirect()->route('peoples.index')->with('success', 'Pessoa atualizada com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Houve um erro ao realizar o procedimento: ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        try {
            $people->delete();

            return redirect()->route('peoples.index')->with('success', 'Pessoa excluída com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Houve um erro ao realizar o procedimento: ' . $th->getMessage());
        }
    }
}
