<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Support\Facades\DB;
use App\TutorTime;
class TutorInfo extends Model
{
    protected $table = 'tutorinfo';

    public static function tutorInformation(){
    	return TutorInfo::where(['user_id' => Auth::user()->id])->first();
    }

    public function avgRating()
    {
	    $avg_rating = 0;
	    $total = 0;
	    $ratings = TutorReview::where('user_id', $this->user_id)->latest()->get();
	    foreach ($ratings as $rating) {
		    $total += $rating->r_rating;
	    }
	    if(count( $ratings) > 0) {
		    $avg_rating = $total/count( $ratings);
	    }

	    $avg_rating = intval( $avg_rating);

	    return $avg_rating;
    }

    public function searchFilter($data){
    	$postcodes = Session('postlist');
    	$checkData = $this->filterData($data);
    	$tutorinfo = [];
    	if($data['price'] != null && $data['tutortype'] != null && $data['price'] != $data['tutortype']){
    		$tutorinfo = [];
    		return $tutorinfo;  
    	} else {
            if($data['subjects'] != null || $data['classes'] != null){
                $ids = $this->getUserFromCourseClasses($data);
            }
    		 
    		if($data['sat'] != null && $data['sun'] != null && $data['mon'] != null && $data['tue'] != null && $data['wed'] != null && $data['thus'] != null && $data['fri'] != null){
    			$ids = $this->getUserFromTutorTime($data, $ids);
    		}
	    	$query = DB::table('tutorinfo')->select('tutorinfo.*','tutorexperience.*','coursesnames.coursename','tutortotime.*', 'tutoravgrating.avgrating')
	                  ->join('tutorexperience','tutorexperience.user_id','=','tutorinfo.user_id')
	                  ->join('coursesnames','coursesnames.user_id','=','tutorinfo.user_id')
	                  ->join('tutortotime','tutortotime.user_id','=','tutorinfo.user_id')
	                  ->leftjoin('tutoravgrating','tutoravgrating.user_id','=','tutorinfo.user_id');

	                  if($data['tutortype'] != null){
	                  	$query->where(['tutorinfo.tutor_type' => $data['tutortype']]);
	                  }
	                  if($data['price'] != null){
	                  	$query->where(['tutorinfo.tutor_type' => $data['price']]);
	                  }
	                  if($data['sortitem'] != null){
	                  	if($data['sortitem'] == 'name'){
	                  		$query->orderBy('tutorinfo.firstname', 'ASC');
	                  	}elseif($data['sortitem'] == 'priceasc'){
	                  		$query->orderBy('tutorinfo.tutor_type', 'ASC');
	                  	}elseif($data['sortitem'] == 'pricedesc'){
	                  		$query->orderBy('tutorinfo.tutor_type', 'DESC');
	                  	}elseif($data['sortitem'] == 'bestrate'){
		                  $query->orderBy('tutoravgrating.avgrating','ASC');
		                }elseif($data['sortitem'] == 'experience'){
                          $query->orderBy('tutorinfo.experience', 'ASC');
                        }else{
		                  	$query->orderBy('tutorinfo.id','DESC');
		                  }
	                  }else{
	                  	$query->orderBy('tutorinfo.id','DESC');
	                  }

                      if($data['experience'] = null){
                        $query->where(['experience' => $experience]);
                      }
	                  if($data['searchtext'] != null){
                        $text = explode(' ', $data['searchtext']);
                        $query->where(function($query) use ($text){
                        for ($i = 0; $i < count($text); $i++){
                                $query->orWhere('tutorinfo.firstname','like', '%'.$text[$i].'%')
                                ->orWhere('tutorinfo.lastname', 'like','%'. $text[$i].'%');
                            } 
                        });
	                  }
                      if($data['subjects'] != null || $data['classes'] != null){
                         $query->whereIn('tutorinfo.user_id', $ids);
                      }
	                  
	                  $query->whereIn('tutorinfo.postalcode',$postcodes);
	                   $tutorinfo = $query->paginate(2);  
	        return $tutorinfo;        
    	}
    }

