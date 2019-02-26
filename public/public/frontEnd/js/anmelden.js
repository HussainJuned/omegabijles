
if(tutortype == 1) {
  if (school && classname) {
    document.getElementById('eventwhat').innerHTML = 'Start <i style="font-size: 20px; margin-left: 10px;" class="fa fa-check-circle"></i>'

  } else {
    document.getElementById('eventwhat').innerHTML = 'Start'
  }
} else {
  if (school && currentstudy && graduationyear) {
    document.getElementById('eventwhat').innerHTML = 'Start <i style="font-size: 20px; margin-left: 10px;" class="fa fa-check-circle"></i>';
    
  } else {
    document.getElementById('eventwhat').innerHTML = 'Start'
  }
}
function checkStart (event) {
  tutortype = document.getElementById('tutorType').value
  if (event == 1 || event == 2 ) {
    var inputname = ''
    var inputvalue = ''
  } else {
    var inputname = event.target.name
    var inputvalue = event.target.value
  }

  if (inputname == 'schoolname_for_s' || inputname == 'schoolname_for_fs') {
    school = inputvalue
  }
  if (inputname == 'class') {
    classname = inputvalue
  }

  if (inputname == 'currentstudy_for_fs') {
    currentstudy = inputvalue
  }
  if (inputname == 'graduationyear') {
    graduationyear = inputvalue
  }
  if(tutortype == 1) {
    if (school && classname) {
      document.getElementById('eventwhat').innerHTML = 'Start <i style="font-size: 20px; margin-left: 10px;" class="fa fa-check-circle"></i>';
      document.getElementById("next_step").classList.remove('dnone');
      document.getElementById('next_step').classList.add('dblock');
    } else {
      document.getElementById('eventwhat').innerHTML = 'Start <span style="font-size: 20px; margin-left: 10px;color:red">!</span>'
    }
  } else {
    if (school && currentstudy && graduationyear) {
      document.getElementById('eventwhat').innerHTML = 'Start <i style="font-size: 20px; margin-left: 10px;" class="fa fa-check-circle"></i>';
      document.getElementById("next_step").classList.remove('dnone');
      document.getElementById('next_step').classList.add('dblock');
    } else {
      document.getElementById('eventwhat').innerHTML = 'Start <span style="font-size: 20px; margin-left: 10px;color:red">!</span>'
    }
  }
}


function checkPersonInfo(event) {
  var inputname = event.target.name
  var inputvalue = event.target.value
  if (inputname == 'firstname') {
    firstname = inputvalue
  }
  if (inputname == 'lastname') {
    lastname = inputvalue
  }
  if (inputname == 'email') {
    email = inputvalue
  }
  if (inputname == 'street') {
    street = inputvalue
  }
  if (inputname == 'telephone') {
    telephone = inputvalue
  }
  if (inputname == 'houseno') {
    houseno = inputvalue
  }
  if (inputname == 'tutorpostcode') {
    tutorpostcode = inputvalue
  }
  if (inputname == 'residence') {
    residence = inputvalue
  }
  if (inputname == 'birthdate') {
    birthdate = inputvalue
  }
  if (inputname == 'gender') {
    gender = inputvalue
  }

  if (firstname && lastname && email && street && telephone && houseno && tutorpostcode && residence && birthdate && gender) {
    document.getElementById('eventwhere').innerHTML = 'Persoonlijke info <i style="font-size: 25px; margin-left: 10px;" class="fa fa-check-circle"></i>';
    document.getElementById("next_step").classList.remove('dnone');
    document.getElementById('next_step').classList.add('dblock');

  } else {
    document.getElementById('eventwhere').innerHTML = 'Persoonlijke info <span style="font-size: 20px; margin-left: 10px;color:red">!</span>'
  }
}

function checkProfile(event) {
  var inputname = event.target.name
  var inputvalue = event.target.value
  if(inputname == 'password') {
    password = inputvalue
  }
  if(inputname == 'password_confirmation') {
    confirmpassword = inputvalue
  }

  if(inputname == 'briefintroduction') {
    briefintroduction = inputvalue
  }

  if(inputname == 'helpthestudent') {
    helpthestudent = inputvalue
  }
  if(inputname == 'abitmore') {
    abitmore = inputvalue
  }
  if(inputname == 'experiencewithtutoring') {
    experiencewithtutoring = inputvalue
  }
  if(inputname == 'experiencewithgiftedness') {
    experiencewithgiftedness = inputvalue
  }
  if(inputname == 'experiencewithaddpdd') {
    experiencewithaddpdd = inputvalue
  }
  if(inputname == 'experiencewithadhd') {
    experiencewithadhd = inputvalue
  }
  if(inputname == 'experiencewithautisme') {
    experiencewithautisme = inputvalue
  }
  if(inputname == 'image') {
    image = inputvalue
  }

  if (inputname == 'confirmcheck') {
    confirmcheck = inputvalue
  }
  console.log(inputname)
  console.log(inputvalue)
  if (inputname.includes('week')) {
    if (event.target.checked) {
      week += 1
    }else {
      week -= 1
    }
  }

  if (password && confirmpassword && (password == confirmpassword) && briefintroduction
      && abitmore && helpthestudent && experiencewithautisme && experiencewithtutoring && experiencewithadhd
      && experiencewithaddpdd && experiencewithgiftedness && (image || oldimage) && confirmcheck && week > 0) {
    document.getElementById('eventwho').innerHTML = 'Jouw profiel <i style="font-size: 25px; margin-left: 10px;" class="fa fa-check-circle"></i>'
    document.getElementById("next_step").classList.remove('dnone');
    document.getElementById('next_step').classList.add('dblock');
  } else {
    document.getElementById('eventwho').innerHTML = 'Jouw profiel <span style="font-size: 20px; margin-left: 10px;color:red">!</span>'
  }
}