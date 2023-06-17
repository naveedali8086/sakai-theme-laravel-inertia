import BaseService from "@/service/BaseService.js";

export default class NodeService extends BaseService {
    getTreeTableNodes() {
        return fetch(`${this.baseUrl}/get/treetablenodes`)
            .then((res) => res.json())
            .then((d) => d.root);
    }

    getTreeNodes() {
        return fetch(`${this.baseUrl}/get/treenodes`)
            .then((res) => res.json())
            .then((d) => d.root);
    }
}
