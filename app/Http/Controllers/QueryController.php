<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\General;
use App\Demographic;
use App\Home;
use App\Certification;
use App\CertifiedActivity;
use App\EconomicActivity;
use App\EconomicActivityMain;
use App\EconomicActivitySec;
use App\Education;
use App\FinanceMarket;
use App\Expectative;
use App\Social;
use App\Genre;
use App\External;
use App\SelfEsteem;

class QueryController extends Controller
{
	
	public function getByDocument($document)
	{
		$items = DB::table('generals')
			->where('p093', 'like', '%'.$document.'%')
			->where('status', '!=', 1)
			->get();
		if (count($items)>0) {
			return array(
				'success' => true,
				'generals'=>$items 
			);
		} else {
			return array(
				'sucess' => false,
				'message' => 'No se encontraron datos con el documento ingresado' 
			);
		}
	}

	public function insertGeneral(Request $request) {
		
		$general = new General;
		
		if (DB::table('generals')->where('id', $request->id)->exists()) {
			$general = General::find($request->id);
		} /*else {
			$general->id = $request->id;
		}*/

	    $general->latitude = $request->latitude;
	    $general->longitude = $request->longitude;
	    $general->key = $request->key;
	    $general->sede_aplicacion = $request->sede_aplicacion;
	    $general->sexo = $request->sexo;
	    $general->p090 = $request->p090;
	    $general->p091 = $request->p091;
	    $general->p092_1 = $request->p092_1;
	    $general->p092_2 = $request->p092_2;
	    $general->p092_3 = $request->p092_3;
	    $general->p092_4 = $request->p092_4;
	    $general->p093 = $request->p093;
	    $general->p094 = $request->p094;
	    $general->p095 = $request->p095;
	    $general->p096_1 = $request->p096_1;
	    $general->p096_2 = $request->p096_2;
	    $general->p096_3 = $request->p096_3;
	    $general->status = $request->status;

	    $update = $general->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}

	public function insertDemographic(Request $request) {
		$demographic = new Demographic;
		
		if (DB::table('demographics')->where('general_id', $request->general_id)->exists()) {
			$demographic = Demographic::where('general_id', $request->general_id)->first();
		} /*else {
			$demographic->id = $request->id;
		}*/

    	$demographic->general_id = $request->general_id;
    	$demographic->p001 = $request->p001;
    	$demographic->p002 = $request->p002;
    	$demographic->p003 = $request->p003;
    	$demographic->p003_1 = $request->p003_1;
    	$demographic->p004 = $request->p004;
    	$demographic->p005 = $request->p005;
    	$demographic->p006 = $request->p006;
    	$demographic->p007_1 = $request->p007_1;
    	$demographic->p007_1_4_esp = $request->p007_1_4_esp;
    	$demographic->p007_2 = $request->p007_2;
    	$demographic->p007_2_4_esp = $request->p007_2_4_esp;

	    $update = $demographic->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}

