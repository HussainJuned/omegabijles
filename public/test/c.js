var count=0;

var tabs = ['.step_categories', '.step_about', '.step_dates', '.step_times']
var navs = ['.eventwhat', '.eventwhen', '.eventwhere', '.eventwho']
var activeid = 0
jQuery(document).ready(function($) {

	$('#next_step').click(function(event) {
		$('#next_step').removeClass('button-normals')
		activeid++
		for(var i =0; i < tabs.length; i++) {
			if(activeid == 4) {
				$('#regSubmit').click()
				return false;
			}
			if(activeid == 0) {
				$('.second-d-none').removeClass('second-d-block');
				$('.col-abc').removeClass('col-abc1');
			}else{
				$('.second-d-none').addClass('second-d-block');
				$('.col-abc').addClass('col-abc1');
			}
			if (i == activeid) {
				$(tabs[i]).show()
				$(tabs[i]).addClass('active')
			}else{
				$(tabs[i]).hide()
			}

			if(activeid == 3) {
				$('#next_step').html('Verstuur')
				$('#next_step').css({"background-image":"linear-gradient(45deg,#fa5153,#fc624d 45%,#ff7868)"})
			} else {
				$('#next_step').html('Volgende')
				$('#next_step').css({"background-image":"linear-gradient(to right, #0171fe , #3456e0)"})
			}
		}

		for(var i =1; i <= activeid; i++) {
			$(navs[i]).addClass('active')
		}
		// if (count==1) {

		// 	$('.eventwhen').addClass('active');

		// 	$('.step_about').addClass('active');

		// 	$('.second-d-none').addClass('second-d-block');

		// 	$('.col-abc').addClass('col-abc1');

		// 	$('.step_categories').removeClass('active');
		// }

		// if (count==2) {

		// 	$('.eventwhere').addClass('active');

		// 	$('.step_dates').addClass('active');

		// 	$('.step_categories').removeClass('active');

		// 	$('.step_about').removeClass('active');

		// 	$('.step_times').removeClass('active');

		// }



		// if (count==3) {

		// 	$('.eventwho').addClass('active');



		// 	$('.step_times').addClass('active');



		// 	$('.step_categories').removeClass('active');



		// 	$('.step_about').removeClass('active');

		// 	$('.step_dates').removeClass('active');



		// 	$('#next_step').addClass('button-normals')

		// }



	});



	$('#previous_step').click(function(event) {
		$(navs[activeid]).removeClass('active')
		activeid--

		for(var i =0; i < tabs.length; i++) {
			if(activeid == 0) {
				$('.second-d-none').removeClass('second-d-block');
				$('.col-abc').removeClass('col-abc1');
			}else{
				$('.second-d-none').addClass('second-d-block');
				$('.col-abc').addClass('col-abc1');
			}
			if (i == activeid) {
				$(tabs[i]).show()
				$(tabs[i]).addClass('active')
			}else{
				$(tabs[i]).hide()
			}
			if(activeid == 3) {
				$('#next_step').html('Verstuur')
				$('#next_step').css({"background-image":"linear-gradient(45deg,#fa5153,#fc624d 45%,#ff7868)"})
			} else {
				$('#next_step').html('Volgende')
				$('#next_step').css({"background-image":"linear-gradient(to right, #0171fe , #3456e0)"})
			}
		}
// 		if (count>0) {count--;}


// console.log('rr',count)
// 		$('#next_step').removeClass('button-normals')

		

// 		if (count==2) {



// 			$('.eventwhere').addClass('active');



// 			$('.step_dates').addClass('active');



// 			$('.step_categories').removeClass('active');



// 			$('.step_locations').removeClass('active');

// 			$('.eventwho').removeClass('active');

			

// 		}



// 		if (count==1) {



// 			$('.eventwhen').addClass('active');

// 			$('.step_about').addClass('active');

			

// 			$('.col-abc').addClass('col-abc1');

			



// 			$('.step_dates').removeClass('active');

// 			$('.eventwhere').removeClass('active');



// 			$('.previous_step').addClass('second-d-none');



// 		}



// 		if (count==0) {

// 			$('.second-d-none').removeClass('second-d-block');

// 			$('.step_categories').addClass('active')

// 			$('.step_categories').addClass('active')



// 			$('.step_about').removeClass('active');

// 			$('.eventwhen').removeClass('active');



// 			$('.previous_step').addClass('second-d-none');

// 			$('.col-abc').removeClass('col-abc1');

// 		}



// 	});

// 	$('#right_label').click(function(event) {



// 		$('#info1').removeClass('d-block');

// 		$('#info1').addClass('d-none');	

		

		

// 		$('#info2').removeClass('d-none');

// 		$('#info2').addClass('d-block');



	});



	$('#left_label').click(function(event) {



		$('#info2').removeClass('d-block');

		$('#info2').addClass('d-none');



		$('#info1').addClass('d-block');

		$('#info1').removeClass('d-none');

	});

	// $("#q1s").click()

	$("#q1s").click(function(event) {
		event.preventDefault()
		document.getElementById('q1s').style.border= '3px solid #0d67fc'
		document.getElementById('q2s').style.border= '0px solid #0d67fc'
		$("#question1").removeClass('display_n')

		$("#question1").addClass('display_b')



		$("#question2").removeClass('display_b')

		$("#question2").addClass('display_n')

		$('#tutorType').val(1)

	});



	$("#q2s").click(function(event) {
		event.preventDefault()
		document.getElementById('q1s').style.border= '0px solid #0d67fc'
		document.getElementById('q2s').style.border= '3px solid #0d67fc'
		$("#question2").removeClass('display_n')

		$("#question2").addClass('display_b')



		$("#question1").removeClass('display_b')

		$("#question1").addClass('display_n')
		$('#tutorType').val(2)

	});



	// $('.closes').click(function(event) {

	// 	$(this).parents('.panel').css({

	// 		display: 'none',

	// 	});



	// 	$(this).parent('.accordion').removeClass('btnactive');





	// });



	// $('.accordion').click(function(event) {

	// 	$(this).toggleClass('btnactive');

	// });

});





