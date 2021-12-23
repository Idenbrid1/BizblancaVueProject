<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function(){
    
    Route::middleware('auth')->group(function(){
        Route::post('/update/basicinformation', [App\Http\Controllers\Candidate\CandidateController::class, 'updateBasicInformation'])->name('profile.updateBasicInformation');
        Route::post('/update/education', [App\Http\Controllers\Candidate\CandidateController::class, 'updateEducation'])->name('profile.updateEducation');
        Route::post('/update/language', [App\Http\Controllers\Candidate\CandidateController::class, 'updateLanguage'])->name('profile.updateLanguage');
        Route::post('/update/award', [App\Http\Controllers\Candidate\CandidateController::class, 'updateAward'])->name('profile.updateAward');
        Route::post('/update/skill', [App\Http\Controllers\Candidate\CandidateController::class, 'updateSkill'])->name('profile.updateSkill');
        Route::post('/update/current-job', [App\Http\Controllers\Candidate\CandidateController::class, 'updateCurrentJob'])->name('profile.updateCurrentJob');
        Route::post('/update/experience', [App\Http\Controllers\Candidate\CandidateController::class, 'updateExperience'])->name('profile.updateExperience');
        Route::post('/update/project', [App\Http\Controllers\Candidate\CandidateController::class, 'updateProject'])->name('profile.updateProject');
        Route::post('/update/resume-file', [App\Http\Controllers\Candidate\CandidateController::class, 'updateFileResume'])->name('profile.updateFileResume');
        Route::post('/update/cnic-file', [App\Http\Controllers\Candidate\CandidateController::class, 'updateFileCnic'])->name('profile.updateCnic');
        Route::post('/update/experience-letter-file', [App\Http\Controllers\Candidate\CandidateController::class, 'updateExperienceLetterFile'])->name('profile.updateExperienceLetter');
        Route::post('/update/desire-job', [App\Http\Controllers\Candidate\CandidateController::class, 'updateDesireJob'])->name('profile.updateDesireJob');
        Route::get('/apply-job/{job_id}', [App\Http\Controllers\Candidate\CandidateController::class, 'applyJob']);
        Route::post('/candidate-setting-password', [App\Http\Controllers\Candidate\CandidateController::class, 'settingPassword']);
        Route::get('candidate/remove-to-wish-list/{company_id}', [App\Http\Controllers\Candidate\CandidateController::class, 'removeToWishList']);
        Route::get('candidate/add-to-wish-list/{company_id}', [App\Http\Controllers\Candidate\CandidateController::class, 'addToWishList']);
        Route::get('get-candidate-wish-list', [App\Http\Controllers\Candidate\CandidateController::class, 'getCandidateWishList']);
    });

    Route::middleware(['auth', 'web'])->group(function(){
        Route::get('get-company-profile', [App\Http\Controllers\Company\CompanyController::class, 'getCompanyProfile']);
        Route::post('/update/company-basicinformation', [App\Http\Controllers\Company\CompanyController::class, 'updateCompanyBasicInformation'])->name('profile.updateBasicInformationCompany');
        Route::post('/update/socialmedia', [App\Http\Controllers\Company\CompanyController::class, 'socialmediaupdate'])->name('profile.updateSocialMedia');
        Route::post('/company/post-job', [App\Http\Controllers\Company\CompanyController::class, 'jobPost'])->name('profile.jobPost');
        Route::post('/company/update-post-job', [App\Http\Controllers\Company\CompanyController::class, 'UpdatejobPost'])->name('profile.updatejobPost');
        Route::get('/get-company-jobs', [App\Http\Controllers\Company\CompanyController::class, 'companyJobs'])->name('profile.companyJobs');
        Route::get('/delete-job-post/{id}', [App\Http\Controllers\Company\CompanyController::class, 'deleteJobPost'])->name('profile.deleteCompanyJobs');
        Route::get('/edit-job-post/{id}', [App\Http\Controllers\Company\CompanyController::class, 'editJobPost'])->name('profile.editCompanyJobs');
        Route::get('/buy-package-plan/{package_id}', [App\Http\Controllers\Company\CompanyController::class, 'buyPackage'])->name('profile.buyPackage');
        Route::get('/check-job-post-limit', [App\Http\Controllers\Company\CompanyController::class, 'checkPostJobLimit']);
        Route::get('/download-invoice/{order_id}', [App\Http\Controllers\Company\CompanyController::class, 'downloadInvoice']);
        Route::get('/get-applied-applicants-list/{job_id}', [App\Http\Controllers\Company\CompanyController::class, 'getAppliedApplicantsList']);
        Route::get('get-company-wish-list', [App\Http\Controllers\Company\CompanyController::class, 'getCompanyWishList']);
        Route::get('/remove-to-wish-list/{candidate_id}', [App\Http\Controllers\Company\CompanyController::class, 'removeToWishList']);
        Route::get('/add-to-wish-list/{candidate_id}', [App\Http\Controllers\Company\CompanyController::class, 'addToWishList']);
        Route::post('/company-setting-password', [App\Http\Controllers\Company\CompanyController::class, 'settingPassword']);
    });

    Route::get('check-auth-and-already-applied', [App\Http\Controllers\Admin\AuthenticationController::class, 'checkAuthAndJobApplied']);
    Route::get('get-dashboard-profile', [App\Http\Controllers\Candidate\CandidateController::class, 'getData']);
    Route::get('check-candidate-role', [App\Http\Controllers\Admin\AuthenticationController::class, 'checkCandidateRole']);
    
    
    
});
Route::get('user-logout', [App\Http\Controllers\Admin\AuthenticationController::class, 'userLogout']);


