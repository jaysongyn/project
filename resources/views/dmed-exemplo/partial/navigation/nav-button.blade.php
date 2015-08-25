<ul class="nav navbar-nav">

    <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
    <li class="dropdown dropdown-big">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-success"><i class="fa fa-cloud-upload"></i></span> Upload to Cloud</a>
        <!-- Dropdown -->
        <ul class="dropdown-menu">
            <li>
                <div class="widget">
                    <div class="widget-head">
                        <div class="pull-left">Quick Post</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                            <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <div class="padd">
                            <div class="form quick-post">
                                <!-- Edit profile form (not working)-->
                                <form class="form-horizontal">
                                    <!-- Title -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="title">Title</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="title">
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="content">Content</label>

                                        <div class="col-lg-8">
                                            <textarea class="form-control" rows="5" id="content"></textarea>
                                        </div>
                                    </div>
                                    <!-- Cateogry -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">Category</label>

                                        <div class="col-lg-5">
                                            <select class="form-control">
                                                <option value="">- Choose Cateogry -</option>
                                                <option value="1">General</option>
                                                <option value="2">News</option>
                                                <option value="3">Media</option>
                                                <option value="4">Funny</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Tags -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="tags">Tags</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="tags">
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="form-group">
                                        <!-- Buttons -->
                                        <div class="col-lg-offset-2 col-lg-6">
                                            <button type="submit" class="btn btn-sm btn-success">Publish
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-danger">Save Draft
                                            </button>
                                            <button type="reset" class="btn btn-sm btn-default">Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                        <div class="widget-foot">
                            <!-- Footer goes here -->
                        </div>
                    </div>
                </div>

            </li>
        </ul>
    </li>

    <!-- Sync to server link -->
    <li class="dropdown dropdown-big">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-danger"><i class="fa fa-refresh"></i></span> Sync with Server</a>
        <!-- Dropdown -->
        <ul class="dropdown-menu">
            <li>
                <!-- Using "icon-spin" class to rotate icon. -->
                <p><span class="label label-info"><i class="fa fa-cloud"></i></span> Syncing Members Lists to Server</p>
                <hr />
                <p><span class="label label-warning"><i class="fa fa-cloud"></i></span> Syncing Bookmarks Lists to Cloud</p>

                <hr />

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                    <a href="#">View All</a>
                </div>

            </li>
        </ul>
    </li>

</ul>