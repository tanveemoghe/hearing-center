@extends('layouts.app')

@section('content')
<div class="row" role="main">
    <h3></h3>
    <div class="col-lg-12">
        <div class="card">

            <div class="card-header">
                <i class="fa fa-align-justify"></i>
                View All Locations <small>List</small>
            </div>
            @if($flash = session('msg')) 
            <div class="alert alert-success text-center alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ $flash }}
            </div>
            @endif

            <div class="card-body">
                <table id="view_clinic_main" class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Location ID</th>
                            <th>Clinic Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clinics as $clinic)
                            <tr clinic-id="{{ $clinic->id }}">
                                <td></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $clinic->location }}</td>
                                <td><a href="{{ '/clinic/'.$clinic->id.'/edit' }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> 
                                    <button clinic-id="{{ $clinic->id }}" class="btn btn-danger delete-clinic"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> 
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


@section('javascript')
@if (count($clinics) > 0)
<script type="text/javascript">
$(document).ready(function(){
   $(document).on('click','.delete-clinic',function(){
      var clinicId = $(this).attr('clinic-id');
      
      var r = confirm('Are you sure, you want to delete '+$('tr[clinic-id="'+clinicId+'"] td:nth-child(2)').html()+' ? It will delete its all clinic locations.');
       if(r !== true) {
           return false;
       }
      
      $.ajax({
          url: '/clinic/'+clinicId,
          data: { "_token": "{{ csrf_token() }}", '_method': 'DELETE' },
          type: 'POST',
          success: function(data) {
              if(data.success == 1) {
                  $('tr[clinic-id="'+clinicId+'"]').remove();
              }
          }
      }) 
   });
});
</script>
@endif
@endsection