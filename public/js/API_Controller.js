import API_Ops from './API_Ops.js'

document.addEventListener('DOMContentLoaded', function () {

    var searchButton = document.getElementById('search-btn');
    var birthDate = document.getElementById('bd_id');
    var names = document.getElementById('names');
    const apiKey = 'c58d7abfeamshcda1a331fbbed15p1eadbdjsnf7297a5b9341';
    const apiHost = 'imdb8.p.rapidapi.com';

    const apiOps = new API_Ops(apiKey, apiHost);

    function listActors() {
        names.innerHTML = '';
        const message = document.createElement('h4');
        message.classList.add('text-center');
        message.style.color = '#5e2ced';
        message.innerHTML = "message.Please Wait until Loading data from API...";
        names.appendChild(message);

        if (birthDate.value === "" || birthDate.classList.contains('is-invalid')) {
            document.getElementById('alert').classList.remove('d-none');
            document.getElementById('alert').innerHTML = "Please fill all fields correctly";
            setTimeout(function () {
                document.getElementById('alert').classList.add('d-none');
                document.getElementById('alert').innerHTML = "";
            }, 5000);
            return;
        }

        const userBirthDate = new Date(birthDate.value);
        const day = userBirthDate.getDate().toString().padStart(2, '0');
        const month = (userBirthDate.getMonth() + 1).toString().padStart(2, '0');

        const apiUrl = `https://imdb8.p.rapidapi.com/actors/v2/get-born-today?today=${month}-${day}&first=5`;

        const xhr = new XMLHttpRequest();
        xhr.open('GET', apiUrl);
        xhr.setRequestHeader('X-RapidAPI-Key', apiKey);
        xhr.setRequestHeader('X-RapidAPI-Host', apiHost);

        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                const data = JSON.parse(xhr.responseText);
                const listOfActors = data.data?.bornToday?.edges?.map(actor => actor?.node?.id);
                apiOps.getActorsData(listOfActors)
                    .then(
                        actorsData => {
                            if (actorsData.length === 0) {
                                message.innerHTML = "message.No Human Born at given Date";
                                return;
                            }
                            actorsData.forEach(actor => {
                                names.innerHTML = '';
                                names.classList.add('overflow-x-scroll');
                                const actorElement = document.createElement('div');
                                actorElement.classList.add('col-lg-3', 'mb-3', 'text-center', 'mx-3');
                                actorElement.innerHTML = `<h6 class='text-light py-2 rounded-5' style="background-color: blueviolet;">${actor}</h6>`;
                                names.appendChild(actorElement);
                            });
                        })
                    .catch(error => {
                        message.innerHTML = error;
                    });
            }
        };
        xhr.onerror = function () {
            message.innerHTML = "message.Request failed";
        };
        xhr.send();
    }

    searchButton.addEventListener('click', listActors);
});