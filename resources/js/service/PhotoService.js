import BaseService from "@/service/BaseService.js";

export default class PhotoService extends BaseService {
    getImages() {
        return fetch(`${this.baseUrl}/get/photos`)
            .then((res) => res.json())
            .then((d) => d.data);
    }
}
