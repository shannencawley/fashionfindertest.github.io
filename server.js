// server.js
const express = require('express');
const request = require('request'); // You can use axios or node-fetch as alternatives
const app = express();
const PORT = process.env.PORT || 3000;

app.use(express.static('public')); // Serve your static files from the 'public' directory

// Route for fetching fashion items
app.get('/api/fashion-items', (req, res) => {
    const options = {
        url: 'https://api.shopstyle.com/api/v2/products',
        qs: {
            pid: 'your_api_key',
            fts: 'women+dress',
            offset: 0,
            limit: 10
        }
    };

    request.get(options, (error, response, body) => {
        if (!error && response.statusCode == 200) {
            res.json(JSON.parse(body).products);
        } else {
            res.status(500).json({error: 'Error fetching items'});
        }
    });
});

app.listen(PORT, () => console.log(`Server running on http://localhost:${PORT}`));
