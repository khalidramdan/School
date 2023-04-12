<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
    </head>
    <body>
        <form action="/posts" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" value="{{(isset($post))? $post->post_body: ''}}" name="post_body">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="form-label">body</label>
                        <input type="text" class="form-control" value="{{(isset($post))? $post->body : ''}}" name="body">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-light">Cencel</button>
                </div>
    </body>
</html>
