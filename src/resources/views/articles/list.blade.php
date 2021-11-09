@extends('components.app-layout')
@extends('components.form-layout')
@section('content')
<section id="content">
@each('articles.item_partial',$items,'item')
</section>
@endsection

