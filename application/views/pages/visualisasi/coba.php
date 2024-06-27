<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
    <title>Upload File</title>
</head>
<body>
    <form action="C_Visual/upload" class="dropzone needsclick" id="dropzone-basic" method="POST" enctype="multipart/form-data">
        <div class="dz-message needsclick">
            Drop file Excel disini atau klik upload
        </div>
        <div class="fallback">
            <input name="myFile" type="file" accept=".csv,.xls,.xlsx"/>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn rounded-pill btn-primary">Upload</button>
        </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script>
        Dropzone.options.dropzoneBasic = {
            paramName: "myFile",
            maxFilesize: 10, // MB
            acceptedFiles: ".csv,.xls,.xlsx",
            init: function() {
                this.on("success", function(file, response) {
                    console.log("File uploaded successfully.");
                });
                this.on("error", function(file, response) {
                    console.log("File upload error: " + response);
                });
            }
        };
    </script>
</body>
</html>
