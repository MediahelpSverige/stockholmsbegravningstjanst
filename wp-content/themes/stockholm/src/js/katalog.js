class katalog {
  constructor(elem,katalogArray, listElem) {

    // our variable holding starting index of this "page"
    var index = 0;
    var numberPerPage = 9;
    var list = katalogArray;
    var currentPage = 1;
    var numberOfPages = 0;

    numberOfPages = this.getNumberOfPages(list);


    $(elem).each( function( index ) {
      katalogArray.push(this);
    });

    this.populate();

  }

  showModal(id) {

  }

  getNumberOfPages(list) {
      return Math.ceil(list.length / this.numberPerPage);
  }

  //Pagination
  next() {

    //Check for max page
    this.currentPage += 1;
    loadList();

  }

  prev(){

    //check for min page
    this.currentPage -= 1;
    loadList();

  }

//Populate the lsit array
  populate() {
    var begin = ((this.currentPage - 1) * this.numberPerPage);
    var end = begin + this.numberPerPage;

    pageList = this.list.slice(begin, end);

    this.drawList();

  }

//Render the list
  drawList() {
      document.getElementById(listElem).innerHTML = "";
      for (r = 0; r < pageList.length; r++) {
          document.getElementById(listElem).innerHTML += "<li>" + pageList[r].innerHTML + "</li>";
      }
  }
}
