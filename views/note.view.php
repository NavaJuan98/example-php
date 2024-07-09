 <?php require "views/partials/metadata.php"; ?>

 <body class="h-full">
     <div class="min-h-full">
         <?php require "views/partials/nav.php"; ?>
         <?php require "views/partials/header.php"; ?>

         <main>
             <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-gray-700 text-xl">Note</h1>
                <br>

                <ul class="my-4">
                    <li class="text-slate-800 list-disc">
                            <?= $note["description"] ?>
                    </li>
                </ul>
                <a href="/notes" class="underline text-sky-800">Go Back Notes</a>
             </div>
         </main>
     </div>
 </body>

 <?php require "views/partials/footer.php";
