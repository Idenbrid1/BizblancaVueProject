<template>
    <div>
        <WebsiteNavbar />
        <!-- <h1>Packages Plan</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <tr v-for="(item, index) in plans" :key="index">
                <td>{{item.title}}</td>
                <td>{{item.amount}}</td>
                <td><a @click="buyPackage(item.id)">Buy Now</a></td>
            </tr>
        </table> -->
        <h1 class="pricing-plan-title">Pricing Plan</h1>
        <div class="pacakges-plan-container container">
            <div class="get-free-trial">
                <h2>Get your free trial today</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
            </div>
            <div class="row m-0">
                <div class="col-12 col-md-4">
                    <div class="pricing-detail-box">
                        <div class="about-pricing">
                            <p class="package-plan-title">BASIC</p>
                            <p><span>RS 100</span> / MONTH</p>
                            <p class="plan-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        created() {
            this.getPackagePlans()
        },
        components: {
            WebsiteNavbar,
        },
        methods: {
            getPackagePlans() {
                axios.get('/get-package-plans')
                    .then((response) => {
                        this.plans = response.data
                    });
            },
            buyPackage(id) {
                Swal.fire({
                    title: 'Are you sure to buy this service?',
                    text: "If you use any package before it will be overwrite! Thanks",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Not Yet',
                    confirmButtonText: 'Confirm'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.get('/buy-package-plan/' + id)
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
