<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//samad
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

// Route::get('/', function () {
//     return view('welcome');
// });
//samad
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/job-search', function () {
//     return view('website/pages/job-search');
// })->name('job-search');

// Route::get('/', [WelcomeController::class, 'index'])->name('index');
// Route::get('/send-message', [App\Http\Controllers\Website\Candidate\HomeController::class, 'sendMessage']);


// Route::get('/social', function () {
//     return view('website/pages/social-media');
// })->name('social');
// Route::get('/blog', function () {
//     return view('website/pages/blog');
// })->name('blog');
// // Route::get('/register', function () {
// //     return view('website/pages/register');
// // })->name('register');
// //samad
// Route::post('/user-registration', [App\Http\Controllers\Admin\AuthenticationController::class, 'userRegistration']);
// Route::post('/user-login', [App\Http\Controllers\Admin\AuthenticationController::class, 'userLogin']);
// Route::get('user-logout', [App\Http\Controllers\Admin\AuthenticationController::class, 'userLogout']);
// Route::get('check-auth', [App\Http\Controllers\Admin\AuthenticationController::class, 'checkAuth']);
// Route::get('check-auth-and-already-applied', [App\Http\Controllers\Admin\AuthenticationController::class, 'checkAuthAndJobApplied']);
// Route::get('get-dashboard-profile', [App\Http\Controllers\Candidate\CandidateController::class, 'getData']);
// Route::get('/check-already-applied/{id}', [App\Http\Controllers\Candidate\CandidateController::class, 'checkAlreadyApplied']);
// Route::get('/get-package-plans', [App\Http\Controllers\CommonController::class, 'getPackagePlansList']);
// Route::get('check-candidate-role', [App\Http\Controllers\Admin\AuthenticationController::class, 'checkCandidateRole']);
// Route::get('check-company-role', [App\Http\Controllers\Admin\AuthenticationController::class, 'checkCompanyRole']);
// Route::get('navbar-check-roles', [App\Http\Controllers\Admin\AuthenticationController::class, 'navbarCheckRole']);
// Route::get('/check-role', [App\Http\Controllers\CommonController::class, 'checkRole']);
// Route::post('/job-search', [App\Http\Controllers\CommonController::class, 'jobSearch']);
// Route::post('/candidate-search', [App\Http\Controllers\CommonController::class, 'candidateSearch']);
// Route::get('/job-keyword-search/{keyword}', [App\Http\Controllers\CommonController::class, 'jobKeywordSearch']);
// Route::get('/candidate-keyword-search/{keyword}', [App\Http\Controllers\CommonController::class, 'candidateKeywordSearch']);
// Route::get('/companies-keyword-search/{keyword}', [App\Http\Controllers\CommonController::class, 'companyKeywordSearch']);
// Route::get('get-candidates-search', [App\Http\Controllers\CommonController::class, 'getCandidateSearch']);
// Route::get('/get-single-company-detail/{id}', [App\Http\Controllers\CommonController::class, 'getCompanyDetail']);
// Route::get('/get-single-job-detail/{id}', [App\Http\Controllers\CommonController::class, 'getJobDetail']);
// Route::get('/get-single-candidate-detail/{id}', [App\Http\Controllers\CommonController::class, 'getCandidateDetail']);
// Route::get('/get-single-news-detail/{id}', [App\Http\Controllers\CommonController::class, 'getNewsDetail']);
// Route::post('/reset-password', [App\Http\Controllers\Admin\AuthenticationController::class, 'resetPasswordPost']);
// Route::get('/reset-password/{token}', [App\Http\Controllers\Admin\AuthenticationController::class, 'resetPassword']);
// Route::post('/complete-reset-password', [App\Http\Controllers\Admin\AuthenticationController::class, 'resetPasswordFormPost']);
// Route::get('expire-today-jobs', [App\Http\Controllers\CommonController::class, 'expireTodayJobs']);
// Route::post('/submit-contact-us', [App\Http\Controllers\CommonController::class, 'contactUs']);
// Route::get('/landingpage/news', [App\Http\Controllers\CommonController::class, 'getNews']);
// Route::post('/footer/news_letter', [App\Http\Controllers\CommonController::class, 'newsLetter']);
// Route::get('/download-cv/', [App\Http\Controllers\CommonController::class, 'downloadcv']);
// Route::get('get-jobs', [App\Http\Controllers\CommonController::class, 'getJobs']);
// //GOOGLE LOGIN ROUTES
// Route::get('auth/google', [App\Http\Controllers\Admin\AuthenticationController::class, 'redirectToGoogle']);
// Route::get('auth/google/callback', [App\Http\Controllers\Admin\AuthenticationController::class, 'handleGoogleCallback']);
// Route::post('/user-google-registration', [App\Http\Controllers\Admin\AuthenticationController::class, 'userGoogleRegistration']);
// Route::get('get-social-user-data/{id}', [App\Http\Controllers\Admin\AuthenticationController::class, 'getSocialUserData']);
// //GITHUB LOGIN ROUTES
// Route::get('auth/github', [App\Http\Controllers\Admin\AuthenticationController::class, 'redirectToGithub']);
// Route::get('auth/github/callback', [App\Http\Controllers\Admin\AuthenticationController::class, 'handleGithubCallback']);
// //LINKEDIN LOGIN ROUTES
// Route::get('auth/linkedin', [App\Http\Controllers\Admin\AuthenticationController::class, 'redirectToLinkedin']);
// Route::get('auth/linkedin/callback', [App\Http\Controllers\Admin\AuthenticationController::class, 'handleLinkedinCallback']);


