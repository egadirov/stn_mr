<?php include('./parts/header.php'); ?>
    <section class=" btn-gradient">
       <div class="col-sm-4 d-flex justify-content-center align-items-center mx-auto" id="content">
           <div class="w-100">
               <form class="px-4 py-3 ">
                   <div class="form-group input-group-lg">
                       <label for="exampleDropdownFormEmail1" class="text-white">Email address</label>
                       <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" required>
                   </div>
                   <div class="form-group input-group-lg">
                       <label for="exampleDropdownFormPassword1" class="text-white">Password</label>
                       <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
                   </div>
                   <button type="submit" class="btn btn-lg mt-3 w-100" style="background-color: #233876">
                       <span class="text-white">Sign in</span>
                   </button>
               </form>
               <a class="px-4" href="../index.php">New around here? Sign up</a>
           </div>
       </div>
    </section>
<?php include('./parts/footer.php'); ?>