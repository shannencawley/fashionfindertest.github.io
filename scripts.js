<script>
function fetchSearchResults(query) {
  var apiKey = 'AIzaSyAK2z9rZdXSLlJ9piz24KR1GIpg2t_O08g';
  var engineId = 'e42db96d918aa4f45';
  var url = `https://www.googleapis.com/customsearch/v1?q=${encodeURIComponent(query)}&cx=${engineId}&key=${apiKey}`;

  fetch(url)
    .then(response => response.json())
    .then(data => {
      console.log(data); // Process and display your search results here
    })
    .catch(error => console.error('Error fetching search results:', error));
}
</script>