    public function filterData($request){
    	if(request()->exists('subjects')){
             $subjects = $request->subjects;
        }else{
            $subjects = null;
        }

        if(request()->exists('classes')){
             $classes = $request->classes;
        }else{
            $classes = null;
        }

        if(request()->exists('tutortype')){
             $tutortype = $request->tutortype;
        }else{
            $tutortype = null;
        }

        if(request()->exists('price')){
             $price = $request->price;
        }else{
            $price = null;
        }

        if(request()->exists('sortitem')){
             $sortitem = $request->sortitem;
        }else{
            $sortitem = null;
        }
        if(request()->exists('searchtext')){
             $searchtext = $request->searchtext;
        }else{
            $searchtext = null;
        }
        if(request()->exists('sat')){
             $sat = $request->sat;
        }else{
            $sat = null;
        }
        if(request()->exists('sun')){
             $sun = $request->sun;
        }else{
            $sun = null;
        }
        if(request()->exists('mon')){
             $mon = $request->mon;
        }else{
            $mon = null;
        }
        if(request()->exists('tue')){
             $tue = $request->tue;
        }else{
            $tue = null;
        }
        if(request()->exists('wed')){
             $wed = $request->wed;
        }else{
            $wed = null;
        }
        if(request()->exists('thus')){
             $thus = $request->thus;
        }else{
            $thus = null;
        }
        if(request()->exists('fri')){
             $fri = $request->fri;
        }else{
            $fri = null;
        }
        if(request()->exists('experience')){
             $experience = $request->experience;
        }else{
            $experience = null;
        }
        return[
            'subjects' => $subjects,
            'classes' => $classes,
            'tutortype' => $tutortype,
            'price' => $price,
            'sortitem' => $sortitem,
            'searchtext' => $searchtext,
            'sat' => $sat,
            'sun' => $sun,
            'mon' => $mon,
            'tue' => $tue,
            'wed' => $wed,
            'thus' => $thus,
            'fri' => $fri,
            'experience' => $experience
        ];

    }

    public function getUserFromCourseClasses($data){
    	$ids = [];
    	if($data['subjects'] != null && $data['classes'] != null){
    		for($i = 0; $i < count($data['subjects']); $i++){
    			$tutorcourse = TutorCourse::where('coursename', 'like', $data['subjects'][$i] . '%')->where('classes', 'like', '%'. $data['classes'].'%')->get();
    			if($tutorcourse){
    				foreach($tutorcourse as $val){
    					array_push($ids, $val->user_id);
    				}
    			}
    		}
    	} elseif($data['subjects'] != null && $data['classes'] == null) {
    		for($i = 0; $i < count($data['subjects']); $i++){
    			$tutorcourse = TutorCourse::where('coursename', 'like', $data['subjects'][$i] . '%')->get();
    			if($tutorcourse){
    				foreach($tutorcourse as $val){
    					array_push($ids, $val->user_id);
    				}
    			}
    		}
    	} else if($data['subjects'] == null && $data['classes'] != null){
    		$tutorcourse = TutorCourse::where('classes', 'like', '%'. $data['classes'].'%')->get();
    			if($tutorcourse){
    				foreach($tutorcourse as $val){
    					array_push($ids, $val->user_id);
    				}
    			}
    	}

    	return $ids;

    }

    public function getUserFromTutorTime($data, $ids){
    	$id=[];
    	$query = TutorTime::orderBy('id', 'DESC');

    	if($data['sat'] != null) {
    		$sat = implode(",", $data['sat']);
    		$query->where('sat', 'like', $sat.'%');
    	}

    	if($data['sun'] != null) {
    		$sun = implode(",", $data['sun']);
    		$query->where('sun', 'like', $sun.'%');
    	}

    	if($data['mon'] != null) {
    		$mon = implode(",", $data['mon']);
    		$query->where('mon', 'like', $mon.'%');
    	}

    	if($data['tue'] != null) {
    		$tue = implode(",", $data['tue']);
    		$query->where('tue', 'like', $tue.'%');
    	}
    	if($data['wed'] != null) {
    		$wed = implode(",", $data['wed']);
    		$query->where('wed', 'like', $wed.'%');
    	}
    	if($data['thus'] != null) {
    		$thus = implode(",", $data['thus']);
    		$query->where('thus', 'like', $mon.'%');
    	}

    	if($data['fri'] != null) {
    		$fri = implode(",", $data['fri']);
    		$query->where('fri', 'like', $fri.'%');
    	}

    	if(count($ids) > 0) {
    		$query->whereIn('user_id', $ids);
    	}

    	$data = $query->get();
    	foreach ($data as $value) {
    		array_push($id, $value->user_id);
    	}
    	return $id;
    }
}
