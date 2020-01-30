<template>
    <div class="container">
        <h1> {{serviceDoctor[0].service}}</h1>
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item" v-for="{cost, doctor,service} in serviceDoctor">
                 <strong>{{doctor}}</strong> - {{cost}}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                serviceDoctor: {},
            };
        },
        created() {
            this.fetchData();
        },
        methods: {

            fetchData() {
                var url = window.location.pathname;
                axios
                    .get('/api' + url)
                    .then(response => {
                        this.serviceDoctor = response.data;
                    });
            }
        }
    }
</script>
