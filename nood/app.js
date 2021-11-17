'use strict'

// Criando variaveis globais
var express = require('express');
var bodyParser = require('body-parser');

// Criando alias para express
var app = express();

// Cargar Rutas
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// configurar cabeceras http nehuma coisa

    // Home route
    app.get('/', function(req, res){
        res.status(200).send('Home - first point to entry in website api routes ');
    });
    // Search routes
    app.post('/search', function(req, res){
        res.status(200).send('search - point to entry in search api routes received values '  + JSON.stringify(req.body));
    });
    // Frontend routes
    app.post('/frontpoint', function(req, res){
        res.status(200).send('Front End - point to entry in frontend api routes received values '  + JSON.stringify(req.body));
    });
    // Backend routes
    app.post('/backpoint', function(req, res){
        res.status(200).send('Back End - point to entry in backend api routes received values ' + JSON.stringify(req.body));
    });

// Export de este modulo a nombre app para usar desde index.js
module.exports = app;