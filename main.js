const url = 'https://kohls.p.rapidapi.com/categories/list';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '3c5f513caamsha93acf9bea18ed0p15a0aejsnccbf9aa5430b',
		'X-RapidAPI-Host': 'kohls.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}
