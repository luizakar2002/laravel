@extends('layouts.app')

@section('content')
<h1><?php foreach($data as $value){
    echo $value['name'] . '<br>';
}
 ?></h1>
@endsection