<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Depeloper;
use App\Models\Director;
use App\Models\Gconsole;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Publisher;
use App\Models\Saga;
use App\Models\User;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GameImportController extends Controller
{
	public function index(Request $request)
	{
		
	}

	public function store(Request $request)
	{
		$data = ['status' => 'Unauthorized, error 503'];

		// Check if the file contains csv extensión.
		$fileContent = file_get_contents($request->file('file'));

			$user = User::select("role")->where("role", "admin")->get()[0];
			if ($user['role']) {
				if (isset($request->file)) {
					$tmp =explode(",", $fileContent);
					$array = array_map("str_getcsv", $tmp);
					$array = array_slice($array, 0, -1);
					$q = 0;
					$status_controller = ["success" => 0, "warnings" => [], "errors" => [], 'system_errors' => []];
					$interesting_index = ["name" => null, "genres_id" => null, "developer_id" => null, "director_id" => null, "gconsoles_id" => null, "date" => null, "saga" => null, "pegi" => null, "publisher_id" => null, "page_reference" => null, "summary" => null, "image" => null];
					foreach ($array as $key => $element) {
						if ($q == 0) {
							// search for certain column names
							$interesting_index["name"] = array_search("Game", $element);
                            $interesting_index["genres_id"] = array_search("Genre", $element);
							$interesting_index["developer_id"] = array_search("Developer", $element);
							$interesting_index["director_id"] = array_search("Director", $element);
                            $interesting_index["gconsoles_id"] = array_search("Gconsole", $element);
							$interesting_index["date"] = array_search("Date", $element);
                            $interesting_index["saga"] = array_search("Series", $element);
							$interesting_index["pegi"] = array_search("Pegi", $element);
                            $interesting_index["publisher_id"] = array_search("Publisher", $element);
                            $interesting_index["page_reference"] = array_search("Wikipedia Profile", $element);
							$interesting_index["summary"] = array_search("Sumary", $element);
							$interesting_index["image"] = array_search("Image", $element);
							print_r($interesting_index);
						} else {
							$line_status = ['id' => "$key", 'error' => [], "warning" => []];
							if (empty($element[$interesting_index["name"]])) {
								$line_status['warning'][] = "name";
							}
							if (empty($element[$interesting_index["genres_id"]])) {
								$line_status['warning'][] = "genres_id";
							}
							if (empty($element[$interesting_index["developer_id"]])) {
								$line_status['warning'][] = "developer_id";
							}
							if (empty($element[$interesting_index["director_id"]])) {
								$line_status["warning"][] = "director_id";
							}
							if (empty($element[$interesting_index["gconsoles_id"]])) {
								$line_status["warning"][] = "gconsoles_id";
							}
                            if (empty($element[$interesting_index["date"]])) {
								$line_status["warning"][] = "date";
							}
                            if (empty($element[$interesting_index["saga"]])) {
								$line_status["warning"][] = "saga";
							}
                            if (empty($element[$interesting_index["pegi"]])) {
								$line_status["warning"][] = "pegi";
							}
                            if (empty($element[$interesting_index["publisher_id"]])) {
								$line_status["warning"][] = "publisher_id";
							}
                            if (empty($element[$interesting_index["page_reference"]])) {
								$line_status["warning"][] = "page_reference";
							}
                            if (empty($element[$interesting_index["image"]])) {
								$line_status["warning"][] = "image";
							}

                            if (empty($element[$interesting_index["summary"]])) {
								$line_status["warning"][] = "summary";
							}

							// If a line has 1 error or more, add to error array.
							if (count($line_status['error']) > 0) {
								$status_controller['errors'][] = $line_status;
								continue;
							}

							if ($user) {
								/*
								Tabla Platform
								1-comprovar si la plataforma existe con(select)
								2-si existe se coge el (id)
								3- si no existe(insert) y se coje el id del ultimo campo añadido

								Tabla Gconsole
								1-comprovar si la plataforma existe con(select)
								2-si existe se coge el (id)
								3- si no existe(insert con el id de platform) y se coje el id del ultimo campo añadido
								
								Tabla Genere
								1-comprovar si el genero existe con(select)
								2-si existe se coge el(id)
								3- si no existe(insert) y se coje el id del ultimo campo añadido

								Tabla Saga
								1-comprovar si la plataforma existe con(select)
								2-si existe se coge el (id)
								3- si no existe(insert) y se coje el id del ultimo campo añadido

								Tabla Publisher
								1-comprovar si la plataforma existe con(select)
								2-si existe se coge el (id)
								3- si no existe(insert) y se coje el id del ultimo campo añadido

								Tabla Director
								1-comprovar si la plataforma existe con(select)
								2-si existe se coge el (id)
								3- si no existe(insert) y se coje el id del ultimo campo añadido

								Tabla Developer
								1-comprovar si la plataforma existe con(select)
								2-si existe se coge el (id)
								3- si no existe(insert con el id de director) y se coje el id del ultimo campo añadido
								
								*/
							} else {
								$status_controller['system_errors'][] = "Hi ha agut un error durant la busqueda/creació del usuari de la linea $key.";
								// TODO: Error de importación de inscripción.
							}
						}
						$q++;
					}
					/**
					 * Casos
					 * Todo bien- BASE
					 * Todo bien con warnings 
					 * Todo bien con errores
					 * Todo bien con warnings/errores
					 */
					/*if (count($status_controller["errors"]) > 0 || count($status_controller["system_errors"]) > 0) {
						$data = ["status" => "error", "text" => "Importació Gamer fallida.", "errors" => $status_controller["errors"], 'system_errors' => $status_controller["system_errors"]];
						return response()->json($data);
					} else if (count($status_controller["warnings"]) > 0) {
						$data = ["status" => "warning", "text" => "Importació Gamer completada correctament.<br>{$status_controller["okey"]} afegits<br>{$status_controller["failed"]} no s'han afegit."];
						return response()->json($data);
					} else if ($status_controller["ok"] > 0) {
						$data = ["status" => "success", "text" => "Importació Gamer completada correctament.<br>{$status_controller["okey"]} afegits."];
						return response()->json($data);
					} else {
						$data = ["status" => "error", "text" => "Importació Gamer fallida, no s'han trobat alumnes al CSV."];
						return response()->json($data);
					}*/
				} else {
					$data = ["status" => "error", "text" => "No s'ha trobat l'arxiu csv."];
					return response()->json($data);
				}
			} else {
				$data = ['status' => 'game token not found.'];
				return response()->json($data);
			}
	}
}
