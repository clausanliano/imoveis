<?php

namespace Database\Seeders;

use App\Models\Opm;
use Illuminate\Database\Seeder;

class OpmSeeder extends Seeder
{
    public function run()
    {
        $lista = [
            '01ºBPM', '02ºBPM', '03ºBPM', '04ºBPM', '05ºBPM', '06ºBPM', '07ºBPM', '08ºBPM', '09ºBPM',
            '10ºBPM', '11ºBPM', '12ºBPM', '13ºBPM', '14ºBPM', '15ºBPM', '16ºBPM',
            'BOPE', 'BPCHOQUE', 'BPRED', 'BPAMB',
            '01ªCIPM', '02ªCIPM', '03ªCIPM', '04ªCIPM', '05ªCIPM', '06ªCIPM', '07ªCIPM',
            'ROCAM', 'RPMONT',
            'CPRE', 'CPC', 'CPM', 'CPRI', 'CPRII', 'CPRII', 'CPRIV',
            'DPS', 'DAL', 'DTIC', 'DP', 'DJD', 'DF', 'DS', 'DE'
        ];

        foreach ($lista as $item) {
            Opm::create([
                'nome' => $item,
                'imovel_id' => 1,
                'observacao' => '',
            ]);
        }
    }
}
