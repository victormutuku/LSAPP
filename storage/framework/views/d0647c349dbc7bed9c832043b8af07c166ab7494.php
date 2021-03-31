<?php $__env->startSection('content'); ?>
<h1>Edit Post</h1>
<?php echo Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']); ?>

    <div class = "form-group">
        <?php echo Form::label('title', 'Title'); ?>


        <?php echo Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']); ?>

    </div>
    <div class = "form-group">
        <?php echo Form::label('body', 'Body'); ?>


        <?php echo Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text']); ?>

    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create( document.querySelector('#article-ckeditor'));

    </script>
    <div class="form-group">
        <?php echo Form::file('cover_image'); ?>

    </div>
    <?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>


<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lsapp2\resources\views/posts/edit.blade.php ENDPATH**/ ?>