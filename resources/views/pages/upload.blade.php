<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>

    </head> 
    <body> 
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ul class="list-group">
                    <div class="about-section"> 
                        <div class="text-content">
                            <div class="span7 offset1">
                                @if(Session::has('success'))
                                <div class="alert-box success">
                                    <h2>{!! Session::get('success') !!}</h2>
                                </div>
                                @endif
                                <div class="secure">Upload form</div>
                                {!! Form::open(array('url'=>'apply/upload','method'=>'POST', 'files'=>true)) !!}
                                <div class="control-group">
                                    <div class="controls">
                                        {!! Form::file('image') !!}
                                        <!-- TODO errors-->
                                        @if(Session::has('error'))
                                        <p class="errors">{!! Session::get('error') !!}</p>
                                        @endif
                                    </div>
                                </div>
                                <div id="success"> </div>
                                {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
    </body>
</html>