// var acc = document.getElementsByClassName("accordion");



// var i;



// for (i = 0; i < acc.length; i++) {

//     acc[i].addEventListener("click", function() {

//         this.classList.toggle("active");

       

//         var panel = this.nextElementSibling;

//         if (panel.style.display === "block") {

//             panel.style.display = "none";

//         } else {

//             panel.style.display = "block";

//         }

//     });

// }


	function activeNav(value) { 
            	activeid = value - 1;
            	for(var i =0; i < tabs.length; i++) {
					if(activeid == 0) {
						$('.second-d-none').removeClass('second-d-block');
						$('.col-abc').removeClass('col-abc1');
					}else{
						$('.second-d-none').addClass('second-d-block');
						$('.col-abc').addClass('col-abc1');
					}
					if (i == activeid) {
						$(tabs[i]).show()
						$(tabs[i]).addClass('active')
					}else{
						$(tabs[i]).hide()
					}

					if(activeid == 3) {
						$('#next_step').html('Verstuur')
						$('#next_step').css({"background-image":"linear-gradient(45deg,#fa5153,#fc624d 45%,#ff7868)"})

					} else {
						$('#next_step').html('Volgende')
						$('#next_step').css({"background-image":"linear-gradient(to right, #0171fe , #3456e0)"})
					}
				}

				for(var i =1; i <= activeid; i++) {
					$(navs[i]).addClass('active')
				} 
				for(var i = 4; i > activeid; i--) {
					$(navs[i]).removeClass('active')
				}
    }

    var subjects = []
    function chooseSubject(input, value) {

    		var checkValueExist = subjects.includes(value)
    		if(checkValueExist){
				subjects.remove(value)
				$(input).removeClass('btnactive');
				 if(value.includes('&')) {
					 value = value.replace('&','')
				 }	
				 if(value.includes(' ')) {
					value = value.replace(' ','')
				}
				if(value.includes('(') && value.includes(')','')) {
					value = value.replace('(','').replace(')','')
				}
				 $('#s'+ value).html('') 
				 $('#s'+ value).hide() 
				 countCourse (value, 1, 'remove', null)  
			}else{
				$(input).addClass('btnactive');
				subjects.push(value)
				let classhtml = ``
				for(var i =1; i < 7; i++) {
					classhtml += `<li>
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" onclick="countCourse('${value}', 1, 'add', event)" name="course[${value}][]" value="${i}"> Klas ${i}
                              </label>
                            </li>`
				}
				
				var subhtml = `<div class="panel">
                          <p class="py-5">Ik wil graag bijles geven in:</p>
                          <ul>
                            <li>${value}</li>
                            <li>voor</li>
                            ${classhtml}
                            <li class="closes" style="cursor:pointer;color:red;font-weight:bold" onclick="removeSubject('${value}')"><span style="color:red">Verwijderen</span></li>
                          </ul>
						</div>`
				if(value.includes('&')) {
					value = value.replace('&','')
				}
				if(value.includes(' ')) {
					value = value.replace(' ','')
				}		
				if(value.includes('(') && value.includes(')','')) {
					value = value.replace('(','').replace(')','')
				}
                $('#s'+ value).html(subhtml)        
                $('#s'+ value).show()        
			}
    		
    }

    function removeSubject(value) {
		subjects.remove(value)
		if(value.includes('&')) {
			value = value.replace('&','')
		}
		if(value.includes(' ')) {
			value = value.replace(' ','')
		}
		if(value.includes('(') && value.includes(')','')) {
			value = value.replace('(','').replace(')','')
		}
		countCourse (value, 1, 'remove', null)
		$('#b' + value).removeClass('btnactive');
		$('#s'+ value).html('') 
		$('#s'+ value).hide()
	}

	function countCourse (subject, value, type, event) {
		var totalcheckfound = 0
		var found = null
		if (checkbycourse) {
		   found = checkbycourse.find(p => p.subject == subject)
		}
		
		if (found) {
		   totalcheckfound = found.classes
		} else {
		   totalcheckfound = 0
		}
		if (type == 'remove') {
			
			totalchecked = totalchecked - totalcheckfound
			
		} else if(type == 'add') {
			if(!found) {
				checkbycourse.push({subject: subject, classes: 1})
				totalchecked += 1
			}else {
				if (event.target.checked) {
					found.classes = totalcheckfound + 1
					totalchecked += 1
				} else {
					found.classes = totalcheckfound - 1
					totalchecked -= 1
				}
			}
		}else if(type == 'edit') {
			console.log(totalchecked)
			console.log(value)
			checkbycourse.push({subject: subject, classes: parseInt(value)})
			totalchecked += parseInt(value)
		}
		if (totalchecked > 0) {
	        document.getElementById('eventwhen').innerHTML = 'Vakken <i style="font-size: 25px; margin-left: 10px;" class="fa fa-check-circle"></i>'
	      } else {
	        document.getElementById('eventwhen').innerHTML = 'Vakken <span style="font-size: 25px; margin-left: 10px;color:red">!</span>'
	      }
	}
		
    Array.prototype.remove = function() {
		    var what, a = arguments, L = a.length, ax;
		    while (L && this.length) {
		        what = a[--L];
		        while ((ax = this.indexOf(what)) !== -1) {
		            this.splice(ax, 1);
		        }
		    }
		    return this;
		};

    				