// //samad
// Route::get('/login', function () {
//     return view('website/pages/login');
// })->name('login');

// /* Contact Us  */
// Route::get('/contact-us', function () {
//     return view('website/pages/contact-us');
// })->name('contact-us');
// /* forget-password  */


// Route::get('/candidate-list', function () {
//     return view('website/pages/candidate-list');
// })->name('candidate-list');


// Route::get('/comming_soon', function () {
//     return view('website/pages/comming_soon');
// })->name('comming_soon');

// // Auth::routes(['verify'=>true]);

// // Route::get('/home', [HomeController::class, 'index'])->name('home');

// //GOOGLE LOGIN ROUTES
// Route::get('oauth/{driver}', [RegisterController::class, 'redirectToProvider'])->name('social.oauth');
// Route::get('oauth/{driver}/callback', [RegisterController::class, 'handleProviderCallback'])->name('social.callback');

// //samad
// Route::middleware('auth')->group(function(){
//     // Route::get('/home', [App\Http\Controllers\Website\Candidate\HomeController::class, 'showDashboardPage'])->name('home');
//     // Route::get('/profile_edit/{tab}', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'edit'])->name('profile.edit');

//     Route::post('/update/basicinformation', [App\Http\Controllers\Candidate\CandidateController::class, 'updateBasicInformation'])->name('profile.updateBasicInformation');
//     Route::post('/update/education', [App\Http\Controllers\Candidate\CandidateController::class, 'updateEducation'])->name('profile.updateEducation');
//     Route::post('/update/language', [App\Http\Controllers\Candidate\CandidateController::class, 'updateLanguage'])->name('profile.updateLanguage');
//     Route::post('/update/award', [App\Http\Controllers\Candidate\CandidateController::class, 'updateAward'])->name('profile.updateAward');
//     Route::post('/update/skill', [App\Http\Controllers\Candidate\CandidateController::class, 'updateSkill'])->name('profile.updateSkill');
//     Route::post('/update/current-job', [App\Http\Controllers\Candidate\CandidateController::class, 'updateCurrentJob'])->name('profile.updateCurrentJob');
//     Route::post('/update/experience', [App\Http\Controllers\Candidate\CandidateController::class, 'updateExperience'])->name('profile.updateExperience');
//     Route::post('/update/project', [App\Http\Controllers\Candidate\CandidateController::class, 'updateProject'])->name('profile.updateProject');
//     Route::post('/update/resume-file', [App\Http\Controllers\Candidate\CandidateController::class, 'updateFileResume'])->name('profile.updateFileResume');
//     Route::post('/update/cnic-file', [App\Http\Controllers\Candidate\CandidateController::class, 'updateFileCnic'])->name('profile.updateCnic');
//     Route::post('/update/experience-letter-file', [App\Http\Controllers\Candidate\CandidateController::class, 'updateExperienceLetterFile'])->name('profile.updateExperienceLetter');
//     Route::post('/update/desire-job', [App\Http\Controllers\Candidate\CandidateController::class, 'updateDesireJob'])->name('profile.updateDesireJob');
//     Route::get('/apply-job/{job_id}', [App\Http\Controllers\Candidate\CandidateController::class, 'applyJob']);
//     Route::post('/candidate-setting-password', [App\Http\Controllers\Candidate\CandidateController::class, 'settingPassword']);
//     Route::get('candidate/remove-to-wish-list/{company_id}', [App\Http\Controllers\Candidate\CandidateController::class, 'removeToWishList']);
//     Route::get('candidate/add-to-wish-list/{company_id}', [App\Http\Controllers\Candidate\CandidateController::class, 'addToWishList']);
//     Route::get('get-candidate-wish-list', [App\Http\Controllers\Candidate\CandidateController::class, 'getCandidateWishList']);