Route::get('user/verify/{token}', [App\Http\Controllers\Admin\AuthenticationController::class, 'verifyUser']);
Route::get('reset-password/{user_id}/{token}', [App\Http\Controllers\Admin\AuthenticationController::class, 'resetPasswordForm']);

Route::get('/send-message', [App\Http\Controllers\Website\Candidate\HomeController::class, 'sendMessage']);


Route::get('/social', function () {
    return view('website/pages/social-media');
})->name('social');
Route::get('/blog', function () {
    return view('website/pages/blog');
})->name('blog');

Route::post('/user-registration', [App\Http\Controllers\Admin\AuthenticationController::class, 'userRegistration']);
Route::post('/user-login', [App\Http\Controllers\Admin\AuthenticationController::class, 'userLogin']);
Route::get('check-auth', [App\Http\Controllers\Admin\AuthenticationController::class, 'checkAuth']);
Route::get('/check-already-applied/{id}', [App\Http\Controllers\Candidate\CandidateController::class, 'checkAlreadyApplied']);
Route::get('/get-package-plans', [App\Http\Controllers\CommonController::class, 'getPackagePlansList']);
Route::get('check-company-role', [App\Http\Controllers\Admin\AuthenticationController::class, 'checkCompanyRole']);
Route::get('navbar-check-roles', [App\Http\Controllers\Admin\AuthenticationController::class, 'navbarCheckRole']);
Route::get('/check-role', [App\Http\Controllers\CommonController::class, 'checkRole']);
Route::post('/job-search', [App\Http\Controllers\CommonController::class, 'jobSearch']);
Route::post('/candidate-search', [App\Http\Controllers\CommonController::class, 'candidateSearch']);
Route::get('/job-keyword-search/{keyword}', [App\Http\Controllers\CommonController::class, 'jobKeywordSearch']);
Route::get('/candidate-keyword-search/{keyword}', [App\Http\Controllers\CommonController::class, 'candidateKeywordSearch']);
Route::get('/companies-keyword-search/{keyword}', [App\Http\Controllers\CommonController::class, 'companyKeywordSearch']);
Route::get('get-candidates-search', [App\Http\Controllers\CommonController::class, 'getCandidateSearch']);
Route::get('/get-single-company-detail/{id}', [App\Http\Controllers\CommonController::class, 'getCompanyDetail']);
Route::get('/get-single-job-detail/{id}', [App\Http\Controllers\CommonController::class, 'getJobDetail']);
Route::get('/get-single-candidate-detail/{id}', [App\Http\Controllers\CommonController::class, 'getCandidateDetail']);
Route::get('/get-single-news-detail/{id}', [App\Http\Controllers\CommonController::class, 'getNewsDetail']);
Route::post('/reset-password', [App\Http\Controllers\Admin\AuthenticationController::class, 'resetPasswordPost']);
Route::get('/reset-password/{token}', [App\Http\Controllers\Admin\AuthenticationController::class, 'resetPassword']);
Route::post('/complete-reset-password', [App\Http\Controllers\Admin\AuthenticationController::class, 'resetPasswordFormPost']);
Route::get('expire-today-jobs', [App\Http\Controllers\CommonController::class, 'expireTodayJobs']);
Route::post('/submit-contact-us', [App\Http\Controllers\CommonController::class, 'contactUs']);
Route::get('/landingpage/news', [App\Http\Controllers\CommonController::class, 'getNews']);
Route::post('/footer/news_letter', [App\Http\Controllers\CommonController::class, 'newsLetter']);
Route::get('/download-cv/', [App\Http\Controllers\CommonController::class, 'downloadcv']);
Route::get('get-jobs', [App\Http\Controllers\CommonController::class, 'getJobs']);



