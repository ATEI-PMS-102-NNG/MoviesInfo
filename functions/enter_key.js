//enter key search
function enterSearch(e) {
    var code = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0; //for all browsers
    if(code===13){
        e.preventDefault(); //not refresh the page
        document.getElementById('submit').click() //search using ajax below
    }
}