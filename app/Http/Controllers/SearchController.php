<?php



namespace App\Http\Controllers;



use App\TutorInfo;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class SearchController extends Controller

{

    public function index() {

		$tutorinfo = DB::table('tutorinfo')->select('tutorinfo.*','tutorexperience.*','coursesnames.coursename','tutortotime.*', 'tutoravgrating.avgrating', 'users.useractive')

                  ->join('tutorexperience','tutorexperience.user_id','=','tutorinfo.user_id')

                  ->join('coursesnames','coursesnames.user_id','=','tutorinfo.user_id')

                  ->join('tutortotime','tutortotime.user_id','=','tutorinfo.user_id')

                  ->leftjoin('tutoravgrating','tutoravgrating.user_id','=','tutorinfo.user_id')
                  ->join('users', 'users.id', '=', 'tutorinfo.user_id')
                  ->where(['users.useractive' => 1])

                  ->orderBy('tutorinfo.id','DESC')

                  ->paginate(10);

		$total = count( $tutorinfo );

	    return view('frontEnd.home.search_profiles', compact( [ 'tutorinfo', 'total' ]));

    }

public function search($subject = null) {
$postcodes = [2000,2001,2002,2003,2011,2012,2013,2014,2015,2019,2021,2022,2023,2024,2025,2026,2031,2032,2033,2034,2035,2036,2037];

if ($subject == null){
$tutorinfo = DB::table('tutorinfo')->select('tutorinfo.*','tutorexperience.*','coursesnames.coursename','tutortotime.*', 'tutoravgrating.avgrating', 'users.useractive')

                  ->join('tutorexperience','tutorexperience.user_id','=','tutorinfo.user_id')

                  ->join('coursesnames','coursesnames.user_id','=','tutorinfo.user_id')

                  ->join('tutortotime','tutortotime.user_id','=','tutorinfo.user_id')

                  ->leftjoin('tutoravgrating','tutoravgrating.user_id','=','tutorinfo.user_id')
                  ->join('users', 'users.id', '=', 'tutorinfo.user_id')
                  ->where(['users.useractive' => 1])
                  ->whereIn('tutorinfo.postalcode', $postcodes)
                  ->orderBy('tutorinfo.id','DESC')

                  ->paginate(10);

}else {


$tutorinfo = DB::table('tutorinfo')->select('tutorinfo.*','tutorexperience.*','coursesnames.coursename','tutortotime.*', 'tutoravgrating.avgrating', 'users.useractive')

                  ->join('tutorexperience','tutorexperience.user_id','=','tutorinfo.user_id')

                  ->join('coursesnames','coursesnames.user_id','=','tutorinfo.user_id')

                  ->join('tutortotime','tutortotime.user_id','=','tutorinfo.user_id')

                  ->leftjoin('tutoravgrating','tutoravgrating.user_id','=','tutorinfo.user_id')
                  ->join('users', 'users.id', '=', 'tutorinfo.user_id')
                  ->where(['users.useractive' => 1])
                  ->whereIn('tutorinfo.postalcode', $postcodes)
                  ->where('coursesnames.coursename', 'LIKE', '%'.$subject.'%')
                  ->orderBy('tutorinfo.id','DESC')

                  ->paginate(10);
}
	    return view('frontEnd.home.search_profiles', compact( [ 'tutorinfo', 'subject' ]));
}


public function searchHaarlem($subject) {
      $postcodes = [2000, 2001, 2002, 2003, 2011, 2012, 2013, 2014, 2015, 2019, 2021, 2022, 2023, 2024, 2025, 2026, 2031, 2032, 2033, 2034, 2035, 2036, 2037];
    $permalink = $subject;
    if($subject == null) {
            return redirect('/search-tutor');
      }else{
            $tutorinfo = new TutorInfo();
            $finalpostcode = $tutorinfo->getPostListfromArray($postcodes);
            $searchsubject = $subject;
            if($subject == 'wiskundea'){
               $searchsubject =  'Wiskunde A';
            }elseif($subject == 'wiskundeb'){
               $searchsubject =  'Wiskunde B';
            }elseif($subject == 'wiskundec'){
               $searchsubject =  'Wiskunde C';
            }elseif($subject == 'wiskundeonderbouw'){
               $searchsubject =  'Wiskunde (onderbouw)';
            }
            $tutorinfo = DB::table('tutorinfo')->select('tutorinfo.*','tutorexperience.*','coursesnames.coursename','tutortotime.*', 'tutoravgrating.avgrating', 'users.useractive')

                  ->join('tutorexperience','tutorexperience.user_id','=','tutorinfo.user_id')

                  ->join('coursesnames','coursesnames.user_id','=','tutorinfo.user_id')

                  ->join('tutortotime','tutortotime.user_id','=','tutorinfo.user_id')

                  ->leftjoin('tutoravgrating','tutoravgrating.user_id','=','tutorinfo.user_id')
                  ->join('users', 'users.id', '=', 'tutorinfo.user_id')
                  ->where(['users.useractive' => 1])
                  ->whereIn('tutorinfo.postalcode', $finalpostcode)
                  ->where('coursesnames.coursename', 'LIKE', '%'.$searchsubject.'%')
                  ->orderBy('tutorinfo.id','DESC')

                  ->paginate(10);
                   $subject = ucfirst($subject);
                  return view('frontEnd.home.search_profiles', compact( [ 'tutorinfo', 'subject', 'permalink' ]));
      }
}


public function searchBloemendaal($subject) {
      $postcodes = [2060, 2061];
    $bloemendaalPermalink = $subject;
      if($subject == null) {
            return redirect('/search-tutor');
      }else{
            $tutorinfo = new TutorInfo();
            $finalpostcode = $tutorinfo->getPostListfromArray($postcodes);
            $searchsubject = $subject;
            if($subject == 'wiskundea'){
               $searchsubject =  'Wiskunde A';
            }elseif($subject == 'wiskundeb'){
               $searchsubject =  'Wiskunde B';
            }elseif($subject == 'wiskundec'){
               $searchsubject =  'Wiskunde C';
            }elseif($subject == 'wiskundeonderbouw'){
               $searchsubject =  'Wiskunde (onderbouw)';
            }
            $tutorinfo = DB::table('tutorinfo')->select('tutorinfo.*','tutorexperience.*','coursesnames.coursename','tutortotime.*', 'tutoravgrating.avgrating', 'users.useractive')

                  ->join('tutorexperience','tutorexperience.user_id','=','tutorinfo.user_id')

                  ->join('coursesnames','coursesnames.user_id','=','tutorinfo.user_id')

                  ->join('tutortotime','tutortotime.user_id','=','tutorinfo.user_id')

                  ->leftjoin('tutoravgrating','tutoravgrating.user_id','=','tutorinfo.user_id')
                  ->join('users', 'users.id', '=', 'tutorinfo.user_id')
                  ->where(['users.useractive' => 1])
                  ->whereIn('tutorinfo.postalcode', $finalpostcode)
                  ->where('coursesnames.coursename', 'LIKE', '%'.$searchsubject .'%')
                  ->orderBy('tutorinfo.id','DESC')

                  ->paginate(10);
                    $subject = ucfirst($subject);
                  return view('frontEnd.home.search_profiles', compact( [ 'tutorinfo', 'subject', 'bloemendaalPermalink' ]));
      }
}

public function searchVelsen($subject) {
      $postcodes = [1950,1951,1970,1971,1972,1973,1974,1975,1976,1980,1981, 1985,1990,1991,1992,2070,2071,2080,2082];
    $velsenPermalink = $subject;
      if($subject == null) {
            return redirect('/search-tutor');
      }else{
            $tutorinfo = new TutorInfo();
            $finalpostcode = $tutorinfo->getPostListfromArray($postcodes);
            $searchsubject = $subject;
            if($subject == 'wiskundea'){
               $searchsubject =  'Wiskunde A';
            }elseif($subject == 'wiskundeb'){
               $searchsubject =  'Wiskunde B';
            }elseif($subject == 'wiskundec'){
               $searchsubject =  'Wiskunde C';
            }elseif($subject == 'wiskundeonderbouw'){
               $searchsubject =  'Wiskunde (onderbouw)';
            }
            $tutorinfo = DB::table('tutorinfo')->select('tutorinfo.*','tutorexperience.*','coursesnames.coursename','tutortotime.*', 'tutoravgrating.avgrating', 'users.useractive')

                  ->join('tutorexperience','tutorexperience.user_id','=','tutorinfo.user_id')

                  ->join('coursesnames','coursesnames.user_id','=','tutorinfo.user_id')

                  ->join('tutortotime','tutortotime.user_id','=','tutorinfo.user_id')

                  ->leftjoin('tutoravgrating','tutoravgrating.user_id','=','tutorinfo.user_id')
                  ->join('users', 'users.id', '=', 'tutorinfo.user_id')
                  ->where(['users.useractive' => 1])
                  ->whereIn('tutorinfo.postalcode', $finalpostcode)
                  ->where('coursesnames.coursename', 'LIKE', '%'.$searchsubject .'%')
                  ->orderBy('tutorinfo.id','DESC')

                  ->paginate(10);
                   $subject = ucfirst($subject);
                  return view('frontEnd.home.search_profiles', compact( [ 'tutorinfo', 'subject', 'velsenPermalink' ]));
      }
}
}

