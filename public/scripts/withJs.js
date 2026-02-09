box = document.getElementById('output');
btn = document.getElementById('btn');
inputBox = document.getElementById('inputBox');
hiddenOutputBox = document.getElementById('hiddenInput');
selectType = document.getElementById('selectType');
copyBtn = document.getElementById('copy');
xhr = new XMLHttpRequest();

btn.addEventListener('click', () => {
    btn.disabled = true;
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            // box.innerHTML = this.responseText;
            responseJson = JSON.parse(xhr.responseText);
            box.innerHTML = responseJson.response;
            btn.disabled = false;
            // console.log(responseJson);
        }
    }
    size = inputBox.value;
    if (selectType.value == 'default') {
        // console.log('Invalid Type');
        // return false;
        btn.disabled = false;
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

inputBox.onKeyPress = function() {
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

copyBtn.addEventListener('click', function() {
    if (box.innerHTML != '') {
        // Select the text field
        hiddenOutputBox.value = box.innerText;
        hiddenOutputBox.select;
        // box.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(hiddenOutputBox.value);

        // Alert the copied text
        alert("Copied the text: " + hiddenOutputBox.value);
    }
})
