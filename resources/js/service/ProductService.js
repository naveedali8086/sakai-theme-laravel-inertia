import BaseService from "@/service/BaseService.js";

export default class ProductService extends BaseService {
    getProductsSmall() {
        return fetch(`${this.baseUrl}/get/products-small`)
            .then((res) => res.json())
            .then((d) => d.data);
    }

    getProducts() {
        return fetch(`${this.baseUrl}/get/products`)
            .then((res) => res.json())
            .then((d) => d.data);
    }

    getProductsWithOrdersSmall() {
        return fetch(`${this.baseUrl}/get/products-orders-small`)
            .then((res) => res.json())
            .then((d) => d.data);
    }
}
