<?php

namespace App\Http\Controllers\Api;

use App\Race;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RaceController extends Controller
{
    public function index()
    {
        $types = [
            'Thoroughbred',
            'Greyhounds',
            'Harness'
        ];

        $results = collect();
        foreach ($types as $type) {
            $results = $results->merge(
                Race::with(['meeting', 'competitors'])
                    ->whereType($type)
                    ->ofAvaliable()
                    ->orderBy('suspend', 'asc')
                    ->limit(10)
                    ->get()
            );
        }

        return $results;
    }
}
