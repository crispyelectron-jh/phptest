<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@yield('scripts')

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
  li {
    padding: 5px;
    font-weight: bold;
    vertical-align: text-top;
  }
  li > * {
    font-weight: normal;
  }
  ul div {
    width: 90px;
    height: 120px;
    /*font-weight: normal;*/
  }
  ul span {
    width: 40px;
    height: 40px;
    /*font-weight: normal;*/
  }
  /*All span element text should be green*/
  span {
    color: green;
  }
  /* All div element text should be blue*/
  div {
    color: blue;
  }
</style>
@yield('styles')
