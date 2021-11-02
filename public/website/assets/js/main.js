// Home slider
var swiper = new Swiper(".HomeSwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    /* autoplay: {
       delay: 2000,
       disableOnInteraction: false,
     },*/
});
// Blogs slider
var swiper = new Swiper(".BlogsSwiper", {
    slidesPerView: 2,
    spaceBetween: 1,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3.5,
                spaceBetween: 30,
            },
            1224: {
                slidesPerView: 4.5,
                spaceBetween: 5,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        1224: {
            slidesPerView: 3.5,
            spaceBetween: 5,
        },
    }
})
// nav on scroll color change / shrink
// window.onscroll = function () {
//   scrollFunction();
// };

/*function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("header-scroll-color").style.backgroundColor ="#fff";
    document.getElementById("login-scroll-color").style.backgroundImage =
      "linear-gradient(-30deg, #00EBC6, #484FE2, #813AF3)";
    document.getElementById("scout-scroll-color").style.backgroundImage =
    "linear-gradient(-30deg, #00EBC6, #484FE2, #813AF3)";
    document.getElementById("post-scroll-color").style.backgroundImage =
    "linear-gradient(-30deg, #00EBC6, #484FE2, #813AF3)";
  } else {
    document.getElementById("header-scroll-color").style.backgroundColor ="#fff";
    document.getElementById("login-scroll-color").style.backgroundImage ="linear-gradient(-30deg, #00EBC6, #484FE2, #813AF3)";
    document.getElementById("scout-scroll-color").style.backgroundImage = "linear-gradient(-30deg, #00EBC6, #484FE2, #813AF3)";
    document.getElementById("post-scroll-color").style.backgroundImage ="linear-gradient(-30deg, #00EBC6, #484FE2, #813AF3)";
  }
}*/

//  side nav
$(document).ready(function () {

    let count = 0;
    $('#humburger-menu').on('click', (e) => {
        if (count == 0) {
            $('.hidden-nav').fadeIn(100);
            count = 1;
        } else {
            $('.hidden-nav').fadeOut(100);
            count = 0;
        }
    });
})


var swiper = new Swiper(".processslider", {
    slidesPerView: 1,
    spaceBetween: 1,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2.5,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 30,
        },
        1224: {
            slidesPerView: 7,
            spaceBetween: 30,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});
/* blog list slide  */


