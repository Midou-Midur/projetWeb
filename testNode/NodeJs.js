//import mysql
var mysql = require("mysql");
//accès à la bdd
var mySqlClient = mysql.createConnection({
  host     : "localhost",
  user     : "root",
  password : "",
  database : "projet_web_laravel"
});

//---------------------------------------------------------------------------------//
//On teste la connexion
mySqlClient.connect(function(err) {
	//s'il y a une erreur de connexion, la lever
  if (err) throw err;
  // sinon afficher..
  console.log("Successfully connected to database");
}); 

function getRequest(request){
	/*
	Si la connexion est faite, on peut donc appeler
	une fonction ci-dessous avec sa méthode HTTP
	*/
	mySqlClient.query(request, function (err, result, fields) {
    if (err) throw err;
    //returnedData prendra la valeur du tableau result
    console.log(result);
  });
}

/*
On teste l'exécution de x requête (get/post...)
via executeRequest
*/
function executeRequest(request){
	mySqlClient.query(request, function (err, result) {
    if (err) throw err;
  });
}

//---------------------------------------------------------------------------------//
/*
Voici l'import des package nécessaires aux dépendances,
requetages et variables d'accès dont
*/
//express l'infrastructure d'application Web Node.js
var express = require("express"); 
//l'accès local à l'api ainsi qu'à la bdd
var hostname = "localhost";
//le port d'écoute
var port = 3000; 
//soit app l'appelle à l'implant express
var app = express(); 
/*
C'est une phase qui s'applique entre l'envoi de la requête du client
et la réponse du serveur.

Le middleware bodyParser analyse le corps
des demandes entrantes en son sein, c'est-à-dire que
c'est lui qui se charge de savoir quand l'appel à une méthode
se fait. 
*/
var bodyParser = require("body-parser");
//afin de clarifier le fichier .json, on enconde bodyParser en json
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
//voici le routage sous js
var myRouter = express.Router();  
myRouter.route("/:table/:id")
//---------------------------------------------------------------------------------//
/*
Pour chaque requête qui va suivre,
on généralise l'action voulue avec la tableau ainsi que les param
soumis au client
*/

//req = REQUEST, res = RESULT 

// SELECT
.get(function(req,res){
	console.log("----------- GET -----------");
	//paramètre donné à l'URI
	var table = req.params.table;
	var id = req.params.id;

	/*
	Possibilité d'afficher * ou qlq champs via
	+ ' WHERE id = ' + id;
	*/
	var request = 'SELECT * FROM ' + table;// + ' WHERE id = ' + id;
	console.log(request);
	var select = getRequest(request);
	//var select = executeRequest(request);
})

// INSERT INTO
.post(function(req,res){ 
	console.log("----------- POST -----------");
	var table = req.params.table;

	//préparation de la requête insert avec
	var columns_array = [];
	var newData_array = [];
	//delimiteurs des données
	var column = '(';
	var newData = '(';
	//insertion des données dans les colonnes selon les key voulues
	for (key in req.body){
		columns_array.push(key);
		newData_array.push(req.body[key]);
	}
	//Formatage de la requete
	for (var i = 0; i < columns_array.length; i++) {
		column = column + columns_array[i];
		newData = newData + '"' + newData_array[i] + '"';
		if (i >= columns_array.length-1) {
			column += ')';
			newData += ')';
		} else {
			column += ',';
			newData += ',';
		}
	}
	//requetage et exécution
	var request = 'INSERT INTO ' + table + column + '  VALUES ' + newData; 
	executeRequest(request);
})

// UPDATE
.put(function(req,res){ 
	console.log("----------- PUT -----------");
	var table = req.params.table;
	var id = req.params.id;
	var set = '';

	for (key in req.body){
		set = set + key + ' = "' + req.body[key] + '"';
	}

	var request = 'UPDATE ' + table + ' SET ' + set + ' WHERE id = ' + id; 
	executeRequest(request);
})

// DELETE
.delete(function(req,res){ 
	console.log("----------- DELETE -----------");
	var table = req.params.table;
	var id = req.params.id;

	var request = 'DELETE FROM ' + table + ' WHERE id = ' + id;
	executeRequest(request);
})

app.use(myRouter);  
app.listen(port, hostname, function(){
	console.log("http://"+ hostname +":"+port); 
});