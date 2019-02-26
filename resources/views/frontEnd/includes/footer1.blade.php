 <footer class="mt-5">
    <div class="container">
      <div class="row my-4">
        <div class="col-md-12 my-2">
          <h3 class="my-3"><a href="{{url('/')}}">Omegabijles</a></h3>
        </div>
      </div>
      <div class="row">
          <div class="col-md-3 col-sm-4 ">
              <ul>
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('hoehetwerkt')}}">Hoe het werkt</a></li>
                  <li><a href="{{url('overons')}}">Over ons</a></li>
                  <li><a href="{{url('wordbijlesgever')}}">Word bijlesgever</a></li>
                  <li><a href="{{url('contact')}}">Contact</a></li>
              </ul>
          </div>
          <div class="col-md-3 col-sm-4 col-12">
              <ul class="footer_ul">
                  <li><a href="{{ url('algemenevoorwaarden') }}">Algemene voorwaarden</a></li>
                  <li><a href="#" onclick="setSubject('Natuurkunde')">Bijles Natuurkunde</a></li>
                  <li><a href="#" onclick="setSubject('Latijn')">Bijles Latijn</a></li>
                  <li><a href="#" onclick="setSubject('Scheikunde')">Bijles Scheikunde</a></li>
                  <li><a href="#" onclick="setSubject('Engels')">Bijles Engels</a></li>
              </ul>
          </div>
          <div class="col-md-3 col-sm-4 col-12">
              <ul class="footer_ul">
                  <li><a href="#" onclick="setSubject('Geschiedenis')">Bijles Geschiedenis</a></li>
                  <li><a href="#" onclick="setSubject('Scheikunde')">Bijles Scheikunde</a></li>
                  <li><a href="#" onclick="setSubject('IJmuiden')">Bijles IJmuiden</a></li>
                  <li><a href="#" onclick="setSubject('Amsterdam')">Bijles Amsterdam</a></li>
                  <li><a href="#" onclick="setSubject('Biologie')">Bijles Biologie</a></li>
              </ul>
          </div>
          <div class="col-md-3 col-sm-4 col-12">
              <ul class="footer_ul">
                  <li>Wij zijn beoordeeld</li>
                  <li>met een 8,6
                  op basis</li>
                  <li>van 7 reviews</li>
                  <li class="mt-4">Bekijk hire alle reviews</li>
              </ul>
          </div>
      </div>
      <div class="row my-1 mt-4">
         <div class="col-md-12">
           <p class="line-footer"></p>
         </div>
      </div>
      <div class="row  mt-3 mag__loft">
          <div class="col-md-9">
              <p class="my-3"><a href="#" class="m-2">&copy; Omegabijles 2018</a> | <a href="{{ url('algemenevoorwaarden') }}" class="m-2">Algemene voorwaarden</a> | <a class="m-2" href="{{ url('privacyencookies') }}">Privacy- en-cookiesstatement</a></p>
          </div>
          <div class="col-md-3">
              <h6 class="mt-3">Optimaal vooruit.</h6>
          </div>
      </div>
    </div>
  </footer>
<script type="text/javascript">
    function setSubject(value) {
        sessionStorage.setItem('footersubject', value)
        window.location = '{{ url('/') }}'
    }
</script>