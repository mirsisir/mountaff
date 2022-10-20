
<div class="form-group">
    <div class="col-md-10">
        <label for="name">Name</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($customerQuerys)->name) }}" minlength="1" maxlength="255" data=""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="subject">Subject</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('subject') ? 'is-invalid' : '' }}" name="subject" type="text" id="subject" value="{{ old('subject', optional($customerQuerys)->subject) }}" minlength="1" maxlength="255" data=""  placeholder="Enter subject here...">

            {!! $errors->first('subject', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="email">Email</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" type="email" id="email" value="{{ old('email', optional($customerQuerys)->email) }}" data=""  placeholder="Enter email here...">

            {!! $errors->first('email', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="message">Message</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" type="number" id="message" value="{{ old('message', optional($customerQuerys)->message) }}" data=""  placeholder="Enter message here...">

            {!! $errors->first('message', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="is_read">Is Read</label>


            <div class="checkbox">
            <label for="is_read_1">
            	<input id="is_read_1" class="" name="is_read" type="checkbox" value="1" {{ old('is_read', optional($customerQuerys)->is_read) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

            {!! $errors->first('is_read', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

