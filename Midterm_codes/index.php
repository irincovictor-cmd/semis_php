<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Calculator</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>

<body>
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white p-6 rounded shadow-md">
            <form method="POST" action="login.php">
                <h1 class="text-center text-2xl font-bold mb-4">School Management System</h1>

                <div class="mb-4">
                    <input type="text" name="username" class="border border-gray-300 py-2 px-2 w-full rounded" placeholder="Enter username" autofocus required>
                </div>

                <div class="mb-4">
                    <input type="password" name="password" class="border border-gray-300 py-2 px-2 w-full rounded" placeholder="Enter password" required>
                </div>


                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">LOGIN</button>
                <br>



            </form>
            <button data-dialog-target="modal" class="w-full rounded-md bg-blue-500 mt-5 font-bold py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                SIGN UP
            </button>
            <div data-dialog-backdrop="modal" data-dialog-backdrop-close="true" class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                <div data-dialog="modal" class="relative m-4 p-4 w-96 rounded-lg bg-white shadow-sm">
                    <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
                        Create New Account
                    </div>
                    <div class="relative border-t border-slate-200 py-4 leading-normal text-slate-600 font-light">
                        <form method="POST" action="create_account.php">
                            <div class="mb-4">
                                <input type="text" name="new_account_username_input" class="border border-gray-300 py-2 px-2 w-full rounded" placeholder="Enter username" autofocus required>
                            </div>

                            <div class="mb-4">
                                <input type="password" name="new_account_passsword_input" class="border border-gray-300 py-2 px-2 w-full rounded" placeholder="Enter password" required>
                            </div>

                            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">CREATE ACCOUNT</button>
                            <br>
                        </form>
                    </div>
                    <div class="flex shrink-0 flex-wrap items-center pt-4 justify-end">
                        <button data-dialog-close="true" class="rounded-md border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                            Cancel
                        </button>
                    <?php if (isset($_GET['error'])): ?>
    <p class="text-red-500 text-sm mb-4">
        <?php 
            if($_GET['error'] == "wrongpassword") echo "Incorrect password!";
            if($_GET['error'] == "nouser") echo "Username not found!";
            if($_GET['error'] == "emptyfields") echo "Please fill in all fields!";
        ?>
    </p>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


        <br>
    </div>
    <script>
        const openBtn = document.querySelector('[data-dialog-target="modal"]');
        const closeBtns = document.querySelectorAll('[data-dialog-close="true"]');
        const backdrop = document.querySelector('[data-dialog-backdrop="modal"]');

        openBtn.addEventListener('click', () => {
            backdrop.classList.remove('pointer-events-none', 'opacity-0');
            backdrop.classList.add('opacity-100');
        });

        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                backdrop.classList.add('pointer-events-none', 'opacity-0');
                backdrop.classList.remove('opacity-100');
            });
        });
        
    </script>
</body>

</html>