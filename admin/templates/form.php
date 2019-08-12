<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add User</h1>
    <p class="mb-4">User Management</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
        </div>
        <div class="card-body">
            <form>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>

                <div class="form-group">
                    <label for="avatar">Avatar:</label>
                    <input type="file" id="avatar">
                    <img src="<?php echo "file_path_here"; ?>" alt="file_path_here">
                </div>

                <div class="form-group">
                    <label for="sel1">Select list:</label>
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="comment">User Description:</label>
                    <textarea class="form-control" rows="5" id="user-description"></textarea>
                </div>


                <div class="form-group">
                    <a href="vendor/filemanager/dialog.php?type=0&field_id=fieldID&popup=1"
                       id="file_manager_fancy_box"
                       data-fancybox="gallery"
                       class="btn btn-primary iframe-btn"
                       type="button">
                        Open Filemanager
                    </a>
                </div>

                <script>
                    $('.iframe-btn').fancybox({
                        'width'		: 100,
                        'height'	: 100,
                        'maxWidth': 0,
                        'minHeight': 0,
                        'type'		: 'iframe',
                        'fitToView' : false,
                        'autoScale'    	: false,
                        'autoSize': false,
                        'autoDimensions': false
                    });

                    function close_window() {
                        parent.$.fancybox.close();
                    }
                </script>

                <div class="form-group">
                    <label for="comment">Editor with CKEditor:</label>
                    <textarea name="editor_ck_id_here"></textarea>
                    <script>
                        CKEDITOR.replace('editor_ck_id_here');
                    </script>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

