@extends('layouts.master')
<!DOCTYPE html>
<html>
<head>
  <title>About</title>

  @section('scripts')
  @endsection

  @section('styles')
  @endsection

</head>
<body>
  <div id="section_1">
    <h3>CSS Examples</h3>
    <ul>
      <li>List Item 1
        <div>
          Inner DIV element within an unordered list
        </div>
      </li>
      <li>List Item 2
        <span>
          Inner SPAN element - should be displayed next to li 2
        </span>
      </li>
    </ul>
    <ol>
      <li>Ordered List Item 1
        <div>
          Inner DIV element within an ordered list
        </div>
      </li>
      <li>Ordered List Item 2
        <span>
          Inner SPAN element - should be displayed next to li 2 in the ordered list
        </span>
      </li>
    </ol>
  </div>
  <div id="section_2">
    <button class="btn btn-success">Success!</button>
  </div>
  <span id="section_3" class="container">
      <div class="row">
        <input type="text" class="col-md-2" placeholder="Value 1"></input>
        <input type="text" class="col-md-2" placeholder="Value 2"></input>
        <input type="text" class="col-md-2" placeholder="Value 3"></input>
        <input type="text" class="col-md-2" placeholder="Value 4"></input>
        <div class="btn btn-success col-md-2">Add</div>
        <div class="btn btn-danger col-md-2">Clear</div>
      </div>
  </span>
</body>
</html>