//     // Route::post('/update/remark', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'updateRemark'])->name('profile.updateRemark');
//     // // Route::post('/update/cnic-back', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'updateCnicBack'])->name('profile.updateCnicBack');
//     // Route::post('/update/profile-pic', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'updateProfilePic'])->name('profile.updateProfilePic');
//     // Route::post('/update/profile-video', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'updateProfileVideo'])->name('profile.updateProfileVideo');
//     // Route::get('/delete-education/{id}', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'deleteEducation'])->name('profile.deleteEducation');
//     // Route::get('/delete-language/{id}', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'deleteLanguage'])->name('profile.deleteLanguage');
//     // Route::get('/delete-award/{id}', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'deleteAward'])->name('profile.deleteAward');
//     // Route::get('/delete-experience/{id}', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'deleteExperience'])->name('profile.deleteExperience');
//     // Route::get('/delete-skill/{id}', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'deleteSkill'])->name('profile.deleteSkill');
//     // Route::get('/delete-project/{id}', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'deleteProject'])->name('profile.deleteProject');
//     // Route::get('/create-cv', [App\Http\Controllers\Website\Candidate\ProfileController::class, 'generateCVPDF'])->name('profile.generateCVPDF');

//     // Route::get('/jobpost_list', [App\Http\Controllers\Website\JobPostController::class, 'index'])->name('jobpost.index');
//     // Route::get('/message_list', [App\Http\Controllers\Website\MessageController::class, 'index'])->name('message.index');
//     // Route::get('/company_list', [App\Http\Controllers\Website\CompanyController::class, 'index'])->name('company.index');
//     // Route::any('/test-search', [App\Http\Controllers\Website\CompanyController::class, 'index2'])->name('test-search');

// });
// //samad


