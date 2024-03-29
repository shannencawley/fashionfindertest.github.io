const url = 'https://kohls.p.rapidapi.com/catalog/sale-womens.jsp?CN=Promotions:Sale+Gender:Womens&cc=sale-TN2.0-S-sale-womens'

//const url = 'https://kohls.p.rapidapi.com/categories/list';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '3c5f513caamsha93acf9bea18ed0p15a0aejsnccbf9aa5430b',
		'X-RapidAPI-Host': 'kohls.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	//const result = await response.text();
	const result = await response.json();
	console.log(result);
} catch (error) {
	console.error(error);
}
