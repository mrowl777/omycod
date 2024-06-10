function Get() {
    var arr = { key1: 'val1', key2: 'val2', key3: 'val3' };

    var data = new FormData();
    data.append( "get", true );
    data.append( "arr", JSON.stringify(arr) );

    const requestOptions = {
        method: 'POST',
        body: data
    };
    
    fetch('/get.php', requestOptions)
    .then(response => response.text()) // здесь получить в json формате, но зачем, если для вывода потом потребуется JSON.stringify
    .then(data => {
        document.querySelector(".getback").innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error); // Handle any errors
    });
}