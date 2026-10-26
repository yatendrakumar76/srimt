function data1() {
    var c = document.getElementById("n").value;

    var d = document.getElementById("f").value;

    var e = document.getElementById("m").value;

    var f = document.getElementById("ad").value;

    var g = document.getElementById("co").value;

    var h = document.getElementById("md").value;

    var i = document.getElementById("ps").value;

    if (c == "" || d == "" || e == "" || f == "" || g == "" || h == "" || i == "") {
        alert("all fields are mandatory");
        return false;
    }

}