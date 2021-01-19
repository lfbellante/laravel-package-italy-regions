<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Seeder;

use Log;

class Region extends Seeder
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
					Log::debug($response->json());
				}

			break;
		}
	}
}
