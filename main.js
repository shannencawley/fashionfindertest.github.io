const url = 'https://asos-marketplace.p.rapidapi.com/product?productID=133831038';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '3c5f513caamsha93acf9bea18ed0p15a0aejsnccbf9aa5430b',
		'X-RapidAPI-Host': 'asos-marketplace.p.rapidapi.com'
	}
};

try {
	
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
	
} catch (error) {
	console.error(error);
}
