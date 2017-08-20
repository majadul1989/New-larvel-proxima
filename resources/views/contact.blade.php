@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Information</div>
                <div class="panel-body">
                    <div> <a onclick="edit()" data-toggle="modal" data-target="#favoritesModal" href="#" class="btn btn-success">+ Add New</a></div>
                    <table class="table">
                    	<tr>
                    		<th>Name</th>
                    		<th>Phone</th>
                    		<th>Email</th>
                    		<th>Operations</th>
                    	</tr>
                    	<tr>
                    		<td>majadul</td>
                    		<td>01918305499</td>
                    		<td>majadul1989@gmail.com</td>
                    		<td>
							<a onclick="edit()" class="btn btn-danger" data-toggle="modal" data-target="#favoritesModal" href="#">Edit</a>
                    		</td>
                    	</tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BOOTSTRAP MODEL -->
               <div class="modal fade" id="favoritesModal" 
                    tabindex="-1" role="dialog" 
                    aria-labelledby="favoritesModalLabel">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" 
                         data-dismiss="modal" 
                         aria-label="Close">
                         <span aria-hidden="true">&times;</span></button>
                       <h2 class="modal-title" 
                       id="favoritesModalLabel" class="branch_info"></h2>
                     </div>
                     <div class="modal-body">
                   <!--  -->
                      <form id="branch_id" class="form-horizontal" action="{{url('/update/')}}" id="contact_form" role="form" method="POST">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <fieldset>
                      <!-- Success message -->

                     


                      <!-- Text input-->
                      <div class="form-group {{ $errors->has('branch_email') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Branch E-Mail</label>  
                          <div class="col-md-7 inputGroupContainer">
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                  <input id="branch_email" name="branch_email" placeholder="E-Mail Address" class="form-control" value="{{ old('branch_email') }}" type="text" autofocus required>
                              </div>
                              @if ($errors->has('branch_email')) <!-- show error --> 
                                  <span class="help-block red">
                                      <strong>{{ $errors->first('branch_email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      
                      <hr>
                      <!-- Button -->
                      <div class="form-group">
                        <label class="col-md-6 control-label"></label>
                        <div class="col-md-6">
                          <button type="submit" class="btn btn-primary col-md-4" >Send <span class="glyphicon glyphicon-send"></span></button>
                          <label class="col-md-1 control-label"></label>
                          <button type="reset" class="btn btn-danger col-md-4" >Cancel  <span class="glyphicon glyphicon-remove"></span></button>
                        </div>
                        </div>
                      </fieldset>
                       </form>

                     </div> <!-- modal-body -->

                     </div>
                   </div>
                 </div>

              <!-- BOOTSTRAP MODEL -->


@endsection