var titleTextbox = document.getElementById('title');
var searchResultContainer = document.getElementById('search-results');
var apiEndpointBase = 'http://www.omdbapi.com/';

function searchImdb() {
  // TODO: your solution goes here
  return false;
}

function showSearchItems(items) {
  // clear the search results
  searchResultContainer.innerHTML = '';

  items.Search.forEach(function(item) {
    var itemDiv = document.createElement("div");
    itemDiv.classList.add('media');

    var itemHtml = '<div class="media-left">' +
      '<a href="#">' +
        '<img class="media-object" src="' + item.Poster + '" alt="' + item.Title + '">' +
      '</a>' +
      '</div>' +
      '<div class="media-body">' +
        '<h4 class="media-heading">' + item.Title + '</h4>' +
        '<h5><span class="label label-default">' + item.Type + '</span></h5>' +
        '<p>' + item.Year + '</p>' +
      '</div>';

    itemDiv.innerHTML = itemHtml;

    searchResultContainer.appendChild(itemDiv);
  });
}