<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <title>{{config('app.name')}}</title>
    @include('partials.head')
</head>
<body
    class="bg-slate-900 leading-relaxed text-slate-400 antialiased selection:bg-sky-700 selection:text-sky-300 pointer-events-none">
{{$slot}}
</body>
</html>
