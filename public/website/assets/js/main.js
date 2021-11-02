
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

var swiper = new Swiper(".helpslider", {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1224: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
    },
});
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
let addEducationHtml = `
  <div class="subForm w-100">
  <div class="modelTitle my-3">
                              <div class='d-flex w-100'>
                                <div class="mr-2 titleEffect"></div>
                                <h4 class="m-0 modelTitleText">Education</h4>
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
  `;
$("#addEducationBtn").on("click", function () {
    if ($(".subForm").length < 3) {
        $("#subFormFieldsContainer").append(addEducationHtml);
    } else {
        window.alert("You can add maximum 3 qualifications.");
        //   $('#addqualificationbtn').addClass('d-none');
        //   $('.textmsg2').removeClass('d-none');
    }
});

function removeSection(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().remove();
}
// add qualification

let addQualificationHtml = `
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
  `;
$("#addQualificationBtn").on("click", function () {
    if ($(".subForm").length < 3) {
        $("#subFormFieldsContainer").append(addQualificationHtml);
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
  
  <div class="col-lg-4 p-0">
                  <div class='w-100 d-flex align-items-center'>
                                      <select name="additionalLang" id="additionalLang" class="my-2 modelInput">
                                          <option value="aar"> Afar </option>
                                              <option value="abk"> Abkhazian </option>
                                              <option value="ace"> Achinese </option>
                                              <option value="ach"> Acoli </option>
                                              <option value="ada"> Adangme </option>
                                              <option value="ady"> Adyghe Adygei </option>
                                              <option value="afa"> Afro-Asiatic languages </option>
                                              <option value="afh"> Afrihili </option>
                                              <option value="afr"> Afrikaans </option>
                                              <option value="ain"> Ainu </option>
                                              <option value="aka"> Akan </option>
                                              <option value="akk"> Akkadian </option>
                                              <option value="alb"> Albanian </option>
                                              <option value="ale"> Aleut </option>
                                              <option value="alg"> Algonquian languages </option>
                                              <option value="alt"> Southern Altai </option>
                                              <option value="amh"> Amharic </option>
                                              <option value="ang"> English </option>
                                              <option value="anp"> Angika </option>
                                              <option value="apa"> Apache languages </option>
                                              <option value="ara"> Arabic </option>
                                              <option value="arc"> Official Aramaic (700-300 BCE) Imperial Aramaic (700-300 BCE) </option>
                                              <option value="arg"> Aragonese </option>
                                              <option value="arm"> Armenian </option>
                                              <option value="arn"> Mapudungun Mapuche </option>
                                              <option value="arp"> Arapaho </option>
                                              <option value="art"> Artificial languages </option>
                                              <option value="arw"> Arawak </option>
                                              <option value="asm"> Assamese </option>
                                              <option value="ast"> Asturian Bable Leonese Asturleonese </option>
                                              <option value="ath"> Athapascan languages </option>
                                              <option value="aus"> Australian languages </option>
                                              <option value="ava"> Avaric </option>
                                              <option value="ave"> Avestan </option>
                                              <option value="awa"> Awadhi </option>
                                              <option value="aym"> Aymara </option>
                                              <option value="aze"> Azerbaijani </option>
                                              <option value="bad"> Banda languages </option>
                                              <option value="bai"> Bamileke languages </option>
                                              <option value="bak"> Bashkir </option>
                                              <option value="bal"> Baluchi </option>
                                              <option value="bam"> Bambara </option>
                                              <option value="ban"> Balinese </option>
                                              <option value="baq"> Basque </option>
                                              <option value="bas"> Basa </option>
                                              <option value="bat"> Baltic languages </option>
                                              <option value="bej"> Beja Bedawiyet </option>
                                              <option value="bel"> Belarusian </option>
                                              <option value="bem"> Bemba </option>
                                              <option value="ben"> Bengali </option>
                                              <option value="ber"> Berber languages </option>
                                              <option value="bho"> Bhojpuri </option>
                                              <option value="bih"> Bihari languages </option>
                                              <option value="bik"> Bikol </option>
                                              <option value="bin"> Bini Edo </option>
                                              <option value="bis"> Bislama </option>
                                              <option value="bla"> Siksika </option>
                                              <option value="bnt"> Bantu (Other) </option>
                                              <option value="bos"> Bosnian </option>
                                              <option value="bra"> Braj </option>
                                              <option value="bre"> Breton </option>
                                              <option value="btk"> Batak languages </option>
                                              <option value="bua"> Buriat </option>
                                              <option value="bug"> Buginese </option>
                                              <option value="bul"> Bulgarian </option>
                                              <option value="bur"> Burmese </option>
                                              <option value="byn"> Blin Bilin </option>
                                              <option value="cad"> Caddo </option>
                                              <option value="cai"> Central American Indian languages </option>
                                              <option value="car"> Galibi Carib </option>
                                              <option value="cat"> Catalan Valencian </option>
                                              <option value="cau"> Caucasian languages </option>
                                              <option value="ceb"> Cebuano </option>
                                              <option value="cel"> Celtic languages </option>
                                              <option value="cha"> Chamorro </option>
                                              <option value="chb"> Chibcha </option>
                                              <option value="che"> Chechen </option>
                                              <option value="chg"> Chagatai </option>
                                              <option value="chi"> Chinese </option>
                                              <option value="chk"> Chuukese </option>
                                              <option value="chm"> Mari </option>
                                              <option value="chn"> Chinook jargon </option>
                                              <option value="cho"> Choctaw </option>
                                              <option value="chp"> Chipewyan Dene Suline </option>
                                              <option value="chr"> Cherokee </option>
                                              <option value="chu"> Church Slavic Old Slavonic Church Slavonic Old Bulgarian Old Church Slavonic </option>
                                              <option value="chv"> Chuvash </option>
                                              <option value="chy"> Cheyenne </option>
                                              <option value="cmc"> Chamic languages </option>
                                              <option value="cop"> Coptic </option>
                                              <option value="cor"> Cornish </option>
                                              <option value="cos"> Corsican </option>
                                              <option value="cpe"> Creoles and pidgins </option>
                                              <option value="cpf"> Creoles and pidgins </option>
                                              <option value="cpp"> Creoles and pidgins </option>
                                              <option value="cre"> Cree </option>
                                              <option value="crh"> Crimean Tatar Crimean Turkish </option>
                                              <option value="crp"> Creoles and pidgins  </option>
                                              <option value="csb"> Kashubian </option>
                                              <option value="cus"> Cushitic languages </option>
                                              <option value="cze"> Czech </option>
                                              <option value="dak"> Dakota </option>
                                              <option value="dan"> Danish </option>
                                              <option value="dar"> Dargwa </option>
                                              <option value="day"> Land Dayak languages </option>
                                              <option value="del"> Delaware </option>
                                              <option value="den"> Slave (Athapascan) </option>
                                              <option value="dgr"> Dogrib </option>
                                              <option value="din"> Dinka </option>
                                              <option value="div"> Divehi Dhivehi Maldivian </option>
                                              <option value="doi"> Dogri </option>
                                              <option value="dra"> Dravidian languages </option>
                                              <option value="dsb"> Lower Sorbian </option>
                                              <option value="dua"> Duala </option>
                                              <option value="dum"> Dutch </option>
                                              <option value="dut"> Dutch Flemish </option>
                                              <option value="dyu"> Dyula </option>
                                              <option value="dzo"> Dzongkha </option>
                                              <option value="efi"> Efik </option>
                                              <option value="egy"> Egyptian (Ancient) </option>
                                              <option value="eka"> Ekajuk </option>
                                              <option value="elx"> Elamite </option>
                                              <option value="eng"> English </option>
                                              <option value="enm"> English </option>
                                              <option value="epo"> Esperanto </option>
                                              <option value="est"> Estonian </option>
                                              <option value="ewe"> Ewe </option>
                                              <option value="ewo"> Ewondo </option>
                                              <option value="fan"> Fang </option>
                                              <option value="fao"> Faroese </option>
                                              <option value="fat"> Fanti </option>
                                              <option value="fij"> Fijian </option>
                                              <option value="fil"> Filipino Pilipino </option>
                                              <option value="fin"> Finnish </option>
                                              <option value="fiu"> Finno-Ugrian languages </option>
                                              <option value="fon"> Fon </option>
                                              <option value="fre"> French </option>
                                              <option value="frm"> French </option>
                                              <option value="fro"> French </option>
                                              <option value="frr"> Northern Frisian </option>
                                              <option value="frs"> Eastern Frisian </option>
                                              <option value="fry"> Western Frisian </option>
                                              <option value="ful"> Fulah </option>
                                              <option value="fur"> Friulian </option>
                                              <option value="gaa"> Ga </option>
                                              <option value="gay"> Gayo </option>
                                              <option value="gba"> Gbaya </option>
                                              <option value="gem"> Germanic languages </option>
                                              <option value="geo"> Georgian </option>
                                              <option value="ger"> German </option>
                                              <option value="gez"> Geez </option>
                                              <option value="gil"> Gilbertese </option>
                                              <option value="gla"> Gaelic Scottish Gaelic </option>
                                              <option value="gle"> Irish </option>
                                              <option value="glg"> Galician </option>
                                              <option value="glv"> Manx </option>
                                              <option value="gmh"> German </option>
                                              <option value="goh"> German </option>
                                              <option value="gon"> Gondi </option>
                                              <option value="gor"> Gorontalo </option>
                                              <option value="got"> Gothic </option>
                                              <option value="grb"> Grebo </option>
                                              <option value="grc"> Greek </option>
                                              <option value="gre"> Greek </option>
                                              <option value="grn"> Guarani </option>
                                              <option value="gsw"> Swiss German Alemannic Alsatian </option>
                                              <option value="guj"> Gujarati </option>
                                              <option value="gwi"> Gwich'in </option>
                                              <option value="hai"> Haida </option>
                                              <option value="hat"> Haitian Haitian Creole </option>
                                              <option value="hau"> Hausa </option>
                                              <option value="haw"> Hawaiian </option>
                                              <option value="heb"> Hebrew </option>
                                              <option value="her"> Herero </option>
                                              <option value="hil"> Hiligaynon </option>
                                              <option value="him"> Himachali languages Western Pahari languages </option>
                                              <option value="hin"> Hindi </option>
                                              <option value="hit"> Hittite </option>
                                              <option value="hmn"> Hmong Mong </option>
                                              <option value="hmo"> Hiri Motu </option>
                                              <option value="hrv"> Croatian </option>
                                              <option value="hsb"> Upper Sorbian </option>
                                              <option value="hun"> Hungarian </option>
                                              <option value="hup"> Hupa </option>
                                              <option value="iba"> Iban </option>
                                              <option value="ibo"> Igbo </option>
                                              <option value="ice"> Icelandic </option>
                                              <option value="ido"> Ido </option>
                                              <option value="iii"> Sichuan Yi Nuosu </option>
                                              <option value="ijo"> Ijo languages </option>
                                              <option value="iku"> Inuktitut </option>
                                              <option value="ile"> Interlingue Occidental </option>
                                              <option value="ilo"> Iloko </option>
                                              <option value="ina"> Interlingua (International Auxiliary Language Association) </option>
                                              <option value="inc"> Indic languages </option>
                                              <option value="ind"> Indonesian </option>
                                              <option value="ine"> Indo-European languages </option>
                                              <option value="inh"> Ingush </option>
                                              <option value="ipk"> Inupiaq </option>
                                              <option value="ira"> Iranian languages </option>
                                              <option value="iro"> Iroquoian languages </option>
                                              <option value="ita"> Italian </option>
                                              <option value="jav"> Javanese </option>
                                              <option value="jbo"> Lojban </option>
                                              <option value="jpn"> Japanese </option>
                                              <option value="jpr"> Judeo-Persian </option>
                                              <option value="jrb"> Judeo-Arabic </option>
                                              <option value="kaa"> Kara-Kalpak </option>
                                              <option value="kab"> Kabyle </option>
                                              <option value="kac"> Kachin Jingpho </option>
                                              <option value="kal"> Kalaallisut Greenlandic </option>
                                              <option value="kam"> Kamba </option>
                                              <option value="kan"> Kannada </option>
                                              <option value="kar"> Karen languages </option>
                                              <option value="kas"> Kashmiri </option>
                                              <option value="kau"> Kanuri </option>
                                              <option value="kaw"> Kawi </option>
                                              <option value="kaz"> Kazakh </option>
                                              <option value="kbd"> Kabardian </option>
                                              <option value="kha"> Khasi </option>
                                              <option value="khi"> Khoisan languages </option>
                                              <option value="khm"> Central Khmer </option>
                                              <option value="kho"> Khotanese Sakan </option>
                                              <option value="kik"> Kikuyu Gikuyu </option>
                                              <option value="kin"> Kinyarwanda </option>
                                              <option value="kir"> Kirghiz Kyrgyz </option>
                                              <option value="kmb"> Kimbundu </option>
                                              <option value="kok"> Konkani </option>
                                              <option value="kom"> Komi </option>
                                              <option value="kon"> Kongo </option>
                                              <option value="kor"> Korean </option>
                                              <option value="kos"> Kosraean </option>
                                              <option value="kpe"> Kpelle </option>
                                              <option value="krc"> Karachay-Balkar </option>
                                              <option value="krl"> Karelian </option>
                                              <option value="kro"> Kru languages </option>
                                              <option value="kru"> Kurukh </option>
                                              <option value="kua"> Kuanyama Kwanyama </option>
                                              <option value="kum"> Kumyk </option>
                                              <option value="kur"> Kurdish </option>
                                              <option value="kut"> Kutenai </option>
                                              <option value="lad"> Ladino </option>
                                              <option value="lah"> Lahnda </option>
                                              <option value="lam"> Lamba </option>
                                              <option value="lao"> Lao </option>
                                              <option value="lat"> Latin </option>
                                              <option value="lav"> Latvian </option>
                                              <option value="lez"> Lezghian </option>
                                              <option value="lim"> Limburgan Limburger Limburgish </option>
                                              <option value="lin"> Lingala </option>
                                              <option value="lit"> Lithuanian </option>
                                              <option value="lol"> Mongo </option>
                                              <option value="loz"> Lozi </option>
                                              <option value="ltz"> Luxembourgish Letzeburgesch </option>
                                              <option value="lua"> Luba-Lulua </option>
                                              <option value="lub"> Luba-Katanga </option>
                                              <option value="lug"> Ganda </option>
                                              <option value="lui"> Luiseno </option>
                                              <option value="lun"> Lunda </option>
                                              <option value="luo"> Luo (Kenya and Tanzania) </option>
                                              <option value="lus"> Lushai </option>
                                              <option value="mac"> Macedonian </option>
                                              <option value="mad"> Madurese </option>
                                              <option value="mag"> Magahi </option>
                                              <option value="mah"> Marshallese </option>
                                              <option value="mai"> Maithili </option>
                                              <option value="mak"> Makasar </option>
                                              <option value="mal"> Malayalam </option>
                                              <option value="man"> Mandingo </option>
                                              <option value="mao"> Maori </option>
                                              <option value="map"> Austronesian languages </option>
                                              <option value="mar"> Marathi </option>
                                              <option value="mas"> Masai </option>
                                              <option value="may"> Malay </option>
                                              <option value="mdf"> Moksha </option>
                                              <option value="mdr"> Mandar </option>
                                              <option value="men"> Mende </option>
                                              <option value="mga"> Irish </option>
                                              <option value="mic"> Mi'kmaq Micmac </option>
                                              <option value="min"> Minangkabau </option>
                                              <option value="mis"> Uncoded languages </option>
                                              <option value="mkh"> Mon-Khmer languages </option>
                                              <option value="mlg"> Malagasy </option>
                                              <option value="mlt"> Maltese </option>
                                              <option value="mnc"> Manchu </option>
                                              <option value="mni"> Manipuri </option>
                                              <option value="mno"> Manobo languages </option>
                                              <option value="moh"> Mohawk </option>
                                              <option value="mon"> Mongolian </option>
                                              <option value="mos"> Mossi </option>
                                              <option value="mul"> Multiple languages </option>
                                              <option value="mun"> Munda languages </option>
                                              <option value="mus"> Creek </option>
                                              <option value="mwl"> Mirandese </option>
                                              <option value="mwr"> Marwari </option>
                                              <option value="myn"> Mayan languages </option>
                                              <option value="myv"> Erzya </option>
                                              <option value="nah"> Nahuatl languages </option>
                                              <option value="nai"> North American Indian languages </option>
                                              <option value="nap"> Neapolitan </option>
                                              <option value="nau"> Nauru </option>
                                              <option value="nav"> Navajo Navaho </option>
                                              <option value="nbl"> Ndebele </option>
                                              <option value="nde"> Ndebele </option>
                                              <option value="ndo"> Ndonga </option>
                                              <option value="nds"> Low German Low Saxon German </option>
                                              <option value="nep"> Nepali </option>
                                              <option value="new"> Nepal Bhasa Newari </option>
                                              <option value="nia"> Nias </option>
                                              <option value="nic"> Niger-Kordofanian languages </option>
                                              <option value="niu"> Niuean </option>
                                              <option value="nno"> Norwegian Nynorsk Nynorsk </option>
                                              <option value="nob"> Bokmål </option>
                                              <option value="nog"> Nogai </option>
                                              <option value="non"> Norse </option>
                                              <option value="nor"> Norwegian </option>
                                              <option value="nqo"> N'Ko </option>
                                              <option value="nso"> Pedi Sepedi Northern Sotho </option>
                                              <option value="nub"> Nubian languages </option>
                                              <option value="nwc"> Classical Newari Old Newari Classical Nepal Bhasa </option>
                                              <option value="nya"> Chichewa Chewa Nyanja </option>
                                              <option value="nym"> Nyamwezi </option>
                                              <option value="nyn"> Nyankole </option>
                                              <option value="nyo"> Nyoro </option>
                                              <option value="nzi"> Nzima </option>
                                              <option value="oci"> Occitan (post 1500) Provençal </option>
                                              <option value="oji"> Ojibwa </option>
                                              <option value="ori"> Oriya </option>
                                              <option value="orm"> Oromo </option>
                                              <option value="osa"> Osage </option>
                                              <option value="oss"> Ossetian Ossetic </option>
                                              <option value="ota"> Turkish </option>
                                              <option value="oto"> Otomian languages </option>
                                              <option value="paa"> Papuan languages </option>
                                              <option value="pag"> Pangasinan </option>
                                              <option value="pal"> Pahlavi </option>
                                              <option value="pam"> Pampanga Kapampangan </option>
                                              <option value="pan"> Panjabi Punjabi </option>
                                              <option value="pap"> Papiamento </option>
                                              <option value="pau"> Palauan </option>
                                              <option value="peo"> Persian </option>
                                              <option value="per"> Persian </option>
                                              <option value="phi"> Philippine languages </option>
                                              <option value="phn"> Phoenician </option>
                                              <option value="pli"> Pali </option>
                                              <option value="pol"> Polish </option>
                                              <option value="pon"> Pohnpeian </option>
                                              <option value="por"> Portuguese </option>
                                              <option value="pra"> Prakrit languages </option>
                                              <option value="pro"> Provençal </option>
                                              <option value="pus"> Pushto Pashto </option>
                                              <option value="qaa-qtz"> Reserved for local use </option>
                                              <option value="que"> Quechua </option>
                                              <option value="raj"> Rajasthani </option>
                                              <option value="rap"> Rapanui </option>
                                              <option value="rar"> Rarotongan Cook Islands Maori </option>
                                              <option value="roa"> Romance languages </option>
                                              <option value="roh"> Romansh </option>
                                              <option value="rom"> Romany </option>
                                              <option value="rum"> Romanian Moldavian Moldovan </option>
                                              <option value="run"> Rundi </option>
                                              <option value="rup"> Aromanian Arumanian Macedo-Romanian </option>
                                              <option value="rus"> Russian </option>
                                              <option value="sad"> Sandawe </option>
                                              <option value="sag"> Sango </option>
                                              <option value="sah"> Yakut </option>
                                              <option value="sai"> South American Indian (Other) </option>
                                              <option value="sal"> Salishan languages </option>
                                              <option value="sam"> Samaritan Aramaic </option>
                                              <option value="san"> Sanskrit </option>
                                              <option value="sas"> Sasak </option>
                                              <option value="sat"> Santali </option>
                                              <option value="scn"> Sicilian </option>
                                              <option value="sco"> Scots </option>
                                              <option value="sel"> Selkup </option>
                                              <option value="sem"> Semitic languages </option>
                                              <option value="sga"> Irish </option>
                                              <option value="sgn"> Sign Languages </option>
                                              <option value="shn"> Shan </option>
                                              <option value="sid"> Sidamo </option>
                                              <option value="sin"> Sinhala Sinhalese </option>
                                              <option value="sio"> Siouan languages </option>
                                              <option value="sit"> Sino-Tibetan languages </option>
                                              <option value="sla"> Slavic languages </option>
                                              <option value="slo"> Slovak </option>
                                              <option value="slv"> Slovenian </option>
                                              <option value="sma"> Southern Sami </option>
                                              <option value="sme"> Northern Sami </option>
                                              <option value="smi"> Sami languages </option>
                                              <option value="smj"> Lule Sami </option>
                                              <option value="smn"> Inari Sami </option>
                                              <option value="smo"> Samoan </option>
                                              <option value="sms"> Skolt Sami </option>
                                              <option value="sna"> Shona </option>
                                              <option value="snd"> Sindhi </option>
                                              <option value="snk"> Soninke </option>
                                              <option value="sog"> Sogdian </option>
                                              <option value="som"> Somali </option>
                                              <option value="son"> Songhai languages </option>
                                              <option value="sot"> Sotho </option>
                                              <option value="spa"> Spanish Castilian </option>
                                              <option value="srd"> Sardinian </option>
                                              <option value="srn"> Sranan Tongo </option>
                                              <option value="srp"> Serbian </option>
                                              <option value="srr"> Serer </option>
                                              <option value="ssa"> Nilo-Saharan languages </option>
                                              <option value="ssw"> Swati </option>
                                              <option value="suk"> Sukuma </option>
                                              <option value="sun"> Sundanese </option>
                                              <option value="sus"> Susu </option>
                                              <option value="sux"> Sumerian </option>
                                              <option value="swa"> Swahili </option>
                                              <option value="swe"> Swedish </option>
                                              <option value="syc"> Classical Syriac </option>
                                              <option value="syr"> Syriac </option>
                                              <option value="tah"> Tahitian </option>
                                              <option value="tai"> Tai languages </option>
                                              <option value="tam"> Tamil </option>
                                              <option value="tat"> Tatar </option>
                                              <option value="tel"> Telugu </option>
                                              <option value="tem"> Timne </option>
                                              <option value="ter"> Tereno </option>
                                              <option value="tet"> Tetum </option>
                                              <option value="tgk"> Tajik </option>
                                              <option value="tgl"> Tagalog </option>
                                              <option value="tha"> Thai </option>
                                              <option value="tib"> Tibetan </option>
                                              <option value="tig"> Tigre </option>
                                              <option value="tir"> Tigrinya </option>
                                              <option value="tiv"> Tiv </option>
                                              <option value="tkl"> Tokelau </option>
                                              <option value="tlh"> Klingon tlhIngan-Hol </option>
                                              <option value="tli"> Tlingit </option>
                                              <option value="tmh"> Tamashek </option>
                                              <option value="tog"> Tonga (Nyasa) </option>
                                              <option value="ton"> Tonga (Tonga Islands) </option>
                                              <option value="tpi"> Tok Pisin </option>
                                              <option value="tsi"> Tsimshian </option>
                                              <option value="tsn"> Tswana </option>
                                              <option value="tso"> Tsonga </option>
                                              <option value="tuk"> Turkmen </option>
                                              <option value="tum"> Tumbuka </option>
                                              <option value="tup"> Tupi languages </option>
                                              <option value="tur"> Turkish </option>
                                              <option value="tut"> Altaic languages </option>
                                              <option value="tvl"> Tuvalu </option>
                                              <option value="twi"> Twi </option>
                                              <option value="tyv"> Tuvinian </option>
                                              <option value="udm"> Udmurt </option>
                                              <option value="uga"> Ugaritic </option>
                                              <option value="uig"> Uighur Uyghur </option>
                                              <option value="ukr"> Ukrainian </option>
                                              <option value="umb"> Umbundu </option>
                                              <option value="und"> Undetermined </option>
                                              <option value="urd"> Urdu </option>
                                              <option value="uzb"> Uzbek </option>
                                              <option value="vai"> Vai </option>
                                              <option value="ven"> Venda </option>
                                              <option value="vie"> Vietnamese </option>
                                              <option value="vol"> Volapük </option>
                                              <option value="vot"> Votic </option>
                                              <option value="wak"> Wakashan languages </option>
                                              <option value="wal"> Walamo </option>
                                              <option value="war"> Waray </option>
                                              <option value="was"> Washo </option>
                                              <option value="wel"> Welsh </option>
                                              <option value="wen"> Sorbian languages </option>
                                              <option value="wln"> Walloon </option>
                                              <option value="wol"> Wolof </option>
                                              <option value="xal"> Kalmyk Oirat </option>
                                              <option value="xho"> Xhosa </option>
                                              <option value="yao"> Yao </option>
                                              <option value="yap"> Yapese </option>
                                              <option value="yid"> Yiddish </option>
                                              <option value="yor"> Yoruba </option>
                                              <option value="ypk"> Yupik languages </option>
                                              <option value="zap"> Zapotec </option>
                                              <option value="zbl"> Blissymbols Blissymbolics Bliss </option>
                                              <option value="zen"> Zenaga </option>
                                              <option value="zha"> Zhuang Chuang </option>
                                              <option value="znd"> Zande languages </option>
                                              <option value="zul"> Zulu </option>
                                              <option value="zun"> Zuni </option>
                                              <option value="zxx"> No linguistic content Not applicable </option>
                                              <option value="zza"> Zaza Dimili Dimli Kirdki Kirmanjki Zazaki </option>
                                      </select>
                                      <i onclick="removeLanguage(event)" class="fas fa-times mx-3"></i>
                                      </div>
                                      <div class="form-group m-0">
                                          <input class="my-1" name="urdu" type="radio">
                                          <label class="modelLabelSmall" for="urdu">0 - 19%</label>
                                      </div>
                                      <div class="form-group m-0">
                                          <input class="my-1" name="urdu" type="radio">
                                          <label class="modelLabelSmall" for="urdu">20% - 39%</label>
                                      </div>
                                      <div class="form-group m-0">
                                          <input class="my-1" name="urdu" type="radio">
                                          <label class="modelLabelSmall" for="urdu">40% - 59%</label>
                                      </div>
                                      <div class="form-group m-0">
                                          <input class="my-1" name="urdu" type="radio">
                                          <label class="modelLabelSmall" for="urdu">60% - 79%</label>
                                      </div>
                                      <div class="form-group m-0">
                                          <input class="my-1" name="urdu" type="radio">
                                          <label class="modelLabelSmall" for="urdu">80% - 100%</label>
                                      </div>
                                  
                                  </div>
  
                                  
  
                              `;
$("#addLanguageBtn").on("click", function () {
    if ($(".subFormFields").length < 6) {
        $(".subFormFields").append(languageModel);
    } else {
        window.alert("You can add maximum 3 Jobs.");
    }
});

function removeLanguage(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().remove();
}
//project
let projectHTML = `
  <div class="col-12">
                      <div id='subForm' class="subForm">
                      <div class="modelTitle my-3">
                      <div class='d-flex w-100'>
                        <div class="mr-2 titleEffect"></div>
                        <h4 class="m-0 modelTitleText">Project</h4>
                      </div>
                      <i onclick="removeExperience(event)" class="fas fa-times"></i>
                      
                  </div>
                          <div class="subFormFields">
                              <div class="row">
                                  <div class="col-lg-6 mb-2">
                                      <label class="modelLabel" for="projectName">Project Name</label>
                                      <input name="projectName" class="modelInput" placeholder="Enter Project Name" type="text">
                                  </div>
                                  <div class="col-lg-6">
                                      <label class="modelLabel" for="projectLink">Link</label>
                                      <input name="projectLink" class="modelInput" placeholder="Enter Link" type="text">
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
                                  <div class="col-lg-12">
                                      <label class="modelLabel" for="description">Description</label>
                                      <textarea cols="30" rows="10" name="description" class="modelInput" placeholder="Description"></textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
  `
$("#addProjectBtn").on("click", function () {
    if ($(".subForm").length < 3) {
        $("#subFormFieldsContainer").append(projectHTML);
    } else {
        window.alert("You can add maximum 3 Jobs.");
    }
});

function removeLanguage(e) {
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
$("#addJobBtn").on("click", function () {
    if ($(".subFormFields").length < 3) {
        $("#subFormFieldsContainer").append(jobExperience);
    } else {
        window.alert("You can add maximum 3 Jobs.");
    }
});
// currently working
let workingFeilds = `
                        <div class="col-12 p-0 block-single border-top-none">
                                <span class="label-current-position">Current Position</span>
                                <div class="edit-inputs">
                                  <input name="current_position" type="text" placeholder="Current Position"
                                    value="Idenbrid" />
                                </div>
                              </div>
                              <div class="col-12 p-0 block-single">
                                <span class="label-current-position">Working experience</span>
                                <div class="edit-inputs">
                                  <input name="" type="text" placeholder="Working experience"
                                    value="" />
                                </div>
                              </div>
                              <div class="col-12 p-0 block-double">
                                <div class="row m-0 w-100">
                                  <div class="col-6 p-0">
                                    <span class="label-current-job">Current Job</span>
                                    <div class="edit-input">
                                      <input name="current_job" type="text" placeholder="Current job"
                                        value="Full stack developer" />
                                    </div>
                                  </div>
                                  <div class="col-6 p-0">
                                    <span class="label-current-salary">Current Salary</span>
                                    <div class="edit-input">
                                      <input name="crrent_salary" type="text" placeholder="Current Salary"
                                        value=".....k" />
                                    </div>
                                  </div>
                                </div>
                              </div>
  
                              <div class="col-12 p-0 block-single">
                                <span class="label-current-status">Current Status</span>
                                <div class="edit-inputs">
                                  <input name="current_status" type="text" placeholder="Current Status"
                                    value="Current Status" />
                                </div>
                              </div>
                              <div class="col-12 p-0 block-single">
                                <span class="label-persons-managed">No of Persons managed</span>
                                <div class="edit-inputs">
                                  <input name="no_of_persons_manage" type="text" placeholder="No of Persons managed"
                                    value="3" />
                                </div>
                              </div>
                              <div class="col-12 p-0 block-single skills-info">
                                <span class="label-name-bio">Skills</span>
                                <div class="edit-inputs">
                                  <input name="full_name" type="text" placeholder="Full Name"
                                    value="Muhammad Ahmad (ahmad-idenbrid)" />
                                </div>
                              </div>
                              `;
let lookingForJobFeilds = `
  
  <div class="col-12 p-0 block-single border-top-none">
  <span class="label-job-when">Looking for Job when</span>
  <div class="edit-inputs">
  <input name="" type="text" placeholder="Looking for Job when"
  value="" />
  </div>
  </div>
  <div class="col-12 p-0 block-single">
  <span class="label-job-location">Looking for job location</span>
  <div class="edit-inputs">
  <input name="" type="text" placeholder="Looking for job location"
  value="" />
  </div>
  </div>
  <div class="col-12 p-0 block-single">
  <span class="label-job-note">Looking for job why</span>
  <div class="edit-inputs">
  <input name="" type="text" placeholder="Looking for job why"
  value="" />
  </div>
  </div>
  <div class="col-12 p-0 block-single">
  <span class="label-job-note">Looking for job note</span>
  <div class="edit-inputs">
  <input name="" type="text" placeholder="Looking for job note"
  value="" />
  </div>
  </div>
  <div class="col-12 p-0 block-single">
  <span class="label-exp-salary">looking for job expected salary</span>
  <div class="edit-inputs">
  <input name="" type="text" placeholder="Looking for job expected salary"
  value="" />
  </div>
  </div>
  <div class="col-12 p-0 block-single">
  <span class="label-job-position">Looking for job position</span>
  <div class="edit-inputs">
  <input name="" type="text" placeholder="Looking for job position"
  value="" />
  </div>
  </div>
  <div class="col-12 p-0 block-single skills-info">
  <span class="label-job-depart">Looking for job department</span>
  <div class="edit-inputs">
  <input name="" type="text" placeholder="Looking for job department"
  value="" />
  </div>
  </div>
                              `;
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

let skillsAdd = `<li class="col-12 single-skill">
                        <div class="my-2">
                          <input type="text" placeholder="skill">
                          <input type="text" placeholder="skill level">
                        </div>
                        <i class="fas fa-trash text-danger" onclick="removeSkill(event)"></i>
                      </li>`;

$("#addSkillsBtn").on("click", function () {
    if ($(".single-skill").length < 10) {
        $("#skills-block").append(skillsAdd);
    } else {
        window.alert("You can add maximum 10 skills.");
    }
});

function removeSkill(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().remove();
}
let languageAdd = `<li class="col-12 language-single">
                    <div class="my-2">
                      <input type="text" placeholder="Language">
                      <input type="text" placeholder="Language level">
                    </div>
                    <i class="fas fa-trash text-danger" onclick="removeSkill(event)"></i>
                    </li>`;

$("#addLanguageBtn").on("click", function () {
    if ($(".language-single").length < 5) {
        $("#languages-block").append(languageAdd);
    } else {
        window.alert("You can add maximum 5 languages.");
    }
});

// function removeLanguage(e) {
//     let targetvalue = e.target;
//     $(targetvalue).parent().remove();
// }

// award
let singleAward = `
  <div class="subFormFieldsRow row mt-3">
                                  <div class="col-lg-6 mb-2">
                                      <label class="modelLabel" for="award">Award Name</label>
                                      <input name="award" class="modelInput" placeholder="Enter Award Name">
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="w-100 d-flex justify-content-between">
                                          <label class="modelLabel" for="awardYear">Year</label>
                                          <i onclick="removeExperience(event)" class="fas fa-times"></i>
                                      </div>
                                      <input name="awardYear" class="modelInput" type="month">
                                  </div>
                              </div>`;

$("#addAwardBtn").on("click", function () {
    if ($(".subFormFieldsRow").length < 3) {
        $(".subFormFields").append(singleAward);
    } else {
        window.alert("You can add maximum 5 awards.");
    }
});

function removeAward(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().remove();
}
let singleExperience = `
  <div class="col-12">
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
                                  <div class="col-lg-6 mb-2">
                                      <label class="modelLabel" for="compnay">Company</label>
                                      <input name="company" class="modelInput" placeholder="Enter Company" type="text">
                                  </div>
                                  <div class="col-lg-6">
                                      <label class="modelLabel" for="position">Position</label>
                                      <input name="position" class="modelInput" placeholder="Enter Position" type="text">
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
                                  <div class="col-lg-6">
                                      <label class="modelLabel" for="currentStatus">Current Status</label>
                                      <div class="form-group m-0">
                                          <label for="currentStatus">Active</label>
                                          <input name="currentStatus" type="radio">
                                          <label for="currentStatus">Not Active</label>
                                          <input name="currentStatus" type="radio">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
      `;

$("#addExperiencesBtn").on("click", function () {
    if ($(".subFormFields").length < 3) {
        $("#subFormFieldsContainer").append(singleExperience);
    } else {
        window.alert("You can add maximum 3 experience.");
    }
});

function removeExperience(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().parent().remove();
}

function openProfileTab() {
    document.getElementById("ProfileTabMobileNav").style.left = "0%";
}

function closeProfileTab() {
    document.getElementById("ProfileTabMobileNav").style.left = "-100%";
}


let NavBarToggle = 0;

function ShowNavbar() {
    if (NavBarToggle == 0) {
        document.getElementById("nav-lists").classList.add("_Menus-show");
        NavBarToggle++
    } else {
        NavBarToggle = 0;
        document.getElementById("nav-lists").classList.remove("_Menus-show");
    }
}