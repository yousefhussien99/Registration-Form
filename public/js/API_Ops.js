export default class API_Ops {
    constructor(apiKey, apiHost) {
        this.apiKey = apiKey;
        this.apiHost = apiHost;
    }

    async getActorData(actorUrl) {
        return new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', actorUrl);
            xhr.setRequestHeader('X-RapidAPI-Key', this.apiKey);
            xhr.setRequestHeader('X-RapidAPI-Host', this.apiHost);
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 300) {
                    const result = JSON.parse(xhr.responseText);
                    resolve(result.data?.name?.nameText?.text);
                } else {
                    reject('Request failed with status:', xhr.status, xhr.statusText);
                }
            };
            xhr.onerror = function () {
                reject('Request failed:', xhr.statusText);
            };
            xhr.send();
        });
    }

    async getActorsData(listOfActors) {
        const url = 'https://imdb8.p.rapidapi.com/actors/v2/get-bio?nconst=';
        const actorPromises = listOfActors.map(async (actorId) => {
            const actorUrl = url + actorId;
            return await this.getActorData(actorUrl);
        });

        return await Promise.all(actorPromises);
    }
}

