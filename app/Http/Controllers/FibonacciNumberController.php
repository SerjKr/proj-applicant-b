<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\UseCases\FibonacciService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FibonacciNumberController extends Controller
{
    /**
     * @var FibonacciService
     */
    private $service;

    public function __construct(FibonacciService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function store(StoreRequest $request)
    {
        $fibonacci = $this->service->nearestFibonacci($request->my_number);
        $fib = $this->service->create($fibonacci);

        return response()->json($fib, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