//samad 
Route::get('/login', function () {
    return view('website/pages/login');
})->name('login');

/* Contact Us  */
Route::get('/contact-us', function () {
    return view('website/pages/contact-us');
})->name('contact-us');
/* forget-password  */


Route::get('/candidate-list', function () {
    return view('website/pages/candidate-list');
})->name('candidate-list');


Route::get('/comming_soon', function () {
    return view('website/pages/comming_soon');
})->name('comming_soon');


//GOOGLE LOGIN ROUTES
Route::get('oauth/{driver}', [RegisterController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback', [RegisterController::class, 'handleProviderCallback'])->name('social.callback');


Route::prefix('faq')->name('faq.')->group(function(){
    Route::get('/index', [App\Http\Controllers\Website\FAQController::class, 'showFAQPage'])->name('index');
    Route::get('/detail-account', [App\Http\Controllers\Website\FAQController::class, 'showAccountPage'])->name('detail-account');
    Route::get('/detail-job-search', [App\Http\Controllers\Website\FAQController::class, 'showJobSearchPage'])->name('detail-job-search');
    Route::get('/detai-apply-job', [App\Http\Controllers\Website\FAQController::class, 'showApplyJobPage'])->name('detai-apply-job');
    Route::get('/detail-bizblanca', [App\Http\Controllers\Website\FAQController::class, 'showBizblancaPage'])->name('detail-bizblanca');
    Route::get('/detail-hiring', [App\Http\Controllers\Website\FAQController::class, 'showHiringPage'])->name('detail-hiring');
    Route::get('/detail-job-alert', [App\Http\Controllers\Website\FAQController::class, 'showJobAlertPage'])->name('detail-job-alert');
    Route::get('/detail-joining', [App\Http\Controllers\Website\FAQController::class, 'showJoiningPage'])->name('detail-joining');
    Route::get('/detail-payment', [App\Http\Controllers\Website\FAQController::class, 'showPaymentTransferPage'])->name('detail-payment');
});
////CLEAR APPLICATION CACHE
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cleared!";
 });

 Route::middleware(['web'])->group(function(){
    //GOOGLE LOGIN ROUTES
    Route::get('auth/google', [App\Http\Controllers\Admin\AuthenticationController::class, 'redirectToGoogle']);
    Route::get('auth/google/callback', [App\Http\Controllers\Admin\AuthenticationController::class, 'handleGoogleCallback']);
    Route::post('/user-google-registration', [App\Http\Controllers\Admin\AuthenticationController::class, 'userGoogleRegistration']);
    Route::get('get-social-user-data/{id}', [App\Http\Controllers\Admin\AuthenticationController::class, 'getSocialUserData']);
    //GITHUB LOGIN ROUTES
    Route::get('auth/github', [App\Http\Controllers\Admin\AuthenticationController::class, 'redirectToGithub']);
    Route::get('auth/github/callback', [App\Http\Controllers\Admin\AuthenticationController::class, 'handleGithubCallback']);
    //LINKEDIN LOGIN ROUTES
    Route::get('auth/linkedin', [App\Http\Controllers\Admin\AuthenticationController::class, 'redirectToLinkedin']);
    Route::get('auth/linkedin/callback', [App\Http\Controllers\Admin\AuthenticationController::class, 'handleLinkedinCallback']);
});