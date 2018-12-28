<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use Carbon\Carbon;
use DB;

class StatsController extends Controller
{
    public function indexStories()
    {
        $monthly = $this->getMonthlyCount();
        $monthlyPublished = $this->getMonthlyCount('published');
        $monthlyDraft = $this->getMonthlyCount('draft');
        return view('stats.stories', [
            'monthly' => $monthly,
            'draft'   => $monthlyDraft
        ]);
    }

    public function indexAlbums()
    {
        return view('error.503');
    }

    public function getMonthlyCount($status = null)
    {
        if ($status) {
            $stories = Story::select('id', 'created_at')->where('status', $status)
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        } else {
            $stories = Story::select('id', 'created_at')
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        }

        $temp = [];
        $count = [];

        foreach ($stories as $key => $value) {
            $temp[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($temp[$i])){
                $count[$i] = $temp[$i];    
            }else{
                $count[$i] = 0;    
            }
        }

        return $count;
    }
}
