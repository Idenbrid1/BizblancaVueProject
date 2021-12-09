< !DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CV Candidate</title>
    </head>
    <style>
        * {
            font-family: 'Red Hat Display', sans-serif;
            list-style: none;
            padding: 0px;
            margin: 0px;
        }

        .candidate-profile-container {
            margin-top: 5px;
            padding: 20px;
            position: relative;
        }

        .candidate-detail-img {
            width: 150px;
            height: 150px;
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
            position: absolute;
            left: 24%;
            top: 1.3%;
        }

        .candidate-detail-list>.candidate-name {
            font-size: 32px;
            font-weight: bold;
        }

        .detail-label {
            margin: 0px;
            font-size: 16px;
            font-weight: bold;
            position: absolute;
            left: 24%;
            top: 13.5%;
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

        .basic-detail-title,
        .education-detail-title,
        .language-detail-title,
        .work-detail-title,
        .awards-detail-title,
        .portfolio-detail-title,
        .projects-detail-title {
            margin-top: 10px;
        }

        .candidate-designation,
        .gender-age,
        .scout-bizblanca {
            color: #081351;
            font-size: 16px;
            font-weight: bold;
        }

        /* new css */
        .candidate-info-box {
            padding-bottom: 10px;
            border-bottom: 1px solid #757575;
        }

        .candidate-detail-info {
            padding-top: 20px;
            position: relative;
        }

        .candidate-info {
            position: absolute;
            left: 30%;
            width: 551px;
        }

        .candidate-detail-info>.candidate-info>li {
            color: #757575;
            margin: 0px 0px 5px 0px;
            font-weight: 400;
            font-size: 15px;
        }

        .candidate-detail-info>.candidate-info>li>span {
            color: #000000;
            padding-right: 5px;
            /* font-weight: 400; */
            margin: 0px 0px 5px 0px;
        }

        .basic-info {
            position: absolute;
            top: 65px;
        }

        .education-info {
            position: absolute;
            top: 245px;
        }

        .experience-info {
            position: absolute;
            top: 335px;
        }

        .skills-info {
            position: absolute;
            top: 410px;
        }
        .skills-info li span{
            background: #757575;
            color: #fff !important;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 5px;
        }
        .language-info li span{
            background: #757575;
            color: #fff !important;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 5px;
        }

        .awards-info {
            position: absolute;
            top: 455px;
        }

        .language-info {
            position: absolute;
            top: 530px;
        }

        .project-info {
            position: absolute;
            top: 625px;
        }

        .portfolio-info {
            position: absolute;
            top: 600px;
        }


        /* new css */

    </style>

    <body>
        <div>
            <div class="candidate-profile-container">
                <div class="candidate-info-box">
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
                                <p class="candidate-designation">Frontend Developer</p>
                            </ul>
                        </div>
                        <p class="detail-label">Detailed Information</p>
                    </div>
                </div>
                <div class="candidate-detail-info"><span class="candidate-detail-label">CONTACT INFORMATION:</span>
                    <ul class="candidate-info contact-info">
                        <li><span>Phone:</span>03164361632</li>
                        <li><span>Address:</span>Lahore</li>
                        <li><span>Email:</span><u>ahmad.idenbrid@gmail.com</u></li>
                    </ul>
                </div>
                <div class="candidate-detail-info"><span class="candidate-detail-label basic-info">BASIC
                        INFORMATION:</span>
                    <ul class="candidate-info basic-info">
                        <li><span>Date of Birth:</span>11/12/1997</li>
                        <li><span>Gender:</span>Male</li>
                        <li><span>City:</span>Lahore</li>
                        <li><span>Zip Code:</span>54000</li>
                        <li><span>CNIC:</span>3110297279719</li>
                        <li><span>Bio:</span>I am Graduated from University of South Asia,
                            I have done BS Computer Science. My expertise are UI/UX Designing,
                            Product Designing,
                            Graphic Designing,
                            HTML,
                            CSS.</li>
                    </ul>
                </div>
                <div class="candidate-detail-info">
                    <span class="candidate-detail-label education-info">EDUCATION:</span>
                    <ul class="candidate-info education-info">
                        <li>
                            <span>Intermediate:</span>2014 to 2016 - Punjab Group of Colleges</li>
                        <li><span>Bachelors:</span>2016 to 2020 - BS (Computer Science) - University of South Asia,
                            Cantt Campus</li>
                        <li><span>Intermediate:</span>2014 to 2016 - Punjab Group of Colleges</li>
                    </ul>
                </div>
                <div class="candidate-detail-info">
                    <span class="candidate-detail-label experience-info">WORK EXPERIENCE:</span>
                    <ul class="candidate-info experience-info">
                        <li><span>Powerstar Group Limited:</span>Graphic Designer - 2 months</li>
                        <li><span>Powerstar Group Limited:</span>Graphic Designer - 2 months</li>
                        <li><span>Powerstar Group Limited:</span>Graphic Designer - 2 months</li>
                    </ul>
                </div>
                <div class="candidate-detail-info">
                    <span class="candidate-detail-label skills-info">SKILLS:</span>
                    <ul class="candidate-info skills-info">
                        <li class="skills-candidate">
                            <span>English</span>
                            <span>Urdu</span>
                            <span>German</span>
                        </li>
                    </ul>
                </div>
                <div class="candidate-detail-info">
                    <span class="candidate-detail-label awards-info">AWARDS:</span>
                    <ul class="candidate-info awards-info">
                        <li><span>Best Entrepreneurship Gala Seller:</span>2020</li>
                        <li><span>Brainstorming Champion:</span>2019</li>
                        <li><span>Brainstorming Champion:</span>2020</li>
                    </ul>
                </div>
                <div class="candidate-detail-info">
                    <span class="candidate-detail-label language-info">LANGUAGE:</span>
                    <ul class="candidate-info language-info">
                        <li class="skills-candidate">
                            <span>English</span>
                            <span>Urdu</span>
                            <span>German</span>
                        </li>
                    </ul>
                </div>
                <div class="candidate-detail-info">
                    <span class="candidate-detail-label portfolio-info">PORTFOLIO:</span>
                    <ul class="candidate-info portfolio-info">
                        <li><a href="" target="_blank">https://www.behance.net/abdullahnasir8</a></li>
                    </ul>
                </div>
                <div class="candidate-detail-info">
                    <span class="candidate-detail-label project-info">PROJECTS:</span>
                    <ul class="candidate-info project-info">
                        <li><a href="" target="_blank">https://www.behance.net/abdullahnasir8</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </body>

    </html>
