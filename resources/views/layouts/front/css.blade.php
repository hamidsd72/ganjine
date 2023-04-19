@if (isset($sliders))
    <style>
        @foreach ($sliders as $slider)
            @if ($slider->photo)
                @if( $slider->url_color && $slider->url_background )
                    .btn-style-nine-costum{{$slider->id}} {
                        color: {{$slider->url_color}} !important;
                        background: {{$slider->url_background}} !important;
                    }
                @endif
                @if( $slider->url_hover_color && $slider->url_hover_background )
                    .btn-style-nine-costum{{$slider->id}}:hover {
                        color: {{$slider->url_hover_color}} !important;
                        background: {{$slider->url_hover_background}} !important;
                    }
                @endif
            @endif
        @endforeach
    </style>
@endif