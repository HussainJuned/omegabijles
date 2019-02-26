@extends('tutor.layout.master') 





@section('mainContent')

<link rel="stylesheet" href="{{ asset('public/adminn/style.css') }}">

 <div class="row">

    <div class="col-sm-2"></div>

    <form action="{{ url('/tutor/updateMijnvakken') }}" method="POST">

        {{ csrf_field() }}

    <div style="background-color: white;margin-bottom: 80px !important;" class="col-sm-8 profiel6">



        <div  class="fixed_container vakken6 ">

                        @if ($errors->has('course'))

                        <span style="color:red"> {{ $errors->first('course') }}</span>

                     @endif



                     <div class="text-right pull-right vakken9"><button style="border:0px;background-color: #4391F2;margin-bottom: 10px;" type="submit" class="btn btn-success profiel4">Wijzig</button></div>

                        <h2 style="margin-left: 19px;margin-bottom:30px;text-align:left; font-size: 24px;font-weight: 600;" class="fs-title profiel7">Mijn vakken

                            

                        </h2>

                        <p style="margin-bottom: 20px;font-size: 14px;" class="fs-very-small vakken8">Je kunt bijlesgeven in de vakken waar je minimaal een 7,5 gemiddeld hebt gehaald</p>

                    </div>

                    <div style="margin-left: 8px;" class="row mb-3 d-none d-sm-flex vakken3">

                        <div class="col-sm-5 text-center">

                            <label class="input_title vakken3">Mijn Vakken:</label>

                        </div>

                        <div class="col-sm-5 text-left">

                            <label class="input_title vakken3">Op welk niveau</label>

                        </div>

                        <div class="col-sm-2 bottom-right"></div>

                    </div>

                    

                    @foreach($courses as $data)

                    <div id="course_container" >

                        <div class="row course">

                            <div class="col-sm-5 text-center vakken4">

                                <h3>{{ $data['coursename'] }}</h3>

                            </div>

                            <div class="col-sm-7">

                                <div class="row">

                                    <?php for($i=1; $i < 7; $i++){ ?>

                                    <div style="margin-top: 14px;" class="col-sm-7 text-md-left mb-3 text-lg-left vakken2">

                                        <div class="form-check">

                                            <label class="form-check-label">

                                                <input class="form-check-input" type="checkbox" name="course[{{ $data['coursename'] }}][]" selected="selected" value="{{ $i }}"

                                                <?php for($j = 0; $j < count($data['classes']); $j++){ ?>

                                                    @if($data['classes'][$j] == $i)

                                                    checked

                                                    @endif

                                                 <?php } ?>    

                                                > Klas {{ $i }}

                                               

                                            </label>

                                        </div>

                                    </div>

                                    <?php } ?>

                                    <div class="col-sm-5 bottom-right mb-3" onclick="this.parentElement.parentNode.parentNode.remove();">Verwijder vak <img src="{{ URL::to('public/frontEnd/img/icons/remove.svg') }}" alt="delete" class="small_icon"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                    @endforeach

                   

                    <div class="row course">

                            <div class="col-sm-5 text-center vakken4">

                               <div class="col-sm-12 text-center" data-toggle="modal" data-target="#exampleModalCenter">

                                    <div id="add_a_course">Voeg een vak toe <img src="{{ URL::to('public/frontEnd/img/icons/round-add-button.svg') }}" class="small_icon"></div>

                                </div>

                            </div>

                        </div>

                <div class="text-center vakken5"><button style="border:0px;background-color: #4391F2;margin-bottom: 10px;" type="submit" class="btn btn-success">Wijzig</button></div>

        

    </div>

     </form>

    <div class="col-sm-2"></div>

</div> 







        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >

          <div class="modal-dialog" role="document">

            <div class="modal-content">

              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">Voeg een vak toe </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

              </div>

              <div class="modal-body">

                 <label class="input_title">Selecteer een vak</label>

                        <select class="form-control" id="select_course">

                            <option value="Aardrijkskunde" selected>Aardrijkskunde</option>

                            <option value="Biologie">Biologie</option>

                            <option value="Duits">Duits</option>

                            <option value="Economie">Economie</option>

                            <option value="Engels">Engels</option>

                            <option value="Filosofie">Filosofie</option>

                            <option value="Frans">Frans</option>

                            <option value="Geschiedenis">Geschiedenis</option>

                            <option value="Grieks">Grieks</option>

                            <option value="Latijn">Latijn</option>
                            <option value="M&O">M&O</option>

                            <option value="Maatschappijleer">Maatschappijleer</option>

                            <option value="Natuurkunde">Natuurkunde</option>

                            <option value="Nederlands">Nederlands</option>

                            <option value="NLT">NLT</option>

                            <option value="Scheikunde">Scheikunde</option>

                            <option value="Wiskunde (onderbouw)">Wiskunde (onderbouw)</option>

                            <option value="Wiskunde A">Wiskunde A</option>

                            <option value="Wiskunde B">Wiskunde B</option>

                            <option value="Wiskunde C">Wiskunde C</option>

                        </select>

              </div>

              <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>

                <button type="button" class="btn btn-primary pull-right" id="modal_button_add">Voeg toe</button>

              </div>

            </div><!-- /.modal-content -->

          </div><!-- /.modal-dialog -->

        </div><!-- /.modal -->

@endsection



@section('css')

    <link rel="stylesheet" href="{{ asset('public/adminn/style.css' ) }}">

@endsection



@section('js')

    <script type="text/javascript">

        var $str = $('#select_course option:selected').text();

        var $selectCourse = $('#select_course');

        $selectCourse.change(function() {

            $str = $('#select_course option:selected').text();

        });


        $('#modal_button_add').click(function() {

            // let url = 'http://localhost/omegabijles/public/frontEnd/'

            let url = window.location.hostname + '/public/frontEnd/'

            

            if ($str !== '') {

                var classlist = ''

                for(var i=1; i < 7; i++){

                    classlist += '<div style="margin-top: 14px;" class="col-sm-7 text-md-left mb-3 text-lg-left vakken2"><div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" value="'+ i +'" name="course['+ $str +'][]"> Klas '+ i +' </label></div></div>'

                }

                $appendStr = '<div class="row course"><div class="col-sm-5 text-center vakken4"><h3>' +

                    $str +

                    '</h3></div><div class="col-sm-7"><div class="row">'+ classlist +'<div class="col-sm-5 bottom-right mb-3" onclick="this.parentElement.parentNode.parentNode.remove()";>Verwijder vak <img src="https://omegabijles.nl/public/frontEnd/img/icons/remove.svg" alt="delete" class="small_icon"></div></div></div></div>';



                $('#course_container').append($appendStr);

                $('.modal').modal('toggle');

            }

        });

    </script>

@endsection



