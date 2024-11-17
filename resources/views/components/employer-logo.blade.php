@props(['employer', 'width'=> 90])

<img src="{{ ! preg_match('/^https?:\/\//', $employer->logo)  ? asset('storage/' . $employer->logo) : 'https://picsum.photos/seed/' . rand(0, 1000) . '/' . $width }}" alt="" class="rounded-xl" width="{{$width}}">
