const url = 'https://kohls.p.rapidapi.com/products/list?limit=24&offset=1&dimensionValueID=AgeAppropriate%3ATeens';
const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Key': 'YOUR_API_KEY_HERE',
        'X-RapidAPI-Host': 'kohls.p.rapidapi.com'
    }
};

async function fetchAndDisplayData() {
    try {
        const response = await fetch(url, options);
        if (!response.ok) {
            throw new Error(`API call failed: ${response.status}`);
        }
        const result = await response.json(); // Convert response to JSON

        // Assuming 'result' is an array of items and you want to display them in the 'main' section
        const mainElement = document.querySelector('main');
        mainElement.innerHTML = ''; // Clear existing content

        // Loop through each item in the result and add it to the DOM
        result.forEach(item => {
            const itemElement = document.createElement('div');
            // Customize how you want to display each item
            // For example, if each item has 'name' and 'description' properties
            itemElement.innerHTML = `<h3>${item.name}</h3><p>${item.description}</p>`;
            mainElement.appendChild(itemElement);
        });
    } catch (error) {
        console.error('Failed to fetch data:', error);
    }
}

// Call the function to fetch and display data when the page loads
fetchAndDisplayData();
