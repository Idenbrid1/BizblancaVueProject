<template>
    <div>
        <WebsiteNavbar />
        <!-- <CompanyNavbar /> -->
        <div class="text-center my-5">
            <h1>Chat is under developemnet</h1>
        <router-link to="/">Back to Home</router-link>
        </div>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    import CompanyNavbar from '../partials/CompanyNavbar.vue';
    // import pagination from 'laravel-vue-pagination';
    import Multiselect from 'vue-multiselect'
    export default {
        data() {
            return {
                options: [{
                        name: 'Javascript',
                        language: 'JavaScript'
                    },
                    {
                        name: 'Adonis',
                        language: 'Adonis'
                    },
                    {
                        name: 'Rails',
                        language: 'Ruby'
                    },
                    {
                        name: 'Sinatra',
                        language: 'Ruby'
                    },
                    {
                        name: 'Laravel',
                        language: 'PHP'
                    },
                    {
                        name: 'Phoenix',
                        language: 'Elixir'
                    }
                ],
                record: {
                    working_experience: '',
                    city: '',
                    gender: '',
                    keyword: '',
                    skills: [],
                },
                searchData: {},
            }
        },
        mounted() {
            var swiper = new Swiper(".bizer-ranking-slider", {
                pagination: {
                    el: ".swiper-pagination",
                },
            });
            var swiper = new Swiper(".ads-slider", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        },
        created() {
            this.getCandidate()
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
            Multiselect,
            // pagination,
        },
        methods: {
            addSkill(newTag) {
                const tag = {
                    name: newTag,
                    code: newTag
                }
                this.options.push(tag)
                this.record.skills.push(tag)
            },
            getCandidate(page = 1) {
                axios.get('/get-candidates-search?page=' + page)
                    .then((response) => {
                        this.searchData = response.data
                    });
            },
            search() {
                axios.post('/candidate-search', this.record)
                    .then((response) => {
                        this.searchData = response
                    });
            },
            keywordSearch() {
                axios.get('/candidate-keyword-search/' + this.record.keyword)
                    .then((response) => {
                        this.searchData = response.data
                    });
            },
        },
    };

</script>
