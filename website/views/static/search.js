let searchWords = [];
let searchCount = 0;

document.getElementById('searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const searchInput = document.getElementById('searchInput');
    const searchResult = document.getElementById('searchResult');
    const words = searchInput.value.trim().split(/\s+/).slice(0, 11);
    searchWords = searchWords.concat(words);
    
    searchCount++;
    if (searchCount % 11 === 0) {
        searchWords = [];
    }
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