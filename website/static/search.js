let searchWords = [];
let searchCount = 0;

document.getElementById('searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const searchInput = document.getElementById('searchInput');
    const searchResult = document.getElementById('searchResult');
    
    // Get the first 11 words from the search input
    const words = searchInput.value.trim().split(/\s+/).slice(0, 11);
    
    // Add words to the searchWords array
    searchWords = searchWords.concat(words);
    
    // Increment search count
    searchCount++;
    
    // Reset searchWords if search count is a multiple of 11
    if (searchCount % 11 === 0) {
        searchWords = [];
    }
    
    // Find the most researched word
    const wordCounts = {};
    let mostResearchedWord = '';
    let maxCount = 0;
    
    searchWords.forEach(word => {
        wordCounts[word] = (wordCounts[word] || 0) + 1;
        if (wordCounts[word] > maxCount) {
            maxCount = wordCounts[word];
            mostResearchedWord = word;
        }
    });
    
    searchResult.innerHTML = `<span>${mostResearchedWord}</span>`;
    
    searchInput.value = '';
});