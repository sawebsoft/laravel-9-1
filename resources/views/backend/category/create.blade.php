<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Stacked form</h2>
  <form method="post" action="{{ route('Category.store') }}">
    @CSRF
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3">
      <label for="details">Details:</label>
      <input type="text" class="form-control" id="details" placeholder="Enter details" name="details">
    </div>
    
    <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
  </form>
</div>


</body>
</html>