var swiper = new Swiper(".bloglistlider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2.5,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1224: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});


/* logo slide  */


var swiper = new Swiper(".logoslider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2.5,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1224: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});


// add qualification

function removeSection(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().remove();
}
// add qualification

let addQualificationHtml = `
  <div class="col-12 QualificationSection">
  <div class="subForm w-100">
  <div class="modelTitle my-3">
                              <div class='d-flex w-100'>
                                <div class="mr-2 titleEffect"></div>
                                <h4 class="m-0 modelTitleText">Qualification</h4>
                              </div>
                              <i onclick="removeSection(event)" class="fas fa-times"></i>

                          </div>
              <div class="subFormFields">
  <div class="row">
      <div class="col-lg-6 mb-2">
          <label class="modelLabel" for="institute">Institute Type</label>
          <input name="institute" class="modelInput" placeholder="Please Select">
      </div>
      <div class="col-lg-6">
          <label class="modelLabel" for="instituteName">Institute name</label>
          <input name="instituteName" class="modelInput" placeholder="Enter Institute Name" type="text">
      </div>
  </div>
  <div class="row mt-3">
      <div class="col-lg-6 mb-2">
          <label class="modelLabel" for="startingDate">Starting Date</label>
          <input name="startingDate" class="modelInput" placeholder="Please Select Starting Date" type="date">
      </div>
        <div class="col-lg-6 row no-gutters">
            <div class="col-lg-6">
                <label class="modelLabel" for="endingDate">Ending Date</label>
                <input name="endingDate" class="modelInput" placeholder="Please Select Ending Date" type="date">
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center pt-4">
                <input class="mr-1" name="studyingStatus" type="checkbox">
                <label class="modelLabel m-0" for="endingDate">Currently Studying</label>
            </div>
        </div>
  </div>

  <div class="row mt-3">
      <div class="col-lg-12">
          <label class="modelLabel" for="department">Department</label>
          <input name="Department" class="modelInput" placeholder="Enter Department" type="text">
      </div>
  </div>
  </div>
  </div>
  </div>
  `;
$("#addQualificationBtn").on("click", function () {
    if ($(".QualificationSection").length < 3) {
        $("#QualificationFieldsContainer").append(addQualificationHtml);
    } else {
        window.alert("You can add maximum 3 qualifications.");
    }
});

function removeSection(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().remove();
}
// Desired Job
let desiredJob = `<div class="col-12">
  <div id='subForm' class="subForm">
  <div class="modelTitle my-3">
  <div class='d-flex w-100'>
    <div class="mr-2 titleEffect"></div>
    <h4 class="m-0 modelTitleText">Desired Job</h4>
  </div>
  <i onclick="removeExperience(event)" class="fas fa-times"></i>

  </div>
      <div class="subFormFields">
          <div class="row">
              <div class="col-lg-6">
                  <label class="modelLabel" for="currentStatus">Looking for Job</label>
                  <div class="form-group m-0">
                      <label for="currentStatus">Yes</label>
                      <input class="mx-1" name="currentStatus" type="radio">
                      <label for="currentStatus">No</label>
                      <input class="mx-1" name="currentStatus" type="radio">
                  </div>
              </div>

          </div>
          <div class="row mt-3">
              <div class="col-lg-6 mb-2">
                  <label class="modelLabel" for="location">Location</label>
                  <input name="location" class="modelInput" placeholder="Enter Location">
              </div>
              <div class="col-lg-6">
                  <label class="modelLabel" for="area">Area</label>
                  <input name="area" class="modelInput" placeholder="Enter Area">
              </div>
          </div>
          <div class="row mt-3">
              <div class="col-lg-6 mb-2">
                  <label class="modelLabel" for="expectedSalary">Expected Salary</label>
                  <input name="expectedSalary" class="modelInput" placeholder="Enter Expected Salary">
              </div>
              <div class="col-lg-6">
                  <label class="modelLabel" for="joiningDate">Joining From</label>
                  <input name="joiningDate" class="modelInput" placeholder="Please Select" type="date">
              </div>
          </div>
          <div class="row mt-3">
              <div class="col-lg-6 mb-2">
                  <label class="modelLabel" for="position">Position</label>
                  <input name="position" class="modelInput" placeholder="Enter Position" type="text">
              </div>
              <div class="col-lg-6">
                  <label class="modelLabel" for="shift">Shift</label>
                  <input name="shift" class="modelInput" placeholder="Enter Shift" type="text">
              </div>
          </div>

      </div>
  </div>
  </div>`
$("#addDesiredJobBtn").on("click", function () {
    if ($(".subForm").length < 3) {
        $("#subFormFieldsContainer").append(desiredJob);
    } else {
        window.alert("You can add maximum 3 qualifications.");
    }
});

function removeSection(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().remove();
}
// language
let languageModel = `
<div class="col-md-4 LanguagesSection">
                                            <div class="form-group">
                                                <div class="float-right">
                                                <i onclick="removeLanguage(event)" class="fas fa-times"></i>
                                                </div>
                                                <input name="language_name[]" class="form-control" value="" for="english" style="margin-bottom: 10px;">
                                                <select name="language_level[]" class="form-control" id="language">
                                                    <option value="Beginner">Beginner</option>
                                                    <option value="Native">Native</option>
                                                    <option value="Intermediate">Intermediate</option>
                                                    <option value="Expert">Expert</option>
                                                </select>
                                            </div>
                                        </div>`;
$("#addLanguageBtn").on("click", function () {
    if ($(".LanguagesSection").length < 6) {
        $("#LanguagesFields").append(languageModel);
    } else {
        window.alert("You can add maximum 3 Jobs.");
    }
});

function removeLanguage(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().parent().remove();
}

//project
let projectHTML = `
  <div class="col-12 ProjectSection">
                      <div id='subForm' class="subForm">
                      <div class="modelTitle my-3">
                      <div class='d-flex w-100'>
                        <div class="mr-2 titleEffect"></div>
                        <h4 class="m-0 modelTitleText">Project</h4>
                      </div>
                      <i onclick="removeProjectSection(event)" class="fas fa-times"></i>
                  </div>
                          <div class="subFormFields">
                          <div class="row">
                          <div class="col-12 col-md-6">
                              <div class="form-group">
                                  <label for="projectName">Project Name</label>
                                  <input name="projectName[]" class="form-control" value="" placeholder="Enter Project Name" type="text" />
                              </div>
                          </div>
                          <div class="col-12 col-md-6">
                              <div class="form-group">
                                  <label for="projectLink">Link</label>
                                  <input name="projectLink[]" class="form-control" value="" placeholder="Enter Link" type="text" />
                              </div>
                          </div>
                          <div class="col-12 col-md-6">
                              <div class="form-group">
                                  <label for="startingDate">Starting Date</label>
                                  <input name="startingDate[]" class="form-control" value="" placeholder="Please Select Starting Date" type="date" />
                              </div>
                          </div>
                          <div class="col-12 col-md-6">
                              <div class="form-group">
                                  <label for="endingDate">Ending Date</label>
                                  <input name="endingDate[]" class="form-control" value="" placeholder="Please Select Ending Date" type="date" />
                              </div>
                          </div>
                          <div class="col-12 col-md-6">
                              <div class="form-group">
                                  <label for="endingDate">Ending Date</label>
                                  <input name="endingDate[]" class="form-control" value="" placeholder="Please Select Ending Date" type="date" />
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="description">Description</label>
                                  <textarea cols="30" rows="10" name="description[]" class="form-control" placeholder="Description"></textarea>
                              </div>
                          </div>
                      </div>
                          </div>
                      </div>
                  </div>
  `
$("#addProjectBtn").on("click", function () {
    if ($(".ProjectSection").length < 3) {
        $("#ProjectFieldsContainer").append(projectHTML);
    } else {
        window.alert("You can add maximum 3 Projects.");
    }
});

function removeProjectSection(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().remove();
}



// current Job
let jobExperience = `
  <div class="col-12">
  <div id='subForm' class="subForm">
  <div class="modelTitle my-3">
                              <div class='d-flex w-100'>
                                <div class="mr-2 titleEffect"></div>
                                <h4 class="m-0 modelTitleText">Current Job</h4>
                              </div>
                              <i onclick="removeExperience(event)" class="fas fa-times"></i>

                          </div>
      <div class="subFormFields">
          <div class="row">
              <div class="col-lg-6">
                  <label class="modelLabel" for="currentStatus">Current Working</label>
                  <div class="form-group m-0">
                      <label for="currentStatus">Yes</label>
                      <input class="my-1" name="currentStatus" type="radio">
                      <label for="currentStatus">No</label>
                      <input class="my-1" name="currentStatus" type="radio">
                  </div>
              </div>

          </div>
          <div class="row mt-3">
              <div class="col-lg-6 mb-2">
                  <label class="modelLabel" for="startingDate">Starting Date</label>
                  <input name="startingDate" class="modelInput" placeholder="Please Select Starting Date" type="date">
              </div>
              <div class="col-lg-6">
                  <label class="modelLabel" for="endingDate">Ending Date</label>
                  <input name="endingDate" class="modelInput" placeholder="Please Select Ending Date" type="date">
              </div>
          </div>
          <div class="row mt-3">
              <div class="col-lg-6 mb-2">
                  <label class="modelLabel" for="currentPosition">Current Position</label>
                  <input name="currentPosition" class="modelInput" placeholder="Enter current position" type="text">
              </div>
              <div class="col-lg-6">
                  <label class="modelLabel" for="currentPositionStatus">Current Status</label>
                  <input name="currentPositionStatus" class="modelInput" placeholder="Enter Current Status" type="text">
              </div>
          </div>
          <div class="row mt-3">
              <div class="col-lg-6 mb-2">
                  <label class="modelLabel" for="personsManaged">No of Persons Managed</label>
                  <input name="personsManaged" class="modelInput" placeholder="Enter No of Persons Managed" type="text">
              </div>
              <div class="col-lg-6">
                  <label class="modelLabel" for="skills">Skills</label>
                  <input name="skills" class="modelInput" placeholder="Enter Skills" type="text">
              </div>
          </div>
          <div class="row mt-3">
              <div class="col-lg-6 mb-2">
                  <label class="modelLabel" for="personsManaged">Current Company</label>
                  <input name="personsManaged" class="modelInput" placeholder="Enter Current Company" type="text">
              </div>
              <div class="col-lg-6">
                  <label class="modelLabel" for="skills">Current Salary</label>
                  <input name="skills" class="modelInput" placeholder="Enter Current Salary" type="text">
              </div>
          </div>
      </div>
  </div>
  </div>
                              `;
$("#addJobBtne").on("click", function () {
    if ($(".subFormFields").length < 3) {
        $("#subFormFieldsContainer").append(jobExperience);
    } else {
        window.alert("You can add maximum 3 Jobs.");
    }
});
// currently working
let Currentjob = `
<div class="col-12 CurrentJobSection">
<div id='subForm' class="subForm">
    <div class="modelTitle my-3">
        <div class="mr-2 titleEffect"></div>
        <div class="w-100 d-flex justify-content-between">
        <h4 class="m-0 modelTitleText">Current Job</h4>
        <i onclick="removeCurrentJob(event)" class="fas fa-times"></i>
        </div>
    </div>
    <div class="subFormFields">
        <div class="row">
            <div class="col-lg-6">
                <label class="modelLabel" for="currentStatus">Current Working</label>
                <div class="form-group m-0">
                    <label for="currentStatus">Yes</label>
                    <input class="my-1" name="currentStatus" type="radio">
                    <label for="currentStatus">No</label>
                    <input class="my-1" name="currentStatus" type="radio">
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-lg-6 mb-2">
                <label class="modelLabel" for="startingDate">Starting Date</label>
                <input name="startingDate" class="modelInput" placeholder="Please Select Starting Date" type="date">
            </div>
            <div class="col-lg-6">
                <label class="modelLabel" for="endingDate">Ending Date</label>
                <input name="endingDate" class="modelInput" placeholder="Please Select Ending Date" type="date">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 mb-2">
                <label class="modelLabel" for="currentPosition">Current Position</label>
                <input name="currentPosition" class="modelInput" placeholder="Enter current position" type="text">
            </div>
            <div class="col-lg-6">
                <label class="modelLabel" for="currentPositionStatus">Current Status</label>
                <input name="currentPositionStatus" class="modelInput" placeholder="Enter Current Status" type="text">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 mb-2">
                <label class="modelLabel" for="personsManaged">No of Persons Managed</label>
                <input name="personsManaged" class="modelInput" placeholder="Enter No of Persons Managed" type="text">
            </div>
            <div class="col-lg-6">
                <label class="modelLabel" for="skills">Skills</label>
                <input name="skills" class="modelInput" placeholder="Enter Skills" type="text">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 mb-2">
                <label class="modelLabel" for="personsManaged">Current Company</label>
                <input name="personsManaged" class="modelInput" placeholder="Enter Current Company" type="text">
            </div>
            <div class="col-lg-6">
                <label class="modelLabel" for="skills">Current Salary</label>
                <input name="skills" class="modelInput" placeholder="Enter Current Salary" type="text">
            </div>
        </div>
    </div>
</div>
</div>`;
$("#addAnOtherJobBtn").on("click", function () {
    if ($(".CurrentJobSection").length < 3) {
        $("#CurrentJobFieldsContainer").append(Currentjob);
    } else {
        window.alert("You can add maximum 3 Jobs.");
    }
});

function removeCurrentJob(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().parent().remove();
}
$("#working_yes").on("click", (e) => {
    $("#working-feilds").html(workingFeilds);
});
$("#not_working").on("click", (e) => {
    $("#working-feilds").html("");
});
$("#looking_for_job_yes").on("click", (e) => {
    $("#looking-job-feilds").html(lookingForJobFeilds);
});
$("#looking_for_job_no").on("click", (e) => {
    $("#looking-job-feilds").html("");
});

// skills add

let skillsAdd = ` <div class="col-12 col-md-4 SkillsSection">
                      <div class="form-group">
                      <i class="fas fa-times float-right" onclick="removeSkill(event)"></i>
                          <input name="skill_name[]" value="" for="english" class="form-control">
                          <select name="skill_level[]" id="language" class="form-control">
                              <option value="Beginner">Beginner</option>
                              <option value="Native">Native</option>
                              <option value="Intermediate">Intermediate</option>
                              <option value="Expert">Expert</option>
                          </select>
                      </div>
                  </div>                      
                      `;

$("#addSkillsBtn").on("click", function () {
    if ($(".SkillsSection").length < 10) {
        $("#SkillsFields").append(skillsAdd);
    } else {
        window.alert("You can add maximum 10 skills.");
    }
});

function removeSkill(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().remove();
}

// experience
let singleExperience = `
  <div class="col-12 WorkExperienceSection">
                      <div id='subForm' class="subForm">

                          <div class="modelTitle my-3">
                              <div class='d-flex w-100'>
                                <div class="mr-2 titleEffect"></div>
                                <h4 class="m-0">Work Experience</h4>
                              </div>
                              <i onclick="removeExperience(event)" class="fas fa-times"></i>

                          </div>
                          <div class="subFormFields">
                          <div class="row">
                              <div class="col-12 col-md-6">
                                  <div class="form-group">
                                      <label for="company">Company</label>
                                      <input name="company_name[]" id="company" type="text" class="form-control" placeholder="Enter Company"/>
                                  </div>
                              </div>
                              <div class="col-12 col-md-6">
                                  <div class="form-group">
                                      <label for="position">Position</label>
                                      <input name="company_designation[]" type="text" class="form-control" placeholder="Enter Position" />
                                  </div>
                              </div>
                              <div class="col-12 col-md-6">
                                  <div class="form-group">
                                      <label for="startingDate">Starting Date</label>
                                      <input name="company_start_date[]" id="startingDate" class="form-control" type="date" placeholder="Please Select" />
                                  </div>
                              </div>
                              <div class="col-12 col-md-6">
                                  <div class="row no-gutters align-items-center">
                                      <div class="col-6">
                                          <div class="form-group">
                                              <label for="experience_end_date{{$experience->id}}">Ending Date</label>
                                              <input name="company_end_date[]" id="experience_end_date{{$experience->id}}" class="form-control" type="date" placeholder="Please Select">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group d-flex align-items-center justify-content-center m-0">
                                              <input class="mr-1" name="currentWorking" id="experience_checkbox_end_date{{$experience->id}}" type="checkbox" onchange="disabledEndDateExperience({{$experience->id}})">
                                              <label class="m-0" for="experience_checkbox_end_date{{$experience->id}}">Currently Working</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-12 col-md-6">
                                  <span>Current Status</span>
                                  <div class="form-group">
                                      <select class="form-control" name="company_is_working_currently[]" id="company_is_working_currently">
                                          <option value="1">Active</option>
                                          <option value="0">Inactive</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                  </div>
      `;

$("#addExperiencesBtn").on("click", function () {
    if ($(".WorkExperienceSection").length < 3) {
        $("#WorkExperienceContainer").append(singleExperience);
    } else {
        window.alert("You can add maximum 3 experience.");
    }
});
// award
let singleAward = `<div class="row AwardSection">
<div class="col-12 col-md-6">
    <div class="form-group">
        <label for="award">Award Name</label>
        <input name="award_name[]" class="form-control" type="text" placeholder="Award Name" value="" />
    </div>
</div>
<div class="col-12 col-md-6">
    <div class="form-group">
    <label class="d-flex justify-content-between" for="awardYear">Year <i onclick="removeExperience(event)" class="fas fa-times"></i></label>
        <input id="awardYear" name="award_date[]" class="form-control" type="date" placeholder="Looking for job location" value="">
    </div>
</div>
</div>`;

$("#addAwardBtn").on("click", function () {
    if ($(".AwardSection").length < 5) {
        $("#AwardFieldsContainer").append(singleAward);
    } else {
        window.alert("You can add maximum 5 awards.");
    }
});

function removeAward(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().remove();
}

function removeExperience(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().parent().parent().remove();
}

function openProfileTab() {
    document.getElementById("ProfileTabMobileNav").style.left = "0%";
}

function closeProfileTab() {
    document.getElementById("ProfileTabMobileNav").style.left = "-100%";
}
