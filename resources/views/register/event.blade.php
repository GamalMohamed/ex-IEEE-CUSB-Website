@extends('layouts.master')
@section('content')
    <div class="row" id="registeration">

    </div>
    <div class="container">
        <div class="row">
            <form class="form-horizontal" id="eventForm" method="post">
                {{ csrf_field() }}
                <fieldset>

                    <!-- Form Name -->
                    <legend>Register An Event</legend>

                    <!-- Text input name-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Name</label>
                        <div class="col-md-5">
                            <input id="name" name="name" type="text" placeholder="Event Name" class="form-control
                            input-md" required="">

                        </div>
                    </div>

                    <!-- dateTime input date-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Date</label>
                        <div class="col-md-5">
                            <input id="date" name="date" type="datetime-local" placeholder="Event Date" class="form-control
                            input-md" required="">

                        </div>
                    </div>

                    <!-- Text input place-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="place">Place</label>
                        <div class="col-md-5">
                            <input id="place" name="place" type="text" placeholder="Event Place" class="form-control
                            input-md" required="">

                        </div>
                    </div>


                    <!-- Textarea  description-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="description">Description</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="description" name="description">EventDescription</textarea>
                        </div>
                    </div>

                    <!-- Text input tag-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tag">Tag</label>
                        <div class="col-md-5">
                            <input id="tag" name="tag" type="text" placeholder="Event Tag"class="form-control
                            input-md" required="">

                        </div>
                    </div>

                    <!-- Prepended checkbox  isFeatured-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="isFeatured">Featured</label>
                        <div class="col-md-1">
                            <div class="input-group">
                                <span class="input-group-addon">
                                  <input type="checkbox" id="isFeatured" name="isFeatured">
                                </span>
                            </div>


                        </div>
                    </div>

                    <!-- Text input sponsors-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="sponsors">Sponsors</label>
                        <div class="col-md-5">
                            <input id="name" name="sponsors" type="text" placeholder="Event Sponsors"
                                   class="form-control
                            input-md" required="">

                        </div>
                    </div>


                    <!-- Text input host-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="host">Host</label>
                        <div class="col-md-5">
                            <input id="host" name="host" type="text" placeholder="Event Host"class="form-control
                            input-md" required="">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
    <script src="{{URL::to('js/jquery.min.js')  }}"></script>
    <script>
       $( document).ready(function(){
        function eventForm() {
            // set up form submission handling
            $('#eventForm').submit(submitEventForm);
        }
        function submitEventForm() {

            data = $('#eventForm').serialize();
            console.log(data);
            $.post('{{Route('events.store')}}', data).success(function (succData) {
                console.log(succData);
            }).error(function(data){
                console.log(data.responseText);
                var errors = data.responseJSON;


                errorsHtml='';
                $.each(errors,function(key,value){

                    errorsHtml += '<div class="alert alert-danger"><ul>'+
                            '<div class="container-fluid">'+
                            ' <div class="alert-icon"> '+
                            '<i class="material-icons">error_outline</i>'+
                            '</div>'+
                            '<button type="button" class="close" ' +
                            'data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">' +
                            '<i class="material-icons">clear</i>' +
                            '</span></button>'+
                            '<b>'+key +':'+
                            '</b>'+
                            value+
                            '</div></div>'

                });
                $('#registeration').empty();
                $('#registeration').append(errorsHtml);

            });
            return false;
        }
        eventForm();

        });
    </script>