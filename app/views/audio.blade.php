<audio id="audio-{{$contestant->id}}" preload="load" loop>
    <source src="{{{url('audio/' . $contestant->audio_file . '.mp3')}}}" type="audio/mpeg"></source>
    <source src="{{{url('audio/' . $contestant->audio_file . '.ogg')}}}" type="audio/ogg"></source>
</audio>