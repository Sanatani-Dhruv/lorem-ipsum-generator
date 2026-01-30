box = document.getElementById('output');
btn = document.getElementById('btn');
inputBox = document.getElementById('inputBox');
selectType = document.getElementById('selectType');
xhr = new XMLHttpRequest();

btn.addEventListener('click', () => {
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            // box.innerHTML = this.responseText;
            responseJson = JSON.parse(xhr.responseText);
            box.innerHTML = responseJson.response;
            // console.log(responseJson);
        }
    }
    size = inputBox.value;
    if (selectType.value == 'default') {
        // console.log('Invalid Type');
        // return false;
        return;
    } else {
        type = selectType.value;
    }
    // console.log({
    //     'type': type,
    //     'size': size
    // });
    xhr.open('GET', '/api/' + type + '/' + size);
    xhr.send();
    // box.innerHTML = `<p>${xhr.responseText}</p>`;
});

inputBox.onKeyPress() = function() {
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            box.innerHTML = this.responseText;
        }
    }
    size = inputBox.value;
    if (selectType.value == 'default') {
        // console.log('Invalid Type');
        // return false;
        type = selectType.value;
    } else {
        type = selectType.value;
    }
    // console.log({
    //     'type': type,
    //     'size': size
    // });
    xhr.open('GET', '/api/' + type + '/' + size);
    xhr.send();
    box.innerHTML = `<p>${xhr.responseText}</p>`;

}
