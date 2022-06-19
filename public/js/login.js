
function onResponse(response){
    return response.json();
}
    
function onJson(json){
    const address=document.querySelector("address");
    address.textContent=address.textContent +" "+ json.device.type+" version";
}
    
fetch(BASE_URL + '/verificaDispositivo').then(onResponse).then(onJson);