<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\Article;
use App\Models\Content;
use App\Models\Village;
use App\Models\Resident;
use App\Models\Structure;
use App\Models\Gallery;
use App\Models\VisionMision;
use Illuminate\Http\Request;
use App\Models\EducationLevel;
use App\Models\VillageProgram;
use App\Models\ComunityEconomy;
use App\Models\LivingCondition;
use App\Models\MaterializedView;
use App\Models\TransportationMean;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {


        $galleries = Gallery::limit(8)->get();
        $articles = Article::where("is_show", "=", 1)->limit(4)->get();
        $currentVillageHead = Structure::where("position", "=", "Kepala Desa")->limit(1)->get();
        $employees = Structure::whereNotIn('position', ['Kepala Desa', 'Kepala Desa Lama'])->get();
        $kepala_desa = Structure::where("position", "=", "Kepala Desa")->first();
        $recomendationArticles = Article::inRandomOrder()
            ->take(3)
            ->get();

        $residentCount = Resident::count();
        $manCount = Resident::where('gender', 'Laki - Laki')->count();
        $womanCount = Resident::where('gender', 'Perempuan')->count();
        $villageCount = Village::count();


        return view("pages.landing.index", compact(
            "articles",
            "galleries",
            'kepala_desa',
            "currentVillageHead",
            "employees",
            "recomendationArticles",
            "manCount",
            "womanCount",
            "villageCount",
            "residentCount",
        ));
    }


    public function profile()
    {
        $currentVillageHead = Structure::where("position", "=", "Kepala Desa")->limit(1)->get();
        $employees = Structure::whereNotIn('position', ['Kepala Desa', 'Kepala Desa Lama'])->get();
        $formerVillageHeads = Structure::where("position", "=", "Kepala Desa Lama")->get();


        $visionsMissions = VisionMision::all("visi", "misi");
        $all_programs = VillageProgram::get();



        return view("pages.landing.profile", [
            'currentVillageHead' => $currentVillageHead,
            'employees' => $employees,
            'formerVillageHeads' => $formerVillageHeads,
            "visionsMissions" =>  $visionsMissions,
            "all_programs" => $all_programs,

        ]);
    }

    public function data()
    {
        $transportationData = DB::table('materialized_views')
            ->where('name', 'transportation_means')
            ->get()
            ->map(function ($item) {
                return json_decode($item->data, true);
            });

        $educationData = DB::table('materialized_views')
            ->where('name', 'education_levels')
            ->get()
            ->map(function ($item) {
                return json_decode($item->data, true);
            });


        $economyData = DB::table('materialized_views')
            ->where('name', 'comunity_economies')
            ->get()
            ->map(function ($item) {
                return json_decode($item->data, true);
            });

        $villages = $transportationData->pluck('village_name')->toArray();

        $transportationStats = [
            'carCounts' => $transportationData->pluck('car_count')->toArray(),
            'motorcycleCounts' => $transportationData->pluck('motorcycle_count')->toArray(),
            'bentorCounts' => $transportationData->pluck('bentor_count')->toArray(),
            'carOwners' => $transportationData->pluck('car_owner')->toArray(),
            'motorcycleOwners' => $transportationData->pluck('motorcycle_owner')->toArray(),
            'bentorOwners' => $transportationData->pluck('bentor_owner')->toArray(),
        ];

        $educationStats = [
            'belumSekolahL' => $educationData->pluck('belum_l')->toArray(),
            'belumSekolahP' => $educationData->pluck('belum_p')->toArray(),
            'tamatSDL' => $educationData->pluck('sd_l')->toArray(),
            'tamatSDP' => $educationData->pluck('sd_p')->toArray(),
            'tamatSMPL' => $educationData->pluck('smp_l')->toArray(),
            'tamatSMPP' => $educationData->pluck('smp_p')->toArray(),
            'tamatSMAL' => $educationData->pluck('sma_l')->toArray(),
            'tamatSMAP' => $educationData->pluck('sma_p')->toArray(),
            'tamatPTL' => $educationData->pluck('pt_l')->toArray(),
            'tamatPTP' => $educationData->pluck('pt_p')->toArray(),
        ];

        $economyStats = [
            'pertokoan' => $economyData->pluck('pertokoan_owner')->toArray(),
            'perkiosan' => $economyData->pluck('perkiosan_owner')->toArray(),
            'rm_owner' => $economyData->pluck('rm_owner')->toArray(),
            'perbengkelan' => $economyData->pluck('perbengkelan_owner')->toArray(),
            'mebel' => $economyData->pluck('mebel_owner')->toArray(),
            'pangkalanLPG' => $economyData->pluck('pangkalan_lpg_owner')->toArray(),
            'taylor' => $economyData->pluck('taylor_owner')->toArray(),
            'lainnya' => $economyData->pluck('lainnya_owner')->toArray(),
            'villages' => $economyData->pluck('village_name')->toArray(),
        ];

        $livingConditionsData = DB::table('materialized_views')
            ->where('name', 'living_conditions')
            ->get()
            ->map(function ($item) {
                return json_decode($item->data, true);
            });


        $livingConditionsStats = [
            'atapGenteng' => $livingConditionsData->pluck('atap_genteng')->toArray(),
            'atapSeng' => $livingConditionsData->pluck('atap_seng')->toArray(),
            'atapRumbia' => $livingConditionsData->pluck('atap_rumbia')->toArray(),
            'dindingSemen' => $livingConditionsData->pluck('dinding_semen')->toArray(),
            'dindingKayu' => $livingConditionsData->pluck('dinding_kayu')->toArray(),
            'lantaiSemen' => $livingConditionsData->pluck('lantai_semen')->toArray(),
            'lantaiKeramik' => $livingConditionsData->pluck('lantai_keramik')->toArray(),
            'lantaiLainnya' => $livingConditionsData->pluck('lantai_lainnya')->toArray(),
        ];

        $farmData = DB::table('materialized_views')
            ->where('name', 'farms')
            ->get()
            ->map(function ($item) {
                return json_decode($item->data, true);
            });

        $farmStats = [
            'cowCounts' => $farmData->pluck('cow_count')->toArray(),
            'goatCounts' => $farmData->pluck('goat_count')->toArray(),
            'dogCounts' => $farmData->pluck('dog_count')->toArray(),
            'catCounts' => $farmData->pluck('cat_count')->toArray(),
            'chickenCounts' => $farmData->pluck('chicken_count')->toArray(),
            'duckCounts' => $farmData->pluck('duck_count')->toArray(),
            'cowOwners' => $farmData->pluck('cow_owner')->toArray(),
            'goatOwners' => $farmData->pluck('goat_owner')->toArray(),
            'dogOwners' => $farmData->pluck('dog_owner')->toArray(),
            'catOwners' => $farmData->pluck('cat_owner')->toArray(),
            'chickenOwners' => $farmData->pluck('chicken_owner')->toArray(),
            'duckOwners' => $farmData->pluck('duck_owner')->toArray(),
            'villages' => $farmData->pluck('village_name')->toArray(),
        ];

        // Menghitung jumlah laki-laki dan perempuan
        $maleCount = Resident::where('gender', 'Laki - Laki')->count();
        $femaleCount = Resident::where('gender', 'Perempuan')->count();
        $totalResidents = Resident::count();

        $statusResidents = Resident::select('status_resident', DB::raw('count(*) as count'))
            ->groupBy('status_resident')
            ->get();



        return view("pages.landing.data", compact(
            "villages",
            "transportationStats",
            "educationStats",
            "economyStats",
            "livingConditionsStats",
            "farmStats",
            'maleCount',
            'femaleCount',
            'totalResidents',
            'statusResidents',

        ));
    }

    public function refreshMView(Request $request)
    {
        $token = $request->query('token');
        $secret = env('TOKEN_MV', 'fzrsahi');

        if (!$token || $token !== $secret) {
            return redirect("/");
        }

        MaterializedView::truncate();

        MaterializedView::insertUsing(
            ['name', 'data'],
            EducationLevel::join('villages', 'education_levels.village_id', '=', 'villages.id')
                ->select(
                    DB::raw("'education_levels' as name"),
                    DB::raw('JSON_OBJECT(
                    "village_name", villages.village_name,
                    "belum_l", belum_l,
                    "belum_p", belum_p,
                    "sd_l", sd_l,
                    "sd_p", sd_p,
                    "smp_l", smp_l,
                    "smp_p", smp_p,
                    "sma_l", sma_l,
                    "sma_p", sma_p,
                    "pt_l", pt_l,
                    "pt_p", pt_p
                ) as data')
                )
        );

        MaterializedView::insertUsing(
            ['name', 'data'],
            ComunityEconomy::join('villages', 'comunity_economies.village_id', '=', 'villages.id')
                ->select(
                    DB::raw("'comunity_economies' as name"),
                    DB::raw('JSON_OBJECT(
                    "village_name", villages.village_name,
                    "pertokoan_count", pertokoan_count,
                    "pertokoan_owner", pertokoan_owner,
                    "perkiosan_count", perkiosan_count,
                    "perkiosan_owner", perkiosan_owner,
                    "rm_count", rm_count,
                    "rm_owner", rm_owner,
                    "perbengkelan_count", perbengkelan_count,
                    "perbengkelan_owner", perbengkelan_owner,
                    "mebel_count", mebel_count,
                    "mebel_owner", mebel_owner,
                    "pangkalan_lpg_count", pangkalan_lpg_count,
                    "pangkalan_lpg_owner", pangkalan_lpg_owner,
                    "taylor_count", taylor_count,
                    "taylor_owner", taylor_owner,
                    "lainnya_count", lainnya_count,
                    "lainnya_owner", lainnya_owner
                ) as data')
                )
        );

        MaterializedView::insertUsing(
            ['name', 'data'],
            TransportationMean::join('villages', 'transportation_means.village_id', '=', 'villages.id')
                ->select(
                    DB::raw("'transportation_means' as name"),
                    DB::raw('JSON_OBJECT(
                    "village_name", villages.village_name,
                    "car_count", car_count,
                    "car_owner", car_owner,
                    "motorcycle_count", motorcycle_count,
                    "motorcycle_owner", motorcycle_owner,
                    "bentor_count", bentor_count,
                    "bentor_owner", bentor_owner
                ) as data')
                )
        );

        MaterializedView::insertUsing(
            ['name', 'data'],
            LivingCondition::join('villages', 'living_conditions.village_id', '=', 'villages.id')
                ->select(
                    DB::raw("'living_conditions' as name"),
                    DB::raw('JSON_OBJECT(
                    "village_name", villages.village_name,
                    "atap_genteng", atap_genteng,
                    "atap_seng", atap_seng,
                    "atap_rumbia", atap_rumbia,
                    "dinding_semen", dinding_semen,
                    "dinding_kayu", dinding_kayu,
                    "dinding_lainnya", dinding_lainnya,
                    "lantai_semen", lantai_semen,
                    "lantai_keramik", lantai_keramik,
                    "lantai_lainnya", lantai_lainnya
                ) as data')
                )
        );

        MaterializedView::insertUsing(
            ['name', 'data'],
            Farm::join('villages', 'farms.village_id', '=', 'villages.id')
                ->select(
                    DB::raw("'farms' as name"),
                    DB::raw('JSON_OBJECT(
                    "village_name", villages.village_name,
                    "cow_count", cow_count,
                    "cow_owner", cow_owner,
                    "goat_count", goat_count,
                    "goat_owner", goat_owner,
                    "dog_count", dog_count,
                    "dog_owner", dog_owner,
                    "cat_count", cat_count,
                    "cat_owner", cat_owner,
                    "chicken_count", chicken_count,
                    "chicken_owner", chicken_owner,
                    "duck_count", duck_count,
                    "duck_owner", duck_owner
                ) as data')
                )
        );

        return redirect()->back();
    }
}
