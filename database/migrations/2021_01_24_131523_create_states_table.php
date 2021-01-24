<?php

use App\State;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('country_id');
            $table->string('name');
            $table->bigInteger('flag')->nullable();
            $table->timestamps(); 
        });



        //Seed States
        State::create([
            'country_id' => 1,
            'name' => 'Badakhshan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Badgis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Baglan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Balkh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Bamiyan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Farah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Faryab',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Gawr',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Gazni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Herat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Hilmand',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Jawzjan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Kabul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Kapisa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Khawst',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Kunar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Lagman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Lawghar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Nangarhar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Nimruz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Nuristan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Paktika',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Paktiya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Parwan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Qandahar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Qunduz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Samangan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Sar-e Pul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Takhar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Uruzgan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Wardag',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 1,
            'name' => 'Zabul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Berat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Bulqize',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Delvine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Devoll',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Dibre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Durres',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Elbasan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Fier',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Gjirokaster',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Gramsh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Has',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Kavaje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Kolonje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Korce',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Kruje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Kucove',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Kukes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Kurbin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Lezhe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Librazhd',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Lushnje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Mallakaster',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Malsi e Madhe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Mat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Mirdite',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Peqin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Permet',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Pogradec',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Puke',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Sarande',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Shkoder',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Skrapar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Tepelene',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Tirane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Tropoje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 3,
            'name' => 'Vlore',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => '\'Ayn Daflah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => '\'Ayn Tamushanat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Adrar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Algiers',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Annabah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Bashshar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Batnah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Bijayah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Biskrah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Blidah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Buirah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Bumardas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Burj Bu Arririj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Ghalizan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Ghardayah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Ilizi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Jijili',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Jilfah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Khanshalah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Masilah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Midyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Milah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Muaskar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Mustaghanam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Naama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Oran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Ouargla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Qalmah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Qustantinah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Sakikdah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Satif',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Sayda\'',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Sidi ban-al-\'Abbas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Suq Ahras',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Tamanghasat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Tibazah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Tibissah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Tilimsan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Tinduf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Tisamsilt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Tiyarat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Tizi Wazu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Umm-al-Bawaghi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Wahran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Warqla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Wilaya d Alger',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Wilaya de Bejaia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'Wilaya de Constantine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'al-Aghwat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'al-Bayadh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'al-Jaza\'ir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'al-Wad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'ash-Shalif',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 4,
            'name' => 'at-Tarif',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 5,
            'name' => 'Eastern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 5,
            'name' => 'Manu\'a',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 5,
            'name' => 'Swains Island',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 5,
            'name' => 'Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 6,
            'name' => 'Andorra la Vella',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 6,
            'name' => 'Canillo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 6,
            'name' => 'Encamp',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 6,
            'name' => 'La Massana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 6,
            'name' => 'Les Escaldes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 6,
            'name' => 'Ordino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 6,
            'name' => 'Sant Julia de Loria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Bengo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Benguela',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Bie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Cabinda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Cunene',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Huambo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Huila',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Kuando-Kubango',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Kwanza Norte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Kwanza Sul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Luanda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Lunda Norte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Lunda Sul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Malanje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Moxico',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Namibe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Uige',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 7,
            'name' => 'Zaire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 8,
            'name' => 'Other Provinces',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 9,
            'name' => 'Sector claimed by Argentina/Ch',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 9,
            'name' => 'Sector claimed by Argentina/UK',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 9,
            'name' => 'Sector claimed by Australia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 9,
            'name' => 'Sector claimed by France',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 9,
            'name' => 'Sector claimed by New Zealand',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 9,
            'name' => 'Sector claimed by Norway',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 9,
            'name' => 'Unclaimed Sector',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 10,
            'name' => 'Barbuda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 10,
            'name' => 'Saint George',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 10,
            'name' => 'Saint John',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 10,
            'name' => 'Saint Mary',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 10,
            'name' => 'Saint Paul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 10,
            'name' => 'Saint Peter',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 10,
            'name' => 'Saint Philip',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Buenos Aires',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Catamarca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Chaco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Chubut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Cordoba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Corrientes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Distrito Federal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Entre Rios',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Formosa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Jujuy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'La Pampa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'La Rioja',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Mendoza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Misiones',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Neuquen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Rio Negro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Salta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'San Juan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'San Luis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Santa Cruz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Santa Fe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Santiago del Estero',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Tierra del Fuego',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 11,
            'name' => 'Tucuman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Aragatsotn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Ararat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Armavir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Gegharkunik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Kotaik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Lori',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Shirak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Stepanakert',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Syunik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Tavush',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Vayots Dzor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 12,
            'name' => 'Yerevan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 13,
            'name' => 'Aruba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Auckland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Australian Capital Territory',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Balgowlah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Balmain',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Bankstown',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Baulkham Hills',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Bonnet Bay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Camberwell',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Carole Park',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Castle Hill',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Caulfield',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Chatswood',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Cheltenham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Cherrybrook',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Clayton',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Collingwood',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Frenchs Forest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Hawthorn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Jannnali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Knoxfield',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Melbourne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'New South Wales',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Northern Territory',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Perth',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Queensland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'South Australia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Tasmania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Templestowe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Victoria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Werribee south',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Western Australia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 14,
            'name' => 'Wheeler',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Bundesland Salzburg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Bundesland Steiermark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Bundesland Tirol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Burgenland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Carinthia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Karnten',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Liezen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Lower Austria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Niederosterreich',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Oberosterreich',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Salzburg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Schleswig-Holstein',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Steiermark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Styria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Tirol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Upper Austria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Vorarlberg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 15,
            'name' => 'Wien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Abseron',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Baki Sahari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Ganca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Ganja',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Kalbacar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Lankaran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Mil-Qarabax',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Mugan-Salyan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Nagorni-Qarabax',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Naxcivan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Priaraks',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Qazax',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Saki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Sirvan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 16,
            'name' => 'Xacmaz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => '\'Isa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => 'Badiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => 'Hidd',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => 'Jidd Hafs',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => 'Mahama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => 'Manama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => 'Sitrah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => 'al-Manamah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => 'al-Muharraq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 18,
            'name' => 'ar-Rifa\'a',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Bagar Hat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Bandarban',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Barguna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Barisal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Bhola',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Bogora',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Brahman Bariya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Chandpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Chattagam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Chittagong Division',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Chuadanga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Dhaka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Dinajpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Faridpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Feni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Gaybanda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Gazipur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Gopalganj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Habiganj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Jaipur Hat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Jamalpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Jessor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Jhalakati',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Jhanaydah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Khagrachhari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Khulna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Kishorganj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Koks Bazar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Komilla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Kurigram',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Kushtiya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Lakshmipur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Lalmanir Hat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Madaripur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Magura',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Maimansingh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Manikganj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Maulvi Bazar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Meherpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Munshiganj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Naral',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Narayanganj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Narsingdi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Nator',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Naugaon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Nawabganj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Netrakona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Nilphamari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Noakhali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Pabna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Panchagarh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Patuakhali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Pirojpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Rajbari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Rajshahi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Rangamati',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Rangpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Satkhira',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Shariatpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Sherpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Silhat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Sirajganj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Sunamganj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Tangayal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 19,
            'name' => 'Thakurgaon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Christ Church',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint Andrew',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint George',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint James',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint John',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint Joseph',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint Lucy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint Michael',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint Peter',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint Philip',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 20,
            'name' => 'Saint Thomas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 21,
            'name' => 'Brest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 21,
            'name' => 'Homjel\'',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 21,
            'name' => 'Hrodna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 21,
            'name' => 'Mahiljow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 21,
            'name' => 'Mahilyowskaya Voblasts',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 21,
            'name' => 'Minsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 21,
            'name' => 'Minskaja Voblasts\'',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 21,
            'name' => 'Petrik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 21,
            'name' => 'Vicebsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Antwerpen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Berchem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Brabant',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Brabant Wallon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Brussel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'East Flanders',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Hainaut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Liege',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Limburg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Luxembourg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Namur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Ontario',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Oost-Vlaanderen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Provincie Brabant',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Vlaams-Brabant',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'Wallonne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 22,
            'name' => 'West-Vlaanderen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 23,
            'name' => 'Belize',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 23,
            'name' => 'Cayo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 23,
            'name' => 'Corozal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 23,
            'name' => 'Orange Walk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 23,
            'name' => 'Stann Creek',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 23,
            'name' => 'Toledo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Alibori',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Atacora',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Atlantique',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Borgou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Collines',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Couffo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Donga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Littoral',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Mono',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Oueme',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Plateau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 24,
            'name' => 'Zou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 25,
            'name' => 'Hamilton',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 25,
            'name' => 'Saint George',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Bumthang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Chhukha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Chirang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Daga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Geylegphug',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Ha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Lhuntshi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Mongar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Pemagatsel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Punakha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Rinpung',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Samchi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Samdrup Jongkhar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Shemgang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Tashigang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Timphu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Tongsa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 26,
            'name' => 'Wangdiphodrang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 27,
            'name' => 'Beni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 27,
            'name' => 'Chuquisaca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 27,
            'name' => 'Cochabamba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 27,
            'name' => 'La Paz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 27,
            'name' => 'Oruro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 27,
            'name' => 'Pando',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 27,
            'name' => 'Potosi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 27,
            'name' => 'Santa Cruz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 27,
            'name' => 'Tarija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 28,
            'name' => 'Federacija Bosna i Hercegovina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 28,
            'name' => 'Republika Srpska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Central Bobonong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Central Boteti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Central Mahalapye',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Central Serowe-Palapye',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Central Tutume',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Chobe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Francistown',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Gaborone',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Ghanzi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Jwaneng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Kgalagadi North',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Kgalagadi South',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Kgatleng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Kweneng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Lobatse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Ngamiland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Ngwaketse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'North East',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Okavango',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Orapa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Selibe Phikwe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'South East',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 29,
            'name' => 'Sowa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 30,
            'name' => 'Bouvet Island',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Acre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Alagoas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Amapa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Amazonas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Bahia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Ceara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Distrito Federal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Espirito Santo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Estado de Sao Paulo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Goias',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Maranhao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Mato Grosso',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Mato Grosso do Sul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Minas Gerais',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Para',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Paraiba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Parana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Pernambuco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Piaui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Rio Grande do Norte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Rio Grande do Sul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Rio de Janeiro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Rondonia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Roraima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Santa Catarina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Sao Paulo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Sergipe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 31,
            'name' => 'Tocantins',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 32,
            'name' => 'British Indian Ocean Territory',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Blagoevgrad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Burgas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Dobrich',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Gabrovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Haskovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Jambol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Kardzhali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Kjustendil',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Lovech',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Montana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Oblast Sofiya-Grad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Pazardzhik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Pernik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Pleven',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Plovdiv',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Razgrad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Ruse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Shumen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Silistra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Sliven',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Smoljan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Sofija grad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Sofijska oblast',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Stara Zagora',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Targovishte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Varna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Veliko Tarnovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Vidin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Vraca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 34,
            'name' => 'Yablaniza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Bale',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Bam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Bazega',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Bougouriba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Boulgou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Boulkiemde',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Comoe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Ganzourgou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Gnagna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Gourma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Houet',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Ioba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Kadiogo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Kenedougou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Komandjari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Kompienga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Kossi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Kouritenga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Kourweogo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Leraba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Mouhoun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Nahouri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Namentenga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Noumbiel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Oubritenga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Oudalan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Passore',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Poni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Sanguie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Sanmatenga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Seno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Sissili',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Soum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Sourou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Tapoa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Tuy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Yatenga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Zondoma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 35,
            'name' => 'Zoundweogo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Bubanza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Bujumbura',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Bururi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Cankuzo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Cibitoke',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Gitega',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Karuzi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Kayanza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Kirundo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Makamba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Muramvya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Muyinga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Ngozi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Rutana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 36,
            'name' => 'Ruyigi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Banteay Mean Chey',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Bat Dambang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Kampong Cham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Kampong Chhnang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Kampong Spoeu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Kampong Thum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Kampot',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Kandal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Kaoh Kong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Kracheh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Krong Kaeb',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Krong Pailin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Krong Preah Sihanouk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Mondol Kiri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Otdar Mean Chey',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Phnum Penh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Pousat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Preah Vihear',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Prey Veaeng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Rotanak Kiri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Siem Reab',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Stueng Traeng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Svay Rieng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 37,
            'name' => 'Takaev',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Adamaoua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Centre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Est',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Littoral',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Nord',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Nord Extreme',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Nordouest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Ouest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Sud',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 38,
            'name' => 'Sudouest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Alberta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'British Columbia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Manitoba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'New Brunswick',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Newfoundland and Labrador',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Northwest Territories',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Nova Scotia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Nunavut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Ontario',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Prince Edward Island',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Quebec',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Saskatchewan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 39,
            'name' => 'Yukon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 40,
            'name' => 'Boavista',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 40,
            'name' => 'Brava',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 40,
            'name' => 'Fogo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 40,
            'name' => 'Maio',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 40,
            'name' => 'Sal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 40,
            'name' => 'Santo Antao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 40,
            'name' => 'Sao Nicolau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 40,
            'name' => 'Sao Tiago',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 40,
            'name' => 'Sao Vicente',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 41,
            'name' => 'Grand Cayman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Bamingui-Bangoran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Bangui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Basse-Kotto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Haut-Mbomou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Haute-Kotto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Kemo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Lobaye',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Mambere-Kadei',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Mbomou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Nana-Gribizi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Nana-Mambere',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Ombella Mpoko',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Ouaka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Ouham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Ouham-Pende',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Sangha-Mbaere',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 42,
            'name' => 'Vakaga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Batha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Biltine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Bourkou-Ennedi-Tibesti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Chari-Baguirmi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Guera',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Kanem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Lac',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Logone Occidental',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Logone Oriental',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Mayo-Kebbi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Moyen-Chari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Ouaddai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Salamat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 43,
            'name' => 'Tandjile',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Aisen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Antofagasta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Araucania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Atacama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Bio Bio',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Coquimbo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Libertador General Bernardo O\'',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Los Lagos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Magellanes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Maule',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Metropolitana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Metropolitana de Santiago',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Tarapaca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 44,
            'name' => 'Valparaiso',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Anhui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Anhui Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Anhui Sheng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Aomen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Beijing',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Beijing Shi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Chongqing',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Fujian',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Fujian Sheng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Gansu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Guangdong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Guangdong Sheng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Guangxi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Guizhou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Hainan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Hebei',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Heilongjiang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Henan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Hubei',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Hunan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Jiangsu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Jiangsu Sheng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Jiangxi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Jilin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Liaoning',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Liaoning Sheng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Nei Monggol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Ningxia Hui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Qinghai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Shaanxi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Shandong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Shandong Sheng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Shanghai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Shanxi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Sichuan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Tianjin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Xianggang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Xinjiang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Xizang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Yunnan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Zhejiang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 45,
            'name' => 'Zhejiang Sheng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 46,
            'name' => 'Christmas Island',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 47,
            'name' => 'Cocos (Keeling) Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Amazonas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Antioquia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Arauca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Atlantico',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Bogota',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Bolivar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Boyaca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Caldas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Caqueta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Casanare',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Cauca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Cesar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Choco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Cordoba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Cundinamarca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Guainia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Guaviare',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Huila',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'La Guajira',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Magdalena',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Meta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Narino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Norte de Santander',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Putumayo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Quindio',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Risaralda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'San Andres y Providencia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Santander',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Sucre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Tolima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Valle del Cauca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Vaupes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 48,
            'name' => 'Vichada',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 49,
            'name' => 'Mwali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 49,
            'name' => 'Njazidja',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 49,
            'name' => 'Nzwani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Bouenza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Brazzaville',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Cuvette',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Kouilou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Lekoumou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Likouala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Niari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Plateaux',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Pool',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 50,
            'name' => 'Sangha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Aitutaki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Atiu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Mangaia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Manihiki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Mauke',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Mitiaro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Nassau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Pukapuka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Rakahanga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Rarotonga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 52,
            'name' => 'Tongareva',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 53,
            'name' => 'Alajuela',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 53,
            'name' => 'Cartago',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 53,
            'name' => 'Guanacaste',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 53,
            'name' => 'Heredia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 53,
            'name' => 'Limon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 53,
            'name' => 'Puntarenas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 53,
            'name' => 'San Jose',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Camaguey',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Ciego de Avila',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Cienfuegos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Ciudad de la Habana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Granma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Guantanamo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Habana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Holguin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Isla de la Juventud',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'La Habana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Las Tunas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Matanzas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Pinar del Rio',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Sancti Spiritus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Santiago de Cuba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 56,
            'name' => 'Villa Clara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 57,
            'name' => 'Government controlled area',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 57,
            'name' => 'Limassol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 57,
            'name' => 'Nicosia District',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 57,
            'name' => 'Paphos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 57,
            'name' => 'Turkish controlled area',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Central Bohemian',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Frycovice',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Jihocesky Kraj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Jihochesky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Jihomoravsky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Karlovarsky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Klecany',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Kralovehradecky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Liberecky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Lipov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Moravskoslezsky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Olomoucky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Olomoucky Kraj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Pardubicky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Plzensky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Praha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Rajhrad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Smirice',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'South Moravian',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Straz nad Nisou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Stredochesky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Unicov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Ustecky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Valletta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Velesin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Vysochina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 58,
            'name' => 'Zlinsky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Arhus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Bornholm',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Frederiksborg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Fyn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Hovedstaden',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Kobenhavn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Kobenhavns Amt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Kobenhavns Kommune',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Nordjylland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Ribe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Ringkobing',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Roervig',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Roskilde',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Roslev',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Sjaelland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Soeborg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Sonderjylland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Storstrom',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Syddanmark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Toelloese',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Vejle',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Vestsjalland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 59,
            'name' => 'Viborg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 60,
            'name' => '\'Ali Sabih',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 60,
            'name' => 'Dikhil',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 60,
            'name' => 'Jibuti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 60,
            'name' => 'Tajurah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 60,
            'name' => 'Ubuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint Andrew',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint David',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint George',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint John',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint Joseph',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint Luke',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint Mark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint Patrick',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint Paul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 61,
            'name' => 'Saint Peter',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Azua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Bahoruco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Barahona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Dajabon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Distrito Nacional',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Duarte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'El Seybo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Elias Pina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Espaillat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Hato Mayor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Independencia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'La Altagracia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'La Romana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'La Vega',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Maria Trinidad Sanchez',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Monsenor Nouel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Monte Cristi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Monte Plata',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Pedernales',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Peravia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Puerto Plata',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Salcedo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Samana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'San Cristobal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'San Juan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'San Pedro de Macoris',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Sanchez Ramirez',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Santiago',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Santiago Rodriguez',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 62,
            'name' => 'Valverde',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Aileu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Ainaro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Ambeno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Baucau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Bobonaro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Cova Lima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Dili',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Ermera',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Lautem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Liquica',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Manatuto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Manufahi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 63,
            'name' => 'Viqueque',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Azuay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Bolivar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Canar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Carchi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Chimborazo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Cotopaxi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'El Oro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Esmeraldas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Galapagos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Guayas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Imbabura',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Loja',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Los Rios',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Manabi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Morona Santiago',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Napo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Orellana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Pastaza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Pichincha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Sucumbios',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Tungurahua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 64,
            'name' => 'Zamora Chinchipe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Aswan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Asyut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Bani Suwayf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Bur Sa\'id',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Cairo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Dumyat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Kafr-ash-Shaykh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Matruh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Muhafazat ad Daqahliyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Muhafazat al Fayyum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Muhafazat al Gharbiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Muhafazat al Iskandariyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Muhafazat al Qahirah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Qina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Sawhaj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Sina al-Janubiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'Sina ash-Shamaliyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'ad-Daqahliyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Bahr-al-Ahmar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Buhayrah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Fayyum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Gharbiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Iskandariyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Ismailiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Jizah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Minufiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Minya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Qahira',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Qalyubiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Uqsur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'al-Wadi al-Jadid',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'as-Suways',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 65,
            'name' => 'ash-Sharqiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'Ahuachapan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'Cabanas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'Chalatenango',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'Cuscatlan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'La Libertad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'La Paz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'La Union',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'Morazan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'San Miguel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'San Salvador',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'San Vicente',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'Santa Ana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'Sonsonate',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 66,
            'name' => 'Usulutan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 67,
            'name' => 'Annobon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 67,
            'name' => 'Bioko Norte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 67,
            'name' => 'Bioko Sur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 67,
            'name' => 'Centro Sur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 67,
            'name' => 'Kie-Ntem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 67,
            'name' => 'Litoral',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 67,
            'name' => 'Wele-Nzas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 68,
            'name' => 'Anseba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 68,
            'name' => 'Debub',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 68,
            'name' => 'Debub-Keih-Bahri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 68,
            'name' => 'Gash-Barka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 68,
            'name' => 'Maekel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 68,
            'name' => 'Semien-Keih-Bahri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Harju',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Hiiu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Ida-Viru',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Jarva',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Jogeva',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Laane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Laane-Viru',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Parnu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Polva',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Rapla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Saare',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Tartu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Valga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Viljandi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 69,
            'name' => 'Voru',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Addis Abeba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Afar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Amhara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Benishangul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Diredawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Gambella',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Harar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Jigjiga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Mekele',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Oromia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Somali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Southern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 70,
            'name' => 'Tigray',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 71,
            'name' => 'Falkland Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 71,
            'name' => 'South Georgia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 72,
            'name' => 'Klaksvik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 72,
            'name' => 'Nor ara Eysturoy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 72,
            'name' => 'Nor oy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 72,
            'name' => 'Sandoy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 72,
            'name' => 'Streymoy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 72,
            'name' => 'Su uroy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 72,
            'name' => 'Sy ra Eysturoy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 72,
            'name' => 'Torshavn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 72,
            'name' => 'Vaga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 73,
            'name' => 'Central',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 73,
            'name' => 'Eastern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 73,
            'name' => 'Northern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 73,
            'name' => 'South Pacific',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 73,
            'name' => 'Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Ahvenanmaa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Etela-Karjala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Etela-Pohjanmaa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Etela-Savo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Etela-Suomen Laani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Ita-Suomen Laani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Ita-Uusimaa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Kainuu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Kanta-Hame',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Keski-Pohjanmaa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Keski-Suomi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Kymenlaakso',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Lansi-Suomen Laani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Lappi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Northern Savonia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Ostrobothnia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Oulun Laani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Paijat-Hame',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Pirkanmaa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Pohjanmaa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Pohjois-Karjala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Pohjois-Pohjanmaa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Pohjois-Savo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Saarijarvi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Satakunta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Southern Savonia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Tavastia Proper',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Uleaborgs Lan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Uusimaa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 74,
            'name' => 'Varsinais-Suomi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Ain',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Aisne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Albi Le Sequestre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Allier',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Alpes-Cote dAzur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Alpes-Maritimes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Alpes-de-Haute-Provence',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Alsace',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Aquitaine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Ardeche',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Ardennes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Ariege',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Aube',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Aude',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Auvergne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Aveyron',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Bas-Rhin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Basse-Normandie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Bouches-du-Rhone',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Bourgogne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Bretagne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Brittany',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Burgundy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Calvados',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Cantal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Cedex',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Centre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Charente',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Charente-Maritime',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Cher',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Correze',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Corse-du-Sud',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Cote-d\'Or',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Cotes-d\'Armor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Creuse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Crolles',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Deux-Sevres',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Dordogne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Doubs',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Drome',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Essonne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Eure',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Eure-et-Loir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Feucherolles',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Finistere',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Franche-Comte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Gard',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Gers',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Gironde',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Haut-Rhin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Haute-Corse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Haute-Garonne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Haute-Loire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Haute-Marne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Haute-Saone',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Haute-Savoie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Haute-Vienne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Hautes-Alpes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Hautes-Pyrenees',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Hauts-de-Seine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Herault',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Ile-de-France',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Ille-et-Vilaine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Indre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Indre-et-Loire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Isere',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Jura',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Klagenfurt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Landes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Languedoc-Roussillon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Larcay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Le Castellet',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Le Creusot',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Limousin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Loir-et-Cher',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Loire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Loire-Atlantique',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Loiret',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Lorraine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Lot',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Lot-et-Garonne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Lower Normandy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Lozere',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Maine-et-Loire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Manche',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Marne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Mayenne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Meurthe-et-Moselle',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Meuse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Midi-Pyrenees',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Morbihan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Moselle',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Nievre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Nord',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Nord-Pas-de-Calais',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Oise',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Orne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Paris',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Pas-de-Calais',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Pays de la Loire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Pays-de-la-Loire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Picardy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Puy-de-Dome',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Pyrenees-Atlantiques',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Pyrenees-Orientales',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Quelmes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Rhone',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Rhone-Alpes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Saint Ouen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Saint Viatre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Saone-et-Loire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Sarthe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Savoie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Seine-Maritime',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Seine-Saint-Denis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Seine-et-Marne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Somme',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Sophia Antipolis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Souvans',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Tarn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Tarn-et-Garonne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Territoire de Belfort',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Treignac',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Upper Normandy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Val-d\'Oise',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Val-de-Marne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Var',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Vaucluse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Vellise',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Vendee',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Vienne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Vosges',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Yonne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 75,
            'name' => 'Yvelines',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 76,
            'name' => 'Cayenne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 76,
            'name' => 'Saint-Laurent-du-Maroni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 77,
            'name' => 'Iles du Vent',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 77,
            'name' => 'Iles sous le Vent',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 77,
            'name' => 'Marquesas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 77,
            'name' => 'Tuamotu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 77,
            'name' => 'Tubuai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 78,
            'name' => 'Amsterdam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 78,
            'name' => 'Crozet Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 78,
            'name' => 'Kerguelen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 79,
            'name' => 'Estuaire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 79,
            'name' => 'Haut-Ogooue',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 79,
            'name' => 'Moyen-Ogooue',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 79,
            'name' => 'Ngounie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 79,
            'name' => 'Nyanga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 79,
            'name' => 'Ogooue-Ivindo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 79,
            'name' => 'Ogooue-Lolo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 79,
            'name' => 'Ogooue-Maritime',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 79,
            'name' => 'Woleu-Ntem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 80,
            'name' => 'Banjul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 80,
            'name' => 'Basse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 80,
            'name' => 'Brikama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 80,
            'name' => 'Janjanbureh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 80,
            'name' => 'Kanifing',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 80,
            'name' => 'Kerewan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 80,
            'name' => 'Kuntaur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 80,
            'name' => 'Mansakonko',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Abhasia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Ajaria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Guria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Imereti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Kaheti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Kvemo Kartli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Mcheta-Mtianeti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Racha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Samagrelo-Zemo Svaneti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Samche-Zhavaheti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Shida Kartli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 81,
            'name' => 'Tbilisi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Auvergne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Baden-Wurttemberg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Bavaria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Bayern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Beilstein Wurtt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Berlin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Brandenburg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Bremen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Dreisbach',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Freistaat Bayern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Hamburg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Hannover',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Heroldstatt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Hessen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Kortenberg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Laasdorf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Baden-Wurttemberg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Bayern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Brandenburg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Hessen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Mecklenburg-Vorpommern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Nordrhein-Westfalen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Rheinland-Pfalz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Sachsen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Sachsen-Anhalt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Land Thuringen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Lower Saxony',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Mecklenburg-Vorpommern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Mulfingen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Munich',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Neubeuern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Niedersachsen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Noord-Holland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Nordrhein-Westfalen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'North Rhine-Westphalia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Osterode',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Rheinland-Pfalz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Rhineland-Palatinate',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Saarland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Sachsen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Sachsen-Anhalt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Saxony',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Schleswig-Holstein',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Thuringia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Webling',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'Weinstrabe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 82,
            'name' => 'schlobborn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Ashanti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Brong-Ahafo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Central',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Eastern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Greater Accra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Northern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Upper East',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Upper West',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Volta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 83,
            'name' => 'Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 84,
            'name' => 'Gibraltar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Acharnes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Ahaia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Aitolia kai Akarnania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Argolis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Arkadia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Arta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Attica',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Attiki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Ayion Oros',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Crete',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Dodekanisos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Drama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Evia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Evritania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Evros',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Evvoia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Florina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Fokis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Fthiotis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Grevena',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Halandri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Halkidiki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Hania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Heraklion',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Hios',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Ilia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Imathia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Ioannina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Iraklion',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Karditsa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Kastoria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Kavala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Kefallinia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Kerkira',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Kiklades',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Kilkis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Korinthia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Kozani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Lakonia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Larisa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Lasithi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Lesvos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Levkas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Magnisia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Messinia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Nomos Attikis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Nomos Zakynthou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Pella',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Pieria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Piraios',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Preveza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Rethimni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Rodopi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Samos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Serrai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Thesprotia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Thessaloniki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Trikala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Voiotia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'West Greece',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Xanthi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 85,
            'name' => 'Zakinthos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Aasiaat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Ammassalik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Illoqqortoormiut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Ilulissat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Ivittuut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Kangaatsiaq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Maniitsoq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Nanortalik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Narsaq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Nuuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Paamiut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Qaanaaq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Qaqortoq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Qasigiannguit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Qeqertarsuaq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Sisimiut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Udenfor kommunal inddeling',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Upernavik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 86,
            'name' => 'Uummannaq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 87,
            'name' => 'Carriacou-Petite Martinique',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 87,
            'name' => 'Saint Andrew',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 87,
            'name' => 'Saint Davids',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 87,
            'name' => 'Saint George\'s',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 87,
            'name' => 'Saint John',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 87,
            'name' => 'Saint Mark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 87,
            'name' => 'Saint Patrick',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 88,
            'name' => 'Basse-Terre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 88,
            'name' => 'Grande-Terre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 88,
            'name' => 'Iles des Saintes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 88,
            'name' => 'La Desirade',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 88,
            'name' => 'Marie-Galante',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 88,
            'name' => 'Saint Barthelemy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 88,
            'name' => 'Saint Martin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Agana Heights',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Agat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Barrigada',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Chalan-Pago-Ordot',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Dededo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Hagatna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Inarajan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Mangilao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Merizo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Mongmong-Toto-Maite',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Santa Rita',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Sinajana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Talofofo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Tamuning',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Yigo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 89,
            'name' => 'Yona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Alta Verapaz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Baja Verapaz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Chimaltenango',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Chiquimula',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'El Progreso',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Escuintla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Guatemala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Huehuetenango',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Izabal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Jalapa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Jutiapa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Peten',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Quezaltenango',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Quiche',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Retalhuleu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Sacatepequez',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'San Marcos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Santa Rosa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Solola',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Suchitepequez',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Totonicapan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 90,
            'name' => 'Zacapa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Alderney',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Castel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Forest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Saint Andrew',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Saint Martin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Saint Peter Port',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Saint Pierre du Bois',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Saint Sampson',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Saint Saviour',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Sark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Torteval',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 91,
            'name' => 'Vale',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Beyla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Boffa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Boke',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Conakry',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Coyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Dabola',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Dalaba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Dinguiraye',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Faranah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Forecariah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Fria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Gaoual',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Gueckedou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Kankan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Kerouane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Kindia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Kissidougou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Koubia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Koundara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Kouroussa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Labe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Lola',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Macenta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Mali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Mamou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Mandiana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Nzerekore',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Pita',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Siguiri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Telimele',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Tougue',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 92,
            'name' => 'Yomou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 93,
            'name' => 'Bafata',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 93,
            'name' => 'Bissau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 93,
            'name' => 'Bolama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 93,
            'name' => 'Cacheu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 93,
            'name' => 'Gabu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 93,
            'name' => 'Oio',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 93,
            'name' => 'Quinara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 93,
            'name' => 'Tombali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'Barima-Waini',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'Cuyuni-Mazaruni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'Demerara-Mahaica',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'East Berbice-Corentyne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'Essequibo Islands-West Demerar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'Mahaica-Berbice',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'Pomeroon-Supenaam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'Potaro-Siparuni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'Upper Demerara-Berbice',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 94,
            'name' => 'Upper Takutu-Upper Essequibo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 95,
            'name' => 'Artibonite',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 95,
            'name' => 'Centre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 95,
            'name' => 'Grand\'Anse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 95,
            'name' => 'Nord',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 95,
            'name' => 'Nord-Est',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 95,
            'name' => 'Nord-Ouest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 95,
            'name' => 'Ouest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 95,
            'name' => 'Sud',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 95,
            'name' => 'Sud-Est',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 96,
            'name' => 'Heard and McDonald Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Atlantida',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Choluteca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Colon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Comayagua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Copan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Cortes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Distrito Central',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'El Paraiso',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Francisco Morazan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Gracias a Dios',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Intibuca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Islas de la Bahia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'La Paz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Lempira',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Ocotepeque',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Olancho',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Santa Barbara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Valle',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 97,
            'name' => 'Yoro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 98,
            'name' => 'Hong Kong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Bacs-Kiskun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Baranya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Bekes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Borsod-Abauj-Zemplen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Budapest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Csongrad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Fejer',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Gyor-Moson-Sopron',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Hajdu-Bihar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Heves',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Jasz-Nagykun-Szolnok',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Komarom-Esztergom',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Nograd',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Pest',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Somogy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Szabolcs-Szatmar-Bereg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Tolna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Vas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Veszprem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 99,
            'name' => 'Zala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 100,
            'name' => 'Austurland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 100,
            'name' => 'Gullbringusysla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 100,
            'name' => 'Hofu borgarsva i',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 100,
            'name' => 'Nor urland eystra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 100,
            'name' => 'Nor urland vestra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 100,
            'name' => 'Su urland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 100,
            'name' => 'Su urnes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 100,
            'name' => 'Vestfir ir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 100,
            'name' => 'Vesturland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Andaman and Nicobar Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Andhra Pradesh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Arunachal Pradesh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Assam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Bihar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Chandigarh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Chhattisgarh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Dadra and Nagar Haveli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Daman and Diu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Delhi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Goa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Gujarat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Haryana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Himachal Pradesh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Jammu and Kashmir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Jharkhand',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Karnataka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Kenmore',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Kerala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Lakshadweep',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Madhya Pradesh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Maharashtra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Manipur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Meghalaya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Mizoram',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Nagaland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Narora',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Natwar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Odisha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Paschim Medinipur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Pondicherry',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Punjab',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Rajasthan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Sikkim',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Tamil Nadu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Telangana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Tripura',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Uttar Pradesh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Uttarakhand',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'Vaishali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 101,
            'name' => 'West Bengal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Aceh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Bali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Bangka-Belitung',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Banten',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Bengkulu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Gandaria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Gorontalo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Jakarta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Jambi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Jawa Barat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Jawa Tengah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Jawa Timur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Kalimantan Barat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Kalimantan Selatan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Kalimantan Tengah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Kalimantan Timur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Kendal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Lampung',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Maluku',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Maluku Utara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Nusa Tenggara Barat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Nusa Tenggara Timur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Papua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Riau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Riau Kepulauan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Solo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Sulawesi Selatan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Sulawesi Tengah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Sulawesi Tenggara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Sulawesi Utara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Sumatera Barat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Sumatera Selatan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Sumatera Utara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 102,
            'name' => 'Yogyakarta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Ardabil',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Azarbayjan-e Bakhtari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Azarbayjan-e Khavari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Bushehr',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Chahar Mahal-e Bakhtiari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Esfahan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Fars',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Gilan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Golestan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Hamadan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Hormozgan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Ilam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Kerman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Kermanshah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Khorasan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Khuzestan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Kohgiluyeh-e Boyerahmad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Kordestan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Lorestan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Markazi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Mazandaran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Ostan-e Esfahan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Qazvin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Qom',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Semnan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Sistan-e Baluchestan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Tehran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Yazd',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 103,
            'name' => 'Zanjan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Babil',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Baghdad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Dahuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Dhi Qar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Diyala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Erbil',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Irbil',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Karbala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Kurdistan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Maysan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Ninawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Salah-ad-Din',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'Wasit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'al-Anbar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'al-Basrah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'al-Muthanna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'al-Qadisiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'an-Najaf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'as-Sulaymaniyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 104,
            'name' => 'at-Ta\'mim',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Armagh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Carlow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Cavan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Clare',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Cork',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Donegal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Dublin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Galway',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Kerry',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Kildare',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Kilkenny',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Laois',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Leinster',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Leitrim',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Limerick',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Loch Garman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Longford',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Louth',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Mayo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Meath',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Monaghan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Offaly',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Roscommon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Sligo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Tipperary North Riding',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Tipperary South Riding',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Ulster',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Waterford',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Westmeath',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Wexford',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 105,
            'name' => 'Wicklow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Beit Hanania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Ben Gurion Airport',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Bethlehem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Caesarea',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Centre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Gaza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Hadaron',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Haifa District',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Hamerkaz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Hazafon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Hebron',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Jaffa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Jerusalem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Khefa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Kiryat Yam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Lower Galilee',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Qalqilya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Talme Elazar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Tel Aviv',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Tsafon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Umm El Fahem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 106,
            'name' => 'Yerushalayim',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Abruzzi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Abruzzo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Agrigento',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Alessandria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Ancona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Arezzo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Ascoli Piceno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Asti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Avellino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Bari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Basilicata',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Belluno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Benevento',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Bergamo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Biella',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Bologna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Bolzano',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Brescia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Brindisi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Calabria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Campania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Cartoceto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Caserta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Catania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Chieti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Como',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Cosenza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Cremona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Cuneo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Emilia-Romagna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Ferrara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Firenze',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Florence',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Forli-Cesena ',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Friuli-Venezia Giulia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Frosinone',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Genoa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Gorizia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'L\'Aquila',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Lazio',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Lecce',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Lecco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Lecco Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Liguria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Lodi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Lombardia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Lombardy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Macerata',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Mantova',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Marche',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Messina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Milan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Modena',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Molise',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Molteno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Montenegro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Monza and Brianza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Naples',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Novara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Padova',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Parma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Pavia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Perugia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Pesaro-Urbino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Piacenza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Piedmont',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Piemonte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Pisa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Pordenone',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Potenza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Puglia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Reggio Emilia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Rimini',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Roma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Salerno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Sardegna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Sassari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Savona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Sicilia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Siena',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Sondrio',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'South Tyrol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Taranto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Teramo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Torino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Toscana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Trapani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Trentino-Alto Adige',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Trento',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Treviso',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Udine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Umbria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Valle d\'Aosta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Varese',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Veneto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Venezia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Verbano-Cusio-Ossola',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Vercelli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Verona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Vicenza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 107,
            'name' => 'Viterbo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Buxoro Viloyati',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Clarendon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Hanover',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Kingston',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Manchester',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Portland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Saint Andrews',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Saint Ann',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Saint Catherine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Saint Elizabeth',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Saint James',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Saint Mary',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Saint Thomas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Trelawney',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 108,
            'name' => 'Westmoreland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Aichi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Akita',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Aomori',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Chiba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Ehime',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Fukui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Fukuoka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Fukushima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Gifu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Gumma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Hiroshima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Hokkaido',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Hyogo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Ibaraki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Ishikawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Iwate',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Kagawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Kagoshima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Kanagawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Kanto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Kochi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Kumamoto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Kyoto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Mie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Miyagi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Miyazaki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Nagano',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Nagasaki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Nara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Niigata',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Oita',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Okayama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Okinawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Osaka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Saga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Saitama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Shiga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Shimane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Shizuoka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Tochigi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Tokushima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Tokyo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Tottori',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Toyama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Wakayama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Yamagata',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Yamaguchi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 109,
            'name' => 'Yamanashi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Grouville',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Saint Brelade',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Saint Clement',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Saint Helier',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Saint John',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Saint Lawrence',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Saint Martin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Saint Mary',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Saint Peter',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Saint Saviour',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 110,
            'name' => 'Trinity',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => '\'Ajlun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'Amman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'Irbid',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'Jarash',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'Ma\'an',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'Madaba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'al-\'Aqabah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'al-Balqa\'',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'al-Karak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'al-Mafraq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'at-Tafilah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 111,
            'name' => 'az-Zarqa\'',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Akmecet',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Akmola',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Aktobe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Almati',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Atirau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Batis Kazakstan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Burlinsky Region',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Karagandi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Kostanay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Mankistau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Ontustik Kazakstan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Pavlodar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Sigis Kazakstan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Soltustik Kazakstan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 112,
            'name' => 'Taraz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 113,
            'name' => 'Central',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 113,
            'name' => 'Coast',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 113,
            'name' => 'Eastern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 113,
            'name' => 'Nairobi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 113,
            'name' => 'North Eastern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 113,
            'name' => 'Nyanza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 113,
            'name' => 'Rift Valley',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 113,
            'name' => 'Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Abaiang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Abemana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Aranuka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Arorae',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Banaba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Beru',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Butaritari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Kiritimati',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Kuria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Maiana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Makin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Marakei',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Nikunau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Nonouti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Onotoa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Phoenix Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Tabiteuea North',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Tabiteuea South',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Tabuaeran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Tamana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Tarawa North',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Tarawa South',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 114,
            'name' => 'Teraina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Busan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Cheju',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Chollabuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Chollanam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Chungbuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Chungcheongbuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Chungcheongnam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Chungnam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Daegu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Gangwon-do',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Goyang-si',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Gyeonggi-do',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Gyeongsang ',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Gyeongsangnam-do',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Incheon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Jeju-Si',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Jeonbuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Kangweon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Kwangju',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Kyeonggi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Kyeongsangbuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Kyeongsangnam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Kyonggi-do',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Kyungbuk-Do',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Kyunggi-Do',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Pusan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Seoul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Sudogwon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Taegu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Taejeon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Taejon-gwangyoksi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Ulsan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'Wonju',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 116,
            'name' => 'gwangyoksi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'Al Asimah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'Hawalli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'Mishref',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'Qadesiya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'Safat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'Salmiya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'al-Ahmadi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'al-Farwaniyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'al-Jahra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 117,
            'name' => 'al-Kuwayt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 118,
            'name' => 'Batken',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 118,
            'name' => 'Bishkek',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 118,
            'name' => 'Chui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 118,
            'name' => 'Issyk-Kul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 118,
            'name' => 'Jalal-Abad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 118,
            'name' => 'Naryn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 118,
            'name' => 'Osh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 118,
            'name' => 'Talas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Attopu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Bokeo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Bolikhamsay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Champasak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Houaphanh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Khammouane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Luang Nam Tha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Luang Prabang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Oudomxay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Phongsaly',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Saravan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Savannakhet',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Sekong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Viangchan Prefecture',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Viangchan Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Xaignabury',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 119,
            'name' => 'Xiang Khuang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Aizkraukles',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Aluksnes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Balvu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Bauskas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Cesu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Daugavpils',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Daugavpils City',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Dobeles',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Gulbenes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Jekabspils',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Jelgava',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Jelgavas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Jurmala City',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Kraslavas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Kuldigas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Liepaja',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Liepajas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Limbazhu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Ludzas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Madonas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Ogres',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Preilu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Rezekne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Rezeknes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Riga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Rigas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Saldus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Talsu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Tukuma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Valkas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Valmieras',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Ventspils',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 120,
            'name' => 'Ventspils City',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 121,
            'name' => 'Beirut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 121,
            'name' => 'Jabal Lubnan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 121,
            'name' => 'Mohafazat Liban-Nord',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 121,
            'name' => 'Mohafazat Mont-Liban',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 121,
            'name' => 'Sidon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 121,
            'name' => 'al-Biqa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 121,
            'name' => 'al-Janub',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 121,
            'name' => 'an-Nabatiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 121,
            'name' => 'ash-Shamal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Berea',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Butha-Buthe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Leribe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Mafeteng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Maseru',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Mohale\'s Hoek',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Mokhotlong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Qacha\'s Nek',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Quthing',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 122,
            'name' => 'Thaba-Tseka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Bomi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Bong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Grand Bassa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Grand Cape Mount',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Grand Gedeh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Loffa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Margibi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Maryland and Grand Kru',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Montserrado',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Nimba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Rivercess',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 123,
            'name' => 'Sinoe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Ajdabiya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Banghazi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Darnah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Ghadamis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Gharyan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Misratah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Murzuq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Sabha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Sawfajjin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Surt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Tarabulus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Tarhunah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Tripolitania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Tubruq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Yafran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'Zlitan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'al-\'Aziziyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'al-Fatih',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'al-Jabal al Akhdar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'al-Jufrah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'al-Khums',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'al-Kufrah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'an-Nuqat al-Khams',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'ash-Shati\'',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 124,
            'name' => 'az-Zawiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Balzers',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Eschen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Gamprin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Mauren',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Planken',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Ruggell',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Schaan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Schellenberg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Triesen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Triesenberg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 125,
            'name' => 'Vaduz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Alytaus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Anyksciai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Kauno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Klaipedos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Marijampoles',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Panevezhio',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Panevezys',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Shiauliu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Taurages',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Telshiu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Telsiai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Utenos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 126,
            'name' => 'Vilniaus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Capellen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Clervaux',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Diekirch',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Echternach',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Esch-sur-Alzette',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Grevenmacher',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Luxembourg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Mersch',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Redange',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Remich',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Vianden',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 127,
            'name' => 'Wiltz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 128,
            'name' => 'Macau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Berovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Bitola',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Brod',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Debar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Delchevo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Demir Hisar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Gevgelija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Gostivar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Kavadarci',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Kichevo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Kochani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Kratovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Kriva Palanka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Krushevo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Kumanovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Negotino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Ohrid',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Prilep',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Probishtip',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Radovish',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Resen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Shtip',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Skopje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Struga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Strumica',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Sveti Nikole',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Tetovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Valandovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Veles',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 129,
            'name' => 'Vinica',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 130,
            'name' => 'Antananarivo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 130,
            'name' => 'Antsiranana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 130,
            'name' => 'Fianarantsoa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 130,
            'name' => 'Mahajanga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 130,
            'name' => 'Toamasina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 130,
            'name' => 'Toliary',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Balaka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Blantyre City',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Chikwawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Chiradzulu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Chitipa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Dedza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Dowa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Karonga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Kasungu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Lilongwe City',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Machinga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Mangochi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Mchinji',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Mulanje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Mwanza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Mzimba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Mzuzu City',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Nkhata Bay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Nkhotakota',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Nsanje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Ntcheu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Ntchisi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Phalombe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Rumphi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Salima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Thyolo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 131,
            'name' => 'Zomba Municipality',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Johor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Kedah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Kelantan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Kuala Lumpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Labuan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Melaka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Negeri Johor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Negeri Sembilan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Pahang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Penang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Perak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Perlis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Pulau Pinang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Sabah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Sarawak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Selangor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Sembilan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 132,
            'name' => 'Terengganu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Alif Alif',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Alif Dhaal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Baa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Dhaal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Faaf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Gaaf Alif',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Gaaf Dhaal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Ghaviyani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Haa Alif',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Haa Dhaal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Kaaf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Laam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Lhaviyani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Male',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Miim',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Nuun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Raa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Shaviyani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Siin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Thaa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 133,
            'name' => 'Vaav',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 134,
            'name' => 'Bamako',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 134,
            'name' => 'Gao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 134,
            'name' => 'Kayes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 134,
            'name' => 'Kidal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 134,
            'name' => 'Koulikoro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 134,
            'name' => 'Mopti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 134,
            'name' => 'Segou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 134,
            'name' => 'Sikasso',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 134,
            'name' => 'Tombouctou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 135,
            'name' => 'Gozo and Comino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 135,
            'name' => 'Inner Harbour',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 135,
            'name' => 'Northern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 135,
            'name' => 'Outer Harbour',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 135,
            'name' => 'South Eastern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 135,
            'name' => 'Valletta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 135,
            'name' => 'Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 136,
            'name' => 'Castletown',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 136,
            'name' => 'Douglas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 136,
            'name' => 'Laxey',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 136,
            'name' => 'Onchan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 136,
            'name' => 'Peel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 136,
            'name' => 'Port Erin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 136,
            'name' => 'Port Saint Mary',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 136,
            'name' => 'Ramsey',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Ailinlaplap',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Ailuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Arno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Aur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Bikini',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Ebon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Enewetak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Jabat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Jaluit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Kili',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Kwajalein',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Lae',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Lib',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Likiep',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Majuro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Maloelap',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Mejit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Mili',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Namorik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Namu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Rongelap',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Ujae',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Utrik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Wotho',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 137,
            'name' => 'Wotje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 138,
            'name' => 'Fort-de-France',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 138,
            'name' => 'La Trinite',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 138,
            'name' => 'Le Marin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 138,
            'name' => 'Saint-Pierre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Adrar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Assaba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Brakna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Dhakhlat Nawadibu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Hudh-al-Gharbi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Hudh-ash-Sharqi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Inshiri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Nawakshut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Qidimagha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Qurqul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Taqant',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Tiris Zammur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 139,
            'name' => 'Trarza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Black River',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Eau Coulee',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Flacq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Floreal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Grand Port',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Moka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Pamplempousses',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Plaines Wilhelm',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Port Louis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Riviere du Rempart',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Rodrigues',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Rose Hill',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 140,
            'name' => 'Savanne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 141,
            'name' => 'Mayotte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 141,
            'name' => 'Pamanzi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Aguascalientes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Baja California',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Baja California Sur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Campeche',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Chiapas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Chihuahua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Coahuila',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Colima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Distrito Federal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Durango',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Estado de Mexico',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Guanajuato',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Guerrero',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Hidalgo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Jalisco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Mexico',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Michoacan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Morelos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Nayarit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Nuevo Leon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Oaxaca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Puebla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Queretaro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Quintana Roo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'San Luis Potosi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Sinaloa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Sonora',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Tabasco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Tamaulipas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Tlaxcala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Veracruz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Yucatan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 142,
            'name' => 'Zacatecas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 143,
            'name' => 'Chuuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 143,
            'name' => 'Kusaie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 143,
            'name' => 'Pohnpei',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 143,
            'name' => 'Yap',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Balti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Cahul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Chisinau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Chisinau Oras',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Edinet',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Gagauzia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Lapusna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Orhei',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Soroca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Taraclia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Tighina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Transnistria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 144,
            'name' => 'Ungheni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 145,
            'name' => 'Fontvieille',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 145,
            'name' => 'La Condamine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 145,
            'name' => 'Monaco-Ville',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 145,
            'name' => 'Monte Carlo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Arhangaj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Bajan-Olgij',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Bajanhongor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Bulgan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Darhan-Uul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Dornod',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Dornogovi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Dundgovi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Govi-Altaj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Govisumber',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Hentij',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Hovd',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Hovsgol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Omnogovi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Orhon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Ovorhangaj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Selenge',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Suhbaatar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Tov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Ulaanbaatar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Uvs',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 146,
            'name' => 'Zavhan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 148,
            'name' => 'Montserrat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Agadir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Casablanca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Chaouia-Ouardigha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Doukkala-Abda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Fes-Boulemane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Gharb-Chrarda-Beni Hssen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Guelmim',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Kenitra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Marrakech-Tensift-Al Haouz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Meknes-Tafilalet',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Oriental',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Oujda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Province de Tanger',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Rabat-Sale-Zammour-Zaer',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Sala Al Jadida',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Settat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Souss Massa-Draa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Tadla-Azilal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Tangier-Tetouan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Taza-Al Hoceima-Taounate',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Wilaya de Casablanca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 149,
            'name' => 'Wilaya de Rabat-Sale',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Cabo Delgado',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Gaza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Inhambane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Manica',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Maputo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Maputo Provincia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Nampula',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Niassa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Sofala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Tete',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 150,
            'name' => 'Zambezia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Ayeyarwady',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Bago',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Chin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Kachin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Kayah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Kayin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Magway',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Mandalay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Mon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Nay Pyi Taw',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Rakhine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Sagaing',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Shan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Tanintharyi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 151,
            'name' => 'Yangon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Caprivi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Erongo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Hardap',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Karas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Kavango',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Khomas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Kunene',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Ohangwena',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Omaheke',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Omusati',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Oshana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Oshikoto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 152,
            'name' => 'Otjozondjupa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 153,
            'name' => 'Yaren',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Bagmati',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Bheri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Dhawalagiri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Gandaki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Janakpur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Karnali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Koshi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Lumbini',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Mahakali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Mechi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Narayani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Rapti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Sagarmatha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 154,
            'name' => 'Seti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 155,
            'name' => 'Bonaire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 155,
            'name' => 'Curacao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 155,
            'name' => 'Saba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 155,
            'name' => 'Sint Eustatius',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 155,
            'name' => 'Sint Maarten',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Amsterdam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Benelux',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Drenthe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Flevoland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Friesland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Gelderland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Groningen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Limburg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Noord-Brabant',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Noord-Holland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Overijssel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'South Holland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Utrecht',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Zeeland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 156,
            'name' => 'Zuid-Holland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 157,
            'name' => 'Iles',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 157,
            'name' => 'Nord',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 157,
            'name' => 'Sud',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Area Outside Region',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Auckland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Bay of Plenty',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Canterbury',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Christchurch',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Gisborne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Hawke\'s Bay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Manawatu-Wanganui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Marlborough',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Nelson',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Northland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Otago',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Rodney',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Southland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Taranaki',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Tasman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Waikato',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'Wellington',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 158,
            'name' => 'West Coast',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Atlantico Norte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Atlantico Sur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Boaco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Carazo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Chinandega',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Chontales',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Esteli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Granada',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Jinotega',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Leon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Madriz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Managua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Masaya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Matagalpa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Nueva Segovia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Rio San Juan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 159,
            'name' => 'Rivas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 160,
            'name' => 'Agadez',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 160,
            'name' => 'Diffa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 160,
            'name' => 'Dosso',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 160,
            'name' => 'Maradi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 160,
            'name' => 'Niamey',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 160,
            'name' => 'Tahoua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 160,
            'name' => 'Tillabery',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 160,
            'name' => 'Zinder',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Abia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Abuja Federal Capital Territor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Adamawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Akwa Ibom',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Anambra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Bauchi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Bayelsa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Benue',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Borno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Cross River',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Delta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Ebonyi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Edo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Ekiti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Enugu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Gombe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Imo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Jigawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Kaduna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Kano',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Katsina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Kebbi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Kogi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Kwara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Lagos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Nassarawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Niger',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Ogun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Ondo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Osun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Oyo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Plateau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Rivers',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Sokoto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Taraba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Yobe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 161,
            'name' => 'Zamfara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 162,
            'name' => 'Niue',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 163,
            'name' => 'Norfolk Island',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 164,
            'name' => 'Northern Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 164,
            'name' => 'Rota',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 164,
            'name' => 'Saipan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 164,
            'name' => 'Tinian',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Akershus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Aust Agder',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Bergen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Buskerud',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Finnmark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Hedmark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Hordaland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Moere og Romsdal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Nord Trondelag',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Nordland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Oestfold',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Oppland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Oslo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Rogaland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Soer Troendelag',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Sogn og Fjordane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Stavern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Sykkylven',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Telemark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Troms',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Vest Agder',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'Vestfold',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 165,
            'name' => 'ÃƒÂƒÃ†Â’ÃƒÂ‚Ã‹Âœstfold',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'Al Buraimi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'Dhufar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'Masqat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'Musandam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'Rusayl',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'Wadi Kabir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'ad-Dakhiliyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'adh-Dhahirah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'al-Batinah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 166,
            'name' => 'ash-Sharqiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 167,
            'name' => 'Baluchistan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 167,
            'name' => 'Federal Capital Area',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 167,
            'name' => 'Federally administered Tribal ',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 167,
            'name' => 'North-West Frontier',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 167,
            'name' => 'Northern Areas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 167,
            'name' => 'Punjab',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 167,
            'name' => 'Sind',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Aimeliik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Airai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Angaur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Hatobohei',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Kayangel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Koror',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Melekeok',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Ngaraard',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Ngardmau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Ngaremlengui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Ngatpang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Ngchesar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Ngerchelong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Ngiwal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Peleliu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 168,
            'name' => 'Sonsorol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Ariha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Bayt Lahm',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Bethlehem',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Dayr-al-Balah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Ghazzah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Ghazzah ash-Shamaliyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Janin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Khan Yunis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Nabulus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Qalqilyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Rafah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Ram Allah wal-Birah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Salfit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Tubas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'Tulkarm',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'al-Khalil',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 169,
            'name' => 'al-Quds',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Bocas del Toro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Chiriqui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Cocle',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Colon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Darien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Embera',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Herrera',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Kuna Yala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Los Santos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Ngobe Bugle',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Panama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 170,
            'name' => 'Veraguas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'East New Britain',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'East Sepik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Eastern Highlands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Enga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Fly River',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Gulf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Madang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Manus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Milne Bay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Morobe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'National Capital District',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'New Ireland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'North Solomons',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Oro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Sandaun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Simbu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Southern Highlands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'West New Britain',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 171,
            'name' => 'Western Highlands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Alto Paraguay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Alto Parana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Amambay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Asuncion',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Boqueron',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Caaguazu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Caazapa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Canendiyu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Central',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Concepcion',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Cordillera',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Guaira',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Itapua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Misiones',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Neembucu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Paraguari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'Presidente Hayes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 172,
            'name' => 'San Pedro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Amazonas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Ancash',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Apurimac',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Arequipa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Ayacucho',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Cajamarca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Cusco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Huancavelica',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Huanuco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Ica',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Junin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'La Libertad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Lambayeque',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Lima y Callao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Loreto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Madre de Dios',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Moquegua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Pasco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Piura',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Puno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'San Martin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Tacna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Tumbes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 173,
            'name' => 'Ucayali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Batangas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Bicol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Bulacan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Cagayan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Caraga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Central Luzon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Central Mindanao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Central Visayas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Cordillera',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Davao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Eastern Visayas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Greater Metropolitan Area',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Ilocos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Laguna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Luzon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Mactan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Metropolitan Manila Area',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Muslim Mindanao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Northern Mindanao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Southern Mindanao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Southern Tagalog',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Western Mindanao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 174,
            'name' => 'Western Visayas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 175,
            'name' => 'Pitcairn Island',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Biale Blota',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Dobroszyce',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Dolnoslaskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Dziekanow Lesny',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Hopowo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Kartuzy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Koscian',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Krakow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Kujawsko-Pomorskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Lodzkie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Lubelskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Lubuskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Malomice',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Malopolskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Mazowieckie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Mirkow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Opolskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Ostrowiec',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Podkarpackie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Podlaskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Polska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Pomorskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Poznan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Pruszkow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Rymanowska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Rzeszow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Slaskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Stare Pole',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Swietokrzyskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Warminsko-Mazurskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Warsaw',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Wejherowo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Wielkopolskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Wroclaw',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Zachodnio-Pomorskie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 176,
            'name' => 'Zukowo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Abrantes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Acores',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Alentejo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Algarve',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Braga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Centro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Distrito de Leiria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Distrito de Viana do Castelo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Distrito de Vila Real',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Distrito do Porto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Lisboa e Vale do Tejo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Madeira',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Norte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 177,
            'name' => 'Paivas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'Arecibo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'Bayamon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'Carolina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'Florida',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'Guayama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'Humacao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'Mayaguez-Aguadilla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'Ponce',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'Salinas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 178,
            'name' => 'San Juan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'Doha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'Jarian-al-Batnah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'Umm Salal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'ad-Dawhah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'al-Ghuwayriyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'al-Jumayliyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'al-Khawr',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'al-Wakrah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'ar-Rayyan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 179,
            'name' => 'ash-Shamal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 180,
            'name' => 'Saint-Benoit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 180,
            'name' => 'Saint-Denis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 180,
            'name' => 'Saint-Paul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 180,
            'name' => 'Saint-Pierre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Alba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Arad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Arges',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Bacau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Bihor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Bistrita-Nasaud',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Botosani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Braila',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Brasov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Bucuresti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Buzau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Calarasi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Caras-Severin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Cluj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Constanta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Covasna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Dambovita',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Dolj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Galati',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Giurgiu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Gorj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Harghita',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Hunedoara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Ialomita',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Iasi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Ilfov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Maramures',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Mehedinti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Mures',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Neamt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Olt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Prahova',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Salaj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Satu Mare',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Sibiu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Sondelor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Suceava',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Teleorman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Timis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Tulcea',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Valcea',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Vaslui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 181,
            'name' => 'Vrancea',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Adygeja',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Aga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Alanija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Altaj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Amur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Arhangelsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Astrahan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Bashkortostan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Belgorod',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Brjansk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Burjatija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Chechenija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Cheljabinsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Chita',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Chukotka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Chuvashija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Dagestan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Evenkija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Gorno-Altaj',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Habarovsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Hakasija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Hanty-Mansija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Ingusetija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Irkutsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Ivanovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Jamalo-Nenets',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Jaroslavl',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Jevrej',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kabardino-Balkarija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kaliningrad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kalmykija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kaluga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kamchatka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Karachaj-Cherkessija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Karelija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kemerovo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Khabarovskiy Kray',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kirov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Komi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Komi-Permjakija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Korjakija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kostroma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Krasnodar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Krasnojarsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Krasnoyarskiy Kray',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kurgan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Kursk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Leningrad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Lipeck',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Magadan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Marij El',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Mordovija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Moscow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Moskovskaja Oblast',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Moskovskaya Oblast',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Moskva',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Murmansk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Nenets',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Nizhnij Novgorod',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Novgorod',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Novokusnezk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Novosibirsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Omsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Orenburg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Orjol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Penza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Perm',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Primorje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Pskov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Pskovskaya Oblast',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Rjazan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Rostov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Saha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Sahalin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Samara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Samarskaya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Sankt-Peterburg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Saratov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Smolensk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Stavropol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Sverdlovsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Tajmyrija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Tambov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Tatarstan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Tjumen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Tomsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Tula',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Tver',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Tyva',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Udmurtija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Uljanovsk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Ulyanovskaya Oblast',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Ust-Orda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Vladimir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Volgograd',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Vologda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 182,
            'name' => 'Voronezh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Butare',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Byumba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Cyangugu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Gikongoro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Gisenyi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Gitarama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Kibungo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Kibuye',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Kigali-ngali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 183,
            'name' => 'Ruhengeri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 184,
            'name' => 'Ascension',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 184,
            'name' => 'Gough Island',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 184,
            'name' => 'Saint Helena',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 184,
            'name' => 'Tristan da Cunha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Christ Church Nichola Town',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint Anne Sandy Point',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint George Basseterre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint George Gingerland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint James Windward',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint John Capesterre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint John Figtree',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint Mary Cayon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint Paul Capesterre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint Paul Charlestown',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint Peter Basseterre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint Thomas Lowland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Saint Thomas Middle Island',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 185,
            'name' => 'Trinity Palmetto Point',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Anse-la-Raye',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Canaries',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Castries',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Choiseul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Dennery',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Gros Inlet',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Laborie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Micoud',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Soufriere',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 186,
            'name' => 'Vieux Fort',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 187,
            'name' => 'Miquelon-Langlade',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 187,
            'name' => 'Saint-Pierre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 188,
            'name' => 'Charlotte',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 188,
            'name' => 'Grenadines',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 188,
            'name' => 'Saint Andrew',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 188,
            'name' => 'Saint David',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 188,
            'name' => 'Saint George',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 188,
            'name' => 'Saint Patrick',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'A\'ana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Aiga-i-le-Tai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Atua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Fa\'asaleleaga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Gaga\'emauga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Gagaifomauga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Palauli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Satupa\'itea',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Tuamasaga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Va\'a-o-Fonoti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 191,
            'name' => 'Vaisigano',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 192,
            'name' => 'Acquaviva',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 192,
            'name' => 'Borgo Maggiore',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 192,
            'name' => 'Chiesanuova',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 192,
            'name' => 'Domagnano',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 192,
            'name' => 'Faetano',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 192,
            'name' => 'Fiorentino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 192,
            'name' => 'Montegiardino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 192,
            'name' => 'San Marino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 192,
            'name' => 'Serravalle',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 193,
            'name' => 'Agua Grande',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 193,
            'name' => 'Cantagalo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 193,
            'name' => 'Lemba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 193,
            'name' => 'Lobata',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 193,
            'name' => 'Me-Zochi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 193,
            'name' => 'Pague',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Al Khobar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Aseer',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Ash Sharqiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Asir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Central Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Eastern Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Ha\'il',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Jawf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Jizan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Makkah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Najran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Qasim',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Tabuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'Western Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'al-Bahah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'al-Hudud-ash-Shamaliyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'al-Madinah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 194,
            'name' => 'ar-Riyad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Dakar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Diourbel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Fatick',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Kaolack',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Kolda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Louga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Saint-Louis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Tambacounda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Thies',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 195,
            'name' => 'Ziguinchor',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 196,
            'name' => 'Central Serbia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 196,
            'name' => 'Kosovo and Metohija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 196,
            'name' => 'Vojvodina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 197,
            'name' => 'Anse Boileau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 197,
            'name' => 'Anse Royale',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 197,
            'name' => 'Cascade',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 197,
            'name' => 'Takamaka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 197,
            'name' => 'Victoria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 198,
            'name' => 'Eastern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 198,
            'name' => 'Northern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 198,
            'name' => 'Southern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 198,
            'name' => 'Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 199,
            'name' => 'Singapore',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 200,
            'name' => 'Banskobystricky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 200,
            'name' => 'Bratislavsky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 200,
            'name' => 'Kosicky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 200,
            'name' => 'Nitriansky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 200,
            'name' => 'Presovsky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 200,
            'name' => 'Trenciansky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 200,
            'name' => 'Trnavsky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 200,
            'name' => 'Zilinsky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Benedikt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Gorenjska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Gorishka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Jugovzhodna Slovenija',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Koroshka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Notranjsko-krashka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Obalno-krashka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Obcina Domzale',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Obcina Vitanje',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Osrednjeslovenska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Podravska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Pomurska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Savinjska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Slovenian Littoral',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Spodnjeposavska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 201,
            'name' => 'Zasavska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 202,
            'name' => 'Central',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 202,
            'name' => 'Choiseul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 202,
            'name' => 'Guadalcanal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 202,
            'name' => 'Isabel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 202,
            'name' => 'Makira and Ulawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 202,
            'name' => 'Malaita',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 202,
            'name' => 'Rennell and Bellona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 202,
            'name' => 'Temotu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 202,
            'name' => 'Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Awdal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Bakol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Banadir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Bari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Bay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Galgudug',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Gedo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Hiran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Jubbada Hose',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Jubbadha Dexe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Mudug',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Nugal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Sanag',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Shabellaha Dhexe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Shabellaha Hose',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Togdher',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 203,
            'name' => 'Woqoyi Galbed',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Eastern Cape',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Free State',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Gauteng',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Kempton Park',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Kramerville',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'KwaZulu Natal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Limpopo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Mpumalanga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'North West',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Northern Cape',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Parow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Table View',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Umtentweni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 204,
            'name' => 'Western Cape',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 205,
            'name' => 'South Georgia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 206,
            'name' => 'Central Equatoria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'A Coruna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Alacant',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Alava',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Albacete',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Almeria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Andalucia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Asturias',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Avila',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Badajoz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Balears',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Barcelona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Bertamirans',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Biscay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Burgos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Caceres',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Cadiz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Cantabria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Castello',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Catalunya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Ceuta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Ciudad Real',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Comunidad Autonoma de Canarias',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Comunidad Autonoma de Cataluna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Comunidad Autonoma de Galicia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Comunidad Autonoma de las Isla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Comunidad Autonoma del Princip',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Comunidad Valenciana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Cordoba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Cuenca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Gipuzkoa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Girona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Granada',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Guadalajara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Guipuzcoa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Huelva',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Huesca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Jaen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'La Rioja',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Las Palmas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Leon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Lerida',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Lleida',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Lugo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Madrid',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Malaga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Melilla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Murcia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Navarra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Ourense',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Pais Vasco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Palencia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Pontevedra',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Salamanca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Santa Cruz de Tenerife',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Segovia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Sevilla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Soria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Tarragona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Tenerife',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Teruel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Toledo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Valencia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Valladolid',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Vizcaya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Zamora',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 207,
            'name' => 'Zaragoza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Amparai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Anuradhapuraya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Badulla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Boralesgamuwa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Colombo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Galla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Gampaha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Hambantota',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Kalatura',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Kegalla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Kilinochchi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Kurunegala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Madakalpuwa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Maha Nuwara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Malwana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Mannarama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Matale',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Matara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Monaragala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Mullaitivu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'North Eastern Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'North Western Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Nuwara Eliya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Polonnaruwa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Puttalama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Ratnapuraya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Southern Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Tirikunamalaya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Tuscany',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Vavuniyawa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Western Province',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'Yapanaya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 208,
            'name' => 'kadawatha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'A\'ali-an-Nil',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Bahr-al-Jabal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Central Equatoria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Gharb Bahr-al-Ghazal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Gharb Darfur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Gharb Kurdufan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Gharb-al-Istiwa\'iyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Janub Darfur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Janub Kurdufan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Junqali',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Kassala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Nahr-an-Nil',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Shamal Bahr-al-Ghazal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Shamal Darfur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Shamal Kurdufan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Sharq-al-Istiwa\'iyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Sinnar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Warab',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'Wilayat al Khartum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'al-Bahr-al-Ahmar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'al-Buhayrat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'al-Jazirah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'al-Khartum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'al-Qadarif',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'al-Wahdah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'an-Nil-al-Abyad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'an-Nil-al-Azraq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 209,
            'name' => 'ash-Shamaliyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 210,
            'name' => 'Brokopondo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 210,
            'name' => 'Commewijne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 210,
            'name' => 'Coronie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 210,
            'name' => 'Marowijne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 210,
            'name' => 'Nickerie',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 210,
            'name' => 'Para',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 210,
            'name' => 'Paramaribo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 210,
            'name' => 'Saramacca',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 210,
            'name' => 'Wanica',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 211,
            'name' => 'Svalbard',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 212,
            'name' => 'Hhohho',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 212,
            'name' => 'Lubombo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 212,
            'name' => 'Manzini',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 212,
            'name' => 'Shiselweni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Alvsborgs Lan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Angermanland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Blekinge',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Bohuslan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Dalarna',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Gavleborg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Gaza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Gotland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Halland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Jamtland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Jonkoping',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Kalmar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Kristianstads',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Kronoberg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Norrbotten',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Orebro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Ostergotland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Saltsjo-Boo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Skane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Smaland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Sodermanland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Stockholm',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Uppsala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Varmland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Vasterbotten',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Vastergotland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Vasternorrland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Vastmanland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 213,
            'name' => 'Vastra Gotaland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Aargau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Appenzell Inner-Rhoden',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Appenzell-Ausser Rhoden',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Basel-Landschaft',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Basel-Stadt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Bern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Canton Ticino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Fribourg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Geneve',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Glarus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Graubunden',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Heerbrugg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Jura',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Kanton Aargau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Luzern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Morbio Inferiore',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Muhen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Neuchatel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Nidwalden',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Obwalden',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Sankt Gallen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Schaffhausen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Schwyz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Solothurn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Thurgau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Ticino',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Uri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Valais',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Vaud',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Vauffelin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Zug',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 214,
            'name' => 'Zurich',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Aleppo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Dar\'a',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Dayr-az-Zawr',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Dimashq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Halab',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Hamah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Hims',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Idlib',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Madinat Dimashq',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'Tartus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'al-Hasakah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'al-Ladhiqiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'al-Qunaytirah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'ar-Raqqah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 215,
            'name' => 'as-Suwayda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Changhwa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Chiayi Hsien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Chiayi Shih',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Eastern Taipei',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Hsinchu Hsien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Hsinchu Shih',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Hualien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Ilan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Kaohsiung Hsien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Kaohsiung Shih',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Keelung Shih',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Kinmen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Miaoli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Nantou',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Northern Taiwan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Penghu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Pingtung',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Taichung',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Taichung Hsien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Taichung Shih',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Tainan Hsien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Tainan Shih',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Taipei Hsien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Taipei Shih / Taipei Hsien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Taitung',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Taoyuan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Yilan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Yun-Lin Hsien',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 216,
            'name' => 'Yunlin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 217,
            'name' => 'Dushanbe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 217,
            'name' => 'Gorno-Badakhshan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 217,
            'name' => 'Karotegin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 217,
            'name' => 'Khatlon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 217,
            'name' => 'Sughd',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Arusha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Dar es Salaam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Dodoma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Iringa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Kagera',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Kigoma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Kilimanjaro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Lindi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Mara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Mbeya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Morogoro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Mtwara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Mwanza',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Pwani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Rukwa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Ruvuma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Shinyanga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Singida',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Tabora',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Tanga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 218,
            'name' => 'Zanzibar and Pemba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Amnat Charoen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Ang Thong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Bangkok',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Buri Ram',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Chachoengsao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Chai Nat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Chaiyaphum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Changwat Chaiyaphum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Chanthaburi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Chiang Mai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Chiang Rai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Chon Buri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Chumphon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Kalasin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Kamphaeng Phet',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Kanchanaburi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Khon Kaen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Krabi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Krung Thep',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Lampang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Lamphun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Loei',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Lop Buri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Mae Hong Son',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Maha Sarakham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Mukdahan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nakhon Nayok',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nakhon Pathom',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nakhon Phanom',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nakhon Ratchasima',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nakhon Sawan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nakhon Si Thammarat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Narathiwat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nong Bua Lam Phu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nong Khai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Nonthaburi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Pathum Thani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Pattani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phangnga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phatthalung',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phayao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phetchabun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phetchaburi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phichit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phitsanulok',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phra Nakhon Si Ayutthaya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phrae',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Phuket',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Prachin Buri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Prachuap Khiri Khan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Ranong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Ratchaburi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Rayong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Roi Et',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Sa Kaeo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Sakon Nakhon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Samut Prakan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Samut Sakhon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Samut Songkhran',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Saraburi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Satun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Si Sa Ket',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Sing Buri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Songkhla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Sukhothai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Suphan Buri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Surat Thani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Surin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Tak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Trang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Trat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Ubon Ratchathani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Udon Thani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Uthai Thani',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Uttaradit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Yala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 219,
            'name' => 'Yasothon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 220,
            'name' => 'Centre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 220,
            'name' => 'Kara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 220,
            'name' => 'Maritime',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 220,
            'name' => 'Plateaux',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 220,
            'name' => 'Savanes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 221,
            'name' => 'Atafu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 221,
            'name' => 'Fakaofo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 221,
            'name' => 'Nukunonu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 222,
            'name' => 'Eua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 222,
            'name' => 'Ha\'apai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 222,
            'name' => 'Niuas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 222,
            'name' => 'Tongatapu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 222,
            'name' => 'Vava\'u',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Arima-Tunapuna-Piarco',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Caroni',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Chaguanas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Couva-Tabaquite-Talparo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Diego Martin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Glencoe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Penal Debe',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Point Fortin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Port of Spain',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Princes Town',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Saint George',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'San Fernando',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'San Juan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Sangre Grande',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Siparia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 223,
            'name' => 'Tobago',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Aryanah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Bajah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Bin \'Arus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Binzart',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Gouvernorat de Ariana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Gouvernorat de Nabeul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Gouvernorat de Sousse',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Hammamet Yasmine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Jundubah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Madaniyin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Manubah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Monastir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Nabul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Qabis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Qafsah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Qibili',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Safaqis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Sfax',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Sidi Bu Zayd',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Silyanah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Susah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Tatawin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Tawzar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Tunis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'Zaghwan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'al-Kaf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'al-Mahdiyah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'al-Munastir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'al-Qasrayn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 224,
            'name' => 'al-Qayrawan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Adana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Adiyaman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Afyon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Agri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Aksaray',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Amasya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Ankara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Antalya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Ardahan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Artvin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Aydin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Balikesir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Bartin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Batman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Bayburt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Bilecik',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Bingol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Bitlis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Bolu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Burdur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Bursa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Canakkale',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Cankiri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Corum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Denizli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Diyarbakir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Duzce',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Edirne',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Elazig',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Erzincan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Erzurum',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Eskisehir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Gaziantep',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Giresun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Gumushane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Hakkari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Hatay',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Icel',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Igdir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Isparta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Istanbul',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Izmir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kahramanmaras',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Karabuk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Karaman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kars',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Karsiyaka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kastamonu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kayseri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kilis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kirikkale',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kirklareli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kirsehir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kocaeli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Konya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Kutahya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Lefkosa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Malatya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Manisa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Mardin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Mugla',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Mus',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Nevsehir',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Nigde',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Ordu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Osmaniye',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Rize',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Sakarya',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Samsun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Sanliurfa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Siirt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Sinop',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Sirnak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Sivas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Tekirdag',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Tokat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Trabzon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Tunceli',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Usak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Van',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Yalova',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Yozgat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 225,
            'name' => 'Zonguldak',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 226,
            'name' => 'Ahal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 226,
            'name' => 'Asgabat',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 226,
            'name' => 'Balkan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 226,
            'name' => 'Dasoguz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 226,
            'name' => 'Lebap',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 226,
            'name' => 'Mari',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 227,
            'name' => 'Grand Turk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 227,
            'name' => 'South Caicos and East Caicos',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 228,
            'name' => 'Funafuti',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 228,
            'name' => 'Nanumanga',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 228,
            'name' => 'Nanumea',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 228,
            'name' => 'Niutao',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 228,
            'name' => 'Nui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 228,
            'name' => 'Nukufetau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 228,
            'name' => 'Nukulaelae',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 228,
            'name' => 'Vaitupu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 229,
            'name' => 'Central',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 229,
            'name' => 'Eastern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 229,
            'name' => 'Northern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 229,
            'name' => 'Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Cherkas\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Chernihivs\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Chernivets\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Crimea',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Dnipropetrovska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Donets\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Ivano-Frankivs\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Kharkiv',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Kharkov',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Khersonska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Khmel\'nyts\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Kirovohrad',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Krym',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Kyyiv',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Kyyivs\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'L\'vivs\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Luhans\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Mykolayivs\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Odes\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Odessa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Poltavs\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Rivnens\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Sevastopol\'',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Sums\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Ternopil\'s\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Volyns\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Vynnyts\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Zakarpats\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Zaporizhia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 230,
            'name' => 'Zhytomyrs\'ka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 231,
            'name' => 'Abu Zabi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 231,
            'name' => 'Ajman',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 231,
            'name' => 'Dubai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 231,
            'name' => 'Ras al-Khaymah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 231,
            'name' => 'Sharjah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 231,
            'name' => 'Sharjha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 231,
            'name' => 'Umm al Qaywayn',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 231,
            'name' => 'al-Fujayrah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 231,
            'name' => 'ash-Shariqah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Aberdeen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Aberdeenshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Argyll',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Armagh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Bedfordshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Belfast',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Berkshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Birmingham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Brechin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Bridgnorth',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Bristol',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Buckinghamshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Cambridge',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Cambridgeshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Channel Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Cheshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Cleveland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Co Fermanagh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Conwy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Cornwall',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Coventry',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Craven Arms',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Cumbria',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Denbighshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Derby',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Derbyshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Devon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Dial Code Dungannon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Didcot',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Dorset',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Dunbartonshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Durham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'East Dunbartonshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'East Lothian',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'East Midlands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'East Sussex',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'East Yorkshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'England',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Essex',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Fermanagh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Fife',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Flintshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Fulham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Gainsborough',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Glocestershire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Gwent',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Hampshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Hants',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Herefordshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Hertfordshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Ireland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Isle Of Man',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Isle of Wight',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Kenford',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Kent',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Kilmarnock',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Lanarkshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Lancashire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Leicestershire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Lincolnshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Llanymynech',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'London',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Ludlow',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Manchester',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Mayfair',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Merseyside',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Mid Glamorgan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Middlesex',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Mildenhall',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Monmouthshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Newton Stewart',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Norfolk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'North Humberside',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'North Yorkshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Northamptonshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Northants',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Northern Ireland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Northumberland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Nottinghamshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Oxford',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Powys',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Roos-shire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'SUSSEX',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Sark',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Scotland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Scottish Borders',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Shropshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Somerset',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'South Glamorgan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'South Wales',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'South Yorkshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Southwell',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Staffordshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Strabane',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Suffolk',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Surrey',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Twickenham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Tyne and Wear',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Tyrone',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Utah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Wales',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Warwickshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'West Lothian',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'West Midlands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'West Sussex',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'West Yorkshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Whissendine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Wiltshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Wokingham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Worcestershire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Wrexham',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Wurttemberg',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 232,
            'name' => 'Yorkshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Alabama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Alaska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Arizona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Arkansas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Byram',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'California',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Cokato',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Colorado',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Connecticut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Delaware',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'District of Columbia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Florida',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Georgia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Hawaii',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Idaho',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Illinois',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Indiana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Iowa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Kansas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Kentucky',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Louisiana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Lowa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Maine',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Maryland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Massachusetts',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Medfield',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Michigan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Minnesota',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Mississippi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Missouri',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Montana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Nebraska',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Nevada',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'New Hampshire',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'New Jersey',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'New Jersy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'New Mexico',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'New York',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'North Carolina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'North Dakota',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Ohio',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Oklahoma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Ontario',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Oregon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Pennsylvania',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Ramey',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Rhode Island',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'South Carolina',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'South Dakota',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Sublimity',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Tennessee',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Texas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Trimble',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Utah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Vermont',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Virginia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Washington',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'West Virginia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Wisconsin',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Wyoming',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 234,
            'name' => 'United States Minor Outlying I',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Artigas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Canelones',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Cerro Largo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Colonia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Durazno',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'FLorida',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Flores',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Lavalleja',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Maldonado',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Montevideo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Paysandu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Rio Negro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Rivera',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Rocha',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Salto',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'San Jose',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Soriano',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Tacuarembo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 235,
            'name' => 'Treinta y Tres',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Andijon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Buhoro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Buxoro Viloyati',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Cizah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Fargona',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Horazm',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Kaskadar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Korakalpogiston',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Namangan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Navoi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Samarkand',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Sirdare',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Surhondar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 236,
            'name' => 'Toskent',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 237,
            'name' => 'Malampa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 237,
            'name' => 'Penama',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 237,
            'name' => 'Sanma',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 237,
            'name' => 'Shefa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 237,
            'name' => 'Tafea',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 237,
            'name' => 'Torba',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 238,
            'name' => 'Vatican City State (Holy See)',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Amazonas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Anzoategui',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Apure',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Aragua',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Barinas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Bolivar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Carabobo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Cojedes',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Delta Amacuro',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Distrito Federal',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Falcon',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Guarico',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Lara',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Merida',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Miranda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Monagas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Nueva Esparta',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Portuguesa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Sucre',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Tachira',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Trujillo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Vargas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Yaracuy',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 239,
            'name' => 'Zulia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Bac Giang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Binh Dinh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Binh Duong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Da Nang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Dong Bang Song Cuu Long',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Dong Bang Song Hong',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Dong Nai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Dong Nam Bo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Duyen Hai Mien Trung',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Hanoi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Hung Yen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Khu Bon Cu',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Long An',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Mien Nui Va Trung Du',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Thai Nguyen',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Thanh Pho Ho Chi Minh',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Thu Do Ha Noi',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Tinh Can Tho',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Tinh Da Nang',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 240,
            'name' => 'Tinh Gia Lai',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 241,
            'name' => 'Anegada',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 241,
            'name' => 'Jost van Dyke',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 241,
            'name' => 'Tortola',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 242,
            'name' => 'Saint Croix',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 242,
            'name' => 'Saint John',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 242,
            'name' => 'Saint Thomas',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 243,
            'name' => 'Alo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 243,
            'name' => 'Singave',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 243,
            'name' => 'Wallis',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 244,
            'name' => 'Bu Jaydur',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 244,
            'name' => 'Wad-adh-Dhahab',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 244,
            'name' => 'al-\'Ayun',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 244,
            'name' => 'as-Samarah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => '\'Adan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Abyan',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Dhamar',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Hadramaut',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Hajjah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Hudaydah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Ibb',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Lahij',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Ma\'rib',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Madinat San\'a',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Sa\'dah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Sana',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Shabwah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'Ta\'izz',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'al-Bayda',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'al-Hudaydah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'al-Jawf',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'al-Mahrah',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 245,
            'name' => 'al-Mahwit',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 246,
            'name' => 'Central',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 246,
            'name' => 'Copperbelt',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 246,
            'name' => 'Eastern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 246,
            'name' => 'Luapala',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 246,
            'name' => 'Lusaka',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 246,
            'name' => 'North-Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 246,
            'name' => 'Northern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 246,
            'name' => 'Southern',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 246,
            'name' => 'Western',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Bulawayo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Harare',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Manicaland',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Mashonaland Central',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Mashonaland East',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Mashonaland West',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Masvingo',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Matabeleland North',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Matabeleland South',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 247,
            'name' => 'Midlands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'American Samoa',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Federated States Of Micronesia',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Guam',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Marshall Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Northern Mariana Islands',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Palau',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Puerto Rico',
            'flag' => 1,
        ]);
        State::create([
            'country_id' => 233,
            'name' => 'Virgin Islands',
            'flag' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
