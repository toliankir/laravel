<p>
    {{ Form::text("title", $post->title ?? '', [
                    "class" => "form-group user-email",
                    "placeholder" => "Username"])}}
</p>
<p>
    {{ Form::submit('Submit Form')}}
</p>
