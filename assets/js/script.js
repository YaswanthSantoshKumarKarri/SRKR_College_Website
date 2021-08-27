function f1(x) {
    let y = "assets/pdfs/" + x + ".pdf"
    console.log(y)
    document.getElementById("pdf").setAttribute('src', y);
    document.getElementById("pdf").style.display = "block";
    setTimeout(() => { document.getElementById("pdf").style.display = "none"; }, 0)
}