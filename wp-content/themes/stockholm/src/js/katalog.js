export default class katalog {
  constructor(elem,katalogArray, listElem) {

    // our variable holding starting index of this "page"
    var index = 0;
    var perPage = 9;

    $(elem).each( function( index ) {
      katalogArray.push(this);
    });

    populate();

  }

  showModal(id) {

  }

  getPageNum() {

  }

  //Pagination
  next() {

    //Check for max page

  }
  
  prev(){

    //check for min page

  }

//Populate the lsit array
  populate() {
    var begin = ((currentPage - 1) * numberPerPage);
    var end = begin + numberPerPage;

    pageList = list.slice(begin, end);
    console.log(pageList);
    drawList();

  }

//Render the list
  drawList() {
      document.getElementById(listElem).innerHTML = "";
      for (r = 0; r < pageList.length; r++) {
          document.getElementById(listElem).innerHTML += "<li>" + pageList[r].innerHTML + "</li>";
      }
  }
}
