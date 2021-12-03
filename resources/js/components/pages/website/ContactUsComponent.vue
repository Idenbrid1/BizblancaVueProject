<template>
    <div>
        <WebsiteNavbar />
        <section class="sixth-section py-5" id="contact">
            <div class="container">
                <div class="contact-us-page">
                    <div class="contact-page-feilds">
                        <form action="" class="">
                            <div class="row m-0">
                                <div class="col-12 px-2">
                                    <div class="heading-div">
                                        <h2 class="site-heading contact-page-title mb-0">We Would Love To Hear From You!
                                        </h2>
                                    </div>
                                    <p class="contact-page-descrp">
                                        Do you have any questions? Don't be concerned! Simply contact a member of our
                                        customer service team. Your remarks have always been meaningful to us.
                                    </p>
                                </div>
                                <div class="col-12 px-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control contact-feilds" v-model="contact_us.name"
                                            placeholder="Enter Name" name="" id="" maxlength="50" required />
                                        <small>
                                            <span v-if="errors.name != null" class="text-danger float-left">
                                                {{errors.name[0]}}
                                            </span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-12 px-2">
                                    <div class="form-group">
                                        <input type="email" class="form-control contact-feilds"
                                            v-model="contact_us.email" placeholder="Enter Email" name="" id=""
                                            maxlength="50" required />
                                        <small>
                                            <span v-if="errors.email != null" class="text-danger float-left">
                                                {{errors.email[0]}}
                                            </span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-12 px-2">
                                    <div class="form-group">
                                        <input type="number" class="form-control contact-feilds"
                                            v-model="contact_us.phone" placeholder="Enter Phone" name="" id=""
                                            maxlength="20" required />
                                        <small>
                                            <span v-if="errors.phone != null" class="text-danger float-left">
                                                {{errors.phone[0]}}
                                            </span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-12 px-2">
                                    <div class="form-group">
                                        <textarea rows="4" type="text" class="form-control contact-feilds message-box"
                                            v-model="contact_us.message" placeholder="Enter Message" name="" id=""
                                            required></textarea>
                                        <small>
                                            <span v-if="errors.message != null" class="text-danger float-left">
                                                {{errors.message[0]}}
                                            </span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-12 px-2 py-4">
                                    <a @click.prevent="submitContactUs()" class="contact-submit-anker">Send
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="map-office office-info">
                        <div class="info-about-office">
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>176-Y, DHA Phase 4, Lahore</span>
                            </p>
                            <p>
                                <i class="fa fa-phone-alt" aria-hidden="true"></i>
                                <span>0301-4345825</span>
                            </p>
                            <p>
                                <i class="fas fa-envelope" aria-hidden="true"></i>
                                <span>info@bizblanca.com</span>
                            </p>
                        </div>
                        <div style="width: 100%">
                            <iframe width="100%" height="220" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=176%20Y%20block%20%20DHA%20Phase%203%20%20Lahore%20Cantt%20%20Pakistan+(Idenbrid)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                            <a href="./comming.html">Bizblanca office map</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from './partials/navbar.vue';
    export default {
        data() {
            return {
                isRole: '',
                contact_us: {
                    name: '',
                    email: '',
                    phone: '',
                    message: '',
                },
                errors: []
            };
        },
        components: {
            WebsiteNavbar,
        },
        created() {},
        methods: {
            submitContactUs() {
                Swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                axios.post('/submit-contact-us', this.contact_us)
                    .then((response) => {
                        if (response.data.success == true) {
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Contact us query raised',
                                text: 'Thanks, Message Received! We Will Reply You Soon.',
                            })
                            this.contact_us = {
                                name: '',
                                email: '',
                                phone: '',
                                message: '',
                            };
                            this.errors = []

                        } else {
                            Swal.close()
                            this.errors = response.data.errors
                        }
                    });
            }
        }
    };

</script>
