 <?php require "views/partials/metadata.php"; ?>

 <body class="h-full">
     <div class="min-h-full">
         <?php require "views/partials/nav.php"; ?>
         <?php require "views/partials/header.php"; ?>

         <main>
             <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-gray-700 text-xl">Create New Note</h1>
                <br>

                <form action="" method="POST">
                    <label for="description">Description</label>
                    <div>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <p>
                        <button class="block" type="submit">Create</button>
                    </p>

                </form>
             </div>
         </main>
     </div>
 </body>

 <?php require "views/partials/footer.php";