// //website routes//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //samad
// // Route::prefix('company')->name('company.')->group(function(){
//     Route::middleware('auth')->group(function(){
//         Route::get('get-company-profile', [App\Http\Controllers\Company\CompanyController::class, 'getCompanyProfile']);
//         Route::post('/update/company-basicinformation', [App\Http\Controllers\Company\CompanyController::class, 'updateCompanyBasicInformation'])->name('profile.updateBasicInformationCompany');
//         Route::post('/update/socialmedia', [App\Http\Controllers\Company\CompanyController::class, 'socialmediaupdate'])->name('profile.updateSocialMedia');
//         Route::post('/company/post-job', [App\Http\Controllers\Company\CompanyController::class, 'jobPost'])->name('profile.jobPost');
//         Route::post('/company/update-post-job', [App\Http\Controllers\Company\CompanyController::class, 'UpdatejobPost'])->name('profile.updatejobPost');
//         Route::get('/get-company-jobs', [App\Http\Controllers\Company\CompanyController::class, 'companyJobs'])->name('profile.companyJobs');
//         Route::get('/delete-job-post/{id}', [App\Http\Controllers\Company\CompanyController::class, 'deleteJobPost'])->name('profile.deleteCompanyJobs');
//         Route::get('/edit-job-post/{id}', [App\Http\Controllers\Company\CompanyController::class, 'editJobPost'])->name('profile.editCompanyJobs');
//         Route::get('/buy-package-plan/{package_id}', [App\Http\Controllers\Company\CompanyController::class, 'buyPackage'])->name('profile.buyPackage');
//         Route::get('/check-job-post-limit', [App\Http\Controllers\Company\CompanyController::class, 'checkPostJobLimit']);
//         Route::get('/download-invoice/{order_id}', [App\Http\Controllers\Company\CompanyController::class, 'downloadInvoice']);
//         Route::get('/get-applied-applicants-list/{job_id}', [App\Http\Controllers\Company\CompanyController::class, 'getAppliedApplicantsList']);
//         Route::get('get-company-wish-list', [App\Http\Controllers\Company\CompanyController::class, 'getCompanyWishList']);
//         Route::get('/remove-to-wish-list/{candidate_id}', [App\Http\Controllers\Company\CompanyController::class, 'removeToWishList']);
//         Route::get('/add-to-wish-list/{candidate_id}', [App\Http\Controllers\Company\CompanyController::class, 'addToWishList']);
//         Route::post('/company-setting-password', [App\Http\Controllers\Company\CompanyController::class, 'settingPassword']);

// 		// Route::get('/home', [App\Http\Controllers\Website\Company\HomeController::class, 'showDashboardPage'])->name('home');
// 		// Route::get('/profile', [App\Http\Controllers\Website\Company\ProfileController::class, 'show'])->name('profile.show');
// 		// Route::get('/profile_edit', [App\Http\Controllers\Website\Company\ProfileController::class, 'edit'])->name('profile.edit');

//         // Route::get('/my_jobpost_list', [App\Http\Controllers\Website\JobPostController::class, 'index'])->name('jobpost.index');
// 		// Route::get('/message_list', [App\Http\Controllers\Website\MessageController::class, 'index'])->name('message.index');
// 		// Route::get('/candidate_list', [App\Http\Controllers\Website\CandidateController::class, 'index'])->name('candidate.index');

// 	});

// // });
// //samad

// Route::prefix('faq')->name('faq.')->group(function(){
//     Route::get('/index', [App\Http\Controllers\Website\FAQController::class, 'showFAQPage'])->name('index');
//     Route::get('/detail-account', [App\Http\Controllers\Website\FAQController::class, 'showAccountPage'])->name('detail-account');
//     Route::get('/detail-job-search', [App\Http\Controllers\Website\FAQController::class, 'showJobSearchPage'])->name('detail-job-search');
//     Route::get('/detai-apply-job', [App\Http\Controllers\Website\FAQController::class, 'showApplyJobPage'])->name('detai-apply-job');
//     Route::get('/detail-bizblanca', [App\Http\Controllers\Website\FAQController::class, 'showBizblancaPage'])->name('detail-bizblanca');
//     Route::get('/detail-hiring', [App\Http\Controllers\Website\FAQController::class, 'showHiringPage'])->name('detail-hiring');
//     Route::get('/detail-job-alert', [App\Http\Controllers\Website\FAQController::class, 'showJobAlertPage'])->name('detail-job-alert');
//     Route::get('/detail-joining', [App\Http\Controllers\Website\FAQController::class, 'showJoiningPage'])->name('detail-joining');
//     Route::get('/detail-payment', [App\Http\Controllers\Website\FAQController::class, 'showPaymentTransferPage'])->name('detail-payment');
// });

