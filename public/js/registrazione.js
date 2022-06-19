function controllo(event){
        let flag_error=false;
        const nome = document.forms["form_reg"]["nomeUtente"].value;
        const email = document.forms["form_reg"]["email"].value;
        const cellulare = document.forms["form_reg"]["cellulare"].value;
        const password = document.forms["form_reg"]["password"].value;
        const c_password = document.forms["form_reg"]["c_password"].value;
        div.innerHTML="";
        if (nome == "" || email == "" || cellulare == "" || password == ""|| c_password == "") {
            const new_p=document.createElement("p");
            new_p.textContent="Devi riempire tutti i campi";
            div.appendChild(new_p);
            div.classList.remove("nascosto");
            div.classList.add("error");
            new_p.classList.add("avvertimento");
            flag_error=true;
        }
        if(password.length<8){
            const new_p=document.createElement("p");
            new_p.textContent="Password troppo corta";
            div.appendChild(new_p);
            div.classList.remove("nascosto");
            div.classList.add("error");
            new_p.classList.add("avvertimento");
            flag_error=true;
        }
        if(password!==c_password){
            const new_p=document.createElement("p");
            new_p.textContent="Le password non corrispondono";
            div.appendChild(new_p);
            div.classList.remove("nascosto");
            div.classList.add("error");
            new_p.classList.add("avvertimento");
            flag_error=true;
        }
        if(cellulare.length!=10){
            const new_p=document.createElement("p");
            new_p.textContent="Numero cellulare inesistente";
            div.appendChild(new_p);
            div.classList.remove("nascosto");
            div.classList.add("error");
            new_p.classList.add("avvertimento");
            flag_error=true;
        }
        if(!flag_error){
            fetch(BASE_URL + 'reg/'+ nome + '/'+email+'/'+cellulare);
        }else
        event.preventDefault();
    }


    
function onJson2(json){
    const address=document.querySelector("address");
    address.textContent=address.textContent +" "+ json.device.type+" version";
}

function onResponse2(response){
    return response.json();
}
    
fetch(BASE_URL + '/verificaDispositivo').then(onResponse2).then(onJson2);
    
const form= document.querySelector("form");
form.addEventListener('submit', controllo);
const div = document.querySelector("#alert");