<?php include 'header.php' ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-4">
                    <div class="card">
                        <div class="card-header text-center">Login</div>
                       <p class="text-danger text-center"> <?php echo isset($message)? $message : ' '; ?></p>
                        <div class="card-body">
                            <form action="action.php"method="post">
                                <div class="form-group row">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email"class="form-control"name="email"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password"class="form-control"name="password"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit"class="btn btn-outline-success" name="login_btn" value="Login"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php' ?>

