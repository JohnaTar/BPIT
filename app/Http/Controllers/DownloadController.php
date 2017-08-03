<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function EnhanceLeadership()
	{
		$file = public_path() ."/pdf/1.Enhance Leadership.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'1.EnhanceLeadership.pdf',$headers);
	}
    public function EnhanceLeadershipbyGroupActivities()
	{
		$file = public_path() ."/pdf/2.Enhance Leadership by Group Activities.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'2.EnhanceLeadershipbyGroupActivities.pdf',$headers);
	}
	public function HRMforNonHRManagers()
	{
		$file = public_path() ."/pdf/3.HRM for Non-HR Managers.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'3.HRM for Non-HR Managers.pdf',$headers);
	}

	public function ProfessionalSalesman()
	{
		$file = public_path() ."/pdf/4.Professional Salesman.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'4.Professional Salesman.pdf',$headers);
	}

	public function WorkshopEffectiveBusinessWriting()
	{
		$file = public_path() ."/pdf/5.Workshop; Effective Business Writing.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'5.Workshop; Effective Business Writing.pdf',$headers);
	}
	public function WorkshopTraintheTrainer()
	{
		$file = public_path() ."/pdf/6.Workshop; Train the Trainer.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'6.Workshop; Train the Trainer.pdf',$headers);
	}
	public function WorkshopTraintheTrainer2days()
	{
		$file = public_path() ."/pdf/7.Workshop; Train the Trainer (2 days).pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'7.Workshop; Train the Trainer (2 days).pdf',$headers);
	}
	public function JobCoachinginMentoringStyle()
	{
		$file = public_path() ."/pdf/8.Job Coaching in Mentoring Style.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'8.Job Coaching in Mentoring Style.pdf',$headers);
	}
	public function WorkshopJobAssignmentTechniques()
	{
		$file = public_path() ."/pdf/9.Workshop; Job Assignment Techniques.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'9.Workshop; Job Assignment Techniques.pdf',$headers);
	}
	public function WalkRally()
	{
		$file = public_path() ."/pdf/10.Walk Rally.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'10.Walk Rally.pdf',$headers);
	}
	public function TeamBuildingbyGroupActivities()
	{
		$file = public_path() ."/pdf/11.Team Building by Group Activities.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'11.Team Building by Group Activities.pdf',$headers);
	}
	public function WorkshopSetKPIsTarget()
	{
		$file = public_path() ."/pdf/12.Workshop; Set KPIs Target.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'12.Workshop; Set KPIs Target.pdf',$headers);
	}
	public function WorkshopBusinessPlanbasedonMBO()
	{
		$file = public_path() ."/pdf/13.Workshop; Business Plan based on MBO.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'13.Workshop; Business Plan based on MBO.pdf',$headers);
	}
	public function WorkshopActionPlan()
	{
		$file = public_path() ."/pdf/14.Workshop; Action Plan.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'14.Workshop; Action Plan.pdf',$headers);
	}
	public function BasicofCostsReduction()
	{
		$file = public_path() ."/pdf/15.Basic of Costs Reduction.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'15.Basic of Costs Reduction.pdf',$headers);
	}
	public function S5Basic()
	{
		$file = public_path() ."/pdf/16.5S Basic.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'16.5S Basic.pdf',$headers);
	}

	public function S5AdvancedLevel()
	{
		$file = public_path() ."/pdf/17.5S Advanced Level.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'17.5S Advanced Level.pdf',$headers);
	}
	public function ConstructiveDisciplineManagement()
	{
		$file = public_path() ."/pdf/18.Constructive Discipline Management.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'18.Constructive Discipline Management.pdf',$headers);
	}
	public function LaborLaws()
	{
		$file = public_path() ."/pdf/19.Labor Laws.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'19.Labor Laws.pdf',$headers);
	}
	public function ProactiveLaborRelations()
	{
		$file = public_path() ."/pdf/20.Proactive Labor Relations.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'20.Proactive Labor Relations.pdf',$headers);
	}
	public function WorkshopModernSalaryStructure()
	{
		$file = public_path() ."/pdf/21.Workshop; Modern Salary Structure.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'21.Workshop; Modern Salary Structure.pdf',$headers);
	}
	public function ModernStaffPerformanceManagement()
	{
		$file = public_path() ."/pdf/22.Modern Staff Performance Management.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'22.Modern Staff Performance Management.pdf',$headers);
	}
	public function WorkshopWritingJobDescriptions()
	{
		$file = public_path() ."/pdf/23.Workshop; Writing Job Descriptions.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'23.Workshop; Writing Job Descriptions.pdf',$headers);
	}
	public function WorkshopHRCompetencySystem()
	{
		$file = public_path() ."/pdf/24.Workshop; HR Competency System.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'24.Workshop; HR Competency System.pdf',$headers);
	}
	public function WorkshopCCandCompetencyDictionary()
	{
		$file = public_path() ."/pdf/25.Workshop; CC and Competency Dictionary.pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'25.Workshop; CC and Competency Dictionary.pdf',$headers);
	}
	public function rungnikorn()
	{
		$file = public_path() ."/pdf/rungnikorn(thai).pdf";
		$headers=array('Content-Type: application/pdf',);
		return response()->download($file,'rungnikorn(thai).pdf',$headers);
	}
}
