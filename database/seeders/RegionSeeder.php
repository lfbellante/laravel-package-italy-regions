<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Seeder;
use Lfbellante\ItalyRegions\Models\Region;
use Carbon\Carbon;

class RegionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		switch (config('regions.source_type')){
			case 'json':
			default:
				$response = Http::get(config('regions.source'));
				if($response->ok()){
					foreach($response->json() as $region){
						$newRegion = Region::where('code', $region['regione']['codice'])->get();
						if($newRegion->count() == 0){
							$newRegion = new Region();
							$newRegion->code = $region['regione']['codice'];
							$newRegion->name = $region['regione']['nome'];
							$newRegion->created_at = Carbon::now()->format('Y-m-d H:i:s');
							$newRegion->updated_at = Carbon::now()->format('Y-m-d H:i:s');

							$newRegion->save();
						}
					}
				}
				break;
		}
	}
}
