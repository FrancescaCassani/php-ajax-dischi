import Vue from 'vue';
import axios from 'axios';

const spotify = new Vue ({
    el: '#spotify',
    albums: [],
    data: {

    },
    created() {
        //console.log(window.location.href);
        const dataUrl = window.location.href + 'scripts/database.php';

        axios
            .get(dataUrl)
            .then(result => {

            this.albums = result.data;
            })
            .catch(error => {
                console.log(error);
            });
    },
    methods: {

    }
});