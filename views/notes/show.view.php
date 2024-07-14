<?php require base_path("views/partials/metadata.php") ?>

 <body class="h-full">
     <div class="min-h-full">
         <?php require base_path("views/partials/nav.php") ?>
         <?php require base_path("views/partials/header.php") ?>

         <main>
             <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-gray-700 text-xl">Note</h1>
                <br>

                <ul class="my-4">
                    <li class="text-slate-800 list-disc">
                            <?= htmlspecialchars($note["description"]) ?>
                    </li>
                </ul>
                <form method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" value="<?= $note['id'] ?>" name="id">
                    <button class="text-m mb-3 text-red-500 ">Delete</button>
                </form>
                <a href="/notes" class="underline text-sky-800">Go Back Notes</a>
             </div>
         </main>
     </div>
 </body>

<?php require base_path("views/partials/footer.php") ?>
