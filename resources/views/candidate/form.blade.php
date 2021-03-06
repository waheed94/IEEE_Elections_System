<!-- IEEE membership ID -->
<div class="form-group">
    <label class="control-label col-sm-2" for="ieee_membership_id">IEEE membership ID*</label>
    <div class="col-sm-10">
        {!! Form::text('ieee_membership_id', null, ['class' => 'form-control', 'placeholder'=>'Enter your IEEE membership number']) !!}
    </div>
</div>

<!-- GUC ID -->
<div class="form-group">
    <label class="control-label col-sm-2" for="guc_id">GUC ID*</label>
    <div class="col-sm-10">
        {!! Form::text('guc_id', null, ['class' => 'form-control', 'placeholder'=>'Enter your GUC ID']) !!}
    </div>
</div>

<!-- first name -->
<div class="form-group">
    <label class="control-label col-sm-2" for="first_name">First Name*</label>
    <div class="col-sm-10">
        {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'Enter first name']) !!}
    </div>
</div>

<!-- last name -->
<div class="form-group">
    <label class="control-label col-sm-2" for="last_name">Last Name*</label>
    <div class="col-sm-10">
        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'Enter last name']) !!}
    </div>
</div>

<!-- gender -->
<div class="form-group">
    <label class="control-label col-sm-2" for="gender">Gender*</label>
    <div class="col-sm-10">

        {!! Form::select('gender', array('Male' => 'Male', 'Female' => 'Female'),null,['class' => 'form-control']) !!}
    </div>
</div>

<!-- major -->
<div class="form-group">
    <label class="control-label col-sm-2" for="major">Major*</label>
    <div class="col-sm-10">
        {!! Form::text('major', null, ['class' => 'form-control', 'placeholder'=>'Enter major']) !!}
    </div>
</div>

<!-- guc email -->
<div class="form-group">
    <label class="control-label col-sm-2" for="guc_email">GUC Email*</label>
    <div class="col-sm-10">
        {!! Form::text('guc_email', null, ['class' => 'form-control', 'placeholder'=>'Enter your GUC E-mail']) !!}
    </div>
</div>

<!-- moblie number -->
<div class="form-group">
    <label class="control-label col-sm-2" for="mobile_number">Moblie number*</label>
    <div class="col-sm-10">
        {!! Form::number('mobile_number', null, ['class' => 'form-control', 'placeholder'=>'Enter your number']) !!}
    </div>
</div>

<!-- position -->
<div class="form-group">
    <label class="control-label col-sm-2" for="position">Position*</label>
    <div class="col-sm-10">

        {!! Form::select('position', array('President' => 'President', 'Vice President' => 'Vice President' ,'Treassurer' => 'Treassurer','Secretary'=>'Secretary'),null,['class' => 'form-control']) !!}

    </div>
</div>


<!-- image url -->
<div class="form-group">
    <label class="control-label col-sm-2" for="image_url">Image URL</label>
    <div class="col-sm-10">
        {!! Form::text('image_url', null, ['class' => 'form-control', 'placeholder'=>'Enter image URL (optional you can add it later)']) !!}
    </div>
</div>

<!-- plan url -->
<div class="form-group">
    <label class="control-label col-sm-2" for="plan_url">Plan URL</label>
    <div class="col-sm-10">
        {!! Form::text('plan_url', null, ['class' => 'form-control', 'placeholder'=>'Enter plan URL (optional you can add it later)']) !!}
    </div>
</div>

<!-- video url -->
<div class="form-group">
    <label class="control-label col-sm-2" for="video_url">Video URL</label>
    <div class="col-sm-10">
        {!! Form::text('video_url', null, ['class' => 'form-control', 'placeholder'=>'Enter video URL (optional you can add it later)']) !!}
    </div>
</div>
