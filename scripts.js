<script>
function fetchSearchResults(query) {
  var apiKey = 'YOUR_API_KEY';
  var engineId = 'YOUR_ENGINE_ID';
  var url = `https://www.googleapis.com/customsearch/v1?q=${encodeURIComponent(query)}&cx=${engineId}&key=${apiKey}`;

  fetch(url)
    .then(response => response.json())
    .then(data => {
      console.log(data); // Process and display your search results here
    })
    .catch(error => console.error('Error fetching search results:', error));
}
</script>
