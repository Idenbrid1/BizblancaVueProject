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
                                        <h2 class="site-heading contact-page-title mb-0">Contact Us</h2>
                                    </div>
                                    <p class="contact-page-descrp">
                                        Please complete the form with your enquiry for the Bizblanca
                                        team and we will respond to you as soon as possible.
                                    </p>
                                </div>
                                <div class="col-12 px-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control pl-2"
                                            placeholder="Please enter your full name" name="" id="" maxlength="50"
                                            required />
                                    </div>
                                </div>
                                <div class="col-12 px-2">
                                    <div class="form-group">
                                        <input type="email" class="form-control pl-2"
                                            placeholder="Please enter your email" name="" id="" maxlength="50"
                                            required />
                                    </div>
                                </div>
                                <div class="col-12 px-2">
                                    <div class="form-group">
                                        <input type="number" class="form-control pl-2"
                                            placeholder="Please enter your phone number" name="" id="" maxlength="20"
                                            required />
                                    </div>
                                </div>
                                <div class="col-12 px-2">
                                    <div class="form-group">
                                        <textarea rows="4" type="text" class="form-control pl-3 message-box"
                                            placeholder="Message" name="" id="" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 px-2 py-4">
                                    <a href="./comming.html" class="contact-submit-anker w-100 d-block text-center">Send
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
                        </div>
                        <div style="width: 100%">
                            <iframe width="100%" height="260" frameborder="0" scrolling="no" marginheight="0"
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
    import WebsiteNavbar from './partials/navbar.vue';
    export default {
        data() {
            return {
                isRole: '',
            };
        },
        components: {
            WebsiteNavbar,
        },
        created() {},
        methods: {

        }
    };

</script>
