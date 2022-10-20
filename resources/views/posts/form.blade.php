<div class="form-group">
    <div class="col-md-10">
        <label for="author">Author</label>


        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('author') ? 'is-invalid' : '' }}" name="author" type="text"
               id="author" value="{{ old('author', optional($post)->author) }}" minlength="1" data=""
               placeholder="Enter author here...">

        {!! $errors->first('author', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">

        <label for="title">Title</label>


        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" type="text" id="title"
               value="{{ old('title', optional($post)->title) }}" minlength="1" maxlength="255" data=""
               placeholder="Enter title here...">

        {!! $errors->first('title', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="slug">Slug</label>


        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('slug') ? 'is-invalid' : '' }}" name="slug" type="text" id="slug"
               value="{{ old('slug', optional($post)->slug) }}" minlength="1" data="" placeholder="Enter slug here...">

        {!! $errors->first('slug', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="body">Body</label>


        <span class="text-danger font-bolder">*</span>
        <input style="min-height: 500px;" class="form-control  {{ $errors->has('body') ? 'is-invalid' : '' }}"
               name="body" type="text" id="body"
               value="{{ old('body', optional($post)->body) }}" minlength="1" data="" placeholder="Enter body here...">


        {!! $errors->first('body', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="is_published">Is Published</label>


        <div class="checkbox">
            <label for="is_published_1">
                <input id="is_published_1" class="" name="is_published" type="checkbox"
                       value="1" {{ old('is_published', optional($post)->is_published) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('is_published', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="category_id">Category</label>


        <select class="form-control" id="category_id" name="category_id">
            <option value="" style="display: none;"
                    {{ old('category_id', optional($post)->category_id ?: '') == '' ? 'selected' : '' }} disabled
                    selected>Select category
            </option>
            @foreach ($categories as $key => $category)
                <option value="{{ $key }}" {{ old('category_id', optional($post)->category_id) == $key ? 'selected' : '' }}>
                    {{ $category }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('category_id', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>


<script>
    CKEDITOR.config.filebrowserUploadMethod = 'form'
    CKEDITOR.config.height = '550px';

    CKEDITOR.replace('body', {
        // filebrowserBrowseUrl: '/browser/browse.php?type=Files',
        filebrowserUploadMethod: 'form',
        filebrowserUploadUrl: "{{route('editor.upload', ['_token' => csrf_token() ])}}"
    });

    {{--CKEDITOR.dom.p.setHtml("{!! optional($post)->body !!}")--}}
    CKEDITOR.instances.body.setData( '{!! optional($post)->body !!}', {
        callback: function() {
            this.checkDirty(); // true
        }
    } );

    $('.form-horizontal').submit(function () {
        var desc = CKEDITOR.instances.body.getData();
        // alert("intercept" + desc)

        $("#body").val(desc)
        // return false
    });


</script>
