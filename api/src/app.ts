const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

// Parser dla danych w formacie JSON
app.use(bodyParser.json());

// Dane - na potrzeby przykładu przechowujemy w pamięci
let items = [];

// Endpoint GET zwracający wszystkie elementy
app.get('/items', (req, res) => {
    res.json(items);
});

// Endpoint POST dodający nowy element
app.post('/items', (req, res) => {
    const newItem = req.body;
    items.push(newItem);
    res.status(201).json(newItem);
});

// Endpoint DELETE usuwający wszystkie elementy
app.delete('/items', (req, res) => {
    items = [];
    res.status(204).send();
});

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});