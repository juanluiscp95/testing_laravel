<form action="/store-post" method="post">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="title">
    <textarea name="body"></textarea>
    <button>Save Post</button>

</form><?php /**PATH C:\laragon\www\laravel6\testing_laravel\resources\views/create-post.blade.php ENDPATH**/ ?>