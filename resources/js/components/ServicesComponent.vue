<template>
    <div class="container">
        <h1> Список услуг</h1>
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item"  v-for="{ id, name } in servicesList.data">
                    <a v-bind:href="'/service/'+ id">{{name}}</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <pagination class="mb-0" :data="servicesList" :align="align" @pagination-change-page="getResults"></pagination>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                servicesList: {},
                align: 'center'
            };
        },
        created() {
            this.fetchData();
        },
        methods: {
            fetchData() {
                axios
                    .get('services/list')
                    .then(response => {
                        this.servicesList = response.data;
                    });
            },
            getResults(page = 1) {
                axios.get('services/list?page=' + page)
                    .then(response => {

                        this.servicesList = response.data;
                    });
            }
        }
    }
</script>
