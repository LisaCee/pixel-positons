@props(['employers'])

<x-layout>
    <p>Hi, Lisa</p>
    @foreach($employers as $employer)
        <p>{{$employer->name}}</p>
    @endforeach
</x-layout>
