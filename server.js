const express = require('express');
const path = require('path');

const app = express();
//define o protocolo http
const server = require('http').createServer(app);
const io = require('socket.io')(server);

app.use(express.static(path.join(__dirname, 'public')));
app.set('views', path.join(__dirname, 'public'));
app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');

app.use('/',(req, res) =>{
   res.render('index.html');
});



let messages = [];

//verifica se se esta conectado
io.sockets.on('connection', socket => {
    console.log(`socket conectado:${socket.id}` );

    socket.$emit('previousMessages', messages);

    socket.on('sendMessage', data =>{
        //manda mensagem
        messages.push(data);
        //manda para todos os chats que estiverem abertos modo instantaneo
        socket.broadcast.$emit('receivedMessage', data);
        //console.log(data);
    });
});

server.listen(3000);
