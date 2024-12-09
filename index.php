<?php include 'validate.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>Comment Validator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form method="POST">
        <div class="row justify-content-center">
            <div class="col-6 mt-4">
                <h5><?php echo $output; ?></h5>
                <div class="form-group mb-2">            
                    <textarea name="comment" rows="5" cols="50" placeholder="Enter your comment" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>