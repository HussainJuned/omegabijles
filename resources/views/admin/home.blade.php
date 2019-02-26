@extends('admin.layout.master') 

@section('mainContent')


<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 class="text-white">{{ $totalTutors }}</h3>

                    <p class="text-white">Totaal Tutors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 class="text-white">53<sup style="font-size: 20px"></sup></h3>

                    <p class="text-white">Totaal Klanten</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 class="text-white">{{ $totaltutorlast7days }}</h3>

                    <p class="text-white">Nieuwe Tutors(deze week)</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 class="text-white">65</h3>

                    <p class="text-white">Nieuwe Klanten(deze week)</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row">
    <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tutors</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table id="datatable" class="table table-bordered table-striped dataTable">
                                <thead>
                                    <tr role="row">
                                        <th>Number Application</th>
                                        <th>Status</th>
                                        <th>Voornaam(s)</th>
                                        <th>Achternaam</th>
                                        <th>Leerling/Student</th>
                                        <th>School</th>
                                        <th>Eindexamen</th>
                                        <th>Huidige studie</th>
                                        <th>Geslacht</th>
                                        <th>Geboortedatum</th>
                                        <th>E-mailadres</th>
                                        <th>Telefoonnummer</th>
                                        <th>Straat</th>
                                        <th>Huisnummer</th>
                                        <th>Postcode</th>
                                        <th>Woonplaats</th>
                                        <th>Vakken</th>
                                        <th>Ervaring?</th>
                                        <th>ADHD?</th>
                                        <th>Autisme?</th>
                                        <th>Hoogbegaafdheid?</th>
                                        <th>ADD/PDD-NOS?</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tutorinfo as $data)  
                                    <tr role="row">
                                        <td>{{ $data->user_id }}</td>
                                        <td><a href="{{ url('/admin/changestatus') }}/{{ $data->user_id }}" class="btn {{ $data->useractive == 0?'btn-success':'btn-danger' }}">{{ $data->useractive == 0?'Accepteren':'Houden' }}</a></td>
                                        <td><a target="_blank" href="{{ url('/admin/tutorprofile/') }}/{{ $data->user_id }}">{{ $data->firstname }}</a></td>
                                        <td>{{ $data->lastname }}</td>
                                        <td>{{ $data->tutor_type == 1?'Leerling':'Student' }}</td>
                                        <td>{{ $data->schoolname }}</td>
                                        <td>{{ $data->graduation_year }}</td>
                                        <td>{{ $data->current_class_for_student != null? $data->current_class_for_student:$data->current_study_for_former_student }}</td>
                                        <td>{{ $data->sex }}</td>
                                        <td>{{ date_format(date_create($data->birthdate),"d/m/Y")  }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->street }}</td>
                                        <td>{{ $data->house }}</td>
                                        <td>{{ $data->postalcode }}</td>
                                        <td>{{ $data->residence }}</td>
                                        <td>{{ $data->coursename }}</td>
                                        <td>{{ $data->experiencewithtutoring }}</td>
                                        <td>{{ $data->experiencewithadhd }}</td>
                                        <td>{{ $data->experiencewithautisme }}</td>
                                        <td>{{ $data->experiencewithgiftedness }}</td>
                                        <td>{{ $data->experiencewithaddpdd }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
</section>
@endsection

@section('script')
<script src= "{{ URL::to('public/adminn/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src= "{{ URL::to('public/adminn/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
  
  $(function () {
    $('#datatable').DataTable()
  })
</script>
@endsection