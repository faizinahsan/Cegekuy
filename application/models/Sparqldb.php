<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Sparqldb extends CI_Model
{
    public function getPenyakit()
    {
		$fuseki_server = "http://localhost:3030"; // change this to your fuseki server address
		$fuseki_sparql_db = "cegekuy"; // change this to your fuseki Sparql database
		$endpoint = $fuseki_server."/".$fuseki_sparql_db."/query";
		$sc = new BorderCloud\SPARQL\SparqlClient();
		$sc->setEndpointRead($endpoint);
		//$sc->setMethodHTTPRead("GET");
		$q = "
		PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX ex: <http://www.example.org/>
		SELECT DISTINCT ?orang ?penyakit
			WHERE { ?orang ex:memilikiGejala ?gejala.
				?gejala ex:memilikiPenyakit ?penyakit.
		}
		";
		$rows = $sc->query($q, 'rows');
		$err = $sc->getErrors();
		if ($err) {
			print_r($err);
			throw new Exception(print_r($err, true));
		}		
		$header = array();
		foreach ($rows["result"]["variables"] as $variable) {
			$header[] = $variable;
			// printf("%s", $variable);
			// echo '|';
		}
		// echo "\n";
		$hasil = array();
		foreach ($rows["result"]["rows"] as $row) {
			$hasil[] = $row;
			foreach ($rows["result"]["variables"] as $variable) {				
				// $hasil[][] = $row[$variable];
				// printf("%s", $row[$variable]);
				// echo '|';
			}
			// echo "\n";
		}
		$result['header'] = $header;
		$result['hasil'] = $hasil;
		return $result;
	}
	public function getPenyakitPenanganan()
    {

	}
	public function getGejala()
    {
		$fuseki_server = "http://localhost:3030"; // change this to your fuseki server address
		$fuseki_sparql_db = "cegekuy"; // change this to your fuseki Sparql database
		$endpoint = $fuseki_server."/".$fuseki_sparql_db."/query";
		$sc = new BorderCloud\SPARQL\SparqlClient();
		$sc->setEndpointRead($endpoint);
		//$sc->setMethodHTTPRead("GET");
		$q = "
		PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX cgk: <http://www.semanticweb.org/sadrakh/ontologies/2019/CeGeKuy/>
		PREFIX ex: <http://www.example.org/>
		SELECT DISTINCT ?gejala
			WHERE { ?gejala a ex:Gejala.}
		";
		$rows = $sc->query($q, 'rows');
		$err = $sc->getErrors();
		if ($err) {
			print_r($err);
			throw new Exception(print_r($err, true));
		}		
		foreach ($rows["result"]["variables"] as $variable) {
			// printf("%s", $variable);
			// echo '|';
		}
		// echo "\n";
		$hasil = array();
		foreach ($rows["result"]["rows"] as $row) {
			$hasil[] = $row;
			// foreach ($rows["result"]["variables"] as $variable) {				
			// 	// $hasil[][] = $row[$variable];
			// 	printf("%s", $row[$variable]);
			// 	echo '|';
			// }
			// echo "\n";
		}
		return $hasil;
    }
}

