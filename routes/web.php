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


Route::get('/','IndexController@index');
Route::get('home','IndexController@home');
Route::get('company_overview','IndexController@company_overview');
Route::get('profile_A.rungnikorn','IndexController@profile_rungnikorn');
Route::get('executive_search','IndexController@executive_search');
Route::get('staff_outsourcing','IndexController@staff_outsourcing');
Route::get('inhouse_training','IndexController@inhouse_training');
Route::get('payrolling_service','IndexController@payrolling_service');
Route::get('accounting','IndexController@account');
Route::get('contact','IndexController@contact');
Route::get('credit','IndexController@credit');
Route::get('facebook','IndexController@facebook');
#################################################################
Route::get('register','LoginController@index');
Route::post('post_register','LoginController@store');


#################################################################
Route::get('Enhance_Leadership','DownloadController@EnhanceLeadership');
Route::get('EnhanceLeadershipbyGroupActivities','DownloadController@EnhanceLeadershipbyGroupActivities');
Route::get('HRMforNonHRManagers','DownloadController@HRMforNonHRManagers');
Route::get('ProfessionalSalesman','DownloadController@ProfessionalSalesman');
Route::get('WorkshopEffectiveBusinessWriting','DownloadController@WorkshopEffectiveBusinessWriting');
Route::get('WorkshopTraintheTrainer','DownloadController@WorkshopTraintheTrainer');
Route::get('WorkshopTraintheTrainer2days','DownloadController@WorkshopTraintheTrainer2days');
Route::get('JobCoachinginMentoringStyle','DownloadController@JobCoachinginMentoringStyle');
Route::get('WorkshopJobAssignmentTechniques','DownloadController@WorkshopJobAssignmentTechniques');
Route::get('WalkRally','DownloadController@WalkRally');
Route::get('TeamBuildingbyGroupActivities','DownloadController@TeamBuildingbyGroupActivities');
Route::get('WorkshopSetKPIsTarget','DownloadController@WorkshopSetKPIsTarget');
Route::get('WorkshopBusinessPlanbasedonMBO','DownloadController@WorkshopBusinessPlanbasedonMBO');
Route::get('WorkshopActionPlan','DownloadController@WorkshopActionPlan');
Route::get('BasicofCostsReduction','DownloadController@BasicofCostsReduction');
Route::get('S5Basic','DownloadController@S5Basic');
Route::get('S5AdvancedLevel','DownloadController@S5AdvancedLevel');
Route::get('ConstructiveDisciplineManagement','DownloadController@ConstructiveDisciplineManagement');
Route::get('LaborLaws','DownloadController@LaborLaws');
Route::get('ProactiveLaborRelations','DownloadController@ProactiveLaborRelations');
Route::get('WorkshopModernSalaryStructure','DownloadController@WorkshopModernSalaryStructure');
Route::get('ModernStaffPerformanceManagement','DownloadController@ModernStaffPerformanceManagement');
Route::get('WorkshopWritingJobDescriptions','DownloadController@WorkshopWritingJobDescriptions');
Route::get('WorkshopHRCompetencySystem','DownloadController@WorkshopHRCompetencySystem');
Route::get('WorkshopCCandCompetencyDictionary','DownloadController@WorkshopCCandCompetencyDictionary');
Route::get('rungnikorn','DownloadController@rungnikorn');
#################################################################




