<?php

use App\Country;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('iso3')->nullable();
            $table->string('currency')->nullable();
            $table->bigInteger('flag')->nullable();
            $table->timestamps();
        });



        //Create Countries

        Country::create([
            'name' => 'Afghanistan',
            'iso3' => 'AFG',
            'currency' => 'AFN',
        ]);
        Country::create([
            'name' => 'Aland Islands',
            'iso3' => 'ALA',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Albania',
            'iso3' => 'ALB',
            'currency' => 'ALL',
        ]);
        Country::create([
            'name' => 'Algeria',
            'iso3' => 'DZA',
            'currency' => 'DZD',
        ]);
        Country::create([
            'name' => 'American Samoa',
            'iso3' => 'ASM',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Andorra',
            'iso3' => 'AND',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Angola',
            'iso3' => 'AGO',
            'currency' => 'AOA',
        ]);
        Country::create([
            'name' => 'Anguilla',
            'iso3' => 'AIA',
            'currency' => 'XCD',
        ]);
        Country::create([
            'name' => 'Antarctica',
            'iso3' => 'ATA',
            'currency' => '',
        ]);
        Country::create([
            'name' => 'Antigua And Barbuda',
            'iso3' => 'ATG',
            'currency' => 'XCD',
        ]);
        Country::create([
            'name' => 'Argentina',
            'iso3' => 'ARG',
            'currency' => 'ARS',
        ]);
        Country::create([
            'name' => 'Armenia',
            'iso3' => 'ARM',
            'currency' => 'AMD',
        ]);
        Country::create([
            'name' => 'Aruba',
            'iso3' => 'ABW',
            'currency' => 'AWG',
        ]);
        Country::create([
            'name' => 'Australia',
            'iso3' => 'AUS',
            'currency' => 'AUD',
        ]);
        Country::create([
            'name' => 'Austria',
            'iso3' => 'AUT',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Azerbaijan',
            'iso3' => 'AZE',
            'currency' => 'AZN',
        ]);
        Country::create([
            'name' => 'Bahamas The',
            'iso3' => 'BHS',
            'currency' => 'BSD',
        ]);
        Country::create([
            'name' => 'Bahrain',
            'iso3' => 'BHR',
            'currency' => 'BHD',
        ]);
        Country::create([
            'name' => 'Bangladesh',
            'iso3' => 'BGD',
            'currency' => 'BDT',
        ]);
        Country::create([
            'name' => 'Barbados',
            'iso3' => 'BRB',
            'currency' => 'BBD',
        ]);
        Country::create([
            'name' => 'Belarus',
            'iso3' => 'BLR',
            'currency' => 'BYR',
        ]);
        Country::create([
            'name' => 'Belgium',
            'iso3' => 'BEL',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Belize',
            'iso3' => 'BLZ',
            'currency' => 'BZD',
        ]);
        Country::create([
            'name' => 'Benin',
            'iso3' => 'BEN',
            'currency' => 'XOF',
        ]);
        Country::create([
            'name' => 'Bermuda',
            'iso3' => 'BMU',
            'currency' => 'BMD',
        ]);
        Country::create([
            'name' => 'Bhutan',
            'iso3' => 'BTN',
            'currency' => 'BTN',
        ]);
        Country::create([
            'name' => 'Bolivia',
            'iso3' => 'BOL',
            'currency' => 'BOB',
        ]);
        Country::create([
            'name' => 'Bosnia and Herzegovina',
            'iso3' => 'BIH',
            'currency' => 'BAM',
        ]);
        Country::create([
            'name' => 'Botswana',
            'iso3' => 'BWA',
            'currency' => 'BWP',
        ]);
        Country::create([
            'name' => 'Bouvet Island',
            'iso3' => 'BVT',
            'currency' => 'NOK',
        ]);
        Country::create([
            'name' => 'Brazil',
            'iso3' => 'BRA',
            'currency' => 'BRL',
        ]);
        Country::create([
            'name' => 'British Indian Ocean Territory',
            'iso3' => 'IOT',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Brunei',
            'iso3' => 'BRN',
            'currency' => 'BND',
        ]);
        Country::create([
            'name' => 'Bulgaria',
            'iso3' => 'BGR',
            'currency' => 'BGN',
        ]);
        Country::create([
            'name' => 'Burkina Faso',
            'iso3' => 'BFA',
            'currency' => 'XOF',
        ]);
        Country::create([
            'name' => 'Burundi',
            'iso3' => 'BDI',
            'currency' => 'BIF',
        ]);
        Country::create([
            'name' => 'Cambodia',
            'iso3' => 'KHM',
            'currency' => 'KHR',
        ]);
        Country::create([
            'name' => 'Cameroon',
            'iso3' => 'CMR',
            'currency' => 'XAF',
        ]);
        Country::create([
            'name' => 'Canada',
            'iso3' => 'CAN',
            'currency' => 'CAD',
        ]);
        Country::create([
            'name' => 'Cape Verde',
            'iso3' => 'CPV',
            'currency' => 'CVE',
        ]);
        Country::create([
            'name' => 'Cayman Islands',
            'iso3' => 'CYM',
            'currency' => 'KYD',
        ]);
        Country::create([
            'name' => 'Central African Republic',
            'iso3' => 'CAF',
            'currency' => 'XAF',
        ]);
        Country::create([
            'name' => 'Chad',
            'iso3' => 'TCD',
            'currency' => 'XAF',
        ]);
        Country::create([
            'name' => 'Chile',
            'iso3' => 'CHL',
            'currency' => 'CLP',
        ]);
        Country::create([
            'name' => 'China',
            'iso3' => 'CHN',
            'currency' => 'CNY',
        ]);
        Country::create([
            'name' => 'Christmas Island',
            'iso3' => 'CXR',
            'currency' => 'AUD',
        ]);
        Country::create([
            'name' => 'Cocos (Keeling) Islands',
            'iso3' => 'CCK',
            'currency' => 'AUD',
        ]);
        Country::create([
            'name' => 'Colombia',
            'iso3' => 'COL',
            'currency' => 'COP',
        ]);
        Country::create([
            'name' => 'Comoros',
            'iso3' => 'COM',
            'currency' => 'KMF',
        ]);
        Country::create([
            'name' => 'Congo',
            'iso3' => 'COG',
            'currency' => 'XAF',
        ]);
        Country::create([
            'name' => 'Congo The Democratic Republic Of The',
            'iso3' => 'COD',
            'currency' => 'CDF',
        ]);
        Country::create([
            'name' => 'Cook Islands',
            'iso3' => 'COK',
            'currency' => 'NZD',
        ]);
        Country::create([
            'name' => 'Costa Rica',
            'iso3' => 'CRI',
            'currency' => 'CRC',
        ]);
        Country::create([
            'name' => 'Cote D\'Ivoire (Ivory Coast)',
            'iso3' => 'CIV',
            'currency' => 'XOF',
        ]);
        Country::create([
            'name' => 'Croatia (Hrvatska)',
            'iso3' => 'HRV',
            'currency' => 'HRK',
        ]);
        Country::create([
            'name' => 'Cuba',
            'iso3' => 'CUB',
            'currency' => 'CUP',
        ]);
        Country::create([
            'name' => 'Cyprus',
            'iso3' => 'CYP',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Czech Republic',
            'iso3' => 'CZE',
            'currency' => 'CZK',
        ]);
        Country::create([
            'name' => 'Denmark',
            'iso3' => 'DNK',
            'currency' => 'DKK',
        ]);
        Country::create([
            'name' => 'Djibouti',
            'iso3' => 'DJI',
            'currency' => 'DJF',
        ]);
        Country::create([
            'name' => 'Dominica',
            'iso3' => 'DMA',
            'currency' => 'XCD',
        ]);
        Country::create([
            'name' => 'Dominican Republic',
            'iso3' => 'DOM',
            'currency' => 'DOP',
        ]);
        Country::create([
            'name' => 'East Timor',
            'iso3' => 'TLS',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Ecuador',
            'iso3' => 'ECU',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Egypt',
            'iso3' => 'EGY',
            'currency' => 'EGP',
        ]);
        Country::create([
            'name' => 'El Salvador',
            'iso3' => 'SLV',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Equatorial Guinea',
            'iso3' => 'GNQ',
            'currency' => 'XAF',
        ]);
        Country::create([
            'name' => 'Eritrea',
            'iso3' => 'ERI',
            'currency' => 'ERN',
        ]);
        Country::create([
            'name' => 'Estonia',
            'iso3' => 'EST',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Ethiopia',
            'iso3' => 'ETH',
            'currency' => 'ETB',
        ]);
        Country::create([
            'name' => 'Falkland Islands',
            'iso3' => 'FLK',
            'currency' => 'FKP',
        ]);
        Country::create([
            'name' => 'Faroe Islands',
            'iso3' => 'FRO',
            'currency' => 'DKK',
        ]);
        Country::create([
            'name' => 'Fiji Islands',
            'iso3' => 'FJI',
            'currency' => 'FJD',
        ]);
        Country::create([
            'name' => 'Finland',
            'iso3' => 'FIN',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'France',
            'iso3' => 'FRA',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'French Guiana',
            'iso3' => 'GUF',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'French Polynesia',
            'iso3' => 'PYF',
            'currency' => 'XPF',
        ]);
        Country::create([
            'name' => 'French Southern Territories',
            'iso3' => 'ATF',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Gabon',
            'iso3' => 'GAB',
            'currency' => 'XAF',
        ]);
        Country::create([
            'name' => 'Gambia The',
            'iso3' => 'GMB',
            'currency' => 'GMD',
        ]);
        Country::create([
            'name' => 'Georgia',
            'iso3' => 'GEO',
            'currency' => 'GEL',
        ]);
        Country::create([
            'name' => 'Germany',
            'iso3' => 'DEU',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Ghana',
            'iso3' => 'GHA',
            'currency' => 'GHS',
        ]);
        Country::create([
            'name' => 'Gibraltar',
            'iso3' => 'GIB',
            'currency' => 'GIP',
        ]);
        Country::create([
            'name' => 'Greece',
            'iso3' => 'GRC',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Greenland',
            'iso3' => 'GRL',
            'currency' => 'DKK',
        ]);
        Country::create([
            'name' => 'Grenada',
            'iso3' => 'GRD',
            'currency' => 'XCD',
        ]);
        Country::create([
            'name' => 'Guadeloupe',
            'iso3' => 'GLP',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Guam',
            'iso3' => 'GUM',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Guatemala',
            'iso3' => 'GTM',
            'currency' => 'GTQ',
        ]);
        Country::create([
            'name' => 'Guernsey and Alderney',
            'iso3' => 'GGY',
            'currency' => 'GBP',
        ]);
        Country::create([
            'name' => 'Guinea',
            'iso3' => 'GIN',
            'currency' => 'GNF',
        ]);
        Country::create([
            'name' => 'Guinea-Bissau',
            'iso3' => 'GNB',
            'currency' => 'XOF',
        ]);
        Country::create([
            'name' => 'Guyana',
            'iso3' => 'GUY',
            'currency' => 'GYD',
        ]);
        Country::create([
            'name' => 'Haiti',
            'iso3' => 'HTI',
            'currency' => 'HTG',
        ]);
        Country::create([
            'name' => 'Heard and McDonald Islands',
            'iso3' => 'HMD',
            'currency' => 'AUD',
        ]);
        Country::create([
            'name' => 'Honduras',
            'iso3' => 'HND',
            'currency' => 'HNL',
        ]);
        Country::create([
            'name' => 'Hong Kong S.A.R.',
            'iso3' => 'HKG',
            'currency' => 'HKD',
        ]);
        Country::create([
            'name' => 'Hungary',
            'iso3' => 'HUN',
            'currency' => 'HUF',
        ]);
        Country::create([
            'name' => 'Iceland',
            'iso3' => 'ISL',
            'currency' => 'ISK',
        ]);
        Country::create([
            'name' => 'India',
            'iso3' => 'IND',
            'currency' => 'INR',
        ]);
        Country::create([
            'name' => 'Indonesia',
            'iso3' => 'IDN',
            'currency' => 'IDR',
        ]);
        Country::create([
            'name' => 'Iran',
            'iso3' => 'IRN',
            'currency' => 'IRR',
        ]);
        Country::create([
            'name' => 'Iraq',
            'iso3' => 'IRQ',
            'currency' => 'IQD',
        ]);
        Country::create([
            'name' => 'Ireland',
            'iso3' => 'IRL',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Israel',
            'iso3' => 'ISR',
            'currency' => 'ILS',
        ]);
        Country::create([
            'name' => 'Italy',
            'iso3' => 'ITA',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Jamaica',
            'iso3' => 'JAM',
            'currency' => 'JMD',
        ]);
        Country::create([
            'name' => 'Japan',
            'iso3' => 'JPN',
            'currency' => 'JPY',
        ]);
        Country::create([
            'name' => 'Jersey',
            'iso3' => 'JEY',
            'currency' => 'GBP',
        ]);
        Country::create([
            'name' => 'Jordan',
            'iso3' => 'JOR',
            'currency' => 'JOD',
        ]);
        Country::create([
            'name' => 'Kazakhstan',
            'iso3' => 'KAZ',
            'currency' => 'KZT',
        ]);
        Country::create([
            'name' => 'Kenya',
            'iso3' => 'KEN',
            'currency' => 'KES',
        ]);
        Country::create([
            'name' => 'Kiribati',
            'iso3' => 'KIR',
            'currency' => 'AUD',
        ]);
        Country::create([
            'name' => 'Korea North ',
            'iso3' => 'PRK',
            'currency' => 'KPW',
        ]);
        Country::create([
            'name' => 'Korea South',
            'iso3' => 'KOR',
            'currency' => 'KRW',
        ]);
        Country::create([
            'name' => 'Kuwait',
            'iso3' => 'KWT',
            'currency' => 'KWD',
        ]);
        Country::create([
            'name' => 'Kyrgyzstan',
            'iso3' => 'KGZ',
            'currency' => 'KGS',
        ]);
        Country::create([
            'name' => 'Laos',
            'iso3' => 'LAO',
            'currency' => 'LAK',
        ]);
        Country::create([
            'name' => 'Latvia',
            'iso3' => 'LVA',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Lebanon',
            'iso3' => 'LBN',
            'currency' => 'LBP',
        ]);
        Country::create([
            'name' => 'Lesotho',
            'iso3' => 'LSO',
            'currency' => 'LSL',
        ]);
        Country::create([
            'name' => 'Liberia',
            'iso3' => 'LBR',
            'currency' => 'LRD',
        ]);
        Country::create([
            'name' => 'Libya',
            'iso3' => 'LBY',
            'currency' => 'LYD',
        ]);
        Country::create([
            'name' => 'Liechtenstein',
            'iso3' => 'LIE',
            'currency' => 'CHF',
        ]);
        Country::create([
            'name' => 'Lithuania',
            'iso3' => 'LTU',
            'currency' => 'LTL',
        ]);
        Country::create([
            'name' => 'Luxembourg',
            'iso3' => 'LUX',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Macau S.A.R.',
            'iso3' => 'MAC',
            'currency' => 'MOP',
        ]);
        Country::create([
            'name' => 'Macedonia',
            'iso3' => 'MKD',
            'currency' => 'MKD',
        ]);
        Country::create([
            'name' => 'Madagascar',
            'iso3' => 'MDG',
            'currency' => 'MGA',
        ]);
        Country::create([
            'name' => 'Malawi',
            'iso3' => 'MWI',
            'currency' => 'MWK',
        ]);
        Country::create([
            'name' => 'Malaysia',
            'iso3' => 'MYS',
            'currency' => 'MYR',
        ]);
        Country::create([
            'name' => 'Maldives',
            'iso3' => 'MDV',
            'currency' => 'MVR',
        ]);
        Country::create([
            'name' => 'Mali',
            'iso3' => 'MLI',
            'currency' => 'XOF',
        ]);
        Country::create([
            'name' => 'Malta',
            'iso3' => 'MLT',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Man (Isle of)',
            'iso3' => 'IMN',
            'currency' => 'GBP',
        ]);
        Country::create([
            'name' => 'Marshall Islands',
            'iso3' => 'MHL',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Martinique',
            'iso3' => 'MTQ',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Mauritania',
            'iso3' => 'MRT',
            'currency' => 'MRO',
        ]);
        Country::create([
            'name' => 'Mauritius',
            'iso3' => 'MUS',
            'currency' => 'MUR',
        ]);
        Country::create([
            'name' => 'Mayotte',
            'iso3' => 'MYT',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Mexico',
            'iso3' => 'MEX',
            'currency' => 'MXN',
        ]);
        Country::create([
            'name' => 'Micronesia',
            'iso3' => 'FSM',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Moldova',
            'iso3' => 'MDA',
            'currency' => 'MDL',
        ]);
        Country::create([
            'name' => 'Monaco',
            'iso3' => 'MCO',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Mongolia',
            'iso3' => 'MNG',
            'currency' => 'MNT',
        ]);
        Country::create([
            'name' => 'Montenegro',
            'iso3' => 'MNE',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Montserrat',
            'iso3' => 'MSR',
            'currency' => 'XCD',
        ]);
        Country::create([
            'name' => 'Morocco',
            'iso3' => 'MAR',
            'currency' => 'MAD',
        ]);
        Country::create([
            'name' => 'Mozambique',
            'iso3' => 'MOZ',
            'currency' => 'MZN',
        ]);
        Country::create([
            'name' => 'Myanmar',
            'iso3' => 'MMR',
            'currency' => 'MMK',
        ]);
        Country::create([
            'name' => 'Namibia',
            'iso3' => 'NAM',
            'currency' => 'NAD',
        ]);
        Country::create([
            'name' => 'Nauru',
            'iso3' => 'NRU',
            'currency' => 'AUD',
        ]);
        Country::create([
            'name' => 'Nepal',
            'iso3' => 'NPL',
            'currency' => 'NPR',
        ]);
        Country::create([
            'name' => 'Netherlands Antilles',
            'iso3' => 'ANT',
            'currency' => '',
        ]);
        Country::create([
            'name' => 'Netherlands The',
            'iso3' => 'NLD',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'New Caledonia',
            'iso3' => 'NCL',
            'currency' => 'XPF',
        ]);
        Country::create([
            'name' => 'New Zealand',
            'iso3' => 'NZL',
            'currency' => 'NZD',
        ]);
        Country::create([
            'name' => 'Nicaragua',
            'iso3' => 'NIC',
            'currency' => 'NIO',
        ]);
        Country::create([
            'name' => 'Niger',
            'iso3' => 'NER',
            'currency' => 'XOF',
        ]);
        Country::create([
            'name' => 'Nigeria',
            'iso3' => 'NGA',
            'currency' => 'NGN',
        ]);
        Country::create([
            'name' => 'Niue',
            'iso3' => 'NIU',
            'currency' => 'NZD',
        ]);
        Country::create([
            'name' => 'Norfolk Island',
            'iso3' => 'NFK',
            'currency' => 'AUD',
        ]);
        Country::create([
            'name' => 'Northern Mariana Islands',
            'iso3' => 'MNP',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Norway',
            'iso3' => 'NOR',
            'currency' => 'NOK',
        ]);
        Country::create([
            'name' => 'Oman',
            'iso3' => 'OMN',
            'currency' => 'OMR',
        ]);
        Country::create([
            'name' => 'Pakistan',
            'iso3' => 'PAK',
            'currency' => 'PKR',
        ]);
        Country::create([
            'name' => 'Palau',
            'iso3' => 'PLW',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Palestinian Territory Occupied',
            'iso3' => 'PSE',
            'currency' => 'ILS',
        ]);
        Country::create([
            'name' => 'Panama',
            'iso3' => 'PAN',
            'currency' => 'PAB',
        ]);
        Country::create([
            'name' => 'Papua new Guinea',
            'iso3' => 'PNG',
            'currency' => 'PGK',
        ]);
        Country::create([
            'name' => 'Paraguay',
            'iso3' => 'PRY',
            'currency' => 'PYG',
        ]);
        Country::create([
            'name' => 'Peru',
            'iso3' => 'PER',
            'currency' => 'PEN',
        ]);
        Country::create([
            'name' => 'Philippines',
            'iso3' => 'PHL',
            'currency' => 'PHP',
        ]);
        Country::create([
            'name' => 'Pitcairn Island',
            'iso3' => 'PCN',
            'currency' => 'NZD',
        ]);
        Country::create([
            'name' => 'Poland',
            'iso3' => 'POL',
            'currency' => 'PLN',
        ]);
        Country::create([
            'name' => 'Portugal',
            'iso3' => 'PRT',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Puerto Rico',
            'iso3' => 'PRI',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Qatar',
            'iso3' => 'QAT',
            'currency' => 'QAR',
        ]);
        Country::create([
            'name' => 'Reunion',
            'iso3' => 'REU',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Romania',
            'iso3' => 'ROU',
            'currency' => 'RON',
        ]);
        Country::create([
            'name' => 'Russia',
            'iso3' => 'RUS',
            'currency' => 'RUB',
        ]);
        Country::create([
            'name' => 'Rwanda',
            'iso3' => 'RWA',
            'currency' => 'RWF',
        ]);
        Country::create([
            'name' => 'Saint Helena',
            'iso3' => 'SHN',
            'currency' => 'SHP',
        ]);
        Country::create([
            'name' => 'Saint Kitts And Nevis',
            'iso3' => 'KNA',
            'currency' => 'XCD',
        ]);
        Country::create([
            'name' => 'Saint Lucia',
            'iso3' => 'LCA',
            'currency' => 'XCD',
        ]);
        Country::create([
            'name' => 'Saint Pierre and Miquelon',
            'iso3' => 'SPM',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Saint Vincent And The Grenadines',
            'iso3' => 'VCT',
            'currency' => 'XCD',
        ]);
        Country::create([
            'name' => 'Saint-Barthelemy',
            'iso3' => 'BLM',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Saint-Martin (French part)',
            'iso3' => 'MAF',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Samoa',
            'iso3' => 'WSM',
            'currency' => 'WST',
        ]);
        Country::create([
            'name' => 'San Marino',
            'iso3' => 'SMR',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Sao Tome and Principe',
            'iso3' => 'STP',
            'currency' => 'STD',
        ]);
        Country::create([
            'name' => 'Saudi Arabia',
            'iso3' => 'SAU',
            'currency' => 'SAR',
        ]);
        Country::create([
            'name' => 'Senegal',
            'iso3' => 'SEN',
            'currency' => 'XOF',
        ]);
        Country::create([
            'name' => 'Serbia',
            'iso3' => 'SRB',
            'currency' => 'RSD',
        ]);
        Country::create([
            'name' => 'Seychelles',
            'iso3' => 'SYC',
            'currency' => 'SCR',
        ]);
        Country::create([
            'name' => 'Sierra Leone',
            'iso3' => 'SLE',
            'currency' => 'SLL',
        ]);
        Country::create([
            'name' => 'Singapore',
            'iso3' => 'SGP',
            'currency' => 'SGD',
        ]);
        Country::create([
            'name' => 'Slovakia',
            'iso3' => 'SVK',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Slovenia',
            'iso3' => 'SVN',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Solomon Islands',
            'iso3' => 'SLB',
            'currency' => 'SBD',
        ]);
        Country::create([
            'name' => 'Somalia',
            'iso3' => 'SOM',
            'currency' => 'SOS',
        ]);
        Country::create([
            'name' => 'South Africa',
            'iso3' => 'ZAF',
            'currency' => 'ZAR',
        ]);
        Country::create([
            'name' => 'South Georgia',
            'iso3' => 'SGS',
            'currency' => 'GBP',
        ]);
        Country::create([
            'name' => 'South Sudan',
            'iso3' => 'SSD',
            'currency' => 'SSP',
        ]);
        Country::create([
            'name' => 'Spain',
            'iso3' => 'ESP',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Sri Lanka',
            'iso3' => 'LKA',
            'currency' => 'LKR',
        ]);
        Country::create([
            'name' => 'Sudan',
            'iso3' => 'SDN',
            'currency' => 'SDG',
        ]);
        Country::create([
            'name' => 'Suriname',
            'iso3' => 'SUR',
            'currency' => 'SRD',
        ]);
        Country::create([
            'name' => 'Svalbard And Jan Mayen Islands',
            'iso3' => 'SJM',
            'currency' => 'NOK',
        ]);
        Country::create([
            'name' => 'Swaziland',
            'iso3' => 'SWZ',
            'currency' => 'SZL',
        ]);
        Country::create([
            'name' => 'Sweden',
            'iso3' => 'SWE',
            'currency' => 'SEK',
        ]);
        Country::create([
            'name' => 'Switzerland',
            'iso3' => 'CHE',
            'currency' => 'CHF',
        ]);
        Country::create([
            'name' => 'Syria',
            'iso3' => 'SYR',
            'currency' => 'SYP',
        ]);
        Country::create([
            'name' => 'Taiwan',
            'iso3' => 'TWN',
            'currency' => 'TWD',
        ]);
        Country::create([
            'name' => 'Tajikistan',
            'iso3' => 'TJK',
            'currency' => 'TJS',
        ]);
        Country::create([
            'name' => 'Tanzania',
            'iso3' => 'TZA',
            'currency' => 'TZS',
        ]);
        Country::create([
            'name' => 'Thailand',
            'iso3' => 'THA',
            'currency' => 'THB',
        ]);
        Country::create([
            'name' => 'Togo',
            'iso3' => 'TGO',
            'currency' => 'XOF',
        ]);
        Country::create([
            'name' => 'Tokelau',
            'iso3' => 'TKL',
            'currency' => 'NZD',
        ]);
        Country::create([
            'name' => 'Tonga',
            'iso3' => 'TON',
            'currency' => 'TOP',
        ]);
        Country::create([
            'name' => 'Trinidad And Tobago',
            'iso3' => 'TTO',
            'currency' => 'TTD',
        ]);
        Country::create([
            'name' => 'Tunisia',
            'iso3' => 'TUN',
            'currency' => 'TND',
        ]);
        Country::create([
            'name' => 'Turkey',
            'iso3' => 'TUR',
            'currency' => 'TRY',
        ]);
        Country::create([
            'name' => 'Turkmenistan',
            'iso3' => 'TKM',
            'currency' => 'TMT',
        ]);
        Country::create([
            'name' => 'Turks And Caicos Islands',
            'iso3' => 'TCA',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Tuvalu',
            'iso3' => 'TUV',
            'currency' => 'AUD',
        ]);
        Country::create([
            'name' => 'Uganda',
            'iso3' => 'UGA',
            'currency' => 'UGX',
        ]);
        Country::create([
            'name' => 'Ukraine',
            'iso3' => 'UKR',
            'currency' => 'UAH',
        ]);
        Country::create([
            'name' => 'United Arab Emirates',
            'iso3' => 'ARE',
            'currency' => 'AED',
        ]);
        Country::create([
            'name' => 'United Kingdom',
            'iso3' => 'GBR',
            'currency' => 'GBP',
        ]);
        Country::create([
            'name' => 'United States',
            'iso3' => 'USA',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'United States Minor Outlying Islands',
            'iso3' => 'UMI',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Uruguay',
            'iso3' => 'URY',
            'currency' => 'UYU',
        ]);
        Country::create([
            'name' => 'Uzbekistan',
            'iso3' => 'UZB',
            'currency' => 'UZS',
        ]);
        Country::create([
            'name' => 'Vanuatu',
            'iso3' => 'VUT',
            'currency' => 'VUV',
        ]);
        Country::create([
            'name' => 'Vatican City State (Holy See)',
            'iso3' => 'VAT',
            'currency' => 'EUR',
        ]);
        Country::create([
            'name' => 'Venezuela',
            'iso3' => 'VEN',
            'currency' => 'VEF',
        ]);
        Country::create([
            'name' => 'Vietnam',
            'iso3' => 'VNM',
            'currency' => 'VND',
        ]);
        Country::create([
            'name' => 'Virgin Islands (British)',
            'iso3' => 'VGB',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Virgin Islands (US)',
            'iso3' => 'VIR',
            'currency' => 'USD',
        ]);
        Country::create([
            'name' => 'Wallis And Futuna Islands',
            'iso3' => 'WLF',
            'currency' => 'XPF',
        ]);
        Country::create([
            'name' => 'Western Sahara',
            'iso3' => 'ESH',
            'currency' => 'MAD',
        ]);
        Country::create([
            'name' => 'Yemen',
            'iso3' => 'YEM',
            'currency' => 'YER',
        ]);
        Country::create([
            'name' => 'Zambia',
            'iso3' => 'ZMB',
            'currency' => 'ZMK',
        ]);
        Country::create([
            'name' => 'Zimbabwe',
            'iso3' => 'ZWE',
            'currency' => 'ZWL',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
