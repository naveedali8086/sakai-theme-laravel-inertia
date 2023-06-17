<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SakaiThemeController extends Controller
{
    public function getData(Request $request, string $item)
    {
        return match ($item) {
            'countries' => $this->getCountries(),
            'customers-large' => $this->getLargeCustomers(),
            'customers-medium' => $this->getMediumCustomers(),
//            '' => $this->getEvents(),
//            '' => $this->getIcons(),
            'photos' => $this->getPhotos(),
            'products' => $this->getProducts(),
            'products-orders-small' => $this->getSmallOrders(),
            'products-small' => $this->getSmallProducts(),
            'treenodes' => $this->getTreeNodes(),
            'treetablenodes' => $this->getTreeTableNodes(),
        };
    }
    private function getCountries(): JsonResponse
    {
        return response()->json([
            "data" => [
                [
                    "name" => "Afghanistan",
                    "code" => "AF"
                ],
                [
                    "name" => "Åland Islands",
                    "code" => "AX"
                ],
                [
                    "name" => "Albania",
                    "code" => "AL"
                ],
                [
                    "name" => "Algeria",
                    "code" => "DZ"
                ],
                [
                    "name" => "American Samoa",
                    "code" => "AS"
                ],
                [
                    "name" => "Andorra",
                    "code" => "AD"
                ],
                [
                    "name" => "Angola",
                    "code" => "AO"
                ],
                [
                    "name" => "Anguilla",
                    "code" => "AI"
                ],
                [
                    "name" => "Antarctica",
                    "code" => "AQ"
                ],
                [
                    "name" => "Antigua and Barbuda",
                    "code" => "AG"
                ],
                [
                    "name" => "Argentina",
                    "code" => "AR"
                ],
                [
                    "name" => "Armenia",
                    "code" => "AM"
                ],
                [
                    "name" => "Aruba",
                    "code" => "AW"
                ],
                [
                    "name" => "Australia",
                    "code" => "AU"
                ],
                [
                    "name" => "Austria",
                    "code" => "AT"
                ],
                [
                    "name" => "Azerbaijan",
                    "code" => "AZ"
                ],
                [
                    "name" => "Bahamas",
                    "code" => "BS"
                ],
                [
                    "name" => "Bahrain",
                    "code" => "BH"
                ],
                [
                    "name" => "Bangladesh",
                    "code" => "BD"
                ],
                [
                    "name" => "Barbados",
                    "code" => "BB"
                ],
                [
                    "name" => "Belarus",
                    "code" => "BY"
                ],
                [
                    "name" => "Belgium",
                    "code" => "BE"
                ],
                [
                    "name" => "Belize",
                    "code" => "BZ"
                ],
                [
                    "name" => "Benin",
                    "code" => "BJ"
                ],
                [
                    "name" => "Bermuda",
                    "code" => "BM"
                ],
                [
                    "name" => "Bhutan",
                    "code" => "BT"
                ],
                [
                    "name" => "Bolivia",
                    "code" => "BO"
                ],
                [
                    "name" => "Bosnia and Herzegovina",
                    "code" => "BA"
                ],
                [
                    "name" => "Botswana",
                    "code" => "BW"
                ],
                [
                    "name" => "Bouvet Island",
                    "code" => "BV"
                ],
                [
                    "name" => "Brazil",
                    "code" => "BR"
                ],
                [
                    "name" => "British Indian Ocean Territory",
                    "code" => "IO"
                ],
                [
                    "name" => "Brunei Darussalam",
                    "code" => "BN"
                ],
                [
                    "name" => "Bulgaria",
                    "code" => "BG"
                ],
                [
                    "name" => "Burkina Faso",
                    "code" => "BF"
                ],
                [
                    "name" => "Burundi",
                    "code" => "BI"
                ],
                [
                    "name" => "Cambodia",
                    "code" => "KH"
                ],
                [
                    "name" => "Cameroon",
                    "code" => "CM"
                ],
                [
                    "name" => "Canada",
                    "code" => "CA"
                ],
                [
                    "name" => "Cape Verde",
                    "code" => "CV"
                ],
                [
                    "name" => "Cayman Islands",
                    "code" => "KY"
                ],
                [
                    "name" => "Central African Republic",
                    "code" => "CF"
                ],
                [
                    "name" => "Chad",
                    "code" => "TD"
                ],
                [
                    "name" => "Chile",
                    "code" => "CL"
                ],
                [
                    "name" => "China",
                    "code" => "CN"
                ],
                [
                    "name" => "Christmas Island",
                    "code" => "CX"
                ],
                [
                    "name" => "Cocos (Keeling) Islands",
                    "code" => "CC"
                ],
                [
                    "name" => "Colombia",
                    "code" => "CO"
                ],
                [
                    "name" => "Comoros",
                    "code" => "KM"
                ],
                [
                    "name" => "Congo",
                    "code" => "CG"
                ],
                [
                    "name" => "Congo, The Democratic Republic of the",
                    "code" => "CD"
                ],
                [
                    "name" => "Cook Islands",
                    "code" => "CK"
                ],
                [
                    "name" => "Costa Rica",
                    "code" => "CR"
                ],
                [
                    "name" => "Cote D\"Ivoire",
                    "code" => "CI"
                ],
                [
                    "name" => "Croatia",
                    "code" => "HR"
                ],
                [
                    "name" => "Cuba",
                    "code" => "CU"
                ],
                [
                    "name" => "Cyprus",
                    "code" => "CY"
                ],
                [
                    "name" => "Czech Republic",
                    "code" => "CZ"
                ],
                [
                    "name" => "Denmark",
                    "code" => "DK"
                ],
                [
                    "name" => "Djibouti",
                    "code" => "DJ"
                ],
                [
                    "name" => "Dominica",
                    "code" => "DM"
                ],
                [
                    "name" => "Dominican Republic",
                    "code" => "DO"
                ],
                [
                    "name" => "Ecuador",
                    "code" => "EC"
                ],
                [
                    "name" => "Egypt",
                    "code" => "EG"
                ],
                [
                    "name" => "El Salvador",
                    "code" => "SV"
                ],
                [
                    "name" => "Equatorial Guinea",
                    "code" => "GQ"
                ],
                [
                    "name" => "Eritrea",
                    "code" => "ER"
                ],
                [
                    "name" => "Estonia",
                    "code" => "EE"
                ],
                [
                    "name" => "Ethiopia",
                    "code" => "ET"
                ],
                [
                    "name" => "Falkland Islands (Malvinas)",
                    "code" => "FK"
                ],
                [
                    "name" => "Faroe Islands",
                    "code" => "FO"
                ],
                [
                    "name" => "Fiji",
                    "code" => "FJ"
                ],
                [
                    "name" => "Finland",
                    "code" => "FI"
                ],
                [
                    "name" => "France",
                    "code" => "FR"
                ],
                [
                    "name" => "French Guiana",
                    "code" => "GF"
                ],
                [
                    "name" => "French Polynesia",
                    "code" => "PF"
                ],
                [
                    "name" => "French Southern Territories",
                    "code" => "TF"
                ],
                [
                    "name" => "Gabon",
                    "code" => "GA"
                ],
                [
                    "name" => "Gambia",
                    "code" => "GM"
                ],
                [
                    "name" => "Georgia",
                    "code" => "GE"
                ],
                [
                    "name" => "Germany",
                    "code" => "DE"
                ],
                [
                    "name" => "Ghana",
                    "code" => "GH"
                ],
                [
                    "name" => "Gibraltar",
                    "code" => "GI"
                ],
                [
                    "name" => "Greece",
                    "code" => "GR"
                ],
                [
                    "name" => "Greenland",
                    "code" => "GL"
                ],
                [
                    "name" => "Grenada",
                    "code" => "GD"
                ],
                [
                    "name" => "Guadeloupe",
                    "code" => "GP"
                ],
                [
                    "name" => "Guam",
                    "code" => "GU"
                ],
                [
                    "name" => "Guatemala",
                    "code" => "GT"
                ],
                [
                    "name" => "Guernsey",
                    "code" => "GG"
                ],
                [
                    "name" => "Guinea",
                    "code" => "GN"
                ],
                [
                    "name" => "Guinea-Bissau",
                    "code" => "GW"
                ],
                [
                    "name" => "Guyana",
                    "code" => "GY"
                ],
                [
                    "name" => "Haiti",
                    "code" => "HT"
                ],
                [
                    "name" => "Heard Island and Mcdonald Islands",
                    "code" => "HM"
                ],
                [
                    "name" => "Holy See (Vatican City State)",
                    "code" => "VA"
                ],
                [
                    "name" => "Honduras",
                    "code" => "HN"
                ],
                [
                    "name" => "Hong Kong",
                    "code" => "HK"
                ],
                [
                    "name" => "Hungary",
                    "code" => "HU"
                ],
                [
                    "name" => "Iceland",
                    "code" => "IS"
                ],
                [
                    "name" => "India",
                    "code" => "IN"
                ],
                [
                    "name" => "Indonesia",
                    "code" => "ID"
                ],
                [
                    "name" => "Iran, Islamic Republic Of",
                    "code" => "IR"
                ],
                [
                    "name" => "Iraq",
                    "code" => "IQ"
                ],
                [
                    "name" => "Ireland",
                    "code" => "IE"
                ],
                [
                    "name" => "Isle of Man",
                    "code" => "IM"
                ],
                [
                    "name" => "Israel",
                    "code" => "IL"
                ],
                [
                    "name" => "Italy",
                    "code" => "IT"
                ],
                [
                    "name" => "Jamaica",
                    "code" => "JM"
                ],
                [
                    "name" => "Japan",
                    "code" => "JP"
                ],
                [
                    "name" => "Jersey",
                    "code" => "JE"
                ],
                [
                    "name" => "Jordan",
                    "code" => "JO"
                ],
                [
                    "name" => "Kazakhstan",
                    "code" => "KZ"
                ],
                [
                    "name" => "Kenya",
                    "code" => "KE"
                ],
                [
                    "name" => "Kiribati",
                    "code" => "KI"
                ],
                [
                    "name" => "Korea, Democratic People\"S Republic of",
                    "code" => "KP"
                ],
                [
                    "name" => "Korea, Republic of",
                    "code" => "KR"
                ],
                [
                    "name" => "Kuwait",
                    "code" => "KW"
                ],
                [
                    "name" => "Kyrgyzstan",
                    "code" => "KG"
                ],
                [
                    "name" => "Lao People\"S Democratic Republic",
                    "code" => "LA"
                ],
                [
                    "name" => "Latvia",
                    "code" => "LV"
                ],
                [
                    "name" => "Lebanon",
                    "code" => "LB"
                ],
                [
                    "name" => "Lesotho",
                    "code" => "LS"
                ],
                [
                    "name" => "Liberia",
                    "code" => "LR"
                ],
                [
                    "name" => "Libyan Arab Jamahiriya",
                    "code" => "LY"
                ],
                [
                    "name" => "Liechtenstein",
                    "code" => "LI"
                ],
                [
                    "name" => "Lithuania",
                    "code" => "LT"
                ],
                [
                    "name" => "Luxembourg",
                    "code" => "LU"
                ],
                [
                    "name" => "Macao",
                    "code" => "MO"
                ],
                [
                    "name" => "Macedonia, The Former Yugoslav Republic of",
                    "code" => "MK"
                ],
                [
                    "name" => "Madagascar",
                    "code" => "MG"
                ],
                [
                    "name" => "Malawi",
                    "code" => "MW"
                ],
                [
                    "name" => "Malaysia",
                    "code" => "MY"
                ],
                [
                    "name" => "Maldives",
                    "code" => "MV"
                ],
                [
                    "name" => "Mali",
                    "code" => "ML"
                ],
                [
                    "name" => "Malta",
                    "code" => "MT"
                ],
                [
                    "name" => "Marshall Islands",
                    "code" => "MH"
                ],
                [
                    "name" => "Martinique",
                    "code" => "MQ"
                ],
                [
                    "name" => "Mauritania",
                    "code" => "MR"
                ],
                [
                    "name" => "Mauritius",
                    "code" => "MU"
                ],
                [
                    "name" => "Mayotte",
                    "code" => "YT"
                ],
                [
                    "name" => "Mexico",
                    "code" => "MX"
                ],
                [
                    "name" => "Micronesia, Federated States of",
                    "code" => "FM"
                ],
                [
                    "name" => "Moldova, Republic of",
                    "code" => "MD"
                ],
                [
                    "name" => "Monaco",
                    "code" => "MC"
                ],
                [
                    "name" => "Mongolia",
                    "code" => "MN"
                ],
                [
                    "name" => "Montserrat",
                    "code" => "MS"
                ],
                [
                    "name" => "Morocco",
                    "code" => "MA"
                ],
                [
                    "name" => "Mozambique",
                    "code" => "MZ"
                ],
                [
                    "name" => "Myanmar",
                    "code" => "MM"
                ],
                [
                    "name" => "Namibia",
                    "code" => "NA"
                ],
                [
                    "name" => "Nauru",
                    "code" => "NR"
                ],
                [
                    "name" => "Nepal",
                    "code" => "NP"
                ],
                [
                    "name" => "Netherlands",
                    "code" => "NL"
                ],
                [
                    "name" => "Netherlands Antilles",
                    "code" => "AN"
                ],
                [
                    "name" => "New Caledonia",
                    "code" => "NC"
                ],
                [
                    "name" => "New Zealand",
                    "code" => "NZ"
                ],
                [
                    "name" => "Nicaragua",
                    "code" => "NI"
                ],
                [
                    "name" => "Niger",
                    "code" => "NE"
                ],
                [
                    "name" => "Nigeria",
                    "code" => "NG"
                ],
                [
                    "name" => "Niue",
                    "code" => "NU"
                ],
                [
                    "name" => "Norfolk Island",
                    "code" => "NF"
                ],
                [
                    "name" => "Northern Mariana Islands",
                    "code" => "MP"
                ],
                [
                    "name" => "Norway",
                    "code" => "NO"
                ],
                [
                    "name" => "Oman",
                    "code" => "OM"
                ],
                [
                    "name" => "Pakistan",
                    "code" => "PK"
                ],
                [
                    "name" => "Palau",
                    "code" => "PW"
                ],
                [
                    "name" => "Palestinian Territory, Occupied",
                    "code" => "PS"
                ],
                [
                    "name" => "Panama",
                    "code" => "PA"
                ],
                [
                    "name" => "Papua New Guinea",
                    "code" => "PG"
                ],
                [
                    "name" => "Paraguay",
                    "code" => "PY"
                ],
                [
                    "name" => "Peru",
                    "code" => "PE"
                ],
                [
                    "name" => "Philippines",
                    "code" => "PH"
                ],
                [
                    "name" => "Pitcairn",
                    "code" => "PN"
                ],
                [
                    "name" => "Poland",
                    "code" => "PL"
                ],
                [
                    "name" => "Portugal",
                    "code" => "PT"
                ],
                [
                    "name" => "Puerto Rico",
                    "code" => "PR"
                ],
                [
                    "name" => "Qatar",
                    "code" => "QA"
                ],
                [
                    "name" => "Reunion",
                    "code" => "RE"
                ],
                [
                    "name" => "Romania",
                    "code" => "RO"
                ],
                [
                    "name" => "Russian Federation",
                    "code" => "RU"
                ],
                [
                    "name" => "RWANDA",
                    "code" => "RW"
                ],
                [
                    "name" => "Saint Helena",
                    "code" => "SH"
                ],
                [
                    "name" => "Saint Kitts and Nevis",
                    "code" => "KN"
                ],
                [
                    "name" => "Saint Lucia",
                    "code" => "LC"
                ],
                [
                    "name" => "Saint Pierre and Miquelon",
                    "code" => "PM"
                ],
                [
                    "name" => "Saint Vincent and the Grenadines",
                    "code" => "VC"
                ],
                [
                    "name" => "Samoa",
                    "code" => "WS"
                ],
                [
                    "name" => "San Marino",
                    "code" => "SM"
                ],
                [
                    "name" => "Sao Tome and Principe",
                    "code" => "ST"
                ],
                [
                    "name" => "Saudi Arabia",
                    "code" => "SA"
                ],
                [
                    "name" => "Senegal",
                    "code" => "SN"
                ],
                [
                    "name" => "Serbia and Montenegro",
                    "code" => "CS"
                ],
                [
                    "name" => "Seychelles",
                    "code" => "SC"
                ],
                [
                    "name" => "Sierra Leone",
                    "code" => "SL"
                ],
                [
                    "name" => "Singapore",
                    "code" => "SG"
                ],
                [
                    "name" => "Slovakia",
                    "code" => "SK"
                ],
                [
                    "name" => "Slovenia",
                    "code" => "SI"
                ],
                [
                    "name" => "Solomon Islands",
                    "code" => "SB"
                ],
                [
                    "name" => "Somalia",
                    "code" => "SO"
                ],
                [
                    "name" => "South Africa",
                    "code" => "ZA"
                ],
                [
                    "name" => "South Georgia and the South Sandwich Islands",
                    "code" => "GS"
                ],
                [
                    "name" => "Spain",
                    "code" => "ES"
                ],
                [
                    "name" => "Sri Lanka",
                    "code" => "LK"
                ],
                [
                    "name" => "Sudan",
                    "code" => "SD"
                ],
                [
                    "name" => "Suriname",
                    "code" => "SR"
                ],
                [
                    "name" => "Svalbard and Jan Mayen",
                    "code" => "SJ"
                ],
                [
                    "name" => "Swaziland",
                    "code" => "SZ"
                ],
                [
                    "name" => "Sweden",
                    "code" => "SE"
                ],
                [
                    "name" => "Switzerland",
                    "code" => "CH"
                ],
                [
                    "name" => "Syrian Arab Republic",
                    "code" => "SY"
                ],
                [
                    "name" => "Taiwan, Province of China",
                    "code" => "TW"
                ],
                [
                    "name" => "Tajikistan",
                    "code" => "TJ"
                ],
                [
                    "name" => "Tanzania, United Republic of",
                    "code" => "TZ"
                ],
                [
                    "name" => "Thailand",
                    "code" => "TH"
                ],
                [
                    "name" => "Timor-Leste",
                    "code" => "TL"
                ],
                [
                    "name" => "Togo",
                    "code" => "TG"
                ],
                [
                    "name" => "Tokelau",
                    "code" => "TK"
                ],
                [
                    "name" => "Tonga",
                    "code" => "TO"
                ],
                [
                    "name" => "Trinidad and Tobago",
                    "code" => "TT"
                ],
                [
                    "name" => "Tunisia",
                    "code" => "TN"
                ],
                [
                    "name" => "Turkey",
                    "code" => "TR"
                ],
                [
                    "name" => "Turkmenistan",
                    "code" => "TM"
                ],
                [
                    "name" => "Turks and Caicos Islands",
                    "code" => "TC"
                ],
                [
                    "name" => "Tuvalu",
                    "code" => "TV"
                ],
                [
                    "name" => "Uganda",
                    "code" => "UG"
                ],
                [
                    "name" => "Ukraine",
                    "code" => "UA"
                ],
                [
                    "name" => "United Arab Emirates",
                    "code" => "AE"
                ],
                [
                    "name" => "United Kingdom",
                    "code" => "GB"
                ],
                [
                    "name" => "United States",
                    "code" => "US"
                ],
                [
                    "name" => "United States Minor Outlying Islands",
                    "code" => "UM"
                ],
                [
                    "name" => "Uruguay",
                    "code" => "UY"
                ],
                [
                    "name" => "Uzbekistan",
                    "code" => "UZ"
                ],
                [
                    "name" => "Vanuatu",
                    "code" => "VU"
                ],
                [
                    "name" => "Venezuela",
                    "code" => "VE"
                ],
                [
                    "name" => "Viet Nam",
                    "code" => "VN"
                ],
                [
                    "name" => "Virgin Islands, British",
                    "code" => "VG"
                ],
                [
                    "name" => "Virgin Islands, U.S.",
                    "code" => "VI"
                ],
                [
                    "name" => "Wallis and Futuna",
                    "code" => "WF"
                ],
                [
                    "name" => "Western Sahara",
                    "code" => "EH"
                ],
                [
                    "name" => "Yemen",
                    "code" => "YE"
                ],
                [
                    "name" => "Zambia",
                    "code" => "ZM"
                ],
                [
                    "name" => "Zimbabwe",
                    "code" => "ZW"
                ]
            ]
        ]);
    }
    private function getLargeCustomers(): JsonResponse
    {
        return response()->json([
            "data" => [
                [
                    "id" => 1000,
                    "name" => "James Butt",
                    "country" => [
                        "name" => "Algeria",
                        "code" => "dz"
                    ],
                    "company" => "Benton, John B Jr",
                    "date" => "2015-09-13",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 17,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 70663
                ],
                [
                    "id" => 1001,
                    "name" => "Josephine Darakjy",
                    "country" => [
                        "name" => "Egypt",
                        "code" => "eg"
                    ],
                    "company" => "Chanay, Jeffrey A Esq",
                    "date" => "2019-02-09",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 0,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 82429
                ],
                [
                    "id" => 1002,
                    "name" => "Art Venere",
                    "country" => [
                        "name" => "Panama",
                        "code" => "pa"
                    ],
                    "company" => "Chemel, James L Cpa",
                    "date" => "2017-05-13",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 63,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 28334
                ],
                [
                    "id" => 1003,
                    "name" => "Lenna Paprocki",
                    "country" => [
                        "name" => "Slovenia",
                        "code" => "si"
                    ],
                    "company" => "Feltz Printing Service",
                    "date" => "2020-09-15",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 37,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 88521
                ],
                [
                    "id" => 1004,
                    "name" => "Donette Foller",
                    "country" => [
                        "name" => "South Africa",
                        "code" => "za"
                    ],
                    "company" => "Printing Dimensions",
                    "date" => "2016-05-20",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 33,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 93905
                ],
                [
                    "id" => 1005,
                    "name" => "Simona Morasca",
                    "country" => [
                        "name" => "Egypt",
                        "code" => "eg"
                    ],
                    "company" => "Chapman, Ross E Esq",
                    "date" => "2018-02-16",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 68,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 50041
                ],
                [
                    "id" => 1006,
                    "name" => "Mitsue Tollner",
                    "country" => [
                        "name" => "Paraguay",
                        "code" => "py"
                    ],
                    "company" => "Morlong Associates",
                    "date" => "2018-02-19",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 54,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 58706
                ],
                [
                    "id" => 1007,
                    "name" => "Leota Dilliard",
                    "country" => [
                        "name" => "Serbia",
                        "code" => "rs"
                    ],
                    "company" => "Commercial Press",
                    "date" => "2019-08-13",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 69,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 26640
                ],
                [
                    "id" => 1008,
                    "name" => "Sage Wieser",
                    "country" => [
                        "name" => "Egypt",
                        "code" => "eg"
                    ],
                    "company" => "Truhlar And Truhlar Attys",
                    "date" => "2018-11-21",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 76,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 65369
                ],
                [
                    "id" => 1009,
                    "name" => "Kris Marrier",
                    "country" => [
                        "name" => "Mexico",
                        "code" => "mx"
                    ],
                    "company" => "King, Christopher A Esq",
                    "date" => "2015-07-07",
                    "status" => "proposal",
                    "verified" => false,
                    "activity" => 3,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 63451
                ],
                [
                    "id" => 1010,
                    "name" => "Minna Amigon",
                    "country" => [
                        "name" => "Romania",
                        "code" => "ro"
                    ],
                    "company" => "Dorl, James J Esq",
                    "date" => "2018-11-07",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 38,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 71169
                ],
                [
                    "id" => 1011,
                    "name" => "Abel Maclead",
                    "country" => [
                        "name" => "Singapore",
                        "code" => "sg"
                    ],
                    "company" => "Rangoni Of Florence",
                    "date" => "2017-03-11",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 87,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 96842
                ],
                [
                    "id" => 1012,
                    "name" => "Kiley Caldarera",
                    "country" => [
                        "name" => "Serbia",
                        "code" => "rs"
                    ],
                    "company" => "Feiner Bros",
                    "date" => "2015-10-20",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 80,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 92734
                ],
                [
                    "id" => 1013,
                    "name" => "Graciela Ruta",
                    "country" => [
                        "name" => "Chile",
                        "code" => "cl"
                    ],
                    "company" => "Buckley Miller & Wright",
                    "date" => "2016-07-25",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 59,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 45250
                ],
                [
                    "id" => 1014,
                    "name" => "Cammy Albares",
                    "country" => [
                        "name" => "Philippines",
                        "code" => "ph"
                    ],
                    "company" => "Rousseaux, Michael Esq",
                    "date" => "2019-06-25",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 90,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 30236
                ],
                [
                    "id" => 1015,
                    "name" => "Mattie Poquette",
                    "country" => [
                        "name" => "Venezuela",
                        "code" => "ve"
                    ],
                    "company" => "Century Communications",
                    "date" => "2017-12-12",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 52,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 64533
                ],
                [
                    "id" => 1016,
                    "name" => "Meaghan Garufi",
                    "country" => [
                        "name" => "Malaysia",
                        "code" => "my"
                    ],
                    "company" => "Bolton, Wilbur Esq",
                    "date" => "2018-07-04",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 31,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 37279
                ],
                [
                    "id" => 1017,
                    "name" => "Gladys Rim",
                    "country" => [
                        "name" => "Netherlands",
                        "code" => "nl"
                    ],
                    "company" => "T M Byxbee Company Pc",
                    "date" => "2020-02-27",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 48,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 27381
                ],
                [
                    "id" => 1018,
                    "name" => "Yuki Whobrey",
                    "country" => [
                        "name" => "Israel",
                        "code" => "il"
                    ],
                    "company" => "Farmers Insurance Group",
                    "date" => "2017-12-21",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 16,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 9257
                ],
                [
                    "id" => 1019,
                    "name" => "Fletcher Flosi",
                    "country" => [
                        "name" => "Argentina",
                        "code" => "ar"
                    ],
                    "company" => "Post Box Services Plus",
                    "date" => "2016-01-04",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 19,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 67783
                ],
                [
                    "id" => 1020,
                    "name" => "Bette Nicka",
                    "country" => [
                        "name" => "Paraguay",
                        "code" => "py"
                    ],
                    "company" => "Sport En Art",
                    "date" => "2016-10-21",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 100,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 4609
                ],
                [
                    "id" => 1021,
                    "name" => "Veronika Inouye",
                    "country" => [
                        "name" => "Ecuador",
                        "code" => "ec"
                    ],
                    "company" => "C 4 Network Inc",
                    "date" => "2017-03-24",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 72,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 26565
                ],
                [
                    "id" => 1022,
                    "name" => "Willard Kolmetz",
                    "country" => [
                        "name" => "Tunisia",
                        "code" => "tn"
                    ],
                    "company" => "Ingalls, Donald R Esq",
                    "date" => "2017-04-15",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 94,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 75876
                ],
                [
                    "id" => 1023,
                    "name" => "Maryann Royster",
                    "country" => [
                        "name" => "Belarus",
                        "code" => "by"
                    ],
                    "company" => "Franklin, Peter L Esq",
                    "date" => "2017-03-11",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 56,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 41121
                ],
                [
                    "id" => 1024,
                    "name" => "Alisha Slusarski",
                    "country" => [
                        "name" => "Iceland",
                        "code" => "is"
                    ],
                    "company" => "Wtlz Power 107 Fm",
                    "date" => "2018-03-27",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 7,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 91691
                ],
                [
                    "id" => 1025,
                    "name" => "Allene Iturbide",
                    "country" => [
                        "name" => "Italy",
                        "code" => "it"
                    ],
                    "company" => "Ledecky, David Esq",
                    "date" => "2016-02-20",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 1,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 40137
                ],
                [
                    "id" => 1026,
                    "name" => "Chanel Caudy",
                    "country" => [
                        "name" => "Argentina",
                        "code" => "ar"
                    ],
                    "company" => "Professional Image Inc",
                    "date" => "2018-06-24",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 26,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 21304
                ],
                [
                    "id" => 1027,
                    "name" => "Ezekiel Chui",
                    "country" => [
                        "name" => "Ireland",
                        "code" => "ie"
                    ],
                    "company" => "Sider, Donald C Esq",
                    "date" => "2016-09-24",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 76,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 60454
                ],
                [
                    "id" => 1028,
                    "name" => "Willow Kusko",
                    "country" => [
                        "name" => "Romania",
                        "code" => "ro"
                    ],
                    "company" => "U Pull It",
                    "date" => "2020-04-11",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 7,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 17565
                ],
                [
                    "id" => 1029,
                    "name" => "Bernardo Figeroa",
                    "country" => [
                        "name" => "Israel",
                        "code" => "il"
                    ],
                    "company" => "Clark, Richard Cpa",
                    "date" => "2018-04-11",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 81,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 17774
                ],
                [
                    "id" => 1030,
                    "name" => "Ammie Corrio",
                    "country" => [
                        "name" => "Hungary",
                        "code" => "hu"
                    ],
                    "company" => "Moskowitz, Barry S",
                    "date" => "2016-06-11",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 56,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 49201
                ],
                [
                    "id" => 1031,
                    "name" => "Francine Vocelka",
                    "country" => [
                        "name" => "Honduras",
                        "code" => "hn"
                    ],
                    "company" => "Cascade Realty Advisors Inc",
                    "date" => "2017-08-02",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 94,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 67126
                ],
                [
                    "id" => 1032,
                    "name" => "Ernie Stenseth",
                    "country" => [
                        "name" => "Australia",
                        "code" => "au"
                    ],
                    "company" => "Knwz Newsradio",
                    "date" => "2018-06-06",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 68,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 76017
                ],
                [
                    "id" => 1033,
                    "name" => "Albina Glick",
                    "country" => [
                        "name" => "Ukraine",
                        "code" => "ua"
                    ],
                    "company" => "Giampetro, Anthony D",
                    "date" => "2019-08-08",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 85,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 91201
                ],
                [
                    "id" => 1034,
                    "name" => "Alishia Sergi",
                    "country" => [
                        "name" => "Qatar",
                        "code" => "qa"
                    ],
                    "company" => "Milford Enterprises Inc",
                    "date" => "2018-05-19",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 46,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 12237
                ],
                [
                    "id" => 1035,
                    "name" => "Solange Shinko",
                    "country" => [
                        "name" => "Cameroon",
                        "code" => "cm"
                    ],
                    "company" => "Mosocco, Ronald A",
                    "date" => "2015-02-12",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 32,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 34072
                ],
                [
                    "id" => 1036,
                    "name" => "Jose Stockham",
                    "country" => [
                        "name" => "Italy",
                        "code" => "it"
                    ],
                    "company" => "Tri State Refueler Co",
                    "date" => "2018-04-25",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 77,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 94909
                ],
                [
                    "id" => 1037,
                    "name" => "Rozella Ostrosky",
                    "country" => [
                        "name" => "Venezuela",
                        "code" => "ve"
                    ],
                    "company" => "Parkway Company",
                    "date" => "2016-02-27",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 66,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 57245
                ],
                [
                    "id" => 1038,
                    "name" => "Valentine Gillian",
                    "country" => [
                        "name" => "Paraguay",
                        "code" => "py"
                    ],
                    "company" => "Fbs Business Finance",
                    "date" => "2019-09-17",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 25,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 75502
                ],
                [
                    "id" => 1039,
                    "name" => "Kati Rulapaugh",
                    "country" => [
                        "name" => "Puerto Rico",
                        "code" => "pr"
                    ],
                    "company" => "Eder Assocs Consltng Engrs Pc",
                    "date" => "2016-12-03",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 51,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 82075
                ],
                [
                    "id" => 1040,
                    "name" => "Youlanda Schemmer",
                    "country" => [
                        "name" => "Bolivia",
                        "code" => "bo"
                    ],
                    "company" => "Tri M Tool Inc",
                    "date" => "2017-12-15",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 49,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 19208
                ],
                [
                    "id" => 1041,
                    "name" => "Dyan Oldroyd",
                    "country" => [
                        "name" => "Argentina",
                        "code" => "ar"
                    ],
                    "company" => "International Eyelets Inc",
                    "date" => "2017-02-02",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 5,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 50194
                ],
                [
                    "id" => 1042,
                    "name" => "Roxane Campain",
                    "country" => [
                        "name" => "France",
                        "code" => "fr"
                    ],
                    "company" => "Rapid Trading Intl",
                    "date" => "2018-12-25",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 100,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 77714
                ],
                [
                    "id" => 1043,
                    "name" => "Lavera Perin",
                    "country" => [
                        "name" => "Vietnam",
                        "code" => "vn"
                    ],
                    "company" => "Abc Enterprises Inc",
                    "date" => "2018-04-10",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 71,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 35740
                ],
                [
                    "id" => 1044,
                    "name" => "Erick Ferencz",
                    "country" => [
                        "name" => "Belgium",
                        "code" => "be"
                    ],
                    "company" => "Cindy Turner Associates",
                    "date" => "2018-05-06",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 54,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 30790
                ],
                [
                    "id" => 1045,
                    "name" => "Fatima Saylors",
                    "country" => [
                        "name" => "Canada",
                        "code" => "ca"
                    ],
                    "company" => "Stanton, James D Esq",
                    "date" => "2019-07-10",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 93,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 52343
                ],
                [
                    "id" => 1046,
                    "name" => "Jina Briddick",
                    "country" => [
                        "name" => "Mexico",
                        "code" => "mx"
                    ],
                    "company" => "Grace Pastries Inc",
                    "date" => "2018-02-19",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 97,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 53966
                ],
                [
                    "id" => 1047,
                    "name" => "Kanisha Waycott",
                    "country" => [
                        "name" => "Ecuador",
                        "code" => "ec"
                    ],
                    "company" => "Schroer, Gene E Esq",
                    "date" => "2019-11-27",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 80,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 9920
                ],
                [
                    "id" => 1048,
                    "name" => "Emerson Bowley",
                    "country" => [
                        "name" => "Finland",
                        "code" => "fi"
                    ],
                    "company" => "Knights Inn",
                    "date" => "2018-11-24",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 63,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 78069
                ],
                [
                    "id" => 1049,
                    "name" => "Blair Malet",
                    "country" => [
                        "name" => "Finland",
                        "code" => "fi"
                    ],
                    "company" => "Bollinger Mach Shp & Shipyard",
                    "date" => "2018-04-19",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 92,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 65005
                ],
                [
                    "id" => 1050,
                    "name" => "Brock Bolognia",
                    "country" => [
                        "name" => "Bolivia",
                        "code" => "bo"
                    ],
                    "company" => "Orinda News",
                    "date" => "2019-09-06",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 72,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 51038
                ],
                [
                    "id" => 1051,
                    "name" => "Lorrie Nestle",
                    "country" => [
                        "name" => "Germany",
                        "code" => "de"
                    ],
                    "company" => "Ballard Spahr Andrews",
                    "date" => "2018-04-26",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 36,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 28218
                ],
                [
                    "id" => 1052,
                    "name" => "Sabra Uyetake",
                    "country" => [
                        "name" => "Peru",
                        "code" => "pe"
                    ],
                    "company" => "Lowy Limousine Service",
                    "date" => "2018-04-12",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 31,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 78527
                ],
                [
                    "id" => 1053,
                    "name" => "Marjory Mastella",
                    "country" => [
                        "name" => "Netherlands",
                        "code" => "nl"
                    ],
                    "company" => "Vicon Corporation",
                    "date" => "2018-01-24",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 89,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 23381
                ],
                [
                    "id" => 1054,
                    "name" => "Karl Klonowski",
                    "country" => [
                        "name" => "Saudi Arabia",
                        "code" => "sa"
                    ],
                    "company" => "Rossi, Michael M",
                    "date" => "2017-04-17",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 27,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 64821
                ],
                [
                    "id" => 1055,
                    "name" => "Tonette Wenner",
                    "country" => [
                        "name" => "Australia",
                        "code" => "au"
                    ],
                    "company" => "Northwest Publishing",
                    "date" => "2019-04-14",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 27,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 55334
                ],
                [
                    "id" => 1056,
                    "name" => "Amber Monarrez",
                    "country" => [
                        "name" => "Sweden",
                        "code" => "se"
                    ],
                    "company" => "Branford Wire & Mfg Co",
                    "date" => "2019-09-09",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 79,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 83391
                ],
                [
                    "id" => 1057,
                    "name" => "Shenika Seewald",
                    "country" => [
                        "name" => "Australia",
                        "code" => "au"
                    ],
                    "company" => "East Coast Marketing",
                    "date" => "2017-02-18",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 39,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 31580
                ],
                [
                    "id" => 1058,
                    "name" => "Delmy Ahle",
                    "country" => [
                        "name" => "Belgium",
                        "code" => "be"
                    ],
                    "company" => "Wye Technologies Inc",
                    "date" => "2020-10-05",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 55,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 11723
                ],
                [
                    "id" => 1059,
                    "name" => "Deeanna Juhas",
                    "country" => [
                        "name" => "Sweden",
                        "code" => "se"
                    ],
                    "company" => "Healy, George W Iv",
                    "date" => "2018-09-28",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 79,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 8454
                ],
                [
                    "id" => 1060,
                    "name" => "Blondell Pugh",
                    "country" => [
                        "name" => "Ireland",
                        "code" => "ie"
                    ],
                    "company" => "Alpenlite Inc",
                    "date" => "2016-06-16",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 49,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 99235
                ],
                [
                    "id" => 1061,
                    "name" => "Jamal Vanausdal",
                    "country" => [
                        "name" => "Morocco",
                        "code" => "ma"
                    ],
                    "company" => "Hubbard, Bruce Esq",
                    "date" => "2017-05-25",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 87,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 15656
                ],
                [
                    "id" => 1062,
                    "name" => "Cecily Hollack",
                    "country" => [
                        "name" => "Bolivia",
                        "code" => "bo"
                    ],
                    "company" => "Arthur A Oliver & Son Inc",
                    "date" => "2020-05-09",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 5,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 60586
                ],
                [
                    "id" => 1063,
                    "name" => "Carmelina Lindall",
                    "country" => [
                        "name" => "Puerto Rico",
                        "code" => "pr"
                    ],
                    "company" => "George Jessop Carter Jewelers",
                    "date" => "2019-09-07",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 77,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 86239
                ],
                [
                    "id" => 1064,
                    "name" => "Maurine Yglesias",
                    "country" => [
                        "name" => "Taiwan",
                        "code" => "tw"
                    ],
                    "company" => "Schultz, Thomas C Md",
                    "date" => "2015-08-10",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 94,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 15621
                ],
                [
                    "id" => 1065,
                    "name" => "Tawna Buvens",
                    "country" => [
                        "name" => "Indonesia",
                        "code" => "id"
                    ],
                    "company" => "H H H Enterprises Inc",
                    "date" => "2018-03-20",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 25,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 77248
                ],
                [
                    "id" => 1066,
                    "name" => "Penney Weight",
                    "country" => [
                        "name" => "South Africa",
                        "code" => "za"
                    ],
                    "company" => "Hawaiian King Hotel",
                    "date" => "2020-03-03",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 96,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 478
                ],
                [
                    "id" => 1067,
                    "name" => "Elly Morocco",
                    "country" => [
                        "name" => "Thailand",
                        "code" => "th"
                    ],
                    "company" => "Killion Industries",
                    "date" => "2018-09-18",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 38,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 62505
                ],
                [
                    "id" => 1068,
                    "name" => "Ilene Eroman",
                    "country" => [
                        "name" => "Netherlands",
                        "code" => "nl"
                    ],
                    "company" => "Robinson, William J Esq",
                    "date" => "2019-06-08",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 49,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 91480
                ],
                [
                    "id" => 1069,
                    "name" => "Vallie Mondella",
                    "country" => [
                        "name" => "Latvia",
                        "code" => "lv"
                    ],
                    "company" => "Private Properties",
                    "date" => "2018-12-06",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 16,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 21671
                ],
                [
                    "id" => 1070,
                    "name" => "Kallie Blackwood",
                    "country" => [
                        "name" => "Iceland",
                        "code" => "is"
                    ],
                    "company" => "Rowley Schlimgen Inc",
                    "date" => "2017-04-05",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 25,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 13775
                ],
                [
                    "id" => 1071,
                    "name" => "Johnetta Abdallah",
                    "country" => [
                        "name" => "Netherlands",
                        "code" => "nl"
                    ],
                    "company" => "Forging Specialties",
                    "date" => "2015-02-02",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 16,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 60253
                ],
                [
                    "id" => 1072,
                    "name" => "Bobbye Rhym",
                    "country" => [
                        "name" => "Ukraine",
                        "code" => "ua"
                    ],
                    "company" => "Smits, Patricia Garity",
                    "date" => "2018-08-17",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 85,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 75225
                ],
                [
                    "id" => 1073,
                    "name" => "Micaela Rhymes",
                    "country" => [
                        "name" => "France",
                        "code" => "fr"
                    ],
                    "company" => "H Lee Leonard Attorney At Law",
                    "date" => "2018-09-08",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 92,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 3308
                ],
                [
                    "id" => 1074,
                    "name" => "Tamar Hoogland",
                    "country" => [
                        "name" => "Guatemala",
                        "code" => "gt"
                    ],
                    "company" => "A K Construction Co",
                    "date" => "2018-11-13",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 22,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 19711
                ],
                [
                    "id" => 1075,
                    "name" => "Moon Parlato",
                    "country" => [
                        "name" => "Czech Republic",
                        "code" => "cz"
                    ],
                    "company" => "Ambelang, Jessica M Md",
                    "date" => "2019-08-18",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 64,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 55110
                ],
                [
                    "id" => 1076,
                    "name" => "Laurel Reitler",
                    "country" => [
                        "name" => "United Kingdom",
                        "code" => "gb"
                    ],
                    "company" => "Q A Service",
                    "date" => "2015-04-02",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 80,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 62392
                ],
                [
                    "id" => 1077,
                    "name" => "Delisa Crupi",
                    "country" => [
                        "name" => "Taiwan",
                        "code" => "tw"
                    ],
                    "company" => "Wood & Whitacre Contractors",
                    "date" => "2017-09-15",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 70,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 76530
                ],
                [
                    "id" => 1078,
                    "name" => "Viva Toelkes",
                    "country" => [
                        "name" => "United States",
                        "code" => "us"
                    ],
                    "company" => "Mark Iv Press Ltd",
                    "date" => "2017-03-27",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 16,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 7460
                ],
                [
                    "id" => 1079,
                    "name" => "Elza Lipke",
                    "country" => [
                        "name" => "Ireland",
                        "code" => "ie"
                    ],
                    "company" => "Museum Of Science & Industry",
                    "date" => "2017-06-01",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 90,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 42251
                ],
                [
                    "id" => 1080,
                    "name" => "Devorah Chickering",
                    "country" => [
                        "name" => "Spain",
                        "code" => "es"
                    ],
                    "company" => "Garrison Ind",
                    "date" => "2017-03-14",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 96,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 36435
                ],
                [
                    "id" => 1081,
                    "name" => "Timothy Mulqueen",
                    "country" => [
                        "name" => "Netherlands",
                        "code" => "nl"
                    ],
                    "company" => "Saronix Nymph Products",
                    "date" => "2018-07-09",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 77,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 39197
                ],
                [
                    "id" => 1082,
                    "name" => "Arlette Honeywell",
                    "country" => [
                        "name" => "Panama",
                        "code" => "pa"
                    ],
                    "company" => "Smc Inc",
                    "date" => "2018-09-11",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 46,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 72707
                ],
                [
                    "id" => 1083,
                    "name" => "Dominque Dickerson",
                    "country" => [
                        "name" => "Argentina",
                        "code" => "ar"
                    ],
                    "company" => "E A I Electronic Assocs Inc",
                    "date" => "2017-11-12",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 83,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 97965
                ],
                [
                    "id" => 1084,
                    "name" => "Lettie Isenhower",
                    "country" => [
                        "name" => "Canada",
                        "code" => "ca"
                    ],
                    "company" => "Conte, Christopher A Esq",
                    "date" => "2016-03-01",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 83,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 5823
                ],
                [
                    "id" => 1085,
                    "name" => "Myra Munns",
                    "country" => [
                        "name" => "Lithuania",
                        "code" => "lt"
                    ],
                    "company" => "Anker Law Office",
                    "date" => "2016-05-21",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 49,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 96471
                ],
                [
                    "id" => 1086,
                    "name" => "Stephaine Barfield",
                    "country" => [
                        "name" => "Belgium",
                        "code" => "be"
                    ],
                    "company" => "Beutelschies & Company",
                    "date" => "2016-01-22",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 34,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 33710
                ],
                [
                    "id" => 1087,
                    "name" => "Lai Gato",
                    "country" => [
                        "name" => "Nigeria",
                        "code" => "ng"
                    ],
                    "company" => "Fligg, Kenneth I Jr",
                    "date" => "2016-07-26",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 64,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 30611
                ],
                [
                    "id" => 1088,
                    "name" => "Stephen Emigh",
                    "country" => [
                        "name" => "Cuba",
                        "code" => "cu"
                    ],
                    "company" => "Sharp, J Daniel Esq",
                    "date" => "2020-07-24",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 51,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 32960
                ],
                [
                    "id" => 1089,
                    "name" => "Tyra Shields",
                    "country" => [
                        "name" => "Honduras",
                        "code" => "hn"
                    ],
                    "company" => "Assink, Anne H Esq",
                    "date" => "2019-11-10",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 11,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 57423
                ],
                [
                    "id" => 1090,
                    "name" => "Tammara Wardrip",
                    "country" => [
                        "name" => "Saudi Arabia",
                        "code" => "sa"
                    ],
                    "company" => "Jewel My Shop Inc",
                    "date" => "2016-06-05",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 64,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 23027
                ],
                [
                    "id" => 1091,
                    "name" => "Cory Gibes",
                    "country" => [
                        "name" => "Malaysia",
                        "code" => "my"
                    ],
                    "company" => "Chinese Translation Resources",
                    "date" => "2016-02-28",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 44,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 84182
                ],
                [
                    "id" => 1092,
                    "name" => "Danica Bruschke",
                    "country" => [
                        "name" => "Taiwan",
                        "code" => "tw"
                    ],
                    "company" => "Stevens, Charles T",
                    "date" => "2018-12-13",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 62,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 25237
                ],
                [
                    "id" => 1093,
                    "name" => "Wilda Giguere",
                    "country" => [
                        "name" => "Iceland",
                        "code" => "is"
                    ],
                    "company" => "Mclaughlin, Luther W Cpa",
                    "date" => "2017-06-16",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 79,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 87736
                ],
                [
                    "id" => 1094,
                    "name" => "Elvera Benimadho",
                    "country" => [
                        "name" => "Malaysia",
                        "code" => "my"
                    ],
                    "company" => "Tree Musketeers",
                    "date" => "2019-02-17",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 50,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 38674
                ],
                [
                    "id" => 1095,
                    "name" => "Carma Vanheusen",
                    "country" => [
                        "name" => "Turkey",
                        "code" => "tr"
                    ],
                    "company" => "Springfield Div Oh Edison Co",
                    "date" => "2019-11-26",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 84,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 67762
                ],
                [
                    "id" => 1096,
                    "name" => "Malinda Hochard",
                    "country" => [
                        "name" => "Serbia",
                        "code" => "rs"
                    ],
                    "company" => "Logan Memorial Hospital",
                    "date" => "2016-07-06",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 88,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 81299
                ],
                [
                    "id" => 1097,
                    "name" => "Natalie Fern",
                    "country" => [
                        "name" => "Canada",
                        "code" => "ca"
                    ],
                    "company" => "Kelly, Charles G Esq",
                    "date" => "2019-10-02",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 44,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 64794
                ],
                [
                    "id" => 1098,
                    "name" => "Lisha Centini",
                    "country" => [
                        "name" => "Netherlands",
                        "code" => "nl"
                    ],
                    "company" => "Industrial Paper Shredders Inc",
                    "date" => "2018-07-05",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 7,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 7815
                ],
                [
                    "id" => 1099,
                    "name" => "Arlene Klusman",
                    "country" => [
                        "name" => "Jamaica",
                        "code" => "jm"
                    ],
                    "company" => "Beck Horizon Builders",
                    "date" => "2018-05-14",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 99,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 37976
                ],
                [
                    "id" => 1100,
                    "name" => "Alease Buemi",
                    "country" => [
                        "name" => "Costa Rica",
                        "code" => "cr"
                    ],
                    "company" => "Porto Cayo At Hawks Cay",
                    "date" => "2018-03-14",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 0,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 59594
                ],
                [
                    "id" => 1101,
                    "name" => "Louisa Cronauer",
                    "country" => [
                        "name" => "Costa Rica",
                        "code" => "cr"
                    ],
                    "company" => "Pacific Grove Museum Ntrl Hist",
                    "date" => "2018-09-23",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 3,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 92528
                ],
                [
                    "id" => 1102,
                    "name" => "Angella Cetta",
                    "country" => [
                        "name" => "Vietnam",
                        "code" => "vn"
                    ],
                    "company" => "Bender & Hatley Pc",
                    "date" => "2018-04-10",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 88,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 58964
                ],
                [
                    "id" => 1103,
                    "name" => "Cyndy Goldammer",
                    "country" => [
                        "name" => "Burkina Faso",
                        "code" => "bf"
                    ],
                    "company" => "Di Cristina J & Son",
                    "date" => "2017-09-18",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 92,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 65860
                ],
                [
                    "id" => 1104,
                    "name" => "Rosio Cork",
                    "country" => [
                        "name" => "Singapore",
                        "code" => "sg"
                    ],
                    "company" => "Green Goddess",
                    "date" => "2017-08-19",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 19,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 63863
                ],
                [
                    "id" => 1105,
                    "name" => "Celeste Korando",
                    "country" => [
                        "name" => "Costa Rica",
                        "code" => "cr"
                    ],
                    "company" => "American Arts & Graphics",
                    "date" => "2020-06-18",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 21,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 37510
                ],
                [
                    "id" => 1106,
                    "name" => "Twana Felger",
                    "country" => [
                        "name" => "Croatia",
                        "code" => "hr"
                    ],
                    "company" => "Opryland Hotel",
                    "date" => "2016-11-18",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 97,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 63876
                ],
                [
                    "id" => 1107,
                    "name" => "Estrella Samu",
                    "country" => [
                        "name" => "Vietnam",
                        "code" => "vn"
                    ],
                    "company" => "Marking Devices Pubg Co",
                    "date" => "2017-06-25",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 27,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 93263
                ],
                [
                    "id" => 1108,
                    "name" => "Donte Kines",
                    "country" => [
                        "name" => "Slovakia",
                        "code" => "sk"
                    ],
                    "company" => "W Tc Industries Inc",
                    "date" => "2019-02-16",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 35,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 57198
                ],
                [
                    "id" => 1109,
                    "name" => "Tiffiny Steffensmeier",
                    "country" => [
                        "name" => "Pakistan",
                        "code" => "pk"
                    ],
                    "company" => "Whitehall Robbins Labs Divsn",
                    "date" => "2018-03-11",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 81,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 89147
                ],
                [
                    "id" => 1110,
                    "name" => "Edna Miceli",
                    "country" => [
                        "name" => "France",
                        "code" => "fr"
                    ],
                    "company" => "Sampler",
                    "date" => "2017-10-15",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 54,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 41466
                ],
                [
                    "id" => 1111,
                    "name" => "Sue Kownacki",
                    "country" => [
                        "name" => "Jamaica",
                        "code" => "jm"
                    ],
                    "company" => "Juno Chefs Incorporated",
                    "date" => "2017-03-17",
                    "status" => "proposal",
                    "verified" => false,
                    "activity" => 31,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 38918
                ],
                [
                    "id" => 1112,
                    "name" => "Jesusa Shin",
                    "country" => [
                        "name" => "Ukraine",
                        "code" => "ua"
                    ],
                    "company" => "Carroccio, A Thomas Esq",
                    "date" => "2017-04-06",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 28,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 11397
                ],
                [
                    "id" => 1113,
                    "name" => "Rolland Francescon",
                    "country" => [
                        "name" => "United Kingdom",
                        "code" => "gb"
                    ],
                    "company" => "Stanley, Richard L Esq",
                    "date" => "2019-02-03",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 45,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 40930
                ],
                [
                    "id" => 1114,
                    "name" => "Pamella Schmierer",
                    "country" => [
                        "name" => "Belgium",
                        "code" => "be"
                    ],
                    "company" => "K Cs Cstm Mouldings Windows",
                    "date" => "2016-09-22",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 34,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 40847
                ],
                [
                    "id" => 1115,
                    "name" => "Glory Kulzer",
                    "country" => [
                        "name" => "Croatia",
                        "code" => "hr"
                    ],
                    "company" => "Comfort Inn",
                    "date" => "2017-09-27",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 36,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 27832
                ],
                [
                    "id" => 1116,
                    "name" => "Shawna Palaspas",
                    "country" => [
                        "name" => "Estonia",
                        "code" => "ee"
                    ],
                    "company" => "Windsor, James L Esq",
                    "date" => "2017-06-25",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 69,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 89060
                ],
                [
                    "id" => 1117,
                    "name" => "Brandon Callaro",
                    "country" => [
                        "name" => "Romania",
                        "code" => "ro"
                    ],
                    "company" => "Jackson Shields Yeiser",
                    "date" => "2016-07-13",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 55,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 52474
                ],
                [
                    "id" => 1118,
                    "name" => "Scarlet Cartan",
                    "country" => [
                        "name" => "Panama",
                        "code" => "pa"
                    ],
                    "company" => "Box, J Calvin Esq",
                    "date" => "2018-09-13",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 1,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 19094
                ],
                [
                    "id" => 1119,
                    "name" => "Oretha Menter",
                    "country" => [
                        "name" => "Panama",
                        "code" => "pa"
                    ],
                    "company" => "Custom Engineering Inc",
                    "date" => "2017-09-11",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 8,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 93756
                ],
                [
                    "id" => 1120,
                    "name" => "Ty Smith",
                    "country" => [
                        "name" => "United States",
                        "code" => "us"
                    ],
                    "company" => "Bresler Eitel Framg Gllry Ltd",
                    "date" => "2019-07-06",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 50,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 77388
                ],
                [
                    "id" => 1121,
                    "name" => "Xuan Rochin",
                    "country" => [
                        "name" => "Colombia",
                        "code" => "co"
                    ],
                    "company" => "Carol, Drake Sparks Esq",
                    "date" => "2018-05-22",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 77,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 48759
                ],
                [
                    "id" => 1122,
                    "name" => "Lindsey Dilello",
                    "country" => [
                        "name" => "Austria",
                        "code" => "at"
                    ],
                    "company" => "Biltmore Investors Bank",
                    "date" => "2017-07-18",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 65,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 37568
                ],
                [
                    "id" => 1123,
                    "name" => "Devora Perez",
                    "country" => [
                        "name" => "Uruguay",
                        "code" => "uy"
                    ],
                    "company" => "Desco Equipment Corp",
                    "date" => "2017-10-09",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 30,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 4477
                ],
                [
                    "id" => 1124,
                    "name" => "Herman Demesa",
                    "country" => [
                        "name" => "Paraguay",
                        "code" => "py"
                    ],
                    "company" => "Merlin Electric Co",
                    "date" => "2019-05-23",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 10,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 13764
                ],
                [
                    "id" => 1125,
                    "name" => "Rory Papasergi",
                    "country" => [
                        "name" => "Egypt",
                        "code" => "eg"
                    ],
                    "company" => "Bailey Cntl Co Div Babcock",
                    "date" => "2019-03-02",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 22,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 68222
                ],
                [
                    "id" => 1126,
                    "name" => "Talia Riopelle",
                    "country" => [
                        "name" => "Guatemala",
                        "code" => "gt"
                    ],
                    "company" => "Ford Brothers Wholesale Inc",
                    "date" => "2017-02-18",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 69,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 29164
                ],
                [
                    "id" => 1127,
                    "name" => "Van Shire",
                    "country" => [
                        "name" => "Netherlands",
                        "code" => "nl"
                    ],
                    "company" => "Cambridge Inn",
                    "date" => "2020-05-12",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 4,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 61651
                ],
                [
                    "id" => 1128,
                    "name" => "Lucina Lary",
                    "country" => [
                        "name" => "Switzerland",
                        "code" => "ch"
                    ],
                    "company" => "Matricciani, Albert J Jr",
                    "date" => "2019-11-20",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 11,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 79938
                ],
                [
                    "id" => 1129,
                    "name" => "Bok Isaacs",
                    "country" => [
                        "name" => "Chile",
                        "code" => "cl"
                    ],
                    "company" => "Nelson Hawaiian Ltd",
                    "date" => "2016-11-10",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 41,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 44037
                ],
                [
                    "id" => 1130,
                    "name" => "Rolande Spickerman",
                    "country" => [
                        "name" => "Panama",
                        "code" => "pa"
                    ],
                    "company" => "Neland Travel Agency",
                    "date" => "2016-07-11",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 84,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 89918
                ],
                [
                    "id" => 1131,
                    "name" => "Howard Paulas",
                    "country" => [
                        "name" => "Indonesia",
                        "code" => "id"
                    ],
                    "company" => "Asendorf, J Alan Esq",
                    "date" => "2017-07-17",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 22,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 32372
                ],
                [
                    "id" => 1132,
                    "name" => "Kimbery Madarang",
                    "country" => [
                        "name" => "Senegal",
                        "code" => "sn"
                    ],
                    "company" => "Silberman, Arthur L Esq",
                    "date" => "2018-08-19",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 63,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 46478
                ],
                [
                    "id" => 1133,
                    "name" => "Thurman Manno",
                    "country" => [
                        "name" => "Colombia",
                        "code" => "co"
                    ],
                    "company" => "Honey Bee Breeding Genetics &",
                    "date" => "2016-05-02",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 47,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 30674
                ],
                [
                    "id" => 1134,
                    "name" => "Becky Mirafuentes",
                    "country" => [
                        "name" => "Serbia",
                        "code" => "rs"
                    ],
                    "company" => "Wells Kravitz Schnitzer",
                    "date" => "2018-04-13",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 62,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 47714
                ],
                [
                    "id" => 1135,
                    "name" => "Beatriz Corrington",
                    "country" => [
                        "name" => "South Africa",
                        "code" => "za"
                    ],
                    "company" => "Prohab Rehabilitation Servs",
                    "date" => "2020-01-04",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 55,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 14307
                ],
                [
                    "id" => 1136,
                    "name" => "Marti Maybury",
                    "country" => [
                        "name" => "Thailand",
                        "code" => "th"
                    ],
                    "company" => "Eldridge, Kristin K Esq",
                    "date" => "2016-02-05",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 3,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 82069
                ],
                [
                    "id" => 1137,
                    "name" => "Nieves Gotter",
                    "country" => [
                        "name" => "Latvia",
                        "code" => "lv"
                    ],
                    "company" => "Vlahos, John J Esq",
                    "date" => "2017-03-12",
                    "status" => "proposal",
                    "verified" => false,
                    "activity" => 3,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 11182
                ],
                [
                    "id" => 1138,
                    "name" => "Leatha Hagele",
                    "country" => [
                        "name" => "Ukraine",
                        "code" => "ua"
                    ],
                    "company" => "Ninas Indian Grs & Videos",
                    "date" => "2019-03-27",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 67,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 17126
                ],
                [
                    "id" => 1139,
                    "name" => "Valentin Klimek",
                    "country" => [
                        "name" => "Ivory Coast",
                        "code" => "ci"
                    ],
                    "company" => "Schmid, Gayanne K Esq",
                    "date" => "2019-08-06",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 14,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 19724
                ],
                [
                    "id" => 1140,
                    "name" => "Melissa Wiklund",
                    "country" => [
                        "name" => "Japan",
                        "code" => "jp"
                    ],
                    "company" => "Moapa Valley Federal Credit Un",
                    "date" => "2018-03-20",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 8,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 91888
                ],
                [
                    "id" => 1141,
                    "name" => "Sheridan Zane",
                    "country" => [
                        "name" => "Croatia",
                        "code" => "hr"
                    ],
                    "company" => "Kentucky Tennessee Clay Co",
                    "date" => "2016-02-15",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 17,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 15016
                ],
                [
                    "id" => 1142,
                    "name" => "Bulah Padilla",
                    "country" => [
                        "name" => "Philippines",
                        "code" => "ph"
                    ],
                    "company" => "Admiral Party Rentals & Sales",
                    "date" => "2016-02-10",
                    "status" => "proposal",
                    "verified" => false,
                    "activity" => 58,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 23118
                ],
                [
                    "id" => 1143,
                    "name" => "Audra Kohnert",
                    "country" => [
                        "name" => "Netherlands",
                        "code" => "nl"
                    ],
                    "company" => "Nelson, Karolyn King Esq",
                    "date" => "2019-07-16",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 82,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 90560
                ],
                [
                    "id" => 1144,
                    "name" => "Daren Weirather",
                    "country" => [
                        "name" => "Israel",
                        "code" => "il"
                    ],
                    "company" => "Panasystems",
                    "date" => "2015-07-23",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 96,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 34155
                ],
                [
                    "id" => 1145,
                    "name" => "Fernanda Jillson",
                    "country" => [
                        "name" => "Mexico",
                        "code" => "mx"
                    ],
                    "company" => "Shank, Edward L Esq",
                    "date" => "2017-07-02",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 92,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 6350
                ],
                [
                    "id" => 1146,
                    "name" => "Gearldine Gellinger",
                    "country" => [
                        "name" => "Egypt",
                        "code" => "eg"
                    ],
                    "company" => "Megibow & Edwards",
                    "date" => "2019-08-17",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 18,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 77641
                ],
                [
                    "id" => 1147,
                    "name" => "Chau Kitzman",
                    "country" => [
                        "name" => "Paraguay",
                        "code" => "py"
                    ],
                    "company" => "Benoff, Edward Esq",
                    "date" => "2019-07-04",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 9,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 43289
                ],
                [
                    "id" => 1148,
                    "name" => "Theola Frey",
                    "country" => [
                        "name" => "Vietnam",
                        "code" => "vn"
                    ],
                    "company" => "Woodbridge Free Public Library",
                    "date" => "2020-03-14",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 44,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 85657
                ],
                [
                    "id" => 1149,
                    "name" => "Cheryl Haroldson",
                    "country" => [
                        "name" => "France",
                        "code" => "fr"
                    ],
                    "company" => "New York Life John Thune",
                    "date" => "2018-04-03",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 55,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 82733
                ],
                [
                    "id" => 1150,
                    "name" => "Laticia Merced",
                    "country" => [
                        "name" => "Burkina Faso",
                        "code" => "bf"
                    ],
                    "company" => "Alinabal Inc",
                    "date" => "2017-03-04",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 21,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 38004
                ],
                [
                    "id" => 1151,
                    "name" => "Carissa Batman",
                    "country" => [
                        "name" => "Greece",
                        "code" => "gr"
                    ],
                    "company" => "Poletto, Kim David Esq",
                    "date" => "2016-05-05",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 91,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 29038
                ],
                [
                    "id" => 1152,
                    "name" => "Lezlie Craghead",
                    "country" => [
                        "name" => "Panama",
                        "code" => "pa"
                    ],
                    "company" => "Chang, Carolyn Esq",
                    "date" => "2019-05-28",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 30,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 75123
                ],
                [
                    "id" => 1153,
                    "name" => "Ozell Shealy",
                    "country" => [
                        "name" => "Pakistan",
                        "code" => "pk"
                    ],
                    "company" => "Silver Bros Inc",
                    "date" => "2016-08-19",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 14,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 33214
                ],
                [
                    "id" => 1154,
                    "name" => "Arminda Parvis",
                    "country" => [
                        "name" => "Indonesia",
                        "code" => "id"
                    ],
                    "company" => "Newtec Inc",
                    "date" => "2020-02-09",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 77,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 80651
                ],
                [
                    "id" => 1155,
                    "name" => "Reita Leto",
                    "country" => [
                        "name" => "Belgium",
                        "code" => "be"
                    ],
                    "company" => "Creative Business Systems",
                    "date" => "2020-04-03",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 58,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 5085
                ],
                [
                    "id" => 1156,
                    "name" => "Yolando Luczki",
                    "country" => [
                        "name" => "France",
                        "code" => "fr"
                    ],
                    "company" => "Dal Tile Corporation",
                    "date" => "2015-01-27",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 78,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 93021
                ],
                [
                    "id" => 1157,
                    "name" => "Lizette Stem",
                    "country" => [
                        "name" => "Slovakia",
                        "code" => "sk"
                    ],
                    "company" => "Edward S Katz",
                    "date" => "2018-08-06",
                    "status" => "new",
                    "verified" => false,
                    "activity" => 67,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 37287
                ],
                [
                    "id" => 1158,
                    "name" => "Gregoria Pawlowicz",
                    "country" => [
                        "name" => "Egypt",
                        "code" => "eg"
                    ],
                    "company" => "Oh My Goodknits Inc",
                    "date" => "2020-02-20",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 29,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 73070
                ],
                [
                    "id" => 1159,
                    "name" => "Carin Deleo",
                    "country" => [
                        "name" => "China",
                        "code" => "cn"
                    ],
                    "company" => "Redeker, Debbie",
                    "date" => "2015-05-28",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 13,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 64422
                ],
                [
                    "id" => 1160,
                    "name" => "Chantell Maynerich",
                    "country" => [
                        "name" => "Estonia",
                        "code" => "ee"
                    ],
                    "company" => "Desert Sands Motel",
                    "date" => "2016-09-05",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 75,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 36826
                ],
                [
                    "id" => 1161,
                    "name" => "Dierdre Yum",
                    "country" => [
                        "name" => "Czech Republic",
                        "code" => "cz"
                    ],
                    "company" => "Cummins Southern Plains Inc",
                    "date" => "2016-12-20",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 1,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 93101
                ],
                [
                    "id" => 1162,
                    "name" => "Larae Gudroe",
                    "country" => [
                        "name" => "Slovenia",
                        "code" => "si"
                    ],
                    "company" => "Lehigh Furn Divsn Lehigh",
                    "date" => "2015-11-28",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 13,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 60177
                ],
                [
                    "id" => 1163,
                    "name" => "Latrice Tolfree",
                    "country" => [
                        "name" => "Jamaica",
                        "code" => "jm"
                    ],
                    "company" => "United Van Lines Agent",
                    "date" => "2018-11-11",
                    "status" => "renewal",
                    "verified" => false,
                    "activity" => 73,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 47198
                ],
                [
                    "id" => 1164,
                    "name" => "Kerry Theodorov",
                    "country" => [
                        "name" => "Romania",
                        "code" => "ro"
                    ],
                    "company" => "Capitol Reporters",
                    "date" => "2016-11-05",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 76,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 71305
                ],
                [
                    "id" => 1165,
                    "name" => "Dorthy Hidvegi",
                    "country" => [
                        "name" => "Poland",
                        "code" => "pl"
                    ],
                    "company" => "Kwik Kopy Printing",
                    "date" => "2020-08-13",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 60,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 17526
                ],
                [
                    "id" => 1166,
                    "name" => "Fannie Lungren",
                    "country" => [
                        "name" => "Belarus",
                        "code" => "by"
                    ],
                    "company" => "Centro Inc",
                    "date" => "2015-07-06",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 24,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 16596
                ],
                [
                    "id" => 1167,
                    "name" => "Evangelina Radde",
                    "country" => [
                        "name" => "Ivory Coast",
                        "code" => "ci"
                    ],
                    "company" => "Campbell, Jan Esq",
                    "date" => "2020-02-25",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 93,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 56870
                ],
                [
                    "id" => 1168,
                    "name" => "Novella Degroot",
                    "country" => [
                        "name" => "Slovenia",
                        "code" => "si"
                    ],
                    "company" => "Evans, C Kelly Esq",
                    "date" => "2017-12-19",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 30,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 82928
                ],
                [
                    "id" => 1169,
                    "name" => "Clay Hoa",
                    "country" => [
                        "name" => "Paraguay",
                        "code" => "py"
                    ],
                    "company" => "Scat Enterprises",
                    "date" => "2016-02-22",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 93,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ],
                    "balance" => 64181
                ],
                [
                    "id" => 1170,
                    "name" => "Jennifer Fallick",
                    "country" => [
                        "name" => "Australia",
                        "code" => "au"
                    ],
                    "company" => "Nagle, Daniel J Esq",
                    "date" => "2016-12-24",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 88,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 30561
                ],
                [
                    "id" => 1171,
                    "name" => "Irma Wolfgramm",
                    "country" => [
                        "name" => "Belgium",
                        "code" => "be"
                    ],
                    "company" => "Serendiquity Bed & Breakfast",
                    "date" => "2020-10-18",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 70,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 24617
                ],
                [
                    "id" => 1172,
                    "name" => "Eun Coody",
                    "country" => [
                        "name" => "Taiwan",
                        "code" => "tw"
                    ],
                    "company" => "Ray Carolyne Realty",
                    "date" => "2018-02-12",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 61,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 77860
                ],
                [
                    "id" => 1173,
                    "name" => "Sylvia Cousey",
                    "country" => [
                        "name" => "Ireland",
                        "code" => "ie"
                    ],
                    "company" => "Berg, Charles E",
                    "date" => "2018-06-10",
                    "status" => "unqualified",
                    "verified" => false,
                    "activity" => 91,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 25664
                ],
                [
                    "id" => 1174,
                    "name" => "Nana Wrinkles",
                    "country" => [
                        "name" => "Austria",
                        "code" => "at"
                    ],
                    "company" => "Ray, Milbern D",
                    "date" => "2017-04-11",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 98,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 98113
                ],
                [
                    "id" => 1175,
                    "name" => "Layla Springe",
                    "country" => [
                        "name" => "South Africa",
                        "code" => "za"
                    ],
                    "company" => "Chadds Ford Winery",
                    "date" => "2019-07-27",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 97,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ],
                    "balance" => 14763
                ],
                [
                    "id" => 1176,
                    "name" => "Joesph Degonia",
                    "country" => [
                        "name" => "Serbia",
                        "code" => "rs"
                    ],
                    "company" => "A R Packaging",
                    "date" => "2020-04-23",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 56,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 31317
                ],
                [
                    "id" => 1177,
                    "name" => "Annabelle Boord",
                    "country" => [
                        "name" => "Guatemala",
                        "code" => "gt"
                    ],
                    "company" => "Corn Popper",
                    "date" => "2020-09-16",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 76,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 30883
                ],
                [
                    "id" => 1178,
                    "name" => "Stephaine Vinning",
                    "country" => [
                        "name" => "Australia",
                        "code" => "au"
                    ],
                    "company" => "Birite Foodservice Distr",
                    "date" => "2016-05-14",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 43,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 93785
                ],
                [
                    "id" => 1179,
                    "name" => "Nelida Sawchuk",
                    "country" => [
                        "name" => "South Africa",
                        "code" => "za"
                    ],
                    "company" => "Anchorage Museum Of Hist & Art",
                    "date" => "2018-06-22",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 58,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 68380
                ],
                [
                    "id" => 1180,
                    "name" => "Marguerita Hiatt",
                    "country" => [
                        "name" => "United Kingdom",
                        "code" => "gb"
                    ],
                    "company" => "Haber, George D Md",
                    "date" => "2018-10-25",
                    "status" => "qualified",
                    "verified" => false,
                    "activity" => 72,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 93454
                ],
                [
                    "id" => 1181,
                    "name" => "Carmela Cookey",
                    "country" => [
                        "name" => "France",
                        "code" => "fr"
                    ],
                    "company" => "Royal Pontiac Olds Inc",
                    "date" => "2018-07-19",
                    "status" => "proposal",
                    "verified" => false,
                    "activity" => 24,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 30570
                ],
                [
                    "id" => 1182,
                    "name" => "Junita Brideau",
                    "country" => [
                        "name" => "Indonesia",
                        "code" => "id"
                    ],
                    "company" => "Leonards Antiques Inc",
                    "date" => "2015-03-15",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 86,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ],
                    "balance" => 79506
                ],
                [
                    "id" => 1183,
                    "name" => "Claribel Varriano",
                    "country" => [
                        "name" => "Ecuador",
                        "code" => "ec"
                    ],
                    "company" => "Meca",
                    "date" => "2017-04-14",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 15,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 8654
                ],
                [
                    "id" => 1184,
                    "name" => "Benton Skursky",
                    "country" => [
                        "name" => "Iceland",
                        "code" => "is"
                    ],
                    "company" => "Nercon Engineering & Mfg Inc",
                    "date" => "2015-02-19",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 9,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 13368
                ],
                [
                    "id" => 1185,
                    "name" => "Hillary Skulski",
                    "country" => [
                        "name" => "France",
                        "code" => "fr"
                    ],
                    "company" => "Replica I",
                    "date" => "2016-03-25",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 82,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 92631
                ],
                [
                    "id" => 1186,
                    "name" => "Merilyn Bayless",
                    "country" => [
                        "name" => "Jamaica",
                        "code" => "jm"
                    ],
                    "company" => "20 20 Printing Inc",
                    "date" => "2020-10-13",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 13,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 4989
                ],
                [
                    "id" => 1187,
                    "name" => "Teri Ennaco",
                    "country" => [
                        "name" => "Pakistan",
                        "code" => "pk"
                    ],
                    "company" => "Publishers Group West",
                    "date" => "2019-12-21",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 57,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ],
                    "balance" => 77668
                ],
                [
                    "id" => 1188,
                    "name" => "Merlyn Lawler",
                    "country" => [
                        "name" => "Germany",
                        "code" => "de"
                    ],
                    "company" => "Nischwitz, Jeffrey L Esq",
                    "date" => "2016-02-26",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 45,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 3525
                ],
                [
                    "id" => 1189,
                    "name" => "Georgene Montezuma",
                    "country" => [
                        "name" => "Senegal",
                        "code" => "sn"
                    ],
                    "company" => "Payne Blades & Wellborn Pa",
                    "date" => "2018-10-11",
                    "status" => "new",
                    "verified" => true,
                    "activity" => 64,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 45838
                ],
                [
                    "id" => 1190,
                    "name" => "Jettie Mconnell",
                    "country" => [
                        "name" => "Denmark",
                        "code" => "dk"
                    ],
                    "company" => "Coldwell Bnkr Wright Real Est",
                    "date" => "2015-10-18",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 74,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 49148
                ],
                [
                    "id" => 1191,
                    "name" => "Lemuel Latzke",
                    "country" => [
                        "name" => "Colombia",
                        "code" => "co"
                    ],
                    "company" => "Computer Repair Service",
                    "date" => "2016-02-13",
                    "status" => "proposal",
                    "verified" => false,
                    "activity" => 79,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 96709
                ],
                [
                    "id" => 1192,
                    "name" => "Melodie Knipp",
                    "country" => [
                        "name" => "Finland",
                        "code" => "fi"
                    ],
                    "company" => "Fleetwood Building Block Inc",
                    "date" => "2018-03-08",
                    "status" => "negotiation",
                    "verified" => false,
                    "activity" => 19,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 23253
                ],
                [
                    "id" => 1193,
                    "name" => "Candida Corbley",
                    "country" => [
                        "name" => "Poland",
                        "code" => "pl"
                    ],
                    "company" => "Colts Neck Medical Assocs Inc",
                    "date" => "2017-12-02",
                    "status" => "negotiation",
                    "verified" => true,
                    "activity" => 11,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ],
                    "balance" => 40836
                ],
                [
                    "id" => 1194,
                    "name" => "Karan Karpin",
                    "country" => [
                        "name" => "Estonia",
                        "code" => "ee"
                    ],
                    "company" => "New England Taxidermy",
                    "date" => "2019-01-07",
                    "status" => "proposal",
                    "verified" => true,
                    "activity" => 4,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ],
                    "balance" => 60719
                ],
                [
                    "id" => 1195,
                    "name" => "Andra Scheyer",
                    "country" => [
                        "name" => "Romania",
                        "code" => "ro"
                    ],
                    "company" => "Ludcke, George O Esq",
                    "date" => "2016-08-14",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 62,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 17419
                ],
                [
                    "id" => 1196,
                    "name" => "Felicidad Poullion",
                    "country" => [
                        "name" => "Greece",
                        "code" => "gr"
                    ],
                    "company" => "Mccorkle, Tom S Esq",
                    "date" => "2016-03-05",
                    "status" => "renewal",
                    "verified" => true,
                    "activity" => 64,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ],
                    "balance" => 94052
                ],
                [
                    "id" => 1197,
                    "name" => "Belen Strassner",
                    "country" => [
                        "name" => "Ivory Coast",
                        "code" => "ci"
                    ],
                    "company" => "Eagle Software Inc",
                    "date" => "2015-12-14",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 91,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ],
                    "balance" => 54241
                ],
                [
                    "id" => 1198,
                    "name" => "Gracia Melnyk",
                    "country" => [
                        "name" => "Costa Rica",
                        "code" => "cr"
                    ],
                    "company" => "Juvenile & Adult Super",
                    "date" => "2019-06-01",
                    "status" => "unqualified",
                    "verified" => true,
                    "activity" => 40,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ],
                    "balance" => 87668
                ],
                [
                    "id" => 1199,
                    "name" => "Jolanda Hanafan",
                    "country" => [
                        "name" => "Cameroon",
                        "code" => "cm"
                    ],
                    "company" => "Perez, Joseph J Esq",
                    "date" => "2015-12-09",
                    "status" => "qualified",
                    "verified" => true,
                    "activity" => 27,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ],
                    "balance" => 99417
                ]
            ]
        ]);
    }
    private function getMediumCustomers(): JsonResponse
    {
        return response()->json([
            "data" => [
                [
                    "id" => 1000,
                    "name" => "James Butt",
                    "country" => [
                        "name" => "Algeria",
                        "code" => "dz"
                    ],
                    "company" => "Benton, John B Jr",
                    "date" => "2015-09-13",
                    "status" => "unqualified",
                    "activity" => 17,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ]
                ],
                [
                    "id" => 1001,
                    "name" => "Josephine Darakjy",
                    "country" => [
                        "name" => "Egypt",
                        "code" => "eg"
                    ],
                    "company" => "Chanay, Jeffrey A Esq",
                    "date" => "2019-02-09",
                    "status" => "proposal",
                    "activity" => 0,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ]
                ],
                [
                    "id" => 1002,
                    "name" => "Art Venere",
                    "country" => [
                        "name" => "Panama",
                        "code" => "pa"
                    ],
                    "company" => "Chemel, James L Cpa",
                    "date" => "2017-05-13",
                    "status" => "qualified",
                    "activity" => 63,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ]
                ],
                [
                    "id" => 1003,
                    "name" => "Lenna Paprocki",
                    "country" => [
                        "name" => "Slovenia",
                        "code" => "si"
                    ],
                    "company" => "Feltz Printing Service",
                    "date" => "2020-09-15",
                    "status" => "new",
                    "activity" => 37,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ]
                ],
                [
                    "id" => 1004,
                    "name" => "Donette Foller",
                    "country" => [
                        "name" => "South Africa",
                        "code" => "za"
                    ],
                    "company" => "Printing Dimensions",
                    "date" => "2016-05-20",
                    "status" => "proposal",
                    "activity" => 33,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ]
                ],
                [
                    "id" => 1005,
                    "name" => "Simona Morasca",
                    "country" => [
                        "name" => "Egypt",
                        "code" => "eg"
                    ],
                    "company" => "Chapman, Ross E Esq",
                    "date" => "2018-02-16",
                    "status" => "qualified",
                    "activity" => 68,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ]
                ],
                [
                    "id" => 1006,
                    "name" => "Mitsue Tollner",
                    "country" => [
                        "name" => "Paraguay",
                        "code" => "py"
                    ],
                    "company" => "Morlong Associates",
                    "date" => "2018-02-19",
                    "status" => "renewal",
                    "activity" => 54,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ]
                ],
                [
                    "id" => 1007,
                    "name" => "Leota Dilliard",
                    "country" => [
                        "name" => "Serbia",
                        "code" => "rs"
                    ],
                    "company" => "Commercial Press",
                    "date" => "2019-08-13",
                    "status" => "renewal",
                    "activity" => 69,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ]
                ],
                [
                    "id" => 1008,
                    "name" => "Sage Wieser",
                    "country" => [
                        "name" => "Egypt",
                        "code" => "eg"
                    ],
                    "company" => "Truhlar And Truhlar Attys",
                    "date" => "2018-11-21",
                    "status" => "unqualified",
                    "activity" => 76,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ]
                ],
                [
                    "id" => 1009,
                    "name" => "Kris Marrier",
                    "country" => [
                        "name" => "Mexico",
                        "code" => "mx"
                    ],
                    "company" => "King, Christopher A Esq",
                    "date" => "2015-07-07",
                    "status" => "proposal",
                    "activity" => 3,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ]
                ],
                [
                    "id" => 1010,
                    "name" => "Minna Amigon",
                    "country" => [
                        "name" => "Romania",
                        "code" => "ro"
                    ],
                    "company" => "Dorl, James J Esq",
                    "date" => "2018-11-07",
                    "status" => "qualified",
                    "activity" => 38,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ]
                ],
                [
                    "id" => 1011,
                    "name" => "Abel Maclead",
                    "country" => [
                        "name" => "Singapore",
                        "code" => "sg"
                    ],
                    "company" => "Rangoni Of Florence",
                    "date" => "2017-03-11",
                    "status" => "qualified",
                    "activity" => 87,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ]
                ],
                [
                    "id" => 1012,
                    "name" => "Kiley Caldarera",
                    "country" => [
                        "name" => "Serbia",
                        "code" => "rs"
                    ],
                    "company" => "Feiner Bros",
                    "date" => "2015-10-20",
                    "status" => "unqualified",
                    "activity" => 80,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ]
                ],
                [
                    "id" => 1013,
                    "name" => "Graciela Ruta",
                    "country" => [
                        "name" => "Chile",
                        "code" => "cl"
                    ],
                    "company" => "Buckley Miller & Wright",
                    "date" => "2016-07-25",
                    "status" => "negotiation",
                    "activity" => 59,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ]
                ],
                [
                    "id" => 1014,
                    "name" => "Cammy Albares",
                    "country" => [
                        "name" => "Philippines",
                        "code" => "ph"
                    ],
                    "company" => "Rousseaux, Michael Esq",
                    "date" => "2019-06-25",
                    "status" => "new",
                    "activity" => 90,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ]
                ],
                [
                    "id" => 1015,
                    "name" => "Mattie Poquette",
                    "country" => [
                        "name" => "Venezuela",
                        "code" => "ve"
                    ],
                    "company" => "Century Communications",
                    "date" => "2017-12-12",
                    "status" => "negotiation",
                    "activity" => 52,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ]
                ],
                [
                    "id" => 1016,
                    "name" => "Meaghan Garufi",
                    "country" => [
                        "name" => "Malaysia",
                        "code" => "my"
                    ],
                    "company" => "Bolton, Wilbur Esq",
                    "date" => "2018-07-04",
                    "status" => "unqualified",
                    "activity" => 31,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ]
                ],
                [
                    "id" => 1017,
                    "name" => "Gladys Rim",
                    "country" => [
                        "name" => "Netherlands",
                        "code" => "nl"
                    ],
                    "company" => "T M Byxbee Company Pc",
                    "date" => "2020-02-27",
                    "status" => "renewal",
                    "activity" => 48,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ]
                ],
                [
                    "id" => 1018,
                    "name" => "Yuki Whobrey",
                    "country" => [
                        "name" => "Israel",
                        "code" => "il"
                    ],
                    "company" => "Farmers Insurance Group",
                    "date" => "2017-12-21",
                    "status" => "negotiation",
                    "activity" => 16,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ]
                ],
                [
                    "id" => 1019,
                    "name" => "Fletcher Flosi",
                    "country" => [
                        "name" => "Argentina",
                        "code" => "ar"
                    ],
                    "company" => "Post Box Services Plus",
                    "date" => "2016-01-04",
                    "status" => "renewal",
                    "activity" => 19,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ]
                ],
                [
                    "id" => 1020,
                    "name" => "Bette Nicka",
                    "country" => [
                        "name" => "Paraguay",
                        "code" => "py"
                    ],
                    "company" => "Sport En Art",
                    "date" => "2016-10-21",
                    "status" => "renewal",
                    "activity" => 100,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ]
                ],
                [
                    "id" => 1021,
                    "name" => "Veronika Inouye",
                    "country" => [
                        "name" => "Ecuador",
                        "code" => "ec"
                    ],
                    "company" => "C 4 Network Inc",
                    "date" => "2017-03-24",
                    "status" => "renewal",
                    "activity" => 72,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ]
                ],
                [
                    "id" => 1022,
                    "name" => "Willard Kolmetz",
                    "country" => [
                        "name" => "Tunisia",
                        "code" => "tn"
                    ],
                    "company" => "Ingalls, Donald R Esq",
                    "date" => "2017-04-15",
                    "status" => "renewal",
                    "activity" => 94,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ]
                ],
                [
                    "id" => 1023,
                    "name" => "Maryann Royster",
                    "country" => [
                        "name" => "Belarus",
                        "code" => "by"
                    ],
                    "company" => "Franklin, Peter L Esq",
                    "date" => "2017-03-11",
                    "status" => "qualified",
                    "activity" => 56,
                    "representative" => [
                        "name" => "Elwin Sharvill",
                        "image" => "elwinsharvill.png"
                    ]
                ],
                [
                    "id" => 1024,
                    "name" => "Alisha Slusarski",
                    "country" => [
                        "name" => "Iceland",
                        "code" => "is"
                    ],
                    "company" => "Wtlz Power 107 Fm",
                    "date" => "2018-03-27",
                    "status" => "qualified",
                    "activity" => 7,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ]
                ],
                [
                    "id" => 1025,
                    "name" => "Allene Iturbide",
                    "country" => [
                        "name" => "Italy",
                        "code" => "it"
                    ],
                    "company" => "Ledecky, David Esq",
                    "date" => "2016-02-20",
                    "status" => "qualified",
                    "activity" => 1,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ]
                ],
                [
                    "id" => 1026,
                    "name" => "Chanel Caudy",
                    "country" => [
                        "name" => "Argentina",
                        "code" => "ar"
                    ],
                    "company" => "Professional Image Inc",
                    "date" => "2018-06-24",
                    "status" => "new",
                    "activity" => 26,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ]
                ],
                [
                    "id" => 1027,
                    "name" => "Ezekiel Chui",
                    "country" => [
                        "name" => "Ireland",
                        "code" => "ie"
                    ],
                    "company" => "Sider, Donald C Esq",
                    "date" => "2016-09-24",
                    "status" => "new",
                    "activity" => 76,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ]
                ],
                [
                    "id" => 1028,
                    "name" => "Willow Kusko",
                    "country" => [
                        "name" => "Romania",
                        "code" => "ro"
                    ],
                    "company" => "U Pull It",
                    "date" => "2020-04-11",
                    "status" => "qualified",
                    "activity" => 7,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ]
                ],
                [
                    "id" => 1029,
                    "name" => "Bernardo Figeroa",
                    "country" => [
                        "name" => "Israel",
                        "code" => "il"
                    ],
                    "company" => "Clark, Richard Cpa",
                    "date" => "2018-04-11",
                    "status" => "renewal",
                    "activity" => 81,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ]
                ],
                [
                    "id" => 1030,
                    "name" => "Ammie Corrio",
                    "country" => [
                        "name" => "Hungary",
                        "code" => "hu"
                    ],
                    "company" => "Moskowitz, Barry S",
                    "date" => "2016-06-11",
                    "status" => "negotiation",
                    "activity" => 56,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ]
                ],
                [
                    "id" => 1031,
                    "name" => "Francine Vocelka",
                    "country" => [
                        "name" => "Honduras",
                        "code" => "hn"
                    ],
                    "company" => "Cascade Realty Advisors Inc",
                    "date" => "2017-08-02",
                    "status" => "qualified",
                    "activity" => 94,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ]
                ],
                [
                    "id" => 1032,
                    "name" => "Ernie Stenseth",
                    "country" => [
                        "name" => "Australia",
                        "code" => "au"
                    ],
                    "company" => "Knwz Newsradio",
                    "date" => "2018-06-06",
                    "status" => "renewal",
                    "activity" => 68,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ]
                ],
                [
                    "id" => 1033,
                    "name" => "Albina Glick",
                    "country" => [
                        "name" => "Ukraine",
                        "code" => "ua"
                    ],
                    "company" => "Giampetro, Anthony D",
                    "date" => "2019-08-08",
                    "status" => "proposal",
                    "activity" => 85,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ]
                ],
                [
                    "id" => 1034,
                    "name" => "Alishia Sergi",
                    "country" => [
                        "name" => "Qatar",
                        "code" => "qa"
                    ],
                    "company" => "Milford Enterprises Inc",
                    "date" => "2018-05-19",
                    "status" => "negotiation",
                    "activity" => 46,
                    "representative" => [
                        "name" => "Ivan Magalhaes",
                        "image" => "ivanmagalhaes.png"
                    ]
                ],
                [
                    "id" => 1035,
                    "name" => "Solange Shinko",
                    "country" => [
                        "name" => "Cameroon",
                        "code" => "cm"
                    ],
                    "company" => "Mosocco, Ronald A",
                    "date" => "2015-02-12",
                    "status" => "qualified",
                    "activity" => 32,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ]
                ],
                [
                    "id" => 1036,
                    "name" => "Jose Stockham",
                    "country" => [
                        "name" => "Italy",
                        "code" => "it"
                    ],
                    "company" => "Tri State Refueler Co",
                    "date" => "2018-04-25",
                    "status" => "qualified",
                    "activity" => 77,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ]
                ],
                [
                    "id" => 1037,
                    "name" => "Rozella Ostrosky",
                    "country" => [
                        "name" => "Venezuela",
                        "code" => "ve"
                    ],
                    "company" => "Parkway Company",
                    "date" => "2016-02-27",
                    "status" => "unqualified",
                    "activity" => 66,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ]
                ],
                [
                    "id" => 1038,
                    "name" => "Valentine Gillian",
                    "country" => [
                        "name" => "Paraguay",
                        "code" => "py"
                    ],
                    "company" => "Fbs Business Finance",
                    "date" => "2019-09-17",
                    "status" => "qualified",
                    "activity" => 25,
                    "representative" => [
                        "name" => "Bernardo Dominic",
                        "image" => "bernardodominic.png"
                    ]
                ],
                [
                    "id" => 1039,
                    "name" => "Kati Rulapaugh",
                    "country" => [
                        "name" => "Puerto Rico",
                        "code" => "pr"
                    ],
                    "company" => "Eder Assocs Consltng Engrs Pc",
                    "date" => "2016-12-03",
                    "status" => "renewal",
                    "activity" => 51,
                    "representative" => [
                        "name" => "Ioni Bowcher",
                        "image" => "ionibowcher.png"
                    ]
                ],
                [
                    "id" => 1040,
                    "name" => "Youlanda Schemmer",
                    "country" => [
                        "name" => "Bolivia",
                        "code" => "bo"
                    ],
                    "company" => "Tri M Tool Inc",
                    "date" => "2017-12-15",
                    "status" => "negotiation",
                    "activity" => 49,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ]
                ],
                [
                    "id" => 1041,
                    "name" => "Dyan Oldroyd",
                    "country" => [
                        "name" => "Argentina",
                        "code" => "ar"
                    ],
                    "company" => "International Eyelets Inc",
                    "date" => "2017-02-02",
                    "status" => "qualified",
                    "activity" => 5,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ]
                ],
                [
                    "id" => 1042,
                    "name" => "Roxane Campain",
                    "country" => [
                        "name" => "France",
                        "code" => "fr"
                    ],
                    "company" => "Rapid Trading Intl",
                    "date" => "2018-12-25",
                    "status" => "unqualified",
                    "activity" => 100,
                    "representative" => [
                        "name" => "Anna Fali",
                        "image" => "annafali.png"
                    ]
                ],
                [
                    "id" => 1043,
                    "name" => "Lavera Perin",
                    "country" => [
                        "name" => "Vietnam",
                        "code" => "vn"
                    ],
                    "company" => "Abc Enterprises Inc",
                    "date" => "2018-04-10",
                    "status" => "qualified",
                    "activity" => 71,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ]
                ],
                [
                    "id" => 1044,
                    "name" => "Erick Ferencz",
                    "country" => [
                        "name" => "Belgium",
                        "code" => "be"
                    ],
                    "company" => "Cindy Turner Associates",
                    "date" => "2018-05-06",
                    "status" => "unqualified",
                    "activity" => 54,
                    "representative" => [
                        "name" => "Amy Elsner",
                        "image" => "amyelsner.png"
                    ]
                ],
                [
                    "id" => 1045,
                    "name" => "Fatima Saylors",
                    "country" => [
                        "name" => "Canada",
                        "code" => "ca"
                    ],
                    "company" => "Stanton, James D Esq",
                    "date" => "2019-07-10",
                    "status" => "renewal",
                    "activity" => 93,
                    "representative" => [
                        "name" => "Onyama Limba",
                        "image" => "onyamalimba.png"
                    ]
                ],
                [
                    "id" => 1046,
                    "name" => "Jina Briddick",
                    "country" => [
                        "name" => "Mexico",
                        "code" => "mx"
                    ],
                    "company" => "Grace Pastries Inc",
                    "date" => "2018-02-19",
                    "status" => "unqualified",
                    "activity" => 97,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ]
                ],
                [
                    "id" => 1047,
                    "name" => "Kanisha Waycott",
                    "country" => [
                        "name" => "Ecuador",
                        "code" => "ec"
                    ],
                    "company" => "Schroer, Gene E Esq",
                    "date" => "2019-11-27",
                    "status" => "new",
                    "activity" => 80,
                    "representative" => [
                        "name" => "Xuxue Feng",
                        "image" => "xuxuefeng.png"
                    ]
                ],
                [
                    "id" => 1048,
                    "name" => "Emerson Bowley",
                    "country" => [
                        "name" => "Finland",
                        "code" => "fi"
                    ],
                    "company" => "Knights Inn",
                    "date" => "2018-11-24",
                    "status" => "new",
                    "activity" => 63,
                    "representative" => [
                        "name" => "Stephen Shaw",
                        "image" => "stephenshaw.png"
                    ]
                ],
                [
                    "id" => 1049,
                    "name" => "Blair Malet",
                    "country" => [
                        "name" => "Finland",
                        "code" => "fi"
                    ],
                    "company" => "Bollinger Mach Shp & Shipyard",
                    "date" => "2018-04-19",
                    "status" => "new",
                    "activity" => 92,
                    "representative" => [
                        "name" => "Asiya Javayant",
                        "image" => "asiyajavayant.png"
                    ]
                ]
            ]
        ]);
    }
    private function getEvents(): JsonResponse
    {
        return response()->json([
            "data" => [
                [
                    "id" => 1,
                    "title" => "All Day Event",
                    "start" => "2021-01-03"
                ],
                [
                    "id" => 2,
                    "title" => "Long Event",
                    "start" => "2021-01-09",
                    "end" => "2021-01-12"
                ],
                [
                    "id" => 3,
                    "title" => "Repeating Event",
                    "start" => "2021-01-11T16:00:00"
                ],
                [
                    "id" => 4,
                    "title" => "Repeating Event",
                    "start" => "2021-01-18T16:00:00"
                ],
                [
                    "id" => 5,
                    "title" => "Conference",
                    "start" => "2021-01-13",
                    "end" => "2021-01-15"
                ],
                [
                    "id" => 6,
                    "title" => "Meeting",
                    "start" => "2021-01-14T10:30:00",
                    "end" => "2021-01-14T12:30:00"
                ],
                [
                    "id" => 7,
                    "title" => "Lunch",
                    "start" => "2021-01-14T12:00:00"
                ],
                [
                    "id" => 8,
                    "title" => "Meeting",
                    "start" => "2021-01-14T14:30:00"
                ],
                [
                    "id" => 9,
                    "title" => "Happy Hour",
                    "start" => "2021-01-14T17:30:00"
                ],
                [
                    "id" => 10,
                    "title" => "Dinner",
                    "start" => "2021-01-14T20:00:00"
                ],
                [
                    "id" => 11,
                    "title" => "Birthday Party",
                    "start" => "2021-01-15T07:00:00"
                ],
                [
                    "id" => 12,
                    "title" => "Click for Google",
                    "url" => "http://google.com/",
                    "start" => "2021-01-30"
                ]
            ]
        ]);
    }
    private function getIcons(): JsonResponse
    {
        return response()->json([
            "IcoMoonType" => "selection",
            "icons" => [
                [
                    "icon" => [
                        "paths" => [
                            "M959.977 394.711c0-24.979-9.774-48.87-27.693-66.789l-236.207-236.207c-36.923-36.923-96.655-36.923-133.578 0l-470.781 470.781c-17.919 17.919-27.693 41.81-27.693 66.789s9.774 48.87 27.693 66.789l236.207 236.207c18.462 18.462 42.356 27.693 66.789 27.693 2.173 0 4.887 0 7.060-0.543 1.084 0 1.63 0 2.714 0h433.859c22.263 0 40.725-18.462 40.725-40.725s-18.462-40.725-40.725-40.725h-323.088l416.482-416.482c17.919-17.919 27.693-41.81 27.693-66.789zM149.275 638.521c-3.257-3.257-3.8-7.060-3.8-9.231s0-5.972 3.8-9.231l206.341-206.341 254.669 254.669-206.341 206.341c-4.887 4.887-13.032 4.887-18.462 0l-236.207-236.75zM874.725 404.486l-206.341 206.341-254.669-254.669 206.341-206.341c4.887-4.887 13.032-4.887 18.462 0l236.207 236.75c3.257 3.257 3.8 7.060 3.8 9.231s0 5.972-3.8 9.231z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "eraser"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 333,
                        "id" => 261,
                        "name" => "eraser",
                        "prevSize" => 80,
                        "code" => 59908
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 0
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M496 128.019c-247.028 0-447.979 200.95-447.979 447.979s200.95 447.979 447.979 447.979 447.979-200.95 447.979-447.979-200.95-447.979-447.979-447.979zM496 927.979c-193.911 0-351.983-158.073-351.983-351.983s158.073-351.983 351.983-351.983 351.983 158.073 351.983 351.983-158.073 351.983-351.983 351.983zM288.011 48.023c0-26.238 21.759-47.998 47.998-47.998h319.984c26.238 0 47.998 21.759 47.998 47.998s-21.759 47.998-47.998 47.998h-319.984c-26.238 0-47.998-21.759-47.998-47.998zM543.998 384.007v191.991c0 26.238-21.759 47.998-47.998 47.998s-47.998-21.759-47.998-47.998v-191.991c0-26.238 21.759-47.998 47.998-47.998s47.998 21.759 47.998 47.998zM962.538 273.291c-9.6 9.6-21.759 14.080-33.918 14.080s-24.318-4.48-33.918-14.080l-95.995-95.995c-18.559-18.559-18.559-49.277 0-67.837s49.277-18.559 67.837 0l95.995 95.995c18.559 18.559 18.559 49.277 0 67.837z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "stopwatch"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 332,
                        "id" => 260,
                        "name" => "stopwatch",
                        "prevSize" => 80,
                        "code" => 59905
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 1
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M626.347 1024c-27.876 0-54.044-13.084-75.663-24.463-13.653-6.827-30.151-15.36-38.684-15.36s-25.6 8.533-38.684 15.36c-27.307 14.223-61.44 31.289-97.849 21.617-37.547-9.671-58.027-42.667-75.093-68.836-7.396-11.947-17.636-27.876-24.463-31.857s-25.031-4.551-40.391-5.689c-30.72-1.707-68.836-3.413-96.143-30.151-27.307-27.876-29.013-65.991-30.72-96.711-0.569-14.791-1.707-33.564-5.689-40.391-3.413-6.257-19.911-16.497-31.289-23.893-26.169-17.067-58.596-38.116-68.836-75.093-9.671-36.409 7.396-70.543 21.617-97.849 6.827-13.653 15.36-30.151 15.36-38.684s-8.533-25.6-15.36-38.684c-14.223-27.307-31.289-61.44-21.617-97.849 9.671-37.547 42.667-58.027 68.836-75.093 11.947-7.396 27.876-17.636 31.857-24.463s4.551-25.031 5.689-40.391c1.707-30.72 3.413-68.836 30.151-96.143 27.876-27.307 65.991-29.013 96.711-30.72 14.791-0.569 33.564-1.707 40.391-5.689 6.257-3.413 16.497-19.911 23.893-31.289 17.067-26.169 38.116-58.596 75.093-68.836 36.409-9.671 70.543 7.396 97.849 21.617 13.653 6.827 30.151 15.36 38.684 15.36s25.6-8.533 38.684-15.36c27.307-13.653 61.44-31.289 97.849-21.617 37.547 9.671 58.027 42.667 75.093 68.836 7.396 11.947 17.636 27.876 24.463 31.857s25.031 4.551 40.391 5.689c30.72 1.707 68.836 3.413 96.143 30.151 27.307 27.876 29.013 65.991 30.72 96.711 0.569 14.791 1.707 33.564 5.689 40.391 3.413 6.257 19.911 16.497 31.289 23.893 26.169 17.067 58.596 38.116 68.836 75.093 9.671 36.409-7.396 70.543-21.617 97.849-6.827 13.653-15.36 30.151-15.36 38.684s8.533 25.6 15.36 38.684c14.223 27.307 31.289 61.44 21.617 97.849-9.671 37.547-42.667 58.027-68.836 75.093-11.947 7.396-27.876 17.636-31.857 24.463s-4.551 25.031-5.689 40.391c-1.707 30.72-3.413 68.836-30.151 96.143-27.876 27.307-65.991 29.013-96.711 30.72-14.791 0.569-33.564 1.707-40.391 5.689-6.257 3.413-16.497 19.911-23.893 31.289-17.067 26.169-38.116 58.596-75.093 68.836-7.396 2.276-14.791 2.844-22.187 2.844zM398.223 85.333s0 0-0.569 0c-5.689 2.276-18.773 21.617-25.031 32.427-13.653 21.049-29.013 44.943-53.476 59.164-25.031 14.223-53.476 15.929-79.076 17.067-12.516 0.569-35.84 1.707-40.96 5.689-3.413 4.551-4.551 27.307-5.12 39.823-1.137 25.6-2.844 54.044-17.067 78.507s-38.116 39.823-59.164 53.476c-10.809 6.827-30.151 19.343-32.427 25.6-0.569 6.257 9.103 25.6 14.791 36.977 11.377 22.756 25.031 48.356 25.031 77.369s-13.084 54.613-25.031 77.369c-5.689 11.377-15.929 30.72-14.791 36.977 2.276 5.689 21.617 18.773 32.427 25.031 21.049 13.653 44.943 29.013 59.164 53.476 14.223 25.031 15.929 53.476 17.067 79.076 0.569 12.516 1.707 35.84 5.689 40.96 4.551 3.413 27.307 4.551 39.823 5.12 25.6 1.137 54.044 2.844 78.507 17.067s39.823 38.116 53.476 59.164c6.827 10.809 19.343 30.151 25.6 32.427 5.689 1.707 25.6-9.103 36.977-14.791 22.756-11.377 48.356-25.031 77.369-25.031s54.613 13.084 77.369 25.031c11.377 5.689 29.583 16.497 36.977 14.791 5.689-2.276 18.773-21.617 25.031-32.427 13.653-21.049 29.013-44.943 53.476-59.164 25.031-14.223 53.476-15.929 79.076-17.067 12.516-0.569 35.84-1.707 40.96-5.689 3.413-4.551 4.551-27.307 5.12-39.823 1.137-25.6 2.844-54.044 17.067-78.507s38.116-39.823 59.164-53.476c10.809-6.827 30.151-19.343 32.427-25.6 0.569-6.257-9.103-25.6-14.791-36.977-11.377-22.756-25.031-48.356-25.031-77.369s13.084-54.613 25.031-77.369c5.689-11.377 15.36-30.72 14.791-36.977-2.276-6.257-22.187-18.773-32.427-25.6-21.049-13.653-44.943-29.013-59.164-53.476-14.223-25.031-15.929-53.476-17.067-79.076-0.569-12.516-1.707-35.84-5.689-40.96-4.551-3.413-27.307-4.551-39.823-5.12-25.6-1.137-54.044-2.844-78.507-17.067s-39.823-38.116-53.476-59.164c-6.827-10.809-19.343-30.151-25.6-32.427-5.689-1.707-25.6 9.103-36.977 14.791-22.756 11.377-48.356 25.031-77.369 25.031s-54.613-13.084-77.369-25.031c-11.377-5.689-29.583-14.791-36.409-14.791zM938.667 397.084s0 0 0 0v0zM426.097 711.68v0c-11.377 0-22.187-4.551-30.151-12.516l-142.791-142.791c-16.497-16.497-16.497-43.804 0-60.303s43.804-16.497 60.303 0l112.64 112.64 283.876-283.876c16.497-16.497 43.804-16.497 60.303 0s16.497 43.804 0 60.303l-314.027 314.027c-7.964 7.964-18.773 12.516-30.151 12.516z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "verified"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 331,
                        "id" => 259,
                        "name" => "verified",
                        "prevSize" => 80,
                        "code" => 59906
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 2
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M799.19 390.096l-121.904 121.904 121.904 121.904c15.924 15.924 15.924 42.282 0 58.207-8.237 8.237-18.67 12.081-29.103 12.081s-20.866-3.844-29.103-12.081l-121.904-121.904-121.904 121.904c-8.237 8.237-18.67 12.081-29.103 12.081s-20.866-3.844-29.103-12.081c-15.924-15.924-15.924-42.282 0-58.207l121.904-121.904-121.904-121.904c-15.924-15.924-15.924-42.282 0-58.207s42.282-15.924 58.207 0l121.904 121.904 121.904-121.904c15.924-15.924 42.282-15.924 58.207 0s15.924 42.282 0 58.207zM1023.778 237.441v549.119c0 52.715-42.831 96.096-96.096 96.096h-655.098c-33.497 0-63.697-17.023-81.27-45.028l-180.66-289.385c-13.728-21.965-13.728-50.518 0-73.033l180.66-288.837c17.571-28.005 48.323-45.028 81.27-45.028h655.648c52.715 0 96.096 43.381 96.096 96.096zM941.41 237.441c0-7.687-6.040-13.728-13.728-13.728h-655.098c-4.942 0-9.335 2.197-11.531 6.589l-176.267 281.698 176.267 281.698c2.745 3.844 7.139 6.589 11.531 6.589h655.648c7.687 0 13.728-6.040 13.728-13.728v-549.119z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "delete-left"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 330,
                        "id" => 258,
                        "name" => "delete-left",
                        "prevSize" => 80,
                        "code" => 59907
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 3
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M877.707 936.219h-38.619c-22.234-79.578-90.695-277.351-257.457-424.219 166.762-146.867 235.222-344.642 257.457-424.219h38.619c23.99 0 43.885-19.895 43.885-43.885s-19.895-43.885-43.885-43.885h-731.412c-23.99 0-43.885 19.895-43.885 43.885s19.895 43.885 43.885 43.885h38.619c22.234 79.578 90.695 277.351 257.457 424.219-166.762 146.867-235.222 344.642-257.457 424.219h-38.619c-23.99 0-43.885 19.895-43.885 43.885s19.895 43.885 43.885 43.885h731.412c23.99 0 43.885-19.895 43.885-43.885s-19.895-43.885-43.885-43.885zM276.778 87.781h469.859c-26.331 83.089-93.621 248.679-235.222 367.462-141.601-119.366-208.891-284.373-235.222-367.462zM512 568.758c141.601 119.366 208.891 284.373 235.222 367.462h-470.444c26.331-83.089 93.621-248.681 235.222-367.462z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "hourglass"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 329,
                        "id" => 257,
                        "name" => "hourglass",
                        "prevSize" => 80,
                        "code" => 59902
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 4
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M816.58 221.265h-110.756v-41.534c0-53.163-43.749-96.912-96.912-96.912h-512.247c-53.163 0-96.912 43.749-96.912 96.912v498.402c0 53.163 43.749 96.912 96.912 96.912h15.506c7.2 92.481 84.174 166.134 178.318 166.134s171.118-73.653 178.318-166.134h85.836c7.2 92.481 84.174 166.134 178.318 166.134s171.118-73.653 178.318-166.134h15.506c53.163 0 96.912-43.749 96.912-96.912v-249.201c0-114.633-93.035-207.668-207.668-207.668zM82.82 678.134v-498.402c0-7.752 6.091-13.845 13.845-13.845h512.247c7.752 0 13.845 6.091 13.845 13.845v439.701s-2.768 3.323-4.43 4.43c-8.307 7.2-16.059 14.952-23.259 23.259-2.216 2.768-4.43 4.984-6.091 7.752-8.307 11.629-16.059 23.259-21.043 36.55h-110.756s0 0 0-0.554c0 0 0 0 0 0-3.877-9.414-9.414-18.829-14.952-27.136-1.661-2.216-3.323-4.43-4.984-7.2-4.43-6.645-9.414-12.184-14.952-18.275-2.216-2.216-3.877-4.43-6.091-6.645-7.2-6.645-14.398-12.737-22.152-18.275-1.107-0.554-1.661-1.661-2.768-2.216-8.307-5.538-17.168-9.968-26.027-14.398-3.323-1.661-6.645-2.768-9.968-3.877-7.2-2.768-13.845-4.984-21.043-6.645-3.323-0.554-6.645-1.661-9.968-2.216-10.522-2.216-21.597-3.323-32.673-3.323s-21.597 1.107-32.673 3.323c-3.323 0.554-6.645 1.661-9.968 2.216-7.2 1.661-14.398 3.877-21.043 6.645-3.323 1.107-6.645 2.216-9.968 3.877-8.861 3.877-17.721 8.861-26.027 14.398-1.107 0.554-1.661 1.107-2.768 2.216-7.752 5.538-15.506 11.629-22.152 18.275-2.216 2.216-4.43 4.43-6.091 6.645-5.538 5.538-10.522 11.629-14.952 18.275-1.661 2.216-3.323 4.43-4.984 7.2-5.538 8.861-10.522 17.721-14.952 27.136 0 0 0 0 0 0s0 0 0 0.554h-27.689c-7.752 0-13.845-6.091-13.845-13.845zM290.487 858.113c-53.163 0-96.912-43.749-96.912-96.912 0-6.645 0.554-13.291 2.216-19.382 2.216-9.968 6.091-19.382 11.075-27.689 0.554-1.661 1.661-2.768 2.216-4.43 4.984-7.752 11.075-14.952 18.275-21.043 1.661-1.107 2.768-2.216 4.43-3.323 7.2-5.538 15.506-10.522 24.366-13.845 1.107 0 2.768-1.107 4.43-1.107 9.414-3.323 19.936-5.538 30.458-5.538s20.49 2.216 30.458 5.538c1.661 0 2.768 0.554 4.43 1.107 8.861 3.323 17.168 8.307 24.366 13.845 1.661 1.107 2.768 2.216 4.43 3.323 7.2 6.091 13.291 13.291 18.275 21.043 1.107 1.107 1.661 2.768 2.216 4.43 4.984 8.861 8.861 17.721 11.075 27.689 1.107 6.091 2.216 12.737 2.216 19.382 0 53.163-43.749 96.912-96.912 96.912zM733.513 858.113c-53.163 0-96.912-43.749-96.912-96.912 0-6.645 0.554-13.291 2.216-19.382 1.661-6.645 3.323-13.291 6.091-19.382 0 0 0-0.554 0-1.107 2.768-5.538 5.538-11.075 9.414-16.059 0.554-1.107 1.661-1.661 2.216-2.768 3.323-4.43 6.645-8.307 10.522-12.184 1.107-1.107 2.216-1.661 3.323-2.768 3.877-3.323 8.307-6.645 12.737-9.414 1.107-0.554 2.768-1.661 4.43-2.216 4.984-2.768 10.522-4.984 16.059-6.645 2.216-0.554 4.43-1.661 7.2-2.216 7.2-1.661 14.952-2.768 22.705-2.768 10.522 0 20.49 2.216 30.458 5.538 1.661 0 2.768 0.554 4.43 1.107 8.861 3.323 17.168 8.307 24.366 13.845 1.661 1.107 2.768 2.216 4.43 3.323 7.2 6.091 13.291 13.291 18.275 21.043 1.107 1.107 1.661 2.768 2.216 4.43 4.984 8.861 8.861 17.721 11.075 27.689 1.107 6.091 2.216 12.737 2.216 19.382 0 53.163-43.749 96.912-96.912 96.912zM705.823 470.466v-166.134h110.756c68.669 0 124.601 55.931 124.601 124.601v41.534h-235.356z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "truck"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 328,
                        "id" => 256,
                        "name" => "truck",
                        "prevSize" => 80,
                        "code" => 59904
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 5
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M168.104 1023.75v0c-44.45 0-86.559-17.546-118.726-49.128-65.505-65.505-65.505-171.363 0-236.867l322.256-322.256c-29.242-113.462 2.34-235.698 85.389-318.747 83.634-83.634 206.454-116.387 320.502-85.389 15.206 4.094 26.904 15.791 30.997 30.997s0 30.997-11.113 42.11l-143.29 143.29 30.413 111.707 111.707 30.413 143.29-143.29c11.113-11.113 27.488-15.206 42.11-11.113 15.206 4.094 26.904 15.791 30.997 30.997 30.997 114.047-1.169 236.867-85.389 320.502-83.050 83.050-205.285 114.633-318.747 85.389l-322.256 322.256c-31.582 31.582-73.692 49.128-118.142 49.128zM668.742 89.148c-56.146 4.678-109.369 29.242-150.308 70.183-66.674 66.674-88.314 164.345-56.146 254.413 5.849 15.791 1.755 33.922-10.527 45.619l-340.973 340.973c-30.997 30.997-30.997 81.88 0 112.878 15.206 15.206 35.091 23.395 56.732 23.395v0c21.055 0 41.524-8.188 56.146-23.395l340.973-340.973c12.282-12.282 29.828-15.791 45.619-10.527 90.069 31.582 187.739 10.527 254.413-56.146 40.941-40.941 64.919-94.162 70.183-150.308l-95.332 95.332c-11.113 11.113-27.488 15.206-42.695 11.113l-160.252-43.864c-15.206-4.094-26.904-15.791-30.997-30.997l-43.864-160.252c-4.094-15.206 0-31.582 11.113-42.695l95.332-95.332z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "wrench"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 325,
                        "id" => 255,
                        "name" => "wrench",
                        "prevSize" => 80,
                        "code" => 59903
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 6
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M495.693 730.292h32.612c77.849 0 140.443-64.699 140.443-144.651v-389.243c0-79.953-63.121-144.651-140.443-144.651h-32.612c-77.849 0-140.443 64.699-140.443 144.651v388.718c0 79.953 63.121 144.651 140.443 144.651zM434.151 196.397c0-36.294 27.877-65.751 61.542-65.751h32.612c34.19 0 61.542 29.456 61.542 65.751v388.718c0 36.294-27.877 65.751-61.542 65.751h-32.612c-34.19 0-61.542-29.456-61.542-65.751v-388.718zM814.452 374.712v222.5c0 147.807-116.773 267.736-263.003 275.101v99.941c0 21.566-17.885 39.45-39.45 39.45s-39.45-17.885-39.45-39.45v-99.941c-146.229-7.364-263.002-127.293-263.002-275.101v-222.5c0-21.566 17.885-39.45 39.45-39.45s39.45 17.885 39.45 39.45v222.5c0 108.883 88.896 197.779 198.304 197.779h51.023c109.409 0 198.304-88.896 198.304-197.779v-222.5c0-21.566 17.885-39.45 39.45-39.45s39.45 17.885 39.45 39.45z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "microphone"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 323,
                        "id" => 254,
                        "name" => "microphone",
                        "prevSize" => 80,
                        "code" => 59898
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 7
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M906.87 28.172h-85.757c-64.638 0-117.117 52.479-117.117 117.117v28.799l-607.985 130.557v-32.639c0-26.239-21.76-47.999-47.999-47.999s-47.999 21.76-47.999 47.999v447.99c0 26.239 21.76 47.999 47.999 47.999s47.999-21.76 47.999-47.999v-40.319l607.985 130.557v28.799c0 64.638 52.479 117.117 117.117 117.117h85.757c64.638 0 117.117-52.479 117.117-117.117v-693.744c0-64.638-52.479-117.117-117.117-117.117zM96.011 581.118v-178.556l607.985-130.557v439.669l-607.985-130.557zM927.989 839.033c0 11.52-9.6 21.119-21.119 21.119h-85.757c-11.52 0-21.119-9.6-21.119-21.119v-693.744c0-11.52 9.6-21.119 21.119-21.119h85.757c11.52 0 21.119 9.6 21.119 21.119v693.744zM574.079 872.311c-23.68 74.238-92.158 124.156-170.876 124.156-98.558 0-179.196-79.359-179.196-175.995 0-7.039 0-14.719 1.279-21.76 3.199-26.239 27.52-44.799 53.759-41.598s44.799 26.879 41.598 53.118c0 3.199 0 6.4 0 9.6 0 44.159 37.12 79.998 83.198 79.998 36.479 0 68.478-23.039 79.359-56.958 7.68-25.6 35.2-39.679 60.159-31.36 25.6 7.68 39.040 35.2 31.36 60.159z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "megaphone"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 322,
                        "id" => 253,
                        "name" => "megaphone",
                        "prevSize" => 80,
                        "code" => 59899
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 8
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1023.949 776.232c0 27.083-22.46 49.543-49.543 49.543h-805.246l80.59 80.59c19.156 19.156 19.156 50.864 0 70.022-9.909 9.909-22.46 14.533-35.010 14.533s-25.101-4.625-35.010-14.533l-165.145-165.145c-4.625-4.625-7.927-9.909-10.57-15.854-5.284-11.89-5.284-25.763 0-37.653 2.643-5.945 5.945-11.229 10.57-15.854l165.145-165.145c19.156-19.156 50.864-19.156 70.022 0s19.156 50.864 0 70.022l-80.59 80.59h805.246c27.083 0 49.543 22.46 49.543 49.543zM49.594 297.311h805.246l-80.59 80.59c-19.156 19.156-19.156 50.864 0 70.022 9.909 9.909 22.46 14.533 35.010 14.533s25.101-4.625 35.010-14.533l165.145-165.145c4.625-4.625 7.927-9.909 10.57-15.854 5.284-11.89 5.284-25.763 0-37.653-2.643-5.945-5.945-11.229-10.57-15.854l-165.145-165.145c-19.156-19.156-50.864-19.156-70.022 0s-19.156 50.864 0 70.022l80.59 80.59h-805.246c-27.083 0-49.543 22.46-49.543 49.543s22.46 49.543 49.543 49.543z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "arrow-right-arrow-left"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 321,
                        "id" => 252,
                        "name" => "arrow-right-arrow-left",
                        "prevSize" => 80,
                        "code" => 59900
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 9
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M609.223 618.817c-17.27 69.72-134.322 31.981-172.7 22.386l30.702-123.449c38.378 9.594 159.908 28.143 141.997 101.061zM509.441 348.895l-28.143 111.935c31.981 7.676 129.844 40.297 145.835-23.027 15.991-65.882-85.71-81.233-117.692-88.909zM1008.351 635.449c-68.44 273.76-346.039 440.703-620.44 372.904-273.76-68.44-441.343-346.039-372.904-619.8 68.44-274.4 346.039-440.703 620.44-372.904 273.76 68.44 441.343 346.039 372.904 619.8zM343.778 597.71c-2.559 7.035-9.594 17.27-25.586 13.432-2.559 0-40.937-10.235-40.937-10.235l-28.143 63.963 72.918 17.91c14.072 3.838 26.864 7.035 40.297 10.873l-23.027 92.747 55.648 14.072 23.027-92.106c15.351 4.478 30.062 7.676 44.774 11.513l-23.027 91.466 56.288 14.072 23.027-92.747c95.944 17.91 168.222 10.873 198.285-76.115 24.305-69.72-1.279-110.017-51.81-136.241 36.459-8.316 63.963-32.621 71.639-82.512 10.235-67.801-41.575-104.899-112.574-128.565l23.027-92.747-56.288-14.072-22.386 89.547c-14.711-3.838-30.062-7.035-45.413-10.873l22.386-90.188-55.648-14.072-23.027 92.106c-12.153-2.559-24.305-5.757-35.819-8.316l-77.395-19.829-14.711 60.126s40.937 9.594 40.937 10.235c22.386 5.757 26.224 20.468 26.224 32.621l-63.323 252.653z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "bitcoin"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 320,
                        "id" => 251,
                        "name" => "bitcoin",
                        "prevSize" => 80,
                        "code" => 59901
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 10
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M290.603 885.606h-83.024c-38.191 0-69.186-30.995-69.186-69.186v-664.188c0-38.191 30.995-69.186 69.186-69.186h207.559v262.908c0 22.693 18.819 41.512 41.512 41.512h265.675c5.535 16.051 20.48 27.674 38.745 27.674 22.693 0 41.512-18.819 41.512-41.512v-27.674c0-5.535-1.107-11.069-3.321-16.051s-4.981-9.409-8.856-13.284l-304.42-304.42c-3.875-3.875-8.302-6.642-13.284-8.856s-10.517-3.321-16.051-3.321h-249.071c-84.13 0-152.209 68.079-152.209 152.209v664.188c0 84.13 68.079 152.209 152.209 152.209h83.024c22.693 0 41.512-18.819 41.512-41.512s-18.819-41.512-41.512-41.512zM498.162 141.715l162.726 162.726h-162.726v-162.726zM933.206 477.13c-21.032-21.032-52.029-33.763-84.13-34.316-33.209-1.66-64.758 11.069-85.791 32.655l-353.68 354.234c-7.196 7.196-11.069 16.051-12.177 26.014l-9.963 123.429c-1.107 12.177 3.321 24.353 12.177 32.655 7.748 7.748 18.265 12.177 29.335 12.177 1.107 0 2.214 0 3.875 0l124.535-11.623c9.409-1.107 18.819-4.981 25.461-12.177l353.68-354.234c44.279-43.726 42.618-122.875-3.321-168.814zM877.858 587.275l-343.164 343.717-60.331 5.535 4.427-58.67 343.164-343.717c5.535-5.535 15.498-7.748 25.461-8.302 11.069 0 21.032 3.875 27.121 9.963 13.284 12.73 14.944 39.851 3.321 51.475z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "file-edit"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 319,
                        "id" => 250,
                        "name" => "file-edit",
                        "prevSize" => 80,
                        "code" => 59894
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 11
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1021.466 949.618l-177.541-496.402c-12.469-32.659-40.377-52.846-72.441-52.846s-59.379 20.189-73.035 54.035l-176.948 495.215c-8.313 23.158 3.563 48.691 26.72 57.003s48.691-3.563 57.003-26.72l36.814-102.724h258.296l36.814 102.724c6.531 18.408 23.752 29.689 42.158 29.689 4.75 0 10.094-0.594 14.845-2.376 23.158-8.313 35.033-33.846 26.72-57.003zM674.697 787.515l97.38-272.547 97.38 272.547h-194.761zM523.282 265.579c-134.195 211.981-255.327 340.238-402.585 425.743-7.125 4.157-14.845 5.938-21.97 5.938-15.438 0-30.283-7.72-38.595-21.97-12.469-21.376-5.344-48.691 16.032-60.566 124.694-72.441 226.826-176.354 341.425-348.55h-373.489c-24.345 0-44.534-20.189-44.534-44.534s20.189-44.534 44.534-44.534h222.669v-117.569c0-24.345 20.189-44.534 44.534-44.534s44.534 20.189 44.534 44.534v117.569h222.669c24.345 0 44.534 20.189 44.534 44.534s-20.189 44.534-44.534 44.534h-55.816zM525.657 697.26c-7.72 0-15.438-1.781-22.563-5.938-38.595-22.563-76.004-47.502-111.038-73.63-19.595-14.845-23.752-42.752-8.907-62.347s42.752-23.752 62.347-8.907c32.064 24.345 67.097 46.909 102.724 67.691 21.376 12.469 28.502 39.784 16.032 61.16-8.313 14.251-23.158 21.97-38.595 21.97z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "language"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 318,
                        "id" => 249,
                        "name" => "language",
                        "prevSize" => 80,
                        "code" => 59895
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 12
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M696.881 725.324c-23.323 0-42.665 19.342-42.665 42.665v85.33c0 39.252-31.856 71.108-71.108 71.108h-426.648c-39.252 0-71.108-31.856-71.108-71.108v-682.637c0-39.252 31.856-71.108 71.108-71.108h184.881v270.211c0 23.323 19.342 42.665 42.665 42.665h270.211v71.108c0 23.323 19.342 42.665 42.665 42.665s42.665-19.342 42.665-42.665v-113.772c0-11.377-4.55-22.186-12.515-30.149l-312.876-312.876c-7.964-7.964-18.773-12.515-30.149-12.515h-227.546c-86.467 0-156.437 69.97-156.437 156.437v682.637c0 86.467 69.97 156.437 156.437 156.437h426.648c86.467 0 156.437-69.97 156.437-156.437v-85.33c0-23.323-19.342-42.665-42.665-42.665zM426.67 159.872l167.246 167.246h-167.246v-167.246zM1020.565 642.27c-2.276 5.12-5.12 9.67-9.102 13.653l-170.659 170.659c-8.533 8.533-19.342 12.515-30.149 12.515s-21.616-3.982-30.149-12.515c-16.497-16.497-16.497-43.802 0-60.3l97.845-97.845h-494.343c-23.323 0-42.665-19.342-42.665-42.665s19.342-42.665 42.665-42.665h494.343l-97.845-97.845c-16.497-16.497-16.497-43.802 0-60.3s43.802-16.497 60.3 0l170.659 170.659c3.982 3.982 6.826 8.533 9.102 13.653 4.55 10.24 4.55 22.186 0 32.425z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "file-export"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 317,
                        "id" => 248,
                        "name" => "file-export",
                        "prevSize" => 80,
                        "code" => 59896
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 13
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M537.031 668.444h-494.364c-23.324 0-42.667-19.343-42.667-42.667s19.343-42.667 42.667-42.667h494.364l-97.849-97.849c-16.497-16.497-16.497-43.804 0-60.303s43.804-16.497 60.303 0l170.667 170.667c3.983 3.983 6.827 8.533 9.103 13.653 4.551 10.24 4.551 22.187 0 32.427-2.276 5.12-5.12 9.671-9.103 13.653l-170.667 170.667c-8.533 8.533-19.343 12.516-30.151 12.516s-21.617-3.983-30.151-12.516c-16.497-16.497-16.497-43.804 0-60.303l97.849-97.849zM1024 369.777v483.556c0 86.471-69.973 156.444-156.444 156.444h-426.667c-86.471 0-156.444-69.973-156.444-156.444v-56.889c0-23.324 19.343-42.667 42.667-42.667s42.667 19.343 42.667 42.667v56.889c0 39.253 31.857 71.111 71.111 71.111h426.667c39.253 0 71.111-31.857 71.111-71.111v-440.889h-270.223c-23.324 0-42.667-19.343-42.667-42.667v-270.223h-184.889c-39.253 0-71.111 31.857-71.111 71.111v284.444c0 23.324-19.343 42.667-42.667 42.667s-42.667-19.343-42.667-42.667v-284.444c0-86.471 69.973-156.444 156.444-156.444h227.556c11.377 0 22.187 4.551 30.151 12.516l312.889 312.889c7.964 7.964 12.516 18.773 12.516 30.151zM711.111 327.111h167.253l-167.253-167.253v167.253z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "file-import"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 316,
                        "id" => 247,
                        "name" => "file-import",
                        "prevSize" => 80,
                        "code" => 59897
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 14
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M894.076 334.712l-321.811-321.811c-8.191-8.191-19.309-12.873-31.010-12.873h-263.299c-88.936 0-160.905 71.968-160.905 160.905v702.132c0 88.936 71.968 160.905 160.905 160.905h468.087c88.936 0 160.905-71.968 160.905-160.905v-497.344c0-11.702-4.68-22.819-12.873-31.010zM585.138 149.817l172.022 172.022h-172.022v-172.022zM746.044 936.204h-468.087c-40.373 0-73.138-32.766-73.138-73.138v-702.132c0-40.373 32.766-73.138 73.138-73.138h219.416v277.928c0 23.989 19.894 43.883 43.883 43.883h277.928v453.46c0 40.373-32.766 73.138-73.138 73.138zM758.916 554.128l-87.766 292.554c-5.266 17.553-21.65 30.426-40.373 31.010-0.586 0-1.17 0-1.755 0-18.139 0-33.937-11.118-40.958-27.5l-76.065-190.745-76.065 190.745c-7.021 17.553-23.989 28.671-42.713 27.5-18.723-0.586-34.521-13.457-40.373-31.010l-87.766-292.554c-7.021-23.405 6.436-47.979 29.255-54.415 23.405-7.021 47.394 6.436 54.415 29.255l51.49 172.022 70.213-176.118c13.457-33.351 68.458-33.351 81.331 0l70.213 176.118 51.49-172.022c7.021-23.405 31.596-36.276 54.415-29.255 23.405 7.021 36.276 31.596 29.255 54.415z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "file-word"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 311,
                        "id" => 246,
                        "name" => "file-word",
                        "prevSize" => 80,
                        "code" => 59889
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 15
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M950.832 263.329h-81.915c23.405-28.085 38.032-63.192 38.032-102.395 0-88.936-71.968-160.905-160.905-160.905-98.298 0-184.895 52.074-234.044 129.309-49.149-77.234-135.746-129.309-234.044-129.309-88.936 0-160.905 71.968-160.905 160.905 0 39.203 14.628 74.309 38.032 102.395h-81.915c-40.373 0-73.138 32.766-73.138 73.138v146.278c0 35.107 25.16 63.192 58.511 70.213v397.874c0 40.373 32.766 73.138 73.138 73.138h760.643c40.373 0 73.138-32.766 73.138-73.138v-397.874c33.351-7.021 58.511-35.107 58.511-70.213v-146.278c0-40.373-32.766-73.138-73.138-73.138zM936.204 468.117h-380.321v-117.021h380.321v117.021zM746.044 87.796c40.373 0 73.138 32.766 73.138 73.138s-32.766 73.138-73.138 73.138h-184.895c19.894-83.67 95.373-146.278 184.895-146.278zM277.956 87.796c89.522 0 165.001 62.606 184.895 146.278h-184.895c-40.373 0-73.138-32.766-73.138-73.138s32.766-73.138 73.138-73.138zM87.796 351.095h380.321v117.021h-380.321v-117.021zM146.306 555.883h321.811v380.321h-321.811v-380.321zM877.694 936.204h-321.811v-380.321h321.811v380.321z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "gift"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 312,
                        "id" => 245,
                        "name" => "gift",
                        "prevSize" => 80,
                        "code" => 59890
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 16
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M417.791 482.743c0-23.991 19.896-43.886 43.886-43.886h73.143v-73.143c0-23.991 19.896-43.886 43.886-43.886s43.886 19.896 43.886 43.886v73.143h73.143c23.991 0 43.886 19.896 43.886 43.886s-19.896 43.886-43.886 43.886h-73.143v73.143c0 23.991-19.896 43.886-43.886 43.886s-43.886-19.896-43.886-43.886v-73.143h-73.143c-23.991 0-43.886-19.896-43.886-43.886zM468.114 906.976c0 48.567-39.205 87.772-87.772 87.772s-87.772-39.205-87.772-87.772 39.205-87.772 87.772-87.772 87.772 39.205 87.772 87.772zM848.461 906.976c0 48.567-39.205 87.772-87.772 87.772s-87.772-39.205-87.772-87.772 39.205-87.772 87.772-87.772 87.772 39.205 87.772 87.772zM1022.836 259.215l-117.029 468.119c-4.681 19.31-22.235 33.354-42.716 33.354h-585.15c-21.065 0-39.205-15.213-43.301-36.279l-110.593-607.385h-80.165c-23.991 0-43.886-19.896-43.886-43.886s19.896-43.886 43.886-43.886h117.029c21.065 0 39.205 15.213 43.301 36.279l25.162 139.266h750.746c13.458 0 26.332 6.436 34.523 16.969s11.118 24.576 8.192 37.45zM923.945 292.569h-678.773l69.048 380.347h514.346l94.794-380.347z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "cart-plus"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 313,
                        "id" => 244,
                        "name" => "cart-plus",
                        "prevSize" => 80,
                        "code" => 59891
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 17
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1023.898 103.121v369.207c0 56.948-46.711 103.659-103.659 103.659h-103.019v-575.886h103.019c57.589 0 103.659 46.071 103.659 103.019zM85.844 79.445l-84.463 479.905c-10.238 58.868 34.553 112.617 94.702 112.617h305.86v223.955c0 70.386 57.589 127.974 127.335 127.974h5.759c25.595 0 48.631-15.357 58.868-39.033l174.685-408.879v-575.886s-588.683 0-588.683 0c-46.711 0-86.383 33.274-94.702 79.345z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "thumbs-down-fill"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 314,
                        "id" => 243,
                        "name" => "thumbs-down-fill",
                        "prevSize" => 80,
                        "code" => 59892
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 18
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M207.428 448.014v575.872h-103.017c-57.587 0-103.657-46.070-103.657-103.017v-369.198c0-56.947 46.71-103.657 103.657-103.657h103.017zM927.907 352.035h-305.852v-223.95c0-70.384-57.587-127.971-127.332-127.971h-5.759c-25.595 0-48.63 15.357-58.866 39.032l-174.681 408.869v575.872s588.668 0 588.668 0c46.71 0 86.381-33.273 94.699-79.343l84.461-479.893c10.238-58.866-34.552-112.614-94.699-112.614z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "thumbs-up-fill"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 315,
                        "id" => 242,
                        "name" => "thumbs-up-fill",
                        "prevSize" => 80,
                        "code" => 59893
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 19
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1020.467 528.967c-2.341 5.266-5.266 9.946-9.362 14.042l-146.281 146.281c-8.774 8.774-19.895 12.873-31.011 12.873s-22.234-4.096-31.011-12.873c-16.967-16.967-16.967-45.053 0-62.024l71.384-71.384h-318.304v318.304l71.384-71.384c16.967-16.967 45.053-16.967 62.024 0s16.967 45.053 0 62.024l-146.281 146.281c-4.096 4.096-8.774 7.021-14.042 9.362s-11.117 3.513-16.967 3.513-11.701-1.17-16.967-3.513c-5.266-2.341-9.946-5.266-14.042-9.362l-146.281-146.281c-16.967-16.967-16.967-45.053 0-62.024s45.053-16.967 62.024 0l71.384 71.384v-318.304h-318.304l71.384 71.384c16.967 16.967 16.967 45.053 0 62.024-8.774 8.774-19.895 12.873-31.011 12.873s-22.234-4.096-31.011-12.873l-146.281-146.281c-4.096-4.096-7.021-8.774-9.362-14.042-4.681-10.532-4.681-22.82 0-33.35 2.341-5.266 5.266-9.946 9.362-14.042l146.281-146.281c16.967-16.967 45.053-16.967 62.024 0s16.967 45.053 0 62.024l-71.384 71.384h318.304v-318.889l-71.384 71.384c-16.967 16.967-45.053 16.967-62.024 0s-16.967-45.053 0-62.024l146.281-146.281c4.096-4.096 8.774-7.021 14.042-9.362 10.532-4.681 22.82-4.681 33.35 0 5.266 2.341 9.946 5.266 14.042 9.362l146.281 146.281c16.967 16.967 16.967 45.053 0 62.024-8.774 8.774-19.895 12.873-31.011 12.873s-22.234-4.096-31.011-12.873l-71.384-71.384v318.304h318.304l-71.384-71.384c-16.967-16.967-16.967-45.053 0-62.024s45.053-16.967 62.024 0l146.281 146.281c4.096 4.096 7.021 8.774 9.362 14.042 4.681 10.532 4.681 22.82 0 33.35z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "arrows-alt"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 310,
                        "id" => 241,
                        "name" => "arrows-alt",
                        "prevSize" => 80,
                        "code" => 59888
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 20
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M695.789 315.083h-367.579c-14.704 0-26.255-11.553-26.255-26.255v-78.767c0-14.704 11.553-26.255 26.255-26.255h367.579c14.704 0 26.255 11.553 26.255 26.255v78.767c0 14.704-11.553 26.255-26.255 26.255zM722.045 472.617v-52.512c0-14.704-11.553-26.255-26.255-26.255h-52.512c-14.704 0-26.255 11.553-26.255 26.255v52.512c0 14.704 11.553 26.255 26.255 26.255h52.512c14.704 0 26.255-11.553 26.255-26.255zM406.978 472.617v-52.512c0-14.704-11.553-26.255-26.255-26.255h-52.512c-14.704 0-26.255 11.553-26.255 26.255v52.512c0 14.704 11.553 26.255 26.255 26.255h52.512c14.704 0 26.255-11.553 26.255-26.255zM564.512 472.617v-52.512c0-14.704-11.553-26.255-26.255-26.255h-52.512c-14.704 0-26.255 11.553-26.255 26.255v52.512c0 14.704 11.553 26.255 26.255 26.255h52.512c14.704 0 26.255-11.553 26.255-26.255zM722.045 643.278v-52.512c0-14.704-11.553-26.255-26.255-26.255h-52.512c-14.704 0-26.255 11.553-26.255 26.255v52.512c0 14.704 11.553 26.255 26.255 26.255h52.512c14.704 0 26.255-11.553 26.255-26.255zM406.978 643.278v-52.512c0-14.704-11.553-26.255-26.255-26.255h-52.512c-14.704 0-26.255 11.553-26.255 26.255v52.512c0 14.704 11.553 26.255 26.255 26.255h52.512c14.704 0 26.255-11.553 26.255-26.255zM564.512 643.278v-52.512c0-14.704-11.553-26.255-26.255-26.255h-52.512c-14.704 0-26.255 11.553-26.255 26.255v52.512c0 14.704 11.553 26.255 26.255 26.255h52.512c14.704 0 26.255-11.553 26.255-26.255zM722.045 813.939v-52.512c0-14.704-11.553-26.255-26.255-26.255h-52.512c-14.704 0-26.255 11.553-26.255 26.255v52.512c0 14.704 11.553 26.255 26.255 26.255h52.512c14.704 0 26.255-11.553 26.255-26.255zM564.512 813.939v-52.512c0-14.704-11.553-26.255-26.255-26.255h-210.045c-14.704 0-26.255 11.553-26.255 26.255v52.512c0 14.704 11.553 26.255 26.255 26.255h210.045c14.704 0 26.255-11.553 26.255-26.255zM892.706 905.834v-787.668c0-65.114-53.036-118.15-118.15-118.15h-525.113c-65.114 0-118.15 53.036-118.15 118.15v787.668c0 65.114 53.036 118.15 118.15 118.15h525.113c65.114 0 118.15-53.036 118.15-118.15zM774.556 78.782c21.529 0 39.383 17.854 39.383 39.383v787.668c0 21.529-17.854 39.383-39.383 39.383h-525.113c-21.529 0-39.383-17.854-39.383-39.383v-787.668c0-21.529 17.854-39.383 39.383-39.383h525.113z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "calculator"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 308,
                        "id" => 240,
                        "name" => "calculator",
                        "prevSize" => 80,
                        "code" => 59887
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 21
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M117.634 249.75l80.59-80.59v375.869c0 27.083 22.46 49.543 49.543 49.543s49.543-22.46 49.543-49.543v-375.869l80.59 80.59c9.909 9.909 22.46 14.533 35.010 14.533s25.101-4.625 35.010-14.533c19.156-19.156 19.156-50.864 0-70.022l-165.145-165.145c-4.625-4.625-9.909-7.927-15.854-10.57-11.89-5.284-25.763-5.284-37.653 0-5.945 2.643-11.229 5.945-15.854 10.57l-165.145 165.145c-19.156 19.156-19.156 50.864 0 70.022s50.864 19.156 70.022 0z",
                            "M906.366 774.25l-80.59 80.59v-375.869c0-27.083-22.46-49.543-49.543-49.543s-49.543 22.46-49.543 49.543v375.869l-80.59-80.59c-19.156-19.156-50.864-19.156-70.022 0s-19.156 50.864 0 70.022l165.145 165.145c4.625 4.625 9.909 7.927 15.854 10.57s12.552 3.963 19.156 3.963 13.211-1.321 19.156-3.963c5.945-2.643 11.229-5.945 15.854-10.57l165.145-165.145c19.156-19.156 19.156-50.864 0-70.022s-50.864-19.156-70.022 0z",
                            "M976.388 117.634c19.156-19.156 19.156-50.864 0-70.022s-50.864-19.156-70.022 0l-80.59 80.59v-78.608c0-27.083-22.46-49.543-49.543-49.543s-49.543 22.46-49.543 49.543v177.695l-679.075 679.075c-19.156 19.156-19.156 50.864 0 70.022 9.909 9.909 22.46 14.533 35.010 14.533s25.101-4.625 35.010-14.533l80.59-80.59v78.608c0 27.083 22.46 49.543 49.543 49.543s49.543-22.46 49.543-49.543v-177.695l679.075-679.075z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "sort-alt-slash"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 306,
                        "id" => 239,
                        "name" => "sort-alt-slash",
                        "prevSize" => 80,
                        "code" => 59886
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 22
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1020.451 495.033c-2.348-5.441-5.502-10.097-9.37-14.051l-234.032-234.032c-8.033-8.604-19.443-13.967-32.105-13.967-24.235 0-43.882 19.647-43.882 43.882 0 12.663 5.363 24.072 13.941 32.081l0.026 0.023 159.147 159.147h-724.353l159.147-159.147c7.297-7.815 11.777-18.343 11.777-29.915 0-24.235-19.647-43.882-43.882-43.882-11.574 0-22.1 4.48-29.942 11.802l0.026-0.023-234.040 234.040c-3.859 3.945-7.014 8.601-9.247 13.748l-0.114 0.295c-2.222 5-3.515 10.833-3.515 16.967s1.293 11.968 3.623 17.242l-0.108-0.273c2.348 5.441 5.502 10.097 9.37 14.051l234.032 234.032c7.939 7.929 18.902 12.834 31.010 12.834s23.071-4.904 31.011-12.834v0c7.929-7.939 12.834-18.902 12.834-31.010s-4.904-23.071-12.834-31.011v0l-159.147-159.147h724.353l-159.147 159.147c-7.929 7.939-12.834 18.902-12.834 31.010s4.904 23.071 12.834 31.011v0c7.939 7.929 18.902 12.834 31.010 12.834s23.071-4.904 31.011-12.834v0l234.040-234.040c3.859-3.945 7.014-8.601 9.247-13.748l0.114-0.295c2.222-5 3.515-10.833 3.515-16.967s-1.293-11.968-3.623-17.242l0.108 0.273z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "arrows-h"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 305,
                        "id" => 238,
                        "name" => "arrows-h",
                        "prevSize" => 80,
                        "code" => 59884
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 23
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M528.967 1020.451c5.441-2.348 10.097-5.502 14.051-9.37l234.032-234.032c7.297-7.815 11.777-18.343 11.777-29.915 0-24.235-19.647-43.882-43.882-43.882-11.574 0-22.1 4.48-29.942 11.802l0.026-0.023-159.147 159.147v-724.353l159.147 159.147c7.815 7.297 18.343 11.777 29.915 11.777 24.235 0 43.882-19.647 43.882-43.882 0-11.574-4.48-22.1-11.802-29.942l0.023 0.026-234.040-234.040c-3.945-3.859-8.601-7.014-13.748-9.247l-0.295-0.114c-5-2.222-10.833-3.515-16.967-3.515s-11.968 1.293-17.242 3.623l0.273-0.108c-5.441 2.348-10.097 5.502-14.051 9.37l-234.032 234.032c-7.929 7.939-12.834 18.902-12.834 31.010s4.904 23.071 12.834 31.011v0c7.939 7.929 18.902 12.834 31.010 12.834s23.071-4.904 31.011-12.834v0l159.147-159.147v724.353l-159.147-159.147c-7.939-7.929-18.902-12.834-31.010-12.834s-23.071 4.904-31.011 12.834v0c-7.929 7.939-12.834 18.902-12.834 31.010s4.904 23.071 12.834 31.011v0l234.040 234.040c3.945 3.859 8.601 7.014 13.748 9.247l0.295 0.114c5 2.222 10.833 3.515 16.967 3.515s11.968-1.293 17.242-3.623l-0.273 0.108z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "arrows-v"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 304,
                        "id" => 237,
                        "name" => "arrows-v",
                        "prevSize" => 80,
                        "code" => 59885
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 24
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M836.060 936.086h-552.19l116.989-164.955c5.016-7 8.065-15.709 8.189-25.123v-190.138h190.108c24.229 0 43.871-19.642 43.871-43.871s-19.642-43.871-43.871-43.871v0h-191.863v-190.108c-0.156-2.816-0.245-6.11-0.245-9.427 0-99.824 80.924-180.749 180.749-180.749 1.732 0 3.459 0.025 5.178 0.073l-0.254-0.005c3.537-0.243 7.666-0.381 11.827-0.381 101.439 0 183.673 82.233 183.673 183.673 0 5.695-0.259 11.328-0.766 16.89l0.052-0.716v58.495c0 24.229 19.642 43.871 43.871 43.871s43.871-19.642 43.871-43.871v0-58.495c0.352-5.164 0.553-11.193 0.553-17.269 0-149.252-120.994-270.246-270.246-270.246-4.515 0-9.003 0.111-13.464 0.329l0.628-0.025c-1.804-0.044-3.929-0.069-6.060-0.069-147.637 0-267.321 119.684-267.321 267.321 0 3.728 0.077 7.436 0.228 11.127l-0.018-0.528v190.108h-131.613c-24.229 0-43.871 19.642-43.871 43.871s19.642 43.871 43.871 43.871v0h131.613v175.484l-155.595 223.45c-3.958 6.515-6.3 14.39-6.3 22.813s2.343 16.298 6.411 23.010l-0.111-0.197c7.358 14.007 21.805 23.398 38.447 23.398 0.056 0 0.112 0 0.169 0h633.489c24.229 0 43.871-19.642 43.871-43.871s-19.642-43.871-43.871-43.871v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "pound"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 303,
                        "id" => 236,
                        "name" => "pound",
                        "prevSize" => 80,
                        "code" => 59883
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 25
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M727.036 469.12l-70.398-16 55.038 78.078v242.556l187.516-156.157v-265.595l-86.398 30.719-85.758 86.398z",
                            "M289.285 469.12l-86.398-86.398-85.758-30.719v265.595l187.516 156.157v-242.556l55.038-78.078-70.398 16z",
                            "M586.238 476.8h-156.157l-39.040-23.68-62.718 94.078v351.993l46.72 69.759 55.038 55.038h156.157l55.038-55.038 46.72-69.759v-351.993l-62.718-94.078-39.040 23.68z",
                            "M711.676 922.231l101.117-101.758v-101.117l-101.117 85.758v117.118z",
                            "M202.886 820.473l101.758 101.758v-117.118l-101.758-85.758v101.117z",
                            "M453.122 445.442h39.679v-445.431h-86.398l-62.079 147.837-282.234-23.040 47.359 195.836 335.993 124.797h7.68z",
                            "M671.997 147.848l-62.079-147.837h-86.398v447.991h52.479l335.993-127.997 47.999-191.996z",
                            "M852.474 109.449l-110.078-109.438h-109.438l55.038 124.797 164.476-15.36z",
                            "M382.722 0.011h-109.438l-109.438 109.438 164.476 15.36 54.399-124.797z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "prime"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 307,
                        "id" => 235,
                        "name" => "prime",
                        "prevSize" => 80,
                        "code" => 59882
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 26
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M589.605 64.373v-18.004c-0.345-25.576-20.987-46.218-46.53-46.563h-0.033c-300.373 1.794-543.179 245.708-543.179 546.331 0 98.823 26.237 191.517 72.126 271.496l-1.409-2.663c8.24 13.842 23.126 22.972 40.145 22.972 0.074 0 0.148 0 0.221 0h-0.012c8.464-0.017 16.386-2.321 23.186-6.325l-0.215 0.116 18.004-9.313c88.223 122.529 230.468 201.375 391.129 201.375 265.391 0 480.531-215.14 480.531-480.531 0-248.992-189.376-453.753-431.953-478.105l-2.014-0.163zM496.478 95.416v420.93l-365.676 209.844c-24.009-53.406-37.995-115.765-37.995-181.391 0-232.603 175.709-424.166 401.636-449.201l2.036-0.183zM543.042 931.068c-126.56-0.365-238.867-61.070-309.71-154.848l-0.712-0.982 333.392-191.84c14.165-7.849 23.596-22.711 23.596-39.775 0-0.204-0.001-0.407-0.004-0.611v0.031-384.921c192.214 25.131 339.099 187.876 339.099 384.928 0 213.47-172.379 386.677-385.534 388.018h-0.128z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "chart-pie"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 301,
                        "id" => 234,
                        "name" => "chart-pie",
                        "prevSize" => 80,
                        "code" => 59881
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 27
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M399.361 614.401c-28.277 0-51.2-22.923-51.2-51.2s22.923-51.2 51.2-51.2c28.276 0 51.199 22.923 51.199 51.2v0c0 28.276-22.923 51.2-51.199 51.2v0zM1023.999 512c0 282.77-229.23 512-512 512s-512-229.23-512-512c0-282.77 229.23-512 512-512v0c282.769 0 512 229.23 512 512v0zM750.721 426.88c-18.359 1.113-34.69 8.976-46.715 21.114l-0.006 0.006c-49.923-33.418-111.167-53.62-177.080-54.397l-0.199-0.001 35.84-161.921 114.56 25.601c-0.003 0.191-0.005 0.416-0.005 0.641 0 27.924 22.636 50.56 50.56 50.56 0.002 0 0.003 0 0.005 0v0c28.355-0.361 51.2-23.43 51.2-51.836 0-0.001 0-0.003 0-0.004v0c0.016-0.492 0.027-1.071 0.027-1.653 0-27.924-22.637-50.56-50.561-50.56-20.408 0-37.99 12.090-45.978 29.498l-0.129 0.315-128-28.16c-0.688-0.138-1.481-0.217-2.292-0.217-5.656 0-10.412 3.862-11.77 9.093l-0.018 0.084-39.679 178.56c-66.101 0.974-127.301 21.143-178.501 55.164l1.221-0.764c-12.464-12.858-29.895-20.838-49.191-20.838-37.821 0-68.48 30.66-68.48 68.48 0 26.584 15.148 49.632 37.286 60.978l0.386 0.18c-0.468 4.795-0.733 10.366-0.733 16.001s0.267 11.205 0.787 16.701l-0.054-0.702c0 108.16 122.239 196.48 272.64 196.48s272.64-88.32 272.64-196.48c0-0.084 0-0.183 0-0.282 0-11.484-1.399-22.639-4.039-33.308l0.2 0.95c20.889-11.994 34.732-34.174 34.732-59.588 0-36.756-28.957-66.749-65.302-68.408l-0.15-0.006zM608.64 666.88c-27.226 17.349-60.409 27.649-96 27.649s-68.773-10.302-96.732-28.086l0.732 0.435c-2.268-2.080-5.305-3.355-8.64-3.355s-6.372 1.275-8.649 3.365l0.009-0.009c-2.426 2.23-3.939 5.418-3.939 8.959s1.514 6.729 3.93 8.952l0.009 0.008c31.918 21.918 71.391 35.004 113.921 35.004s82.002-13.086 114.611-35.451l-0.692 0.447c2.426-2.231 3.939-5.418 3.939-8.959s-1.514-6.729-3.93-8.952l-0.009-0.007c-2.337-2.457-5.63-3.984-9.28-3.984s-6.943 1.527-9.274 3.978l-0.005 0.006zM624.639 512c-28.277 0-51.2 22.923-51.2 51.2s22.923 51.2 51.2 51.2c28.276 0 51.199-22.923 51.199-51.2v0c0-28.277-22.923-51.2-51.199-51.2v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "reddit"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 299,
                        "id" => 233,
                        "name" => "reddit",
                        "prevSize" => 80,
                        "code" => 59880
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 28
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M367.461 188.397c-7.939-7.93-18.905-12.836-31.014-12.836s-23.074 4.905-31.015 12.836v0l-292.589 292.589c-7.93 7.939-12.836 18.905-12.836 31.014s4.905 23.074 12.836 31.015v0l292.589 292.589c7.939 7.93 18.905 12.836 31.014 12.836s23.074-4.905 31.015-12.836v0c7.93-7.939 12.836-18.905 12.836-31.014s-4.905-23.074-12.836-31.015v0l-261.574-261.574 261.574-261.574c7.93-7.939 12.836-18.905 12.836-31.014s-4.905-23.074-12.836-31.015v0z",
                            "M1011.156 480.986l-292.589-292.589c-7.817-7.298-18.345-11.779-29.92-11.779-24.239 0-43.889 19.649-43.889 43.889 0 11.575 4.481 22.104 11.803 29.946l-0.023-0.027 261.574 261.574-261.574 261.574c-7.93 7.939-12.836 18.905-12.836 31.014s4.905 23.074 12.836 31.015v0c7.939 7.93 18.905 12.836 31.014 12.836s23.074-4.905 31.015-12.836v0l292.589-292.589c7.93-7.939 12.836-18.905 12.836-31.014s-4.905-23.074-12.836-31.015v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "code"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 298,
                        "id" => 232,
                        "name" => "code",
                        "prevSize" => 80,
                        "code" => 59879
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 29
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M936.767 0.034c-27.214 0.367-49.178 22.331-49.545 49.509v160.562l-55.49-55.49c-86.69-87.405-206.835-141.515-339.617-141.515-209.345 0-387.277 134.501-452.092 321.801l-1.011 3.36c-2.53 5.71-4.002 12.369-4.002 19.374 0 21.825 14.301 40.308 34.044 46.591l0.347 0.094c2.483 0.454 5.34 0.712 8.257 0.712s5.775-0.259 8.55-0.756l-0.293 0.043c21.606-0.226 39.922-14.066 46.794-33.339l0.108-0.351c19.528-56.988 50.528-105.653 90.48-145.309l0.022-0.022c68.806-68.546 163.72-110.925 268.534-110.925s199.729 42.378 268.547 110.936l55.478 55.478h-159.205c-27.363 0-49.545 22.182-49.545 49.545s22.182 49.545 49.545 49.545v0h280.095c0.198 0.003 0.432 0.005 0.666 0.005 26.997 0 48.884-21.887 48.884-48.884 0-0.234-0.002-0.468-0.005-0.7v0.036-280.755c0-27.363-22.182-49.545-49.545-49.545v0z",
                            "M953.281 622.981c-5.442-2.202-11.755-3.479-18.366-3.479-22.122 0-40.903 14.308-47.591 34.174l-0.104 0.355c-19.528 56.988-50.528 105.653-90.48 145.309l-0.022 0.022c-68.806 68.546-163.72 110.925-268.534 110.925s-199.729-42.378-268.547-110.936l-55.478-55.478h163.169c27.363 0 49.545-22.182 49.545-49.545s-22.182-49.545-49.545-49.545v0h-280.095c-0.198-0.003-0.432-0.005-0.666-0.005-26.997 0-48.884 21.887-48.884 48.884 0 0.234 0.002 0.468 0.005 0.7v-0.036 280.095c0 27.363 22.182 49.545 49.545 49.545s49.545-22.182 49.545-49.545v0-160.526l55.49 55.49c86.69 87.405 206.835 141.515 339.617 141.515 209.345 0 387.277-134.501 452.092-321.801l1.011-3.36c1.72-4.786 2.714-10.307 2.714-16.060 0-21.835-14.317-40.328-34.076-46.602l-0.347-0.094z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "sync"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 297,
                        "id" => 231,
                        "name" => "sync",
                        "prevSize" => 80,
                        "code" => 59878
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 30
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M950.857 292.571h-175.543v-29.257c0-145.425-117.889-263.314-263.314-263.314s-263.314 117.889-263.314 263.314v0 29.257h-175.543c-40.395 0-73.142 32.747-73.142 73.142v0 497.372c0 88.87 72.044 160.914 160.914 160.914v0h702.171c88.87 0 160.914-72.044 160.914-160.914v0-497.372c0-40.395-32.747-73.142-73.142-73.142v0zM336.457 263.315c0-96.949 78.594-175.543 175.543-175.543s175.543 78.594 175.543 175.543v0 29.257h-351.086zM936.228 863.086c0 40.395-32.747 73.142-73.142 73.142v0h-702.171c-40.395 0-73.142-32.747-73.142-73.142v0-482.743h160.914v131.657c0 24.237 19.648 43.886 43.886 43.886s43.886-19.648 43.886-43.886v0-131.657h351.086v131.657c0 24.237 19.648 43.886 43.886 43.886s43.886-19.648 43.886-43.886v0-131.657h160.914z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "shopping-bag"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 296,
                        "id" => 230,
                        "name" => "shopping-bag",
                        "prevSize" => 80,
                        "code" => 59877
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 31
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1023.969 301.19v-180.695c0-33.265-26.967-60.232-60.232-60.232v0h-903.474c-33.265 0-60.232 26.967-60.232 60.232v0 180.695c0 33.265 26.967 60.232 60.232 60.232v0c-33.265 0-60.232 26.967-60.232 60.232v0 180.695c0 33.265 26.967 60.232 60.232 60.232v0c-33.265 0-60.232 26.967-60.232 60.232v0 180.695c0 33.265 26.967 60.232 60.232 60.232v0h903.474c33.265 0 60.232-26.967 60.232-60.232v0-180.695c0-33.265-26.967-60.232-60.232-60.232v0c33.265 0 60.232-26.967 60.232-60.232v0-180.695c0-33.265-26.967-60.232-60.232-60.232v0c33.265 0 60.232-26.967 60.232-60.232v0zM963.737 903.505h-903.474v-180.695h903.474zM963.737 602.347h-903.474v-180.695h903.474zM963.737 301.19h-903.474v-180.695h903.474z",
                            "M210.842 210.842c0 24.949-20.225 45.174-45.174 45.174s-45.174-20.225-45.174-45.174c0-24.949 20.225-45.174 45.174-45.174s45.174 20.225 45.174 45.174z",
                            "M361.421 210.842c0 24.949-20.225 45.174-45.174 45.174s-45.174-20.225-45.174-45.174c0-24.949 20.225-45.174 45.174-45.174s45.174 20.225 45.174 45.174z",
                            "M210.842 512c0 24.949-20.225 45.174-45.174 45.174s-45.174-20.225-45.174-45.174c0-24.949 20.225-45.174 45.174-45.174s45.174 20.225 45.174 45.174z",
                            "M361.421 512c0 24.949-20.225 45.174-45.174 45.174s-45.174-20.225-45.174-45.174c0-24.949 20.225-45.174 45.174-45.174s45.174 20.225 45.174 45.174z",
                            "M210.842 813.158c0 24.949-20.225 45.174-45.174 45.174s-45.174-20.225-45.174-45.174c0-24.949 20.225-45.174 45.174-45.174s45.174 20.225 45.174 45.174z",
                            "M361.421 813.158c0 24.949-20.225 45.174-45.174 45.174s-45.174-20.225-45.174-45.174c0-24.949 20.225-45.174 45.174-45.174s45.174 20.225 45.174 45.174z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "server"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 295,
                        "id" => 229,
                        "name" => "server",
                        "prevSize" => 80,
                        "code" => 59876
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 32
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M926.005 99.103c-121.161-57.959-262.777-93.948-412.236-99.026l-1.769-0.048c-151.228 5.125-292.843 41.116-420.425 101.823l6.42-2.75c-32.977 15.76-55.351 48.848-55.351 87.164 0 0.296 0.001 0.59 0.004 0.885v-0.045 649.789c-0.003 0.249-0.004 0.545-0.004 0.839 0 38.315 22.376 71.404 54.773 86.914l0.58 0.25c121.161 57.959 262.777 93.948 412.236 99.026l1.769 0.048c151.228-5.125 292.843-41.116 420.425-101.823l-6.42 2.75c32.977-15.76 55.351-48.848 55.351-87.164 0-0.296-0.001-0.59-0.004-0.885v0.045-649.789c0.003-0.249 0.004-0.545 0.004-0.839 0-38.315-22.376-71.404-54.773-86.914l-0.58-0.25zM899.438 541.888c-113.2 55.308-245.67 89.857-385.631 95.145l-1.807 0.054c-141.767-5.341-274.238-39.89-393.276-97.76l5.838 2.561v-213.644c113.851 51.38 246.465 82.977 386.006 86.865l1.431 0.031c140.973-3.92 273.587-35.517 393.967-89.515l-6.53 2.618zM132.864 174.375c110.92-53.263 240.582-86.42 377.448-91.277l1.688-0.048c138.75 5.006 268.584 38.151 385.604 93.859l-5.915-2.535c4.63 2.445 7.734 7.224 7.748 12.728v48.156c-113.2 55.308-245.67 89.857-385.631 95.145l-1.807 0.054c-141.767-5.341-274.238-39.89-393.276-97.76l5.838 2.561v-49.813c0.619-4.997 3.823-9.121 8.213-11.035l0.090-0.035zM891.136 849.625c-110.92 53.263-240.582 86.42-377.448 91.277l-1.688 0.048c-138.75-5.006-268.584-38.151-385.604-93.859l5.915 2.535c-4.63-2.445-7.734-7.224-7.748-12.728v-204.238c113.851 51.38 246.465 82.977 386.006 86.865l1.431 0.031c140.973-3.92 273.587-35.517 393.967-89.515l-6.53 2.618v204.235c0 0.014 0 0.031 0 0.048 0 5.64-3.374 10.492-8.214 12.647l-0.088 0.035z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "database"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 294,
                        "id" => 228,
                        "name" => "database",
                        "prevSize" => 80,
                        "code" => 59875
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 33
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M984.598 262.573h-157.533l40.433-161.209c0.73-2.838 1.148-6.096 1.148-9.452 0-21.805-17.677-39.482-39.482-39.482-18.449 0-33.942 12.654-38.274 29.756l-0.059 0.273-45.159 180.113h-338.696l40.433-161.209c0.73-2.838 1.148-6.096 1.148-9.452 0-21.805-17.677-39.482-39.482-39.482-18.449 0-33.942 12.654-38.274 29.756l-0.059 0.273-47.26 180.113h-179.062c-21.751 0-39.383 17.633-39.383 39.383s17.633 39.383 39.383 39.383v0h157.533l-85.593 341.321h-176.962c-21.751 0-39.383 17.633-39.383 39.383s17.633 39.383 39.383 39.383v0h157.533l-40.433 161.209c-0.73 2.838-1.148 6.096-1.148 9.452 0 21.805 17.677 39.482 39.482 39.482 18.449 0 33.942-12.654 38.274-29.756l0.059-0.273 45.159-180.113h338.696l-40.433 161.209c-0.73 2.838-1.148 6.096-1.148 9.452 0 21.805 17.677 39.482 39.482 39.482 18.449 0 33.942-12.654 38.274-29.756l0.059-0.273 45.159-180.113h181.163c21.751 0 39.383-17.633 39.383-39.383s-17.633-39.383-39.383-39.383v0h-157.533l85.593-341.321h176.962c21.751 0 39.383-17.633 39.383-39.383s-17.633-39.383-39.383-39.383v0zM722.044 341.339l-85.593 341.321h-334.495l85.593-341.321z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "hashtag"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 293,
                        "id" => 227,
                        "name" => "hashtag",
                        "prevSize" => 80,
                        "code" => 59874
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 34
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M731.351 0.181h-438.702c-88.839 0-160.857 72.018-160.857 160.857v0 818.91c-0.001 0.096-0.001 0.21-0.001 0.324 0 24.229 19.642 43.87 43.87 43.87 9.418 0 18.143-2.968 25.291-8.020l-0.137 0.092 311.186-217.011 311.186 217.011c6.914 4.763 15.47 7.606 24.689 7.606 0.163 0 0.325-0.001 0.488-0.003h-0.025c7.45-0.092 14.477-1.807 20.773-4.808l-0.3 0.129c13.96-7.76 23.279-22.374 23.398-39.173v-818.927c0-88.839-72.018-160.857-160.857-160.857v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "bookmark-fill"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 290,
                        "id" => 226,
                        "name" => "bookmark-fill",
                        "prevSize" => 80,
                        "code" => 59871
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 35
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1004.095 24.725c-7.747-14.706-22.885-24.586-40.34-24.695h-903.493c-17.471 0.11-32.608 9.989-40.236 24.445l-0.12 0.25c-3.089 5.86-4.901 12.805-4.901 20.173 0 10.136 3.43 19.471 9.191 26.908l-0.075-0.1 322.241 440.294v466.797c0.335 24.813 20.361 44.839 45.141 45.174h240.96c24.813-0.335 44.839-20.361 45.174-45.141v-466.83l322.241-440.294c5.688-7.337 9.117-16.671 9.117-26.808 0-7.369-1.813-14.314-5.016-20.414l0.116 0.241z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "filter-fill"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 289,
                        "id" => 225,
                        "name" => "filter-fill",
                        "prevSize" => 80,
                        "code" => 59872
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 36
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M940.27 142.985v0c-52.342-52.898-124.95-85.655-205.208-85.655-0.25 0-0.502 0-0.752 0.001h0.039c-0.212 0-0.462-0.001-0.714-0.001-80.258 0-152.867 32.757-205.183 85.63l-0.025 0.025-16.427 17.013-16.427-16.427c-52.551-52.546-125.148-85.046-205.334-85.046s-152.783 32.5-205.336 85.047v0c-51.85 52.868-83.852 125.364-83.852 205.334s32.002 152.468 83.898 205.382l-0.045-0.047 397.176 398.35c7.96 7.95 18.953 12.869 31.093 12.869s23.133-4.917 31.094-12.869v0l397.176-398.35c51.673-52.835 83.555-125.21 83.555-205.032 0-80.411-32.354-153.263-84.754-206.251l0.026 0.026z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "heart-fill"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 288,
                        "id" => 224,
                        "name" => "heart-fill",
                        "prevSize" => 80,
                        "code" => 59873
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 37
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M944.92 71.496c-6.851-4.781-15.351-7.639-24.52-7.639-5.664 0-11.074 1.091-16.029 3.074l0.291-0.103c-63.404 28.272-136.947 48.827-213.986 57.993l-3.642 0.353c-50.961-13.852-95.595-33.813-136.214-59.541l2.021 1.195c-50.241-31.546-108.991-55.111-171.832-67.168l-3.203-0.511c-75.265-7.001-254.385 51.927-291.724 64.179-17.436 6.017-29.741 22.283-29.756 41.423v874.010c0 24.167 19.592 43.759 43.759 43.759s43.759-19.592 43.759-43.759v0-341.902c65.742-24.141 142.134-41.68 221.425-49.3l3.786-0.294c53.070 13.251 99.74 33.289 142.139 59.564l-2.111-1.218c47.311 29.399 102.324 52.182 160.994 65.266l3.539 0.663h13.419c91.412-12.072 174.279-35.196 251.871-68.295l-6.238 2.366c16.429-6.638 27.841-22.387 28.006-40.821v-497.12c0.056-0.823 0.088-1.785 0.088-2.753 0-13.438-6.14-25.443-15.767-33.361l-0.075-0.060z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "flag-fill"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 287,
                        "id" => 223,
                        "name" => "flag-fill",
                        "prevSize" => 80,
                        "code" => 59870
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 38
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.989c-282.763 0-511.989-229.226-511.989-511.989s229.226-511.989 511.989-511.989c282.763 0 511.989 229.226 511.989 511.989v0c0 282.763-229.226 511.989-511.989 511.989v0zM512 85.343c-235.636 0-426.657 191.021-426.657 426.657s191.021 426.657 426.657 426.657c235.636 0 426.657-191.021 426.657-426.657v0c0-235.636-191.021-426.657-426.657-426.657v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "circle"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 286,
                        "id" => 222,
                        "name" => "circle",
                        "prevSize" => 80,
                        "code" => 59868
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 39
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1023.989 512c0 282.763-229.226 511.989-511.989 511.989s-511.989-229.226-511.989-511.989c0-282.763 229.226-511.989 511.989-511.989s511.989 229.226 511.989 511.989z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "circle-fill"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 285,
                        "id" => 221,
                        "name" => "circle-fill",
                        "prevSize" => 80,
                        "code" => 59869
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 40
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M462.875 1024.834c-1.947 0.372-4.188 0.585-6.478 0.585s-4.531-0.213-6.702-0.62l0.224 0.035c-18.586-5.739-31.857-22.766-31.857-42.893 0-0.292 0.003-0.585 0.009-0.876l-0.001 0.044v-5.938l48.584-342.789h-234.284c-0.011 0-0.024 0-0.038 0-16.55 0-30.926-9.309-38.177-22.979l-0.114-0.234c-3.963-6.646-6.305-14.655-6.305-23.213s2.342-16.567 6.421-23.424l-0.116 0.211 107.965-188.4 221.328-351.967c7.563-12.608 21.158-20.914 36.694-20.914 4.633 0 9.094 0.739 13.272 2.105l-0.301-0.085c18.586 5.739 31.857 22.766 31.857 42.893 0 0.292-0.003 0.585-0.009 0.876l0.001-0.044v5.938l-48.584 342.789h234.824c0.011 0 0.024 0 0.038 0 16.55 0 30.926 9.309 38.177 22.979l0.114 0.234c3.963 6.646 6.305 14.655 6.305 23.213s-2.342 16.567-6.421 23.424l0.116-0.211-107.965 188.4-221.328 351.967c-7.762 11.483-20.733 18.931-35.445 18.931-0.634 0-1.265-0.014-1.893-0.042l0.090 0.003zM434.265 959.516v0zM292.291 549.248h215.931c24.812 0.302 44.809 20.488 44.809 45.342 0 0.191-0.001 0.382-0.004 0.572v-0.029 5.938l-31.849 223.488 134.957-215.931 77.735-133.876h-215.931c-24.812-0.302-44.809-20.488-44.809-45.342 0-0.191 0.001-0.382 0.004-0.572v0.029-5.938l31.849-223.488-134.957 215.931zM589.735 63.945v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "bolt"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 284,
                        "id" => 220,
                        "name" => "bolt",
                        "prevSize" => 80,
                        "code" => 59867
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 41
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M876.353 155.475c-91.36-90.984-217.374-147.233-356.525-147.233s-265.163 56.249-356.542 147.25l-72.854 72.854v-175.251c0-24.945-20.222-45.168-45.168-45.168s-45.168 20.222-45.168 45.168v0 285.461c0 0.001 0 0.003 0 0.004 0 25.067 20.15 45.426 45.135 45.766h286.096c24.945 0 45.168-20.222 45.168-45.168s-20.222-45.168-45.168-45.168v0h-180.671l76.485-74.678c74.952-74.805 178.417-121.062 292.688-121.062s217.736 46.257 292.695 121.070l-0.007-0.007c372.786 402.897-180.671 958.161-585.375 585.375-8.171-8.161-19.456-13.21-31.918-13.21s-23.747 5.048-31.92 13.21v0c-8.309 8.103-13.464 19.409-13.464 31.918s5.155 23.815 13.454 31.91l0.010 0.008c91.243 91.243 217.293 147.678 356.525 147.678 278.462 0 504.201-225.739 504.201-504.201 0-139.231-56.434-265.282-147.678-356.525v0z",
                            "M512 256.049c-24.81 0.335-44.833 20.358-45.168 45.135v210.815c0.011 12.468 5.073 23.753 13.248 31.918v0l152.367 148.753c8.084 8.182 19.304 13.25 31.708 13.25 0.073 0 0.148 0 0.222 0h-0.011c21.988-3.292 38.658-22.048 38.658-44.696 0-10.97-3.91-21.026-10.413-28.851l0.059 0.073-137.31-137.31v-193.921c-0.294-24.201-19.326-43.864-43.245-45.162l-0.116-0.006z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "history"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 283,
                        "id" => 219,
                        "name" => "history",
                        "prevSize" => 80,
                        "code" => 59866
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 42
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1022.811 776.474s0-4.096 0-6.436v-516.077c-0.023-7.052-1.751-13.696-4.793-19.546l0.112 0.237c-4.397-9.329-11.736-16.668-20.801-20.952l-0.263-0.112-468.096-209.474c-5.326-2.478-11.563-3.924-18.139-3.924s-12.811 1.445-18.411 4.037l0.272-0.112-468.096 209.474c-14.982 7.661-25.187 22.762-25.744 40.299l-0.001 0.074v516.077c0.941 17.495 11.005 32.44 25.487 40.246l0.258 0.128 468.096 209.474c5.306 2.591 11.546 4.105 18.139 4.105s12.832-1.514 18.389-4.214l-0.251 0.11 468.096-209.474c13.538-6.306 23.285-18.763 25.711-33.677l0.034-0.259zM86.616 321.251l380.328 170.856v420.117l-380.328-170.27zM554.714 492.105l380.328-170.856v420.702l-380.328 170.27zM512 91.883l361.019 162.079-361.019 161.493-361.019-161.493z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "box"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 282,
                        "id" => 218,
                        "name" => "box",
                        "prevSize" => 80,
                        "code" => 59865
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 43
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 0.027c-282.755 0-511.973 229.218-511.973 511.973v0c-0.022 1.75-0.034 3.816-0.034 5.886 0 279.524 226.599 506.123 506.123 506.123 2.069 0 4.135-0.012 6.199-0.037l-0.313 0.003c24.236 0 43.883-19.647 43.883-43.883s-19.647-43.883-43.883-43.883v0c-1.399 0.016-3.053 0.026-4.708 0.026-231.698 0-419.526-187.828-419.526-419.526 0-1.655 0.010-3.308 0.029-4.959l-0.003 0.251c0.333-234.15 190.058-423.874 424.174-424.206h0.032c281.439 0 424.206 142.768 424.206 424.206v80.745c0.187 2.116 0.292 4.578 0.292 7.064 0 47.18-38.247 85.426-85.426 85.426s-85.426-38.247-85.426-85.426c0-2.486 0.106-4.948 0.314-7.381l-0.022 0.317v-292.556c0-24.236-19.647-43.883-43.883-43.883s-43.883 19.647-43.883 43.883v0 19.894c-44.051-38.526-102.099-62.022-165.637-62.022-0.188 0-0.377 0-0.565 0h0.029c-140.246 0-253.938 113.692-253.938 253.938s113.692 253.938 253.938 253.938v0c75.633-0.27 143.364-33.87 189.31-86.869l0.266-0.313c30.329 52.256 86.021 86.836 149.789 86.836 95.329 0 172.609-77.279 172.609-172.609 0-0.084 0-0.169 0-0.252v0.014-80.745c0-330.003-181.969-511.973-511.973-511.973zM512 678.171c-91.774 0-166.171-74.397-166.171-166.171s74.397-166.171 166.171-166.171c91.774 0 166.171 74.397 166.171 166.171v0c-0.332 91.641-74.532 165.841-166.14 166.171h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "at"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 281,
                        "id" => 217,
                        "name" => "at",
                        "prevSize" => 80,
                        "code" => 59864
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 44
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M273.927 128.663c-27.857 0-50.44 22.582-50.44 50.44s22.582 50.44 50.44 50.44v0h449.244l-579.714 579.714c-9.89 9.234-16.053 22.349-16.053 36.904 0 27.857 22.582 50.44 50.44 50.44 14.555 0 27.668-6.164 36.874-16.025l0.028-0.030 579.714-579.714v449.244c0 27.857 22.582 50.44 50.44 50.44s50.44-22.582 50.44-50.44v0-570.97c-0.038-7.053-1.518-13.753-4.16-19.829l0.126 0.327c-7.47-17.225-23.668-29.376-42.86-30.924l-0.182-0.011z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "arrow-up-right"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 309,
                        "id" => 216,
                        "name" => "arrow-up-right",
                        "prevSize" => 80,
                        "code" => 59860
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 45
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M128.665 750.071c0 27.856 22.582 50.438 50.438 50.438s50.438-22.582 50.438-50.438v0-449.241l579.71 579.71c9.233 9.89 22.348 16.053 36.903 16.053 27.856 0 50.438-22.582 50.438-50.438 0-14.555-6.164-27.668-16.025-36.874l-0.030-0.028-579.71-579.71h449.241c27.856 0 50.438-22.582 50.438-50.438s-22.582-50.438-50.438-50.438v0h-570.968c-7.053 0.038-13.753 1.518-19.829 4.16l0.327-0.126c-18.183 7.953-30.702 25.689-30.935 46.373v0.030z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "arrow-up-left"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 278,
                        "id" => 215,
                        "name" => "arrow-up-left",
                        "prevSize" => 80,
                        "code" => 59861
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 46
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M749.048 893.688c27.738 0 50.223-22.484 50.223-50.223s-22.484-50.223-50.223-50.223v0h-447.31l577.218-577.218c9.846-9.194 15.985-22.253 15.985-36.744 0-27.738-22.484-50.223-50.223-50.223-14.491 0-27.549 6.138-36.714 15.954l-0.028 0.030-577.218 577.218v-447.31c0-27.738-22.484-50.223-50.223-50.223s-50.223 22.484-50.223 50.223v0 571.861c0.038 7.024 1.513 13.694 4.144 19.745l-0.126-0.325c7.919 18.102 25.578 30.57 46.174 30.801h0.030z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "arrow-down-left"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 279,
                        "id" => 214,
                        "name" => "arrow-down-left",
                        "prevSize" => 80,
                        "code" => 59862
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 47
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M896.598 273.145c0-27.949-22.657-50.606-50.606-50.606s-50.606 22.657-50.606 50.606v0 450.722l-581.62-581.62c-9.013-8.416-21.152-13.58-34.498-13.58-27.949 0-50.606 22.657-50.606 50.606 0 13.348 5.166 25.486 13.61 34.529l-0.028-0.030 581.62 581.62h-450.722c-27.949 0-50.606 22.657-50.606 50.606s22.657 50.606 50.606 50.606v0h576.221c7.076-0.039 13.797-1.525 19.894-4.175l-0.328 0.126c15.905-8.356 26.772-24.403 27.661-43.066l0.006-0.114z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "arrow-down-right"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 280,
                        "id" => 213,
                        "name" => "arrow-down-right",
                        "prevSize" => 80,
                        "code" => 59863
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 48
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 0.011c-282.764 0-511.989 229.225-511.989 511.989s229.225 511.989 511.989 511.989c282.764 0 511.989-229.225 511.989-511.989v0c0-282.764-229.225-511.989-511.989-511.989v0zM763.515 350.723l-83.838 396.152c-6.4 28.159-23.040 34.559-46.72 21.76l-127.997-94.719-63.999 59.519c-5.961 7.732-15.19 12.694-25.582 12.799h-0.016l8.959-127.997 236.796-214.395c10.879-8.959 0-14.080-15.36-5.119l-290.555 182.396-127.997-39.679c-27.52-8.32-28.159-27.52 5.76-40.319l493.43-191.996c24.319-7.039 44.8 7.039 37.12 41.599z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "telegram"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 276,
                        "id" => 212,
                        "name" => "telegram",
                        "prevSize" => 80,
                        "code" => 59859
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 49
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.991c-282.764 0-511.991-229.227-511.991-511.991s229.227-511.991 511.991-511.991c282.764 0 511.991 229.227 511.991 511.991v0c0 282.764-229.227 511.991-511.991 511.991v0zM512 85.341c-235.637 0-426.659 191.022-426.659 426.659s191.022 426.659 426.659 426.659c235.637 0 426.659-191.022 426.659-426.659v0c0-235.637-191.022-426.659-426.659-426.659v0z",
                            "M369.78 284.448h284.439c47.127 0 85.332 38.205 85.332 85.332v284.439c0 47.127-38.205 85.332-85.332 85.332h-284.439c-47.127 0-85.332-38.205-85.332-85.332v-284.439c0-47.127 38.205-85.332 85.332-85.332z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "stop-circle"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 275,
                        "id" => 211,
                        "name" => "stop-circle",
                        "prevSize" => 80,
                        "code" => 59858
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 50
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M842.308 1023.979h-660.618c-100.333 0-181.669-81.336-181.669-181.669v0-660.618c0-100.333 81.336-181.669 181.669-181.669v0h660.618c100.333 0 181.669 81.336 181.669 181.669v0 660.618c0 100.333-81.336 181.669-181.669 181.669v0zM181.692 99.114c-45.606 0-82.577 36.971-82.577 82.577v0 660.618c0 45.606 36.971 82.577 82.577 82.577v0h660.618c45.606 0 82.577-36.971 82.577-82.577v0-660.618c0-45.606-36.971-82.577-82.577-82.577v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "stop"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 274,
                        "id" => 210,
                        "name" => "stop",
                        "prevSize" => 80,
                        "code" => 59857
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 51
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M870.378 148.502c-91.041-91.707-217.17-148.474-356.557-148.474-0.64 0-1.281 0.001-1.92 0.003h0.099c-280.418 0.282-507.634 227.671-507.634 508.129 0 93.024 24.997 180.211 68.642 255.208l-1.302-2.422-71.676 263.024 268.784-70.395c69.896 39.602 153.381 63.238 242.321 63.995l0.223 0.001c0.006 0 0.012 0 0.019 0 281.177 0 509.412-226.669 511.947-507.248l0.001-0.241c-0.978-141.618-59.303-269.426-152.883-361.512l-0.067-0.066zM512 929.894c-0.081 0-0.178 0-0.274 0-79.234 0-153.358-21.884-216.656-59.938l1.903 1.060-15.359-9.599-159.35 42.237 42.237-155.511-10.24-16c-39.739-63.209-63.313-140.066-63.313-222.43 0-233.27 189.104-422.374 422.374-422.374 115.76 0 220.644 46.569 296.938 121.995l-0.040-0.039c77.623 75.954 126.276 181.243 127.989 297.901l0.003 0.321c-2.173 233.734-192.155 422.374-426.196 422.374-0.006 0-0.012 0-0.018 0h0.001zM743.026 613.754c-12.799-6.4-74.875-37.118-86.395-40.958s-20.478-6.4-28.798 6.4c-13.451 18.342-26.668 34.402-40.702 49.701l0.384-0.424c-7.039 8.959-14.719 9.599-27.519 0-73.887-29.731-133.426-82.24-171.269-148.708l-0.882-1.681c-13.439-22.398 12.799-21.119 37.118-69.116 1.722-3.252 2.733-7.107 2.733-11.2s-1.011-7.948-2.796-11.332l0.064 0.132c0-6.4-28.798-69.116-39.038-94.074s-20.478-21.119-28.798-21.759h-24.958c-13.577 0.214-25.68 6.352-33.865 15.937l-0.052 0.063c-26.196 25.492-42.447 61.088-42.447 100.48 0 2.698 0.076 5.38 0.226 8.041l-0.016-0.369c4.318 50.122 23.15 95.162 52.219 131.69l-0.382-0.498c54.892 81.39 128.004 146.508 213.743 190.496l3.204 1.492c35.584 21.122 78.444 33.605 124.218 33.605 9.899 0 19.661-0.583 29.254-1.719l-1.162 0.112c36.419-7.408 66.636-29.449 84.793-59.581l0.322-0.576c5.793-12.526 9.172-27.184 9.172-42.632 0-6.192-0.543-12.256-1.582-18.147l0.091 0.624c-5.76-6.4-14.080-9.599-26.878-16z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "whatsapp"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 273,
                        "id" => 209,
                        "name" => "whatsapp",
                        "prevSize" => 80,
                        "code" => 59856
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 52
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M365.722 160.934h58.511c16.157 0 29.255 13.098 29.255 29.255v58.511c0 16.157-13.098 29.255-29.255 29.255h-58.511c-16.157 0-29.255-13.098-29.255-29.255v-58.511c0-16.157 13.098-29.255 29.255-29.255z",
                            "M599.767 160.934h58.511c16.157 0 29.255 13.098 29.255 29.255v58.511c0 16.157-13.098 29.255-29.255 29.255h-58.511c-16.157 0-29.255-13.098-29.255-29.255v-58.511c0-16.157 13.098-29.255 29.255-29.255z",
                            "M365.722 365.722h58.511c16.157 0 29.255 13.098 29.255 29.255v58.511c0 16.157-13.098 29.255-29.255 29.255h-58.511c-16.157 0-29.255-13.098-29.255-29.255v-58.511c0-16.157 13.098-29.255 29.255-29.255z",
                            "M599.767 365.722h58.511c16.157 0 29.255 13.098 29.255 29.255v58.511c0 16.157-13.098 29.255-29.255 29.255h-58.511c-16.157 0-29.255-13.098-29.255-29.255v-58.511c0-16.157 13.098-29.255 29.255-29.255z",
                            "M365.722 570.511h58.511c16.157 0 29.255 13.098 29.255 29.255v58.511c0 16.157-13.098 29.255-29.255 29.255h-58.511c-16.157 0-29.255-13.098-29.255-29.255v-58.511c0-16.157 13.098-29.255 29.255-29.255z",
                            "M599.767 570.511h58.511c16.157 0 29.255 13.098 29.255 29.255v58.511c0 16.157-13.098 29.255-29.255 29.255h-58.511c-16.157 0-29.255-13.098-29.255-29.255v-58.511c0-16.157 13.098-29.255 29.255-29.255z",
                            "M877.694 936.204h-29.255v-892.294c-0.325-24.104-19.779-43.558-43.852-43.883h-585.142c-24.104 0.325-43.558 19.779-43.883 43.852v892.325h-29.255c-24.236 0-43.883 19.647-43.883 43.883s19.647 43.883 43.883 43.883v0h731.387c24.236 0 43.883-19.647 43.883-43.883s-19.647-43.883-43.883-43.883v0zM760.671 936.204h-307.183v-131.65c0-16.157-13.098-29.255-29.255-29.255v0h-58.511c-16.157 0-29.255 13.098-29.255 29.255v0 131.65h-73.138v-848.41h497.344z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "building"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 272,
                        "id" => 208,
                        "name" => "building",
                        "prevSize" => 80,
                        "code" => 59855
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 53
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M561.547 0.023v462.433h462.433v-462.433zM924.887 363.362h-264.247v-264.247h264.247z",
                            "M0.023 462.454h462.433v-462.433h-462.433zM99.116 99.116h264.247v264.247h-264.247z",
                            "M0.023 1023.98h462.433v-462.433h-462.433zM99.116 660.64h264.247v264.247h-264.247z",
                            "M561.547 561.547h115.609v115.609h-115.609v-115.609z",
                            "M792.764 561.547h115.609v115.609h-115.609v-115.609z",
                            "M677.156 677.156h115.609v115.609h-115.609v-115.609z",
                            "M908.371 677.156h115.609v115.609h-115.609v-115.609z",
                            "M561.547 792.764h115.609v115.609h-115.609v-115.609z",
                            "M792.764 792.764h115.609v115.609h-115.609v-115.609z",
                            "M677.156 908.371h115.609v115.609h-115.609v-115.609z",
                            "M908.371 908.371h115.609v115.609h-115.609v-115.609z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "qrcode"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 271,
                        "id" => 207,
                        "name" => "qrcode",
                        "prevSize" => 80,
                        "code" => 59854
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 54
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M966.767 407.505l-107.415-291.887c-13.941-40.405-51.44-68.998-95.682-69.469h-502.102c-43.76 0.101-81.048 27.7-95.509 66.429l-0.231 0.706-107.415 291.887c-34.342 16.711-57.732 51.084-58.377 90.984l-0.001 0.085v262.699c-0.012 0.59-0.019 1.285-0.019 1.983 0 35.143 17.95 66.093 45.181 84.184l0.372 0.233s0 3.503 0 3.503v116.754c0 32.241 26.137 58.378 58.378 58.378v0h58.378c32.241 0 58.378-26.137 58.378-58.378v0-102.161h583.775v102.161c0 32.241 26.137 58.378 58.378 58.378v0h58.378c32.241 0 58.378-26.137 58.378-58.378v0-116.754s0 0 0-3.503c26.927-18.415 44.367-48.984 44.367-83.626 0-0.155 0-0.308-0.001-0.462v0.023-262.699c-0.415-39.752-23.34-74.055-56.62-90.799l-0.59-0.27zM935.826 761.273c0 8.060-6.535 14.595-14.595 14.595v0h-817.284c-8.060 0-14.595-6.535-14.595-14.595v0-262.699c0-8.060 6.535-14.595 14.595-14.595v0h817.284c8.060 0 14.595 6.535 14.595 14.595v0zM248.14 143.055c2.145-5.454 7.332-9.259 13.417-9.341h502.055c6.095 0.082 11.281 3.887 13.392 9.241l0.034 0.099 81.728 224.169h-692.357z",
                            "M366.646 629.923c0 48.361-39.205 87.566-87.566 87.566s-87.566-39.205-87.566-87.566c0-48.361 39.205-87.566 87.566-87.566s87.566 39.205 87.566 87.566z",
                            "M833.667 629.923c0 48.361-39.205 87.566-87.566 87.566s-87.566-39.205-87.566-87.566c0-48.361 39.205-87.566 87.566-87.566s87.566 39.205 87.566 87.566z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "car"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 270,
                        "id" => 206,
                        "name" => "car",
                        "prevSize" => 80,
                        "code" => 59853
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 55
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 249.365c-145.049 0-262.635 117.585-262.635 262.635s117.585 262.635 262.635 262.635c145.049 0 262.635-117.585 262.635-262.635v0c0-0.191 0.002-0.416 0.002-0.641 0-144.695-117.299-261.995-261.995-261.995-0.225 0-0.45 0-0.676 0.002h0.035zM512 683.033c-94.459 0-171.033-76.575-171.033-171.033s76.575-171.033 171.033-171.033c94.459 0 171.033 76.575 171.033 171.033v0c0 94.459-76.575 171.033-171.033 171.033v0zM847.020 238.475c0 35.378-28.68 64.058-64.058 64.058s-64.058-28.68-64.058-64.058c0-35.378 28.68-64.058 64.058-64.058v0c35.378 0 64.058 28.68 64.058 64.058v0zM1020.615 302.532c0.053-2.1 0.083-4.576 0.083-7.056 0-80.466-31.5-153.574-82.841-207.667l0.125 0.132c-54.19-52.344-128.080-84.599-209.504-84.599-1.79 0-3.575 0.015-5.357 0.047l0.267-0.003c-83.275-3.843-339.503-3.843-422.778 0-1.952-0.045-4.253-0.071-6.559-0.071-80.622 0-153.889 31.489-208.175 82.838l0.141-0.134c-51.217 53.961-82.717 127.069-82.717 207.535 0 2.482 0.030 4.956 0.090 7.423l-0.008-0.366c-3.843 83.275-3.843 339.503 0 422.778-0.053 2.1-0.083 4.576-0.083 7.056 0 80.466 31.5 153.574 82.841 207.667l-0.125-0.132c54.143 51.217 127.412 82.705 208.032 82.705 2.306 0 4.608-0.026 6.902-0.077l-0.342 0.006c84.556 5.124 338.223 5.124 422.778 0 2.1 0.053 4.576 0.083 7.056 0.083 80.466 0 153.574-31.5 207.667-82.841l-0.132 0.125c51.217-53.961 82.717-127.069 82.717-207.535 0-2.482-0.030-4.956-0.090-7.423l0.008 0.366c3.843-83.275 3.843-339.503 0-422.778zM911.718 814.991c-17.965 44.669-52.697 79.402-96.206 96.954l-1.162 0.414c-68.692 14.541-147.62 22.867-228.491 22.867-25.987 0-51.772-0.86-77.33-2.552l3.471 0.185c-22.061 1.512-47.813 2.374-73.767 2.374-80.681 0-159.416-8.328-235.394-24.172l7.451 1.3c-44.669-17.965-79.402-52.697-96.954-96.206l-0.414-1.162c-26.904-67.901-21.139-228.044-21.139-302.351s-5.765-235.091 21.139-302.351c17.48-45.144 52.371-80.244 96.218-97.607l1.149-0.401c68.527-14.544 147.262-22.873 227.943-22.873 25.954 0 51.706 0.862 77.231 2.558l-3.464-0.185c22.086-1.509 47.872-2.368 73.859-2.368 80.871 0 159.799 8.326 235.971 24.167l-7.48-1.3c44.669 17.965 79.402 52.697 96.954 96.206l0.414 1.162c26.904 67.901 20.498 228.044 20.498 302.351s6.406 235.091-20.498 302.351z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "instagram"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 268,
                        "id" => 205,
                        "name" => "instagram",
                        "prevSize" => 80,
                        "code" => 59852
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 56
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M942.030 0.060h-854.301c-1.171-0.058-2.544-0.091-3.924-0.091-44.98 0-81.687 35.426-83.74 79.897l-0.007 0.184v856.22c1.381 47.853 39.817 86.288 87.54 87.666l0.129 0.003h854.301c45.688-2.098 81.934-39.649 81.934-85.666 0-0.705-0.009-1.408-0.025-2.109l0.001 0.103v-856.22c0.007-0.4 0.012-0.873 0.012-1.345 0-43.471-35.24-78.711-78.711-78.711-1.129 0-2.253 0.024-3.37 0.070l0.159-0.006zM320.022 853.72h-149.102v-456.266h149.102zM248.991 328.342v0c-0.784 0.028-1.705 0.046-2.629 0.046-41.704 0-75.512-33.808-75.512-75.512 0-1.141 0.025-2.277 0.075-3.406l-0.006 0.16c-0.046-0.985-0.072-2.14-0.072-3.301 0-41.704 33.808-75.512 75.512-75.512 1.375 0 2.743 0.037 4.101 0.109l-0.189-0.007c0.784-0.028 1.705-0.046 2.629-0.046 41.704 0 75.512 33.808 75.512 75.512 0 1.141-0.025 2.277-0.075 3.406l0.006-0.16c0.046 0.985 0.072 2.14 0.072 3.301 0 41.704-33.808 75.512-75.512 75.512-1.375 0-2.743-0.037-4.101-0.109l0.189 0.007zM853.72 853.72h-149.743v-249.571c0-59.513-21.118-100.469-74.231-100.469-34.5 0.309-63.758 22.412-74.697 53.194l-0.174 0.559c-3.36 9.138-5.302 19.69-5.302 30.697 0 2.034 0.066 4.051 0.196 6.052l-0.013-0.271v259.81h-147.182v-456.266h147.182v63.993c25.685-46.508 74.423-77.484 130.396-77.484 1.402 0 2.8 0.019 4.194 0.058l-0.205-0.004c96.629 0 169.581 63.993 169.581 200.297z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "linkedin"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 266,
                        "id" => 204,
                        "name" => "linkedin",
                        "prevSize" => 80,
                        "code" => 59851
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 57
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M998.721 25.279c-15.31-15.206-36.405-24.601-59.695-24.601-9.365 0-18.373 1.518-26.795 4.325l0.597-0.173-854.831 285.138c-34.333 11.124-58.722 42.818-58.722 80.21 0 32.269 18.165 60.295 44.829 74.41l0.459 0.221 354.67 175.29 175.29 355.84c14.186 27.601 42.466 46.16 75.080 46.16 0.106 0 0.207 0 0.309 0h5.827c34.71-2.632 63.306-26.111 73.46-57.839l0.162-0.591 289.228-852.494c2.939-8.121 4.642-17.492 4.642-27.261 0-22.937-9.373-43.685-24.499-58.622l-0.010-0.010zM94.226 370.599l746.151-248.912-414.27 414.27zM653.984 929.774l-165.94-331.884 414.27-414.27z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "send"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 263,
                        "id" => 203,
                        "name" => "send",
                        "prevSize" => 80,
                        "code" => 59850
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 58
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M215.050 647.037c0 59.379-48.138 107.517-107.517 107.517s-107.517-48.138-107.517-107.517c0-59.379 48.138-107.517 107.517-107.517v0h107.517zM269.445 647.037c0-59.379 48.138-107.517 107.517-107.517s107.517 48.138 107.517 107.517v0 269.434c0 59.379-48.138 107.517-107.517 107.517s-107.517-48.138-107.517-107.517v0zM376.963 215.050c-59.379 0-107.517-48.138-107.517-107.517s48.138-107.517 107.517-107.517c59.379 0 107.517 48.138 107.517 107.517v0 107.517zM376.963 269.445c59.379 0 107.517 48.138 107.517 107.517s-48.138 107.517-107.517 107.517h-269.434c-59.379 0-107.517-48.138-107.517-107.517s48.138-107.517 107.517-107.517v0zM808.95 376.963c0-59.379 48.138-107.517 107.517-107.517s107.517 48.138 107.517 107.517c0 59.379-48.138 107.517-107.517 107.517v0h-107.517v-107.517zM754.555 376.963c0 59.379-48.138 107.517-107.517 107.517s-107.517-48.138-107.517-107.517v0-269.434c0-59.379 48.138-107.517 107.517-107.517s107.517 48.138 107.517 107.517v0 269.434zM647.037 808.95c59.379 0 107.517 48.138 107.517 107.517s-48.138 107.517-107.517 107.517c-59.379 0-107.517-48.138-107.517-107.517v0-107.517zM647.037 754.555c-59.379 0-107.517-48.138-107.517-107.517s48.138-107.517 107.517-107.517h269.434c59.379 0 107.517 48.138 107.517 107.517s-48.138 107.517-107.517 107.517v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "slack"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 262,
                        "id" => 202,
                        "name" => "slack",
                        "prevSize" => 80,
                        "code" => 59849
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 59
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M517.309 1022.789c-22.691-0.029-45.007-1.526-66.885-4.41l2.595 0.278c-233.58-31.279-416.401-214.099-447.387-445.014l-0.291-2.662c-2.859-20.354-4.49-43.869-4.49-67.761 0-246.048 172.971-451.698 403.948-501.981l3.392-0.62c4.828-1.146 10.369-1.803 16.065-1.803 24.13 0 45.508 11.78 58.7 29.904l0.144 0.209c8.716 12.084 13.937 27.19 13.937 43.519 0 14.447-4.091 27.937-11.173 39.378l0.187-0.321c-26.726 45.102-42.523 99.41-42.523 157.408 0 16.683 1.308 33.056 3.823 49.030l-0.228-1.77c21.13 133.311 125.031 237.216 256.587 258.114l1.758 0.228c14.358 2.386 30.902 3.749 47.766 3.749 57.921 0 112.086-16.086 158.27-44.036l-1.366 0.768c10.914-6.566 24.086-10.453 38.167-10.453 16.715 0 32.146 5.473 44.609 14.724l-0.202-0.143c18.334 13.090 30.142 34.293 30.142 58.257 0 5.696-0.669 11.235-1.926 16.546l0.097-0.484c-49.878 235.319-255.888 409.342-502.54 409.342-0.413 0-0.822 0-1.235-0.001h0.064zM394.034 99.12c-178.936 53.807-307.056 217.078-307.056 410.275 0 236.171 191.454 427.623 427.623 427.623 193.197 0 356.468-128.116 409.491-304.027l0.784-3.028c-50.869 25.361-110.807 40.205-174.212 40.205-197.518 0-361.392-144.047-392.301-332.818l-0.31-2.3c-2.962-18.244-4.655-39.278-4.655-60.703 0-63.794 15.005-124.084 41.678-177.535l-1.042 2.307z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "moon"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 261,
                        "id" => 201,
                        "name" => "moon",
                        "prevSize" => 80,
                        "code" => 59847
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 60
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 806.395c-162.589 0-294.395-131.804-294.395-294.395s131.804-294.395 294.395-294.395c162.589 0 294.395 131.804 294.395 294.395v0c-0.29 162.471-131.922 294.103-294.366 294.395h-0.028zM512 294.404c-120.176 0-217.596 97.422-217.596 217.596s97.422 217.596 217.596 217.596c120.176 0 217.596-97.422 217.596-217.596v0c-0.29-120.058-97.538-217.306-217.567-217.596h-0.028z",
                            "M512 153.605c-21.092-0.285-38.115-17.308-38.399-38.371v-76.826c0-21.206 17.191-38.399 38.399-38.399s38.399 17.191 38.399 38.399v0 76.799c-0.285 21.092-17.308 38.115-38.371 38.399h-0.028z",
                            "M512 1023.99c-21.092-0.285-38.115-17.308-38.399-38.371v-76.826c0-21.206 17.191-38.399 38.399-38.399s38.399 17.191 38.399 38.399v0 76.799c-0.285 21.092-17.308 38.115-38.371 38.399h-0.028z",
                            "M985.591 550.399h-76.799c-21.206 0-38.399-17.191-38.399-38.399s17.191-38.399 38.399-38.399v0h76.799c21.206 0 38.399 17.191 38.399 38.399s-17.191 38.399-38.399 38.399v0z",
                            "M115.206 550.399h-76.799c-21.206 0-38.399-17.191-38.399-38.399s17.191-38.399 38.399-38.399v0h76.799c21.206 0 38.399 17.191 38.399 38.399s-17.191 38.399-38.399 38.399v0z",
                            "M230.404 268.804c-10.245-0.806-19.244-5.574-25.564-12.757l-0.035-0.043-55.808-51.2c-7.14-7.14-11.557-17.006-11.557-27.903 0-21.794 17.667-39.461 39.461-39.461 10.897 0 20.763 4.417 27.903 11.557v0l51.2 55.808c6.068 6.763 9.778 15.747 9.778 25.599s-3.711 18.837-9.81 25.635l0.031-0.035c-6.356 7.223-15.355 11.995-25.469 12.791l-0.131 0.009z",
                            "M847.867 886.263c-0.052 0-0.116 0-0.178 0-10.545 0-20.084-4.307-26.953-11.261l-0.003-0.003-52.736-55.808c-2.366-4.842-3.748-10.533-3.748-16.548 0-21.206 17.191-38.399 38.399-38.399 6.016 0 11.709 1.383 16.778 3.85l-0.227-0.099 55.808 51.2c6.939 6.946 11.231 16.541 11.231 27.135s-4.291 20.189-11.231 27.136v0c-6.701 7.568-16.317 12.423-27.072 12.798l-0.065 0.001z",
                            "M793.596 268.804c-10.245-0.806-19.244-5.574-25.564-12.757l-0.035-0.043c-6.068-6.763-9.778-15.747-9.778-25.599s3.711-18.837 9.81-25.635l-0.031 0.035 51.2-55.808c7.14-7.14 17.006-11.557 27.903-11.557 21.794 0 39.461 17.667 39.461 39.461 0 10.897-4.417 20.763-11.557 27.903v0l-55.808 51.2c-6.356 7.223-15.355 11.995-25.469 12.791l-0.131 0.009z",
                            "M176.133 886.263c-0.052 0-0.116 0-0.178 0-10.545 0-20.084-4.307-26.953-11.261l-0.003-0.003c-6.939-6.946-11.231-16.541-11.231-27.135s4.291-20.189 11.231-27.136v0l55.808-52.736c4.842-2.366 10.533-3.748 16.548-3.748 21.206 0 38.399 17.191 38.399 38.399 0 6.016-1.383 11.709-3.85 16.778l0.099-0.227-51.2 55.808c-6.876 6.978-16.43 11.301-26.992 11.301-0.591 0-1.178-0.014-1.761-0.042l0.082 0.003z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "sun"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 260,
                        "id" => 200,
                        "name" => "sun",
                        "prevSize" => 80,
                        "code" => 59848
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 61
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1002.843 264.979c-11.885-44.735-46.258-79.32-89.974-91.303l-0.899-0.211c-108.991-13.585-235.136-21.338-363.093-21.338-12.967 0-25.913 0.079-38.842 0.238l1.964-0.020c-10.965-0.138-23.912-0.217-36.878-0.217-127.957 0-254.101 7.753-377.993 22.812l14.9-1.475c-44.618 12.192-78.989 46.777-90.67 90.619l-0.202 0.895c-13.45 71.849-21.144 154.515-21.144 238.976 0 2.83 0.010 5.654 0.025 8.48l-0.001-0.435c-0.015 2.515-0.025 5.487-0.025 8.463 0 84.76 7.694 167.728 22.419 248.235l-1.273-8.397c12.473 43.944 46.687 77.735 89.978 89.387l0.896 0.205c108.991 13.585 235.136 21.338 363.093 21.338 12.967 0 25.913-0.079 38.842-0.238l-1.964 0.020c10.965 0.138 23.912 0.217 36.878 0.217 127.957 0 254.101-7.753 377.993-22.812l-14.9 1.475c44.184-11.858 78.4-45.649 90.654-88.691l0.222-0.902c13.451-72.109 21.145-155.075 21.145-239.836 0-2.976-0.010-5.952-0.030-8.921l0.002 0.458c0.014-2.39 0.024-5.216 0.024-8.045 0-84.461-7.694-167.123-22.415-247.326l1.272 8.351zM407.049 664.948v-304.617l268.139 151.669-268.139 152.31z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "youtube"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 245,
                        "id" => 199,
                        "name" => "youtube",
                        "prevSize" => 80,
                        "code" => 59845
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 62
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.584 0.020h-819.169c-56.554 0-102.397 45.843-102.397 102.397v0 819.169c0 56.554 45.843 102.397 102.397 102.397h819.169c56.554 0 102.397-45.843 102.397-102.397v0-819.169c0-56.554-45.843-102.397-102.397-102.397v0zM861.428 339.846q-5.119 108.157-150.396 296.31c-100.477 127.996-186.234 195.834-255.991 195.834-43.518 0-79.358-39.678-109.437-119.677-58.239-213.112-83.198-337.908-127.996-337.908-22.288 9.156-41.514 20.78-58.626 34.868l0.387-0.309-34.559-44.799c85.118-74.878 166.394-158.075 217.592-162.554s90.237 33.919 105.597 118.396c47.358 300.15 68.477 345.588 154.236 209.272 23.167-31.534 40.499-68.894 49.548-109.38l0.37-1.973c8.32-76.157-58.878-71.038-104.956-51.198q53.118-179.195 206.712-174.714 113.917 3.84 107.517 147.835z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "vimeo"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 246,
                        "id" => 198,
                        "name" => "vimeo",
                        "prevSize" => 80,
                        "code" => 59846
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 63
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M945.168 71.244c-6.854-4.784-15.36-7.644-24.533-7.644-5.667 0-11.082 1.091-16.037 3.075l0.291-0.101c-63.362 27.754-136.884 48.272-213.777 57.97l-3.973 0.411c-50.991-13.859-95.65-33.834-136.292-59.573l2.021 1.197c-50.286-31.459-109.055-55.026-171.889-67.197l-3.247-0.525c-107.474 9.724-206.538 32.466-299.99 66.82l8.098-2.606c-17.445 6.019-29.758 22.294-29.774 41.446v874.511c0 24.18 19.602 43.782 43.782 43.782s43.782-19.602 43.782-43.782v0-341.516c65.758-24.646 142.15-42.595 221.505-50.481l3.835-0.307c53.105 13.33 99.794 33.376 142.252 59.613l-2.143-1.233c47.34 29.414 102.383 52.211 161.087 65.302l3.54 0.662h13.426c91.375-11.776 174.319-34.938 251.841-68.29l-6.068 2.323c16.532-6.508 28.021-22.337 28.021-40.848 0-0.004 0-0.013 0-0.017v0.001-496.801c0.058-0.822 0.086-1.787 0.086-2.754 0-13.445-6.144-25.457-15.776-33.379l-0.076-0.061zM876.865 575.050c-55.28 23.59-119.414 40.863-186.43 48.723l-3.3 0.316c-50.991-13.859-95.65-33.834-136.292-59.573l2.021 1.197c-50.286-31.459-109.055-55.026-171.889-67.197l-3.247-0.525h-11.676c-81.373 7.491-156.277 24.016-227.356 48.724l6.685-2.021v-408.651c65.758-24.646 142.15-42.595 221.505-50.481l3.835-0.307c53.105 13.33 99.794 33.376 142.252 59.613l-2.143-1.233c47.34 29.414 102.383 52.211 161.087 65.302l3.54 0.662c72.593-2.928 140.796-18.315 203.651-44.065l-3.998 1.45z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "flag"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 247,
                        "id" => 197,
                        "name" => "flag",
                        "prevSize" => 80,
                        "code" => 59844
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 64
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.328 234.242h-14.62v-131.569c-0.331-56.383-45.949-102.001-102.301-102.333h-0.032c-2.11-0.402-4.538-0.635-7.018-0.635s-4.909 0.229-7.26 0.672l0.242-0.037-695.856 233.902h-15.789l-9.939 3.508h-8.187l-9.357 5.263-7.018 9.939-8.187 7.018-6.432 5.85-7.018 8.771c-1.843 1.659-3.402 3.587-4.62 5.733l-0.060 0.112c-1.923 2.94-3.872 6.386-5.601 9.962l-0.245 0.564-3.508 6.432c-1.391 3.423-2.79 7.711-3.925 12.107l-0.165 0.758c0.126 0.965 0.196 2.083 0.196 3.216s-0.070 2.252-0.21 3.346l0.014-0.13c-0.288 2.979-0.451 6.443-0.451 9.939s0.164 6.961 0.485 10.379l-0.033-0.436v584.754c0.266 54.991 43.614 99.77 98.010 102.322l0.229 0.010h818.656c56.383-0.331 102.001-45.949 102.333-102.301v-584.786c-0.331-56.383-45.949-102.001-102.301-102.333h-0.032zM809.056 88.637c5.781 2.176 9.84 7.618 9.939 14.021v131.582h-446.167zM935.946 921.328c0 8.075-6.545 14.62-14.62 14.62v0h-818.656c-8.075 0-14.62-6.545-14.62-14.62v0-584.754c0-8.075 6.545-14.62 14.62-14.62v0h818.656c8.075 0 14.62 6.545 14.62 14.62v0z",
                            "M848.233 628.95c0 40.368-32.724 73.092-73.092 73.092s-73.092-32.724-73.092-73.092c0-40.368 32.724-73.092 73.092-73.092s73.092 32.724 73.092 73.092z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "wallet"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 248,
                        "id" => 196,
                        "name" => "wallet",
                        "prevSize" => 80,
                        "code" => 59843
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 65
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M974.245 49.171c-15.932-10.721-35.555-17.111-56.669-17.111-14.627 0-28.534 3.067-41.12 8.59l0.658-0.257-208.887 89.524-277.931-117.023c-10.185-4.441-22.051-7.024-34.522-7.024s-24.338 2.583-35.094 7.244l0.571-0.221-255.112 107.663c-39.245 17.382-66.129 55.99-66.129 100.873 0 0.535 0.003 1.071 0.012 1.601l-0.001-0.081v658.259c-0.001 0.193-0.001 0.422-0.001 0.65 0 38.606 19.576 72.638 49.339 92.718l0.396 0.252c15.932 10.721 35.555 17.111 56.669 17.111 14.627 0 28.534-3.067 41.12-8.59l-0.658 0.257 208.887-89.524 277.931 117.023c9.959 4.44 21.578 7.024 33.803 7.024 0.254 0 0.506-0.001 0.759-0.002h-0.037c12.47-0.016 24.335-2.597 35.099-7.244l-0.579 0.222 255.112-109.419c39.245-17.382 66.129-55.99 66.129-100.873 0-0.535-0.003-1.071-0.012-1.601l0.001 0.081v-656.503c0.001-0.193 0.001-0.422 0.001-0.65 0-38.606-19.576-72.638-49.339-92.718l-0.396-0.252zM399.657 107.683l224.685 95.96v709.749l-224.685-95.96zM112.365 902.859c-2.099 1.232-4.621 1.96-7.312 1.96s-5.216-0.728-7.384-1.996l0.067 0.036c-6.069-4.287-9.983-11.275-9.983-19.174 0-0.459 0.014-0.915 0.041-1.366l-0.002 0.063v-659.428c-0.001-0.106-0.002-0.225-0.002-0.349 0-9.66 5.999-17.916 14.475-21.246l0.156-0.052 209.473-90.694v706.823zM936.211 801.048c0.016 0.329 0.027 0.713 0.027 1.097 0 8.996-5.204 16.772-12.765 20.489l-0.133 0.060-211.228 90.694v-706.823l199.525-85.427c2.099-1.232 4.621-1.96 7.312-1.96s5.216 0.728 7.384 1.996l-0.067-0.036c6.069 4.287 9.983 11.275 9.983 19.174 0 0.459-0.014 0.915-0.041 1.366l0.002-0.063z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "map"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 249,
                        "id" => 195,
                        "name" => "map",
                        "prevSize" => 80,
                        "code" => 59842
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 66
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M232.89 877.709c-0.229 0.001-0.5 0.001-0.772 0.001-64.296 0-122.536-25.926-164.839-67.892l0.014 0.014c-41.67-44.195-67.28-103.927-67.28-169.644 0-70.104 29.144-133.401 75.978-178.432l0.081-0.077 220.011-221.767c46.236-47.686 110.48-77.679 181.734-78.989l0.242-0.003c64.887 0.446 123.436 27.23 165.557 70.178l0.036 0.036c42.26 44.485 68.256 104.777 68.256 171.139 0 70.733-29.531 134.567-76.936 179.85l-0.095 0.091-73.728 73.728c-8.035 8.605-19.444 13.968-32.108 13.968-24.236 0-43.886-19.648-43.886-43.886 0-12.665 5.363-24.073 13.943-32.084l0.025-0.023 71.384-76.068c31.073-29.214 50.426-70.586 50.426-116.481 0-41.8-16.055-79.851-42.334-108.318l0.099 0.109c-28.323-24.799-65.659-39.923-106.527-39.923-45.364 0-86.377 18.637-115.797 48.671l-0.027 0.027-218.256 221.181c-30.617 29.25-49.65 70.402-49.65 115.998 0 41.161 15.51 78.698 41.005 107.085l-0.133-0.148c26.409 26.109 62.734 42.236 102.824 42.236 5.002 0 9.944-0.251 14.816-0.741l-0.615 0.049c1.28-0.135 2.767-0.212 4.272-0.212 22.546 0 41.068 17.231 43.113 39.245l0.012 0.171c0.136 1.297 0.214 2.802 0.214 4.324 0 22.665-17.181 41.315-39.226 43.641l-0.191 0.015z",
                            "M545.938 863.081c-64.887-0.446-123.436-27.23-165.557-70.178l-0.036-0.036c-42.26-44.485-68.256-104.777-68.256-171.139 0-70.733 29.531-134.567 76.936-179.85l0.095-0.091 73.728-73.728c8.035-8.605 19.444-13.968 32.108-13.968 24.236 0 43.886 19.648 43.886 43.886 0 12.665-5.363 24.073-13.943 32.084l-0.025 0.023-71.384 76.068c-31.073 29.214-50.426 70.586-50.426 116.481 0 41.8 16.055 79.851 42.334 108.318l-0.099-0.109c28.323 24.799 65.659 39.923 106.527 39.923 45.364 0 86.377-18.637 115.797-48.671l0.027-0.027 220.596-221.181c29.874-29.148 48.402-69.807 48.402-114.793 0-41.733-15.944-79.74-42.074-108.264l0.109 0.122c-26.409-26.109-62.734-42.236-102.824-42.236-5.002 0-9.944 0.251-14.816 0.741l0.615-0.049c-1.28 0.135-2.767 0.212-4.272 0.212-22.546 0-41.068-17.231-43.113-39.245l-0.012-0.171c-0.136-1.297-0.214-2.802-0.214-4.324 0-22.665 17.181-41.315 39.226-43.641l0.191-0.015c7.239-0.795 15.632-1.247 24.131-1.247 63.452 0 121.008 25.25 163.166 66.25l-0.054-0.053c41.67 44.195 67.28 103.927 67.28 169.644 0 70.104-29.144 133.401-75.978 178.432l-0.081 0.077-220.011 221.767c-46.236 47.686-110.48 77.679-181.734 78.989l-0.242 0.003z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "link"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 250,
                        "id" => 194,
                        "name" => "link",
                        "prevSize" => 80,
                        "code" => 59841
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 67
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.589 117.040h-819.178c-56.419 0.331-102.067 45.977-102.398 102.366v585.16c0.331 56.419 45.977 102.067 102.366 102.398h819.209c56.419-0.331 102.067-45.977 102.398-102.366v-585.16c-0.331-56.419-45.977-102.067-102.366-102.398h-0.033zM102.411 204.808h819.178c8.080 0 14.628 6.551 14.628 14.628v0 131.653h-848.434v-131.653c0-8.080 6.551-14.628 14.628-14.628v0zM921.589 819.192h-819.178c-8.080 0-14.628-6.551-14.628-14.628v0-365.705h848.434v365.705c0 8.080-6.551 14.628-14.628 14.628v0z",
                            "M336.461 570.514h-117.025c-32.315 0-58.514 26.197-58.514 58.514s26.197 58.514 58.514 58.514v0h117.025c32.315 0 58.514-26.197 58.514-58.514s-26.197-58.514-58.514-58.514v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "credit-card"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 251,
                        "id" => 193,
                        "name" => "credit-card",
                        "prevSize" => 80,
                        "code" => 59839
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 68
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M867.007 182.851c-66.261-30.706-136.831-53.332-211.172-66.261-9.158 16.161-19.933 38.248-26.935 56.025-78.651-11.852-156.763-11.852-233.798 0-7.541-17.777-18.316-39.864-27.474-56.025-74.341 12.929-144.911 35.555-211.172 66.261-133.599 201.475-169.692 398.104-151.915 591.499 88.886 66.261 174.541 106.125 259.118 132.522 21.010-28.551 39.326-59.257 55.487-91.042-30.706-11.313-59.796-25.858-87.27-42.558 7.541-5.387 14.545-11.313 21.549-16.7 168.615 78.651 351.236 78.651 517.696 0 7.004 5.925 14.006 11.313 21.549 16.7-27.474 16.7-57.103 30.706-87.27 42.558 16.161 31.783 34.478 62.489 55.487 91.042 84.577-26.397 170.769-66.261 259.118-132.522 21.010-224.64-36.094-419.113-151.915-591.499zM341.769 655.834c-50.639 0-92.119-46.867-92.119-104.508s40.403-104.508 92.119-104.508 92.658 46.867 92.119 104.508c0 57.103-40.403 104.508-92.119 104.508zM681.692 655.834c-50.639 0-92.119-46.867-92.119-104.508s40.403-104.508 92.119-104.508 92.658 46.867 92.119 104.508c0 57.103-40.403 104.508-92.119 104.508z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "discord"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 252,
                        "id" => 192,
                        "name" => "discord",
                        "prevSize" => 80,
                        "code" => 59840
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 69
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M71.252 1019.529c-0.094 0-0.205 0-0.308 0-18.338 0-34.928-7.49-46.876-19.583l-0.004-0.004c-12.065-12.080-19.533-28.766-19.533-47.194s7.46-35.107 19.533-47.195v0l881.496-881.496c12.224-13.091 29.586-21.252 48.86-21.252 36.88 0 66.781 29.901 66.781 66.781 0 19.267-8.161 36.636-21.215 48.818l-0.036 0.034-881.496 881.496c-11.952 12.097-28.542 19.587-46.879 19.587-0.11 0-0.221 0-0.324 0h0.016z",
                            "M200.36 400.703c-110.644 0-200.343-89.695-200.343-200.343s89.695-200.343 200.343-200.343c110.644 0 200.343 89.695 200.343 200.343v0c0 110.644-89.695 200.343-200.343 200.343v0zM200.36 133.579c-36.88 0-66.781 29.901-66.781 66.781s29.901 66.781 66.781 66.781c36.88 0 66.781-29.901 66.781-66.781v0c-0.495-36.684-30.097-66.286-66.733-66.781h-0.048z",
                            "M823.64 1023.979c-110.644 0-200.343-89.695-200.343-200.343s89.695-200.343 200.343-200.343c110.644 0 200.343 89.695 200.343 200.343v0c0 110.644-89.695 200.343-200.343 200.343v0zM823.64 756.859c-36.88 0-66.781 29.901-66.781 66.781s29.901 66.781 66.781 66.781c36.88 0 66.781-29.901 66.781-66.781v0c-0.495-36.684-30.097-66.286-66.733-66.781h-0.048z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "percentage"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 253,
                        "id" => 191,
                        "name" => "percentage",
                        "prevSize" => 80,
                        "code" => 59838
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 70
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M634.635 1025.058h-8.795c-278.481-6.291-501.825-233.529-501.825-512.936 0-143.581 58.979-273.384 154.031-366.506l0.087-0.085c90.386-89.279 214.664-144.424 351.826-144.424 4.737 0 9.461 0.066 14.166 0.197l-0.694-0.015c137.202 2.016 261.047 57.579 351.895 146.67l-0.082-0.081c7.946 7.955 12.862 18.943 12.862 31.077s-4.914 23.121-12.862 31.078v0c-7.955 7.946-18.943 12.862-31.077 12.862s-23.121-4.914-31.078-12.862v0c-76.784-75.59-182.227-122.264-298.57-122.264-235.104 0-425.69 190.589-425.69 425.69s190.589 425.69 425.69 425.69c110.943 0 211.975-42.441 287.744-111.973l-0.312 0.283 12.901-12.313c8.295-7.915 19.557-12.787 31.955-12.787s23.661 4.872 31.975 12.806l-0.018-0.018c8.518 7.555 13.858 18.529 13.858 30.751 0 10.778-4.154 20.587-10.95 27.911l0.023-0.026-2.931 2.931-17.003 16.418c-90.306 81.848-210.707 131.947-342.808 131.947-1.515 0-3.029-0.007-4.542-0.019l0.232 0.001z",
                            "M869.176 468.024h-820.891c-24.287 0-43.976-19.689-43.976-43.976s19.689-43.976 43.976-43.976v0h820.891c24.287 0 43.976 19.689 43.976 43.976s-19.689 43.976-43.976 43.976v0z",
                            "M781.223 643.928h-732.939c-24.287 0-43.976-19.689-43.976-43.976s19.689-43.976 43.976-43.976v0h732.939c24.287 0 43.976 19.689 43.976 43.976s-19.689 43.976-43.976 43.976v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "euro"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 233,
                        "id" => 190,
                        "name" => "euro",
                        "prevSize" => 80,
                        "code" => 59837
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 71
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.533 0.085h-716.682c-1.243-0.037-2.704-0.062-4.171-0.062-76.892 0-139.525 61.042-142.084 137.312l-0.005 0.236v725.456c3.196 89.572 76.578 160.974 166.638 160.974 1.887 0 3.764-0.032 5.636-0.094l-0.273 0.005h690.939c24.1-0.324 43.553-19.777 43.877-43.845v-936.102c-0.324-24.1-19.777-43.553-43.845-43.877h-0.032zM877.652 936.158h-647.059c-1.635 0.122-3.546 0.19-5.469 0.19-41.629 0-75.733-32.206-78.764-73.058l-0.015-0.26c3.043-41.116 37.15-73.322 78.779-73.322 1.923 0 3.834 0.068 5.723 0.205l-0.254-0.015h647.059zM877.652 702.141h-647.059c-30.908 0.035-59.934 8.052-85.138 22.102l0.893-0.458v-586.214c2.714-28.081 26.19-49.857 54.753-49.857 1.322 0 2.628 0.047 3.925 0.14l-0.175-0.011h672.802z",
                            "M321.859 321.859h380.277c24.235 0 43.877-19.646 43.877-43.877s-19.646-43.877-43.877-43.877v0h-380.277c-24.235 0-43.877 19.646-43.877 43.877s19.646 43.877 43.877 43.877v0z",
                            "M321.859 526.626h380.277c24.235 0 43.877-19.646 43.877-43.877s-19.646-43.877-43.877-43.877v0h-380.277c-24.235 0-43.877 19.646-43.877 43.877s19.646 43.877 43.877 43.877v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "book"
                        ]
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 232,
                        "id" => 189,
                        "name" => "book",
                        "prevSize" => 80,
                        "code" => 59834
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 72
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.233c-5.884-0.076-11.5-1.139-16.713-3.034l0.353 0.112c-294.424-132.986-495.622-424.049-495.622-762.108 0-25.218 1.12-50.181 3.311-74.828l-0.228 3.185c1.091-20.259 15.977-36.738 35.376-40.276l0.266-0.038c170.071-26.272 323.191-75.689 464.402-145.534l-9.257 4.14c5.319-2.475 11.548-3.917 18.114-3.917s12.794 1.442 18.385 4.030l-0.271-0.112c131.953 65.702 285.069 115.119 446.231 140.248l8.916 1.146c19.665 3.576 34.547 20.055 35.634 40.204l0.003 0.11c1.964 21.462 3.084 46.42 3.084 71.642 0 338.056-201.194 629.119-490.377 759.984l-5.245 2.124c-4.86 1.783-10.476 2.845-16.326 2.921h-0.034zM88.991 226.293c-0.817 12.916-1.282 28.011-1.282 43.216 0 292.016 171.793 543.905 419.826 660.115l4.464 1.881c252.498-118.092 424.293-369.981 424.293-661.997 0-15.204-0.465-30.297-1.384-45.268l0.1 2.056c-158.673-27.438-300.659-73.974-432.589-137.992l9.58 4.192c-122.352 59.822-264.337 106.359-413.369 132.403l-9.639 1.394z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "shield"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 231,
                        "id" => 188,
                        "name" => "shield",
                        "prevSize" => 80,
                        "code" => 59833
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 73
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M330.174 602.273c-7.682 42.896-39.055 245.207-48.017 302.191 0 4.482 0 5.762-7.042 5.762h-167.743c-0.080 0.001-0.175 0.001-0.271 0.001-15.204 0-27.532-12.324-27.532-27.532 0-1.356 0.097-2.688 0.287-3.989l-0.017 0.147 131.888-839.984c3.692-21.668 21.877-38.101 44.080-39.052l0.096-0.002c342.523 0 371.334-8.323 459.046 26.251 135.089 52.499 147.892 179.266 99.235 316.915s-163.261 201.671-315.635 203.593c-97.314 0-156.215-15.364-169.663 55.059zM883.334 277.035c-3.841-3.2-5.121-3.841-6.402 0-5.355 29.455-12.228 55.051-20.948 79.774l1.103-3.586c-89.632 256.095-338.682 234.965-460.326 234.965-0.779-0.096-1.678-0.148-2.591-0.148-11.979 0-21.761 9.396-22.379 21.221l-0.002 0.053c-50.578 320.115-64.022 384.138-64.022 384.138-0.348 1.539-0.545 3.309-0.545 5.121 0 13.404 10.837 24.274 24.228 24.326h143.414c19.695-0.387 35.904-14.834 39.022-33.697l0.032-0.236c0-12.164 0 14.084 32.653-206.154 10.243-49.297 32.013-44.176 64.022-44.176 159.417 0 284.262-64.022 320.115-256.095 6.318-18.661 9.965-40.158 9.965-62.502 0-57.89-24.469-110.067-63.632-146.751l-0.111-0.101z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "paypal"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 229,
                        "id" => 186,
                        "name" => "paypal",
                        "prevSize" => 80,
                        "code" => 59835
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 74
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M590.061 298.931c-114.531 3.839-397.983 35.193-397.983 268.094 0 250.818 326.32 261.056 433.175 99.176 33.603 38.347 68.51 73.249 105.572 105.755l1.281 1.101 133.727-127.968s-76.142-58.226-76.142-120.93v-335.917c0-57.586-57.586-188.114-264.895-188.114s-319.921 127.968-319.921 238.663l174.038 17.277c14.203-60.869 64.928-106.62 127.331-113.199l0.637-0.053c95.977 0 83.181 67.824 83.181 158.042zM590.061 497.283c0 182.995-198.352 155.482-198.352 39.029s119.010-127.968 198.352-131.807zM909.983 870.953c-103.709 94.959-242.457 153.142-394.795 153.142-5.62 0-11.222-0.080-16.805-0.238l0.821 0.018c-195.949-7.842-370.074-95.152-492.135-230.369l-0.545-0.613c-15.997-17.277 0-25.596 12.797-18.556 172.759 101.736 443.413 268.735 876.588 69.103 19.837-8.319 33.91 4.48 15.357 27.515zM1004.041 876.072c-11.535 27.968-28.737 51.536-50.314 70.185l-0.235 0.197c-12.797 10.238-22.395 6.399-15.357-8.319s46.068-106.215 30.074-127.968-87.020-9.598-113.251-7.038-30.714 4.48-32.634 0 51.186-35.829 88.3-40.309 96.617 0 108.772 13.437c1.186 7.461 1.861 16.066 1.861 24.83 0 26.848-6.362 52.211-17.654 74.664l0.435-0.957z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "amazon"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 240,
                        "id" => 185,
                        "name" => "amazon",
                        "prevSize" => 80,
                        "code" => 59836
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 75
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M886.693 1024.275h-13.467c-160.026-17.856-304.577-71.747-429.374-153.346l3.746 2.3c-119.858-77.12-218.914-175.988-293.94-291.862l-2.302-3.793c-79.488-121.374-133.409-266.357-150.654-422.398l-0.396-4.402c-0.449-4.129-0.705-8.915-0.705-13.764 0-33.499 12.23-64.138 32.468-87.698l-0.148 0.178c22.748-27.565 55.792-45.921 93.167-49.141l0.507-0.035h152.22c68.811 0.070 125.838 50.433 136.308 116.306l0.101 0.786c6.186 45.698 17.046 86.978 32.301 126.063l-1.274-3.701c5.445 14.293 8.602 30.826 8.602 48.093 0 38.102-15.36 72.621-40.225 97.697l-35.702 35.702c57.148 89.292 131.053 162.822 217.85 217.845l2.869 1.699 35.713-35.126c25.068-24.854 59.584-40.214 97.686-40.214 17.267 0 33.797 3.154 49.045 8.917l-0.956-0.318c35.315 13.822 76.581 24.675 119.402 30.688l2.96 0.339c66.678 10.304 117.132 67.286 117.132 136.053 0 1.155-0.014 2.306-0.044 3.455l0.002-0.171v140.51c0 0 0 0.001 0 0.001 0 76.101-61.525 137.836-137.551 138.165h-0.032zM277.818 87.541h-139.923c-14.387 0.979-27.011 7.794-35.649 18.070l-0.063 0.079c-7.402 8.481-11.91 19.649-11.91 31.87 0 1.557 0.075 3.102 0.218 4.622l-0.015-0.194c15.36 145.534 63.692 277.249 137.347 391.045l-2.107-3.473c70.038 108.811 159.916 198.686 265.265 266.637l3.46 2.091c110.418 72.299 242.202 121.557 384.020 137.782l4.14 0.385c0.876 0.051 1.901 0.082 2.931 0.082 14.116 0 26.923-5.614 36.306-14.733l-0.013 0.013c8.993-9.216 14.563-21.807 14.638-35.698v-139.938c0.005-0.32 0.012-0.7 0.012-1.075 0-25.332-18.708-46.298-43.066-49.826l-0.272-0.033c-53.039-7.261-100.842-19.551-146.288-36.646l4.608 1.52c-5.299-2.044-11.429-3.227-17.839-3.227-13.78 0-26.284 5.472-35.452 14.364l0.014-0.013-58.546 58.546c-8.012 7.814-18.974 12.637-31.061 12.637-7.941 0-15.396-2.080-21.853-5.726l0.223 0.115c-125.62-71.885-227.060-173.136-297.132-294.748l-2.038-3.837c-3.709-6.254-5.9-13.781-5.9-21.824 0-12.079 4.944-23.005 12.918-30.863l58.55-58.55c8.886-8.986 14.38-21.346 14.38-34.991 0-6.364-1.195-12.447-3.371-18.038l0.116 0.338c-15.651-40.876-27.948-88.685-34.741-138.244l-0.385-3.437c-3.034-25.502-24.528-45.088-50.597-45.088-0.323 0-0.646 0.002-0.971 0.011l0.048-0.001z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "phone"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 227,
                        "id" => 184,
                        "name" => "phone",
                        "prevSize" => 80,
                        "code" => 59832
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 76
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1004.108 24.712c-7.747-14.706-22.886-24.587-40.341-24.696h-421.65c-24.95 0-45.175 20.226-45.175 45.175s20.226 45.175 45.175 45.175v0h331.285l-111.431 154.198c-5.421 7.322-8.676 16.532-8.676 26.503 0 24.752 20.065 44.816 44.816 44.816 14.78 0 27.892-7.156 36.054-18.191l0.086-0.121 165.641-225.875c5.688-7.337 9.117-16.671 9.117-26.809 0-7.369-1.813-14.314-5.016-20.415l0.116 0.241z",
                            "M310.219 13.266s0 0-3.011 0c-3.291-2.852-7.063-5.273-11.155-7.112l-0.289-0.116c-3.885-1.54-8.385-2.612-13.079-3l-0.172-0.011h-222.261c-17.471 0.11-32.609 9.989-40.237 24.446l-0.12 0.25c-3.089 5.86-4.901 12.805-4.901 20.174 0 10.136 3.43 19.472 9.191 26.909l-0.075-0.1 322.25 437.295v466.81c0.335 24.814 20.362 44.84 45.142 45.175h240.967c24.814-0.335 44.84-20.362 45.175-45.142v-466.843l3.614-5.421 220.455 218.045c8.085 8.184 19.307 13.251 31.713 13.251 0.073 0 0.148 0 0.222 0h-0.011c0.137 0.001 0.299 0.003 0.462 0.003 12.327 0 23.47-5.072 31.455-13.244l0.008-0.008c8.162-8.172 13.212-19.46 13.212-31.923s-5.048-23.751-13.212-31.925v0zM596.326 470.439c-5.634 7.174-9.035 16.335-9.035 26.291 0 0.075 0 0.15 0 0.224v-0.011 436.692h-150.584v-436.692c0-0.064 0-0.138 0-0.212 0-9.955-3.401-19.117-9.105-26.384l0.071 0.093-277.075-380.073h109.624l355.98 352.366z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "grid" => 16,
                        "tags" => [
                            "filter-slash"
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 226,
                        "id" => 183,
                        "name" => "filter-slash",
                        "prevSize" => 80,
                        "code" => 59831
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 77
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1023.989 515.199c-3.553-280.043-231.4-505.695-511.951-505.695-282.764 0-511.989 229.225-511.989 511.989 0 254.507 185.702 465.641 428.999 505.297l2.953 0.397v-362.872h-127.997v-149.116h127.997v-113.278c-0.721-6.073-1.134-13.108-1.134-20.239 0-100.028 81.088-181.117 181.117-181.117 4.227 0 8.421 0.145 12.576 0.43l-0.561-0.031c40.895 0.576 80.479 4.278 119.075 10.879l-4.516-0.639v127.997h-63.999c-2.79-0.372-6.015-0.583-9.289-0.583-41 0-74.238 33.238-74.238 74.238 0 2.458 0.12 4.89 0.352 7.287l-0.024-0.304v96.638h142.077l-23.040 149.116h-118.397v358.392c246.274-40.033 432-251.177 432-505.702 0-1.084-0.003-2.169-0.010-3.253l0.001 0.166z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "facebook"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 223,
                        "id" => 182,
                        "name" => "facebook",
                        "prevSize" => 80,
                        "code" => 59828
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 78
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M342.537 824.066c0 4.477-4.477 7.674-10.871 7.674s-11.511 0-11.511-7.674 5.115-7.674 10.871-7.674 11.511 3.197 11.511 7.674zM278.59 814.474c0 4.477 0 9.592 8.952 10.871 1.214 0.597 2.642 0.946 4.152 0.946 3.78 0 7.050-2.187 8.614-5.366l0.025-0.057c0-4.477 0-8.952-8.952-10.871s-11.511 0-12.789 4.477zM369.395 811.277c-5.755 0-9.592 5.115-8.952 10.232s5.755 7.034 12.151 5.755 9.592-5.755 8.952-10.232-5.755-6.395-12.151-5.755zM505.605 0.416c-1.401-0.013-3.056-0.022-4.712-0.022-276.536 0-500.713 224.177-500.713 500.713 0 5.405 0.085 10.79 0.256 16.152l-0.019-0.784c-0.043 2.548-0.069 5.556-0.069 8.569 0 228.113 144.076 422.574 346.195 497.35l3.671 1.189c26.218 4.477 35.81-12.151 35.81-25.58s0-85.69 0-127.896c0 0-144.523 31.974-175.218-63.949 0 0-23.021-63.949-56.913-77.378 0 0-47.321-33.253 3.197-32.614 34.33 4.756 63.049 25.238 79.017 53.815l0.277 0.541c18.278 35.272 54.506 58.959 96.268 58.959 20.145 0 39.003-5.513 55.146-15.109l-0.498 0.274c2.59-27.799 14.547-52.403 32.64-71.009l-0.027 0.027c-115.106-13.429-231.491-30.055-231.491-234.050-0.145-2.57-0.228-5.577-0.228-8.605 0-45.473 18.687-86.583 48.8-116.067l0.028-0.028c-6.646-19.325-10.482-41.593-10.482-64.756 0-28.316 5.734-55.295 16.103-79.836l-0.505 1.347c43.484-14.069 142.605 56.913 142.605 56.913 38.806-11.37 83.386-17.912 129.495-17.912s90.69 6.541 132.864 18.747l-3.369-0.835s99.119-70.982 142.605-56.913c10.054 23.11 15.902 50.029 15.902 78.316 0 23.246-3.951 45.569-11.215 66.335l0.429-1.407c32.709 30.551 53.097 73.938 53.097 122.086 0 0.919-0.007 1.836-0.022 2.75l0.001-0.138c0 204.633-121.502 220.621-236.608 234.050 20.129 22.501 32.432 52.369 32.432 85.111 0 3.805-0.166 7.572-0.492 11.293l0.034-0.483c0 71.622 0 159.871 0 177.137-0.001 0.076-0.001 0.166-0.001 0.258 0 14.833 12.025 26.858 26.858 26.858 3.209 0 6.287-0.564 9.141-1.596l-0.187 0.058c204.623-75.025 347.995-268.129 347.995-494.721 0-3.906-0.042-7.803-0.127-11.688l0.010 0.579c0.012-1.343 0.019-2.929 0.019-4.517 0-282.54-229.044-511.584-511.584-511.584-2.256 0-4.508 0.015-6.757 0.043l0.342-0.003zM201.213 730.062s0 7.034 0 10.871c1.389 1.394 3.312 2.257 5.436 2.257s4.047-0.863 5.436-2.257v0s0-7.034 0-11.511-8.314-1.918-10.871 0.64zM178.831 712.796s0 6.395 4.477 8.314c1.064 1.308 2.674 2.137 4.477 2.137s3.413-0.829 4.468-2.127l0.009-0.010s0-6.395-4.477-8.314-7.674-1.918-8.952 0zM242.778 788.256s0 8.952 0 13.429 10.871 5.115 13.429 0 0-8.952 0-13.429-8.314-3.197-10.871 0zM219.118 756.92s0 7.674 0 12.789 8.952 7.034 12.151 5.115c1.56-1.787 2.512-4.14 2.512-6.715s-0.952-4.928-2.522-6.727l0.010 0.012c-3.197-5.115-8.314-7.034-12.151-4.477z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "github"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 222,
                        "id" => 181,
                        "name" => "github",
                        "prevSize" => 80,
                        "code" => 59829
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 79
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M916.838 305.187c0 8.789 0 18.096 0 26.886 0.007 1.078 0.011 2.355 0.011 3.631 0 325.813-264.124 589.936-589.936 589.936-1.276 0-2.552-0.004-3.827-0.012l0.196 0.001c-0.51 0.001-1.114 0.002-1.717 0.002-118.435 0-228.719-34.901-321.128-94.979l2.284 1.392c17.062 0 33.091 0 51.704 0 0.002 0 0.005 0 0.007 0 97.98 0 188.092-33.688 259.382-90.114l-0.874 0.667c-91.316-0.843-168.422-60.74-195.032-143.307l-0.407-1.464c11.773 1.974 25.336 3.103 39.164 3.103 0.228 0 0.456 0 0.683-0.001h-0.035c19.516-0.144 38.393-2.587 56.462-7.070l-1.657 0.348c-95.075-19.916-165.451-103.058-165.451-202.636 0-0.015 0-0.030 0-0.046v0.002c27.158 15.264 59.356 24.854 93.652 26.353l0.448 0.016c-57.044-38.132-94.103-102.278-94.103-175.078 0-0.433 0.001-0.865 0.004-1.298v0.067c0.070-38.098 10.43-73.76 28.447-104.376l-0.527 0.968c103.206 126.555 255.913 209.348 428.158 218.642l1.498 0.064c-3.124-14.226-4.998-30.628-5.17-47.438l-0.001-0.128c-0.065-1.95-0.103-4.241-0.103-6.541 0-114.221 92.594-206.813 206.813-206.813 61.722 0 117.127 27.038 155.021 69.915l0.191 0.222c49.972-10.236 94.309-28.167 134.131-52.719l-1.769 1.015c-16.162 49.068-48.731 89.016-91.083 114.259l-0.949 0.523c44.586-4.928 85.337-16.248 123.076-33.095l-2.607 1.040c-28.94 41.915-63.161 77.617-102.256 107.223l-1.151 0.837z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "grid" => 16,
                        "tags" => [
                            "twitter"
                        ]
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 221,
                        "id" => 180,
                        "name" => "twitter",
                        "prevSize" => 80,
                        "code" => 59830
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 80
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M795.402 3.99c-18.498-7.266-39.637-3.303-54.171 10.57l-443.93 443.93v-408.918c0-27.085-22.461-49.546-49.546-49.546s-49.546 22.461-49.546 49.546v924.854c0 27.085 22.461 49.546 49.546 49.546s49.546-22.461 49.546-49.546v-408.918l443.93 443.93c9.248 9.248 22.461 14.534 35.012 14.534 6.607 0 12.552-1.321 19.157-3.964 18.498-7.927 30.389-25.764 30.389-45.582v-924.854c0-19.818-11.891-38.316-30.389-45.582zM726.699 854.857l-342.857-342.857 342.857-342.857v685.713z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "step-backward-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 211,
                        "id" => 0,
                        "name" => "step-backward-alt",
                        "prevSize" => 80,
                        "code" => 59820
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 81
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M776.245 0.027c-27.085 0-49.546 22.461-49.546 49.546v408.918l-443.93-443.93c-13.873-13.873-35.673-18.498-54.171-10.57s-30.389 25.764-30.389 45.582v924.854c0 19.818 11.891 38.316 30.389 45.582 5.945 2.643 12.552 3.964 19.157 3.964 13.212 0 25.764-5.284 35.012-14.534l443.93-443.93v408.918c0 27.085 22.461 49.546 49.546 49.546s49.546-22.461 49.546-49.546v-924.854c0-27.085-22.461-49.546-49.546-49.546zM297.301 854.857v-685.713l342.857 342.857-342.857 342.857z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "step-forward-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 210,
                        "id" => 1,
                        "name" => "step-forward-alt",
                        "prevSize" => 80,
                        "code" => 59821
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 82
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1009.943 479.818l-437.090-409.59c-12.873-11.702-31.597-15.213-47.395-8.191s-26.331 22.82-26.331 40.374v366.875l-425.388-399.058c-12.873-11.702-31.597-15.213-47.395-8.191s-26.331 22.82-26.331 40.374v819.178c0 17.554 10.532 33.352 26.331 40.374 5.852 2.341 11.702 3.511 17.554 3.511 11.118 0 21.65-4.096 29.842-11.702l425.388-399.058v366.875c0 17.554 10.532 33.352 26.331 40.374 5.852 2.341 11.702 3.511 17.554 3.511 11.118 0 21.65-4.096 29.842-11.702l437.090-409.59c8.777-8.191 14.043-19.895 14.043-32.182s-5.266-23.99-14.043-32.182zM87.783 820.362v-616.725l328.842 308.362-328.842 308.362zM586.896 820.362v-616.725l328.842 308.362-328.842 308.362z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "forward"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 259,
                        "id" => 2,
                        "name" => "forward",
                        "prevSize" => 80,
                        "code" => 59822
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 83
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M997.655 62.036c-15.798-7.022-34.522-3.511-47.395 8.191l-425.388 399.058v-366.875c0-17.554-10.532-33.352-26.331-40.374s-34.522-3.511-47.395 8.191l-437.090 409.59c-8.777 8.191-14.043 19.895-14.043 32.182s5.266 23.99 14.043 32.182l437.090 409.59c8.191 7.607 19.309 11.702 29.842 11.702 5.852 0 11.702-1.17 17.554-3.511 15.798-7.022 26.331-22.82 26.331-40.374v-366.875l425.388 399.058c8.191 7.607 19.309 11.702 29.842 11.702 5.852 0 11.702-1.17 17.554-3.511 15.798-7.022 26.331-22.82 26.331-40.374v-819.178c0-17.554-10.532-33.352-26.331-40.374zM437.104 820.362l-328.842-308.362 328.842-308.362v616.725zM936.217 820.362l-328.842-308.362 328.842-308.362v616.725z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "backward"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 254,
                        "id" => 3,
                        "name" => "backward",
                        "prevSize" => 80,
                        "code" => 59823
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 84
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M997.071 62.036c-16.384-7.022-35.108-2.925-47.981 9.362l-393.206 393.206v-362.194c0-17.554-10.532-33.938-26.916-40.374-16.384-7.022-35.108-2.925-47.981 9.362l-393.206 393.206v-362.194c0-23.99-19.895-43.885-43.885-43.885s-43.885 19.895-43.885 43.885v819.178c0 23.99 19.895 43.885 43.885 43.885s43.885-19.895 43.885-43.885v-362.194l393.206 393.206c8.191 8.191 19.309 12.873 31.011 12.873 5.852 0 11.118-1.17 16.968-3.511 16.384-7.022 26.916-22.82 26.916-40.374v-362.194l393.206 393.206c8.191 8.191 19.309 12.873 31.011 12.873 5.852 0 11.118-1.17 16.968-3.511 16.384-7.022 26.916-22.82 26.916-40.374v-819.178c0-17.554-10.532-33.938-26.916-40.374zM468.115 815.681l-303.681-303.681 303.681-303.681v607.362zM936.217 815.681l-303.681-303.681 303.681-303.681v607.362z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "fast-backward"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 207,
                        "id" => 4,
                        "name" => "fast-backward",
                        "prevSize" => 80,
                        "code" => 59824
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 85
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M980.102 58.526c-23.99 0-43.885 19.895-43.885 43.885v362.194l-393.206-393.206c-12.288-12.288-31.597-16.384-47.981-9.362s-26.916 22.82-26.916 40.374v362.194l-393.206-393.206c-12.288-12.288-31.597-16.384-47.981-9.362s-26.916 22.82-26.916 40.374v819.178c0 17.554 10.532 33.938 26.916 40.374 5.266 2.341 11.118 3.511 16.968 3.511 11.702 0 22.82-4.681 31.011-12.873l393.206-393.206v362.194c0 17.554 10.532 33.938 26.916 40.374 5.266 2.341 11.118 3.511 16.968 3.511 11.702 0 22.82-4.681 31.011-12.873l393.206-393.206v362.194c0 23.99 19.895 43.885 43.885 43.885s43.885-19.895 43.885-43.885v-819.178c0-23.99-19.895-43.885-43.885-43.885zM87.783 815.681v-607.362l303.681 303.681-303.681 303.681zM555.885 815.681v-607.362l303.681 303.681-303.681 303.681z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "fast-forward"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 206,
                        "id" => 5,
                        "name" => "fast-forward",
                        "prevSize" => 80,
                        "code" => 59825
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 86
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M313.813 1023.983c-27.215-0.367-49.18-22.332-49.547-49.511v-924.907c0-27.364 22.183-49.547 49.547-49.547s49.547 22.183 49.547 49.547v0 924.872c-0.367 27.215-22.332 49.18-49.511 49.547h-0.036z",
                            "M710.187 1023.983c-27.215-0.367-49.18-22.332-49.547-49.511v-924.907c0-27.364 22.183-49.547 49.547-49.547s49.547 22.183 49.547 49.547v0 924.872c-0.367 27.215-22.332 49.18-49.511 49.547h-0.036z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "pause"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 205,
                        "id" => 6,
                        "name" => "pause",
                        "prevSize" => 80,
                        "code" => 59826
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 87
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M280.358 1024.923c-6.942-0.037-13.534-1.495-19.514-4.095l0.321 0.124c-18.014-7.505-30.445-24.968-30.445-45.335 0-0.116 0-0.233 0.002-0.349v0.019-926.568c1.044-26.589 22.852-47.75 49.602-47.75 12.752 0 24.381 4.809 33.173 12.712l-0.045-0.040 463.285 463.285c8.969 8.98 14.517 21.381 14.517 35.077s-5.547 26.097-14.517 35.078v0l-463.285 463.285c-8.576 8.44-20.14 13.868-32.964 14.555l-0.127 0.006zM329.996 168.508v686.985l343.492-343.492z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "play"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 204,
                        "id" => 7,
                        "name" => "play",
                        "prevSize" => 80,
                        "code" => 59827
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 88
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M736.143 262.827l-277.617 113.777c-38.623 15.541-68.655 45.573-83.837 83.191l-0.359 1.004-113.777 277.617c-0.848 2.097-1.341 4.529-1.341 7.076 0 8.091 4.968 15.023 12.020 17.908l0.129 0.047c2.113 0.807 4.557 1.275 7.111 1.275s4.997-0.467 7.252-1.321l-0.141 0.047 277.617-113.777c38.623-15.541 68.655-45.573 83.837-83.191l0.359-1.004 113.777-277.617c0.848-2.097 1.341-4.529 1.341-7.076 0-8.091-4.968-15.023-12.020-17.908l-0.129-0.047c-2.113-0.807-4.557-1.275-7.111-1.275s-4.997 0.467-7.252 1.321l0.141-0.047zM512 568.889c-31.419 0-56.889-25.471-56.889-56.889s25.471-56.889 56.889-56.889c31.419 0 56.889 25.471 56.889 56.889v0c0 31.419-25.471 56.889-56.889 56.889v0z",
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "compass"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 203,
                        "id" => 8,
                        "name" => "compass",
                        "prevSize" => 80,
                        "code" => 59819
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 89
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.588 906.96h-819.175c-56.419-0.331-102.067-45.977-102.397-102.366v-585.157c0.331-56.419 45.977-102.067 102.366-102.397h819.207c56.419 0.331 102.067 45.977 102.397 102.366v585.157c-0.331 56.419-45.977 102.067-102.366 102.397h-0.032zM102.412 204.809c-8.079 0-14.629 6.55-14.629 14.629v0 585.126c0 8.079 6.55 14.629 14.629 14.629v0h819.175c8.079 0 14.629-6.55 14.629-14.629v0-585.126c0-8.079-6.55-14.629-14.629-14.629v0z",
                            "M336.462 497.371c-64.631 0-117.025-52.394-117.025-117.025s52.394-117.025 117.025-117.025c64.631 0 117.025 52.394 117.025 117.025v0c0 64.631-52.394 117.025-117.025 117.025v0zM336.462 351.091c-16.158 0-29.256 13.098-29.256 29.256s13.098 29.256 29.256 29.256c16.158 0 29.256-13.098 29.256-29.256v0c0-16.158-13.098-29.256-29.256-29.256v0z",
                            "M512 731.422c-24.105-0.325-43.559-19.78-43.884-43.853v-0.032c0-39.788-9.947-73.14-131.653-73.14s-131.653 33.352-131.653 73.14c0 24.237-19.648 43.884-43.884 43.884s-43.884-19.648-43.884-43.884v0c0-160.909 165.005-160.909 219.422-160.909s219.422 0 219.422 160.909c-0.325 24.105-19.78 43.559-43.853 43.884h-0.032z",
                            "M804.562 438.86h-175.538c-24.237 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h175.538c24.237 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M746.051 614.397h-117.025c-24.237 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h117.025c24.237 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "id-card"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 202,
                        "id" => 9,
                        "name" => "id-card",
                        "prevSize" => 80,
                        "code" => 59818
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 90
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.588 906.96h-819.175c-56.419-0.331-102.067-45.977-102.397-102.366v-146.313c0.325-24.105 19.78-43.559 43.853-43.884h0.032c56.552 0 102.397-45.844 102.397-102.397s-45.844-102.397-102.397-102.397v0c-24.105-0.325-43.559-19.78-43.884-43.853v-146.313c0.331-56.419 45.977-102.067 102.366-102.397h819.207c56.419 0.331 102.067 45.977 102.397 102.366v146.313c-0.325 24.105-19.78 43.559-43.853 43.884h-0.032c-56.552 0-102.397 45.844-102.397 102.397s45.844 102.397 102.397 102.397v0c24.105 0.325 43.559 19.78 43.884 43.853v146.313c-0.331 56.419-45.977 102.067-102.366 102.397h-0.032zM87.785 696.9v107.664c0 8.079 6.55 14.629 14.629 14.629v0h819.175c8.079 0 14.629-6.55 14.629-14.629v0-107.664c-84.233-20.753-145.724-95.646-145.724-184.9s61.489-164.147 144.417-184.627l1.306-0.273v-107.664c0-8.079-6.55-14.629-14.629-14.629v0h-819.175c-8.079 0-14.629 6.55-14.629 14.629v0 107.664c84.233 20.753 145.724 95.646 145.724 184.9s-61.489 164.147-144.417 184.627l-1.306 0.273z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "ticket"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 201,
                        "id" => 10,
                        "name" => "ticket",
                        "prevSize" => 80,
                        "code" => 59817
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 91
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M894.081 336.465l-323.57-323.57c-7.935-7.944-18.897-12.862-31.009-12.873h-261.55c-88.866 0-160.907 72.041-160.907 160.907v0 702.14c0 88.866 72.041 160.907 160.907 160.907v0h468.093c88.866 0 160.907-72.041 160.907-160.907v0-497.35c-0.494-11.473-5.32-21.731-12.872-29.254l-0.001-0.001zM585.139 149.812l172.024 172.024h-172.024zM746.047 936.209h-468.093c-40.394 0-73.139-32.746-73.139-73.139v0-702.14c0-40.394 32.746-73.139 73.139-73.139v0h219.419v277.931c0.325 24.105 19.779 43.559 43.852 43.884h277.962v453.466c0 40.394-32.746 73.139-73.139 73.139v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "file-o",
                            "deprecate"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 200,
                        "id" => 11,
                        "name" => "file-o",
                        "prevSize" => 80,
                        "code" => 59816
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 92
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M680.456 749.159c-0.386 0.011-0.839 0.017-1.294 0.017-27.363 0-49.546-22.183-49.546-49.546 0-13.679 5.543-26.064 14.506-35.029v0l258.959-256.978-258.959-256.978c-8.952-8.963-14.491-21.342-14.491-35.012s5.537-26.049 14.491-35.013v0c8.963-8.952 21.342-14.491 35.012-14.491s26.049 5.537 35.013 14.491v0l294.632 291.991c8.952 8.963 14.491 21.342 14.491 35.012s-5.537 26.049-14.491 35.013v0l-294.632 291.991c-8.452 8.957-20.405 14.534-33.659 14.534-0.011 0-0.023 0-0.034 0h0.002z",
                            "M49.571 957.913c-27.215-0.367-49.179-22.331-49.546-49.51v-500.779c0.367-27.215 22.331-49.179 49.51-49.546h924.892c27.363 0 49.546 22.183 49.546 49.546s-22.183 49.546-49.546 49.546v0h-875.31v451.197c-0.367 27.215-22.331 49.179-49.51 49.546h-0.036z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "reply"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 199,
                        "id" => 12,
                        "name" => "reply",
                        "prevSize" => 80,
                        "code" => 59815
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 93
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.972c-0.004 0-0.010 0-0.016 0-27.661 0-52.702-11.211-70.831-29.334l-411.791-411.791c-18.134-18.13-29.35-43.178-29.35-70.845s11.216-52.715 29.35-70.845l411.791-411.791c18.415-17.494 43.374-28.255 70.845-28.255s52.43 10.76 70.891 28.296l-0.044-0.042 411.791 411.791c18.134 18.13 29.35 43.178 29.35 70.845s-11.216 52.715-29.35 70.845l-411.791 411.791c-18.129 18.125-43.17 29.334-70.831 29.334-0.005 0-0.010 0-0.016 0h0.001zM512 83.051c-0.143-0.005-0.31-0.008-0.477-0.008-4.422 0-8.397 1.921-11.133 4.975l-0.013 0.014-412.345 412.345c-3.072 2.929-4.981 7.053-4.981 11.623s1.91 8.694 4.975 11.617l412.351 412.351c2.502 3.832 6.772 6.329 11.623 6.329s9.121-2.497 11.591-6.276l0.032-0.053 412.345-412.345c3.072-2.929 4.981-7.053 4.981-11.623s-1.91-8.694-4.975-11.617l-412.351-412.351c-2.749-3.068-6.722-4.989-11.146-4.989-0.167 0-0.335 0.003-0.502 0.008h0.025z",
                            "M441.707 645.942c-0.057 0-0.126 0-0.193 0-11.4 0-21.712-4.657-29.137-12.173l-121.77-121.77c-7.501-7.51-12.141-17.881-12.141-29.334s4.639-21.825 12.141-29.335v0l121.767-122.873c7.51-7.501 17.881-12.141 29.334-12.141s21.825 4.639 29.335 12.141v0c7.501 7.51 12.141 17.881 12.141 29.334s-4.639 21.825-12.141 29.335v0l-94.092 92.985 94.092 92.985c7.501 7.51 12.141 17.881 12.141 29.334s-4.639 21.825-12.141 29.335v0c-7.429 7.52-17.741 12.177-29.141 12.177-0.067 0-0.136 0-0.204 0h0.010z",
                            "M705.718 678.045c-22.801-0.307-41.204-18.71-41.511-41.481v-110.726h-345.927c-22.926 0-41.511-18.585-41.511-41.511s18.585-41.511 41.511-41.511v0h387.438c22.801 0.307 41.204 18.71 41.511 41.481v154.451c-1.483 21.852-19.449 39.046-41.487 39.297h-0.025z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "directions-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 195,
                        "id" => 13,
                        "name" => "directions-alt",
                        "prevSize" => 80,
                        "code" => 59813
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 94
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.972c-0.004 0-0.010 0-0.016 0-27.661 0-52.702-11.211-70.831-29.334l-411.791-411.791c-18.134-18.13-29.35-43.178-29.35-70.845s11.216-52.715 29.35-70.845l411.791-411.791c18.415-17.494 43.374-28.255 70.845-28.255s52.43 10.76 70.891 28.296l-0.044-0.042 411.791 411.791c18.134 18.13 29.35 43.178 29.35 70.845s-11.216 52.715-29.35 70.845l-411.791 411.791c-18.129 18.125-43.17 29.334-70.831 29.334-0.005 0-0.010 0-0.016 0h0.001zM512 83.051c-0.143-0.005-0.31-0.008-0.477-0.008-4.422 0-8.397 1.921-11.133 4.975l-0.013 0.014-412.345 412.345c-3.072 2.929-4.981 7.053-4.981 11.623s1.91 8.694 4.975 11.617l412.351 412.351c2.502 3.832 6.772 6.329 11.623 6.329s9.121-2.497 11.591-6.276l0.032-0.053 412.345-412.345c3.072-2.929 4.981-7.053 4.981-11.623s-1.91-8.694-4.975-11.617l-412.351-412.351c-2.749-3.068-6.722-4.989-11.146-4.989-0.167 0-0.335 0.003-0.502 0.008h0.025z",
                            "M582.293 645.942c-0.057 0-0.126 0-0.193 0-11.4 0-21.712-4.657-29.137-12.173l-0.004-0.004c-7.501-7.51-12.141-17.881-12.141-29.334s4.639-21.825 12.141-29.335v0l94.092-92.985-94.092-92.985c-8.139-7.599-13.212-18.392-13.212-30.371 0-22.926 18.585-41.511 41.511-41.511 11.979 0 22.771 5.073 30.347 13.188l0.022 0.025 121.767 122.319c7.668 7.537 12.42 18.020 12.42 29.612s-4.752 22.075-12.413 29.605l-0.006 0.005-121.767 121.767c-7.429 7.52-17.741 12.177-29.141 12.177-0.067 0-0.136 0-0.204 0h0.010z",
                            "M318.282 678.045c-22.801-0.307-41.204-18.71-41.511-41.481v-154.451c0.307-22.801 18.71-41.204 41.481-41.511h387.468c22.926 0 41.511 18.585 41.511 41.511s-18.585 41.511-41.511 41.511v0h-345.927v110.696c0.021 0.497 0.032 1.078 0.032 1.663 0 23.049-18.537 41.768-41.516 42.061h-0.027z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "directions"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 196,
                        "id" => 14,
                        "name" => "directions",
                        "prevSize" => 80,
                        "code" => 59814
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 95
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M992.966 368.647c-25.16-29.841-61.437-46.809-100.641-46.809h-235.803v-160.907c0-88.937-71.969-160.907-165.589-160.907-40.959 0-77.821 24.575-94.203 62.607l-148.619 346.974h-109.417c-76.65 0-138.673 62.023-138.673 138.673v337.613c0 76.066 62.607 138.087 138.673 138.087h676.396c63.778 0 118.194-45.639 129.31-108.832l77.235-438.838c6.436-38.618-4.096-77.821-29.255-107.662zM138.696 936.209c-28.086 0-50.905-22.82-50.905-50.32v-337.613c0-28.086 22.82-50.905 50.905-50.905h94.203v438.838h-94.203zM858.39 899.933c-3.511 21.064-21.65 36.277-43.298 36.277h-493.839v-473.945l156.226-365.699c2.341-5.266 7.607-9.362 18.723-9.362 40.373 0 72.555 32.766 72.555 73.139v248.674h323.57c13.457 0 25.16 5.266 33.352 15.213s11.702 22.82 9.362 36.277l-77.235 438.838z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "thumbs-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 191,
                        "id" => 15,
                        "name" => "thumbs-up",
                        "prevSize" => 80,
                        "code" => 59811
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 96
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M885.271 0.068h-676.92c-63.773 0-118.184 45.635-129.299 108.822l-76.643 438.799c-6.435 38.614 4.096 77.814 28.669 107.652 25.158 29.838 61.432 46.805 100.632 46.805h235.782v160.892c0 88.929 71.963 160.892 165.574 160.892 40.955 0 77.814-24.573 94.195-62.602l148.606-346.943h109.992c76.643 0 138.66-62.017 138.66-138.66v-337.583c0-76.059-62.017-138.075-138.66-138.075zM702.731 561.731l-156.212 365.666c-2.341 5.266-7.606 9.361-18.722 9.361-40.369 0-72.549-32.763-72.549-73.133v-248.652h-323.541c-13.456 0-25.158-5.266-33.349-15.211-8.776-9.946-11.701-22.818-9.361-36.274l76.643-438.799c3.51-21.062 21.648-36.274 43.294-36.274h493.795v473.317zM936.172 475.726c0 28.083-22.818 50.901-50.901 50.901h-94.195v-438.799h94.195c28.083 0 50.901 22.818 50.901 50.315v337.583z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "thumbs-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 258,
                        "id" => 16,
                        "name" => "thumbs-down",
                        "prevSize" => 80,
                        "code" => 59812
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 97
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M272.871 1023.949c-0.183 0.003-0.398 0.003-0.613 0.003-13.694 0-26.089-5.555-35.058-14.536v0l-165.145-167.127c-8.952-8.963-14.49-21.341-14.49-35.010s5.536-26.047 14.49-35.012v0c9.138-8.837 21.604-14.282 35.341-14.282s26.202 5.445 35.355 14.296l132.101 132.101 132.115-132.115c9.138-8.837 21.604-14.282 35.341-14.282s26.202 5.445 35.355 14.296l-0.014-0.014c8.952 8.963 14.49 21.341 14.49 35.010s-5.536 26.047-14.49 35.012v0l-165.145 165.145c-9.003 10.201-22.109 16.602-36.709 16.602-1.030 0-2.051-0.033-3.065-0.094l0.139 0.006z",
                            "M272.871 1023.949c-0.002 0-0.003 0-0.005 0-27.495 0-49.827-22.103-50.2-49.508v-924.845c0.373-27.441 22.705-49.543 50.2-49.543 0.002 0 0.003 0 0.005 0v0c27.077 0.373 48.882 22.409 48.882 49.539 0 0.002 0 0.003 0 0.005v0 924.81c0 0.002 0 0.003 0 0.005 0 27.13-21.807 49.167-48.848 49.539h-0.036z",
                            "M850.216 990.919c-27.077-0.373-48.882-22.409-48.882-49.539 0-0.002 0-0.003 0-0.005v0-268.195l-25.763 14.533c-6.952 3.915-15.262 6.222-24.111 6.222-27.515 0-49.821-22.305-49.821-49.821 0-18.667 10.266-34.936 25.459-43.468l0.251-0.13 43.598-23.781c12.816-9.446 28.919-15.117 46.348-15.117 12.457 0 24.238 2.898 34.704 8.055l-0.461-0.206c29.13 13.962 48.887 43.216 48.887 77.083 0 0.303-0.002 0.608-0.005 0.91v-0.046 293.958c-0.373 27.441-22.705 49.543-50.2 49.543-0.002 0-0.003 0-0.005 0v0z",
                            "M817.187 330.341c-81.802-0.375-147.969-66.775-147.969-148.629 0-82.086 66.545-148.63 148.63-148.63s148.629 66.543 148.63 148.629v0c0.002 0.198 0.002 0.432 0.002 0.666 0 81.722-66.249 147.969-147.969 147.969-0.464 0-0.929-0.002-1.393-0.006h0.071zM817.187 132.168c-27.362 0-49.543 22.182-49.543 49.543s22.182 49.543 49.543 49.543v0c27.362 0 49.543-22.182 49.543-49.543s-22.182-49.543-49.543-49.543v0z",
                            "M783.498 462.457h-32.369c-27.362 0-49.543-22.182-49.543-49.543s22.182-49.543 49.543-49.543v0h32.369c43.854-0.949 79.426-35.145 82.556-78.334l0.015-0.274c0-19.156 0-42.278 0-70.022v-33.028c0-0.002 0-0.003 0-0.005 0-27.13 21.807-49.167 48.848-49.539h0.036c0.002 0 0.003 0 0.005 0 27.495 0 49.827 22.103 50.2 49.508v33.064c0 29.726 0 54.168 0 75.306-6.052 95.91-84.883 171.519-181.572 172.411h-0.088z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-numeric-down-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 255,
                        "id" => 17,
                        "name" => "sort-numeric-down-alt",
                        "prevSize" => 80,
                        "code" => 59798
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 98
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M438.010 264.266c-14.187-0.375-26.837-6.658-35.632-16.47l-0.042-0.046-132.124-132.124-132.124 132.124c-8.829 7.573-20.392 12.184-33.031 12.184s-24.204-4.609-33.099-12.241l0.068 0.057c-7.83-8.725-12.617-20.319-12.617-33.031s4.787-24.306 12.658-33.077l-0.040 0.046 165.156-165.156c9.138-8.838 21.605-14.283 35.344-14.283s26.204 5.445 35.358 14.297l165.142 165.142c8.952 8.963 14.491 21.342 14.491 35.013s-5.537 26.049-14.491 35.014v0c-8.632 7.819-20.139 12.603-32.763 12.603-0.791 0-1.578-0.019-2.36-0.056l0.11 0.005z",
                            "M272.855 1023.983c-0.002 0-0.003 0-0.005 0-27.497 0-49.83-22.104-50.203-49.511v-924.907c0.373-27.443 22.706-49.547 50.203-49.547 0.002 0 0.003 0 0.005 0v0c27.079 0.373 48.886 22.411 48.886 49.542 0 0.002 0 0.003 0 0.005v0 924.872c0 0.002 0 0.003 0 0.005 0 27.131-21.808 49.17-48.852 49.542h-0.036z",
                            "M850.238 990.951c-27.079-0.373-48.886-22.411-48.886-49.542 0-0.002 0-0.003 0-0.005v0-268.213l-25.764 14.534c-6.952 3.916-15.263 6.223-24.112 6.223-27.517 0-49.824-22.307-49.824-49.824 0-18.668 10.267-34.938 25.461-43.471l0.251-0.13 43.601-23.782c12.817-9.446 28.921-15.118 46.351-15.118 12.458 0 24.239 2.898 34.706 8.056l-0.461-0.206c29.132 13.963 48.89 43.219 48.89 77.089 0 0.303-0.002 0.608-0.005 0.91v-0.046 293.978c-0.373 27.443-22.706 49.547-50.203 49.547-0.002 0-0.003 0-0.005 0v0z",
                            "M817.208 330.329c-81.808-0.375-147.979-66.78-147.979-148.639 0-82.091 66.549-148.64 148.64-148.64s148.639 66.547 148.64 148.639v0c0.002 0.198 0.002 0.432 0.002 0.666 0 81.727-66.253 147.979-147.979 147.979-0.465 0-0.929-0.002-1.394-0.006h0.071zM817.208 132.142c-27.364 0-49.547 22.183-49.547 49.547s22.183 49.547 49.547 49.547v0c27.364 0 49.547-22.183 49.547-49.547s-22.183-49.547-49.547-49.547v0z",
                            "M783.516 462.453h-32.371c-27.364 0-49.547-22.183-49.547-49.547s22.183-49.547 49.547-49.547v0h32.371c43.857-0.949 79.431-35.147 82.562-78.34l0.015-0.274c0-19.158 0-42.28 0-70.027v-33.031c0-0.002 0-0.003 0-0.005 0-27.131 21.808-49.17 48.852-49.542h0.036c0.002 0 0.003 0 0.005 0 27.497 0 49.83 22.104 50.203 49.511v33.066c0 29.728 0 54.172 0 75.311-6.052 95.916-84.889 171.531-181.584 172.423h-0.088z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-numeric-up-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 182,
                        "id" => 18,
                        "name" => "sort-numeric-up-alt",
                        "prevSize" => 80,
                        "code" => 59799
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 99
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M394.416 774.25l-80.59 80.59v-805.246c0-27.083-22.46-49.543-49.543-49.543s-49.543 22.46-49.543 49.543v805.246l-80.59-80.59c-19.156-19.156-50.864-19.156-70.022 0s-19.156 50.864 0 70.022l165.145 165.145c4.625 4.625 9.909 7.927 15.854 10.57s12.552 3.963 19.156 3.963 12.552-1.321 19.156-3.963c5.945-2.643 11.229-5.945 15.854-10.57l165.145-165.145c19.156-19.156 19.156-50.864 0-70.022s-50.864-19.156-70.022 0z",
                            "M971.763 924.862l-112.959-316.417c-11.229-28.405-36.992-46.901-66.058-46.901s-54.828 18.497-66.058 48.223l-112.298 315.096c-9.248 25.763 3.963 54.168 29.726 63.416s54.168-3.963 63.416-29.726l18.497-51.525h134.097l18.497 51.525c7.266 20.478 26.424 33.028 46.901 33.028 5.284 0 11.229-0.661 16.515-2.643 25.763-9.248 38.974-37.653 29.726-63.416zM761.038 807.94l31.708-88.517 31.708 88.517h-63.416z",
                            "M632.886 415.556c12.552 29.065 38.974 46.901 69.361 46.901h206.762c27.083 0 49.543-22.46 49.543-49.543s-22.46-49.543-49.543-49.543h-157.878l186.283-193.549c22.46-23.781 29.065-58.791 15.854-89.178-12.552-29.065-38.974-46.901-69.361-46.901h-205.44c-27.083 0-49.543 22.46-49.543 49.543s22.46 49.543 49.543 49.543h157.878l-186.944 194.871c-22.46 23.781-28.405 58.131-15.854 88.517z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-alpha-down-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 183,
                        "id" => 19,
                        "name" => "sort-alpha-down-alt",
                        "prevSize" => 80,
                        "code" => 59800
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 100
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M299.293 14.584c-4.625-4.625-9.909-7.927-15.854-10.57-11.89-5.284-25.763-5.284-37.653 0-5.945 2.643-11.229 5.945-15.854 10.57l-165.145 165.145c-19.156 19.156-19.156 50.864 0 70.022s50.864 19.156 70.022 0l80.59-80.59v805.246c0 27.083 22.46 49.543 49.543 49.543s49.543-22.46 49.543-49.543v-805.246l80.59 80.59c9.909 9.909 22.46 14.533 35.010 14.533s25.101-4.625 35.010-14.533c19.156-19.156 19.156-50.864 0-70.022l-165.145-165.145z",
                            "M971.763 924.862l-112.959-316.417c-11.229-28.405-36.992-46.901-66.058-46.901s-54.828 18.497-66.058 48.223l-112.298 315.096c-9.248 25.763 3.963 54.168 29.726 63.416s54.168-3.963 63.416-29.726l18.497-51.525h134.097l18.497 51.525c7.266 20.478 26.424 33.028 46.901 33.028 5.284 0 11.229-0.661 16.515-2.643 25.763-9.248 38.974-37.653 29.726-63.416zM761.038 807.94l31.708-88.517 31.708 88.517h-63.416z",
                            "M632.886 415.556c12.552 29.065 38.974 46.901 69.361 46.901h206.762c27.083 0 49.543-22.46 49.543-49.543s-22.46-49.543-49.543-49.543h-157.878l186.283-193.549c22.46-23.781 29.065-58.791 15.854-89.178-12.552-29.065-38.974-46.901-69.361-46.901h-205.44c-27.083 0-49.543 22.46-49.543 49.543s22.46 49.543 49.543 49.543h157.878l-186.944 194.871c-22.46 23.781-28.405 58.131-15.854 88.517z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-alpha-up-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 184,
                        "id" => 20,
                        "name" => "sort-alpha-up-alt",
                        "prevSize" => 80,
                        "code" => 59801
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 101
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M272.871 1023.949c-0.183 0.003-0.398 0.003-0.613 0.003-13.694 0-26.089-5.555-35.058-14.536v0l-165.145-167.127c-8.952-8.963-14.49-21.341-14.49-35.010s5.536-26.047 14.49-35.012v0c9.138-8.837 21.604-14.282 35.341-14.282s26.202 5.445 35.355 14.296l132.101 132.101 132.115-132.115c9.138-8.837 21.604-14.282 35.341-14.282s26.202 5.445 35.355 14.296l-0.014-0.014c8.952 8.963 14.49 21.341 14.49 35.010s-5.536 26.047-14.49 35.012v0l-165.145 165.145c-9.003 10.201-22.109 16.602-36.709 16.602-1.030 0-2.051-0.033-3.065-0.094l0.139 0.006z",
                            "M272.871 1023.949c-0.002 0-0.003 0-0.005 0-27.495 0-49.827-22.103-50.2-49.508v-924.845c0.373-27.441 22.705-49.543 50.2-49.543 0.002 0 0.003 0 0.005 0v0c27.077 0.373 48.882 22.409 48.882 49.539 0 0.002 0 0.003 0 0.005v0 924.81c0 0.002 0 0.003 0 0.005 0 27.13-21.807 49.167-48.848 49.539h-0.036z",
                            "M850.216 462.457c-27.077-0.373-48.882-22.409-48.882-49.539 0-0.002 0-0.003 0-0.005v0-268.195l-25.101 14.533c-6.952 3.915-15.262 6.222-24.111 6.222-27.515 0-49.821-22.305-49.821-49.821 0-18.667 10.266-34.936 25.459-43.468l0.251-0.13 42.937-22.46c12.816-9.446 28.919-15.117 46.348-15.117 12.457 0 24.238 2.898 34.704 8.055l-0.461-0.206c29.13 13.962 48.887 43.216 48.887 77.083 0 0.303-0.002 0.608-0.005 0.91v-0.046 292.636c-0.373 27.441-22.705 49.543-50.2 49.543-0.002 0-0.003 0-0.005 0v0z",
                            "M817.187 858.804c-81.802-0.375-147.969-66.775-147.969-148.629 0-82.086 66.545-148.63 148.63-148.63s148.629 66.543 148.63 148.629v0c0.002 0.198 0.002 0.432 0.002 0.666 0 81.722-66.249 147.969-147.969 147.969-0.464 0-0.929-0.002-1.393-0.006h0.071zM817.187 660.63c-27.362 0-49.543 22.182-49.543 49.543s22.182 49.543 49.543 49.543v0c27.362 0 49.543-22.182 49.543-49.543s-22.182-49.543-49.543-49.543v0z",
                            "M783.498 990.919h-32.369c-27.362 0-49.543-22.182-49.543-49.543s22.182-49.543 49.543-49.543v0h32.369c43.854-0.949 79.426-35.145 82.556-78.334l0.015-0.274c0-19.156 0-42.278 0-70.022v-33.028c0-0.002 0-0.003 0-0.005 0-27.13 21.807-49.167 48.848-49.539h0.036c0.002 0 0.003 0 0.005 0 27.495 0 49.827 22.103 50.2 49.508v33.064c0 29.726 0 54.168 0 75.306-6.373 95.766-85.015 171.188-181.539 172.409l-0.121 0.002z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-numeric-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 185,
                        "id" => 21,
                        "name" => "sort-numeric-down",
                        "prevSize" => 80,
                        "code" => 59802
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 102
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M429.424 264.27c-12.552 0-25.103-4.625-35.012-14.534l-130.14-130.14-130.14 130.14c-19.157 19.157-50.867 19.157-70.025 0s-19.157-50.867 0-70.025l165.154-165.154c19.157-19.157 50.867-19.157 70.025 0l165.154 165.154c19.157 19.157 19.157 50.867 0 70.025-9.909 9.909-22.461 14.534-35.012 14.534z",
                            "M264.27 1023.975c-27.085 0-49.546-22.461-49.546-49.546v-924.856c0-27.085 22.461-49.546 49.546-49.546s49.546 22.461 49.546 49.546v924.856c0 27.085-22.461 49.546-49.546 49.546z",
                            "M842.306 462.454c-27.085 0-49.546-22.461-49.546-49.546v-268.209l-25.764 13.873c-24.443 13.212-54.171 4.625-67.382-19.157s-4.625-54.171 19.157-67.382l42.939-23.782c23.782-17.175 54.171-19.818 80.594-7.927 29.728 13.873 48.885 44.262 48.885 78.612v293.973c0 27.085-22.461 49.546-49.546 49.546z",
                            "M809.275 858.821c-81.916 0-148.638-66.721-148.638-148.638s66.721-148.638 148.638-148.638 148.638 66.721 148.638 148.638-66.721 148.638-148.638 148.638zM809.275 660.638c-27.085 0-49.546 22.461-49.546 49.546s22.461 49.546 49.546 49.546 49.546-22.461 49.546-49.546-22.461-49.546-49.546-49.546z",
                            "M774.923 990.943h-31.709c-27.085 0-49.546-22.461-49.546-49.546s22.461-49.546 49.546-49.546h31.709c42.939 0 80.594-35.673 82.576-78.612 0.661-19.157 0.661-42.28 0.661-70.025v-33.030c0-27.085 22.461-49.546 49.546-49.546s49.546 22.461 49.546 49.546v33.030c0 29.728 0 54.171-1.321 75.31-4.625 95.128-86.54 172.42-181.668 172.42z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-numeric-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 186,
                        "id" => 22,
                        "name" => "sort-numeric-up",
                        "prevSize" => 80,
                        "code" => 59803
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 103
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M394.416 774.25l-80.59 80.59v-805.246c0-27.083-22.46-49.543-49.543-49.543s-49.543 22.46-49.543 49.543v805.246l-80.59-80.59c-19.156-19.156-50.864-19.156-70.022 0s-19.156 50.864 0 70.022l165.145 165.145c4.625 4.625 9.909 7.927 15.854 10.57s12.552 3.963 19.156 3.963 13.211-1.321 19.156-3.963c5.945-2.643 11.229-5.945 15.854-10.57l165.145-165.145c19.156-19.156 19.156-50.864 0-70.022s-50.864-19.156-70.022 0z",
                            "M644.115 459.814c25.763 9.248 54.168-3.963 63.416-29.726l18.497-51.525h134.097l18.497 51.525c7.266 20.478 26.424 33.028 46.901 33.028 5.284 0 11.229-0.661 16.515-2.643 25.763-9.248 38.974-37.653 29.726-63.416l-112.959-316.417c-11.229-28.405-36.992-46.901-66.058-46.901s-54.828 18.497-66.058 48.223l-112.298 315.096c-9.248 25.763 3.963 54.168 29.726 63.416zM824.453 279.476h-63.416l31.708-88.517 31.708 88.517z",
                            "M952.607 608.444c-12.552-29.065-38.974-46.901-69.361-46.901h-205.44c-27.083 0-49.543 22.46-49.543 49.543s22.46 49.543 49.543 49.543h157.878l-186.944 194.871c-22.46 23.781-28.405 58.131-15.854 88.517 12.552 29.065 38.974 46.901 69.361 46.901h206.762c27.083 0 49.543-22.46 49.543-49.543s-22.46-49.543-49.543-49.543h-157.878l186.283-193.549c22.46-23.781 29.065-58.791 15.854-89.178z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-alpha-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 187,
                        "id" => 23,
                        "name" => "sort-alpha-down",
                        "prevSize" => 80,
                        "code" => 59804
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 104
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M299.293 14.584c-4.625-4.625-9.909-7.927-15.854-10.57-11.89-5.284-25.763-5.284-37.653 0-5.945 2.643-11.229 5.945-15.854 10.57l-165.145 165.145c-19.156 19.156-19.156 50.864 0 70.022s50.864 19.156 70.022 0l80.59-80.59v805.246c0 27.083 22.46 49.543 49.543 49.543s49.543-22.46 49.543-49.543v-805.246l80.59 80.59c9.909 9.909 22.46 14.533 35.010 14.533s25.101-4.625 35.010-14.533c19.156-19.156 19.156-50.864 0-70.022l-165.145-165.145z",
                            "M644.115 459.814c25.763 9.248 54.168-3.963 63.416-29.726l18.497-51.525h134.097l18.497 51.525c7.266 20.478 26.424 33.028 46.901 33.028 5.284 0 11.229-0.661 16.515-2.643 25.763-9.248 38.974-37.653 29.726-63.416l-112.959-316.417c-11.229-28.405-36.992-46.901-66.058-46.901s-54.828 18.497-66.058 48.223l-112.298 315.096c-9.248 25.763 3.963 54.168 29.726 63.416zM824.453 279.476h-63.416l31.708-88.517 31.708 88.517z",
                            "M952.607 608.444c-12.552-29.065-38.974-46.901-69.361-46.901h-205.44c-27.083 0-49.543 22.46-49.543 49.543s22.46 49.543 49.543 49.543h157.878l-186.944 194.871c-22.46 23.781-28.405 58.131-15.854 88.517 12.552 29.065 38.974 46.901 69.361 46.901h206.762c27.083 0 49.543-22.46 49.543-49.543s-22.46-49.543-49.543-49.543h-157.878l186.283-193.549c22.46-23.781 29.065-58.791 15.854-89.178z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-alpha-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 188,
                        "id" => 24,
                        "name" => "sort-alpha-up",
                        "prevSize" => 80,
                        "code" => 59805
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 105
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M412.908 264.27c-12.552 0-25.103-4.625-35.012-14.534l-130.14-130.14-130.14 130.14c-19.157 19.157-50.867 19.157-70.025 0s-19.157-50.867 0-70.025l165.154-165.154c19.157-19.157 50.867-19.157 70.025 0l165.154 165.154c19.157 19.157 19.157 50.867 0 70.025-9.909 9.909-22.461 14.534-35.012 14.534z",
                            "M247.755 1023.975c-27.085 0-49.546-22.461-49.546-49.546v-924.856c0-27.085 22.461-49.546 49.546-49.546s49.546 22.461 49.546 49.546v924.856c0 27.085-22.461 49.546-49.546 49.546z",
                            "M776.245 1023.975c-12.552 0-25.103-4.625-35.012-14.534l-165.154-165.154c-19.157-19.157-19.157-50.867 0-70.025s50.867-19.157 70.025 0l130.14 130.14 130.14-130.14c19.157-19.157 50.867-19.157 70.025 0s19.157 50.867 0 70.025l-165.154 165.154c-9.909 9.909-22.461 14.534-35.012 14.534z",
                            "M776.245 1023.975c-27.085 0-49.546-22.461-49.546-49.546v-924.856c0-27.085 22.461-49.546 49.546-49.546s49.546 22.461 49.546 49.546v924.856c0 27.085-22.461 49.546-49.546 49.546z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 189,
                        "id" => 25,
                        "name" => "sort-alt",
                        "prevSize" => 80,
                        "code" => 59806
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 106
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M336.438 292.547c-11.119 0-22.237-4.097-31.016-12.875l-115.285-115.285-115.285 115.285c-16.971 16.971-45.061 16.971-62.032 0s-16.971-45.061 0-62.032l146.302-146.302c16.971-16.971 45.061-16.971 62.032 0l146.302 146.302c16.971 16.971 16.971 45.061 0 62.032-8.778 8.778-19.898 12.875-31.016 12.875z",
                            "M190.135 965.536c-23.993 0-43.891-19.898-43.891-43.891v-819.29c0-23.993 19.898-43.891 43.891-43.891s43.891 19.898 43.891 43.891v819.29c0 23.993-19.898 43.891-43.891 43.891z",
                            "M980.166 292.547h-468.166c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h468.166c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M746.084 643.672h-234.084c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h234.084c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M629.041 819.234h-117.041c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h117.041c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M863.125 468.109h-351.125c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h351.125c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-amount-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 190,
                        "id" => 26,
                        "name" => "sort-amount-up",
                        "prevSize" => 80,
                        "code" => 59807
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 107
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M190.135 965.536c-11.119 0-22.237-4.097-31.016-12.875l-146.302-146.302c-16.971-16.971-16.971-45.061 0-62.032s45.061-16.971 62.032 0l115.285 115.285 115.285-115.285c16.971-16.971 45.061-16.971 62.032 0s16.971 45.061 0 62.032l-146.302 146.302c-8.778 8.778-19.898 12.875-31.016 12.875z",
                            "M190.135 965.536c-23.993 0-43.891-19.898-43.891-43.891v-819.29c0-23.993 19.898-43.891 43.891-43.891s43.891 19.898 43.891 43.891v819.29c0 23.993-19.898 43.891-43.891 43.891z",
                            "M980.166 292.547h-468.166c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h468.166c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M746.084 643.672h-234.084c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h234.084c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M629.041 819.234h-117.041c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h117.041c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M863.125 468.109h-351.125c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h351.125c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-amount-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 180,
                        "id" => 27,
                        "name" => "sort-amount-down",
                        "prevSize" => 80,
                        "code" => 59808
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 108
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M190.135 965.536c-11.119 0-22.237-4.097-31.016-12.875l-146.302-146.302c-16.971-16.971-16.971-45.061 0-62.032s45.061-16.971 62.032 0l115.285 115.285 115.285-115.285c16.971-16.971 45.061-16.971 62.032 0s16.971 45.061 0 62.032l-146.302 146.302c-8.778 8.778-19.898 12.875-31.016 12.875z",
                            "M190.135 965.536c-23.993 0-43.891-19.898-43.891-43.891v-819.29c0-23.993 19.898-43.891 43.891-43.891s43.891 19.898 43.891 43.891v819.29c0 23.993-19.898 43.891-43.891 43.891z",
                            "M980.166 819.234h-468.166c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h468.166c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M746.084 468.109h-234.084c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h234.084c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M629.041 292.547h-117.041c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h117.041c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M863.125 643.672h-351.125c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h351.125c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-amount-down-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 179,
                        "id" => 28,
                        "name" => "sort-amount-down-alt",
                        "prevSize" => 80,
                        "code" => 59809
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 109
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M336.438 292.547c-11.119 0-22.237-4.097-31.016-12.875l-115.285-115.285-115.285 115.285c-16.971 16.971-45.061 16.971-62.032 0s-16.971-45.061 0-62.032l146.302-146.302c16.971-16.971 45.061-16.971 62.032 0l146.302 146.302c16.971 16.971 16.971 45.061 0 62.032-8.778 8.778-19.898 12.875-31.016 12.875z",
                            "M190.135 965.536c-23.993 0-43.891-19.898-43.891-43.891v-819.29c0-23.993 19.898-43.891 43.891-43.891s43.891 19.898 43.891 43.891v819.29c0 23.993-19.898 43.891-43.891 43.891z",
                            "M980.166 819.234h-468.166c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h468.166c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M746.084 468.109h-234.084c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h234.084c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M629.041 292.547h-117.041c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h117.041c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z",
                            "M863.125 643.672h-351.125c-23.993 0-43.891-19.898-43.891-43.891s19.898-43.891 43.891-43.891h351.125c23.993 0 43.891 19.898 43.891 43.891s-19.898 43.891-43.891 43.891z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-amount-up-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 178,
                        "id" => 29,
                        "name" => "sort-amount-up-alt",
                        "prevSize" => 80,
                        "code" => 59810
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 110
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M516.624 0.063s-4.624 0-7.266 0c-250.354 0-468.339 184.297-507.973 432.008-5.284 33.028 3.963 67.377 26.423 93.139 21.799 25.762 52.844 40.295 85.874 40.295h3.963c114.938 0 201.471 28.405 256.958 83.892 56.148 56.148 83.892 144.002 83.231 260.922 0 33.028 14.533 64.075 39.634 85.874 21.137 18.496 48.222 28.405 75.304 27.744 5.945 0 11.89 0 17.835-1.321 250.354-40.295 435.971-261.583 432.669-515.239-3.963-275.455-231.196-503.349-507.312-507.312zM575.414 924.852c-3.963 0-9.247-0.661-13.211-3.963-1.982-1.982-5.284-5.284-5.284-9.908 0.661-144.663-36.991-256.299-112.295-331.603-74.643-74.643-184.958-112.956-326.978-112.956h-3.963c-5.284 0-8.588-3.302-10.57-5.284-1.321-1.982-5.284-6.606-3.963-13.211 32.368-199.489 208.077-348.777 410.209-348.777 1.982 0 3.963 0 5.945 0v0c218.647 3.302 406.246 190.242 409.548 409.548 2.643 204.775-147.306 383.786-348.777 416.154zM375.925 315.152c0 36.331-29.725 66.716-66.716 66.716s-66.716-29.725-66.716-66.716 29.725-66.716 66.716-66.716 66.716 29.725 66.716 66.716zM575.414 231.921c0 36.331-29.725 66.716-66.716 66.716s-66.716-29.725-66.716-66.716 29.725-66.716 66.716-66.716 66.716 29.725 66.716 66.716zM642.13 315.152c0-36.331 29.725-66.716 66.716-66.716s66.716 29.725 66.716 66.716-29.725 66.716-66.716 66.716-66.716-29.725-66.716-66.716zM858.134 514.643c0 36.331-29.725 66.716-66.716 66.716s-66.716-29.725-66.716-66.716 29.725-66.716 66.716-66.716 66.716 29.725 66.716 66.716zM774.903 714.132c0 36.331-29.725 66.716-66.716 66.716s-66.716-29.725-66.716-66.716 29.725-66.716 66.716-66.716 66.716 29.725 66.716 66.716z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "palette"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 257,
                        "id" => 30,
                        "name" => "palette",
                        "prevSize" => 80,
                        "code" => 59797
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 111
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.452c-233.911-0.333-423.443-189.864-423.774-423.743v-0.032c0-24.211 19.627-43.839 43.839-43.839s43.839 19.627 43.839 43.839v0c0 185.621 150.475 336.097 336.097 336.097s336.097-150.475 336.097-336.097c0-185.621-150.475-336.097-336.097-336.097v0h-146.13c-24.211 0-43.839-19.627-43.839-43.839s19.627-43.839 43.839-43.839v0h146.13c234.044 0 423.774 189.73 423.774 423.774s-189.73 423.774-423.774 423.774v0z",
                            "M512 438.936c-0.060 0-0.133 0-0.204 0-12.039 0-22.929-4.918-30.771-12.856l-175.359-175.359c-7.921-7.931-12.821-18.884-12.821-30.979s4.899-23.048 12.821-30.98v0l175.355-175.355c8.025-8.595 19.423-13.953 32.074-13.953 24.211 0 43.839 19.627 43.839 43.839 0 12.65-5.358 24.048-13.927 32.049l-0.026 0.023-144.376 144.376 144.376 144.376c7.921 7.931 12.821 18.884 12.821 30.979s-4.899 23.048-12.821 30.98v0c-7.846 7.942-18.736 12.86-30.775 12.86-0.071 0-0.144 0-0.215 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "undo"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 256,
                        "id" => 31,
                        "name" => "undo",
                        "prevSize" => 80,
                        "code" => 59796
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 112
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.582 789.931h-819.163c-56.418-0.33-102.065-45.976-102.396-102.364v-585.149c0.33-56.418 45.976-102.065 102.364-102.396h819.194c56.418 0.33 102.065 45.976 102.396 102.364v585.149c-0.33 56.418-45.976 102.065-102.364 102.396h-0.032zM102.418 87.791c-8.079 0-14.628 6.55-14.628 14.628v0 585.117c0 8.079 6.55 14.628 14.628 14.628v0h819.163c8.079 0 14.628-6.55 14.628-14.628v0-585.117c0-8.079-6.55-14.628-14.628-14.628v0z",
                            "M687.535 1023.977h-175.535c-24.105-0.325-43.559-19.779-43.884-43.852v-234.079c0-24.236 19.648-43.884 43.884-43.884s43.884 19.648 43.884 43.884v0 190.163h131.651c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M512 1023.977h-175.535c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h175.535c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "desktop"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 175,
                        "id" => 32,
                        "name" => "desktop",
                        "prevSize" => 80,
                        "code" => 59795
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 113
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M809.27 1023.966c-27.214-0.367-49.178-22.331-49.545-49.509v-462.457c0-27.363 22.182-49.545 49.545-49.545s49.545 22.182 49.545 49.545v0 462.421c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z",
                            "M809.27 429.425c-27.214-0.367-49.178-22.331-49.545-49.509v-330.335c0-27.363 22.182-49.545 49.545-49.545s49.545 22.182 49.545 49.545v0 330.3c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z",
                            "M908.36 429.425h-198.18c-27.363 0-49.545-22.182-49.545-49.545s22.182-49.545 49.545-49.545v0h198.18c27.363 0 49.545 22.182 49.545 49.545s-22.182 49.545-49.545 49.545v0z",
                            "M214.73 1023.966c-27.214-0.367-49.178-22.331-49.545-49.509v-462.457c0-27.363 22.182-49.545 49.545-49.545s49.545 22.182 49.545 49.545v0 462.421c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z",
                            "M214.73 429.425c-27.214-0.367-49.178-22.331-49.545-49.509v-330.335c0-27.363 22.182-49.545 49.545-49.545s49.545 22.182 49.545 49.545v0 330.3c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z",
                            "M313.82 429.425h-198.18c-27.363 0-49.545-22.182-49.545-49.545s22.182-49.545 49.545-49.545v0h198.18c27.363 0 49.545 22.182 49.545 49.545s-22.182 49.545-49.545 49.545v0z",
                            "M512 1023.966c-27.214-0.367-49.178-22.331-49.545-49.509v-198.216c0-27.363 22.182-49.545 49.545-49.545s49.545 22.182 49.545 49.545v0 198.18c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z",
                            "M512 693.665c-27.214-0.367-49.178-22.331-49.545-49.509v-594.576c0-27.363 22.182-49.545 49.545-49.545s49.545 22.182 49.545 49.545v0 594.541c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z",
                            "M611.090 693.665h-198.18c-27.363 0-49.545-22.182-49.545-49.545s22.182-49.545 49.545-49.545v0h198.18c27.363 0 49.545 22.182 49.545 49.545s-22.182 49.545-49.545 49.545v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sliders-v"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 174,
                        "id" => 33,
                        "name" => "sliders-v",
                        "prevSize" => 80,
                        "code" => 59793
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 114
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M974.421 264.275h-462.421c-27.363 0-49.545-22.182-49.545-49.545s22.182-49.545 49.545-49.545v0h462.421c27.363 0 49.545 22.182 49.545 49.545s-22.182 49.545-49.545 49.545v0z",
                            "M379.88 264.275h-330.3c-27.363 0-49.545-22.182-49.545-49.545s22.182-49.545 49.545-49.545v0h330.3c27.363 0 49.545 22.182 49.545 49.545s-22.182 49.545-49.545 49.545v0z",
                            "M379.88 363.365c-27.214-0.367-49.178-22.331-49.545-49.509v-198.216c0-27.363 22.182-49.545 49.545-49.545s49.545 22.182 49.545 49.545v0 198.18c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z",
                            "M974.421 858.815h-462.421c-27.363 0-49.545-22.182-49.545-49.545s22.182-49.545 49.545-49.545v0h462.421c27.363 0 49.545 22.182 49.545 49.545s-22.182 49.545-49.545 49.545v0z",
                            "M379.88 858.815h-330.3c-27.363 0-49.545-22.182-49.545-49.545s22.182-49.545 49.545-49.545v0h330.3c27.363 0 49.545 22.182 49.545 49.545s-22.182 49.545-49.545 49.545v0z",
                            "M379.88 957.906c-27.214-0.367-49.178-22.331-49.545-49.509v-198.216c0-27.363 22.182-49.545 49.545-49.545s49.545 22.182 49.545 49.545v0 198.18c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z",
                            "M974.421 561.545h-198.18c-27.363 0-49.545-22.182-49.545-49.545s22.182-49.545 49.545-49.545v0h198.18c27.363 0 49.545 22.182 49.545 49.545s-22.182 49.545-49.545 49.545v0z",
                            "M644.12 561.545h-594.541c-27.363 0-49.545-22.182-49.545-49.545s22.182-49.545 49.545-49.545v0h594.541c27.363 0 49.545 22.182 49.545 49.545s-22.182 49.545-49.545 49.545v0z",
                            "M644.12 660.635c-27.214-0.367-49.178-22.331-49.545-49.509v-198.216c0-27.363 22.182-49.545 49.545-49.545s49.545 22.182 49.545 49.545v0 198.18c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sliders-h"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 173,
                        "id" => 34,
                        "name" => "sliders-h",
                        "prevSize" => 80,
                        "code" => 59794
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 115
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M440.071 880.415c-243.195 0-440.344-197.149-440.344-440.344s197.149-440.344 440.344-440.344c243.195 0 440.344 197.149 440.344 440.344v0c0 243.195-197.149 440.344-440.344 440.344v0zM440.071 88.031c-193.781 0-350.872 157.090-350.872 350.872s157.090 350.872 350.872 350.872c193.781 0 350.872-157.090 350.872-350.872v0c0-193.781-157.090-350.872-350.872-350.872v0z",
                            "M979.828 1023.687c-0.060 0-0.133 0-0.204 0-12.045 0-22.94-4.92-30.785-12.862l-241.52-241.52c-7.293-7.811-11.771-18.333-11.771-29.899 0-24.222 19.636-43.859 43.859-43.859 11.568 0 22.088 4.478 29.926 11.795l-0.026-0.023 241.516 241.516c7.925 7.934 12.827 18.892 12.827 30.993s-4.901 23.059-12.827 30.995v0c-7.849 7.945-18.744 12.866-30.789 12.866-0.071 0-0.144 0-0.215 0h0.011z",
                            "M438.902 628.957c-24.091-0.325-43.534-19.768-43.859-43.827v-292.424c0-24.222 19.636-43.859 43.859-43.859s43.859 19.636 43.859 43.859v0 292.393c-0.325 24.091-19.768 43.534-43.827 43.859h-0.032z",
                            "M585.098 482.761h-292.393c-24.222 0-43.859-19.636-43.859-43.859s19.636-43.859 43.859-43.859v0h292.393c24.222 0 43.859 19.636 43.859 43.859s-19.636 43.859-43.859 43.859v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "search-plus"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 172,
                        "id" => 35,
                        "name" => "search-plus",
                        "prevSize" => 80,
                        "code" => 59791
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 116
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M440.071 880.415c-243.195 0-440.344-197.149-440.344-440.344s197.149-440.344 440.344-440.344c243.195 0 440.344 197.149 440.344 440.344v0c-0.332 243.061-197.282 440.011-440.311 440.344h-0.033zM440.071 88.031c-193.781 0-350.872 157.090-350.872 350.872s157.090 350.872 350.872 350.872c193.781 0 350.872-157.090 350.872-350.872v0c0-193.781-157.090-350.872-350.872-350.872v0z",
                            "M979.828 1023.687c-0.060 0-0.133 0-0.204 0-12.045 0-22.94-4.92-30.785-12.862l-241.52-241.52c-7.293-7.811-11.771-18.333-11.771-29.899 0-24.222 19.636-43.859 43.859-43.859 11.568 0 22.088 4.478 29.926 11.795l-0.026-0.023 241.516 241.516c7.925 7.934 12.827 18.892 12.827 30.993s-4.901 23.059-12.827 30.995v0c-7.849 7.945-18.744 12.866-30.789 12.866-0.071 0-0.144 0-0.215 0h0.011z",
                            "M585.098 482.761h-292.393c-24.222 0-43.859-19.636-43.859-43.859s19.636-43.859 43.859-43.859v0h292.393c24.222 0 43.859 19.636 43.859 43.859s-19.636 43.859-43.859 43.859v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "search-minus"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 171,
                        "id" => 36,
                        "name" => "search-minus",
                        "prevSize" => 80,
                        "code" => 59792
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 117
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M894.081 336.465l-323.57-323.57c-7.935-7.944-18.897-12.862-31.009-12.873h-261.55c-88.866 0-160.907 72.041-160.907 160.907v0 702.14c0 88.866 72.041 160.907 160.907 160.907v0h468.093c88.866 0 160.907-72.041 160.907-160.907v0-497.35c-0.494-11.473-5.32-21.731-12.872-29.254l-0.001-0.001zM585.139 149.812l172.024 172.024h-172.024zM746.047 936.209h-468.093c-40.394 0-73.139-32.746-73.139-73.139v0-702.14c0-40.394 32.746-73.139 73.139-73.139v0h219.419v277.931c0.325 24.105 19.779 43.559 43.852 43.884h277.962v453.466c0 40.394-32.746 73.139-73.139 73.139v0z",
                            "M656.524 506.734c-7.496-5.775-17.020-9.255-27.356-9.255-13.907 0-26.344 6.301-34.608 16.205l-0.059 0.071-82.501 103.566-82.501-105.321c-8.353-9.812-20.716-15.996-34.521-15.996-24.992 0-45.251 20.259-45.251 45.251 0 11.185 4.058 21.422 10.782 29.32l-0.053-0.064 93.034 117.023-93.034 117.023c-5.992 7.47-9.615 17.061-9.615 27.5 0 24.376 19.76 44.136 44.136 44.136 13.937 0 26.366-6.461 34.454-16.55l0.067-0.086 82.501-101.81 82.501 105.321c8.276 9.979 20.653 16.31 34.509 16.384h0.012c1.085 0.096 2.348 0.149 3.622 0.149 24.236 0 43.884-19.648 43.884-43.884 0-12.183-4.964-23.206-12.981-31.157l-0.003-0.003-93.034-117.023 95.374-117.023c5.757-7.489 9.225-16.998 9.225-27.316 0-14.937-7.268-28.175-18.461-36.373l-0.126-0.088z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "file-excel"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 170,
                        "id" => 37,
                        "name" => "file-excel",
                        "prevSize" => 80,
                        "code" => 59790
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 118
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M894.081 336.465l-323.57-323.57c-7.935-7.944-18.897-12.862-31.009-12.873h-261.55c-88.866 0-160.907 72.041-160.907 160.907v0 702.14c0 88.866 72.041 160.907 160.907 160.907v0h468.093c88.866 0 160.907-72.041 160.907-160.907v0-497.35c-0.494-11.473-5.32-21.731-12.872-29.254l-0.001-0.001zM585.139 149.812l172.024 172.024h-172.024zM746.047 936.209h-468.093c-40.394 0-73.139-32.746-73.139-73.139v0-702.14c0-40.394 32.746-73.139 73.139-73.139v0h219.419v277.931c0.325 24.105 19.779 43.559 43.852 43.884h277.962v453.466c0 40.394-32.746 73.139-73.139 73.139v0z",
                            "M599.182 678.758c-35.612-22.599-62.527-56.14-76.26-95.834l-0.389-1.295c8.513-24.598 13.428-52.947 13.428-82.444 0-12.194-0.841-24.192-2.466-35.938l0.154 1.359c-3.892-22.255-23.068-38.954-46.145-38.954-18.984 0-35.328 11.301-42.673 27.543l-0.119 0.295c-1.82 12.259-2.859 26.407-2.859 40.798 0 35.745 6.41 69.992 18.145 101.654l-0.657-2.026c-26.663 62.22-51.535 112.192-78.718 160.691l4.409-8.561c-41.543 23.405-98.3 58.512-107.076 98.885-7.021 32.766 54.416 117.023 159.151-65.534 38.752-15.060 86.483-29.549 135.472-40.728l7.296-1.4c33.675 19.598 73.544 32.44 116.101 35.636l0.922 0.056c0.37 0.010 0.806 0.016 1.244 0.016 26.499 0 47.98-21.481 47.98-47.98 0-12.689-4.926-24.228-12.97-32.809l0.025 0.026c-24.575-25.16-97.714-18.139-133.992-13.457zM319.497 854.293c16.89-28.581 38.169-52.658 63.208-72.128l0.569-0.426c-39.787 63.193-63.778 74.31-63.778 73.139zM490.35 455.829c15.213 0 14.043 67.289 3.511 85.427-4.439-14.87-6.994-31.954-6.994-49.637 0-12.459 1.269-24.62 3.683-36.365l-0.199 1.16zM439.445 741.365c17.504-31.081 34.829-68.095 49.5-106.424l1.99-5.919c15.998 29.397 37.215 53.976 62.634 73.317l0.558 0.407c-44.504 11.253-82.688 24.668-119.265 41.035l4.582-1.832zM714.451 730.833s-10.532 12.873-77.821-16.384c73.139-4.68 85.427 12.287 77.821 16.968z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "file-pdf"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 169,
                        "id" => 38,
                        "name" => "file-pdf",
                        "prevSize" => 80,
                        "code" => 59789
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 119
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M863.086 1024h-702.171c-88.87 0-160.914-72.044-160.914-160.914v0-702.171c0-88.87 72.044-160.914 160.914-160.914v0h518.437c24.237 0 43.886 19.648 43.886 43.886s-19.648 43.886-43.886 43.886v0h-518.437c-40.395 0-73.142 32.747-73.142 73.142v0 702.171c0 40.395 32.747 73.142 73.142 73.142v0h702.171c40.395 0 73.142-32.747 73.142-73.142v0-451.145c0-24.237 19.648-43.886 43.886-43.886s43.886 19.648 43.886 43.886v0 451.145c0 88.87-72.044 160.914-160.914 160.914v0z",
                            "M424.229 702.172c-11.709-0.922-21.992-6.372-29.216-14.581l-0.041-0.048-175.543-175.543c-2.703-5.532-4.284-12.038-4.284-18.913 0-24.237 19.648-43.886 43.886-43.886 6.875 0 13.381 1.581 19.174 4.4l-0.261-0.114 144.531 144.531 499.127-495.616c5.532-2.703 12.038-4.284 18.913-4.284 24.237 0 43.886 19.648 43.886 43.886 0 6.875-1.581 13.381-4.4 19.174l0.114-0.261-526.629 526.629c-7.264 8.256-17.547 13.707-29.107 14.619l-0.151 0.010z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "check-square"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 168,
                        "id" => 39,
                        "name" => "check-square",
                        "prevSize" => 80,
                        "code" => 59788
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 120
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M46.545 1024c-25.567-0.345-46.201-20.979-46.545-46.512v-930.943c0-25.706 20.839-46.545 46.545-46.545s46.545 20.839 46.545 46.545v0 930.909c-0.345 25.567-20.979 46.201-46.512 46.545h-0.033z",
                            "M977.455 1024h-930.909c-25.706 0-46.545-20.839-46.545-46.545s20.839-46.545 46.545-46.545v0h930.909c25.706 0 46.545 20.839 46.545 46.545s-20.839 46.545-46.545 46.545v0z",
                            "M636.121 682.666c-0.064 0-0.141 0-0.217 0-12.783 0-24.345-5.222-32.671-13.649l-153.295-153.295-153.29 153.29c-8.289 7.74-19.456 12.492-31.731 12.492-25.706 0-46.545-20.839-46.545-46.545 0-12.276 4.752-23.441 12.518-31.759l-0.025 0.028 186.182-186.182c8.42-8.41 20.049-13.613 32.892-13.613s24.471 5.201 32.893 13.613v0l153.29 153.29 215.35-215.35c8.289-7.74 19.456-12.492 31.731-12.492 25.706 0 46.545 20.839 46.545 46.545 0 12.276-4.752 23.441-12.518 31.759l0.025-0.028-248.243 248.243c-8.33 8.432-19.892 13.654-32.675 13.654-0.076 0-0.153 0-0.228 0h0.012z",
                            "M915.393 626.192c-25.567-0.345-46.201-20.979-46.545-46.512v-176.285h-170.666c-25.706 0-46.545-20.839-46.545-46.545s20.839-46.545 46.545-46.545v0h217.212c25.567 0.345 46.201 20.979 46.545 46.512v222.831c-0.345 25.567-20.979 46.201-46.512 46.545h-0.033z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "chart-line"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 167,
                        "id" => 40,
                        "name" => "chart-line",
                        "prevSize" => 80,
                        "code" => 59787
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 121
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M431.778 504.757c-115.379 0-208.912-93.532-208.912-208.912s93.532-208.912 208.912-208.912c115.379 0 208.912 93.532 208.912 208.912v0c-0.316 115.251-93.66 208.596-208.881 208.912h-0.030zM431.778 170.499c-69.227 0-125.347 56.12-125.347 125.347s56.12 125.347 125.347 125.347c69.227 0 125.347-56.12 125.347-125.347v0c0-69.227-56.12-125.347-125.347-125.347v0z",
                            "M41.809 894.726c-23.076 0-41.782-18.707-41.782-41.782v0c0-264.622 302.504-264.622 431.751-264.622 40.111 0 75.766 0 108.076 3.9 21.638 1.734 38.542 19.721 38.542 41.657 0 1.025-0.037 2.041-0.11 3.046l0.008-0.134c-2.011 21.692-20.122 38.543-42.169 38.543-1.041 0-2.072-0.038-3.093-0.111l0.137 0.008c-30.083 0-63.509-3.343-101.391-3.343-288.576 0-348.186 72.423-348.186 181.057 0.003 0.167 0.004 0.364 0.004 0.561 0 22.767-18.457 41.225-41.225 41.225-0.197 0-0.394-0.001-0.59-0.004h0.030z",
                            "M549.326 937.066c-11.533-0.010-21.972-4.693-29.526-12.255v0c-7.671-7.32-12.439-17.622-12.439-29.037 0-1.349 0.067-2.683 0.197-3.998l-0.013 0.166 8.914-106.963c0.738-10.242 5.062-19.352 11.708-26.194l-0.009 0.010 307.518-307.518c20.408-18.948 47.843-30.576 77.993-30.576s57.585 11.627 78.066 30.642l-0.072-0.067c19.978 20.131 32.325 47.862 32.325 78.475 0 0.614-0.005 1.227-0.014 1.838l0.001-0.093c0.008 0.488 0.013 1.065 0.013 1.643 0 28.208-11.272 53.784-29.557 72.47l-307.499 307.499c-6.609 6.771-15.516 11.272-25.457 12.242l-0.17 0.013-108.076 10.028zM657.402 885.256v0zM598.35 806.705l-3.343 42.34 43.454-3.9 296.932-296.932c3.138-3.741 5.043-8.607 5.043-13.917 0-0.396-0.010-0.789-0.031-1.178l0.003 0.055c-0.022-8.097-2.969-15.5-7.838-21.216l0.038 0.046c-5.22-3.914-11.806-6.267-18.942-6.267s-13.722 2.354-19.024 6.327l0.082-0.059z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "user-edit"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 166,
                        "id" => 41,
                        "name" => "user-edit",
                        "prevSize" => 80,
                        "code" => 59786
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 122
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M512 568.889c-23.436-0.316-42.351-19.231-42.667-42.636v-199.141c0-23.564 19.103-42.667 42.667-42.667s42.667 19.103 42.667 42.667v0 199.111c-0.316 23.436-19.231 42.351-42.636 42.667h-0.031z",
                            "M512 739.556c-23.436-0.316-42.351-19.231-42.667-42.636v-28.475c0-23.564 19.103-42.667 42.667-42.667s42.667 19.103 42.667 42.667v0 28.444c-0.316 23.436-19.231 42.351-42.636 42.667h-0.031z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "exclamation-circle"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 165,
                        "id" => 42,
                        "name" => "exclamation-circle",
                        "prevSize" => 80,
                        "code" => 59785
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 123
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M897.818 342.011c-33.052 0-59.847 26.794-59.847 59.847v0 271.219c0 33.052 26.794 59.847 59.847 59.847s59.847-26.794 59.847-59.847v0-271.219c0-33.052-26.794-59.847-59.847-59.847v0z",
                            "M126.182 342.011c-33.052 0-59.847 26.794-59.847 59.847v0 271.219c0 33.052 26.794 59.847 59.847 59.847s59.847-26.794 59.847-59.847v0-271.219c0-33.052-26.794-59.847-59.847-59.847v0z",
                            "M229.321 342.011v407.465c0 37.624 30.5 68.122 68.122 68.122v0h43.293v144.522c0 33.052 26.794 59.847 59.847 59.847s59.847-26.794 59.847-59.847v0 0-144.522h103.139v144.522c0 33.052 26.794 59.847 59.847 59.847s59.847-26.794 59.847-59.847v0-144.522h43.293c37.624 0 68.122-30.5 68.122-68.122v0-407.465z",
                            "M787.039 257.334c-19.494-64.041-60.923-116.427-115.35-149.595l-1.159-0.657-9.55-5.73-10.187-5.093 11.46-19.737 33.743-63.667c0.321-0.883 0.507-1.901 0.507-2.963 0-2.96-1.443-5.584-3.665-7.206l-0.025-0.018h-4.457c-3.404 0.157-6.379 1.864-8.255 4.426l-0.021 0.030-34.38 59.21-10.823 19.737-10.187-4.457-10.823-3.82c-30.354-10.882-65.375-17.173-101.867-17.173s-71.511 6.291-104.038 17.846l2.171-0.673-10.187 3.82-10.823 4.457-10.823-19.737-34.38-63.667c-1.592-2.804-4.559-4.665-7.958-4.665-5.038 0-9.122 4.084-9.122 9.122 0 1.637 0.431 3.174 1.186 4.502l-0.024-0.045 33.743 63.667 11.46 19.737-10.187 5.093-9.55 5.73c-55.806 33.938-97.174 86.897-115.417 149.695l-0.455 1.831c-4.717 15.122-7.703 32.57-8.27 50.627l-0.007 0.307h565.357c-0.686-18.4-3.432-35.851-8.017-52.541l0.378 1.609zM384.668 223.592c-14.065 0-25.467-11.402-25.467-25.467s11.402-25.467 25.467-25.467c14.065 0 25.467 11.402 25.467 25.467v0c0 14.065-11.402 25.467-25.467 25.467v0zM639.332 223.592c-14.065 0-25.467-11.402-25.467-25.467s11.402-25.467 25.467-25.467c14.065 0 25.467 11.402 25.467 25.467v0c0 14.065-11.402 25.467-25.467 25.467v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "android"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 164,
                        "id" => 43,
                        "name" => "android",
                        "prevSize" => 80,
                        "code" => 59781
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 124
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1008.591 433.288l-5.759-22.397h-476.114v202.221h284.773c-32.683 123.892-143.735 213.758-275.775 213.758-1.138 0-2.275-0.006-3.409-0.019l0.172 0.001c-86.669-0.738-165.327-34.432-224.185-89.141l0.207 0.19c-58.421-57.606-94.785-137.451-95.35-225.791v-0.106c1.039-88.017 36.49-167.558 93.495-225.963l-0.064 0.066c57.221-54.292 134.738-87.683 220.053-87.683 0.93 0 1.86 0.004 2.788 0.012l-0.142-0.001c73.95 0.586 141.235 28.652 192.25 74.471l-0.268-0.238 140.787-144.626c-88.734-79.432-206.552-127.99-335.711-127.99-0.54 0-1.080 0.001-1.62 0.003h0.084c-0.919-0.006-2.007-0.009-3.094-0.009-142.761 0-272.106 57.428-366.198 150.443l0.049-0.049c-90.236 93.627-145.825 221.183-145.825 361.724 0 137.597 53.284 262.749 140.344 355.947l-0.279-0.301c96.859 96.51 230.481 156.177 378.041 156.177 2.082 0 4.162-0.012 6.238-0.036l-0.316 0.003c1.053 0.009 2.296 0.013 3.543 0.013 134.433 0 255.872-55.642 342.541-145.151l0.123-0.127c82.61-90.584 133.206-211.608 133.206-344.45 0-3.543-0.036-7.076-0.108-10.602l0.009 0.526c0.105-4.284 0.163-9.328 0.163-14.387 0-26.957-1.687-53.521-4.962-79.591l0.318 3.106z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "google"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 163,
                        "id" => 44,
                        "name" => "google",
                        "prevSize" => 80,
                        "code" => 59782
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 125
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M800.988 541.411c-0.025-1.227-0.040-2.673-0.040-4.124 0-81.14 45.665-151.616 112.697-187.127l1.149-0.554c-43.688-60.224-112.883-99.642-191.399-102.285l-0.408-0.010c-81.199-6.394-169.43 47.312-202.037 47.312s-113.166-44.755-174.544-44.755c-127.87 0-262.775 101.657-262.775 304.332 0.671 66.632 12.562 130.276 33.869 189.424l-1.262-4.011c28.131 81.837 133.625 287.070 243.594 283.874 57.542 0 98.461-40.919 173.266-40.919s109.97 40.919 174.544 40.919c110.608 0 206.511-188.61 234.004-272.365-83.223-34.69-140.659-115.384-140.659-209.49 0-0.076 0-0.154 0-0.231v0.012zM673.117 166.109c33.682-37.846 54.259-88 54.259-142.959 0-7.972-0.433-15.844-1.277-23.592l0.085 0.959c-61.9 6.974-115.875 36.341-154.514 79.679l-0.211 0.24c-37.077 39.007-59.884 91.883-59.884 150.086 0 4.782 0.154 9.526 0.457 14.231l-0.033-0.641c1.605 0.048 3.493 0.075 5.387 0.075 63.128 0 119.134-30.497 154.087-77.563l0.366-0.514z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "apple"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 162,
                        "id" => 45,
                        "name" => "apple",
                        "prevSize" => 80,
                        "code" => 59783
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 126
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M0.001 0.001h480v480h-480zM543.999 0.001h480v480h-480zM0.001 543.999h480v480h-480zM543.999 543.999h480v480h-480z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "microsoft"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 161,
                        "id" => 46,
                        "name" => "microsoft",
                        "prevSize" => 80,
                        "code" => 59784
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 127
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 966.541c-12.142-0.011-23.132-4.94-31.084-12.902v0l-397.063-398.237c-51.836-52.853-83.828-125.328-83.828-205.276s31.993-152.425 83.874-205.324l-0.045 0.047c52.537-52.531 125.112-85.022 205.276-85.022s152.739 32.491 205.277 85.023v0l17.595 15.249 16.423-16.423c52.328-52.883 124.914-85.631 205.15-85.631 0.25 0 0.502 0 0.752 0.001h-0.038c0.384-0.001 0.839-0.003 1.294-0.003 79.947 0 152.3 32.511 204.559 85.034l0.012 0.012c51.836 52.853 83.828 125.328 83.828 205.276s-31.993 152.425-83.874 205.324l0.045-0.047-397.063 398.237c-7.714 8.616-18.706 14.16-30.998 14.66l-0.087 0.003zM289.714 145.434c-0.436-0.003-0.953-0.005-1.468-0.005-55.496 0-105.759 22.406-142.235 58.666l0.010-0.010c-36.735 36.902-59.445 87.793-59.445 143.987s22.71 107.086 59.452 143.994l-0.007-0.007 365.979 368.325 365.392-367.151c36.877-36.837 59.687-87.747 59.687-143.987s-22.81-107.15-59.686-143.985l-0.001-0.001c-36.111-36.238-86.066-58.659-141.257-58.659-0.65 0-1.3 0.003-1.949 0.010l0.099-0.001c-0.436-0.003-0.953-0.005-1.468-0.005-55.496 0-105.759 22.406-142.235 58.666l-47.497 47.497c-8.080 7.677-19.030 12.4-31.084 12.4s-23.006-4.723-31.104-12.418l0.019 0.018-47.507-47.507c-36.581-36.947-87.314-59.823-143.391-59.823-0.107 0-0.213 0-0.32 0h0.016z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "heart"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 160,
                        "id" => 47,
                        "name" => "heart",
                        "prevSize" => 80,
                        "code" => 59780
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 128
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M746.047 0.023h-468.093c-56.418 0.33-102.065 45.976-102.396 102.364v819.195c0.33 56.418 45.976 102.065 102.364 102.396h468.125c56.418-0.33 102.065-45.976 102.396-102.364v-819.195c-0.33-56.418-45.976-102.065-102.364-102.396h-0.032zM760.674 921.582c0 8.079-6.55 14.628-14.628 14.628v0h-468.093c-8.079 0-14.628-6.55-14.628-14.628v0-819.163c0-8.079 6.55-14.628 14.628-14.628v0h468.093c8.079 0 14.628 6.55 14.628 14.628v0z",
                            "M512 658.28c-48.472 0-87.768 39.295-87.768 87.768s39.295 87.768 87.768 87.768c48.472 0 87.768-39.295 87.768-87.768v0c0-48.472-39.295-87.768-87.768-87.768v0zM512 746.047v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "mobile"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 159,
                        "id" => 48,
                        "name" => "mobile",
                        "prevSize" => 80,
                        "code" => 59778
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 129
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M863.070 0.023h-702.14c-56.418 0.33-102.065 45.976-102.396 102.364v819.195c0.33 56.418 45.976 102.065 102.364 102.396h702.172c56.418-0.33 102.065-45.976 102.396-102.364v-819.195c-0.33-56.418-45.976-102.065-102.364-102.396h-0.032zM877.699 921.582c0 8.079-6.55 14.628-14.628 14.628v0h-702.14c-8.079 0-14.628-6.55-14.628-14.628v0-819.163c0-8.079 6.55-14.628 14.628-14.628v0h702.14c8.079 0 14.628 6.55 14.628 14.628v0z",
                            "M512 658.28c-48.472 0-87.768 39.295-87.768 87.768s39.295 87.768 87.768 87.768c48.472 0 87.768-39.295 87.768-87.768v0c0-48.472-39.295-87.768-87.768-87.768v0zM512 746.047v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "tablet"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 220,
                        "id" => 49,
                        "name" => "tablet",
                        "prevSize" => 80,
                        "code" => 59779
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 130
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M687.134 672.539c-0.215 0-0.469 0.001-0.724 0.001-92.498 0-176.242-37.479-236.875-98.078l0.001 0.001c-61.305-61.014-99.243-145.459-99.243-238.766 0-186.032 150.809-336.841 336.841-336.841s336.841 150.809 336.841 336.841c0 186.032-150.808 336.84-336.84 336.841v0zM687.134 88.761c-136.764 0.345-247.499 111.293-247.499 248.106 0 68.362 27.648 130.267 72.373 175.141l-0.007-0.007c44.929 45.079 107.076 72.972 175.74 72.972 137.026 0 248.106-111.081 248.106-248.106s-111.081-248.106-248.106-248.106c-0.213 0-0.427 0-0.639 0.001h0.033z",
                            "M74.166 993.618c-11.682-0.919-21.941-6.357-29.147-14.547l-0.041-0.048c-6.919-7.71-11.15-17.955-11.15-29.188s4.231-21.479 11.185-29.23l-0.036 0.041 377.122-377.705c7.941-7.869 18.873-12.731 30.94-12.731 24.281 0 43.963 19.683 43.963 43.963 0 12.213-4.98 23.263-13.020 31.229l-0.003 0.003-380.624 373.619c-7.248 8.237-17.507 13.675-29.039 14.585l-0.151 0.010z",
                            "M278.488 1022.806c-0.060 0-0.133 0-0.204 0-12.024 0-22.9-4.912-30.732-12.839l-116.759-116.759c-7.28-7.798-11.75-18.301-11.75-29.848 0-24.181 19.603-43.783 43.783-43.783 11.548 0 22.050 4.47 29.874 11.775l-0.026-0.023 116.755 116.755c7.911 7.921 12.805 18.86 12.805 30.94s-4.893 23.019-12.805 30.941v0c-7.836 7.932-18.712 12.844-30.736 12.844-0.071 0-0.144 0-0.215 0h0.011z",
                            "M395.245 906.051c-0.060 0-0.133 0-0.204 0-12.024 0-22.9-4.912-30.732-12.839l-116.759-116.759c-8.584-8.015-13.935-19.399-13.935-32.033 0-24.181 19.603-43.783 43.783-43.783 12.634 0 24.018 5.351 32.008 13.909l0.023 0.026 116.755 116.755c7.911 7.921 12.805 18.86 12.805 30.94s-4.893 23.019-12.805 30.941v0c-7.836 7.932-18.712 12.844-30.736 12.844-0.071 0-0.144 0-0.215 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "key"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 219,
                        "id" => 50,
                        "name" => "key",
                        "prevSize" => 80,
                        "code" => 59777
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 131
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M468.112 906.989c0 48.569-39.207 87.775-87.775 87.775s-87.775-39.207-87.775-87.775 39.207-87.775 87.775-87.775 87.775 39.207 87.775 87.775zM760.696 819.214c-48.569 0-87.775 39.207-87.775 87.775s39.207 87.775 87.775 87.775 87.775-39.207 87.775-87.775-39.207-87.775-87.775-87.775zM1022.852 259.207l-117.033 468.135c-4.681 19.311-22.236 33.355-42.718 33.355h-585.169c-21.066 0-39.207-15.214-43.302-36.28l-110.597-607.405h-80.168c-23.991 0-43.888-19.896-43.888-43.888s19.896-43.888 43.888-43.888h117.033c21.066 0 39.207 15.214 43.302 36.28l25.163 139.271h750.771c13.458 0 26.333 6.436 34.525 16.969s11.119 24.577 8.192 37.451zM923.958 292.562h-678.795l69.050 380.359h514.363l95.383-380.359z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "shopping-cart"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 156,
                        "id" => 51,
                        "name" => "shopping-cart",
                        "prevSize" => 80,
                        "code" => 59776
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 132
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M46.723 830.79c-0.231 0.004-0.504 0.007-0.777 0.007-24.867 0-45.027-20.159-45.027-45.027 0-5.382 0.944-10.545 2.676-15.329l-0.098 0.314 75.044-247.348c-14.665-39.037-23.418-84.145-24.012-131.219l-0.003-0.259c0-0.259-0.001-0.566-0.001-0.874 0-54.129 11.264-105.629 31.575-152.281l-0.955 2.464c60.427-141.25 198.214-238.423 358.696-238.423 106.632 0 203.244 42.901 273.517 112.384l-0.037-0.035c34.184 34.714 62.103 75.715 81.849 121.093l1 2.581c19.107 44.313 30.22 95.904 30.22 150.090s-11.112 105.775-31.182 152.616l0.962-2.526c-20.746 47.959-48.666 88.96-82.9 123.725l0.051-0.051c-70.377 70.256-167.536 113.703-274.844 113.703-48.549 0-95.021-8.893-137.875-25.139l2.675 0.889-247.348 76.845c-3.958 1.137-8.504 1.794-13.204 1.801h-0.004zM442.359 91.749c-0.253-0.001-0.554-0.001-0.856-0.001-41.547 0-81.081 8.613-116.916 24.15l1.904-0.734c-71.28 30.615-127.108 85.859-157.736 154.781l-0.758 1.912c-14.788 34.299-23.39 74.229-23.39 116.169s8.602 81.87 24.134 118.125l-0.744-1.956c1.7 4.555 2.682 9.817 2.682 15.309s-0.984 10.754-2.783 15.621l0.101-0.312-55.232 180.107 180.107-55.232c4.555-1.7 9.817-2.682 15.309-2.682s10.754 0.984 15.621 2.783l-0.312-0.101c34.014 14.517 73.588 22.957 115.132 22.957 122.867 0 228.493-73.819 274.946-179.525l0.754-1.926c13.056-32.416 20.631-70.004 20.631-109.36 0-163.117-130.105-295.846-292.2-300.074l-0.391-0.008z",
                            "M977.277 1022.304c-1.984 0.28-4.275 0.439-6.603 0.439s-4.621-0.16-6.864-0.469l0.26 0.030-247.348-75.044c-40.428 15.733-87.225 24.849-136.153 24.849-158.064 0-293.904-95.147-353.373-231.291l-0.967-2.482c-2.862-5.665-4.539-12.349-4.539-19.423 0-18.267 11.175-33.923 27.063-40.506l0.291-0.107c5.517-2.599 11.984-4.116 18.806-4.116 18.319 0 34.084 10.94 41.115 26.643l0.114 0.286c15.121 35.516 35.349 65.946 60.152 91.977l-0.117-0.122c54.202 53.624 128.774 86.753 211.084 86.753 41.688 0 81.392-8.499 117.473-23.857l-1.963 0.743c4.555-1.7 9.817-2.682 15.309-2.682s10.754 0.984 15.621 2.783l-0.312-0.101 180.107 55.232-55.232-180.107c-1.7-4.555-2.682-9.817-2.682-15.309s0.984-10.754 2.783-15.621l-0.101 0.312c14.803-33.932 23.415-73.467 23.415-115.014 0-0.301 0-0.602-0.001-0.902v0.046c0.001-0.319 0.001-0.697 0.001-1.075 0-81.912-33.275-156.053-87.045-209.642l-0.008-0.008c-12.456-15.658-25.63-29.595-39.895-42.336l-0.328-0.288c-13.187-8.012-21.861-22.298-21.861-38.61 0-24.867 20.159-45.027 45.027-45.027 10.297 0 19.786 3.456 27.372 9.273l-0.107-0.079c22.529 14.653 42.156 30.276 60.175 47.561l-0.139-0.132c34.393 34.592 62.347 75.63 81.881 121.138l0.968 2.536c19.357 44.266 30.62 95.849 30.62 150.064 0 0.431-0.001 0.863-0.003 1.293v-0.066c-0.136 48.508-8.929 94.919-24.912 137.831l0.898-2.751 75.044 247.348c1.634 4.472 2.578 9.633 2.578 15.015 0 24.867-20.159 45.027-45.027 45.027-0.273 0-0.546-0.003-0.818-0.007h0.041z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "comments"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 155,
                        "id" => 52,
                        "name" => "comments",
                        "prevSize" => 80,
                        "code" => 59774
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 133
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M89.22 977.058c-0.217 0.004-0.473 0.007-0.729 0.007-23.349 0-42.278-18.929-42.278-42.278 0-5.053 0.887-9.901 2.513-14.393l-0.093 0.294 90.193-295.946c-18.558-46.704-29.318-100.819-29.318-157.447 0-0.732 0.001-1.463 0.006-2.195v0.113c0-0.201 0-0.439 0-0.677 0-62.834 12.85-122.668 36.068-177.015l-1.118 2.942c23.991-55.124 56.28-102.224 95.856-142.080l-0.026 0.026c39.776-39.941 87.133-72.3 139.735-94.736l2.882-1.092c51.475-22.443 111.446-35.5 174.466-35.5s122.993 13.057 177.355 36.615l-2.889-1.115c161.557 70.486 272.594 228.494 273.398 412.529v0.103c-0.378 123.676-50.484 235.576-131.361 316.819l0.016-0.016c-39.83 39.549-86.93 71.841-139.11 94.681l-2.944 1.149c-51.439 22.133-111.317 35.003-174.201 35.003-57.536 0-112.557-10.776-163.152-30.417l3.076 1.050-295.946 90.193c-3.604 1.586-7.788 2.774-12.162 3.355l-0.239 0.026zM557.097 103.314c-149.484 0.668-277.735 90.884-333.925 219.741l-0.917 2.358c-17.678 41.648-27.953 90.087-27.953 140.927s10.274 99.278 28.861 143.354l-0.909-2.427c1.596 4.277 2.518 9.218 2.518 14.374s-0.923 10.098-2.613 14.668l0.095-0.293-69.336 235.065 233.938-71.027c4.277-1.596 9.218-2.518 14.374-2.518s10.098 0.923 14.668 2.613l-0.293-0.095c41.635 17.765 90.074 28.091 140.927 28.091s99.291-10.328 143.335-28.999l-2.408 0.907c131.638-56.462 222.168-184.951 222.168-334.586 0-51.2-10.598-99.924-29.723-144.098l0.907 2.35c-56.972-130.557-184.848-220.199-333.686-220.41h-0.028z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "comment"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 154,
                        "id" => 53,
                        "name" => "comment",
                        "prevSize" => 80,
                        "code" => 59775
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 134
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.588 175.553h-219.422v-73.14c-4.292-57.542-52.035-102.602-110.299-102.602-2.366 0-4.715 0.074-7.043 0.221l0.318-0.016h-146.282c-2.010-0.13-4.36-0.204-6.725-0.204-58.266 0-106.007 45.060-110.277 102.234l-0.022 0.368v73.14h-219.422c-56.419 0.331-102.067 45.977-102.397 102.366v585.157c0.331 56.419 45.977 102.067 102.366 102.397h819.207c56.419-0.331 102.067-45.977 102.397-102.366v-585.157c-0.331-56.419-45.977-102.067-102.366-102.397h-0.032zM409.603 102.412c0-4.681 11.118-14.629 29.256-14.629h146.282c18.139 0 29.256 9.947 29.256 14.629v73.14h-204.793zM102.412 263.322h819.175c8.079 0 14.629 6.55 14.629 14.629v0 190.166h-848.432v-190.166c0-8.079 6.55-14.629 14.629-14.629v0zM321.834 555.884h380.331v87.769h-380.331zM921.588 877.704h-819.175c-8.079 0-14.629-6.55-14.629-14.629v0-307.191h146.282v131.653c0.325 24.105 19.78 43.559 43.853 43.884h468.131c24.105-0.325 43.559-19.78 43.884-43.853v-131.685h146.282v307.191c0 8.079-6.55 14.629-14.629 14.629v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "briefcase"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 153,
                        "id" => 54,
                        "name" => "briefcase",
                        "prevSize" => 80,
                        "code" => 59773
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 135
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M983.875 747.107c-4.979 0-116.724-19.915-116.724-345.747 0-230.128-133.873-373.406-355.151-373.406s-355.151 143.278-355.151 373.406c0 331.917-115.617 345.747-115.065 345.747-22.914 0-41.49 18.576-41.49 41.49s18.576 41.49 41.49 41.49v0h267.193c19.311 95.868 102.854 167.053 203.023 167.053s183.711-71.186 202.798-165.727l0.223-1.325h267.746c22.914 0 41.49-18.576 41.49-41.49s-18.576-41.49-41.49-41.49v0zM512 913.065c-53.673-0.105-99.33-34.318-116.453-82.114l-0.271-0.865h233.448c-17.395 48.661-63.050 82.874-116.711 82.979h-0.013zM166.807 747.107c39.83-60.299 73.022-165.958 73.022-345.747s99.575-290.427 272.172-290.427 272.172 105.66 272.172 290.427 33.192 285.448 73.022 345.747z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "bell"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 218,
                        "id" => 55,
                        "name" => "bell",
                        "prevSize" => 80,
                        "code" => 59772
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 136
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M333.040 1023.149c-0.395 0.001-0.861 0.003-1.328 0.003-89.93 0-171.755-34.697-232.82-91.434l0.214 0.196c-60.481-56.047-98.213-135.906-98.213-224.578s37.732-168.531 98.016-224.397l0.197-0.181 442.138-417.574c43.713-40.007 102.187-64.52 166.387-64.52s122.673 24.512 166.573 64.688l-0.186-0.169c46.303 43.075 75.506 103.992 76.611 171.742l0.003 0.2c0.003 0.343 0.003 0.748 0.003 1.154 0 58.355-24.702 110.942-64.219 147.873l-0.117 0.107-442.723 418.16c-25.698 23.896-60.263 38.561-98.253 38.561s-72.555-14.665-98.342-38.643l0.089 0.082c-25.889-23.908-42.047-58.024-42.047-95.913s16.158-72.005 41.958-95.834l0.088-0.081 409.387-385.408c7.935-7.925 18.894-12.829 30.996-12.829s23.061 4.902 30.997 12.829v0c7.925 7.935 12.829 18.894 12.829 30.996s-4.902 23.061-12.829 30.997v0l-409.387 385.408c-8.981 7.868-14.621 19.359-14.621 32.167s5.64 24.299 14.572 32.124l0.049 0.042c10.156 8.727 23.465 14.040 38.014 14.040s27.858-5.313 38.092-14.105l-0.078 0.066 442.723-416.989c21.667-21.246 35.097-50.823 35.097-83.538 0-0.444-0.003-0.888-0.007-1.331v0.067c-1.049-42.681-19.73-80.802-49.009-107.504l-0.118-0.107c-27.771-25.797-65.112-41.627-106.148-41.627s-78.377 15.83-106.245 41.716l0.097-0.090-440.383 416.989c-43.561 40.015-70.766 97.247-70.766 160.83s27.203 120.815 70.608 160.688l0.158 0.143c45.833 42.805 107.572 69.087 175.451 69.087s129.619-26.282 175.601-69.225l-0.149 0.137 438.043-414.651c7.869-8.069 18.849-13.075 30.996-13.075s23.127 5.006 30.988 13.066l0.008 0.010c7.925 7.935 12.829 18.894 12.829 30.996s-4.902 23.061-12.829 30.997v0l-441.552 416.405c-60.773 56.558-142.541 91.272-232.414 91.272-1.768 0-3.534-0.014-5.296-0.040l0.267 0.003z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "paperclip"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 151,
                        "id" => 56,
                        "name" => "paperclip",
                        "prevSize" => 80,
                        "code" => 59771
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 137
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M833.7 643.604c-62.907 0.233-118.56 31.082-152.865 78.411l-0.38 0.551-309.417-152.076c5.76-17.446 9.17-37.537 9.358-58.398v-0.093c-0.189-20.954-3.597-41.044-9.755-59.892l0.396 1.402 309.417-152.076c34.79 46.82 89.928 76.825 152.074 76.825 104.34 0 188.925-84.585 188.925-188.925s-84.585-188.925-188.925-188.925c-104.34 0-188.925 84.585-188.925 188.925 0 0.34 0.001 0.68 0.003 1.020v-0.052c0.152 10.439 1.209 20.53 3.098 30.325l-0.173-1.080-319.945 160.849c-34.095-36.053-82.261-58.491-135.669-58.491-0.217 0-0.432 0-0.647 0.001h0.033c-104.986 0-190.096 85.108-190.096 190.096s85.108 190.096 190.096 190.096v0c0.182 0 0.399 0.001 0.614 0.001 53.408 0 101.575-22.439 135.587-58.404l0.082-0.088 319.945 160.849c-1.751 8.911-2.81 19.209-2.924 29.734l-0.001 0.096c0 104.986 85.108 190.096 190.096 190.096s190.096-85.108 190.096-190.096c0-104.986-85.108-190.096-190.096-190.096v0zM833.7 87.942c56.531 0 102.359 45.827 102.359 102.359s-45.827 102.359-102.359 102.359c-56.531 0-102.359-45.827-102.359-102.359v0c0.33-56.398 45.96-102.029 102.328-102.359h0.032zM190.3 614.359c-56.531 0-102.359-45.827-102.359-102.359s45.827-102.359 102.359-102.359c56.531 0 102.359 45.827 102.359 102.359v0c-0.33 56.398-45.96 102.029-102.328 102.359h-0.032zM833.7 936.058c-56.531 0-102.359-45.827-102.359-102.359s45.827-102.359 102.359-102.359c56.531 0 102.359 45.827 102.359 102.359v0c-0.33 56.398-45.96 102.029-102.328 102.359h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "share-alt"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 150,
                        "id" => 57,
                        "name" => "share-alt",
                        "prevSize" => 80,
                        "code" => 59770
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 138
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.588 58.527h-819.175c-56.419 0.331-102.067 45.977-102.397 102.366v702.182c0.331 56.419 45.977 102.067 102.366 102.397h819.207c56.419-0.331 102.067-45.977 102.397-102.366v-702.182c-0.331-56.419-45.977-102.067-102.366-102.397h-0.032zM102.412 146.296h819.175c8.079 0 14.629 6.55 14.629 14.629v0 90.11l-424.215 211.815-424.215-211.815v-90.11c0-8.079 6.55-14.629 14.629-14.629v0zM921.588 877.704h-819.175c-8.079 0-14.629-6.55-14.629-14.629v0-514.325l404.322 202.454c5.795 2.962 12.643 4.698 19.895 4.698s14.098-1.736 20.147-4.815l-0.252 0.117 404.322-202.454v514.325c0 8.079-6.55 14.629-14.629 14.629v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "envelope"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 217,
                        "id" => 58,
                        "name" => "envelope",
                        "prevSize" => 80,
                        "code" => 59769
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 139
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M710.11 1023.786c-11.715-0.201-22.473-4.137-31.176-10.665l0.138 0.099-316.316-253.581h-313.014c-27.205-0.367-49.161-22.323-49.528-49.492v-396.256c0.367-27.205 22.323-49.161 49.492-49.528h313.050l316.316-253.581c8.413-6.81 19.245-10.933 31.038-10.933 27.353 0 49.528 22.174 49.528 49.528 0 0.128 0 0.257-0.002 0.387v-0.020 924.514c-0.124 19.673-11.546 36.649-28.101 44.774l-0.296 0.132c-5.939 2.921-12.928 4.629-20.316 4.629-0.288 0-0.574-0.003-0.859-0.008h0.043zM99.27 660.583h280.656c11.732 0.051 22.527 4.016 31.159 10.656l-0.121-0.090 249.619 198.11v-716.499l-249.619 198.11c-8.511 6.55-19.306 10.515-31.026 10.566h-280.668z",
                            "M915.484 735.204c-11.19-0.147-21.49-3.841-29.859-10.006l0.142 0.101c-12.083-9.132-19.811-23.475-19.811-39.622 0-11.206 3.721-21.543 9.995-29.84l-0.090 0.124c30.292-39.484 48.545-89.591 48.545-143.96s-18.251-104.477-48.961-144.528l0.418 0.566c-6.185-8.174-9.906-18.511-9.906-29.717 0-27.353 22.174-49.528 49.528-49.528 16.148 0 30.49 7.728 39.532 19.687l0.090 0.124c42.965 55.728 68.862 126.535 68.862 203.393s-25.897 147.666-69.442 204.176l0.58-0.783c-9.257 11.932-23.523 19.596-39.586 19.811h-0.036z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "volume-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 148,
                        "id" => 59,
                        "name" => "volume-down",
                        "prevSize" => 80,
                        "code" => 59766
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 140
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M565.883 929.593c-9.559-0.164-18.337-3.376-25.438-8.703l0.112 0.081-258.099-206.91h-255.405c-22.198-0.299-40.113-18.215-40.412-40.383v-323.327c0.299-22.198 18.215-40.113 40.383-40.412h255.434l258.099-206.91c6.865-5.557 15.703-8.921 25.326-8.921 22.319 0 40.412 18.093 40.412 40.412 0 0.105 0 0.21-0.001 0.316v-0.016 754.361c-0.101 16.052-9.421 29.904-22.929 36.534l-0.241 0.107c-4.846 2.383-10.549 3.777-16.577 3.777-0.235 0-0.469-0.003-0.701-0.006h0.035zM67.466 633.237h229.002c9.573 0.042 18.381 3.277 25.424 8.695l-0.099-0.073 203.677 161.649v-584.629l-203.677 161.649c-6.785 5.918-15.568 9.703-25.217 10.233l-0.107 0.005h-229.002z",
                            "M860.084 839.070c-10.094-0.015-19.331-3.681-26.461-9.747l0.058 0.048c-8.624-7.36-14.057-18.239-14.057-30.387 0-10.3 3.905-19.687 10.315-26.762l-0.030 0.034c61.742-68.722 99.501-160.079 99.501-260.255s-37.758-191.532-99.818-260.614l0.318 0.36c-6.378-7.12-10.277-16.575-10.277-26.941 0-22.34 18.111-40.451 40.451-40.451 11.975 0 22.734 5.203 30.141 13.472l0.034 0.038c74.659 82.7 120.339 192.814 120.339 313.599s-45.68 230.898-120.705 314.010l0.366-0.412c-7.167 8.586-17.874 14.010-29.847 14.010-0.115 0-0.23 0-0.345-0.001h0.018z",
                            "M733.459 694.124c-9.131-0.12-17.535-3.134-24.364-8.165l0.116 0.082c-9.859-7.451-16.165-19.154-16.165-32.33 0-9.143 3.036-17.578 8.156-24.348l-0.073 0.101c24.717-32.217 39.61-73.102 39.61-117.464s-14.892-85.248-39.95-117.928l0.341 0.462c-5.046-6.669-8.082-15.104-8.082-24.247 0-22.319 18.093-40.412 40.412-40.412 13.176 0 24.879 6.306 32.257 16.064l0.073 0.101c35.058 45.471 56.188 103.247 56.188 165.959s-21.131 120.489-56.662 166.598l0.474-0.639c-7.553 9.736-19.193 15.989-32.301 16.165h-0.029z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "volume-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 147,
                        "id" => 60,
                        "name" => "volume-up",
                        "prevSize" => 80,
                        "code" => 59767
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 141
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M842.183 1023.786c-11.715-0.201-22.473-4.137-31.176-10.665l0.138 0.099-316.316-253.581h-313.014c-27.205-0.367-49.161-22.323-49.528-49.492v-396.256c0.367-27.205 22.323-49.161 49.492-49.528h313.050l316.316-253.581c8.413-6.81 19.245-10.933 31.038-10.933 27.353 0 49.528 22.174 49.528 49.528 0 0.128 0 0.257-0.002 0.387v-0.020 924.514c-0.153 19.495-11.255 36.364-27.452 44.771l-0.283 0.133c-6.264 2.921-13.598 4.625-21.331 4.625-0.163 0-0.323 0-0.486-0.002h0.025zM231.344 660.583h280.656c11.732 0.051 22.527 4.016 31.159 10.656l-0.121-0.090 249.619 198.11v-716.499l-249.619 198.11c-8.511 6.55-19.306 10.515-31.026 10.566h-280.668z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "volume-off"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 146,
                        "id" => 61,
                        "name" => "volume-off",
                        "prevSize" => 80,
                        "code" => 59768
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 142
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M974.421 561.545h-924.841c-27.344-0.025-49.502-22.198-49.502-49.545 0-13.671 5.537-26.048 14.49-35.013v0l462.421-462.421c8.963-8.952 21.342-14.49 35.011-14.49s26.048 5.537 35.013 14.49v0l462.421 462.421c8.952 8.963 14.49 21.342 14.49 35.011 0 27.347-22.157 49.52-49.499 49.545h-0.003zM169.148 462.455h685.704l-342.852-342.852z",
                            "M908.36 1023.966h-792.721c-63.696-0.373-115.233-51.908-115.606-115.57v-132.155c0.373-63.696 51.908-115.233 115.57-115.606h792.757c63.696 0.373 115.233 51.908 115.606 115.57v132.155c-0.373 63.696-51.908 115.233-115.57 115.606h-0.036zM115.64 759.725c-9.121 0-16.516 7.395-16.516 16.516v0 132.12c0 9.121 7.395 16.516 16.516 16.516v0h792.721c9.121 0 16.516-7.395 16.516-16.516v0-132.12c0-9.121-7.395-16.516-16.516-16.516v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "eject"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 145,
                        "id" => 62,
                        "name" => "eject",
                        "prevSize" => 80,
                        "code" => 59765
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 143
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.588 117.040h-819.175c-56.419 0.331-102.067 45.977-102.397 102.366v585.157c0.331 56.419 45.977 102.067 102.366 102.397h819.207c56.419-0.331 102.067-45.977 102.397-102.366v-585.157c-0.331-56.419-45.977-102.067-102.366-102.397h-0.032zM936.215 219.438v97.715h-12.288c-3.162 0.418-6.82 0.657-10.532 0.657s-7.37-0.239-10.956-0.701l0.424 0.045h-7.607c-7.377-1.502-13.839-3.52-20.003-6.11l0.694 0.259h-7.022c-8.645-4.243-16.008-9.735-22.196-16.341l-0.038-0.041c-16.923-16.712-27.426-39.89-27.5-65.521v-0.014c0.016-8.559 1.299-16.812 3.668-24.592l-0.158 0.601h98.887c0.004 0 0.008 0 0.012 0 7.873 0 14.294 6.219 14.615 14.014l0.001 0.029zM102.412 204.809h98.887c2.212 7.178 3.494 15.431 3.511 23.981v0.010c-0.074 25.645-10.578 48.823-27.491 65.525l-0.010 0.010c-6.348 6.456-13.68 11.92-21.756 16.155l-0.479 0.229h-7.607c-5.25 2.652-11.34 4.689-17.749 5.795l-0.389 0.056h-8.191c-3.162 0.418-6.82 0.657-10.532 0.657s-7.37-0.239-10.956-0.701l0.424 0.045h-12.288v-97.131c0-8.079 6.55-14.629 14.629-14.629v0zM87.785 804.562v-97.715h12.288c3.162-0.418 6.82-0.657 10.532-0.657s7.37 0.239 10.956 0.701l-0.424-0.045h7.607c7.229 1.166 13.718 3.206 19.76 6.041l-0.451-0.191h7.022c8.556 4.464 15.886 9.927 22.223 16.372l0.012 0.012c16.923 16.712 27.426 39.89 27.5 65.521v0.014c-0.016 8.559-1.299 16.812-3.668 24.592l0.158-0.601h-98.887c-0.004 0-0.008 0-0.012 0-7.873 0-14.294-6.219-14.615-14.014l-0.001-0.029zM290.823 819.191c0.287-3.59 0.451-7.773 0.451-11.996s-0.163-8.405-0.485-12.544l0.034 0.549c0.004-0.481 0.007-1.050 0.007-1.62 0-49.382-20.391-94-53.213-125.896l-0.041-0.040c-8.427-8.529-17.825-16.067-28.024-22.443l-0.647-0.377-9.947-6.436c-5.625-3.003-12.567-6.153-19.707-8.903l-1.358-0.459-11.702-4.681c-8.77-2.704-19.269-4.96-30.044-6.336l-0.968-0.101c-2.719-0.288-5.875-0.451-9.069-0.451s-6.35 0.165-9.458 0.484l0.389-0.033h-29.256v-210.060h49.736c9.036-1.557 16.909-3.588 24.522-6.182l-1.116 0.331 12.873-4.096c9.915-3.42 18.418-7.374 26.429-12.074l-0.683 0.37 9.362-5.266c11.406-7.555 21.355-15.646 30.453-24.6l-0.026 0.025c32.863-31.937 53.254-76.555 53.254-125.937 0-0.569-0.003-1.138-0.008-1.707v0.086c0.287-3.59 0.451-7.773 0.451-11.996s-0.163-8.405-0.485-12.544l0.034 0.549h442.355c-0.287 3.59-0.451 7.773-0.451 11.996s0.163 8.405 0.485 12.544l-0.034-0.549c-0.004 0.481-0.007 1.050-0.007 1.62 0 49.382 20.391 94 53.213 125.896l0.041 0.040c8.973 9.14 18.943 17.251 29.747 24.168l0.679 0.407 9.362 5.266c7.327 4.329 15.83 8.282 24.727 11.392l1.018 0.31 12.873 4.096c6.721 2.133 14.826 3.972 23.141 5.166l0.85 0.1h49.151v208.304h-29.256c-2.719-0.277-5.876-0.435-9.069-0.435s-6.351 0.158-9.463 0.466l0.394-0.032c-11.742 1.477-22.241 3.733-32.391 6.794l1.38-0.358-11.702 4.681c-9.096 3.533-16.61 7.072-23.848 11.051l1.029-0.518-9.947 6.436c-10.846 6.753-20.244 14.291-28.657 22.805l-0.015 0.015c-32.863 31.937-53.254 76.555-53.254 125.937 0 0.569 0.003 1.138 0.008 1.707v-0.086c-0.287 3.59-0.451 7.773-0.451 11.996s0.163 8.405 0.485 12.544l-0.034-0.549zM921.588 819.191h-98.887c-2.212-7.178-3.494-15.431-3.511-23.981v-0.010c0.074-25.645 10.578-48.823 27.491-65.525l0.010-0.010c6.226-6.647 13.589-12.14 21.793-16.186l0.443-0.197h7.022c5.388-2.223 11.845-4.236 18.507-5.704l0.802-0.148h7.607c3.162-0.418 6.82-0.657 10.532-0.657s7.37 0.239 10.956 0.701l-0.424-0.045h12.288v97.131c0 8.079-6.55 14.629-14.629 14.629v0z",
                            "M512 307.207c-113.105 0-204.793 91.69-204.793 204.793s91.69 204.793 204.793 204.793c113.105 0 204.793-91.69 204.793-204.793v0c0-113.105-91.69-204.793-204.793-204.793v0zM512 629.025c-64.631 0-117.025-52.394-117.025-117.025s52.394-117.025 117.025-117.025c64.631 0 117.025 52.394 117.025 117.025v0c0 64.631-52.394 117.025-117.025 117.025v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "money-bill"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 144,
                        "id" => 63,
                        "name" => "money-bill",
                        "prevSize" => 80,
                        "code" => 59764
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 144
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M871.768 55.371h-553.491c-84.063 0-152.209 68.147-152.209 152.209v0 13.838h-13.838c-84.063 0-152.209 68.147-152.209 152.209v0 442.792c0 84.063 68.147 152.209 152.209 152.209v0h553.491c84.063 0 152.209-68.147 152.209-152.209v0-13.838h13.838c84.063 0 152.209-68.147 152.209-152.209v0-442.792c0-84.063-68.147-152.209-152.209-152.209v0zM249.092 207.58c0-38.21 30.976-69.186 69.186-69.186v0h553.491c38.21 0 69.186 30.976 69.186 69.186v0 343.163l-125.642-105.716c-7.15-6.241-16.567-10.047-26.872-10.047-12.495 0-23.684 5.595-31.196 14.418l-0.048 0.058-59.223 69.74-221.396-214.755c-6.965-8.265-17.229-13.559-28.735-13.836l-0.047-0.001c-11.963 0.464-22.566 5.925-29.844 14.338l-0.044 0.052-168.814 200.917zM318.279 719.559c-38.21 0-69.186-30.976-69.186-69.186v0-16.605l203.131-239.108 191.508 187.633-116.233 137.265zM774.908 816.42c0 38.21-30.976 69.186-69.186 69.186v0h-553.491c-38.21 0-69.186-30.976-69.186-69.186v0-442.792c0-38.21 30.976-69.186 69.186-69.186v0h13.838v345.932c0 84.063 68.147 152.209 152.209 152.209v0h456.629zM871.768 719.559h-235.233l157.191-184.866 145.567 123.429c-3.487 34.553-32.362 61.315-67.514 61.437h-0.013z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "images"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 143,
                        "id" => 64,
                        "name" => "images",
                        "prevSize" => 80,
                        "code" => 59763
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 145
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M863.086 58.514h-702.171c-88.87 0-160.914 72.044-160.914 160.914v0 585.143c0 88.87 72.044 160.914 160.914 160.914v0h702.171c88.87 0 160.914-72.044 160.914-160.914v0-585.143c0-88.87-72.044-160.914-160.914-160.914v0zM160.914 146.285h702.171c40.395 0 73.142 32.747 73.142 73.142v0 479.232l-159.158-159.158c-7.493-7.993-18.119-12.974-29.908-12.974-1.007 0-2.005 0.036-2.992 0.108l0.133-0.008c-12.88 0.772-24.239 6.708-32.137 15.744l-0.047 0.055-75.483 90.697-269.166-269.166c-7.488-7.945-18.081-12.89-29.83-12.89-0.416 0-0.831 0.007-1.244 0.018l0.060-0.001c-12.88 0.772-24.239 6.708-32.137 15.744l-0.047 0.055-216.503 258.048v-405.504c0-40.395 32.747-73.142 73.142-73.142v0zM87.772 804.571v-42.716l251.612-301.934 241.079 241.079-147.456 175.543h-272.091c-0.003 0-0.005 0-0.010 0-39.984 0-72.475-32.083-73.133-71.911l-0.001-0.062zM863.086 877.715h-315.977l201.874-242.249 184.32 184.32c-6.765 33.136-35.591 57.744-70.197 57.929h-0.021z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "image"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 142,
                        "id" => 65,
                        "name" => "image",
                        "prevSize" => 80,
                        "code" => 59762
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 146
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M863.075 1023.984h-175.538c-24.237 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h175.538c1.762 0.162 3.81 0.255 5.881 0.255 34.275 0 62.615-25.405 67.22-58.41l0.041-0.357v-729.651c-4.645-33.363-32.986-58.768-67.261-58.768-2.069 0-4.118 0.093-6.141 0.274l0.261-0.019h-175.538c-24.237 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h175.538c1.958-0.089 4.255-0.14 6.565-0.14 83.099 0 150.872 65.615 154.335 147.863l0.011 0.313v726.14c-3.472 82.56-71.246 148.176-154.344 148.176-2.309 0-4.606-0.051-6.89-0.151l0.325 0.011z",
                            "M453.487 789.935c-0.060 0-0.133 0-0.204 0-12.052 0-22.953-4.923-30.803-12.869l-0.004-0.004c-7.929-7.939-12.835-18.903-12.835-31.011s4.904-23.072 12.835-31.013v0l203.038-203.038-203.038-203.038c-7.297-7.816-11.777-18.344-11.777-29.917 0-24.237 19.648-43.884 43.884-43.884 11.575 0 22.101 4.48 29.943 11.802l-0.026-0.023 234.051 234.051c7.929 7.939 12.835 18.903 12.835 31.011s-4.904 23.072-12.835 31.013v0l-234.051 234.051c-7.854 7.95-18.755 12.873-30.807 12.873-0.071 0-0.144 0-0.215 0h0.011z",
                            "M687.538 555.884h-643.638c-24.237 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h643.638c24.237 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sign-in"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 141,
                        "id" => 66,
                        "name" => "sign-in",
                        "prevSize" => 80,
                        "code" => 59760
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 147
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M336.515 1023.832h-175.485c-1.958 0.089-4.254 0.14-6.563 0.14-83.075 0-150.827-65.596-154.289-147.819l-0.011-0.313v-727.679c3.471-82.536 71.225-148.132 154.298-148.132 2.309 0 4.605 0.051 6.888 0.151l-0.325-0.011h175.485c24.229 0 43.871 19.642 43.871 43.871s-19.642 43.871-43.871 43.871v0h-175.485c-1.762-0.162-3.809-0.255-5.879-0.255-34.265 0-62.596 25.397-67.2 58.393l-0.041 0.356v729.434c4.644 33.353 32.976 58.751 67.241 58.751 2.069 0 4.117-0.093 6.139-0.274l-0.26 0.019h175.485c24.229 0 43.871 19.642 43.871 43.871s-19.642 43.871-43.871 43.871v0z",
                            "M745.981 789.852c-0.060 0-0.133 0-0.204 0-12.048 0-22.946-4.922-30.794-12.865l-0.004-0.004c-7.927-7.937-12.831-18.898-12.831-31.002s4.903-23.065 12.831-31.003v0l202.978-202.978-202.978-202.978c-8.602-8.031-13.963-19.438-13.963-32.097 0-24.229 19.642-43.871 43.871-43.871 12.66 0 24.066 5.362 32.073 13.937l0.023 0.026 233.981 233.981c7.927 7.937 12.831 18.898 12.831 31.002s-4.903 23.065-12.831 31.003v0l-233.981 233.981c-7.852 7.948-18.75 12.869-30.798 12.869-0.071 0-0.144 0-0.215 0h0.011z",
                            "M979.961 555.871h-643.446c-24.229 0-43.871-19.642-43.871-43.871s19.642-43.871 43.871-43.871v0h643.446c24.229 0 43.871 19.642 43.871 43.871s-19.642 43.871-43.871 43.871v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sign-out"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 140,
                        "id" => 67,
                        "name" => "sign-out",
                        "prevSize" => 80,
                        "code" => 59761
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 148
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M823.892 558.055c-0.046 0-0.1 0-0.154 0-10.973 0-20.961-4.21-28.44-11.103l0.029 0.026c-74.352-66.801-173.194-107.653-281.576-107.653s-207.224 40.851-281.966 107.996l0.389-0.344c-7.699 6.911-17.932 11.137-29.152 11.137-12.958 0-24.6-5.638-32.606-14.593l-0.037-0.042c-6.617-7.695-10.645-17.782-10.645-28.809 0-13.081 5.67-24.84 14.685-32.949l0.041-0.036c89.475-80.776 208.611-130.198 339.291-130.198s249.814 49.422 339.736 130.594l-0.445-0.396c9.056 8.146 14.726 19.904 14.726 32.986 0 11.028-4.029 21.114-10.694 28.868l0.049-0.059c-8.339 8.889-20.122 14.46-33.209 14.575h-0.020z",
                            "M978.379 395.406c-11.486-0.060-21.927-4.48-29.763-11.688l0.031 0.029c-113.494-108.335-267.577-175.003-437.231-175.003s-323.736 66.669-437.478 175.238l0.247-0.234c-8.074 9.555-20.065 15.58-33.462 15.58-24.147 0-43.723-19.576-43.723-43.723 0-14.862 7.414-27.991 18.746-35.891l0.142-0.094c128.857-122.252 303.412-197.437 495.528-197.437s366.671 75.186 495.847 197.738l-0.318-0.301c8.63 8.010 14.013 19.416 14.013 32.079 0 23.746-18.928 43.070-42.521 43.707l-0.059 0.001z",
                            "M359.26 724.203c-14.255 0-26.917-6.822-34.899-17.38l-0.079-0.109c-5.603-7.207-8.984-16.384-8.984-26.351 0-14.271 6.93-26.924 17.608-34.778l0.12-0.083c49.111-37.883 111.521-60.719 179.265-60.719s130.154 22.836 179.953 61.23l-0.689-0.51c10.667 8.061 17.489 20.723 17.489 34.978 0 9.892-3.285 19.018-8.824 26.343l0.079-0.109c-8.18 10.541-20.853 17.261-35.095 17.261-9.821 0-18.895-3.195-26.241-8.603l0.123 0.086c-34.771-26.697-78.905-42.783-126.797-42.783s-92.026 16.086-127.294 43.149l0.497-0.366c-7.262 5.353-16.355 8.615-26.202 8.745h-0.031z",
                            "M512 905.508c-24.147 0-43.723-19.576-43.723-43.723s19.576-43.723 43.723-43.723v0 0c24.147 0 43.723 19.576 43.723 43.723s-19.576 43.723-43.723 43.723v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "wifi"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 139,
                        "id" => 68,
                        "name" => "wifi",
                        "prevSize" => 80,
                        "code" => 59759
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 149
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M590.766 393.851h-157.532c-50.632-0.297-91.598-41.261-91.894-91.866v-157.56c0.297-50.632 41.261-91.598 91.866-91.894h157.56c50.632 0.297 91.598 41.261 91.894 91.866v157.56c-0.297 50.632-41.261 91.598-91.866 91.894h-0.028zM433.234 131.298c-7.25 0-13.128 5.878-13.128 13.128v0 157.532c0 7.25 5.878 13.128 13.128 13.128v0h157.532c7.25 0 13.128-5.878 13.128-13.128v0-157.532c0-7.25-5.878-13.128-13.128-13.128v0z",
                            "M196.936 918.958h-105.021c-50.632-0.297-91.598-41.261-91.894-91.866v-105.049c0.297-50.632 41.261-91.598 91.866-91.894h105.049c50.632 0.297 91.598 41.261 91.894 91.866v105.049c-0.297 50.632-41.261 91.598-91.866 91.894h-0.028zM91.915 708.915c-7.25 0-13.128 5.878-13.128 13.128v0 105.021c0 7.25 5.878 13.128 13.128 13.128v0h105.021c7.25 0 13.128-5.878 13.128-13.128v0-105.021c0-7.25-5.878-13.128-13.128-13.128v0z",
                            "M564.511 918.958h-105.021c-50.632-0.297-91.598-41.261-91.894-91.866v-105.049c0.297-50.632 41.261-91.598 91.866-91.894h105.049c50.632 0.297 91.598 41.261 91.894 91.866v105.049c-0.297 50.632-41.261 91.598-91.866 91.894h-0.028zM459.489 708.915c-7.25 0-13.128 5.878-13.128 13.128v0 105.021c0 7.25 5.878 13.128 13.128 13.128v0h105.021c7.25 0 13.128-5.878 13.128-13.128v0-105.021c0-7.25-5.878-13.128-13.128-13.128v0z",
                            "M932.085 918.958h-105.021c-50.632-0.297-91.598-41.261-91.894-91.866v-105.049c0.297-50.632 41.261-91.598 91.866-91.894h105.049c50.632 0.297 91.598 41.261 91.894 91.866v105.049c-0.297 50.632-41.261 91.598-91.866 91.894h-0.028zM827.064 708.915c-7.25 0-13.128 5.878-13.128 13.128v0 105.021c0 7.25 5.878 13.128 13.128 13.128v0h105.021c7.25 0 13.128-5.878 13.128-13.128v0-105.021c0-7.25-5.878-13.128-13.128-13.128v0z",
                            "M879.575 708.915c-21.632-0.292-39.091-17.751-39.383-39.355v-105.049c0-7.25-5.878-13.128-13.128-13.128v0h-630.129c-7.25 0-13.128 5.878-13.128 13.128v0 105.021c0 21.751-17.633 39.383-39.383 39.383s-39.383-17.633-39.383-39.383v0-105.021c0.297-50.632 41.261-91.598 91.866-91.894h630.157c50.632 0.297 91.598 41.261 91.894 91.866v105.049c-0.292 21.632-17.751 39.091-39.355 39.383h-0.028z",
                            "M512 708.915c-21.632-0.292-39.091-17.751-39.383-39.355v-315.093c0-21.751 17.633-39.383 39.383-39.383s39.383 17.633 39.383 39.383v0 315.064c-0.292 21.632-17.751 39.091-39.355 39.383h-0.028z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sitemap"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 138,
                        "id" => 69,
                        "name" => "sitemap",
                        "prevSize" => 80,
                        "code" => 59758
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 150
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M46.545 1024c-25.567-0.345-46.201-20.979-46.545-46.512v-930.943c0-25.706 20.839-46.545 46.545-46.545s46.545 20.839 46.545 46.545v0 930.909c-0.345 25.567-20.979 46.201-46.512 46.545h-0.033z",
                            "M977.455 1024h-930.909c-25.706 0-46.545-20.839-46.545-46.545s20.839-46.545 46.545-46.545v0h930.909c25.706 0 46.545 20.839 46.545 46.545s-20.839 46.545-46.545 46.545v0z",
                            "M263.757 806.788c-25.567-0.345-46.201-20.979-46.545-46.512v-248.276c0-25.706 20.839-46.545 46.545-46.545s46.545 20.839 46.545 46.545v0 248.243c-0.345 25.567-20.979 46.201-46.512 46.545h-0.033z",
                            "M480.97 806.788c-25.567-0.345-46.201-20.979-46.545-46.512v-496.518c0-25.706 20.839-46.545 46.545-46.545s46.545 20.839 46.545 46.545v0 496.484c-0.345 25.567-20.979 46.201-46.512 46.545h-0.033z",
                            "M698.182 806.788c-25.567-0.345-46.201-20.979-46.545-46.512v-248.276c0-25.706 20.839-46.545 46.545-46.545s46.545 20.839 46.545 46.545v0 248.243c-0.345 25.567-20.979 46.201-46.512 46.545h-0.033z",
                            "M915.393 806.788c-25.567-0.345-46.201-20.979-46.545-46.512v-496.518c0-25.706 20.839-46.545 46.545-46.545s46.545 20.839 46.545 46.545v0 496.484c-0.345 25.567-20.979 46.201-46.512 46.545h-0.033z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "chart-bar"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 137,
                        "id" => 70,
                        "name" => "chart-bar",
                        "prevSize" => 80,
                        "code" => 59757
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 151
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M863.086 936.228h-702.171c-88.87 0-160.914-72.044-160.914-160.914v0-351.086c0-88.87 72.044-160.914 160.914-160.914v0h35.109l69.047-102.4c29.412-43.303 78.425-71.379 133.997-71.387h225.866c55.573 0.008 104.587 28.085 133.636 70.825l0.361 0.562 69.047 102.4h35.109c88.87 0 160.914 72.044 160.914 160.914v0 351.086c0 88.87-72.044 160.914-160.914 160.914v0zM160.914 351.086c-40.395 0-73.142 32.747-73.142 73.142v0 351.086c0 40.395 32.747 73.142 73.142 73.142v0h702.171c40.395 0 73.142-32.747 73.142-73.142v0-351.086c0-40.395-32.747-73.142-73.142-73.142v0h-58.515c-15.035-0.029-28.294-7.614-36.181-19.159l-0.097-0.151-80.75-123.466c-12.764-19.278-34.075-32.011-58.402-32.765l-0.111-0.003h-229.961c-24.44 0.758-45.751 13.489-58.346 32.499l-0.167 0.269-84.846 123.466c-7.986 11.696-21.243 19.281-36.274 19.31h-0.004z",
                            "M512 760.685c-105.028 0-190.172-85.142-190.172-190.172s85.142-190.172 190.172-190.172c105.028 0 190.172 85.142 190.172 190.172v0c-0.332 104.895-85.277 189.84-190.139 190.172h-0.032zM512 468.114c-56.554 0-102.4 45.845-102.4 102.4s45.845 102.4 102.4 102.4c56.554 0 102.4-45.845 102.4-102.4v0c-0.331-56.421-45.979-102.070-102.369-102.4h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "camera"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 136,
                        "id" => 71,
                        "name" => "camera",
                        "prevSize" => 80,
                        "code" => 59756
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 152
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.977c-24.105-0.325-43.559-19.779-43.884-43.852v-936.219c0-24.236 19.648-43.884 43.884-43.884s43.884 19.648 43.884 43.884v0 936.187c-0.325 24.105-19.779 43.559-43.852 43.884h-0.032z",
                            "M599.768 906.954h-380.325c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h380.325c3.954 0.373 8.548 0.587 13.193 0.587 76.308 0 139.186-57.511 147.651-131.554l0.063-0.684c-8.529-74.727-71.406-132.238-147.714-132.238-4.645 0-9.24 0.213-13.775 0.629l0.583-0.044h-175.535c-4.502 0.309-9.759 0.484-15.056 0.484-124.284 0-225.944-96.875-233.585-219.234l-0.033-0.671c7.676-123.029 109.334-219.903 233.619-219.903 5.298 0 10.553 0.176 15.762 0.522l-0.706-0.037h321.815c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0h-321.815c-3.954-0.373-8.548-0.587-13.193-0.587-76.308 0-139.186 57.511-147.651 131.554l-0.063 0.684c8.529 74.727 71.406 132.238 147.714 132.238 4.645 0 9.24-0.213 13.775-0.629l-0.583 0.044h175.535c4.502-0.309 9.759-0.484 15.056-0.484 124.284 0 225.944 96.875 233.585 219.234l0.033 0.671c-7.676 123.029-109.334 219.903-233.619 219.903-5.298 0-10.553-0.176-15.762-0.522l0.706 0.037z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "dollar"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 135,
                        "id" => 72,
                        "name" => "dollar",
                        "prevSize" => 80,
                        "code" => 59755
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 153
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M746.049 0.019c-153.498 0-277.933 124.435-277.933 277.933v0 131.652h-307.189c-88.867 0-160.908 72.041-160.908 160.908v0 292.56c0 88.867 72.041 160.908 160.908 160.908v0h409.585c88.867 0 160.908-72.041 160.908-160.908v0-292.56c0-88.867-72.041-160.908-160.908-160.908v0h-14.628v-131.652c0-105.024 85.139-190.165 190.165-190.165s190.165 85.139 190.165 190.165v0c0 24.236 19.648 43.884 43.884 43.884s43.884-19.648 43.884-43.884v0c0-153.498-124.435-277.933-277.933-277.933v0zM643.652 570.513v292.56c0 40.394-32.746 73.14-73.14 73.14v0h-409.585c-40.394 0-73.14-32.746-73.14-73.14v0-292.56c0-40.394 32.746-73.14 73.14-73.14v0h409.585c40.394 0 73.14 32.746 73.14 73.14v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "lock-open"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 134,
                        "id" => 73,
                        "name" => "lock-open",
                        "prevSize" => 80,
                        "code" => 59754
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 154
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M863.086 58.514h-702.171c-88.87 0-160.914 72.044-160.914 160.914v0 585.143c0 88.87 72.044 160.914 160.914 160.914v0h702.171c88.87 0 160.914-72.044 160.914-160.914v0-585.143c0-88.87-72.044-160.914-160.914-160.914v0zM936.228 219.429v248.685h-380.342v-321.829h307.2c40.395 0 73.142 32.747 73.142 73.142v0zM160.914 146.285h307.2v321.829h-380.342v-248.685c0-40.395 32.747-73.142 73.142-73.142v0zM87.772 804.571v-248.685h380.342v321.829h-307.2c-40.395 0-73.142-32.747-73.142-73.142v0zM863.086 877.715h-307.2v-321.829h380.342v248.685c0 40.395-32.747 73.142-73.142 73.142v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "table"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 133,
                        "id" => 74,
                        "name" => "table",
                        "prevSize" => 80,
                        "code" => 59753
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 155
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1022.599c-0.113 0.001-0.245 0.001-0.378 0.001-8.356 0-16.084-2.691-22.364-7.254l0.11 0.076c-16.56-10.488-405.166-271.583-405.166-588.982 0-236.266 191.533-427.799 427.799-427.799s427.799 191.533 427.799 427.799v0c0 317.399-386.399 578.495-405.166 588.982-6.17 4.487-13.897 7.178-22.254 7.178-0.133 0-0.265-0.001-0.397-0.003h0.021zM512 84.201c-0.329-0.001-0.718-0.001-1.107-0.001-189.346 0-342.951 153.026-343.891 342.151v0.089c0 232.392 264.407 444.91 344.999 503.975 80.591-59.063 344.999-271.583 344.999-503.975-0.939-189.216-154.544-342.241-343.891-342.241-0.389 0-0.779 0.001-1.168 0.003h0.061z",
                            "M512 553.4c-83.836 0-151.799-67.963-151.799-151.799s67.963-151.799 151.799-151.799c83.836 0 151.799 67.963 151.799 151.799v0c0 83.836-67.963 151.799-151.799 151.799v0zM512 332.6c-38.107 0-68.999 30.892-68.999 68.999s30.892 68.999 68.999 68.999c38.107 0 68.999-30.892 68.999-68.999v0c0-38.107-30.892-68.999-68.999-68.999v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "map-marker"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 132,
                        "id" => 75,
                        "name" => "map-marker",
                        "prevSize" => 80,
                        "code" => 59752
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 156
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M967.082 560.759h-715.127c-26.929 0-48.759-21.83-48.759-48.759s21.83-48.759 48.759-48.759v0h715.127c26.929 0 48.759 21.83 48.759 48.759s-21.83 48.759-48.759 48.759v0z",
                            "M967.082 268.207h-715.127c-26.929 0-48.759-21.83-48.759-48.759s21.83-48.759 48.759-48.759v0h715.127c26.929 0 48.759 21.83 48.759 48.759s-21.83 48.759-48.759 48.759v0z",
                            "M967.082 853.311h-715.127c-26.929 0-48.759-21.83-48.759-48.759s21.83-48.759 48.759-48.759v0h715.127c26.929 0 48.759 21.83 48.759 48.759s-21.83 48.759-48.759 48.759v0z",
                            "M56.918 284.46c-0.236 0.003-0.517 0.005-0.797 0.005-8.607 0-16.825-1.673-24.344-4.711l0.436 0.155c-8.191-4.021-15.246-8.79-21.551-14.388l0.098 0.085c-11.653-11.746-18.854-27.923-18.854-45.783 0-0.133 0-0.264 0.002-0.396v0.020c0.258-17.936 7.392-34.155 18.879-46.185l-0.024 0.026c5.935-5.857 13.086-10.5 21.038-13.514l0.416-0.139c7.303-3.084 15.795-4.877 24.704-4.877s17.401 1.792 25.134 5.036l-0.428-0.16c8.326 3.279 15.455 7.903 21.477 13.674l-0.023-0.021c11.461 12.002 18.595 28.224 18.853 46.107v0.050c0 0.111 0.002 0.244 0.002 0.376 0 17.859-7.201 34.037-18.859 45.786l0.005-0.005c-6.208 5.511-13.262 10.282-20.899 14.055l-0.555 0.248c-7.082 2.883-15.3 4.556-23.909 4.556-0.28 0-0.559-0.002-0.84-0.005h0.043z",
                            "M56.918 577.012c-8.949-0.111-17.424-2.014-25.124-5.363l0.419 0.163c-8.262-3.501-15.357-8.097-21.513-13.706l0.059 0.053c-11.653-11.746-18.854-27.923-18.854-45.783 0-0.133 0-0.264 0.002-0.396v0.020c0.258-17.936 7.392-34.155 18.879-46.185l-0.024 0.026c6.096-5.555 13.192-10.151 20.966-13.467l0.488-0.186c8.019-3.808 17.424-6.032 27.348-6.032 3.658 0 7.245 0.302 10.739 0.882l-0.379-0.052 11.702 3.901 11.702 5.851c3.642 2.58 6.822 5.141 9.837 7.878l-0.085-0.076c11.672 12.226 18.854 28.826 18.854 47.102 0 0.125 0 0.251-0.002 0.376v-0.020c0 35.905-29.107 65.012-65.012 65.012v0z",
                            "M56.918 869.564c-0.236 0.003-0.517 0.005-0.797 0.005-8.607 0-16.825-1.673-24.344-4.711l0.436 0.155c-8.191-4.021-15.246-8.79-21.551-14.388l0.098 0.085c-5.555-6.096-10.151-13.192-13.467-20.966l-0.186-0.488c-3.296-7.27-5.216-15.763-5.216-24.704s1.92-17.436 5.371-25.089l-0.155 0.385c3.501-8.262 8.097-15.357 13.706-21.513l-0.053 0.059c11.733-11.582 27.863-18.736 45.663-18.736 9.098 0 17.76 1.87 25.624 5.245l-0.424-0.162c8.326 3.279 15.455 7.903 21.477 13.674l-0.023-0.021c5.555 6.096 10.151 13.192 13.467 20.966l0.186 0.488c3.296 7.27 5.216 15.763 5.216 24.704s-1.92 17.436-5.371 25.089l0.155-0.385c-3.501 8.262-8.097 15.357-13.706 21.513l0.053-0.059c-11.746 11.653-27.923 18.854-45.783 18.854-0.133 0-0.264 0-0.396-0.002h0.020z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "list"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 131,
                        "id" => 76,
                        "name" => "list",
                        "prevSize" => 80,
                        "code" => 59751
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 157
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1020.3 494.452c-7.019-15.208-167.289-377.277-508.3-377.277-0.14 0-0.306 0-0.472 0-34.241 0-67.586 3.836-99.63 11.102l3.004-0.573c-18.045 5.713-30.896 22.309-30.896 41.908 0 24.228 19.641 43.869 43.869 43.869 2.026 0 4.020-0.137 5.972-0.403l-0.228 0.025c23.536-5.148 50.592-8.127 78.334-8.188h0.045c244.499 0 384.881 239.819 419.391 307.086-23.064 44.686-47.534 82.99-75.058 118.824l1.357-1.84c-5.75 7.348-9.221 16.722-9.221 26.907 0 24.18 19.562 43.79 43.724 43.869h0.007c13.993-0.045 26.437-6.635 34.437-16.866l0.073-0.096c34.924-43.997 66.128-93.737 91.55-146.775l2.039-4.721c2.455-5.422 3.887-11.757 3.887-18.425s-1.431-13.003-4.002-18.713l0.117 0.288z",
                            "M192.045 130.044c-7.813-7.295-18.337-11.773-29.907-11.773-24.228 0-43.869 19.641-43.869 43.869 0 11.571 4.479 22.094 11.798 29.933l-0.023-0.026 53.813 53.813c-74.699 68.875-135.393 151.659-178.181 244.402l-1.975 4.776c-2.203 5.093-3.485 11.025-3.485 17.256s1.282 12.161 3.596 17.545l-0.111-0.289c7.019 15.208 167.289 377.277 508.3 377.277 0.681 0.004 1.487 0.005 2.294 0.005 94.711 0 182.793-28.386 256.201-77.116l-1.714 1.069 63.172 63.172c7.936 7.927 18.897 12.83 31.001 12.83s23.064-4.902 31.002-12.83v0c7.927-7.936 12.83-18.897 12.83-31.001s-4.902-23.064-12.83-31.002v0zM416.073 480.999l129.268 129.853c-9.942 3.409-21.397 5.378-33.312 5.378-28.107 0-53.656-10.952-72.612-28.824l0.052 0.049c-18.724-18.468-30.323-44.118-30.323-72.478 0-13.277 2.543-25.962 7.167-37.592l-0.241 0.688zM512 819.086c-245.083 0-384.881-240.404-419.391-307.086 39.962-79.399 91.284-146.975 152.768-203.701l0.481-0.439 104.701 104.701c-17.797 28.341-28.353 62.795-28.353 99.714 0 104.667 84.849 189.516 189.516 189.516 36.919 0 71.373-10.557 100.508-28.817l-0.792 0.463 94.173 94.173c-54.756 32.362-120.666 51.482-191.042 51.482-0.903 0-1.805-0.003-2.708-0.010l0.138 0.001z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "eye-slash"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 130,
                        "id" => 77,
                        "name" => "eye-slash",
                        "prevSize" => 80,
                        "code" => 59749
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 158
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 906.971c-341.139 0-501.467-362.204-508.489-377.417-2.22-5.185-3.511-11.22-3.511-17.554s1.291-12.369 3.623-17.853l-0.112 0.299c7.022-15.213 167.351-377.417 508.489-377.417s501.467 362.204 508.489 377.417c2.22 5.185 3.511 11.22 3.511 17.554s-1.291 12.369-3.623 17.853l0.112-0.299c-7.022 15.213-167.351 377.417-508.489 377.417zM92.453 512c34.523 67.292 175.543 307.2 419.547 307.2s385.024-239.908 419.547-307.2c-34.523-67.292-175.543-307.2-419.547-307.2s-385.024 239.908-419.547 307.2z",
                            "M512 702.172c-105.028 0-190.172-85.142-190.172-190.172s85.142-190.172 190.172-190.172c105.028 0 190.172 85.142 190.172 190.172v0c-0.332 104.895-85.277 189.84-190.139 190.172h-0.032zM512 409.6c-56.554 0-102.4 45.845-102.4 102.4s45.845 102.4 102.4 102.4c56.554 0 102.4-45.845 102.4-102.4v0c-0.331-56.421-45.979-102.070-102.369-102.4h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "eye"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 129,
                        "id" => 78,
                        "name" => "eye",
                        "prevSize" => 80,
                        "code" => 59750
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 159
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M82.761 872.006h-83.078v-609.242c-0.010-0.662-0.017-1.442-0.017-2.225 0-82.317 66.265-149.157 148.363-150.085l0.088-0.001h133.48c0.27-0.006 0.588-0.010 0.906-0.010 12.364 0 23.485 5.331 31.186 13.821l0.031 0.035 147.88 178.895h271.943c0.175-0.001 0.383-0.001 0.591-0.001 82.895 0 150.096 67.2 150.096 150.096 0 1.168-0.013 2.335-0.040 3.497l0.003-0.173v27.692h-83.078v-27.692c0.013-0.495 0.021-1.077 0.021-1.662 0-37.318-30.252-67.57-67.57-67.57-0.008 0-0.014 0-0.022 0h-291.881c-12.686-0.029-24.015-5.815-31.514-14.885l-0.056-0.069-147.88-178.895h-114.094c-36.362 1.219-65.376 30.988-65.376 67.535 0 0.597 0.008 1.192 0.023 1.785l-0.001-0.088z",
                            "M795.574 913.546h-754.353c-14.913-0.126-27.961-7.987-35.343-19.762l-0.103-0.177c-3.401-5.891-5.407-12.958-5.407-20.493s2.007-14.601 5.513-20.694l-0.106 0.201 187.203-360.006c7.347-13.219 21.185-22.042 37.092-22.155h752.707c14.913 0.126 27.961 7.987 35.343 19.762l0.103 0.177c3.401 5.891 5.407 12.958 5.407 20.493s-2.007 14.601-5.513 20.694l0.106-0.201-187.203 360.006c-7.071 12.759-20.17 21.423-35.35 22.151l-0.097 0.004zM109.346 830.467h661.305l144.002-276.928h-661.305z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "folder-open"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 128,
                        "id" => 79,
                        "name" => "folder-open",
                        "prevSize" => 80,
                        "code" => 59748
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 160
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M853.323 961.925h-682.645c-94.253 0-170.661-76.408-170.661-170.661v0-558.528c0-94.253 76.408-170.661 170.661-170.661v0h155.147c0.039 0 0.084 0 0.131 0 13.934 0 26.476 5.965 35.211 15.48l0.032 0.035 171.903 201.070h320.223c0 0 0 0 0.001 0 94.253 0 170.661 76.408 170.661 170.661 0 0.218 0 0.436-0.001 0.655v-0.033 341.323c0 94.253-76.408 170.661-170.661 170.661v0zM170.677 155.163c-42.842 0-77.573 34.731-77.573 77.573v0 558.528c0 42.842 34.731 77.573 77.573 77.573v0h682.645c42.842 0 77.573-34.731 77.573-77.573v0-341.323c0-42.842-34.731-77.573-77.573-77.573v0h-341.323c-14.071-0.131-26.67-6.321-35.33-16.085l-0.044-0.049-171.903-201.070z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "folder"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 126,
                        "id" => 80,
                        "name" => "folder",
                        "prevSize" => 80,
                        "code" => 59747
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 161
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M570.515 906.971h-409.6c-88.87 0-160.914-72.044-160.914-160.914v0-468.114c0-88.87 72.044-160.914 160.914-160.914v0h409.6c88.87 0 160.914 72.044 160.914 160.914v0 468.114c0 88.87-72.044 160.914-160.914 160.914v0zM160.914 204.8c-40.395 0-73.142 32.747-73.142 73.142v0 468.114c0 40.395 32.747 73.142 73.142 73.142v0h409.6c40.395 0 73.142-32.747 73.142-73.142v0-468.114c0-40.395-32.747-73.142-73.142-73.142v0z",
                            "M980.114 789.943c-8.437-0.136-16.291-2.51-23.030-6.553l0.21 0.117-292.571-175.543c-12.706-7.831-21.051-21.663-21.065-37.447v-117.029c0.014-15.785 8.359-29.619 20.876-37.34l0.189-0.108 292.571-175.543c6.348-3.861 14.026-6.145 22.235-6.145s15.887 2.285 22.428 6.254l-0.192-0.108c13.334 7.666 22.183 21.811 22.235 38.027v468.122c-0.053 16.223-8.901 30.368-22.022 37.921l-0.213 0.112c-5.841 3.327-12.834 5.288-20.285 5.288-0.48 0-0.959-0.008-1.435-0.025l0.069 0.001zM731.429 545.939l204.8 122.88v-313.636l-204.8 122.88z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "video"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 125,
                        "id" => 81,
                        "name" => "video",
                        "prevSize" => 80,
                        "code" => 59746
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 162
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M862.966 979.954h-701.931c-88.84 0-160.859-72.019-160.859-160.859v0-350.966c0-24.229 19.642-43.871 43.871-43.871s43.871 19.642 43.871 43.871v0 350.966c-0.014 0.522-0.021 1.138-0.021 1.755 0 40.382 32.736 73.117 73.117 73.117 0.007 0 0.015 0 0.022 0h701.93c40.382 0 73.117-32.736 73.117-73.117v0-350.966c0-24.229 19.642-43.871 43.871-43.871s43.871 19.642 43.871 43.871v0 350.966c-0.991 88.083-72.627 159.104-160.849 159.104-0.004 0-0.007 0-0.011 0h0.001z",
                            "M512 702.107c-0.038 0-0.085 0-0.13 0-110.716 0-202.222-82.245-216.757-188.973l-0.126-1.134h-250.94c-0.097 0.001-0.211 0.001-0.326 0.001-24.229 0-43.871-19.642-43.871-43.871 0-8.677 2.52-16.767 6.867-23.575l-0.106 0.177 218.184-350.966c17.362-29.96 49.275-49.789 85.818-49.789 1.293 0 2.582 0.025 3.862 0.074l-0.185-0.005h395.422c40.382 0.115 75.22 23.729 91.572 57.882l0.265 0.613 215.844 347.456c2.498 5.344 3.955 11.604 3.955 18.204 0 23.357-18.253 42.45-41.273 43.795l-0.119 0.005h-250.94c-14.66 107.862-106.167 190.107-216.883 190.107-0.047 0-0.092 0-0.138 0h0.007zM123.014 426.013h213.504c24.229 0 43.871 19.642 43.871 43.871v0 12.869c0 72.687 58.925 131.612 131.612 131.612s131.612-58.925 131.612-131.612v0-12.869c0-24.229 19.642-43.871 43.871-43.871v0h213.504l-175.483-284.282c-4.679-8.189-9.36-11.698-15.208-11.698h-396.006c-5.783 0.148-10.777 3.381-13.412 8.109l-0.041 0.081z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "inbox"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 124,
                        "id" => 82,
                        "name" => "inbox",
                        "prevSize" => 80,
                        "code" => 59745
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 163
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M804.555 409.605h-14.628v-131.65c0-153.495-124.432-277.928-277.928-277.928s-277.928 124.432-277.928 277.928v0 131.65h-14.628c-88.865 0-160.905 72.040-160.905 160.905v0 292.555c0 88.865 72.040 160.905 160.905 160.905v0h585.111c88.865 0 160.905-72.040 160.905-160.905v0-292.555c0-88.865-72.040-160.905-160.905-160.905v0zM321.839 277.955c0-105.022 85.138-190.161 190.161-190.161s190.161 85.138 190.161 190.161v0 131.65h-380.321zM877.694 863.066c0 40.393-32.745 73.138-73.138 73.138v0h-585.111c-40.393 0-73.138-32.745-73.138-73.138v0-292.555c0-40.393 32.745-73.138 73.138-73.138v0h585.111c40.393 0 73.138 32.745 73.138 73.138v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "lock"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 123,
                        "id" => 83,
                        "name" => "lock",
                        "prevSize" => 80,
                        "code" => 59743
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 164
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M804.555 409.605h-482.716v-131.65c0-105.022 85.138-190.161 190.161-190.161s190.161 85.138 190.161 190.161v0c0 24.236 19.647 43.883 43.883 43.883s43.883-19.647 43.883-43.883v0c0-153.495-124.432-277.928-277.928-277.928s-277.928 124.432-277.928 277.928v0 131.65h-14.628c-88.865 0-160.905 72.040-160.905 160.905v0 292.555c0 88.865 72.040 160.905 160.905 160.905v0h585.111c88.865 0 160.905-72.040 160.905-160.905v0-292.555c0-88.865-72.040-160.905-160.905-160.905v0zM877.694 863.066c0 40.393-32.745 73.138-73.138 73.138v0h-585.111c-40.393 0-73.138-32.745-73.138-73.138v0-292.555c0-40.393 32.745-73.138 73.138-73.138v0h585.111c40.393 0 73.138 32.745 73.138 73.138v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "unlock"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 122,
                        "id" => 84,
                        "name" => "unlock",
                        "prevSize" => 80,
                        "code" => 59744
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 165
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M988.652 422.661l-315.315-315.315c-7.357-7.357-17.342-11.562-27.852-11.562h-606.456c-21.546 0-39.414 17.868-39.414 39.414v414.113c0 10.51 4.204 20.495 11.562 27.852l315.315 314.789c23.123 23.123 53.604 35.735 86.186 35.735v0c32.582 0 63.589-12.613 86.186-35.735l11.562-11.562c2.103 4.204 4.204 8.409 7.883 11.562 23.649 23.649 55.18 35.735 86.186 35.735s62.537-12.087 86.712-35.735l296.922-296.922c47.297-47.297 47.297-124.549 0-172.373zM443.681 836.249c-8.409 8.409-18.919 12.613-30.481 12.613s-22.598-4.73-30.481-12.613l-304.279-303.228v-358.409h358.409l303.753 303.753c16.816 16.816 16.816 44.144 0 60.961l-296.922 296.922zM932.946 539.328l-296.922 296.922c-16.816 16.816-44.67 16.816-61.486 0-3.679-3.679-7.357-5.78-12.087-7.883l233.333-233.333c47.297-47.823 47.297-125.075 0-172.373l-248.048-248.048h80.931l303.753 303.753c16.816 16.816 16.816 44.144 0 60.961zM314.928 328.067c0 36.261-29.429 65.69-65.69 65.69s-65.69-29.429-65.69-65.69 29.429-65.69 65.69-65.69 65.69 29.429 65.69 65.69z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "tags"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 121,
                        "id" => 85,
                        "name" => "tags",
                        "prevSize" => 80,
                        "code" => 59741
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 166
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M532.53 1023.985c-37.212 0-74.423-14.115-102.654-42.345l-415.747-415.105c-8.982-8.982-14.115-21.172-14.115-34.004v-484.396c0-26.304 21.814-48.119 48.119-48.119h483.756c12.831 0 25.022 5.132 34.004 14.115l415.747 415.747c55.818 56.46 55.818 148.206 0 204.666 0 0 0 0 0 0l-347.098 347.098c-28.229 28.229-65.442 42.345-102.654 42.345zM96.253 512.642l401.632 400.991c19.248 18.605 50.044 18.605 68.649 0l347.098-347.098c18.605-18.605 18.605-49.402 0-68.649l-401.632-401.632h-415.747v415.747zM947.637 600.539v0zM287.446 367.643c-44.269 0-80.198-35.928-80.198-80.198s35.928-80.198 80.198-80.198 80.198 35.928 80.198 80.198-35.928 80.198-80.198 80.198z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "tag"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 120,
                        "id" => 86,
                        "name" => "tag",
                        "prevSize" => 80,
                        "code" => 59742
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 167
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024.445c-282.822-0.256-511.994-229.587-511.994-512.445 0-141.396 57.267-269.417 149.871-362.133l-0.005 0.005c7.661-7.856 18.351-12.73 30.177-12.73s22.516 4.874 30.169 12.72l0.008 0.009c7.716 7.725 12.49 18.395 12.49 30.177s-4.772 22.451-12.49 30.178v0c-83.727 78.173-135.917 189.204-135.917 312.426 0 235.846 191.191 427.037 427.037 427.037 123.22 0 234.253-52.189 312.196-135.668l0.23-0.248c77.442-77.134 125.361-183.857 125.361-301.773s-47.919-224.639-125.347-301.759l-0.015-0.015c-7.716-7.725-12.49-18.395-12.49-30.177s4.772-22.451 12.49-30.178v0c7.661-7.856 18.351-12.73 30.177-12.73s22.516 4.874 30.169 12.72l0.008 0.009c92.6 92.711 149.866 220.732 149.866 362.128 0 282.858-229.172 512.187-511.97 512.445h-0.024z",
                            "M512 554.704c-23.456-0.316-42.387-19.247-42.704-42.673v-455.537c0-23.584 19.119-42.704 42.704-42.704s42.704 19.119 42.704 42.704v0 455.506c-0.316 23.456-19.247 42.387-42.673 42.704h-0.031z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "power-off"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 119,
                        "id" => 87,
                        "name" => "power-off",
                        "prevSize" => 80,
                        "code" => 59740
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 168
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M804.571 1024h-585.143c-88.87 0-160.914-72.044-160.914-160.914v0-702.171c0-88.87 72.044-160.914 160.914-160.914v0h438.857c12.114 0.011 23.078 4.929 31.012 12.872v0l263.314 265.070c7.945 7.935 12.863 18.898 12.874 31.011v554.133c0 88.87-72.044 160.914-160.914 160.914v0zM219.429 87.772c-40.395 0-73.142 32.747-73.142 73.142v0 702.171c0 40.395 32.747 73.142 73.142 73.142v0h585.143c40.395 0 73.142-32.747 73.142-73.142v0-537.747l-237.568-237.568z",
                            "M789.943 980.114h-87.771v-365.715h-380.342v365.715h-87.771v-380.342c0-40.395 32.747-73.142 73.142-73.142v0h409.6c40.395 0 73.142 32.747 73.142 73.142v0z",
                            "M539.501 321.828h-230.547c-41.436-0.331-74.901-33.998-74.901-75.481 0-0.207 0.001-0.413 0.003-0.619v0.032-201.874h87.771v190.172h204.8v-190.172h87.771v201.874c0.001 0.174 0.003 0.381 0.003 0.587 0 41.483-33.464 75.152-74.869 75.481h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "save"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 118,
                        "id" => 88,
                        "name" => "save",
                        "prevSize" => 80,
                        "code" => 59739
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 169
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 0c-282.769 0-512 229.231-512 512s229.231 512 512 512c282.769 0 512-229.231 512-512v0c0-282.769-229.231-512-512-512v0zM512 938.667c-235.641 0-426.667-191.025-426.667-426.667s191.025-426.667 426.667-426.667c235.641 0 426.667 191.025 426.667 426.667v0c0 235.641-191.025 426.667-426.667 426.667v0z",
                            "M381.156 267.377c-33.393 33.448-54.044 79.627-54.044 130.628 0 0.076 0 0.152 0 0.228v-0.012c0 23.564 19.103 42.667 42.667 42.667s42.667-19.103 42.667-42.667v0c-0.001-0.156-0.001-0.341-0.001-0.525 0-27.345 11.088-52.101 29.015-70.016v0c18.327-17.443 43.181-28.173 70.543-28.173s52.216 10.731 70.585 28.213l-0.043-0.040c18.449 18.085 29.885 43.264 29.885 71.115 0 54.983-44.572 99.556-99.556 99.556-0.307 0-0.613-0.001-0.919-0.004h0.047c-23.436 0.316-42.351 19.231-42.667 42.636v56.92c0 23.564 19.103 42.667 42.667 42.667s42.667-19.103 42.667-42.667v0-19.343c34.751-8.129 64.687-25.311 88.169-48.916l0.008-0.008c33.387-33.532 54.025-79.777 54.025-130.844s-20.64-97.313-54.032-130.851l0.007 0.007c-34.036-32.508-80.253-52.515-131.144-52.515-50.6 0-96.58 19.779-130.632 52.028l0.087-0.081z",
                            "M583.111 753.777c0 39.273-31.837 71.111-71.111 71.111s-71.111-31.837-71.111-71.111c0-39.273 31.837-71.111 71.111-71.111s71.111 31.837 71.111 71.111z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "question-circle"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 117,
                        "id" => 89,
                        "name" => "question-circle",
                        "prevSize" => 80,
                        "code" => 59737
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 170
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M750.032 98.514c-60.88-61-145.050-98.738-238.034-98.738-185.726 0-336.287 150.56-336.287 336.287 0 0.17 0 0.34 0 0.511v-0.026c0 24.225 19.639 43.864 43.864 43.864s43.864-19.639 43.864-43.864v0c0-0.174 0-0.378 0-0.584 0-137.598 111.546-249.145 249.145-249.145s249.145 111.546 249.145 249.145c0 137.598-111.546 249.145-249.145 249.145-0.206 0-0.411 0-0.617-0.001h0.032c-24.093 0.325-43.539 19.77-43.864 43.832v117c0 24.225 19.639 43.864 43.864 43.864s43.864-19.639 43.864-43.864v0-76.031c165.808-22.845 292.141-163.614 292.141-333.889 0-92.678-37.425-176.615-97.988-237.522l0.016 0.016z",
                            "M585.105 950.635c0 40.375-32.73 73.105-73.105 73.105s-73.105-32.73-73.105-73.105c0-40.375 32.73-73.105 73.105-73.105s73.105 32.73 73.105 73.105z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "question"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 116,
                        "id" => 90,
                        "name" => "question",
                        "prevSize" => 80,
                        "code" => 59738
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 171
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M907.406 301.957l-290.385-290.385c-7.121-7.13-16.959-11.543-27.829-11.553h-129.703c-79.752 0-144.404 64.652-144.404 144.404v0 65.638h-65.638c-79.752 0-144.404 64.652-144.404 144.404v0 525.108c0 79.752 64.652 144.404 144.404 144.404v0h367.575c79.752 0 144.404-64.652 144.404-144.404v0-65.638h13.128c79.752 0 144.404-64.652 144.404-144.404v0-341.319c-0.443-10.296-4.774-19.502-11.552-26.254l-0.001-0.001zM630.149 134.448l154.382 154.382h-154.382zM682.66 879.575c0 36.251-29.387 65.638-65.638 65.638v0h-367.575c-36.251 0-65.638-29.387-65.638-65.638v0-525.108c0-36.251 29.387-65.638 65.638-65.638v0h65.638v380.702c0 79.752 64.652 144.404 144.404 144.404v0h223.17zM774.553 735.17h-315.064c-36.251 0-65.638-29.387-65.638-65.638v0-525.108c0-36.251 29.387-65.638 65.638-65.638v0h91.894v249.426c0.292 21.632 17.751 39.091 39.355 39.383h249.455v301.936c0 36.251-29.387 65.638-65.638 65.638v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "copy"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 115,
                        "id" => 91,
                        "name" => "copy",
                        "prevSize" => 80,
                        "code" => 59735
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 172
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M894.081 336.465l-323.57-323.57c-7.935-7.944-18.897-12.862-31.009-12.873h-261.55c-88.866 0-160.907 72.041-160.907 160.907v0 702.14c0 88.866 72.041 160.907 160.907 160.907v0h468.093c88.866 0 160.907-72.041 160.907-160.907v0-497.35c-0.494-11.473-5.32-21.731-12.872-29.254l-0.001-0.001zM585.139 149.812l172.024 172.024h-172.024zM746.047 936.209h-468.093c-40.394 0-73.139-32.746-73.139-73.139v0-702.14c0-40.394 32.746-73.139 73.139-73.139v0h219.419v277.931c0.325 24.105 19.779 43.559 43.852 43.884h277.962v453.466c0 40.394-32.746 73.139-73.139 73.139v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "file"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 114,
                        "id" => 92,
                        "name" => "file",
                        "prevSize" => 80,
                        "code" => 59736
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 173
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M629.028 789.943h-468.114c-88.87 0-160.914-72.044-160.914-160.914v0-468.114c0-88.87 72.044-160.914 160.914-160.914v0h468.114c88.87 0 160.914 72.044 160.914 160.914v0 468.114c0 88.87-72.044 160.914-160.914 160.914v0zM160.914 87.772c-40.395 0-73.142 32.747-73.142 73.142v0 468.114c0 40.395 32.747 73.142 73.142 73.142v0h468.114c40.395 0 73.142-32.747 73.142-73.142v0-468.114c0-40.395-32.747-73.142-73.142-73.142v0z",
                            "M863.086 1024h-468.114c-88.87 0-160.914-72.044-160.914-160.914v0-117.028h87.771v117.028c0 40.395 32.747 73.142 73.142 73.142v0h468.114c40.395 0 73.142-32.747 73.142-73.142v0-468.114c0-40.395-32.747-73.142-73.142-73.142v0h-117.028v-87.771h117.028c88.87 0 160.914 72.044 160.914 160.914v0 468.114c0 88.87-72.044 160.914-160.914 160.914v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "clone"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 111,
                        "id" => 93,
                        "name" => "clone",
                        "prevSize" => 80,
                        "code" => 59733
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 174
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M788.756 110.703h-69.189v-69.189c0-22.927-18.586-41.514-41.514-41.514s-41.514 18.586-41.514 41.514v0 69.189h-249.081v-69.189c0-22.927-18.586-41.514-41.514-41.514s-41.514 18.586-41.514 41.514v0 69.189h-69.189c-84.066 0-152.216 68.15-152.216 152.216v0 608.864c0 84.066 68.15 152.216 152.216 152.216v0h553.514c84.066 0 152.216-68.15 152.216-152.216v0-608.864c0-84.066-68.15-152.216-152.216-152.216v0zM235.244 193.73h69.189v69.189c0 22.927 18.586 41.514 41.514 41.514s41.514-18.586 41.514-41.514v0-69.189h249.081v69.189c0 22.927 18.586 41.514 41.514 41.514s41.514-18.586 41.514-41.514v0-69.189h69.189c38.212 0 69.189 30.977 69.189 69.189v0 152.216h-691.891v-152.216c0-38.212 30.977-69.189 69.189-69.189v0zM788.756 940.973h-553.514c-38.212 0-69.189-30.977-69.189-69.189v0-373.622h691.891v373.622c0 38.212-30.977 69.189-69.189 69.189v0z",
                            "M619.381 626.023c-7.448-7.637-17.839-12.375-29.336-12.375s-21.888 4.738-29.328 12.366l-0.008 0.009-48.71 48.71-48.71-48.71c-7.393-6.903-17.353-11.141-28.301-11.141-22.927 0-41.514 18.586-41.514 41.514 0 10.949 4.238 20.907 11.165 28.325l-0.022-0.025 48.71 48.71-48.71 48.71c-7.637 7.448-12.375 17.839-12.375 29.336s4.738 21.888 12.366 29.328l0.009 0.008c7.171 7.515 17.264 12.187 28.45 12.187 0.311 0 0.623-0.004 0.933-0.010l-0.047 0.001c0.057 0 0.126 0 0.193 0 11.401 0 21.713-4.657 29.139-12.174l48.714-48.714 48.71 48.71c7.43 7.52 17.742 12.178 29.142 12.178 0.067 0 0.136 0 0.204 0h-0.010c0.263 0.006 0.575 0.010 0.886 0.010 11.185 0 21.278-4.673 28.435-12.173l0.014-0.016c7.637-7.448 12.375-17.839 12.375-29.336s-4.738-21.888-12.366-29.328l-0.009-0.008-48.71-48.71 48.71-48.71c7.637-7.448 12.375-17.839 12.375-29.336s-4.738-21.888-12.366-29.328l-0.009-0.008z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "calendar-times"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 110,
                        "id" => 94,
                        "name" => "calendar-times",
                        "prevSize" => 80,
                        "code" => 59730
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 175
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M788.756 110.703h-69.189v-69.189c0-22.927-18.586-41.514-41.514-41.514s-41.514 18.586-41.514 41.514v0 69.189h-249.081v-69.189c0-22.927-18.586-41.514-41.514-41.514s-41.514 18.586-41.514 41.514v0 69.189h-69.189c-84.066 0-152.216 68.15-152.216 152.216v0 608.864c0 84.066 68.15 152.216 152.216 152.216v0h553.514c84.066 0 152.216-68.15 152.216-152.216v0-608.864c0-84.066-68.15-152.216-152.216-152.216v0zM235.244 193.73h69.189v69.189c0 22.927 18.586 41.514 41.514 41.514s41.514-18.586 41.514-41.514v0-69.189h249.081v69.189c0 22.927 18.586 41.514 41.514 41.514s41.514-18.586 41.514-41.514v0-69.189h69.189c38.212 0 69.189 30.977 69.189 69.189v0 152.216h-691.891v-152.216c0-38.212 30.977-69.189 69.189-69.189v0zM788.756 940.973h-553.514c-38.212 0-69.189-30.977-69.189-69.189v0-373.622h691.891v373.622c0 38.212-30.977 69.189-69.189 69.189v0z",
                            "M622.702 694.659h-221.406c-22.927 0-41.514 18.586-41.514 41.514s18.586 41.514 41.514 41.514v0h221.406c22.927 0 41.514-18.586 41.514-41.514s-18.586-41.514-41.514-41.514v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "calendar-minus"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 109,
                        "id" => 95,
                        "name" => "calendar-minus",
                        "prevSize" => 80,
                        "code" => 59731
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 176
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M788.756 110.703h-69.189v-69.189c0-22.927-18.586-41.514-41.514-41.514s-41.514 18.586-41.514 41.514v0 69.189h-249.081v-69.189c0-22.927-18.586-41.514-41.514-41.514s-41.514 18.586-41.514 41.514v0 69.189h-69.189c-84.066 0-152.216 68.15-152.216 152.216v0 608.864c0 84.066 68.15 152.216 152.216 152.216v0h553.514c84.066 0 152.216-68.15 152.216-152.216v0-608.864c0-84.066-68.15-152.216-152.216-152.216v0zM235.244 193.73h69.189v69.189c0 22.927 18.586 41.514 41.514 41.514s41.514-18.586 41.514-41.514v0-69.189h249.081v69.189c0 22.927 18.586 41.514 41.514 41.514s41.514-18.586 41.514-41.514v0-69.189h69.189c38.212 0 69.189 30.977 69.189 69.189v0 152.216h-691.891v-152.216c0-38.212 30.977-69.189 69.189-69.189v0zM788.756 940.973h-553.514c-38.212 0-69.189-30.977-69.189-69.189v0-373.622h691.891v373.622c0 38.212-30.977 69.189-69.189 69.189v0z",
                            "M622.702 691.892h-69.189v-69.189c0-22.927-18.586-41.514-41.514-41.514s-41.514 18.586-41.514 41.514v0 69.189h-69.189c-22.927 0-41.514 18.586-41.514 41.514s18.586 41.514 41.514 41.514v0h69.189v69.189c0 22.927 18.586 41.514 41.514 41.514s41.514-18.586 41.514-41.514v0-69.189h69.189c22.927 0 41.514-18.586 41.514-41.514s-18.586-41.514-41.514-41.514v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "calendar-plus"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 108,
                        "id" => 96,
                        "name" => "calendar-plus",
                        "prevSize" => 80,
                        "code" => 59732
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 177
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M614.393 512c0 56.549-45.842 102.393-102.393 102.393s-102.393-45.842-102.393-102.393c0-56.549 45.842-102.393 102.393-102.393s102.393 45.842 102.393 102.393z",
                            "M614.393 102.431c0 56.549-45.842 102.393-102.393 102.393s-102.393-45.842-102.393-102.393c0-56.549 45.842-102.393 102.393-102.393s102.393 45.842 102.393 102.393z",
                            "M614.393 921.569c0 56.549-45.842 102.393-102.393 102.393s-102.393-45.842-102.393-102.393c0-56.549 45.842-102.393 102.393-102.393s102.393 45.842 102.393 102.393z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "ellipsis-v"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 107,
                        "id" => 97,
                        "name" => "ellipsis-v",
                        "prevSize" => 80,
                        "code" => 59728
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 178
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M614.379 512c0 56.54-45.835 102.379-102.379 102.379s-102.379-45.835-102.379-102.379c0-56.54 45.835-102.379 102.379-102.379s102.379 45.835 102.379 102.379z",
                            "M1023.886 512c0 56.54-45.835 102.379-102.379 102.379s-102.379-45.835-102.379-102.379c0-56.54 45.835-102.379 102.379-102.379s102.379 45.835 102.379 102.379z",
                            "M204.868 512c0 56.54-45.835 102.379-102.379 102.379s-102.379-45.835-102.379-102.379c0-56.54 45.835-102.379 102.379-102.379s102.379 45.835 102.379 102.379z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "ellipsis-h"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 106,
                        "id" => 98,
                        "name" => "ellipsis-h",
                        "prevSize" => 80,
                        "code" => 59729
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 179
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M848.457 1024c-9.363-0.189-18.033-2.998-25.352-7.723l0.191 0.115-311.296-217.088-311.296 217.088c-6.501 4.018-14.382 6.4-22.821 6.4s-16.32-2.381-23.010-6.509l0.189 0.108c-13.4-7.013-22.574-20.486-23.401-36.171l-0.004-0.107v-819.2c0-88.87 72.044-160.914 160.914-160.914v0h438.857c88.87 0 160.914 72.044 160.914 160.914v0 819.2c0 0.048 0 0.104 0 0.159 0 16.646-9.393 31.099-23.169 38.347l-0.237 0.114c-5.911 3.304-12.965 5.254-20.477 5.266h-0.004zM512 702.172c0.137-0.001 0.3-0.003 0.464-0.003 9.223 0 17.782 2.846 24.846 7.706l-0.148-0.096 267.411 186.075v-734.939c0-40.395-32.747-73.142-73.142-73.142v0h-438.857c-40.395 0-73.142 32.747-73.142 73.142v0 734.939l267.411-186.075c6.916-4.764 15.475-7.609 24.698-7.609 0.163 0 0.325 0.001 0.488 0.003h-0.025z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "bookmark"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 105,
                        "id" => 99,
                        "name" => "bookmark",
                        "prevSize" => 80,
                        "code" => 59726
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 180
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 0c-282.769 0-512 229.231-512 512s229.231 512 512 512c282.769 0 512-229.231 512-512v0c0-282.769-229.231-512-512-512v0zM936.391 469.333h-157.013c-21.309-143.377-80.98-269.999-168.128-372.54l0.875 1.056c174.421 43.539 304.877 189.937 324.104 369.605l0.163 1.879zM330.524 554.667h362.951c-28.064 140.685-92.065 263.297-182.001 361.829l0.527-0.585c-89.411-97.947-153.411-220.56-180.673-356.452l-0.803-4.792zM330.524 469.333c28.064-140.685 92.065-263.297 182.001-361.829l-0.527 0.585c89.411 97.947 153.411 220.56 180.673 356.452l0.803 4.792zM411.876 97.849c-86.273 101.485-145.944 228.107-166.755 367.427l-0.499 4.057h-157.013c19.389-181.548 149.845-327.945 321.319-370.86l2.948-0.625zM87.609 552.96h157.013c21.309 143.377 80.98 269.999 168.128 372.54l-0.875-1.056c-173.937-43.335-304.18-188.936-324.092-367.845l-0.175-1.933zM612.124 924.444c86.273-101.485 145.944-228.107 166.755-367.427l0.499-4.057h157.013c-18.688 182.253-149.359 329.449-321.317 372.565l-2.949 0.627z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "globe"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 104,
                        "id" => 100,
                        "name" => "globe",
                        "prevSize" => 80,
                        "code" => 59727
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 181
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.452c-233.911-0.333-423.443-189.864-423.774-423.743v-0.032c0-24.211 19.627-43.839 43.839-43.839s43.839 19.627 43.839 43.839v0c0 185.621 150.475 336.097 336.097 336.097s336.097-150.475 336.097-336.097c0-185.621-150.475-336.097-336.097-336.097v0h-146.13c-24.211 0-43.839-19.627-43.839-43.839s19.627-43.839 43.839-43.839v0h146.13c234.044 0 423.774 189.73 423.774 423.774s-189.73 423.774-423.774 423.774v0z",
                            "M512 438.936c-0.060 0-0.133 0-0.204 0-12.039 0-22.929-4.918-30.771-12.856l-175.359-175.359c-7.921-7.931-12.821-18.884-12.821-30.979s4.899-23.048 12.821-30.98v0l175.355-175.355c8.025-8.595 19.423-13.953 32.074-13.953 24.211 0 43.839 19.627 43.839 43.839 0 12.65-5.358 24.048-13.927 32.049l-0.026 0.023-144.376 144.376 144.376 144.376c7.921 7.931 12.821 18.884 12.821 30.979s-4.899 23.048-12.821 30.98v0c-7.846 7.942-18.736 12.86-30.775 12.86-0.071 0-0.144 0-0.215 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "replay"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 102,
                        "id" => 101,
                        "name" => "replay",
                        "prevSize" => 80,
                        "code" => 59725
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 182
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M632.463 1023.971h-240.928c-24.813-0.335-44.839-20.361-45.174-45.141v-466.83l-322.241-440.294c-5.688-7.337-9.117-16.671-9.117-26.808 0-7.369 1.813-14.314 5.016-20.414l-0.116 0.241c7.747-14.706 22.885-24.586 40.34-24.695h903.493c17.471 0.11 32.608 9.989 40.236 24.445l0.12 0.25c3.089 5.86 4.901 12.805 4.901 20.173 0 10.136-3.43 19.471-9.191 26.908l0.075-0.1-322.241 440.294v466.797c-0.335 24.813-20.361 44.839-45.141 45.174h-0.032zM436.711 933.623h150.58v-436.68c0-0.064 0-0.138 0-0.212 0-9.955 3.401-19.116 9.105-26.383l-0.071 0.093 277.067-380.063h-722.782l278.271 380.063c5.634 7.174 9.035 16.335 9.035 26.29 0 0.075 0 0.15 0 0.224v-0.011z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "filter"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 101,
                        "id" => 102,
                        "name" => "filter",
                        "prevSize" => 80,
                        "code" => 59724
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 183
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M863.086 789.943h-117.028c-24.237 0-43.886-19.648-43.886-43.886s19.648-43.886 43.886-43.886v0h117.028c40.395 0 73.142-32.747 73.142-73.142v0-234.058c0-40.395-32.747-73.142-73.142-73.142v0h-702.171c-40.395 0-73.142 32.747-73.142 73.142v0 234.058c0 40.395 32.747 73.142 73.142 73.142v0h117.028c24.237 0 43.886 19.648 43.886 43.886s-19.648 43.886-43.886 43.886v0h-117.028c-88.87 0-160.914-72.044-160.914-160.914v0-234.058c0-88.87 72.044-160.914 160.914-160.914v0h702.171c88.87 0 160.914 72.044 160.914 160.914v0 234.058c0 88.87-72.044 160.914-160.914 160.914v0z",
                            "M746.058 321.828c-24.106-0.325-43.561-19.78-43.886-43.854v-190.203h-380.342v190.172c0 24.237-19.648 43.886-43.886 43.886s-43.886-19.648-43.886-43.886v0-204.8c0-40.395 32.747-73.142 73.142-73.142v0h409.6c40.395 0 73.142 32.747 73.142 73.142v0 204.8c-0.325 24.106-19.78 43.561-43.854 43.886h-0.032z",
                            "M716.8 1024h-409.6c-40.395 0-73.142-32.747-73.142-73.142v0-409.6c0-40.395 32.747-73.142 73.142-73.142v0h409.6c40.395 0 73.142 32.747 73.142 73.142v0 409.6c0 40.395-32.747 73.142-73.142 73.142v0zM321.828 936.228h380.342v-380.342h-380.342z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "print"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 99,
                        "id" => 103,
                        "name" => "print",
                        "prevSize" => 80,
                        "code" => 59723
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 184
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M980.093 438.861h-585.117c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h585.117c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M984.189 204.814h-936.187c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h936.187c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M984.189 672.907h-936.187c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h936.187c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M980.093 906.954h-585.117c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h585.117c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "align-right"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 98,
                        "id" => 104,
                        "name" => "align-right",
                        "prevSize" => 80,
                        "code" => 59718
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 185
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M624.033 453.952h-580.479c-24.044 0-43.536-19.492-43.536-43.536s19.492-43.536 43.536-43.536v0h580.479c24.044 0 43.536 19.492 43.536 43.536s-19.492 43.536-43.536 43.536v0z",
                            "M980.446 221.761h-928.766c-24.044 0-43.536-19.492-43.536-43.536s19.492-43.536 43.536-43.536v0h928.766c24.044 0 43.536 19.492 43.536 43.536s-19.492 43.536-43.536 43.536v0z",
                            "M980.446 686.143h-928.766c-24.044 0-43.536-19.492-43.536-43.536s19.492-43.536 43.536-43.536v0h928.766c24.044 0 43.536 19.492 43.536 43.536s-19.492 43.536-43.536 43.536v0z",
                            "M624.033 918.335h-580.479c-24.044 0-43.536-19.492-43.536-43.536s19.492-43.536 43.536-43.536v0h580.479c24.044 0 43.536 19.492 43.536 43.536s-19.492 43.536-43.536 43.536v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "align-left"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 97,
                        "id" => 105,
                        "name" => "align-left",
                        "prevSize" => 80,
                        "code" => 59719
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 186
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M804.558 438.861h-585.117c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h585.117c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M980.093 204.814h-936.187c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h936.187c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M980.093 672.907h-936.187c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h936.187c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M804.558 906.954h-585.117c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h585.117c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "align-center"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 96,
                        "id" => 106,
                        "name" => "align-center",
                        "prevSize" => 80,
                        "code" => 59720
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 187
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M980.093 438.861h-936.187c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h936.187c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M980.093 204.814h-936.187c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h936.187c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M980.093 672.907h-936.187c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h936.187c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z",
                            "M980.093 906.954h-936.187c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h936.187c24.236 0 43.884 19.648 43.884 43.884s-19.648 43.884-43.884 43.884v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "align-justify"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 95,
                        "id" => 107,
                        "name" => "align-justify",
                        "prevSize" => 80,
                        "code" => 59721
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 188
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 683.439c-94.683 0-171.439-76.755-171.439-171.439s76.755-171.439 171.439-171.439c94.683 0 171.439 76.755 171.439 171.439v0c0 94.683-76.755 171.439-171.439 171.439v0zM512 428.329c-46.211 0-83.671 37.462-83.671 83.671s37.462 83.671 83.671 83.671c46.211 0 83.671-37.462 83.671-83.671v0c0-46.211-37.462-83.671-83.671-83.671v0z",
                            "M515.511 1023.977c-71.489-0.329-129.316-58.359-129.316-129.895 0-0.411 0.001-0.823 0.005-1.234v0.063c-0.496-11.009-7.26-20.325-16.788-24.505l-0.181-0.070c-3.653-1.718-7.933-2.721-12.448-2.721-7.858 0-15.007 3.038-20.337 8.003l0.018-0.016c-23.441 23.268-55.642 37.739-91.222 38.032h-0.056c-0.252 0.001-0.55 0.003-0.848 0.003-35.579 0-67.876-14.051-91.644-36.906l0.043 0.041c-23.515-23.508-38.058-55.987-38.058-91.864s14.545-68.356 38.058-91.864v0c5.876-5.37 9.547-13.066 9.547-21.622 0-3.145-0.496-6.173-1.414-9.011l0.058 0.207c-5.723-9.782-16.134-16.274-28.071-16.384h-0.015c-71.692-0.291-129.966-57.335-132.231-128.518l-0.005-0.208c0.332-71.488 58.36-129.312 129.895-129.312 0.206 0 0.413 0 0.618 0.001h-0.032c11.009-0.496 20.325-7.26 24.505-16.788l0.070-0.181c1.718-3.653 2.721-7.933 2.721-12.448 0-7.858-3.038-15.007-8.003-20.337l0.016 0.018c-23.268-23.441-37.739-55.642-38.032-91.222v-0.056c-0.012-0.671-0.019-1.462-0.019-2.255 0-35.137 14.077-66.986 36.901-90.213l-0.018 0.019c23.508-23.515 55.987-38.058 91.864-38.058s68.356 14.545 91.864 38.058v0c6.075 5.789 14.317 9.35 23.391 9.35 3.125 0 6.153-0.422 9.028-1.214l-0.239 0.056c10.177-5.653 17.174-15.957 18.131-27.962l0.008-0.123c0-0.019 0-0.041 0-0.063 0-71.915 57.154-130.481 128.518-132.752l0.208-0.005c71.237 0.66 128.732 58.56 128.732 129.89 0 0.413-0.001 0.826-0.005 1.238v-0.063c0.477 11.185 6.924 20.76 16.218 25.665l0.166 0.080c2.998 1.135 6.465 1.792 10.084 1.792 7.909 0 15.084-3.138 20.35-8.236l-0.008 0.007c23.441-23.268 55.642-37.739 91.222-38.032h0.056c1.163-0.038 2.53-0.062 3.903-0.062 34.624 0 65.95 14.12 88.535 36.914l0.010 0.010c23.515 23.508 38.058 55.987 38.058 91.864s-14.545 68.356-38.058 91.864v0c-4.99 5.871-8.027 13.54-8.027 21.916 0 3.667 0.581 7.197 1.657 10.505l-0.067-0.24c5.653 10.177 15.957 17.174 27.962 18.131l0.123 0.008c71.192 0.937 128.814 57.74 131.062 128.518l0.005 0.208c-0.66 71.237-58.56 128.732-129.89 128.732-0.413 0-0.826-0.001-1.238-0.005h0.063c-11.185 0.477-20.76 6.924-25.665 16.218l-0.080 0.166c-1.135 2.998-1.792 6.465-1.792 10.084 0 7.909 3.138 15.084 8.236 20.35l-0.007-0.008c23.268 23.441 37.739 55.642 38.032 91.222v0.056c0.012 0.671 0.019 1.462 0.019 2.255 0 35.137-14.077 66.986-36.901 90.213l0.018-0.019c-23.508 23.515-55.987 38.058-91.864 38.058s-68.356-14.545-91.864-38.058v0c-5.258-5.092-12.433-8.23-20.341-8.23-3.62 0-7.086 0.657-10.287 1.86l0.202-0.066c-9.782 5.723-16.274 16.134-16.384 28.071v0.015c-0.937 71.192-57.74 128.814-128.518 131.062l-0.208 0.005zM356.944 777.643c0.372-0.004 0.812-0.007 1.252-0.007 15.867 0 30.927 3.45 44.471 9.643l-0.669-0.274c41.82 17.762 70.846 58.017 71.967 105.181l0.003 0.14c-0.003 0.185-0.004 0.402-0.004 0.62 0 23.297 18.4 42.297 41.461 43.26l0.088 0.003c23.005-1.873 40.964-21.005 40.964-44.331 0-0.254-0.003-0.509-0.007-0.761v0.038c0.3-47.575 28.116-88.582 68.322-107.933l0.723-0.313c13.278-5.676 28.727-8.976 44.947-8.976 32.246 0 61.445 13.042 82.611 34.139l-0.003-0.003c7.488 7.488 17.831 12.119 29.255 12.119 22.85 0 41.374-18.524 41.374-41.374 0-11.425-4.631-21.769-12.119-29.255v0c-20.848-21.12-33.725-50.154-33.725-82.193 0-16.378 3.364-31.971 9.44-46.123l-0.291 0.761c18.745-40.97 59.339-68.943 106.478-69.044h0.014c0.185 0.003 0.403 0.004 0.621 0.004 22.975 0 41.712-18.138 42.674-40.875l0.003-0.088c-1.57-22.953-20.575-40.976-43.788-40.976-0.446 0-0.889 0.007-1.332 0.019l0.064-0.001c-47.872-1.343-88.773-29.867-107.929-70.632l-0.317-0.752c-5.566-13.342-8.8-28.841-8.8-45.097 0-32.536 12.954-62.046 33.987-83.655l-0.026 0.027c7.488-7.488 12.119-17.831 12.119-29.255 0-22.85-18.524-41.374-41.374-41.374-11.425 0-21.769 4.631-29.255 12.119v0c-20.824 19.383-48.841 31.278-79.638 31.278-63.284 0-114.836-50.233-116.956-113.001l-0.005-0.195c0.003-0.185 0.004-0.403 0.004-0.621 0-22.975-18.138-41.712-40.875-42.674l-0.088-0.003c-22.953 1.57-40.976 20.575-40.976 43.788 0 0.446 0.007 0.889 0.019 1.332l-0.001-0.064c-1.343 47.872-29.867 88.773-70.632 107.929l-0.752 0.317c-13.342 5.566-28.841 8.8-45.097 8.8-32.536 0-62.046-12.954-83.655-33.987l0.027 0.026c-7.488-7.488-17.831-12.119-29.255-12.119-22.85 0-41.374 18.524-41.374 41.374 0 11.425 4.631 21.769 12.119 29.255v0c20.603 21.075 33.316 49.942 33.316 81.777 0 16.537-3.43 32.274-9.617 46.535l0.292-0.757c-17.762 41.82-58.017 70.846-105.181 71.967l-0.14 0.003c-0.185-0.003-0.402-0.004-0.62-0.004-23.297 0-42.297 18.4-43.26 41.461l-0.003 0.088c1.873 23.005 21.005 40.964 44.331 40.964 0.254 0 0.509-0.003 0.761-0.007h-0.038c47.575 0.3 88.582 28.116 107.933 68.322l0.313 0.723c5.676 13.278 8.976 28.727 8.976 44.947 0 32.246-13.042 61.445-34.139 82.611l0.003-0.003c-7.488 7.488-12.119 17.831-12.119 29.255 0 22.85 18.524 41.374 41.374 41.374 11.425 0 21.769-4.631 29.255-12.119v0c21.423-20.481 50.464-33.15 82.462-33.352h0.040zM825.038 639.555v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "cog"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 94,
                        "id" => 108,
                        "name" => "cog",
                        "prevSize" => 80,
                        "code" => 59722
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 189
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M815.587 856.985c-22.863 0-41.398-18.535-41.398-41.398s18.535-41.398 41.398-41.398v0c91.628 0 124.194-45.813 124.194-175.528-8.48-95.471-83.922-170.912-178.638-179.338l-0.753-0.054c-19.914 0.52-38.817 4.118-56.489 10.331l1.291-0.396c-4.655 2-10.071 3.163-15.761 3.163-18.775 0-34.592-12.668-39.37-29.923l-0.067-0.287c-38.556-117.836-147.511-201.455-275.996-201.455-159.262 0-288.519 128.478-289.778 287.443l-0.001 0.119c0 177.736 8.28 285.923 124.194 285.923 22.863 0 41.398 18.535 41.398 41.398s-18.535 41.398-41.398 41.398v0c-206.991 0-206.991-213.062-206.991-368.719-0.047-2.197-0.074-4.787-0.074-7.382 0-205.772 166.811-372.583 372.583-372.583 155.102 0 288.069 94.773 344.148 229.569l0.909 2.466c12.977-2.459 27.905-3.866 43.161-3.866 0.351 0 0.701 0.001 1.052 0.003h-0.054c141.071 8.919 253.269 121.118 262.147 261.377l0.041 0.811c-2.759 70.652-2.759 258.324-209.75 258.324z",
                            "M512 908.319c-0.057 0-0.125 0-0.193 0-11.369 0-21.653-4.644-29.058-12.14l-156.213-156.213c-6.884-7.373-11.11-17.304-11.11-28.222 0-22.863 18.535-41.398 41.398-41.398 10.919 0 20.849 4.226 28.246 11.134l-0.025-0.022 126.954 126.954 126.954-126.954c7.373-6.884 17.304-11.11 28.222-11.11 22.863 0 41.398 18.535 41.398 41.398 0 10.919-4.226 20.849-11.134 28.246l0.022-0.025-156.209 158.416c-7.128 6.219-16.515 10.011-26.787 10.011-0.868 0-1.73-0.027-2.585-0.080l0.116 0.006z",
                            "M512 908.319c-22.863 0-41.398-18.535-41.398-41.398v0-351.056c0-22.863 18.535-41.398 41.398-41.398s41.398 18.535 41.398 41.398v0 351.056c0 22.863-18.535 41.398-41.398 41.398v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "cloud-download"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 93,
                        "id" => 109,
                        "name" => "cloud-download",
                        "prevSize" => 80,
                        "code" => 59715
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 190
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M815.587 856.985c-22.863 0-41.398-18.535-41.398-41.398s18.535-41.398 41.398-41.398v0c91.628 0 124.194-45.813 124.194-175.528-8.48-95.471-83.922-170.912-178.638-179.338l-0.753-0.054c-19.914 0.52-38.817 4.118-56.489 10.331l1.291-0.396c-4.655 2-10.071 3.163-15.761 3.163-18.775 0-34.592-12.668-39.37-29.923l-0.067-0.287c-38.556-117.836-147.511-201.455-275.996-201.455-159.262 0-288.519 128.478-289.778 287.443l-0.001 0.119c0 189.879 41.951 285.923 124.194 285.923 22.863 0 41.398 18.535 41.398 41.398s-18.535 41.398-41.398 41.398v0c-137.994 0-206.991-124.194-206.991-368.719-0.047-2.197-0.074-4.787-0.074-7.382 0-205.772 166.811-372.583 372.583-372.583 155.102 0 288.069 94.773 344.148 229.569l0.909 2.466c12.977-2.459 27.905-3.866 43.161-3.866 0.351 0 0.701 0.001 1.052 0.003h-0.054c141.071 8.919 253.269 121.118 262.147 261.377l0.041 0.811c-2.759 70.652-2.759 258.324-209.75 258.324z",
                            "M668.209 713.47c-11.406-0.137-21.709-4.745-29.262-12.15l-126.947-126.947-126.954 126.954c-7.373 6.884-17.304 11.11-28.222 11.11-22.863 0-41.398-18.535-41.398-41.398 0-10.919 4.226-20.849 11.134-28.246l-0.022 0.025 156.209-156.209c7.427-7.616 17.79-12.341 29.254-12.341s21.827 4.725 29.246 12.331l0.008 0.009 156.209 156.209c7.48 7.489 12.108 17.832 12.108 29.254s-4.626 21.765-12.108 29.256v0c-7.6 7.307-17.868 11.888-29.205 12.143l-0.049 0.001z",
                            "M512 908.319c-22.863 0-41.398-18.535-41.398-41.398v0-351.056c0-22.863 18.535-41.398 41.398-41.398s41.398 18.535 41.398 41.398v0 351.056c0 22.863-18.535 41.398-41.398 41.398v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "cloud-upload"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 92,
                        "id" => 110,
                        "name" => "cloud-upload",
                        "prevSize" => 80,
                        "code" => 59716
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 191
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M761.085 885.627h-387.465c-206.337-0.017-373.598-167.289-373.598-373.627 0-206.348 167.278-373.627 373.627-373.627 152.926 0 284.392 91.876 342.215 223.439l0.939 2.397c13.246-2.68 28.531-4.285 44.166-4.428l0.115-0.001c141.466 8.944 253.978 121.457 262.882 262.11l0.042 0.813c0 145.209-117.715 262.923-262.923 262.923v0zM373.619 221.401c-160.494 0-290.599 130.105-290.599 290.599s130.105 290.599 290.599 290.599v0h387.465c99.226-0.314 179.581-80.668 179.895-179.864v-0.030c-8.504-95.738-84.157-171.391-179.139-179.84l-0.755-0.054c-19.989 0.459-38.949 4.276-56.529 10.907l1.178-0.389c-4.752 1.958-10.27 3.095-16.052 3.095s-11.3-1.136-16.34-3.199l0.288 0.104c-9.801-5.017-17.16-13.636-20.404-24.069l-0.077-0.287c-36.721-121.012-147.288-207.574-278.073-207.574-0.511 0-1.022 0.001-1.533 0.004h0.079z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "cloud"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 91,
                        "id" => 111,
                        "name" => "cloud",
                        "prevSize" => 80,
                        "code" => 59717
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 192
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M45.313 1022.421c-0.136 0.001-0.296 0.003-0.456 0.003-11.964 0-22.806-4.803-30.702-12.588l0.006 0.006c-8.248-8.149-13.356-19.461-13.356-31.966 0-1.401 0.065-2.787 0.19-4.155l-0.013 0.176 18.572-230.049c0.852-11.108 5.734-20.935 13.169-28.147l662.6-662.6c34.079-31.973 80.059-51.615 130.628-51.615 2.096 0 4.186 0.034 6.267 0.101l-0.303-0.008c52.335 0.418 99.758 21.108 134.873 54.592l-0.079-0.074c34.783 35.688 56.235 84.513 56.235 138.348 0 50.427-18.822 96.457-49.825 131.448l0.181-0.208-663.188 665.585c-7.185 7.16-16.72 11.966-27.348 13.161l-0.211 0.020-233.044 20.968zM105.22 767.211l-12.581 164.15 164.15-14.978 653.004-654.202c15.132-17.82 24.333-41.087 24.333-66.503 0-56.908-46.133-103.043-103.043-103.043-0.341 0-0.681 0.001-1.021 0.006h0.052c-1.828-0.124-3.962-0.194-6.112-0.194-25.163 0-48.075 9.635-65.249 25.419l0.069-0.063zM727.071 84.852v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "pencil"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 90,
                        "id" => 112,
                        "name" => "pencil",
                        "prevSize" => 80,
                        "code" => 59714
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 193
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M617.025 525.129c-108.758 0-196.923-88.165-196.923-196.923s88.165-196.923 196.923-196.923c108.758 0 196.923 88.165 196.923 196.923v0c0 108.758-88.165 196.923-196.923 196.923v0zM617.025 210.052c-65.254 0-118.154 52.9-118.154 118.154s52.9 118.154 118.154 118.154c65.254 0 118.154-52.9 118.154-118.154v0c0-65.254-52.9-118.154-118.154-118.154v0z",
                            "M984.615 892.718c-21.633-0.292-39.093-17.751-39.385-39.356v-0.028c0-102.4-55.664-170.667-328.206-170.667s-328.206 68.267-328.206 170.667c0 21.751-17.633 39.385-39.385 39.385s-39.385-17.633-39.385-39.385v0c0-249.436 285.145-249.436 406.975-249.436s406.975 0 406.975 249.436c-0.292 21.633-17.751 39.093-39.356 39.385h-0.028z",
                            "M318.753 567.664h-16.804c-80.61-8.022-143.044-75.489-143.044-157.538 0-87.412 70.862-158.273 158.273-158.273 5.362 0 10.663 0.267 15.888 0.788l-0.66-0.053c21.012 0.932 37.694 18.192 37.694 39.348 0 21.751-17.633 39.385-39.385 39.385-2.183 0-4.326-0.177-6.414-0.519l0.228 0.031c-2.281-0.241-4.928-0.378-7.607-0.378-18.98 0-36.35 6.897-49.738 18.321l0.107-0.089c-15.663 12.706-26.198 31.205-28.33 52.186l-0.027 0.326c-0.273 2.455-0.43 5.301-0.43 8.183 0 40.775 31.191 74.267 71.015 77.915l0.306 0.022c2.052 0.186 4.437 0.293 6.848 0.293 15.535 0 30.039-4.409 42.331-12.043l-0.342 0.198c5.898-3.695 13.065-5.886 20.742-5.886 21.812 0 39.494 17.682 39.494 39.494 0 14.133-7.424 26.533-18.586 33.511l-0.166 0.097c-23.058 14.912-51.098 24.022-81.222 24.678l-0.174 0.002z",
                            "M39.385 853.333c-21.633-0.292-39.093-17.751-39.385-39.356v-0.028c0-141.785 37.809-236.308 223.179-236.308 21.751 0 39.385 17.633 39.385 39.385s-17.633 39.385-39.385 39.385v0c-123.406 0-144.41 39.385-144.41 157.538-0.292 21.633-17.751 39.093-39.356 39.385h-0.028z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "users"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 88,
                        "id" => 113,
                        "name" => "users",
                        "prevSize" => 80,
                        "code" => 59713
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 194
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M682.667 554.667h-170.667c-23.436-0.316-42.351-19.231-42.667-42.636v-284.475c0-23.564 19.103-42.667 42.667-42.667s42.667 19.103 42.667 42.667v0 241.777h128c23.564 0 42.667 19.103 42.667 42.667s-19.103 42.667-42.667 42.667v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "clock"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 87,
                        "id" => 114,
                        "name" => "clock",
                        "prevSize" => 80,
                        "code" => 59712
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 195
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 556.52c-122.938 0-222.599-99.66-222.599-222.599s99.66-222.599 222.599-222.599c122.938 0 222.599 99.66 222.599 222.599v0c0 122.938-99.66 222.599-222.599 222.599v0zM512 200.362c-73.762 0-133.559 59.797-133.559 133.559s59.797 133.559 133.559 133.559c73.762 0 133.559-59.797 133.559-133.559v0c0-73.762-59.797-133.559-133.559-133.559v0z",
                            "M927.518 972.038c-24.454-0.33-44.19-20.066-44.52-44.488v-0.032c0-115.751-62.922-192.919-370.998-192.919s-370.998 77.168-370.998 192.919c0 24.587-19.932 44.52-44.52 44.52s-44.52-19.932-44.52-44.52v0c0-281.959 322.323-281.959 460.038-281.959s460.038 0 460.038 281.959c-0.33 24.454-20.066 44.19-44.488 44.52h-0.032z",
                            "M1031.396 556.52h-207.758c-24.587 0-44.52-19.932-44.52-44.52s19.932-44.52 44.52-44.52v0h207.758c24.587 0 44.52 19.932 44.52 44.52s-19.932 44.52-44.52 44.52v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "user-minus"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 83,
                        "id" => 115,
                        "name" => "user-minus",
                        "prevSize" => 80,
                        "code" => 59710
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 196
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 556.52c-122.938 0-222.599-99.66-222.599-222.599s99.66-222.599 222.599-222.599c122.938 0 222.599 99.66 222.599 222.599v0c0 122.938-99.66 222.599-222.599 222.599v0zM512 200.362c-73.762 0-133.559 59.797-133.559 133.559s59.797 133.559 133.559 133.559c73.762 0 133.559-59.797 133.559-133.559v0c0-73.762-59.797-133.559-133.559-133.559v0z",
                            "M927.518 972.038c-24.454-0.33-44.19-20.066-44.52-44.488v-0.032c0-115.751-62.922-192.919-370.998-192.919s-370.998 77.168-370.998 192.919c0 24.587-19.932 44.52-44.52 44.52s-44.52-19.932-44.52-44.52v0c0-281.959 322.323-281.959 460.038-281.959s460.038 0 460.038 281.959c-0.33 24.454-20.066 44.19-44.488 44.52h-0.032z",
                            "M927.518 660.4c-24.454-0.33-44.19-20.066-44.52-44.488v-207.79c0-24.587 19.932-44.52 44.52-44.52s44.52 19.932 44.52 44.52v0 207.758c-0.33 24.454-20.066 44.19-44.488 44.52h-0.032z",
                            "M1031.396 556.52h-207.758c-24.587 0-44.52-19.932-44.52-44.52s19.932-44.52 44.52-44.52v0h207.758c24.587 0 44.52 19.932 44.52 44.52s-19.932 44.52-44.52 44.52v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "user-plus"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 86,
                        "id" => 116,
                        "name" => "user-plus",
                        "prevSize" => 80,
                        "code" => 59711
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 197
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M979.856 319.009h-935.714c-24.224 0-43.862-19.638-43.862-43.862s19.638-43.862 43.862-43.862h935.714c24.224 0 43.862 19.638 43.862 43.862s-19.638 43.862-43.862 43.862v0z",
                            "M771.66 1023.718h-519.321c-2.865 0.208-6.208 0.328-9.577 0.328-74.752 0-135.856-58.437-140.12-132.119l-0.018-0.377v-613.477c0-24.224 19.638-43.862 43.862-43.862s43.862 19.638 43.862 43.862v0 613.477c0 23.977 27.486 44.447 58.483 44.447h519.321c32.75 0 58.483-20.468 58.483-44.447v-613.477c0-26.162 21.208-47.37 47.37-47.37s47.37 21.208 47.37 47.37v0 613.477c-4.282 74.060-65.385 132.496-140.136 132.496-3.37 0-6.712-0.119-10.022-0.352l0.445 0.025zM778.678 263.452c-0.175 0.003-0.382 0.004-0.589 0.004-23.9 0-43.276-19.376-43.276-43.276 0-0.207 0.001-0.414 0.004-0.62v0.032-87.138c0-23.977-28.071-44.447-58.483-44.447h-326.915c-32.166 0-58.483 20.468-58.483 44.447v87.138c0 24.224-19.638 43.862-43.862 43.862s-43.862-19.638-43.862-43.862v0-87.138c4.697-74.022 65.883-132.278 140.675-132.278 1.945 0 3.88 0.040 5.806 0.118l-0.276-0.008h325.161c2.174-0.119 4.719-0.188 7.28-0.188 74.82 0 136.023 58.3 140.66 131.951l0.021 0.407v87.138c0.003 0.174 0.004 0.38 0.004 0.585 0 24.224-19.638 43.862-43.862 43.862-0.001 0-0.003 0-0.004 0v0z",
                            "M407.901 804.41c-24.092-0.325-43.537-19.769-43.862-43.83v-264.955c0-24.224 19.638-43.862 43.862-43.862s43.862 19.638 43.862 43.862v0 264.339c0.003 0.174 0.004 0.38 0.004 0.585 0 24.224-19.638 43.862-43.862 43.862-0.001 0-0.003 0-0.004 0v0z",
                            "M616.099 804.41c-24.224 0-43.862-19.638-43.862-43.862v0-264.924c0-24.224 19.638-43.862 43.862-43.862s43.862 19.638 43.862 43.862v0 264.339c0 0.001 0 0.003 0 0.004 0 24.342-19.568 44.112-43.83 44.443h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "trash"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 81,
                        "id" => 117,
                        "name" => "trash",
                        "prevSize" => 80,
                        "code" => 59709
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 198
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M863.070 0.023h-702.14c-88.866 0-160.907 72.041-160.907 160.907v0 351.070c0 24.236 19.648 43.884 43.884 43.884s43.884-19.648 43.884-43.884v0-351.070c0-40.394 32.746-73.139 73.139-73.139v0h702.14c40.394 0 73.139 32.746 73.139 73.139v0 702.14c0 40.394-32.746 73.139-73.139 73.139v0h-351.070c-24.236 0-43.884 19.648-43.884 43.884s19.648 43.884 43.884 43.884v0h351.070c88.866 0 160.907-72.041 160.907-160.907v0-702.14c0-88.866-72.041-160.907-160.907-160.907v0z",
                            "M465.775 581.628c5.003 2.189 10.831 3.478 16.956 3.511h234.059c24.236 0 43.884-19.648 43.884-43.884s-19.648-43.884-43.884-43.884v0h-128.141l188.408-188.408c7.297-7.815 11.777-18.343 11.777-29.916 0-24.236-19.648-43.884-43.884-43.884-11.574 0-22.101 4.48-29.942 11.802l0.026-0.023-188.408 188.408v-128.141c0-24.236-19.648-43.884-43.884-43.884s-43.884 19.648-43.884 43.884v0 234.047c0.033 6.137 1.322 11.965 3.62 17.252l-0.11-0.284c4.316 10.739 12.665 19.089 23.125 23.305l0.28 0.099z",
                            "M277.953 643.651h-175.535c-56.418 0.33-102.065 45.976-102.396 102.364v175.567c0.33 56.418 45.976 102.065 102.364 102.396h175.567c56.418-0.33 102.065-45.976 102.396-102.364v-175.567c-0.33-56.418-45.976-102.065-102.364-102.396h-0.032zM292.581 921.582c0 8.079-6.55 14.628-14.628 14.628v0h-175.535c-8.079 0-14.628-6.55-14.628-14.628v0-175.535c0-8.079 6.55-14.628 14.628-14.628v0h175.535c8.079 0 14.628 6.55 14.628 14.628v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "window-minimize"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 80,
                        "id" => 118,
                        "name" => "window-minimize",
                        "prevSize" => 80,
                        "code" => 59706
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 199
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M863.070 1023.977h-351.070c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h351.070c40.394 0 73.139-32.746 73.139-73.139v0-702.14c0-40.394-32.746-73.139-73.139-73.139v0h-702.14c-40.394 0-73.139 32.746-73.139 73.139v0 351.070c0 24.236-19.648 43.884-43.884 43.884s-43.884-19.648-43.884-43.884v0-351.070c0-88.866 72.041-160.907 160.907-160.907v0h702.14c88.866 0 160.907 72.041 160.907 160.907v0 702.14c0 88.866-72.041 160.907-160.907 160.907v0z",
                            "M746.047 555.884c-24.105-0.325-43.559-19.779-43.884-43.852v-190.195h-190.163c-24.236 0-43.884-19.648-43.884-43.884s19.648-43.884 43.884-43.884v0h234.047c24.105 0.325 43.559 19.779 43.884 43.852v234.079c-0.325 24.105-19.779 43.559-43.852 43.884h-0.032z",
                            "M482.745 585.139c-11.709-0.922-21.991-6.371-29.214-14.58l-0.041-0.048c-6.935-7.728-11.175-17.996-11.175-29.255s4.24-21.528 11.211-29.297l-0.036 0.041 263.303-263.303c7.815-7.297 18.343-11.777 29.916-11.777 24.236 0 43.884 19.648 43.884 43.884 0 11.574-4.48 22.101-11.802 29.942l0.023-0.026-266.813 259.792c-7.264 8.256-17.547 13.707-29.106 14.619l-0.151 0.010z",
                            "M277.953 1023.977h-175.535c-56.418-0.33-102.065-45.976-102.396-102.364v-175.567c0.33-56.418 45.976-102.065 102.364-102.396h175.567c56.418 0.33 102.065 45.976 102.396 102.364v175.567c-0.33 56.418-45.976 102.065-102.364 102.396h-0.032zM102.418 731.419c-8.079 0-14.628 6.55-14.628 14.628v0 175.535c0 8.079 6.55 14.628 14.628 14.628v0h175.535c8.079 0 14.628-6.55 14.628-14.628v0-175.535c0-8.079-6.55-14.628-14.628-14.628v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "window-maximize"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 79,
                        "id" => 119,
                        "name" => "window-maximize",
                        "prevSize" => 80,
                        "code" => 59707
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 200
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M862.106 1022.571h-700.213c-88.622 0-160.465-71.843-160.465-160.465v0-700.213c0-88.622 71.843-160.465 160.465-160.465v0h350.106c24.17 0 43.763 19.594 43.763 43.763s-19.594 43.763-43.763 43.763v0h-350.106c-40.283 0-72.938 32.656-72.938 72.938v0 700.213c0 40.283 32.656 72.938 72.938 72.938v0h700.213c40.283 0 72.938-32.656 72.938-72.938v0-350.106c0-24.17 19.594-43.763 43.763-43.763s43.763 19.594 43.763 43.763v0 350.106c0 88.622-71.843 160.465-160.465 160.465v0z",
                            "M978.808 322.359c-24.038-0.324-43.439-19.725-43.763-43.732v-189.673h-189.641c-24.17 0-43.763-19.594-43.763-43.763s19.594-43.763 43.763-43.763v0h233.405c24.038 0.324 43.439 19.725 43.763 43.732v233.436c-0.324 24.038-19.725 43.439-43.732 43.763h-0.031z",
                            "M599.527 468.237c-11.677-0.919-21.931-6.354-29.134-14.54l-0.041-0.048c-6.916-7.706-11.145-17.947-11.145-29.175s4.229-21.469 11.18-29.216l-0.036 0.041 379.281-379.281c8.011-8.58 19.39-13.929 32.018-13.929 24.17 0 43.763 19.594 43.763 43.763 0 12.628-5.349 24.007-13.903 31.994l-0.026 0.023-382.782 375.78c-7.244 8.233-17.498 13.669-29.026 14.579l-0.15 0.010z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "external-link"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 78,
                        "id" => 120,
                        "name" => "external-link",
                        "prevSize" => 80,
                        "code" => 59708
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 201
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.452c-234.044 0-423.774-189.73-423.774-423.774s189.73-423.774 423.774-423.774v0h146.13c24.211 0 43.839 19.627 43.839 43.839s-19.627 43.839-43.839 43.839v0h-146.13c-185.621 0-336.097 150.475-336.097 336.097s150.475 336.097 336.097 336.097c185.621 0 336.097-150.475 336.097-336.097v0c0-24.211 19.627-43.839 43.839-43.839s43.839 19.627 43.839 43.839v0c-0.333 233.911-189.864 423.443-423.743 423.774h-0.032z",
                            "M512 438.936c-0.060 0-0.133 0-0.204 0-12.039 0-22.929-4.918-30.771-12.856l-0.004-0.004c-7.921-7.931-12.821-18.884-12.821-30.979s4.899-23.048 12.821-30.98v0l144.376-144.376-144.376-144.376c-8.595-8.025-13.953-19.423-13.953-32.074 0-24.211 19.627-43.839 43.839-43.839 12.65 0 24.048 5.358 32.049 13.927l0.023 0.026 175.355 175.355c7.921 7.931 12.821 18.884 12.821 30.979s-4.899 23.048-12.821 30.98v0l-175.355 175.355c-7.846 7.942-18.736 12.86-30.775 12.86-0.071 0-0.144 0-0.215 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "refresh"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 77,
                        "id" => 121,
                        "name" => "refresh",
                        "prevSize" => 80,
                        "code" => 59704
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 202
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 528.516c-136.816 0-247.725-110.91-247.725-247.725s110.91-247.725 247.725-247.725c136.816 0 247.725 110.91 247.725 247.725v0c0 136.816-110.91 247.725-247.725 247.725v0zM512 132.155c-82.088 0-148.635 66.547-148.635 148.635s66.547 148.635 148.635 148.635c82.088 0 148.635-66.547 148.635-148.635v0c0-82.088-66.547-148.635-148.635-148.635v0z",
                            "M974.421 990.935c-27.214-0.367-49.178-22.331-49.545-49.509v-0.036c0-128.817-70.024-214.696-412.876-214.696s-412.876 85.879-412.876 214.696c0 27.363-22.182 49.545-49.545 49.545s-49.545-22.182-49.545-49.545v0c0-313.786 358.706-313.786 511.966-313.786s511.966 0 511.966 313.786c-0.367 27.214-22.331 49.178-49.509 49.545h-0.036z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "user"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 76,
                        "id" => 122,
                        "name" => "user",
                        "prevSize" => 80,
                        "code" => 59705
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 203
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M980.247 964.701h-936.496c-16.088-0.051-30.159-8.633-37.933-21.458l-0.111-0.198c-3.59-6.323-5.705-13.888-5.705-21.949s2.115-15.627 5.823-22.173l-0.117 0.224 468.247-819.433c8.296-12.379 22.232-20.419 38.044-20.419s29.748 8.039 37.942 20.254l0.104 0.165 468.247 819.433c3.59 6.323 5.705 13.888 5.705 21.949s-2.115 15.627-5.823 22.173l0.117-0.224c-7.885 13.022-21.958 21.606-38.038 21.657h-0.007zM119.257 876.905h785.486l-392.743-687.154z",
                            "M512 642.78c-24.113-0.325-43.573-19.786-43.898-43.866v-204.89c0-24.244 19.654-43.898 43.898-43.898s43.898 19.654 43.898 43.898v0 204.858c-0.325 24.113-19.786 43.573-43.866 43.898h-0.032z",
                            "M512 818.373c-24.113-0.325-43.573-19.786-43.898-43.866v-29.297c0-24.244 19.654-43.898 43.898-43.898s43.898 19.654 43.898 43.898v0 29.265c-0.325 24.113-19.786 43.573-43.866 43.898h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "exclamation-triangle"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 75,
                        "id" => 123,
                        "name" => "exclamation-triangle",
                        "prevSize" => 80,
                        "code" => 59682
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 204
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M788.745 110.712h-69.186v-69.186c0-22.926-18.586-41.512-41.512-41.512s-41.512 18.586-41.512 41.512v0 69.186h-249.071v-69.186c0-22.926-18.586-41.512-41.512-41.512s-41.512 18.586-41.512 41.512v0 69.186h-69.186c-84.063 0-152.209 68.147-152.209 152.209v0 608.839c0 84.063 68.147 152.209 152.209 152.209v0h553.491c84.063 0 152.209-68.147 152.209-152.209v0-608.839c0-84.063-68.147-152.209-152.209-152.209v0zM235.255 193.735h69.186v69.186c0 22.926 18.586 41.512 41.512 41.512s41.512-18.586 41.512-41.512v0-69.186h249.071v69.186c0 22.926 18.586 41.512 41.512 41.512s41.512-18.586 41.512-41.512v0-69.186h69.186c38.21 0 69.186 30.976 69.186 69.186v0 152.209h-691.862v-152.209c0-38.21 30.976-69.186 69.186-69.186v0zM788.745 940.947h-553.491c-38.21 0-69.186-30.976-69.186-69.186v0-373.606h691.862v373.606c0 38.21-30.976 69.186-69.186 69.186v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "calendar"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 74,
                        "id" => 124,
                        "name" => "calendar",
                        "prevSize" => 80,
                        "code" => 59687
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 205
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M625.777 782.223c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-227.56-227.56c-7.709-7.719-12.479-18.379-12.479-30.151s4.768-22.432 12.479-30.152v0l227.556-227.556c7.599-7.095 17.835-11.451 29.087-11.451 23.564 0 42.667 19.103 42.667 42.667 0 11.253-4.356 21.488-11.475 29.112l0.023-0.025-197.404 197.404 197.404 197.404c7.709 7.719 12.479 18.379 12.479 30.151s-4.768 22.432-12.479 30.152v0c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "chevron-circle-left"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 73,
                        "id" => 125,
                        "name" => "chevron-circle-left",
                        "prevSize" => 80,
                        "code" => 59688
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 206
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M512 668.444c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-227.56-227.56c-7.095-7.599-11.451-17.835-11.451-29.087 0-23.564 19.103-42.667 42.667-42.667 11.253 0 21.488 4.356 29.112 11.475l-0.025-0.023 197.404 197.404 197.404-197.404c7.599-7.095 17.835-11.451 29.087-11.451 23.564 0 42.667 19.103 42.667 42.667 0 11.253-4.356 21.488-11.475 29.112l0.023-0.025-227.556 227.556c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "chevron-circle-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 70,
                        "id" => 126,
                        "name" => "chevron-circle-down",
                        "prevSize" => 80,
                        "code" => 59689
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 207
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M398.223 782.223c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-0.004-0.004c-7.709-7.719-12.479-18.379-12.479-30.151s4.768-22.432 12.479-30.152v0l197.404-197.404-197.404-197.404c-7.095-7.599-11.451-17.835-11.451-29.087 0-23.564 19.103-42.667 42.667-42.667 11.253 0 21.488 4.356 29.112 11.475l-0.025-0.023 227.556 227.556c7.709 7.719 12.479 18.379 12.479 30.151s-4.768 22.432-12.479 30.152v0l-227.556 227.556c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "chevron-circle-right"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 69,
                        "id" => 127,
                        "name" => "chevron-circle-right",
                        "prevSize" => 80,
                        "code" => 59690
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 208
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M739.556 668.444c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-197.408-197.408-197.404 197.404c-7.599 7.095-17.835 11.451-29.087 11.451-23.564 0-42.667-19.103-42.667-42.667 0-11.253 4.356-21.488 11.475-29.112l-0.023 0.025 227.556-227.556c7.719-7.709 18.379-12.479 30.151-12.479s22.432 4.768 30.152 12.479v0l227.556 227.556c7.709 7.719 12.479 18.379 12.479 30.151s-4.768 22.432-12.479 30.152v0c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "chevron-circle-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 68,
                        "id" => 128,
                        "name" => "chevron-circle-up",
                        "prevSize" => 80,
                        "code" => 59691
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 209
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 902.549c-0.077 0-0.172 0-0.257 0-15.319 0-29.178-6.257-39.16-16.361l-0.005-0.005-258.132-260.364c-5.628-8.568-8.981-19.073-8.981-30.354 0-30.81 24.977-55.792 55.792-55.792 10.145 0 19.649 2.705 27.846 7.433l-0.269-0.143 223.173 223.173 223.173-223.173c7.925-4.589 17.434-7.289 27.577-7.289 30.81 0 55.792 24.977 55.792 55.792 0 11.285-3.353 21.785-9.108 30.566l0.128-0.209-258.132 258.132c-9.737 10.997-23.705 18.053-39.331 18.593l-0.092 0.004z",
                            "M512 493.405c-0.077 0-0.172 0-0.257 0-15.319 0-29.178-6.257-39.16-16.361l-0.005-0.005-258.132-262.596c-3.437-7.037-5.446-15.305-5.446-24.041 0-30.81 24.977-55.792 55.792-55.792 8.741 0 17.009 2.009 24.377 5.597l-0.329-0.145 223.173 223.173 223.173-223.173c7.037-3.437 15.305-5.446 24.041-5.446 30.81 0 55.792 24.977 55.792 55.792 0 8.741-2.009 17.009-5.597 24.377l0.145-0.329-260.364 260.364c-9.233 10.493-22.31 17.429-37.002 18.583l-0.192 0.012z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "angle-double-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 67,
                        "id" => 129,
                        "name" => "angle-double-down",
                        "prevSize" => 80,
                        "code" => 59692
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 210
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M436.578 832.544c-0.073 0-0.172 0-0.262 0-15.535 0-29.584-6.348-39.707-16.591l-0.004-0.004-261.716-263.977c-10.22-10.237-16.542-24.365-16.542-39.973s6.32-29.742 16.542-39.973v0l261.716-261.716c8.688-5.708 19.333-9.102 30.778-9.102 31.242 0 56.568 25.327 56.568 56.568 0 10.286-2.746 19.925-7.538 28.233l0.144-0.272-226.267 226.267 226.267 226.267c10.22 10.237 16.542 24.365 16.542 39.973s-6.32 29.742-16.542 39.973v0c-9.854 8.923-22.994 14.389-37.408 14.389-0.902 0-1.8-0.024-2.694-0.065l0.124 0.004z",
                            "M851.399 832.544c-15.091-1.188-28.351-8.214-37.656-18.795l-0.055-0.065-263.977-263.977c-10.22-10.237-16.542-24.365-16.542-39.973s6.32-29.742 16.542-39.973v0l263.977-259.453c7.129-3.487 15.515-5.521 24.379-5.521 31.242 0 56.568 25.327 56.568 56.568 0 8.864-2.038 17.25-5.669 24.715l0.144-0.336-226.267 226.267 226.267 226.267c8.942 9.959 14.408 23.201 14.408 37.714s-5.466 27.749-14.45 37.763l0.045-0.055c-9.366 10.641-22.619 17.666-37.517 18.843l-0.193 0.014z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "angle-double-left"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 66,
                        "id" => 130,
                        "name" => "angle-double-left",
                        "prevSize" => 80,
                        "code" => 59693
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 211
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M587.102 831.182c-0.073 0-0.171 0-0.259 0-15.47 0-29.463-6.321-39.534-16.519l-0.004-0.004c-10.173-10.194-16.472-24.266-16.472-39.803s6.29-29.611 16.472-39.809v0l225.304-225.304-225.304-225.304c-3.536-7.161-5.605-15.588-5.605-24.492 0-31.111 25.217-56.325 56.325-56.325 10.665 0 20.638 2.967 29.14 8.115l-0.251-0.143 262.858 262.858c10.173 10.194 16.472 24.266 16.472 39.803s-6.29 29.611-16.472 39.809v0l-262.858 258.35c-9.83 11.106-23.933 18.225-39.711 18.775l-0.094 0.004z",
                            "M174.042 831.182c-15.029-1.181-28.228-8.178-37.495-18.716l-0.053-0.063c-8.9-9.92-14.342-23.099-14.342-37.554s5.442-27.63 14.391-37.603l-0.045 0.053 225.304-225.304-225.304-225.304c-3.467-7.105-5.497-15.45-5.497-24.276 0-31.111 25.217-56.325 56.325-56.325 8.82 0 17.176 2.028 24.609 5.644l-0.339-0.145 262.858 262.858c10.173 10.194 16.472 24.266 16.472 39.803s-6.29 29.611-16.472 39.809v0l-262.858 258.35c-9.32 10.596-22.521 17.598-37.357 18.765l-0.192 0.014z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "angle-double-right"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 65,
                        "id" => 131,
                        "name" => "angle-double-right",
                        "prevSize" => 80,
                        "code" => 59694
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 212
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M768.744 493.657c-0.079 0-0.163 0-0.259 0-15.11 0-28.77-6.175-38.616-16.135l-220.071-220.071-220.067 220.067c-6.991 3.451-15.223 5.479-23.923 5.479-30.385 0-55.016-24.631-55.016-55.016 0-10.412 2.899-20.155 7.927-28.458l-0.139 0.247 254.542-254.542c9.955-9.943 23.695-16.087 38.874-16.087s28.926 6.151 38.877 16.087v0l256.744 256.744c9.943 9.955 16.087 23.695 16.087 38.874s-6.151 28.926-16.087 38.877v0c-9.583 8.683-22.363 13.999-36.378 13.999-0.883 0-1.752-0.019-2.623-0.067l0.127 0.007z",
                            "M768.744 897.118c-14.683-1.159-27.57-7.987-36.629-18.283l-0.055-0.060-220.067-220.067-220.067 220.067c-6.935 3.391-15.091 5.371-23.707 5.371-30.385 0-55.016-24.631-55.016-55.016 0-8.623 1.987-16.772 5.515-24.038l-0.139 0.331 256.744-256.744c9.955-9.943 23.695-16.087 38.874-16.087s28.926 6.151 38.877 16.087v0l252.342 256.744c8.695 9.691 14.011 22.565 14.011 36.678s-5.316 26.99-14.059 36.726l0.043-0.055c-9.104 10.351-22.001 17.184-36.486 18.331l-0.187 0.012z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "angle-double-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 64,
                        "id" => 132,
                        "name" => "angle-double-up",
                        "prevSize" => 80,
                        "code" => 59695
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 213
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 724.21c-0.086 0-0.192 0-0.293 0-17.487 0-33.3-7.139-44.687-18.671l-0.006-0.006-294.549-297.097c-6.421-9.779-10.246-21.757-10.246-34.639 0-35.163 28.506-63.662 63.662-63.662 11.573 0 22.424 3.091 31.773 8.485l-0.306-0.164 254.656 254.656 254.656-254.656c9.044-5.23 19.894-8.318 31.469-8.318 35.163 0 63.662 28.506 63.662 63.662 0 12.88-3.82 24.863-10.395 34.879l0.149-0.244-297.097 297.097c-10.874 11.029-25.782 18.050-42.325 18.671l-0.112 0.002z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "angle-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 224,
                        "id" => 133,
                        "name" => "angle-down",
                        "prevSize" => 80,
                        "code" => 59696
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 214
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M645.785 836.904c-0.077 0-0.174 0-0.264 0-15.744 0-29.987-6.434-40.247-16.814l-267.57-267.57c-10.36-10.374-16.768-24.697-16.768-40.517s6.404-30.147 16.768-40.517v0l267.566-265.27c8.804-5.784 19.594-9.224 31.197-9.224 31.667 0 57.335 25.671 57.335 57.335 0 10.424-2.782 20.194-7.64 28.617l0.144-0.274-229.343 229.343 229.343 229.343c10.36 10.374 16.768 24.697 16.768 40.517s-6.404 30.147-16.768 40.517v0c-9.987 9.044-23.307 14.584-37.917 14.584-0.914 0-1.824-0.023-2.732-0.064l0.124 0.004z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "angle-left"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 62,
                        "id" => 134,
                        "name" => "angle-left",
                        "prevSize" => 80,
                        "code" => 59697
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 215
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M377.809 837.894c-16.204-0.566-30.605-7.836-40.589-19.11l-0.054-0.059c-10.396-10.404-16.822-24.776-16.822-40.643s6.424-30.235 16.822-40.645v0l230.044-230.044-230.044-230.044c-2.746-6.474-4.334-14.004-4.334-21.905 0-31.765 25.748-57.513 57.513-57.513 10.324 0 20.016 2.723 28.392 7.484l-0.286-0.149 268.384 268.384c10.396 10.406 16.822 24.773 16.822 40.643s-6.424 30.236-16.822 40.645v0l-268.384 263.783c-10.036 11.334-24.433 18.607-40.543 19.164l-0.096 0.006z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "angle-right"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 61,
                        "id" => 135,
                        "name" => "angle-right",
                        "prevSize" => 80,
                        "code" => 59698
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 216
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M804.999 721.286c-0.087 0-0.194 0-0.29 0-17.244 0-32.838-7.040-44.069-18.415l-251.149-251.149-251.143 251.143c-7.978 3.94-17.369 6.249-27.304 6.249-34.676 0-62.787-28.109-62.787-62.787 0-11.887 3.305-23 9.042-32.478l-0.157 0.277 292.999-292.999c11.357-11.344 27.043-18.363 44.37-18.363s33.008 7.014 44.37 18.363v0l292.999 292.999c11.344 11.357 18.363 27.043 18.363 44.37s-7.014 33.008-18.363 44.37v0c-11.24 11.41-26.866 18.481-44.134 18.481-0.966 0-1.925-0.024-2.88-0.070l0.133 0.002z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "angle-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 60,
                        "id" => 136,
                        "name" => "angle-up",
                        "prevSize" => 80,
                        "code" => 59699
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 217
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M875.959 1024h-727.917c-82.563-3.472-148.18-71.248-148.18-154.349 0-2.309 0.051-4.607 0.151-6.89l-0.011 0.325v-175.543c0-24.237 19.648-43.886 43.886-43.886s43.886 19.648 43.886 43.886v0 175.543c-0.162 1.762-0.255 3.81-0.255 5.881 0 34.276 25.406 62.617 58.412 67.222l0.357 0.041h729.673c33.364-4.645 58.77-32.987 58.77-67.263 0-2.069-0.093-4.118-0.274-6.141l0.019 0.261v-175.543c0-24.237 19.648-43.886 43.886-43.886s43.886 19.648 43.886 43.886v0 175.543c0.091 1.983 0.143 4.309 0.143 6.646 0 82.485-64.648 149.87-146.039 154.251l-0.389 0.016z",
                            "M746.058 321.828c-0.060 0-0.133 0-0.204 0-12.052 0-22.954-4.923-30.804-12.869l-203.048-203.048-203.044 203.044c-7.816 7.297-18.344 11.778-29.918 11.778-24.237 0-43.886-19.648-43.886-43.886 0-11.575 4.48-22.102 11.803-29.944l-0.023 0.026 234.058-234.058c7.939-7.93 18.904-12.835 31.012-12.835s23.073 4.904 31.013 12.835v0l234.058 234.058c7.93 7.939 12.835 18.904 12.835 31.012s-4.904 23.073-12.835 31.013v0c-7.854 7.95-18.756 12.874-30.808 12.874-0.071 0-0.144 0-0.215 0h0.011z",
                            "M512 731.429c-24.106-0.325-43.561-19.78-43.886-43.854v-643.688c0-24.237 19.648-43.886 43.886-43.886s43.886 19.648 43.886 43.886v0 643.657c-0.325 24.106-19.78 43.561-43.854 43.886h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "upload"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 59,
                        "id" => 137,
                        "name" => "upload",
                        "prevSize" => 80,
                        "code" => 59700
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 218
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M875.959 1024h-727.917c-82.563-3.472-148.18-71.248-148.18-154.349 0-2.309 0.051-4.607 0.151-6.89l-0.011 0.325v-175.543c0-24.237 19.648-43.886 43.886-43.886s43.886 19.648 43.886 43.886v0 175.543c-0.162 1.762-0.255 3.81-0.255 5.881 0 34.276 25.406 62.617 58.412 67.222l0.357 0.041h729.673c33.364-4.645 58.77-32.987 58.77-67.263 0-2.069-0.093-4.118-0.274-6.141l0.019 0.261v-175.543c0-24.237 19.648-43.886 43.886-43.886s43.886 19.648 43.886 43.886v0 175.543c0.091 1.983 0.143 4.309 0.143 6.646 0 82.485-64.648 149.87-146.039 154.251l-0.389 0.016z",
                            "M512 731.429c-0.060 0-0.133 0-0.204 0-12.052 0-22.954-4.923-30.804-12.869l-234.062-234.062c-7.297-7.816-11.778-18.344-11.778-29.918 0-24.237 19.648-43.886 43.886-43.886 11.575 0 22.102 4.48 29.944 11.803l-0.026-0.023 203.044 203.044 203.044-203.044c7.816-7.297 18.344-11.778 29.918-11.778 24.237 0 43.886 19.648 43.886 43.886 0 11.575-4.48 22.102-11.803 29.944l0.023-0.026-234.058 234.058c-7.854 7.95-18.756 12.874-30.808 12.874-0.071 0-0.144 0-0.215 0h0.011z",
                            "M512 731.429c-24.106-0.325-43.561-19.78-43.886-43.854v-643.688c0-24.237 19.648-43.886 43.886-43.886s43.886 19.648 43.886 43.886v0 643.657c-0.325 24.106-19.78 43.561-43.854 43.886h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "download"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 113,
                        "id" => 138,
                        "name" => "download",
                        "prevSize" => 80,
                        "code" => 59734
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 219
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 0c-282.769 0-512 229.231-512 512s229.231 512 512 512c282.769 0 512-229.231 512-512v0c0-282.769-229.231-512-512-512v0zM85.333 512c0-0.111 0-0.24 0-0.369 0-102.621 36.521-196.712 97.276-269.985l-0.565 0.701 599.609 599.609c-72.916 60.16-167.308 96.645-270.223 96.645-235.327 0-426.097-190.771-426.097-426.097 0-0.177 0-0.353 0-0.531v0.028zM841.956 781.653l-599.609-599.609c72.855-59.977 167.108-96.344 269.855-96.344 235.327 0 426.097 190.771 426.097 426.097 0 102.747-36.367 197-96.931 270.591l0.587-0.735z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "ban"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 58,
                        "id" => 139,
                        "name" => "ban",
                        "prevSize" => 80,
                        "code" => 59701
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 220
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1021.85 393.483c-4.841-15.030-17.644-26.152-33.316-28.484l-0.227-0.028-303.002-44.165-135.848-274.491c-7.746-12.831-21.614-21.279-37.457-21.279s-29.71 8.447-37.346 21.083l-0.11 0.195-135.848 274.491-303.002 44.165c-15.899 2.36-28.701 13.481-33.462 28.219l-0.081 0.292c-1.397 4-2.204 8.612-2.204 13.413 0 11.571 4.687 22.048 12.267 29.634v0l220.265 213.556-51.991 301.885c-0.38 2.136-0.597 4.594-0.597 7.102 0 14.016 6.787 26.448 17.254 34.186l0.115 0.081c6.76 4.866 15.204 7.783 24.332 7.783 7.263 0 14.096-1.847 20.052-5.097l-0.219 0.11 270.579-142.557 271.137 142.557c5.647 3.156 12.387 5.020 19.564 5.031h0.004c9.211-0.109 17.721-3.021 24.742-7.922l-0.143 0.094c10.582-7.821 17.369-20.251 17.369-34.267 0-2.509-0.218-4.967-0.634-7.356l0.037 0.254-52.551-301.885 219.705-213.556c7.83-7.626 12.687-18.27 12.687-30.050 0-4.646-0.756-9.117-2.151-13.294l0.085 0.296z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "star-fill"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 57,
                        "id" => 140,
                        "name" => "star-fill",
                        "prevSize" => 80,
                        "code" => 59702
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 221
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M802.661 1001.092c-7.178-0.012-13.918-1.875-19.772-5.137l0.207 0.106-271.096-142.535-271.096 142.535c-5.737 3.14-12.567 4.986-19.829 4.986-9.126 0-17.571-2.916-24.452-7.867l0.124 0.085c-10.58-7.82-17.366-20.248-17.366-34.262 0-2.509 0.217-4.966 0.634-7.355l-0.037 0.254 52.543-301.84-220.232-213.524c-7.577-7.585-12.265-18.059-12.265-29.629 0-4.8 0.807-9.412 2.291-13.706l-0.089 0.295c4.841-15.028 17.641-26.148 33.311-28.48l0.227-0.028 302.957-44.158 135.828-274.45c7.745-12.829 21.611-21.276 37.451-21.276s29.706 8.446 37.341 21.080l0.11 0.195 135.828 274.45 302.957 44.158c15.896 2.359 28.697 13.479 33.457 28.215l0.081 0.292c1.397 4 2.204 8.611 2.204 13.411 0 11.569-4.686 22.045-12.265 29.63v0l-220.232 213.524 51.984 301.84c0.38 2.135 0.597 4.593 0.597 7.101 0 14.014-6.786 26.444-17.251 34.181l-0.115 0.081c-6.725 4.703-15.021 7.598-23.979 7.824l-0.056 0.001zM512 764.651c7.119 0.088 13.834 1.727 19.85 4.594l-0.287-0.123 215.201 111.792-40.805-239.795c-0.368-2.129-0.579-4.58-0.579-7.081 0-11.813 4.698-22.528 12.328-30.38l-0.010 0.010 174.396-167.689-240.912-35.774c-13.783-2.252-25.168-10.868-31.19-22.677l-0.111-0.241-107.88-217.995-107.88 218.555c-6.135 12.049-17.52 20.666-31.056 22.884l-0.246 0.033-240.912 35.215 174.396 167.689c7.619 7.842 12.317 18.557 12.317 30.37 0 2.501-0.211 4.952-0.614 7.338l0.035-0.257-40.805 241.472 215.201-111.792c5.628-3.296 12.279-5.497 19.381-6.135l0.183-0.013z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "star"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 56,
                        "id" => 141,
                        "name" => "star",
                        "prevSize" => 80,
                        "code" => 59703
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 222
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M679.213 992.738c-0.086 0-0.19 0-0.292 0-17.22 0-32.796-7.035-44.013-18.388l-418.039-418.039c-11.33-11.344-18.339-27.010-18.339-44.311s7.007-32.967 18.339-44.313v0l418.033-418.033c11.167-10.427 26.211-16.828 42.747-16.828 34.631 0 62.705 28.074 62.705 62.705 0 16.538-6.402 31.58-16.864 42.785l0.034-0.037-373.722 373.722 373.722 373.722c11.33 11.344 18.339 27.010 18.339 44.311s-7.007 32.967-18.339 44.313v0c-11.222 11.36-26.798 18.394-44.019 18.394-0.102 0-0.205 0-0.307 0h0.016z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "chevron-left"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 16,
                        "id" => 142,
                        "name" => "chevron-left",
                        "prevSize" => 80,
                        "code" => 59648
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 223
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M344.779 992.761c-0.086 0-0.19 0-0.292 0-17.221 0-32.798-7.035-44.016-18.389l-0.006-0.006c-11.331-11.345-18.34-27.011-18.34-44.313s7.008-32.969 18.34-44.315v0l373.739-373.739-373.739-373.739c-10.427-11.167-16.829-26.212-16.829-42.749 0-34.632 28.075-62.708 62.708-62.708 16.539 0 31.582 6.402 42.787 16.865l-0.037-0.034 418.053 418.053c11.331 11.345 18.34 27.011 18.34 44.313s-7.008 32.969-18.34 44.315v0l-418.053 418.053c-11.223 11.36-26.8 18.395-44.021 18.395-0.102 0-0.205 0-0.307 0h0.016z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "chevron-right"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 17,
                        "id" => 143,
                        "name" => "chevron-right",
                        "prevSize" => 80,
                        "code" => 59649
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 224
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 774.266c-0.084 0-0.183 0-0.282 0-16.621 0-31.655-6.79-42.481-17.748l-403.49-403.49c-6.608-9.557-10.557-21.395-10.557-34.153 0-33.426 27.098-60.522 60.522-60.522 13.37 0 25.728 4.335 35.742 11.677l-0.17-0.119 360.715 358.295 360.715-358.295c9.294-6.106 20.686-9.741 32.927-9.741 33.426 0 60.522 27.098 60.522 60.522 0 11.002-2.935 21.318-8.065 30.207l0.155-0.294-403.485 403.485c-10.561 11.928-25.717 19.583-42.668 20.171l-0.102 0.002z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "chevron-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 18,
                        "id" => 144,
                        "name" => "chevron-down",
                        "prevSize" => 80,
                        "code" => 59650
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 225
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M912.529 772.345c-0.083 0-0.182 0-0.279 0-16.5 0-31.424-6.74-42.17-17.619l-358.079-358.079-358.074 355.671c-9.226 6.061-20.534 9.669-32.685 9.669-33.181 0-60.080-26.899-60.080-60.080 0-10.921 2.914-21.161 8.005-29.985l-0.154 0.291 400.529-400.529c10.869-10.856 25.879-17.571 42.456-17.571s31.587 6.714 42.457 17.571v0l400.529 400.529c10.856 10.869 17.571 25.879 17.571 42.456s-6.714 31.587-17.571 42.457v0c-10.467 9.481-24.421 15.283-39.728 15.283-0.96 0-1.913-0.022-2.862-0.068l0.134 0.005z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "chevron-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 19,
                        "id" => 145,
                        "name" => "chevron-up",
                        "prevSize" => 80,
                        "code" => 59651
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 226
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M777.445 959.937c-0.065 0-0.144 0-0.22 0-11.19 0-21.502-3.743-29.759-10.044l0.119 0.088-530.888-398.166c-12.143-9.177-19.908-23.59-19.908-39.817s7.765-30.639 19.784-39.726l0.124-0.091 530.888-398.166c8.229-6.251 18.645-10.014 29.941-10.014 8.203 0 15.94 1.984 22.762 5.498l-0.278-0.131c16.203 8.535 27.088 25.214 27.208 44.445v796.35c-0.121 19.249-11.006 35.927-26.932 44.329l-0.275 0.133c-6.602 3.186-14.334 5.125-22.5 5.309l-0.063 0.002zM329.508 512l398.166 298.625v-597.249z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "caret-left"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 20,
                        "id" => 146,
                        "name" => "caret-left",
                        "prevSize" => 80,
                        "code" => 59652
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 227
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M246.514 960.008c-8.001-0.105-15.52-2.052-22.189-5.441l0.287 0.133c-16.574-8.253-27.783-25.040-27.876-44.458v-796.469c0.092-19.426 11.302-36.213 27.587-44.339l0.287-0.132c6.449-3.33 14.077-5.284 22.158-5.284 11.175 0 21.478 3.731 29.729 10.017l-0.119-0.089 530.972 398.228c12.145 9.177 19.912 23.594 19.912 39.823s-7.766 30.645-19.789 39.733l-0.124 0.091-530.972 398.228c-8.14 6.214-18.456 9.957-29.645 9.957-0.077 0-0.156 0-0.232 0h0.012zM296.292 213.328v597.343l398.228-298.672z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "caret-right"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 21,
                        "id" => 147,
                        "name" => "caret-right",
                        "prevSize" => 80,
                        "code" => 59653
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 228
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 808.242c-0.092 0-0.203 0.002-0.311 0.002-15.157 0-28.607-7.307-37.020-18.589l-0.088-0.122-374.2-498.935c-5.874-7.735-9.411-17.522-9.411-28.14 0-7.708 1.865-14.982 5.168-21.391l-0.124 0.263c8.022-15.226 23.696-25.457 41.77-25.57h748.419c18.091 0.116 33.765 10.344 41.662 25.311l0.125 0.259c3.18 6.151 5.044 13.42 5.044 21.131 0 10.614-3.536 20.406-9.494 28.255l0.085-0.116-374.2 498.935c-8.503 11.404-21.951 18.712-37.108 18.712-0.109 0-0.218 0-0.329-0.002h0.017zM231.349 309.307l280.651 374.2 280.651-374.2z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "caret-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 22,
                        "id" => 148,
                        "name" => "caret-down",
                        "prevSize" => 80,
                        "code" => 59654
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 229
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M886.087 808.153h-748.175c-18.084-0.115-33.754-10.339-41.649-25.303l-0.125-0.259c-3.18-6.148-5.042-13.416-5.042-21.125 0-10.612 3.535-20.4 9.492-28.247l-0.085 0.116 374.087-498.782c8.871-10.966 22.328-17.919 37.409-17.919s28.537 6.953 37.338 17.828l0.069 0.090 374.087 498.782c5.874 7.732 9.407 17.518 9.407 28.131 0 7.706-1.864 14.977-5.165 21.386l0.123-0.262c-8.019 15.222-23.689 25.45-41.757 25.562h-0.016zM231.436 714.631h561.131l-280.564-374.087z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "caret-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 23,
                        "id" => 149,
                        "name" => "caret-up",
                        "prevSize" => 80,
                        "code" => 59655
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 230
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M440.071 880.415c-243.195 0-440.344-197.149-440.344-440.344s197.149-440.344 440.344-440.344c243.195 0 440.344 197.149 440.344 440.344v0c0 243.195-197.149 440.344-440.344 440.344v0zM440.071 88.031c-193.781 0-350.872 157.090-350.872 350.872s157.090 350.872 350.872 350.872c193.781 0 350.872-157.090 350.872-350.872v0c0-193.781-157.090-350.872-350.872-350.872v0z",
                            "M979.828 1023.687c-0.060 0-0.133 0-0.204 0-12.045 0-22.94-4.92-30.785-12.862l-241.52-241.52c-7.293-7.811-11.771-18.333-11.771-29.899 0-24.222 19.636-43.859 43.859-43.859 11.568 0 22.088 4.478 29.926 11.795l-0.026-0.023 241.516 241.516c7.925 7.934 12.827 18.892 12.827 30.993s-4.901 23.059-12.827 30.995v0c-7.849 7.945-18.744 12.866-30.789 12.866-0.071 0-0.144 0-0.215 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "search"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 24,
                        "id" => 150,
                        "name" => "search",
                        "prevSize" => 80,
                        "code" => 59656
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 231
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M367.973 877.709c-12.364-0.429-23.354-5.979-30.973-14.583l-0.039-0.045-292.569-292.569c-12.118-7.943-20.011-21.462-20.011-36.822 0-24.237 19.649-43.886 43.886-43.886 16.258 0 30.454 8.843 38.038 21.983l0.112 0.213 261.556 259.802 612.637-610.884c6.739-4.429 14.999-7.063 23.874-7.063 24.237 0 43.886 19.649 43.886 43.886 0 7.977-2.129 15.457-5.848 21.903l0.112-0.213-643.651 643.651c-7.658 8.649-18.646 14.2-30.94 14.626l-0.073 0.001z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "check"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false,
                        "width" => 1088
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 25,
                        "id" => 151,
                        "name" => "check",
                        "prevSize" => 80,
                        "code" => 59657
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 232
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M426.842 696.51c-11.361-0.894-21.337-6.182-28.346-14.147l-0.040-0.047-170.317-170.317c-2.623-5.368-4.157-11.68-4.157-18.35 0-23.516 19.064-42.579 42.579-42.579 6.67 0 12.983 1.534 18.603 4.269l-0.253-0.11 140.228 140.228 484.268-480.861c5.368-2.623 11.68-4.157 18.35-4.157 23.516 0 42.579 19.064 42.579 42.579 0 6.67-1.534 12.983-4.269 18.603l0.11-0.253-510.95 510.95c-7.048 8.010-17.025 13.299-28.241 14.184l-0.146 0.009z",
                            "M512 1022.95c-191.476-0.317-358.217-105.908-445.47-261.972l-1.328-2.587c-31.938-55.832-53.595-121.525-60.581-191.54l-0.166-2.053c-1.75-15.87-2.746-34.274-2.746-52.91 0-191.528 105.381-358.444 261.324-445.927l2.575-1.327c55.832-31.938 121.525-53.595 191.54-60.581l2.053-0.166c16.139-1.838 34.846-2.885 53.796-2.885 52.724 0 103.554 8.111 151.308 23.156l-3.563-0.969c19.66 4.032 34.236 21.19 34.236 41.754 0 23.516-19.064 42.579-42.579 42.579-5.793 0-11.317-1.158-16.352-3.253l0.282 0.104c-37.278-11.625-80.141-18.322-124.567-18.322-16.116 0-32.026 0.881-47.685 2.599l1.933-0.172c-60.018 6.3-114.675 24.271-163.354 51.622l2.121-1.095c-49.065 27.393-90.495 62.305-124.293 103.695l-0.607 0.765c-59.499 72.093-95.584 165.431-95.584 267.195 0 16.071 0.899 31.933 2.652 47.536l-0.174-1.916c6.3 60.018 24.271 114.675 51.622 163.354l-1.095-2.121c27.393 49.065 62.305 90.495 103.695 124.293l0.765 0.607c72.093 59.499 165.431 95.584 267.195 95.584 16.071 0 31.933-0.899 47.536-2.652l-1.916 0.174c60.018-6.3 114.675-24.271 163.354-51.622l-2.121 1.095c49.065-27.393 90.495-62.305 124.293-103.695l0.607-0.765c59.499-72.093 95.584-165.431 95.584-267.195 0-16.071-0.899-31.933-2.652-47.536l0.174 1.916c-0.129-1.276-0.204-2.758-0.204-4.258 0-24.725 20.044-44.769 44.769-44.769 23.226 0 42.321 17.686 44.551 40.326l0.015 0.185c1.73 15.781 2.716 34.082 2.716 52.613 0 191.743-105.619 358.82-261.851 446.222l-2.584 1.328c-56.511 33.262-123.144 55.912-194.296 63.403l-2.137 0.182c-17.6 0-35.767 0-52.798 0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "check-circle"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 26,
                        "id" => 152,
                        "name" => "check-circle",
                        "prevSize" => 80,
                        "code" => 59658
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 233
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M586.932 512l312.455-312.455c10.394-9.708 16.875-23.488 16.875-38.79 0-29.283-23.737-53.020-53.020-53.020-15.299 0-29.084 6.481-38.759 16.841l-0.027 0.029-312.455 312.455-312.455-312.455c-9.444-8.816-22.161-14.228-36.145-14.228-29.283 0-53.020 23.737-53.020 53.020 0 13.985 5.412 26.701 14.261 36.174l-0.027-0.029 312.455 312.455-312.455 312.455c-9.582 9.589-15.504 22.839-15.504 37.468s5.926 27.874 15.504 37.469v0c9.589 9.582 22.839 15.504 37.468 15.504s27.874-5.926 37.469-15.504v0l312.455-312.455 312.455 312.455c9.589 9.582 22.839 15.504 37.468 15.504s27.874-5.926 37.469-15.504v0c9.582-9.589 15.504-22.839 15.504-37.468s-5.926-27.874-15.504-37.469v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "times"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 265,
                        "id" => 153,
                        "name" => "times",
                        "prevSize" => 80,
                        "code" => 59659
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 234
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M341.333 725.333c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-0.004-0.004c-7.709-7.719-12.479-18.379-12.479-30.151s4.768-22.432 12.479-30.152v0l341.333-341.333c7.599-7.095 17.835-11.451 29.087-11.451 23.564 0 42.667 19.103 42.667 42.667 0 11.253-4.356 21.488-11.475 29.112l0.023-0.025-341.333 341.333c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z",
                            "M682.667 725.333c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-341.337-341.337c-7.095-7.599-11.451-17.835-11.451-29.087 0-23.564 19.103-42.667 42.667-42.667 11.253 0 21.488 4.356 29.112 11.475l-0.025-0.023 341.333 341.333c7.709 7.719 12.479 18.379 12.479 30.151s-4.768 22.432-12.479 30.152v0c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "times-circle"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 28,
                        "id" => 154,
                        "name" => "times-circle",
                        "prevSize" => 80,
                        "code" => 59660
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 235
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M559.485 464.515v-395.695c0-26.223-21.257-47.485-47.485-47.485s-47.485 21.257-47.485 47.485v0 395.695h-395.695c-26.223 0-47.485 21.257-47.485 47.485s21.257 47.485 47.485 47.485v0h395.695v395.695c0.352 26.082 21.403 47.133 47.447 47.485h0.033c26.223 0 47.485-21.257 47.485-47.485v0-395.695h395.695c26.223 0 47.485-21.257 47.485-47.485v0c-0.352-26.082-21.403-47.133-47.447-47.485h-0.033z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "plus"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 35,
                        "id" => 155,
                        "name" => "plus",
                        "prevSize" => 80,
                        "code" => 59661
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 236
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M512 782.223c-23.436-0.316-42.351-19.231-42.667-42.636v-455.141c0-23.564 19.103-42.667 42.667-42.667s42.667 19.103 42.667 42.667v0 455.111c-0.316 23.436-19.231 42.351-42.636 42.667h-0.031z",
                            "M739.556 554.667h-455.111c-23.564 0-42.667-19.103-42.667-42.667s19.103-42.667 42.667-42.667v0h455.111c23.564 0 42.667 19.103 42.667 42.667s-19.103 42.667-42.667 42.667v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "plus-circle"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 36,
                        "id" => 156,
                        "name" => "plus-circle",
                        "prevSize" => 80,
                        "code" => 59662
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 237
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M967.085 568.886h-910.171c-31.417 0-56.886-25.469-56.886-56.886s25.469-56.886 56.886-56.886v0h910.171c31.417 0 56.886 25.469 56.886 56.886s-25.469 56.886-56.886 56.886v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "minus"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 41,
                        "id" => 157,
                        "name" => "minus",
                        "prevSize" => 80,
                        "code" => 59663
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 238
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M739.556 554.667h-455.111c-23.564 0-42.667-19.103-42.667-42.667s19.103-42.667 42.667-42.667v0h455.111c23.564 0 42.667 19.103 42.667 42.667s-19.103 42.667-42.667 42.667v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "minus-circle"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 42,
                        "id" => 158,
                        "name" => "minus-circle",
                        "prevSize" => 80,
                        "code" => 59664
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 239
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M1024 512c0 282.769-229.231 512-512 512s-512-229.231-512-512c0-282.769 229.231-512 512-512s512 229.231 512 512z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "circle-on",
                            "deprecate"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 47,
                        "id" => 159,
                        "name" => "circle-on",
                        "prevSize" => 80,
                        "code" => 59665
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 240
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "circle-off",
                            "deprecate"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 48,
                        "id" => 160,
                        "name" => "circle-off",
                        "prevSize" => 80,
                        "code" => 59666
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 241
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 761.297c-0.059 0-0.133 0-0.206 0-12.080 0-23.010-4.935-30.879-12.901l-410.613-410.613c-7.95-7.958-12.867-18.951-12.867-31.089 0-24.283 19.676-43.971 43.952-43.993h821.216c23.565 0.924 42.321 20.252 42.321 43.961 0 11.301-4.262 21.608-11.268 29.401l0.035-0.040-410.607 410.607c-7.678 8.671-18.694 14.235-31.015 14.662l-0.074 0.003zM207.563 350.691l304.437 304.437 304.437-304.437z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 51,
                        "id" => 161,
                        "name" => "sort-down",
                        "prevSize" => 80,
                        "code" => 59667
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 242
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M921.888 760.859h-819.773c-0.088 0-0.19 0.002-0.294 0.002-18.019 0-33.47-11-40.004-26.651l-0.105-0.287c-1.856-4.68-2.932-10.103-2.932-15.777 0-11.845 4.689-22.595 12.313-30.495l409.875-409.875c7.945-7.935 18.917-12.844 31.034-12.844s23.089 4.908 31.035 12.844v0l409.888 409.888c7.91 7.94 12.801 18.896 12.801 30.993 0 6.145-1.262 11.997-3.542 17.308l0.108-0.285c-7.032 14.993-22.001 25.192-39.352 25.192-0.369 0-0.739-0.004-1.106-0.013l0.055 0.002zM208.099 673.027h607.804l-303.901-303.901z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "sort-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 52,
                        "id" => 162,
                        "name" => "sort-up",
                        "prevSize" => 80,
                        "code" => 59668
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 243
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M841.149 443.428h-658.298c-0.083 0-0.179 0.001-0.275 0.001-16.883 0-31.357-10.305-37.478-24.968l-0.099-0.269c-2.034-4.708-3.217-10.189-3.217-15.949 0-11.333 4.583-21.597 11.994-29.037l329.147-329.147c7.443-7.433 17.723-12.033 29.075-12.033s21.632 4.598 29.076 12.033v0l329.149 329.149c7.411 7.439 11.993 17.704 11.993 29.036 0 5.757-1.183 11.24-3.319 16.216l0.101-0.267c-6.22 14.932-20.695 25.236-37.577 25.236-0.097 0-0.193 0-0.29-0.001h0.015zM282.145 361.141h459.712l-229.855-229.855z",
                            "M512 992.009c-0.056 0-0.125 0-0.191 0-11.299 0-21.519-4.615-28.879-12.065l-329.153-329.153c-7.411-7.439-11.993-17.704-11.993-29.036 0-5.757 1.183-11.24 3.319-16.216l-0.101 0.267c6.22-14.932 20.695-25.236 37.577-25.236 0.097 0 0.193 0 0.29 0.001h658.283c0.083 0 0.179-0.001 0.275-0.001 16.883 0 31.357 10.305 37.478 24.968l0.099 0.269c2.034 4.708 3.217 10.189 3.217 15.949 0 11.333-4.583 21.597-11.994 29.037l-329.147 329.147c-7.363 7.453-17.584 12.068-28.883 12.068-0.067 0-0.135 0-0.202 0h0.010zM282.145 662.859l229.855 229.855 229.855-229.855z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "sort"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 54,
                        "id" => 163,
                        "name" => "sort",
                        "prevSize" => 80,
                        "code" => 59669
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 244
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M776.253 1023.989c-13.652-0.164-25.983-5.679-35.022-14.542l-462.434-462.434c-8.953-8.963-14.491-21.342-14.491-35.013s5.537-26.049 14.491-35.014v0l462.442-462.442c8.959-8.925 21.319-14.443 34.966-14.443 6.933 0 13.536 1.424 19.529 3.996l-0.322-0.122c17.981 7.491 30.389 24.922 30.389 45.252 0 0.116 0 0.233-0.002 0.348v-0.019 924.882c0 0.099 0.002 0.215 0.002 0.331 0 20.33-12.41 37.761-30.067 45.132l-0.324 0.119c-5.648 2.471-12.229 3.927-19.143 3.964h-0.014zM383.839 512l342.867 342.867v-685.734z",
                            "M247.747 1023.989c-27.215-0.367-49.181-22.332-49.548-49.511v-924.917c0-27.364 22.183-49.548 49.548-49.548s49.548 22.183 49.548 49.548v0 924.882c-0.367 27.215-22.332 49.181-49.511 49.548h-0.036z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "step-backward"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 29,
                        "id" => 164,
                        "name" => "step-backward",
                        "prevSize" => 80,
                        "code" => 59670
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 245
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M247.747 1023.989c-6.929-0.037-13.509-1.493-19.478-4.087l0.321 0.124c-17.981-7.491-30.389-24.922-30.389-45.252 0-0.116 0-0.231 0.002-0.348v0.019-924.882c0-0.099-0.002-0.215-0.002-0.331 0-20.33 12.41-37.761 30.067-45.132l0.324-0.119c5.67-2.449 12.271-3.874 19.206-3.874 13.649 0 26.007 5.518 34.967 14.444l462.441 462.441c8.953 8.963 14.491 21.342 14.491 35.013s-5.537 26.049-14.491 35.014v0l-462.442 462.442c-9.030 8.855-21.362 14.37-34.982 14.533h-0.031zM297.295 169.133v685.734l342.867-342.867z",
                            "M776.253 1023.989c-27.215-0.367-49.181-22.332-49.548-49.511v-924.917c0-27.364 22.183-49.548 49.548-49.548s49.548 22.183 49.548 49.548v0 924.882c-0.367 27.215-22.332 49.181-49.513 49.548h-0.036z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "step-forward"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 30,
                        "id" => 165,
                        "name" => "step-forward",
                        "prevSize" => 80,
                        "code" => 59671
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 246
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M325.818 465.455h-186.182c-77.119 0-139.636-62.518-139.636-139.636v0-186.182c0-77.119 62.518-139.636 139.636-139.636v0h186.182c77.119 0 139.636 62.518 139.636 139.636v0 186.182c0 77.119-62.518 139.636-139.636 139.636v0zM139.636 93.091c-25.567 0.345-46.201 20.979-46.545 46.512v186.215c0.345 25.567 20.979 46.201 46.512 46.545h186.215c25.567-0.345 46.201-20.979 46.545-46.512v-186.215c-0.345-25.567-20.979-46.201-46.512-46.545h-0.033z",
                            "M325.818 1024h-186.182c-77.119 0-139.636-62.518-139.636-139.636v0-186.182c0-77.119 62.518-139.636 139.636-139.636v0h186.182c77.119 0 139.636 62.518 139.636 139.636v0 186.182c0 77.119-62.518 139.636-139.636 139.636v0zM139.636 651.636c-25.567 0.345-46.201 20.979-46.545 46.512v186.215c0.345 25.567 20.979 46.201 46.512 46.545h186.215c25.567-0.345 46.201-20.979 46.545-46.512v-186.215c-0.345-25.567-20.979-46.201-46.512-46.545h-0.033z",
                            "M884.364 465.455h-186.182c-77.119 0-139.636-62.518-139.636-139.636v0-186.182c0-77.119 62.518-139.636 139.636-139.636v0h186.182c77.119 0 139.636 62.518 139.636 139.636v0 186.182c0 77.119-62.518 139.636-139.636 139.636v0zM698.182 93.091c-25.567 0.345-46.201 20.979-46.545 46.512v186.215c0.345 25.567 20.979 46.201 46.512 46.545h186.215c25.567-0.345 46.201-20.979 46.545-46.512v-186.215c-0.345-25.567-20.979-46.201-46.512-46.545h-0.033z",
                            "M884.364 1024h-186.182c-77.119 0-139.636-62.518-139.636-139.636v0-186.182c0-77.119 62.518-139.636 139.636-139.636v0h186.182c77.119 0 139.636 62.518 139.636 139.636v0 186.182c0 77.119-62.518 139.636-139.636 139.636v0zM698.182 651.636c-25.567 0.345-46.201 20.979-46.545 46.512v186.215c0.345 25.567 20.979 46.201 46.512 46.545h186.215c25.567-0.345 46.201-20.979 46.545-46.512v-186.215c-0.345-25.567-20.979-46.201-46.512-46.545h-0.033z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "th-large"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 34,
                        "id" => 166,
                        "name" => "th-large",
                        "prevSize" => 80,
                        "code" => 59672
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 247
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.983c-0.068 0-0.15 0-0.231 0-13.607 0-25.914-5.559-34.777-14.53l-396.378-396.378c-8.239-8.824-13.297-20.711-13.297-33.777 0-27.364 22.183-49.547 49.547-49.547 13.068 0 24.953 5.058 33.806 13.325l-0.029-0.026 361.361 361.361 361.361-361.361c8.824-8.239 20.711-13.297 33.777-13.297 27.364 0 49.547 22.183 49.547 49.547 0 13.068-5.058 24.953-13.325 33.806l0.026-0.029-396.374 396.374c-8.867 8.976-21.175 14.534-34.782 14.534-0.081 0-0.163 0-0.243 0h0.012z",
                            "M512 1023.983c-27.215-0.367-49.18-22.332-49.547-49.511v-924.907c0-27.364 22.183-49.547 49.547-49.547s49.547 22.183 49.547 49.547v0 924.872c-0.367 27.215-22.332 49.18-49.511 49.547h-0.036z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "arrow-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 37,
                        "id" => 167,
                        "name" => "arrow-down",
                        "prevSize" => 80,
                        "code" => 59673
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 248
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M445.937 957.921c-0.068 0-0.15 0-0.231 0-13.607 0-25.914-5.559-34.777-14.53l-396.378-396.378c-8.952-8.963-14.491-21.342-14.491-35.013s5.537-26.049 14.491-35.014v0l396.374-396.374c8.824-8.239 20.711-13.297 33.777-13.297 27.364 0 49.547 22.183 49.547 49.547 0 13.068-5.058 24.953-13.325 33.806l0.026-0.029-361.361 361.361 361.361 361.361c8.952 8.963 14.491 21.342 14.491 35.013s-5.537 26.049-14.491 35.014v0c-8.867 8.976-21.175 14.534-34.782 14.534-0.081 0-0.163 0-0.243 0h0.012z",
                            "M974.437 561.547h-924.872c-27.364 0-49.547-22.183-49.547-49.547s22.183-49.547 49.547-49.547v0h924.872c27.364 0 49.547 22.183 49.547 49.547s-22.183 49.547-49.547 49.547v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "arrow-left"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 40,
                        "id" => 168,
                        "name" => "arrow-left",
                        "prevSize" => 80,
                        "code" => 59674
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 249
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M578.063 957.921c-0.068 0-0.15 0-0.231 0-13.607 0-25.914-5.559-34.777-14.53l-0.005-0.005c-8.952-8.963-14.491-21.342-14.491-35.013s5.537-26.049 14.491-35.014v0l361.361-361.361-361.361-361.361c-8.239-8.824-13.297-20.711-13.297-33.777 0-27.364 22.183-49.547 49.547-49.547 13.068 0 24.953 5.058 33.806 13.325l-0.029-0.026 396.374 396.374c8.952 8.963 14.491 21.342 14.491 35.013s-5.537 26.049-14.491 35.014v0l-396.374 396.374c-8.867 8.976-21.175 14.534-34.782 14.534-0.081 0-0.163 0-0.243 0h0.012z",
                            "M974.437 561.547h-924.872c-27.364 0-49.547-22.183-49.547-49.547s22.183-49.547 49.547-49.547v0h924.872c27.364 0 49.547 22.183 49.547 49.547s-22.183 49.547-49.547 49.547v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "arrow-right"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 43,
                        "id" => 169,
                        "name" => "arrow-right",
                        "prevSize" => 80,
                        "code" => 59675
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 250
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M908.374 495.484c-0.068 0-0.15 0-0.231 0-13.607 0-25.914-5.559-34.777-14.53l-361.366-361.366-361.361 361.361c-8.824 8.239-20.711 13.297-33.777 13.297-27.364 0-49.547-22.183-49.547-49.547 0-13.068 5.058-24.953 13.325-33.806l-0.026 0.029 396.374-396.374c8.963-8.952 21.342-14.491 35.013-14.491s26.049 5.537 35.014 14.491v0l396.374 396.374c8.952 8.963 14.491 21.342 14.491 35.013s-5.537 26.049-14.491 35.014v0c-8.867 8.976-21.175 14.534-34.782 14.534-0.081 0-0.163 0-0.243 0h0.012z",
                            "M512 1023.983c-27.215-0.367-49.18-22.332-49.547-49.511v-924.907c0-27.364 22.183-49.547 49.547-49.547s49.547 22.183 49.547 49.547v0 924.872c-0.367 27.215-22.332 49.18-49.511 49.547h-0.036z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "arrow-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 216,
                        "id" => 170,
                        "name" => "arrow-up",
                        "prevSize" => 80,
                        "code" => 59676
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 251
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M974.438 561.547h-924.874c-27.364 0-49.547-22.183-49.547-49.547s22.183-49.547 49.547-49.547v0h924.874c27.364 0 49.547 22.183 49.547 49.547s-22.183 49.547-49.547 49.547v0z",
                            "M974.438 264.265h-924.874c-27.364 0-49.547-22.183-49.547-49.547s22.183-49.547 49.547-49.547v0h924.874c27.364 0 49.547 22.183 49.547 49.547s-22.183 49.547-49.547 49.547v0z",
                            "M974.438 858.829h-924.874c-27.364 0-49.547-22.183-49.547-49.547s22.183-49.547 49.547-49.547v0h924.874c27.364 0 49.547 22.183 49.547 49.547s-22.183 49.547-49.547 49.547v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "bars"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 215,
                        "id" => 171,
                        "name" => "bars",
                        "prevSize" => 80,
                        "code" => 59677
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 252
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M512 782.223c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-227.56-227.56c-7.095-7.599-11.451-17.835-11.451-29.087 0-23.564 19.103-42.667 42.667-42.667 11.253 0 21.488 4.356 29.112 11.475l-0.025-0.023 197.404 197.404 197.404-197.404c7.599-7.095 17.835-11.451 29.087-11.451 23.564 0 42.667 19.103 42.667 42.667 0 11.253-4.356 21.488-11.475 29.112l0.023-0.025-227.556 227.556c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z",
                            "M512 782.223c-23.436-0.316-42.351-19.231-42.667-42.636v-455.141c0-23.564 19.103-42.667 42.667-42.667s42.667 19.103 42.667 42.667v0 455.111c-0.316 23.436-19.231 42.351-42.636 42.667h-0.031z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "arrow-circle-down"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 50,
                        "id" => 172,
                        "name" => "arrow-circle-down",
                        "prevSize" => 80,
                        "code" => 59678
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 253
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M512 782.223c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-227.56-227.56c-7.709-7.719-12.479-18.379-12.479-30.151s4.768-22.432 12.479-30.152v0l227.556-227.556c7.599-7.095 17.835-11.451 29.087-11.451 23.564 0 42.667 19.103 42.667 42.667 0 11.253-4.356 21.488-11.475 29.112l0.023-0.025-197.404 197.404 197.404 197.404c7.709 7.719 12.479 18.379 12.479 30.151s-4.768 22.432-12.479 30.152v0c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z",
                            "M739.556 554.667h-455.111c-23.564 0-42.667-19.103-42.667-42.667s19.103-42.667 42.667-42.667v0h455.111c23.564 0 42.667 19.103 42.667 42.667s-19.103 42.667-42.667 42.667v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "arrow-circle-left"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 53,
                        "id" => 173,
                        "name" => "arrow-circle-left",
                        "prevSize" => 80,
                        "code" => 59679
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 254
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M512 782.223c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-0.004-0.004c-7.709-7.719-12.479-18.379-12.479-30.151s4.768-22.432 12.479-30.152v0l197.404-197.404-197.404-197.404c-7.095-7.599-11.451-17.835-11.451-29.087 0-23.564 19.103-42.667 42.667-42.667 11.253 0 21.488 4.356 29.112 11.475l-0.025-0.023 227.556 227.556c7.709 7.719 12.479 18.379 12.479 30.151s-4.768 22.432-12.479 30.152v0l-227.556 227.556c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z",
                            "M739.556 554.667h-455.111c-23.564 0-42.667-19.103-42.667-42.667s19.103-42.667 42.667-42.667v0h455.111c23.564 0 42.667 19.103 42.667 42.667s-19.103 42.667-42.667 42.667v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "arrow-circle-right"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 55,
                        "id" => 174,
                        "name" => "arrow-circle-right",
                        "prevSize" => 80,
                        "code" => 59680
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 255
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z",
                            "M739.556 554.667c-0.059 0-0.129 0-0.199 0-11.717 0-22.316-4.787-29.948-12.512l-197.408-197.408-197.404 197.404c-7.599 7.095-17.835 11.451-29.087 11.451-23.564 0-42.667-19.103-42.667-42.667 0-11.253 4.356-21.488 11.475-29.112l-0.023 0.025 227.556-227.556c7.719-7.709 18.379-12.479 30.151-12.479s22.432 4.768 30.152 12.479v0l227.556 227.556c7.709 7.719 12.479 18.379 12.479 30.151s-4.768 22.432-12.479 30.152v0c-7.636 7.729-18.235 12.516-29.952 12.516-0.069 0-0.14 0-0.209 0h0.011z",
                            "M512 782.223c-23.436-0.316-42.351-19.231-42.667-42.636v-455.141c0-23.564 19.103-42.667 42.667-42.667s42.667 19.103 42.667 42.667v0 455.111c-0.316 23.436-19.231 42.351-42.636 42.667h-0.031z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "arrow-circle-up"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 31,
                        "id" => 175,
                        "name" => "arrow-circle-up",
                        "prevSize" => 80,
                        "code" => 59681
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 256
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.999c-36.682-0.495-66.288-30.1-66.783-66.735v-623.353c0-36.883 29.9-66.783 66.783-66.783s66.783 29.9 66.783 66.783v0 623.305c-0.495 36.682-30.1 66.288-66.735 66.783h-0.048z",
                            "M512 178.087c-36.682-0.495-66.288-30.1-66.783-66.735v-44.569c0-36.883 29.9-66.783 66.783-66.783s66.783 29.9 66.783 66.783v0 44.521c-0.495 36.682-30.1 66.288-66.735 66.783h-0.048z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "info"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 33,
                        "id" => 176,
                        "name" => "info",
                        "prevSize" => 80,
                        "code" => 59683
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 257
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 782.223c-23.436-0.316-42.351-19.231-42.667-42.636v-284.475c0-23.564 19.103-42.667 42.667-42.667s42.667 19.103 42.667 42.667v0 284.444c-0.316 23.436-19.231 42.351-42.636 42.667h-0.031z",
                            "M512 355.556c-23.436-0.316-42.351-19.231-42.667-42.636v-28.475c0-23.564 19.103-42.667 42.667-42.667s42.667 19.103 42.667 42.667v0 28.444c-0.316 23.436-19.231 42.351-42.636 42.667h-0.031z",
                            "M512 1024c-282.769 0-512-229.231-512-512s229.231-512 512-512c282.769 0 512 229.231 512 512v0c0 282.769-229.231 512-512 512v0zM512 85.333c-235.641 0-426.667 191.025-426.667 426.667s191.025 426.667 426.667 426.667c235.641 0 426.667-191.025 426.667-426.667v0c0-235.641-191.025-426.667-426.667-426.667v0z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "info-circle"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 38,
                        "id" => 177,
                        "name" => "info-circle",
                        "prevSize" => 80,
                        "code" => 59684
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 258
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M980.714 497.352c-0.058 0-0.126 0-0.195 0-9.879 0-18.984-3.304-26.275-8.867l0.106 0.077-442.349-331.615-442.349 331.615c-7.252 5.487-16.423 8.788-26.365 8.788-24.268 0-43.942-19.674-43.942-43.942 0-14.326 6.856-27.052 17.467-35.074l0.11-0.080 468.714-351.536c7.252-5.487 16.423-8.788 26.365-8.788s19.113 3.301 26.475 8.868l-0.11-0.080 468.714 351.536c9.942 8.121 16.239 20.379 16.239 34.109 0 9.129-2.783 17.608-7.548 24.634l0.099-0.154c-7.474 11.934-20.322 19.902-35.068 20.503l-0.085 0.003z",
                            "M863.536 966.067h-703.071c-24.136-0.325-43.617-19.805-43.942-43.91v-556.629c0-24.268 19.674-43.942 43.942-43.942s43.942 19.674 43.942 43.942v0 512.656h615.187v-512.656c0-24.268 19.674-43.942 43.942-43.942s43.942 19.674 43.942 43.942v0 556.598c-0.325 24.136-19.805 43.617-43.91 43.942h-0.032z",
                            "M629.178 966.067c-24.136-0.325-43.617-19.805-43.942-43.91v-366.215h-146.474v366.183c0 24.268-19.674 43.942-43.942 43.942s-43.942-19.674-43.942-43.942v0-410.125c0.325-24.136 19.805-43.617 43.91-43.942h234.389c24.136 0.325 43.617 19.805 43.942 43.91v410.157c-0.325 24.136-19.805 43.617-43.91 43.942h-0.032z"
                        ],
                        "attrs" => [
                            [
                            ],
                            [
                            ],
                            [
                            ]
                        ],
                        "tags" => [
                            "home"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ],
                        [
                        ],
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 214,
                        "id" => 178,
                        "name" => "home",
                        "prevSize" => 80,
                        "code" => 59685
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 259
                ],
                [
                    "icon" => [
                        "paths" => [
                            "M512 1023.985c-282.573-0.249-511.548-229.377-511.548-511.985 0-282.761 229.224-511.985 511.985-511.985 136.039 0 259.684 53.057 351.374 139.607l-0.248-0.232c7.709 7.718 12.478 18.378 12.478 30.15s-4.768 22.431-12.478 30.151v0c-7.654 7.849-18.334 12.718-30.15 12.718s-22.495-4.869-30.142-12.709l-0.008-0.009c-76.159-71.371-178.876-115.207-291.832-115.207-235.949 0-427.224 191.274-427.224 427.224s191.274 427.224 427.224 427.224c235.845 0 427.056-191.106 427.224-426.913v-0.016c0-23.563 19.102-42.665 42.665-42.665s42.665 19.102 42.665 42.665v0c0 282.761-229.224 511.985-511.985 511.985v0z"
                        ],
                        "attrs" => [
                            [
                            ]
                        ],
                        "tags" => [
                            "spinner"
                        ],
                        "grid" => 16,
                        "isMulticolor" => false,
                        "isMulticolor2" => false
                    ],
                    "attrs" => [
                        [
                        ]
                    ],
                    "properties" => [
                        "order" => 44,
                        "id" => 179,
                        "name" => "spinner",
                        "prevSize" => 80,
                        "code" => 59686
                    ],
                    "setIdx" => 0,
                    "setId" => 1,
                    "iconIdx" => 260
                ]
            ],
            "height" => 1024,
            "metadata" => [
                "name" => "primeicons",
                "url" => "https://github.com/primefaces/primeicons",
                "designer" => "",
                "license" => "MIT",
                "licenseURL" => "https://opensource.org/licenses/MIT"
            ],
            "preferences" => [
                "showGlyphs" => true,
                "showQuickUse" => true,
                "showQuickUse2" => true,
                "showSVGs" => true,
                "fontPref" => [
                    "prefix" => "pi-",
                    "metadata" => [
                        "fontFamily" => "primeicons",
                        "majorVersion" => 1,
                        "minorVersion" => 0,
                        "copyright" => "PrimeTek Informatics",
                        "designer" => "",
                        "description" => "Icon Library for Prime UI Libraries",
                        "fontURL" => "https://github.com/primefaces/primeicons",
                        "license" => "MIT",
                        "licenseURL" => "https://opensource.org/licenses/MIT"
                    ],
                    "metrics" => [
                        "emSize" => 1024,
                        "baseline" => 6.25,
                        "whitespace" => 50
                    ],
                    "embed" => false,
                    "autoHost" => true,
                    "showSelector" => true,
                    "showMetrics" => true,
                    "showMetadata" => true,
                    "showVersion" => true,
                    "includeMetadata" => true
                ],
                "imagePref" => [
                    "prefix" => "pi-",
                    "png" => true,
                    "useClassSelector" => true,
                    "color" => 0,
                    "bgColor" => 16777215,
                    "classSelector" => ".icon",
                    "height" => 32,
                    "columns" => 16,
                    "margin" => 16,
                    "name" => "icomoon"
                ],
                "historySize" => 50,
                "showCodes" => true,
                "gridSize" => 16,
                "quickUsageToken" => [
                    "PrimeIcons" => "NTQ3YTNmNDcyNzcwZTk0M2UzYzcxODljOTAyZTYyODEjMSMxNjYyOTc4NjMyIyMjNTU3N2Y2ZGJiZTc3"
                ],
                "showGrid" => true
            ]
        ]);
    }
    private function getPhotos(): JsonResponse
    {
        return response()->json(
            [
                "data" => [
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria1.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria1s.jpg",
                        "alt" => "Description for Image 1",
                        "title" => "Title 1"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria2.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria2s.jpg",
                        "alt" => "Description for Image 2",
                        "title" => "Title 2"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria3.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria3s.jpg",
                        "alt" => "Description for Image 3",
                        "title" => "Title 3"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria4.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria4s.jpg",
                        "alt" => "Description for Image 4",
                        "title" => "Title 4"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria5.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria5s.jpg",
                        "alt" => "Description for Image 5",
                        "title" => "Title 5"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria6.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria6s.jpg",
                        "alt" => "Description for Image 6",
                        "title" => "Title 6"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria7.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria7s.jpg",
                        "alt" => "Description for Image 7",
                        "title" => "Title 7"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria8.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria8s.jpg",
                        "alt" => "Description for Image 8",
                        "title" => "Title 8"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria9.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria9s.jpg",
                        "alt" => "Description for Image 9",
                        "title" => "Title 9"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria10.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria10s.jpg",
                        "alt" => "Description for Image 10",
                        "title" => "Title 10"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria11.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria11s.jpg",
                        "alt" => "Description for Image 11",
                        "title" => "Title 11"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria12.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria12s.jpg",
                        "alt" => "Description for Image 12",
                        "title" => "Title 12"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria13.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria13s.jpg",
                        "alt" => "Description for Image 13",
                        "title" => "Title 13"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria14.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria14s.jpg",
                        "alt" => "Description for Image 14",
                        "title" => "Title 14"
                    ],
                    [
                        "itemImageSrc" => "demo/images/galleria/galleria15.jpg",
                        "thumbnailImageSrc" => "demo/images/galleria/galleria15s.jpg",
                        "alt" => "Description for Image 15",
                        "title" => "Title 15"
                    ]
                ]
            ]
        );
    }
    private function getProducts(): JsonResponse
    {
        return response()->json(
            [
                "data" => [
                    ["id" => "1000", "code" => "f230fh0g3", "name" => "Bamboo Watch", "description" => "Product Description", "image" => "bamboo-watch.jpg", "price" => 65, "category" => "Accessories", "quantity" => 24, "inventoryStatus" => "INSTOCK", "rating" => 5],
                    ["id" => "1001", "code" => "nvklal433", "name" => "Black Watch", "description" => "Product Description", "image" => "black-watch.jpg", "price" => 72, "category" => "Accessories", "quantity" => 61, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1002", "code" => "zz21cz3c1", "name" => "Blue Band", "description" => "Product Description", "image" => "blue-band.jpg", "price" => 79, "category" => "Fitness", "quantity" => 2, "inventoryStatus" => "LOWSTOCK", "rating" => 3],
                    ["id" => "1003", "code" => "244wgerg2", "name" => "Blue T-Shirt", "description" => "Product Description", "image" => "blue-t-shirt.jpg", "price" => 29, "category" => "Clothing", "quantity" => 25, "inventoryStatus" => "INSTOCK", "rating" => 5],
                    ["id" => "1004", "code" => "h456wer53", "name" => "Bracelet", "description" => "Product Description", "image" => "bracelet.jpg", "price" => 15, "category" => "Accessories", "quantity" => 73, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1005", "code" => "av2231fwg", "name" => "Brown Purse", "description" => "Product Description", "image" => "brown-purse.jpg", "price" => 120, "category" => "Accessories", "quantity" => 0, "inventoryStatus" => "OUTOFSTOCK", "rating" => 4],
                    ["id" => "1006", "code" => "bib36pfvm", "name" => "Chakra Bracelet", "description" => "Product Description", "image" => "chakra-bracelet.jpg", "price" => 32, "category" => "Accessories", "quantity" => 5, "inventoryStatus" => "LOWSTOCK", "rating" => 3],
                    ["id" => "1007", "code" => "mbvjkgip5", "name" => "Galaxy Earrings", "description" => "Product Description", "image" => "galaxy-earrings.jpg", "price" => 34, "category" => "Accessories", "quantity" => 23, "inventoryStatus" => "INSTOCK", "rating" => 5],
                    ["id" => "1008", "code" => "vbb124btr", "name" => "Game Controller", "description" => "Product Description", "image" => "game-controller.jpg", "price" => 99, "category" => "Electronics", "quantity" => 2, "inventoryStatus" => "LOWSTOCK", "rating" => 4],
                    ["id" => "1009", "code" => "cm230f032", "name" => "Gaming Set", "description" => "Product Description", "image" => "gaming-set.jpg", "price" => 299, "category" => "Electronics", "quantity" => 63, "inventoryStatus" => "INSTOCK", "rating" => 3],
                    ["id" => "1010", "code" => "plb34234v", "name" => "Gold Phone Case", "description" => "Product Description", "image" => "gold-phone-case.jpg", "price" => 24, "category" => "Accessories", "quantity" => 0, "inventoryStatus" => "OUTOFSTOCK", "rating" => 4],
                    ["id" => "1011", "code" => "4920nnc2d", "name" => "Green Earbuds", "description" => "Product Description", "image" => "green-earbuds.jpg", "price" => 89, "category" => "Electronics", "quantity" => 23, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1012", "code" => "250vm23cc", "name" => "Green T-Shirt", "description" => "Product Description", "image" => "green-t-shirt.jpg", "price" => 49, "category" => "Clothing", "quantity" => 74, "inventoryStatus" => "INSTOCK", "rating" => 5],
                    ["id" => "1013", "code" => "fldsmn31b", "name" => "Grey T-Shirt", "description" => "Product Description", "image" => "grey-t-shirt.jpg", "price" => 48, "category" => "Clothing", "quantity" => 0, "inventoryStatus" => "OUTOFSTOCK", "rating" => 3],
                    ["id" => "1014", "code" => "waas1x2as", "name" => "Headphones", "description" => "Product Description", "image" => "headphones.jpg", "price" => 175, "category" => "Electronics", "quantity" => 8, "inventoryStatus" => "LOWSTOCK", "rating" => 5],
                    ["id" => "1015", "code" => "vb34btbg5", "name" => "Light Green T-Shirt", "description" => "Product Description", "image" => "light-green-t-shirt.jpg", "price" => 49, "category" => "Clothing", "quantity" => 34, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1016", "code" => "k8l6j58jl", "name" => "Lime Band", "description" => "Product Description", "image" => "lime-band.jpg", "price" => 79, "category" => "Fitness", "quantity" => 12, "inventoryStatus" => "INSTOCK", "rating" => 3],
                    ["id" => "1017", "code" => "v435nn85n", "name" => "Mini Speakers", "description" => "Product Description", "image" => "mini-speakers.jpg", "price" => 85, "category" => "Clothing", "quantity" => 42, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1018", "code" => "09zx9c0zc", "name" => "Painted Phone Case", "description" => "Product Description", "image" => "painted-phone-case.jpg", "price" => 56, "category" => "Accessories", "quantity" => 41, "inventoryStatus" => "INSTOCK", "rating" => 5],
                    ["id" => "1019", "code" => "mnb5mb2m5", "name" => "Pink Band", "description" => "Product Description", "image" => "pink-band.jpg", "price" => 79, "category" => "Fitness", "quantity" => 63, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1020", "code" => "r23fwf2w3", "name" => "Pink Purse", "description" => "Product Description", "image" => "pink-purse.jpg", "price" => 110, "category" => "Accessories", "quantity" => 0, "inventoryStatus" => "OUTOFSTOCK", "rating" => 4],
                    ["id" => "1021", "code" => "pxpzczo23", "name" => "Purple Band", "description" => "Product Description", "image" => "purple-band.jpg", "price" => 79, "category" => "Fitness", "quantity" => 6, "inventoryStatus" => "LOWSTOCK", "rating" => 3],
                    ["id" => "1022", "code" => "2c42cb5cb", "name" => "Purple Gemstone Necklace", "description" => "Product Description", "image" => "purple-gemstone-necklace.jpg", "price" => 45, "category" => "Accessories", "quantity" => 62, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1023", "code" => "5k43kkk23", "name" => "Purple T-Shirt", "description" => "Product Description", "image" => "purple-t-shirt.jpg", "price" => 49, "category" => "Clothing", "quantity" => 2, "inventoryStatus" => "LOWSTOCK", "rating" => 5],
                    ["id" => "1024", "code" => "lm2tny2k4", "name" => "Shoes", "description" => "Product Description", "image" => "shoes.jpg", "price" => 64, "category" => "Clothing", "quantity" => 0, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1025", "code" => "nbm5mv45n", "name" => "Sneakers", "description" => "Product Description", "image" => "sneakers.jpg", "price" => 78, "category" => "Clothing", "quantity" => 52, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1026", "code" => "zx23zc42c", "name" => "Teal T-Shirt", "description" => "Product Description", "image" => "teal-t-shirt.jpg", "price" => 49, "category" => "Clothing", "quantity" => 3, "inventoryStatus" => "LOWSTOCK", "rating" => 3],
                    ["id" => "1027", "code" => "acvx872gc", "name" => "Yellow Earbuds", "description" => "Product Description", "image" => "yellow-earbuds.jpg", "price" => 89, "category" => "Electronics", "quantity" => 35, "inventoryStatus" => "INSTOCK", "rating" => 3],
                    ["id" => "1028", "code" => "tx125ck42", "name" => "Yoga Mat", "description" => "Product Description", "image" => "yoga-mat.jpg", "price" => 20, "category" => "Fitness", "quantity" => 15, "inventoryStatus" => "INSTOCK", "rating" => 5],
                    ["id" => "1029", "code" => "gwuby345v", "name" => "Yoga Set", "description" => "Product Description", "image" => "yoga-set.jpg", "price" => 20, "category" => "Fitness", "quantity" => 25, "inventoryStatus" => "INSTOCK", "rating" => 8]
                ]
            ]
        );
    }
    private function getSmallOrders(): JsonResponse
    {
        return response()->json([
                "data" => [
                    [
                        "id" => "1000",
                        "code" => "f230fh0g3",
                        "name" => "Bamboo Watch",
                        "description" => "Product Description",
                        "image" => "bamboo-watch.jpg",
                        "price" => 65,
                        "category" => "Accessories",
                        "quantity" => 24,
                        "inventoryStatus" => "INSTOCK",
                        "rating" => 5,
                        "orders" => [
                            [
                                "id" => "1000",
                                "productCode" => "f230fh0g3",
                                "date" => "2020-09-13",
                                "amount" => 65,
                                "quantity" => 1,
                                "customer" => "David James",
                                "status" => "PENDING"
                            ],
                            [
                                "id" => "1001",
                                "productCode" => "f230fh0g3",
                                "date" => "2020-05-14",
                                "amount" => 130,
                                "quantity" => 2,
                                "customer" => "Leon Rodrigues",
                                "status" => "DELIVERED"
                            ],
                            [
                                "id" => "1002",
                                "productCode" => "f230fh0g3",
                                "date" => "2019-01-04",
                                "amount" => 65,
                                "quantity" => 1,
                                "customer" => "Juan Alejandro",
                                "status" => "RETURNED"
                            ],
                            [
                                "id" => "1003",
                                "productCode" => "f230fh0g3",
                                "date" => "2020-09-13",
                                "amount" => 195,
                                "quantity" => 3,
                                "customer" => "Claire Morrow",
                                "status" => "CANCELLED"
                            ]
                        ]
                    ],
                    [
                        "id" => "1001",
                        "code" => "nvklal433",
                        "name" => "Black Watch",
                        "description" => "Product Description",
                        "image" => "black-watch.jpg",
                        "price" => 72,
                        "category" => "Accessories",
                        "quantity" => 61,
                        "inventoryStatus" => "INSTOCK",
                        "rating" => 4,
                        "orders" => [
                            [
                                "id" => "2000",
                                "productCode" => "nvklal433",
                                "date" => "2020-05-14",
                                "amount" => 72,
                                "quantity" => 1,
                                "customer" => "Maisha Jefferson",
                                "status" => "DELIVERED"
                            ],
                            [
                                "id" => "2001",
                                "productCode" => "nvklal433",
                                "date" => "2020-02-28",
                                "amount" => 144,
                                "quantity" => 2,
                                "customer" => "Octavia Murillo",
                                "status" => "PENDING"
                            ]
                        ]
                    ],
                    [
                        "id" => "1002",
                        "code" => "zz21cz3c1",
                        "name" => "Blue Band",
                        "description" => "Product Description",
                        "image" => "blue-band.jpg",
                        "price" => 79,
                        "category" => "Fitness",
                        "quantity" => 2,
                        "inventoryStatus" => "LOWSTOCK",
                        "rating" => 3,
                        "orders" => [
                            [
                                "id" => "3000",
                                "productCode" => "zz21cz3c1",
                                "date" => "2020-07-05",
                                "amount" => 79,
                                "quantity" => 1,
                                "customer" => "Stacey Leja",
                                "status" => "DELIVERED"
                            ],
                            [
                                "id" => "3001",
                                "productCode" => "zz21cz3c1",
                                "date" => "2020-02-06",
                                "amount" => 79,
                                "quantity" => 1,
                                "customer" => "Ashley Wickens",
                                "status" => "DELIVERED"
                            ]
                        ]
                    ],
                    [
                        "id" => "1003",
                        "code" => "244wgerg2",
                        "name" => "Blue T-Shirt",
                        "description" => "Product Description",
                        "image" => "blue-t-shirt.jpg",
                        "price" => 29,
                        "category" => "Clothing",
                        "quantity" => 25,
                        "inventoryStatus" => "INSTOCK",
                        "rating" => 5,
                        "orders" => [
                        ]
                    ],
                    [
                        "id" => "1004",
                        "code" => "h456wer53",
                        "name" => "Bracelet",
                        "description" => "Product Description",
                        "image" => "bracelet.jpg",
                        "price" => 15,
                        "category" => "Accessories",
                        "quantity" => 73,
                        "inventoryStatus" => "INSTOCK",
                        "rating" => 4,
                        "orders" => [
                            [
                                "id" => "5000",
                                "productCode" => "h456wer53",
                                "date" => "2020-09-05",
                                "amount" => 60,
                                "quantity" => 4,
                                "customer" => "Mayumi Misaki",
                                "status" => "PENDING"
                            ],
                            [
                                "id" => "5001",
                                "productCode" => "h456wer53",
                                "date" => "2019-04-16",
                                "amount" => 2,
                                "quantity" => 30,
                                "customer" => "Francesco Salvatore",
                                "status" => "DELIVERED"
                            ]
                        ]
                    ],
                    [
                        "id" => "1005",
                        "code" => "av2231fwg",
                        "name" => "Brown Purse",
                        "description" => "Product Description",
                        "image" => "brown-purse.jpg",
                        "price" => 120,
                        "category" => "Accessories",
                        "quantity" => 0,
                        "inventoryStatus" => "OUTOFSTOCK",
                        "rating" => 4,
                        "orders" => [
                            [
                                "id" => "6000",
                                "productCode" => "av2231fwg",
                                "date" => "2020-01-25",
                                "amount" => 120,
                                "quantity" => 1,
                                "customer" => "Isabel Sinclair",
                                "status" => "RETURNED"
                            ],
                            [
                                "id" => "6001",
                                "productCode" => "av2231fwg",
                                "date" => "2019-03-12",
                                "amount" => 240,
                                "quantity" => 2,
                                "customer" => "Lionel Clifford",
                                "status" => "DELIVERED"
                            ],
                            [
                                "id" => "6002",
                                "productCode" => "av2231fwg",
                                "date" => "2019-05-05",
                                "amount" => 120,
                                "quantity" => 1,
                                "customer" => "Cody Chavez",
                                "status" => "DELIVERED"
                            ]
                        ]
                    ],
                    [
                        "id" => "1006",
                        "code" => "bib36pfvm",
                        "name" => "Chakra Bracelet",
                        "description" => "Product Description",
                        "image" => "chakra-bracelet.jpg",
                        "price" => 32,
                        "category" => "Accessories",
                        "quantity" => 5,
                        "inventoryStatus" => "LOWSTOCK",
                        "rating" => 3,
                        "orders" => [
                            [
                                "id" => "7000",
                                "productCode" => "bib36pfvm",
                                "date" => "2020-02-24",
                                "amount" => 32,
                                "quantity" => 1,
                                "customer" => "Arvin Darci",
                                "status" => "DELIVERED"
                            ],
                            [
                                "id" => "7001",
                                "productCode" => "bib36pfvm",
                                "date" => "2020-01-14",
                                "amount" => 64,
                                "quantity" => 2,
                                "customer" => "Izzy Jones",
                                "status" => "PENDING"
                            ]
                        ]
                    ],
                    [
                        "id" => "1007",
                        "code" => "mbvjkgip5",
                        "name" => "Galaxy Earrings",
                        "description" => "Product Description",
                        "image" => "galaxy-earrings.jpg",
                        "price" => 34,
                        "category" => "Accessories",
                        "quantity" => 23,
                        "inventoryStatus" => "INSTOCK",
                        "rating" => 5,
                        "orders" => [
                            [
                                "id" => "8000",
                                "productCode" => "mbvjkgip5",
                                "date" => "2020-06-19",
                                "amount" => 34,
                                "quantity" => 1,
                                "customer" => "Jennifer Smith",
                                "status" => "DELIVERED"
                            ]
                        ]
                    ],
                    [
                        "id" => "1008",
                        "code" => "vbb124btr",
                        "name" => "Game Controller",
                        "description" => "Product Description",
                        "image" => "game-controller.jpg",
                        "price" => 99,
                        "category" => "Electronics",
                        "quantity" => 2,
                        "inventoryStatus" => "LOWSTOCK",
                        "rating" => 4,
                        "orders" => [
                            [
                                "id" => "9000",
                                "productCode" => "vbb124btr",
                                "date" => "2020-01-05",
                                "amount" => 99,
                                "quantity" => 1,
                                "customer" => "Jeanfrancois David",
                                "status" => "DELIVERED"
                            ],
                            [
                                "id" => "9001",
                                "productCode" => "vbb124btr",
                                "date" => "2020-01-19",
                                "amount" => 198,
                                "quantity" => 2,
                                "customer" => "Ivar Greenwood",
                                "status" => "RETURNED"
                            ]
                        ]
                    ],
                    [
                        "id" => "1009",
                        "code" => "cm230f032",
                        "name" => "Gaming Set",
                        "description" => "Product Description",
                        "image" => "gaming-set.jpg",
                        "price" => 299,
                        "category" => "Electronics",
                        "quantity" => 63,
                        "inventoryStatus" => "INSTOCK",
                        "rating" => 3,
                        "orders" => [
                            [
                                "id" => "10000",
                                "productCode" => "cm230f032",
                                "date" => "2020-06-24",
                                "amount" => 299,
                                "quantity" => 1,
                                "customer" => "Kadeem Mujtaba",
                                "status" => "PENDING"
                            ],
                            [
                                "id" => "10001",
                                "productCode" => "cm230f032",
                                "date" => "2020-05-11",
                                "amount" => 299,
                                "quantity" => 1,
                                "customer" => "Ashley Wickens",
                                "status" => "DELIVERED"
                            ],
                            [
                                "id" => "10002",
                                "productCode" => "cm230f032",
                                "date" => "2019-02-07",
                                "amount" => 299,
                                "quantity" => 1,
                                "customer" => "Julie Johnson",
                                "status" => "DELIVERED"
                            ],
                            [
                                "id" => "10003",
                                "productCode" => "cm230f032",
                                "date" => "2020-04-26",
                                "amount" => 299,
                                "quantity" => 1,
                                "customer" => "Tony Costa",
                                "status" => "CANCELLED"
                            ]
                        ]
                    ]
                ]
            ]
        );
    }
    private function getSmallProducts(): JsonResponse
    {
        return response()->json(
            [
                "data" => [
                    ["id" => "1000", "code" => "f230fh0g3", "name" => "Bamboo Watch", "description" => "Product Description", "image" => "bamboo-watch.jpg", "price" => 65, "category" => "Accessories", "quantity" => 24, "inventoryStatus" => "INSTOCK", "rating" => 5],
                    ["id" => "1001", "code" => "nvklal433", "name" => "Black Watch", "description" => "Product Description", "image" => "black-watch.jpg", "price" => 72, "category" => "Accessories", "quantity" => 61, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1002", "code" => "zz21cz3c1", "name" => "Blue Band", "description" => "Product Description", "image" => "blue-band.jpg", "price" => 79, "category" => "Fitness", "quantity" => 2, "inventoryStatus" => "LOWSTOCK", "rating" => 3],
                    ["id" => "1003", "code" => "244wgerg2", "name" => "Blue T-Shirt", "description" => "Product Description", "image" => "blue-t-shirt.jpg", "price" => 29, "category" => "Clothing", "quantity" => 25, "inventoryStatus" => "INSTOCK", "rating" => 5],
                    ["id" => "1004", "code" => "h456wer53", "name" => "Bracelet", "description" => "Product Description", "image" => "bracelet.jpg", "price" => 15, "category" => "Accessories", "quantity" => 73, "inventoryStatus" => "INSTOCK", "rating" => 4],
                    ["id" => "1005", "code" => "av2231fwg", "name" => "Brown Purse", "description" => "Product Description", "image" => "brown-purse.jpg", "price" => 120, "category" => "Accessories", "quantity" => 0, "inventoryStatus" => "OUTOFSTOCK", "rating" => 4],
                    ["id" => "1006", "code" => "bib36pfvm", "name" => "Chakra Bracelet", "description" => "Product Description", "image" => "chakra-bracelet.jpg", "price" => 32, "category" => "Accessories", "quantity" => 5, "inventoryStatus" => "LOWSTOCK", "rating" => 3],
                    ["id" => "1007", "code" => "mbvjkgip5", "name" => "Galaxy Earrings", "description" => "Product Description", "image" => "galaxy-earrings.jpg", "price" => 34, "category" => "Accessories", "quantity" => 23, "inventoryStatus" => "INSTOCK", "rating" => 5],
                    ["id" => "1008", "code" => "vbb124btr", "name" => "Game Controller", "description" => "Product Description", "image" => "game-controller.jpg", "price" => 99, "category" => "Electronics", "quantity" => 2, "inventoryStatus" => "LOWSTOCK", "rating" => 4],
                    ["id" => "1009", "code" => "cm230f032", "name" => "Gaming Set", "description" => "Product Description", "image" => "gaming-set.jpg", "price" => 299, "category" => "Electronics", "quantity" => 63, "inventoryStatus" => "INSTOCK", "rating" => 3]
                ]
            ]
        );
    }
    private function getTreeNodes(): JsonResponse
    {
        return response()->json([
            "root" => [
                [
                    "key" => "0",
                    "label" => "Documents",
                    "data" => "Documents Folder",
                    "icon" => "pi pi-fw pi-inbox",
                    "children" => [
                        [
                            "key" => "0-0",
                            "label" => "Work",
                            "data" => "Work Folder",
                            "icon" => "pi pi-fw pi-cog",
                            "children" => [
                                [
                                    "key" => "0-0-0",
                                    "label" => "Expenses.doc",
                                    "icon" => "pi pi-fw pi-file",
                                    "data" => "Expenses Document"
                                ],
                                [
                                    "key" => "0-0-1",
                                    "label" => "Resume.doc",
                                    "icon" => "pi pi-fw pi-file",
                                    "data" => "Resume Document"
                                ]
                            ]
                        ],
                        [
                            "key" => "0-1",
                            "label" => "Home",
                            "data" => "Home Folder",
                            "icon" => "pi pi-fw pi-home",
                            "children" => [
                                [
                                    "key" => "0-1-0",
                                    "label" => "Invoices.txt",
                                    "icon" => "pi pi-fw pi-file",
                                    "data" => "Invoices for this month"
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "key" => "1",
                    "label" => "Events",
                    "data" => "Events Folder",
                    "icon" => "pi pi-fw pi-calendar",
                    "children" => [
                        [
                            "key" => "1-0",
                            "label" => "Meeting",
                            "icon" => "pi pi-fw pi-calendar-plus",
                            "data" => "Meeting"
                        ],
                        [
                            "key" => "1-1",
                            "label" => "Product Launch",
                            "icon" => "pi pi-fw pi-calendar-plus",
                            "data" => "Product Launch"
                        ],
                        [
                            "key" => "1-2",
                            "label" => "Report Review",
                            "icon" => "pi pi-fw pi-calendar-plus",
                            "data" => "Report Review"
                        ]
                    ]
                ],
                [
                    "key" => "2",
                    "label" => "Movies",
                    "data" => "Movies Folder",
                    "icon" => "pi pi-fw pi-star",
                    "children" => [
                        [
                            "key" => "2-0",
                            "icon" => "pi pi-fw pi-star",
                            "label" => "Al Pacino",
                            "data" => "Pacino Movies",
                            "children" => [
                                [
                                    "key" => "2-0-0",
                                    "label" => "Scarface",
                                    "icon" => "pi pi-fw pi-video",
                                    "data" => "Scarface Movie"
                                ],
                                [
                                    "key" => "2-0-1",
                                    "label" => "Serpico",
                                    "icon" => "pi pi-fw pi-video",
                                    "data" => "Serpico Movie"
                                ]
                            ]
                        ],
                        [
                            "key" => "2-1",
                            "label" => "Robert De Niro",
                            "icon" => "pi pi-fw pi-star",
                            "data" => "De Niro Movies",
                            "children" => [
                                [
                                    "key" => "2-1-0",
                                    "label" => "Goodfellas",
                                    "icon" => "pi pi-fw pi-video",
                                    "data" => "Goodfellas Movie"
                                ],
                                [
                                    "key" => "2-1-1",
                                    "label" => "Untouchables",
                                    "icon" => "pi pi-fw pi-video",
                                    "data" => "Untouchables Movie"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]);
    }
    private function getTreeTableNodes(): JsonResponse
    {
        return response()->json([
            "root" => [
                [
                    "key" => "0",
                    "data" => [
                        "name" => "Applications",
                        "size" => "100kb",
                        "type" => "Folder"
                    ],
                    "children" => [
                        [
                            "key" => "0-0",
                            "data" => [
                                "name" => "React",
                                "size" => "25kb",
                                "type" => "Folder"
                            ],
                            "children" => [
                                [
                                    "key" => "0-0-0",
                                    "data" => [
                                        "name" => "react.app",
                                        "size" => "10kb",
                                        "type" => "Application"
                                    ]
                                ],
                                [
                                    "key" => "0-0-1",
                                    "data" => [
                                        "name" => "native.app",
                                        "size" => "10kb",
                                        "type" => "Application"
                                    ]
                                ],
                                [
                                    "key" => "0-0-2",
                                    "data" => [
                                        "name" => "mobile.app",
                                        "size" => "5kb",
                                        "type" => "Application"
                                    ]
                                ]
                            ]
                        ],
                        [
                            "key" => "0-1",
                            "data" => [
                                "name" => "editor.app",
                                "size" => "25kb",
                                "type" => "Application"
                            ]
                        ],
                        [
                            "key" => "0-2",
                            "data" => [
                                "name" => "settings.app",
                                "size" => "50kb",
                                "type" => "Application"
                            ]
                        ]
                    ]
                ],
                [
                    "key" => "1",
                    "data" => [
                        "name" => "Cloud",
                        "size" => "20kb",
                        "type" => "Folder"
                    ],
                    "children" => [
                        [
                            "key" => "1-0",
                            "data" => [
                                "name" => "backup-1.zip",
                                "size" => "10kb",
                                "type" => "Zip"
                            ]
                        ],
                        [
                            "key" => "1-1",
                            "data" => [
                                "name" => "backup-2.zip",
                                "size" => "10kb",
                                "type" => "Zip"
                            ]
                        ]
                    ]
                ],
                [
                    "key" => "2",
                    "data" => [
                        "name" => "Desktop",
                        "size" => "150kb",
                        "type" => "Folder"
                    ],
                    "children" => [
                        [
                            "key" => "2-0",
                            "data" => [
                                "name" => "note-meeting.txt",
                                "size" => "50kb",
                                "type" => "Text"
                            ]
                        ],
                        [
                            "key" => "2-1",
                            "data" => [
                                "name" => "note-todo.txt",
                                "size" => "100kb",
                                "type" => "Text"
                            ]
                        ]
                    ]
                ],
                [
                    "key" => "3",
                    "data" => [
                        "name" => "Documents",
                        "size" => "75kb",
                        "type" => "Folder"
                    ],
                    "children" => [
                        [
                            "key" => "3-0",
                            "data" => [
                                "name" => "Work",
                                "size" => "55kb",
                                "type" => "Folder"
                            ],
                            "children" => [
                                [
                                    "key" => "3-0-0",
                                    "data" => [
                                        "name" => "Expenses.doc",
                                        "size" => "30kb",
                                        "type" => "Document"
                                    ]
                                ],
                                [
                                    "key" => "3-0-1",
                                    "data" => [
                                        "name" => "Resume.doc",
                                        "size" => "25kb",
                                        "type" => "Resume"
                                    ]
                                ]
                            ]
                        ],
                        [
                            "key" => "3-1",
                            "data" => [
                                "name" => "Home",
                                "size" => "20kb",
                                "type" => "Folder"
                            ],
                            "children" => [
                                [
                                    "key" => "3-1-0",
                                    "data" => [
                                        "name" => "Invoices",
                                        "size" => "20kb",
                                        "type" => "Text"
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "key" => "4",
                    "data" => [
                        "name" => "Downloads",
                        "size" => "25kb",
                        "type" => "Folder"
                    ],
                    "children" => [
                        [
                            "key" => "4-0",
                            "data" => [
                                "name" => "Spanish",
                                "size" => "10kb",
                                "type" => "Folder"
                            ],
                            "children" => [
                                [
                                    "key" => "4-0-0",
                                    "data" => [
                                        "name" => "tutorial-a1.txt",
                                        "size" => "5kb",
                                        "type" => "Text"
                                    ]
                                ],
                                [
                                    "key" => "4-0-1",
                                    "data" => [
                                        "name" => "tutorial-a2.txt",
                                        "size" => "5kb",
                                        "type" => "Text"
                                    ]
                                ]
                            ]
                        ],
                        [
                            "key" => "4-1",
                            "data" => [
                                "name" => "Travel",
                                "size" => "15kb",
                                "type" => "Text"
                            ],
                            "children" => [
                                [
                                    "key" => "4-1-0",
                                    "data" => [
                                        "name" => "Hotel.pdf",
                                        "size" => "10kb",
                                        "type" => "PDF"
                                    ]
                                ],
                                [
                                    "key" => "4-1-1",
                                    "data" => [
                                        "name" => "Flight.pdf",
                                        "size" => "5kb",
                                        "type" => "PDF"
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "key" => "5",
                    "data" => [
                        "name" => "Main",
                        "size" => "50kb",
                        "type" => "Folder"
                    ],
                    "children" => [
                        [
                            "key" => "5-0",
                            "data" => [
                                "name" => "bin",
                                "size" => "50kb",
                                "type" => "Link"
                            ]
                        ],
                        [
                            "key" => "5-1",
                            "data" => [
                                "name" => "etc",
                                "size" => "100kb",
                                "type" => "Link"
                            ]
                        ],
                        [
                            "key" => "5-2",
                            "data" => [
                                "name" => "var",
                                "size" => "100kb",
                                "type" => "Link"
                            ]
                        ]
                    ]
                ],
                [
                    "key" => "6",
                    "data" => [
                        "name" => "Other",
                        "size" => "5kb",
                        "type" => "Folder"
                    ],
                    "children" => [
                        [
                            "key" => "6-0",
                            "data" => [
                                "name" => "todo.txt",
                                "size" => "3kb",
                                "type" => "Text"
                            ]
                        ],
                        [
                            "key" => "6-1",
                            "data" => [
                                "name" => "logo.png",
                                "size" => "2kb",
                                "type" => "Picture"
                            ]
                        ]
                    ]
                ],
                [
                    "key" => "7",
                    "data" => [
                        "name" => "Pictures",
                        "size" => "150kb",
                        "type" => "Folder"
                    ],
                    "children" => [
                        [
                            "key" => "7-0",
                            "data" => [
                                "name" => "barcelona.jpg",
                                "size" => "90kb",
                                "type" => "Picture"
                            ]
                        ],
                        [
                            "key" => "7-1",
                            "data" => [
                                "name" => "primeng.png",
                                "size" => "30kb",
                                "type" => "Picture"
                            ]
                        ],
                        [
                            "key" => "7-2",
                            "data" => [
                                "name" => "prime.jpg",
                                "size" => "30kb",
                                "type" => "Picture"
                            ]
                        ]
                    ]
                ],
                [
                    "key" => "8",
                    "data" => [
                        "name" => "Videos",
                        "size" => "1500kb",
                        "type" => "Folder"
                    ],
                    "children" => [
                        [
                            "key" => "8-0",
                            "data" => [
                                "name" => "primefaces.mkv",
                                "size" => "1000kb",
                                "type" => "Video"
                            ]
                        ],
                        [
                            "key" => "8-1",
                            "data" => [
                                "name" => "intro.avi",
                                "size" => "500kb",
                                "type" => "Video"
                            ]
                        ]
                    ]
                ]
            ]
        ]);
    }
}
