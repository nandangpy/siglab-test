<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reference;
use Illuminate\Support\Facades\Http;

class SigapiController extends Controller
{
    //
    public function fetchData()
    {
        // $response = Http::get('https://bsby.siglab.co.id/api/test-programmer?email=nandang.own@gmail.com');
        $url = "https://bsby.siglab.co.id/api/test-programmer";
        $params = ["email" => 'contact.nandang@gmail.com',];
        $activeselected = ['type' => '', 'status' => '', 'attachment' => '', 'discount' => ''];


        try {
            $response = Http::withoutVerifying()->get($url, $params);
            $data = $response->json();
            $data['results'] = $this->mapTypeToTitle($data['results']);

            $categoryrefer = Reference::all();

            return view('siglab.fetchdata', compact('data', 'categoryrefer', 'activeselected'));
        } catch (\Exception $e) {

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }




    public function fetchDataAndFilter(Request $request)
    {

        // dd($request->all());

        $url = "https://bsby.siglab.co.id/api/test-programmer";
        $params = ["email" => 'nandang.own@gmail.com',];
        $response = Http::withoutVerifying()->get($url, $params);

        if ($response->successful()) {
            // Decode the JSON response
            $data = $response->json();
            $data['results'] = $this->mapTypeToTitle($data['results']);
            $filteredData = collect($data['results']);
            $userOptions = $request->only(['type', 'status', 'attachment', 'discount']);

            foreach ($userOptions as $key => $value) {
                if (!empty($value)) {
                    $filteredData = $filteredData->where($key, $value);
                }
            }
            $data['results'] = $filteredData->toArray();

            $activeselected = $request->all();

            $categoryrefer = Reference::all();
            return view('siglab.fetchdata', compact('data', 'categoryrefer', 'activeselected'));
        } else {

            return response()->json(['error' => 'Failed to fetch data from the external API'], 500);
        }
    }

    private function mapTypeToTitle($results)
    {
        $referenceTable = Reference::all()->keyBy('id');

        foreach ($results as &$item) {
            if (isset($item['type']) && isset($referenceTable[$item['type']])) {
                $item['type'] = $referenceTable[$item['type']]->title;
            }
        }
        return $results;
    }
}
