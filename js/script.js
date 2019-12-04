var allNews =  document.getElementById('all-news');
var newsList =  document.getElementById('news-list');

allNews.addEventListener('click', function() {
	newsList.innerHTML+= newsList.innerHTML;
}, false);