//adminpanel routes//////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Route::prefix('admin')->name('admin.')->group(function(){
//     Route::middleware('guest:admin')->group(function(){
//         Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
// 		Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('login');
//     });
//     Route::middleware('auth:admin')->group(function(){
//         Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
//         Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
//         Route::get('/list', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('list');
//         Route::get('/deactivated_list', [App\Http\Controllers\Admin\AdminController::class, 'getDeActivatedList'])->name('deactivated_list');
//         Route::get('/edit', [App\Http\Controllers\Admin\AdminController::class, 'edit'])->name('edit');
//         Route::get('/deactivate/{id}', [App\Http\Controllers\Admin\AdminController::class, 'deactivate'])->name('deactivate');
//         Route::post('/setting', [App\Http\Controllers\Admin\AdminController::class, 'updateSetting'])->name('setting');
//         Route::get('/setting', [App\Http\Controllers\Admin\AdminController::class, 'showSettingPage'])->name('setting');
//         Route::get('/setting', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
//         Route::post('/mark-as-read/', [App\Http\Controllers\Admin\DashboardController::class, 'markNotification'])->name('markNotification');
//         Route::get('/admin/fetch_notifications', [App\Http\Controllers\Admin\DashboardController::class, 'fetchNotification'])->name('notification');
//         Route::get('/notification', [App\Http\Controllers\Admin\DashboardController::class, 'notifications'])->name('notifications');


//         Route::prefix('candidate')->name('candidate.')->group(function(){
//             Route::get('index', [App\Http\Controllers\Admin\CandidateController::class, 'index'])->name('index');
//             Route::get('candidate-cv', [App\Http\Controllers\Admin\CandidateController::class, 'candidateCV'])->name('candidatecv');
//             Route::get('create', [App\Http\Controllers\Admin\CandidateController::class, 'create'])->name('create');
//             Route::post('store', [App\Http\Controllers\Admin\CandidateController::class, 'store'])->name('store');
//             Route::get('show/{id}', [App\Http\Controllers\Admin\CandidateController::class, 'show'])->name('show');
//             Route::get('candidate_edit/{id}', [App\Http\Controllers\Admin\CandidateController::class, 'edit'])->name('edit');
//             Route::post('update/{id}', [App\Http\Controllers\Admin\CandidateController::class, 'update'])->name('update');
//             Route::get('destroy/{id}', [App\Http\Controllers\Admin\CandidateController::class, 'destroy'])->name('destroy');

//             Route::get('index_imported', [App\Http\Controllers\Admin\CandidateController::class, 'indexImported'])->name('index_imported');
//             Route::get('import', [App\Http\Controllers\Admin\CandidateController::class, 'showImport'])->name('import');
//             Route::post('import', [App\Http\Controllers\Admin\CandidateController::class, 'import'])->name('import');
//         });

//         Route::prefix('company')->name('company.')->group(function(){
//             Route::get('index', [App\Http\Controllers\Admin\CompanyController::class, 'index'])->name('index');
//             Route::get('package-companies', [App\Http\Controllers\Admin\CompanyController::class, 'packageCompanies'])->name('packageCompanies');
//             Route::get('pay-now/{id}', [App\Http\Controllers\Admin\CompanyController::class, 'payNow'])->name('payNow');
//         });

