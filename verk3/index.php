<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheet.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="rating.js"></script>
    <title>Rating system</title>
</head>
<body>
<h1>Creating Five Stars Rating System</h1>

<div id = "books">
    <div class="fieldRow">
        <label>Book 123A</label>
        <ul id="book-123a" class="ratingStars">
            <li></li>
            <li  class="active"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="fieldRow">
        <label>Book 123B</label>
        <ul id="book-123b" class="ratingStars">
            <li  class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="fieldRow">
        <label>Book 123C</label>
        <ul id="book-123c" class="ratingStars">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li  class="active"></li>
        </ul>
    </div>
</div>

<div id = "movies">
    <div class="fieldRow">
        <label>Movie 123A</label>
        <ul id="movie-123a" class="ratingStars">
            <li></li>
            <li  class="active"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="fieldRow">
        <label>Movie 123B</label>
        <ul id="movie-123b" class="ratingStars">
            <li  class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="fieldRow">
        <label>Movie 123C</label>
        <ul id="movie-123c" class="ratingStars">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li  class="active"></li>
        </ul>
    </div>
</div>

<div id = "podcast">
    <div class="fieldRow">
        <label>Podcast 123A</label>
        <ul id="podcast-123a" class="ratingStars">
            <li></li>
            <li  class="active"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="fieldRow">
        <label>Podcast 123B</label>
        <ul id="podcast-123b" class="ratingStars">
            <li  class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="fieldRow">
        <label>Podcast 123C</label>
        <ul id="podcast-123c" class="ratingStars">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li  class="active"></li>
        </ul>
    </div>
</div>

<div id="placeHolder"></div>
</body>
</html>