<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultSettings extends Seeder
{
    public function run(): void
    {
        $settings = [
            [
                'key' => 'geo.farsi_redirect_enabled',
                'value' => true,
                'group' => 'geo',
                'description' => 'Redirect Iranian visitors to fa.pouyait.nl',
            ],
            [
                'key' => 'optic.tracking_enabled',
                'value' => true,
                'group' => 'optic',
                'description' => 'Collect visitor analytics using Laravel queue jobs',
            ],
            [
                'key' => 'geo.detection_enabled',
                'value' => true,
                'group' => 'geo',
                'description' => 'Detect visitor country using MaxMind GeoIP',
            ],
            [
                'key' => 'optic.rate_limiting_enabled',
                'value' => true,
                'group' => 'optic',
                'description' => 'Limit duplicate tracking events per visitor',
            ],
            [
                'key' => 'website.maintenance_enabled',
                'value' => false,
                'group' => 'website',
                'description' => 'Show a maintenance page to public visitors',
            ],
            [
                'key' => 'auth.registration_enabled',
                'value' => false,
                'group' => 'auth',
                'description' => 'Allow new public accounts to be created',
            ],
        ];

        foreach ($settings as $setting) {
            DB::table('site_settings')->insertOrIgnore([
                'key' => $setting['key'],
                'value' => json_encode($setting['value']),
                'group' => $setting['group'],
                'description' => $setting['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