//         Route::prefix('contact-us')->name('contact_us.')->group(function(){
//             Route::get('index', [App\Http\Controllers\Admin\ContactUsController::class, 'index'])->name('index');
//             Route::get('reviewed_list', [App\Http\Controllers\Admin\ContactUsController::class, 'indexReviewed'])->name('index_reviewed');
//             Route::get('/contact_us_create', [ContactUsController::class, 'create'])->name('contact_us.create');
//             Route::post('/contact_us_store', [ContactUsController::class, 'store'])->name('contact_us.store');
//             Route::get('/contact_us_show/{id}', [ContactUsController::class, 'show'])->name('contact_us.show');
//             Route::get('/contact_us_edit/{id}', [ContactUsController::class, 'edit'])->name('contact_us.edit');
//             Route::post('/contact_us_update/{id}', [ContactUsController::class, 'update'])->name('contact_us.update');
//             Route::get('/contact_us_update_status/{id}', [ContactUsController::class, 'updateStatus'])->name('contact_us.update_status');
//             Route::get('/contact_us_destroy/{id}', [ContactUsController::class, 'destroy'])->name('contact_us.destroy');
//         });

//         Route::prefix('user')->name('user.')->group(function(){
//             Route::get('/list', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');
//             Route::get('/deactive_list', [App\Http\Controllers\Admin\UserController::class, 'getDeActivatedList'])->name('deactivated_list');
//             Route::get('/deactivate/{id}', [App\Http\Controllers\Admin\UserController::class, 'deActivate'])->name('deactivate');
//         });

//         Route::prefix('news')->name('news.')->group(function(){
//             Route::get('/list', [App\Http\Controllers\Admin\NewsController::class, 'index'])->name('index');
//             Route::get('/create', [App\Http\Controllers\Admin\NewsController::class, 'create'])->name('create');
//             Route::post('/store', [App\Http\Controllers\Admin\NewsController::class, 'store'])->name('store');
//             Route::get('/show/{id}', [App\Http\Controllers\Admin\NewsController::class, 'show'])->name('show');
//             Route::get('/edit/{id}', [App\Http\Controllers\Admin\NewsController::class, 'edit'])->name('edit');
//             Route::post('/update/{id}', [App\Http\Controllers\Admin\NewsController::class, 'update'])->name('update');
//             Route::get('/destroy/{id}', [App\Http\Controllers\Admin\NewsController::class, 'destroy'])->name('destroy');
//         });
//         // ===================================FAQ'S ROUTES=======================================
//         Route::prefix('faqs')->name('faqs.')->group(function(){
//             Route::get('/list', [App\Http\Controllers\Admin\FaqsController::class, 'index'])->name('index');
//             Route::get('/create', [App\Http\Controllers\Admin\FaqsController::class, 'create'])->name('create');
//             Route::post('/store', [App\Http\Controllers\Admin\FaqsController::class, 'store'])->name('store');
//             Route::get('/show/{id}', [App\Http\Controllers\Admin\FaqsController::class, 'show'])->name('show');
//             Route::get('/edit/{id}', [App\Http\Controllers\Admin\FaqsController::class, 'edit'])->name('edit');
//             Route::post('/update/{id}', [App\Http\Controllers\Admin\FaqsController::class, 'update'])->name('update');
//             Route::get('/destroy/{id}', [App\Http\Controllers\Admin\FaqsController::class, 'destroy'])->name('destroy');
//         });
//         // ===================================PAcKAGES ROUTES=======================================
//         Route::prefix('packages')->name('packages.')->group(function(){
//             Route::get('/list', [App\Http\Controllers\Admin\PackagesController::class, 'index'])->name('index');
//             Route::get('/create', [App\Http\Controllers\Admin\PackagesController::class, 'create'])->name('create');
//             Route::post('/store', [App\Http\Controllers\Admin\PackagesController::class, 'store'])->name('store');
//             Route::get('/edit/{id}', [App\Http\Controllers\Admin\PackagesController::class, 'edit'])->name('edit');
//             Route::post('/update/{id}', [App\Http\Controllers\Admin\PackagesController::class, 'update'])->name('update');
//         });
//          // ===================================NEWS LETTER=======================================
//          Route::prefix('news_letter')->name('news_letter.')->group(function(){
//             Route::get('/list', [App\Http\Controllers\Admin\NewsLetterController::class, 'list'])->name('list');
//         });
//     });

// });
