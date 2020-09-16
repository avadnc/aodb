<?php
/* Copyright (C) 2001-2005 Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004-2015 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2005-2012 Regis Houssin        <regis.houssin@inodbox.com>
 * Copyright (C) 2015      Jean-François Ferry    <jfefe@aternatik.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 *    \file       aodb/aodbindex.php
 *    \ingroup    aodb
 *    \brief      Home page of aodb top menu
 */

// Load Dolibarr environment
$res = 0;
// Try main.inc.php into web root known defined into CONTEXT_DOCUMENT_ROOT (not always defined)
if (!$res && !empty($_SERVER["CONTEXT_DOCUMENT_ROOT"])) {
    $res = @include $_SERVER["CONTEXT_DOCUMENT_ROOT"] . "/main.inc.php";
}

// Try main.inc.php into web root detected using web root calculated from SCRIPT_FILENAME
$tmp = empty($_SERVER['SCRIPT_FILENAME']) ? '' : $_SERVER['SCRIPT_FILENAME'];
$tmp2 = realpath(__FILE__);
$i = strlen($tmp) - 1;
$j = strlen($tmp2) - 1;
while ($i > 0 && $j > 0 && isset($tmp[$i]) && isset($tmp2[$j]) && $tmp[$i] == $tmp2[$j]) {$i--;
    $j--;}
if (!$res && $i > 0 && file_exists(substr($tmp, 0, ($i + 1)) . "/main.inc.php")) {
    $res = @include substr($tmp, 0, ($i + 1)) . "/main.inc.php";
}

if (!$res && $i > 0 && file_exists(dirname(substr($tmp, 0, ($i + 1))) . "/main.inc.php")) {
    $res = @include dirname(substr($tmp, 0, ($i + 1))) . "/main.inc.php";
}

// Try main.inc.php using relative path
if (!$res && file_exists("../main.inc.php")) {
    $res = @include "../main.inc.php";
}

if (!$res && file_exists("../../main.inc.php")) {
    $res = @include "../../main.inc.php";
}

if (!$res && file_exists("../../../main.inc.php")) {
    $res = @include "../../../main.inc.php";
}

if (!$res) {
    die("Include of main fails");
}

dol_include_once('/aodb/vendor/autoload.php');

class Flights
{

	public $consulta;

	public function getFlights()
    {

        $cliente = new GuzzleHttp\Client();

        $respuesta = $cliente->get('http://api.aviationstack.com/v1/flights',[
			'query' => $this->consulta
		] );

        $respuesta = $respuesta->getBody()->getContents();

		$respuesta = json_decode($respuesta);

		echo json_encode($respuesta->data);

    }
}



if (isset($_POST['query'])){
	$vuelos = new Flights();
	$vuelos->consulta = $_POST['query'];
	$vuelos->getFlights();
}


// $cliente = new GuzzleHttp\Client();

// $respuesta = $cliente->get('http://api.aviationstack.com/v1/flights', [
//     'query' => array(
//     'access_key' => '3da615960c9e7d65ecdc6637c15af32b',
//     'arr_iata' => 'BPS'
//     )
// ]);

// $respuesta = $respuesta->getBody()->getContents();
// $respuesta = json_decode($respuesta);

// $data = $respuesta->data;

// $lineas = count($data);

// foreach($data as $val ){

//         $sql = "INSERT INTO ".MAIN_DB_PREFIX."aviationstack (flight_date,flight_status,departure_airport,departure_timezone,departure_iata,departure_icao,departure_terninal,
//         departure_gate,departure_delay,departure_scheduled,departure_estimated,departure_actual,departure_estimated_runway,departure_actual_runway,arrival_airport,        arrival_timezone,arrival_iata,arrival_icao,arrival_terminal,arrival_gate,arrival_baggage,arrival_delay,arrival_scheduled,arrival_estimated,arrival_actual,    arrival_estimated_runway,arrival_actual_runway,airline_name,airline_iata,airline_icao,flight_number,flight_iata,flight_icao,aircraft_registration,aircraft_iata,aircraft_icao,aircraft_icao24) values ('".$val->flight_date."','".$val->flight_status."','".$val->departure->airport."','".$val->departure->timezone."','".$val->departure->iata."','".$val->departure->icao."','".$val->departure->terninal."','".$val->departure->gate."','".$val->departure->delay."','".$val->departure->scheduled."','".$val->departure->estimated."','".$val->departure->actual."','".$val->departure->estimated_runway."','".$val->departure->actual_runway."','".$val->arrival->airport."','".$val->arrival->timezone."','".$val->arrival->iata."','".$val->arrival->icao."','".$val->arriva->terminal."','".$val->arrival->gate."','".$val->arrival->baggage."','".$val->arrival->delay."','".$val->arrival->scheduled."','".$val->arrival->estimated."','".$val->arrival->actual."','".$val->arrival->estimated_runway."','".$val->arrival->actual_runway."','".$val->airline->name."','".$val->airline->iata."','".$val->airline->icao."','".$val->flight->number."','".$val->flight->iata."','".$val->flight->icao."','".$val->aircraft->registration."','".$val->aircraft->iata."','".$val->aircraft->icao."','".$val->aircraft->icao24."');";

//         $db->begin();
//         $db->query($sql);
//         $db->commit();
// }
// exit;

