<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Candidate</title>
</head>
<style>
    * {
        list-style: none;
        padding: 0px;
        margin: 0px;
    }

    .candidate-profile-container {
        margin-top: 35px;
        padding: 10px;
    }

    .candidate-pic-detail {
        /* margin-left: 10px; */
    }

    .candidate-detail-img {
        width: 200px;
        height: 200px;
        background-size: 100% 100%;
        border-radius: 5px;
        background: #081351;
    }

    .candidate-send-msg {
        margin-top: 5px;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 200px;
        height: 40px;
        background: #081351 0% 0% no-repeat padding-box;
        border-radius: 5px;
        font-size: 16px;
    }

    .ionic-send-msg {
        padding-right: 13px;
    }

    .candidate-detail-list {
        margin: 0px;
        padding: 0px;
    }
    .candidate-detail-wrap {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .detail-label {
        margin: 0px;
        font-size: 16px;
        font-weight: bold;
    }

    .candidate-profile-detail-wrap {
        border-top: 1px solid #707070;
        margin-top: 5px;
        padding-top: 18px;
    }

    .candidate-profile-detail {
        margin: 0px;
        padding: 0px;
        width: 100%;
    }

    .candidate-detail-label {
        color: #081351;
        font-size: 16px;
        height: 19px;
        padding-left: 8px !important;
        font-weight: bold;
        letter-spacing: 0.3px;
        margin-bottom: 8px;
        border-left: 3px solid #081351;
    }
    .candidate-detail-info>.candidate-info>li {
        font-size: 16px;
        color: #757575;
    }

    .candidate-detail-info>.candidate-info>li>span {
        font-size: 16px;
        color: #000000;
        font-weight: 500;
        padding-right: 5px;
    }

    .candidate-detail-info>.candidate-info>li>a {
        text-decoration: underline;
        color: #0645AD !important;
    }

    .candidate-detail-info>.candidate-info>.skills-candidate>div {
        background: #757575 0% 0% no-repeat padding-box;
        border-radius: 5px;
        color: #FFFFFF;
        font-weight: 400;
        padding: 5px 7px;
        width: fit-content;
        margin: 5px;
    }
    .basic-detail-title,
    .education-detail-title,
    .language-detail-title,
    .work-detail-title,
    .awards-detail-title,
    .portfolio-detail-title,
    .projects-detail-title {
        margin-top: 10px;
    }

</style>

<body>
    <div>
        <div class="candidate-profile-container">
            <div>
                <div>
                    <div class="candidate-pic-detail">
                        <div class="candidate-detail-img" style="background-image:url()"></div>
                    </div>
                </div>
                <div class="candidate-detail-wrap">
                    <div>
                        <ul class="candidate-detail-list">
                            <li class="candidate-name">Muhammad Ahmad</li>
                            <li class="candidate-location">Lahore</li>
                        </ul>
                        <p class="candidate-designation">Frontend Developer</p>
                    </div>
                    <p class="detail-label">Detailed Information</p>
                </div>
            </div>
            <div class="candidate-profile-detail-wrap">
                <ul class="candidate-profile-detail">
                    <li class="candidate-detail-label">CONTACT INFORMATION:</li>
                    <li class="candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>Phone:</span>03164361632</li>
                            <li><span>Address:</span>Lahore</li>
                            <li><span>Email:</span><u>ahmad.idenbrid@gmail.com</u></li>
                        </ul>
                    </li>
                </ul>
                <ul class="basic-detail-title candidate-profile-detail">
                    <li class="candidate-detail-label">BASIC INFORMATION:</li>
                    <li class="candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>Date of Birth:</span>11/12/1997</li>
                            <li><span>Gender:</span>Male</li>
                            <li><span>City:</span>Lahore</li>
                            <li><span>Zip Code:</span>54000</li>
                            <li><span>CNIC:</span>3110297279719</li>
                            <li><span>Bio:</span>Detail</li>
                        </ul>
                    </li>
                </ul>
                
                <ul class="education-detail-title candidate-profile-detail">
                    <li class="candidate-detail-label">EDUCATION:</li>
                    <li class="candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>Intermediate:</span>2014 to 2016 - Punjab Group of Colleges</li>
                            <li><span>Bachelors:</span>2016 to 2020 - BS (Computer Science) - University of South Asia,
                                Cantt Campus</li>
                            <li><span>Intermediate:</span>2014 to 2016 - Punjab Group of Colleges</li>
                            <li><span>Bachelors:</span>2016 to 2020 - BS (Computer Science) - University of South Asia,
                                Cantt Campus</li>
                            <li><span>Intermediate:</span>2014 to 2016 - Punjab Group of Colleges</li>
                            <li><span>Bachelors:</span>2016 to 2020 - BS (Computer Science) - University of South Asia,
                                Cantt Campus</li>
                        </ul>
                    </li>
                </ul>
                <ul class="work-detail-title candidate-profile-detail">
                    <li class="candidate-detail-label">WORK EXPERIENCE:</li>
                    <li class="-detail-info">
                        <ul class="candidate-info">
                            <li><span>Powerstar Group Limited:</span>Graphic Designer - 2 months</li>
                            <li><span>IDENBRID:</span>UI/UX Designer - Working</li>
                            <li><span>Powerstar Group Limited:</span>Graphic Designer - 2 months</li>
                            <li><span>IDENBRID:</span>UI/UX Designer - Working</li>
                            <li><span>Powerstar Group Limited:</span>Graphic Designer - 2 months</li>
                            <li><span>IDENBRID:</span>UI/UX Designer - Working</li>
                        </ul>
                    </li>
                </ul>
                <ul class="awards-detail-title candidate-profile-detail">
                    <li class="candidate-detail-label">SKILLS:</li>
                    <li class="candidate-detail-info">
                        <ul class="candidate-info">
                            <li class="skills-candidate">
                                <div>Html</div>
                                <div>Css</div>
                                <div>Laravel</div>
                                <div>JavaScript</div>
                                <div>React</div>
                                <div>NodeJs</div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="awards-detail-title candidate-profile-detail">
                    <li class="candidate-detail-label">AWARDS:</li>
                    <li class="candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>Best Entrepreneurship Gala Seller:</span>2020</li>
                            <li><span>Brainstorming Champion:</span>2019</li>
                            <li><span>Brainstorming Champion:</span>2020</li>
                        </ul>
                    </li>
                </ul>
                <ul class="language-detail-title candidate-profile-detail">
                    <li class="candidate-detail-label">LANGUAGES:</li>
                    <li class="candidate-detail-info">
                        <ul class="candidate-info">
                            <li class="skills-candidate">
                                <div>English</div>
                                <div>Urdu</div>
                                <div>German</div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="portfolio-detail-title candidate-profile-detail">
                    <li class="candidate-detail-label">PORTFOLIO:</li>
                    <li class="candidate-detail-info">
                        <ul class="candidate-info">
                            <li><a href="" target="_blank">https://www.behance.net/abdullahnasir8</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="projects-detail-title candidate-profile-detail">
                    <li class="candidate-detail-label">PROJECTS:</li>
                    <li class="candidate-detail-info">
                        <ul class="candidate-info">
                            <li><a href="" target="_blank">https://www.behance.net/abdullahnasir8</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
