import BaseService from "@/service/BaseService.js";

export default class CountryService extends BaseService {
    getCountries() {
        return fetch(`${this.baseUrl}/get/countries`)
            .then((res) => res.json())
            .then((d) => d.data);
    }
}
