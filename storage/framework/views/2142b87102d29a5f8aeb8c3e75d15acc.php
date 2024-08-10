<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Encuestas Online</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background-color: #343a40;
            margin-bottom: 20px;
        }
        .navbar a {
            color: #000 !important;
            font-weight: 700;
            font-size: 1.1rem;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }
        .btn-primary {
            background-color: #007bff; 
            border-color: #007bff; 
            color: #000; 
        }
        .btn-primary:hover {
            background-color: #0056b3; 
            border-color: #004085; 
            color: #000; 
        }
        h1 {
            color: #343a40;
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn {
            padding: 10px 20px;
            font-size: 1rem;
        }
        .navbar .nav-link {
            color: #000 !important;
            font-weight: bold;
        }
        .btn-primary.btn-lg {
            background-color: #007bff; 
            border-color: #007bff; 
            color: #000; 
            font-size: 1.2rem;
            padding: 15px 30px;
        }
        .list-group-item {
            font-size: 1.2rem;
        }
        .list-group-item .btn {
            font-size: 0.9rem;
        }
     
        .footer {
            background-color: #007bff; 
            color: #fff; 
            padding: 20px;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Sistemas de Encuestas Online
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                    <ul class="navbar-nav mr-auto"></ul>

                  
                    <ul class="navbar-nav ml-auto">
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>

 
    <footer class="footer">
        <p>&copy; 2024 Sistemas de Encuestas Online. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sistema-online\resources\views/layouts/app.blade.php ENDPATH**/ ?>