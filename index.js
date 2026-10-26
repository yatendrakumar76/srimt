function data() {
    var a = document.getElementById("mob").value;
    var b = document.getElementById("pas").value;
    if (a == "" || b == "") {
        alert("all fields are mandatory");
        return false;
    }

}