<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetAllToursRequest;
use App\Http\Requests\PostOrPutTourRequest;
use App\Tour;

class ToursController extends Controller
{
    public function getAll(GetAllToursRequest $request)
    {
        $tours = Tour::getAll($request->query('limit', null), $request->query('offset', null));
        return response()->json($tours);
    }

    public function getOne(Tour $tour)
    {
        return response()->json($tour);
    }

    public function post(PostOrPutTourRequest $request)
    {
        $tour = new Tour();
        $this->getFromRequestAndSaveOnTour($tour, $request);
        return response()->json(['id' => $tour->id]);
    }

    public function update(Tour $tour, PostOrPutTourRequest $request)
    {
        $this->getFromRequestAndSaveOnTour($tour, $request);
    }

    public function delete(Tour $tour)
    {
        $tour->delete();
        $tour->save();
    }

    private function getFromRequestAndSaveOnTour($tour, $request)
    {
        $tour->start = date('Y-m-d H:i:s', $request->input('start'));
        $tour->end = date('Y-m-d H:i:s', $request->input('end'));
        $tour->price = $request->input('price');
        $tour->save();
    }
}