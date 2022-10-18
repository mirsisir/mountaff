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


        @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" type="text" id="body"
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
    CKEDITOR.replace('body',{
        filebrowserBrowseUrl: '/browser/browse.php?type=Files',
        filebrowserUploadUrl: '/editor/upload'
    });

</script>
