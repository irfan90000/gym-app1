import axios from "axios"

export default {
    data() {
        return {
            roles: {
                title : 'Roles',
            },
        }
    },
    methods: {
        async axios(methods, url, dataObj) {
            try {
                return await axios({
                    method: methods,
                    url: url,
                    data: dataObj.data
                });
            } catch (e) {
                return e.response;
            }
        },

    }
}