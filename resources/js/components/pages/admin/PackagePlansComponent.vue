<template>
    <div>
        <WebsiteNavbar />
        <CompanyNavbar />
        <h1 class="pricing-plan-title">Pricing Plan</h1>
        <div class="pacakges-plan-container container">
            <div class="get-free-trial">
                <h2>Get your free trial today</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                    ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum
                    dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
            </div>
            <div class="row m-0">
                <div class="package-box"  v-for="(item, index) in plans" :key="index">
                    <div class="pricing-detail-box">
                        <div class="about-pricing">
                            <p class="package-plan-title">{{item.title}}</p>
                            <p><span>RS {{item.amount}}</span> &nbsp;/ MONTH</p>
                            <p class="plan-description">{{item.description}}.</p>
                        </div>
                        <div class="package-benefits">
                            <ul class="package-benefits-list">
                                <li class="mt-0"><i class="fas tick fa-check-circle"></i>Post Jobs: {{item.job_post}}</li>
                                <li><i class="fas tick fa-check-circle"></i>Connect: {{item.connect}}</li>
                                <li><i v-if="item.is_personal_show == 1" class="far cross fa-times-circle"></i><i v-else class="fas tick fa-check-circle"></i>Show Full Info</li>
                            </ul>
                            <a  @click="buyPackage(item.id)" class="buy-plan-anker">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="need-help-section">
                <h1 class="need-help-title">Need Help?</h1>
                <div class="help-queries-wrap">
                    <div class="help-queries">
                        <h4>Q. Lorem Ipsum is simply dummy text of the printing and typesetting industry?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries.
                        </p>
                        <div>
                            <a class="read-more-descrp" href="">Read More &nbsp;<i class="fas fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="help-queries">
                        <h4>Q. Lorem Ipsum is simply dummy text of the printing and typesetting industry?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries.
                        </p>
                        <div>
                            <a class="read-more-descrp" href="">Read More &nbsp;<i class="fas fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="help-queries">
                        <h4>Q. Lorem Ipsum is simply dummy text of the printing and typesetting industry?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries.
                        </p>
                        <div>
                            <a class="read-more-descrp" href="">Read More &nbsp;<i class="fas fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="help-queries">
                        <h4>Q. Lorem Ipsum is simply dummy text of the printing and typesetting industry?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries.
                        </p>
                        <div>
                            <a class="read-more-descrp" href="">Read More &nbsp;<i class="fas fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="help-queries">
                        <h4>Q. Lorem Ipsum is simply dummy text of the printing and typesetting industry?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries.
                        </p>
                        <div>
                            <a class="read-more-descrp" href="">Read More &nbsp;<i class="fas fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../website/partials/navbar.vue';
    import CompanyNavbar from '../website/partials/CompanyNavbar.vue';

    export default {
        data() {
            return {
                plans: [],
            }
        },
        created() {
            this.getPackagePlans();
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
        },
        methods: {
            getPackagePlans() {
                axios.get('/api/get-package-plans')
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
                        Swal.fire({
                            text:  'Please Wait',
                            didOpen: () => {
                                Swal.showLoading() 
                            },
                        })
                        axios.get('/api/buy-package-plan/' + id)
                            .then((res) => {
                                if (res.data.success == false) {
                                    this.errors = res.data.errors
                                    Swal.close()
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Please Login',
                                        text: 'Login or Register yourself to enjoy experience',
                                    })
                                } else {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Successfull!😎',
                                        text: "Successfully placed order",
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        cancelButtonText: 'Ok',
                                        confirmButtonText: 'Download Invoice'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            // axios.get('download-invoice/'+res.data.order_id)
                                            // .then((response) => {
                                                window.open('/api/download-invoice/' + res.data.order_id, '_blank')
                                            // });
                                        }
                                    })
                                }
                            })
                    }
                })
            }
        },
    };

</script>