	public function insertHome(Request $request) {
		
		$home = new Home;
		
		if (DB::table('homes')->where('general_id', $request->general_id)->exists()) {
			$home = Home::where('general_id', $request->general_id)->first();
		} /*else {
			$home->id = $request->id;
		}*/

	    $home->general_id = $request->general_id;
	    $home->p008 = $request->p008;
	    $home->p008_9_esp = $request->p008_9_esp;
	    $home->p009 = $request->p009;
	    $home->p009_8_esp = $request->p009_8_esp;
	    $home->p010 = $request->p010;
	    $home->p010_4_esp = $request->p010_4_esp;
	    $home->p011 = $request->p011;
	    $home->p012 = $request->p012;
	    $home->p012_8_esp = $request->p012_8_esp;
	    $home->p013 = $request->p013;
	    $home->p013_6_esp = $request->p013_6_esp;
	    $home->p014_1 = $request->p014_1;
	    $home->p014_2 = $request->p014_2;
	    $home->p014_3 = $request->p014_3;
	    $home->p014_4 = $request->p014_4;
	    $home->p014_5 = $request->p014_5;
	    $home->p014_6 = $request->p014_6;
	    $home->p014_6_esp = $request->p014_6_esp;
	    $home->p015_1 = $request->p015_1;
	    $home->p015_2 = $request->p015_2;
	    $home->p015_3 = $request->p015_3;
	 	
	 	$update = $home->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertCertification(Request $request) { 
		$certification = new Certification;
		
		if (DB::table('certifications')->where('general_id', $request->general_id)->exists()) {
			$certification = Certification::where('general_id', $request->general_id)->first();
		} /*else {
			$certification->id = $request->id;
		}*/
		
		$certification->general_id = $request->general_id;
		$certification->p016 = $request->p016;
		$certification->p016_1 = $request->p016_1;
		$certification->p017_1 = $request->p017_1;
		$certification->p017_2 = $request->p017_2;
		$certification->p017_3 = $request->p017_3;
		$certification->p017_4 = $request->p017_4;
		$certification->p017_5 = $request->p017_5;
		$certification->p017_6 = $request->p017_6;
		$certification->p017_7 = $request->p017_7;
		$certification->p017_7_esp = $request->p017_7_esp;
		$certification->p018 = $request->p018;
		$certification->p019_1 = $request->p019_1;
		$certification->p019_2 = $request->p019_2;
		$certification->p019_3 = $request->p019_3;
		$certification->p019_4 = $request->p019_4;
		$certification->p019_5 = $request->p019_5;
		$certification->p019_5_esp = $request->p019_5_esp;
		$certification->p020 = $request->p020;
		$certification->p020_1 = $request->p020_1;
		$certification->p021 = $request->p021;	
		
		$update = $certification->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertCertified(Request $request) {
		$certified = new CertifiedActivity;
		
		if (DB::table('certified_activities')->where('general_id', $request->general_id)->exists()) {
			$certified = CertifiedActivity::where('general_id', $request->general_id)->first();
		} /*else {
			$certified->id = $request->id;
		}*/
		
		$certified->general_id = $request->general_id;
		$certified->p022_1 = $request->p022_1;
		$certified->p022_2 = $request->p022_2;
		$certified->p022_3 = $request->p022_3;
		$certified->p022_4 = $request->p022_4;
		$certified->p022_5 = $request->p022_5;
		$certified->p022_6 = $request->p022_6;
		$certified->p022_7 = $request->p022_7;
		$certified->p022_8 = $request->p022_8;
		$certified->p022_9 = $request->p022_9;
		$certified->p022_10 = $request->p022_10;
		$certified->p022_10_esp = $request->p022_10_esp;
		$certified->p023_1 = $request->p023_1;
		$certified->p023_2 = $request->p023_2;
		$certified->p023_3 = $request->p023_3;
		$certified->p023_4 = $request->p023_4;
		$certified->p023_5 = $request->p023_5;
		$certified->p023_4_esp = $request->p023_4_esp;
		$certified->p023_5_esp = $request->p023_5_esp;
		$certified->p024_1 = $request->p024_1;
		$certified->p024_2 = $request->p024_2;
		$certified->p024_3 = $request->p024_3;
		$certified->p024_4 = $request->p024_4;
		$certified->p024_5 = $request->p024_5;
		$certified->p024_5_esp = $request->p024_5_esp;
		
		$update = $certified->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertEconomic(Request $request) {
		$economic = new EconomicActivity;
		
		if (DB::table('economic_activities')->where('general_id', $request->general_id)->exists()) {
			$economic = EconomicActivity::where('general_id', $request->general_id)->first();
		} /*else {
			$economic->id = $request->id;
		}*/
		
		$economic->general_id = $request->general_id;
		$economic->p025_1 = $request->p025_1;
		$economic->p025_2 = $request->p025_2;
		$economic->p025_3 = $request->p025_3;
		$economic->p025_4 = $request->p025_4;
		$economic->p025_5 = $request->p025_5;
		$economic->p025_6 = $request->p025_6;
		$economic->p025_7 = $request->p025_7;
		$economic->p025_7_esp = $request->p025_7_esp;
		$economic->p026 = $request->p026;
		$economic->p026_5_esp = $request->p026_5_esp;
		$economic->p027 = $request->p027;
		$economic->p028 = $request->p028;
		$economic->p029_1 = $request->p029_1;
		$economic->p029_2 = $request->p029_2;
		$economic->p029_3 = $request->p029_3;
		$economic->p029_4 = $request->p029_4;
		$economic->p029_5 = $request->p029_5;
		
		$update = $economic->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertEconomicActivityMain(Request $request) {
		$economic = new EconomicActivityMain;
		
		if (DB::table('economic_activity_mains')->where('general_id', $request->general_id)->exists()) {
			$economic = EconomicActivityMain::where('general_id', $request->general_id)->first();
		} /*else {
			$economic->id = $request->id;
		}*/
		
		$economic->general_id  = $request->general_id;
		$economic->p030  = $request->p030;
		$economic->p030_2_esp  = $request->p030_2_esp;
		$economic->p031  = $request->p031;
		$economic->p031_7_esp  = $request->p031_7_esp;
		$economic->p032  = $request->p032;
		$economic->p032_12_esp  = $request->p032_12_esp;
		$economic->p033  = $request->p033;
		$economic->p033_8_esp  = $request->p033_8_esp;
		$economic->p034  = $request->p034;
		$economic->p034_esp  = $request->p034_esp;
		$economic->p035  = $request->p035;
		$economic->p036_1  = $request->p036_1;
		$economic->p036_2  = $request->p036_2;
		$economic->p037  = $request->p037;
		$economic->p037_8_esp  = $request->p037_8_esp;
		$economic->p037_1  = $request->p037_1;
		$economic->p038  = $request->p038;
		$economic->p039  = $request->p039;
		$economic->p040  = $request->p040;
		$economic->p041_1  = $request->p041_1;
		$economic->p041_2  = $request->p041_2;
		$economic->p041_3  = $request->p041_3;
		$economic->p041_4  = $request->p041_4;
		$economic->p041_5  = $request->p041_5;
		$economic->p041_6  = $request->p041_6;
		$economic->p041_6_esp  = $request->p041_6_esp;
		$economic->p041_1_1  = $request->p041_1_1;
		$economic->p041_2_1  = $request->p041_2_1;
		$economic->p041_3_1  = $request->p041_3_1;
		$economic->p041_4_1  = $request->p041_4_1;
		$economic->p041_5_1  = $request->p041_5_1;
		$economic->p041_6_1  = $request->p041_6_1;
		$economic->p041_1_2  = $request->p041_1_2;
		$economic->p041_2_2  = $request->p041_2_2;
		$economic->p041_3_2  = $request->p041_3_2;
		$economic->p041_4_2  = $request->p041_4_2;
		$economic->p041_5_2  = $request->p041_5_2;
		$economic->p041_6_2  = $request->p041_6_2;
		$economic->p042_1  = $request->p042_1;
		$economic->p042_2  = $request->p042_2;
		$economic->p042_3  = $request->p042_3;
		$economic->p042_4  = $request->p042_4;
		$economic->p042_5  = $request->p042_5;
		$economic->p042_6  = $request->p042_6;
		$economic->p042_4_esp  = $request->p042_4_esp;
		$economic->p042_5_esp  = $request->p042_5_esp;
		$economic->p043  = $request->p043;
		
		$update = $economic->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertEconomicActivitySec(Request $request) {
		$economic = new EconomicActivitySec;
		
		if (DB::table('economic_activity_secs')->where('general_id', $request->general_id)->exists()) {
			$economic = EconomicActivitySec::where('general_id', $request->general_id)->first();
		} /*else {
			$economic->id = $request->id;
		}*/
		
		$economic->general_id = $request->general_id;
		$economic->p044_1 = $request->p044_1;
		$economic->p044_2 = $request->p044_2;
		$economic->p044_3 = $request->p044_3;
		$economic->p045 = $request->p045;
		$economic->p046 = $request->p046;
		$economic->p046_7_esp = $request->p046_7_esp;
		$economic->p047 = $request->p047;
		$economic->p047_12_esp = $request->p047_12_esp;
		$economic->p048 = $request->p048;
		$economic->p048_8_esp = $request->p048_8_esp;
		$economic->p049 = $request->p049;
		$economic->p049_esp = $request->p049_esp;
		$economic->p050 = $request->p050;
		$economic->p051_1 = $request->p051_1;
		$economic->p051_2 = $request->p051_2;
		$economic->p052 = $request->p052;
		$economic->p052_8_esp = $request->p052_8_esp;
		$economic->p052_1 = $request->p052_1;
		$economic->p053 = $request->p053;
		$economic->p054 = $request->p054;
		$economic->p055_1 = $request->p055_1;
		$economic->p055_2 = $request->p055_2;
		$economic->p055_3 = $request->p055_3;
		$economic->p055_4 = $request->p055_4;
		$economic->p055_5 = $request->p055_5;
		$economic->p055_6 = $request->p055_6;
		$economic->p055_6_esp = $request->p055_6_esp;
		$economic->p055_1_1 = $request->p055_1_1;
		$economic->p055_2_1 = $request->p055_2_1;
		$economic->p055_3_1 = $request->p055_3_1;
		$economic->p055_4_1 = $request->p055_4_1;
		$economic->p055_5_1 = $request->p055_5_1;
		$economic->p055_6_1 = $request->p055_6_1;
		$economic->p055_1_2 = $request->p055_1_2;
		$economic->p055_2_2 = $request->p055_2_2;
		$economic->p055_3_2 = $request->p055_3_2;
		$economic->p055_4_2 = $request->p055_4_2;
		$economic->p055_5_2 = $request->p055_5_2;
		$economic->p055_6_2 = $request->p055_6_2;
		$economic->p056_1 = $request->p056_1;
		$economic->p056_2 = $request->p056_2;
		$economic->p056_3 = $request->p056_3;
		$economic->p056_4 = $request->p056_4;
		$economic->p056_5 = $request->p056_5;
		$economic->p056_6 = $request->p056_6;
		$economic->p056_4_esp = $request->p056_4_esp;
		$economic->p056_5_esp = $request->p056_5_esp;
		
		$update = $economic->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertFinanceMarket(Request $request) {
		$finance = new FinanceMarket;
		
		if (DB::table('finance_markets')->where('general_id', $request->general_id)->exists()) {
			$finance = FinanceMarket::where('general_id', $request->general_id)->first();
		}/* else {
			$finance->id = $request->id;
		}*/
		
		$finance->general_id = $request->general_id;
		$finance->p057_1 = $request->p057_1;
		$finance->p057_2 = $request->p057_2;
		$finance->p057_3 = $request->p057_3;
		$finance->p057_4 = $request->p057_4;
		$finance->p057_5 = $request->p057_5;
		$finance->p057_6 = $request->p057_6;
		$finance->p057_7 = $request->p057_7;
		$finance->p057_7_esp = $request->p057_7_esp;
		$finance->p058_1 = $request->p058_1;
		$finance->p058_2 = $request->p058_2;
		$finance->p058_3 = $request->p058_3;
		$finance->p058_4 = $request->p058_4;
		$finance->p058_5 = $request->p058_5;
		$finance->p058_6 = $request->p058_6;
		$finance->p058_7 = $request->p058_7;
		$finance->p058_7_esp = $request->p058_7_esp;
		$finance->p059_1 = $request->p059_1;
		$finance->p059_2 = $request->p059_2;
		$finance->p059_3 = $request->p059_3;
		$finance->p059_4 = $request->p059_4;
		$finance->p059_5 = $request->p059_5;
		$finance->p059_6 = $request->p059_6;
		$finance->p059_6_esp = $request->p059_6_esp;
		$finance->p060 = $request->p060;
		$finance->p060_1 = $request->p060_1;
		$finance->p060_2 = $request->p060_2;
		$finance->p060_3 = $request->p060_3;

	    $update = $finance->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertEducation(Request $request) {
		$education = new Education;
		
		if (DB::table('education')->where('general_id', $request->general_id)->exists()) {
			$education = Education::where('general_id', $request->general_id)->first();
		} /*else {
			$education->id = $request->id;
		}*/

		$education->general_id = $request->general_id;
		$education->p061 = $request->p061;
		$education->p061_1 = $request->p061_1;
		$education->p062 = $request->p062;
		$education->p062_8_esp = $request->p062_8_esp;
		$education->p063 = $request->p063;
		$education->p064_1 = $request->p064_1;
		$education->p064_2 = $request->p064_2;
		$education->p064_3 = $request->p064_3;
		$education->p064_4 = $request->p064_4;
		$education->p064_5 = $request->p064_5;
		$education->p064_6 = $request->p064_6;
		$education->p064_7 = $request->p064_7;
		$education->p064_8 = $request->p064_8;
		$education->p064_9 = $request->p064_9;
		$education->p064_10 = $request->p064_10;
		$education->p064_11 = $request->p064_11;
		$education->p064_11_esp = $request->p064_11_esp;
		$education->p064_12 = $request->p064_12;
		$education->p064_12_esp = $request->p064_12_esp;
		$education->p064_13 = $request->p064_13;
		$education->p064_13_esp = $request->p064_13_esp;
		$education->p064_a_1 = $request->p064_a_1;
		$education->p064_a_2 = $request->p064_a_2;
		$education->p064_a_3 = $request->p064_a_3;
		$education->p064_a_4 = $request->p064_a_4;
		$education->p064_a_5 = $request->p064_a_5;
		$education->p064_a_6 = $request->p064_a_6;
		$education->p064_a_7 = $request->p064_a_7;
		$education->p064_a_8 = $request->p064_a_8;
		$education->p064_a_9 = $request->p064_a_9;
		$education->p064_a_10 = $request->p064_a_10;
		$education->p064_a_11 = $request->p064_a_11;
		$education->p064_a_12 = $request->p064_a_12;
		$education->p064_a_13 = $request->p064_a_13;
		$education->p064_b_1 = $request->p064_b_1;
		$education->p064_b_2 = $request->p064_b_2;
		$education->p064_b_3 = $request->p064_b_3;
		$education->p064_b_4 = $request->p064_b_4;
		$education->p064_b_5 = $request->p064_b_5;
		$education->p064_b_6 = $request->p064_b_6;
		$education->p064_b_7 = $request->p064_b_7;
		$education->p064_b_8 = $request->p064_b_8;
		$education->p064_b_9 = $request->p064_b_9;
		$education->p064_b_10 = $request->p064_b_10;
		$education->p064_b_11 = $request->p064_b_11;
		$education->p064_b_12 = $request->p064_b_12;
		$education->p064_b_13 = $request->p064_b_13;
		$education->p065 = $request->p065;
		$education->p066_1 = $request->p066_1;
		$education->p066_2 = $request->p066_2;
		$education->p066_3 = $request->p066_3;
		$education->p066_4 = $request->p066_4;
		$education->p066_5 = $request->p066_5;
		$education->p066_5_esp = $request->p066_5_esp;
		$education->p066_6 = $request->p066_6;
		$education->p066_6_esp = $request->p066_6_esp;
		$education->p066_7 = $request->p066_7;
		$education->p066_7_esp = $request->p066_7_esp;
		$education->p066_a_1 = $request->p066_a_1;
		$education->p066_a_2 = $request->p066_a_2;
		$education->p066_a_3 = $request->p066_a_3;
		$education->p066_a_4 = $request->p066_a_4;
		$education->p066_a_5 = $request->p066_a_5;
		$education->p066_a_6 = $request->p066_a_6;
		$education->p066_a_7 = $request->p066_a_7;
		$education->p066_b_1 = $request->p066_b_1;
		$education->p066_b_2 = $request->p066_b_2;
		$education->p066_b_3 = $request->p066_b_3;
		$education->p066_b_4 = $request->p066_b_4;
		$education->p066_b_5 = $request->p066_b_5;
		$education->p066_b_6 = $request->p066_b_6;
		$education->p066_b_7 = $request->p066_b_7;
		$education->p066_c_1 = $request->p066_c_1;
		$education->p066_c_2 = $request->p066_c_2;
		$education->p066_c_3 = $request->p066_c_3;
		$education->p066_c_4 = $request->p066_c_4;
		$education->p066_c_5 = $request->p066_c_5;
		$education->p066_c_6 = $request->p066_c_6;
		$education->p066_c_7 = $request->p066_c_7;
		$education->p066_d_1 = $request->p066_d_1;
		$education->p066_d_2 = $request->p066_d_2;
		$education->p066_d_3 = $request->p066_d_3;
		$education->p066_d_4 = $request->p066_d_4;
		$education->p066_d_5 = $request->p066_d_5;
		$education->p066_d_6 = $request->p066_d_6;
		$education->p066_d_7 = $request->p066_d_7;

	    $update = $education->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertSocial(Request $request) {
		$social = new Social;
		
		if (DB::table('socials')->where('general_id', $request->general_id)->exists()) {
			$social = Social::where('general_id', $request->general_id)->first();
		} /*else {
			$social->id = $request->id;
		}*/

		$social->general_id = $request->general_id;
		$social->p067_1 = $request->p067_1;
		$social->p067_2 = $request->p067_2;
		$social->p068_1 = $request->p068_1;
		$social->p068_2 = $request->p068_2;
		$social->p069 = $request->p069;
		$social->p069_1 = $request->p069_1;
		$social->p070 = $request->p070;
		$social->p070_1 = $request->p070_1;

	    $update = $social->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertExpectative(Request $request) {
		$expectative = new Expectative;
		
		if (DB::table('expectatives')->where('general_id', $request->general_id)->exists()) {
			$expectative = Expectative::where('general_id', $request->general_id)->first();
		} /*else {
			$expectative->id = $request->id;
		}*/

		$expectative->general_id = $request->general_id;
		$expectative->p071 = $request->p071;
		$expectative->p071_3_esp = $request->p071_3_esp;
		$expectative->p072 = $request->p072;
		$expectative->p072_3_esp = $request->p072_3_esp;
		$expectative->p073 = $request->p073;
		$expectative->p073_3_esp = $request->p073_3_esp;
		$expectative->p074 = $request->p074;
		$expectative->p075 = $request->p075;
		$expectative->p076_1 = $request->p076_1;
		$expectative->p076_2 = $request->p076_2;
		$expectative->p076_3 = $request->p076_3;
		$expectative->p076_4 = $request->p076_4;
		$expectative->p076_5 = $request->p076_5;
		$expectative->p076_5_esp = $request->p076_5_esp;
		$expectative->p077 = $request->p077;
		$expectative->p078 = $request->p078;
		$expectative->p079 = $request->p079;
		$expectative->p079_esp = $request->p079_esp;
		$expectative->p080 = $request->p080;
		$expectative->p081 = $request->p081;
		$expectative->p082 = $request->p082;
		$expectative->p082_esp = $request->p082_esp;

	    $update = $expectative->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertExternal(Request $request) {
		$external = new External;
		
		if (DB::table('externals')->where('general_id', $request->general_id)->exists()) {
			$external = External::where('general_id', $request->general_id)->first();
		} /*else {
			$external->id = $request->id;
		}*/

		$external->general_id = $request->general_id;
		$external->p083_1 = $request->p083_1;
		$external->p083_2 = $request->p083_2;
		$external->p083_3 = $request->p083_3;
		$external->p083_4 = $request->p083_4;
		$external->p083_5 = $request->p083_5;
		$external->p083_6 = $request->p083_6;
		$external->p083_7 = $request->p083_7;
		$external->p084 = $request->p084;
		$external->p085 = $request->p085;
		$external->p085_5_esp = $request->p085_5_esp;
		$external->p085_a = $request->p085_a;

	    $update = $external->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertGenre(Request $request) {
		$genre = new Genre;
		
		if (DB::table('genres')->where('general_id', $request->general_id)->exists()) {
			$genre = Genre::where('general_id', $request->general_id)->first();
		} /*else {
			$genre->id = $request->id;
		}*/

		$genre->general_id = $request->general_id;
		$genre->p086_1 = $request->p086_1;
		$genre->p086_1_esp = $request->p086_1_esp;
		$genre->p086_2 = $request->p086_2;
		$genre->p086_2_esp = $request->p086_2_esp;
		$genre->p086_3 = $request->p086_3;
		$genre->p086_3_esp = $request->p086_3_esp;
		$genre->p087 = $request->p087;
		$genre->p088 = $request->p088;

	    $update = $genre->save();

	    if ($update) {
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
	public function insertSelfEsteem(Request $request) {
		$esteem = new SelfEsteem;
		
		if (DB::table('self_esteems')->where('general_id', $request->general_id)->exists()) {
			$esteem = SelfEsteem::where('general_id', $request->general_id)->first();
		} /*else {
			$esteem->id = $request->id;
		}*/

		$esteem->general_id = $request->general_id;
		$esteem->p089_1 = $request->p089_1;
		$esteem->p089_2 = $request->p089_2;
		$esteem->p089_3 = $request->p089_3;
		$esteem->p089_4 = $request->p089_4;
		$esteem->p089_5 = $request->p089_5;
		$esteem->p089_6 = $request->p089_6;
		$esteem->p089_7 = $request->p089_7;
		$esteem->p089_8 = $request->p089_8;
		$esteem->p089_9 = $request->p089_9;
		$esteem->p089_10 = $request->p089_10;
		$esteem->p089_11 = $request->p089_11;
		$esteem->p089_12 = $request->p089_12;
		$esteem->p089_13 = $request->p089_13;
		$esteem->p089_14 = $request->p089_14;
		$esteem->p089_15 = $request->p089_15;
		$esteem->p089_16 = $request->p089_16;
		$esteem->p089_17 = $request->p089_17;
		$esteem->p089_18 = $request->p089_18;
		$esteem->p089_19 = $request->p089_19;
		$esteem->p089_20 = $request->p089_20;
		$esteem->p089_21 = $request->p089_21;
		$esteem->p089_22 = $request->p089_22;
		$esteem->p089_23 = $request->p089_23;
		$esteem->p089_24 = $request->p089_24;
		$esteem->p089_25 = $request->p089_25;

	    $update = $esteem->save();

	    if ($update) {
			
			$general = General::find($request->general_id);
			$general->status = 1;
			$general->save();
			
	    	return array(
	    		'success' => true, 
    		);
	    } else {
	    	return array(
	    		'success' => false,
	    		'message' => 'No se pudo actualizar la información, inténtalo más tarde' 
    		);
	    }
	}
	
}