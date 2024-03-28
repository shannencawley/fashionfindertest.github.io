const url = 'https://asos-com1.p.rapidapi.com/products/detail?url=only-sons%2Fonly-sons-oversized-twill-worker-jacket-in-camo%2Fprd%2F203998871';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '7fd8b0ff8emsh61db2357987c018p10e112jsna22e3c2375c3',
		'X-RapidAPI-Host': 'asos-com1.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}
