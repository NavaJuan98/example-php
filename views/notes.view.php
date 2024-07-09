 <?php require "views/partials/metadata.php"; ?>

 <body class="h-full">
     <div class="min-h-full">
         <?php require "views/partials/nav.php"; ?>
         <?php require "views/partials/header.php"; ?>

         <main>
             <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-gray-700 text-xl">Your Notes</h1>
                <br>

                <ul class="my-4">
                    <?php foreach($notes as $note): ?>
                        <li class="text-blue-800 underline list-disc">
                            <a href="/note?id=<?= $note["id"] ?>">
                                <?= $note["description"] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="/notes/create" class="underline text-blue-900">Create New Note</a>

             </div>
         </main>
     </div>
 </body>

 <?php require "views/partials/footer.php";
