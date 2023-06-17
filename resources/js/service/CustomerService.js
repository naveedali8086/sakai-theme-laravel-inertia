import BaseService from "@/service/BaseService.js";

export default class CustomerService extends BaseService {
    getCustomersSmall() {
        return fetch(`${this.baseUrl}/get/customers-small`)
            .then((res) => res.json())
            .then((d) => d.data);
    }

    getCustomersMedium() {
        return fetch(`${this.baseUrl}/get/customers-medium`)
            .then((res) => res.json())
            .then((d) => d.data);
    }

    getCustomersLarge() {
        return fetch(`${this.baseUrl}/get/customers-large`)
            .then((res) => res.json())
            .then((d) => d.data);
    }

    getCustomersXLarge() {
        return fetch(`${this.baseUrl}/get/customers-xlarge`)
            .then((res) => res.json())
            .then((d) => d.data);
    }

    getCustomers(params) {
        const queryParams = Object.keys(params)
            .map((k) => encodeURIComponent(k) + '=' + encodeURIComponent(params[k]))
            .join('&');
        return fetch('https://www.primefaces.org//demo/data/customers?' + queryParams).then((res) => res.json());
    }
}
