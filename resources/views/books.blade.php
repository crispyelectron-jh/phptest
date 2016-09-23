<!DOCTYPE html>
@extends('layouts.master')

<html>
<head>
  <title>Books Display Page</title>
  @section('scripts')
  @endsection

  @section('styles')
  @endsection
</head>
<body>
  @if({{ isset($books) }})
    @foreach($books as $book)
      <div id="book_container">
        <ul>
          <li><strong>Title: </strong>{{ $book->title }}</li>
          <li><strong>Author: </strong>{{ $book->author_first }} {{ $book->author_last }}</li>
          <li><strong>Publish Date: </strong>{{ $book->publish_date }}</li>
          <li><strong>ISBN #: </strong>{{ $book->isbn }}</li>
          <li><strong>Library of Congress Classification: </strong>{{ $book->lc_num }}</li>
        </ul>
      </div>
    @endforeach
  @else
    <div id="book_container">
      <strong>NO BOOKS FOUND.</strong>
    </div>
  @endif
</body>
</html>
