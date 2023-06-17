export default class BaseService {
    constructor() {
        this.baseUrl = window.location.origin
    }

    getBaseUrl() {
        return this.baseUrl
    }

}
