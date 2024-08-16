var i = 0;

function addMore() {
    i++
    html = `<input type="number" id="marks" name="marks${i}" placeholder="Enter Marks"\>`
    var inpdiv = document.getElementById('inpdiv')
    inpdiv.innerHTML += html
}



