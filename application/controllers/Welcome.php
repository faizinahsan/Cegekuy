<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('Sparqldb');
	}

	public function index()
	{
		$hasil = $this->Sparqldb->getGejala();
		// echo "<pre>";
		// var_dump($hasil);
		// echo "</pre>";
		$data['hasil'] = $hasil;
		$this->load->view('home.php',$data);
	}
	public function result()
	{
		$service_name = implode(',',$_POST['gejala_name']);
		// var_dump($service_name);
		// echo $service_name;
		// $hasil = $this->Sparqldb->getPenyakitPenanganan();
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
		SELECT ?Penyakit ?Penanganan WHERE{
			?Gejala ex:memilikiPenyakit ?Penyakit
			FILTER(?Gejala IN (".$service_name."))
			?penyakit ex:memilikiPenanganan ?Penanganan.
		}";
		$rows = $sc->query($q, 'rows');
		$err = $sc->getErrors();
		if ($err) {
			print_r($err);
			throw new Exception(print_r($err, true));
		}
		$header = array();		
		foreach ($rows["result"]["variables"] as $variable) {
			$header[]=$variable;
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
		// echo $service_name;
		// echo "<pre>";
		// var_dump($hasil);
		// echo "</pre>";
		$data['header'] = $header;
		$data['hasil'] = $hasil;
		$this->load->view('result.php',$data);
	}
	public function home2()
	{
		$this->load->view('home2.php');
	}
}
