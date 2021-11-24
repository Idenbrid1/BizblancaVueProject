<template>
    <div>
        <WebsiteNavbar/>
        <h1>Pakages Plan</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <tr v-for="(item, index) in plans" :key="index">
                <td>{{item.title}}</td>
                <td>{{item.amount}}</td>
                <td><a @click="buyPakage(item.id)">Buy Now</a></td>
            </tr>
        </table>
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../website/partials/navbar.vue';
    export default {
        data() {
            return {
                plans: [],
            }
        },
        mounted() {
            
        },
        created(){
            this.getPakagePlans()
        },
        components: {
            WebsiteNavbar,
        },
        methods: {
            getPakagePlans() {
                axios.get('/get-pakage-plans')
                .then((response) => {
                    this.plans = response.data
                });
            },
            buyPakage(id){
                Swal.fire({
                    title: 'Are you sure to buy this service?',
                    text: "If you use any pakage before it will be overwrite! Thanks",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Not Yet',
                    confirmButtonText: 'Confirm'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.get('/buy-pakage-plan/'+ id)
                        .then((res) => {
                            if (res.data.success == false) {
                                this.errors = res.data.errors
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Please Login',
                                    text: 'Login or Register yourself to enjoy experience',
                                })
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Successfull!😎',
                                    text: 'Successfully placed order',
                                    footer: 'Please check you mail or spam box for invoice and wait for bizblance team response! Thanks',
                                })
                            }
                        })
                    }
                })
            }
        },
    };

</script>