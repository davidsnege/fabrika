'use strict'

// usando as variaveis globais
var mongoose = require('mongoose'); // Conexao ao Mongo
var app = require('./app'); // nosso ficheiro app.js onde usamos express para rotas
var port = process.env.PORT || 3977; // Criando servidor na porta 3997

// Conexao verificada com o Mongo
mongoose.connect('mongodb://localhost:27017/curso', (err, res) => {
        if (err) {
            // Cuando tenemos error
            throw err;
        }else{    
            // Cuando conectamos com o Mongo
            console.log('MongoDB connection successful');
            // Iniciando o servidor na porta e ouvindo a porta
            app.listen(port, function() {
                console.log('Servidor: http://localhost:' + port);
            });
        };
    });
