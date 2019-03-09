<?php
include('header.php');
?>

<body>    
    <div class="container fadeIn2">
    <aside>
        <div class="box">
            <i class="fas fa-user-friends"><p style="font-family:'Open Sans',serif">Usuários</p></i>
        </div>
        <div class="box">
            <i class="far fa-comments"><p style="font-weight:900">Fórum</p></i>
        </div>        
        <div class="box">
            <i class="fas fa-newspaper"><p style="font-family:'Open Sans',serif">Notícias</p></i>
        </div>            
    </aside>
        <main>
            <div class="user-options">
            <ul class="options-list">
                <li class="option"><a><i class="fas fa-user-plus"></i>Criar Usuário</a></button></li>
                <li class="option"><a><i class="fas fa-search"></i>Pesquisar</a></button></li>
                <li class="option"><a><i class="far fa-trash-alt"></i>Deletar</a></button></li>
            </ul>         
        </div>        
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data do cadastro</th>
                    <th>Tipo</th>
                    <th>Operação</th>
                </tr> 
                <tr>
                    <td>Lucas</td>
                    <td>Dosantosbjj@gmail.com</td>
                    <td>22/02/2019 15:40</td>
                    <td>Administrador</td>
                    <td><button class="btn-user" id="edit-user"><i class="fas fa-pencil-alt"></i></button></td>
                </tr> 
                <tr>
                    <td>Lucas</td>
                    <td>Dosantosbjj@gmail.com</td>
                    <td>22/02/2019 15:40</td>
                    <td>Administrador</td>
                    <td><button class="btn-user" id="edit-user"><i class="fas fa-pencil-alt"></i></button></td>
                </tr>  
                <tr>
                    <td>Lucas</td>
                    <td>Dosantosbjj@gmail.com</td>
                    <td>22/02/2019 15:40</td>
                    <td>Administrador</td>
                    <td><button class="btn-user" id="edit-user"><i class="fas fa-pencil-alt"></i></button></td>
                </tr>    
                <tr>
                    <td>Lucas</td>
                    <td>Dosantosbjj@gmail.com</td>
                    <td>22/02/2019 15:40</td>
                    <td>Administrador</td>
                    <td><button class="btn-user" id="edit-user"><i class="fas fa-pencil-alt"></i></button></td>
                </tr> 
                <tr>
                    <td>Lucas</td>
                    <td>Dosantosbjj@gmail.com</td>
                    <td>22/02/2019 15:40</td>
                    <td>Administrador</td>
                    <td><button class="btn-user" id="edit-user"><i class="fas fa-pencil-alt"></i></button></td>
                </tr> 
            </table>
        </main>
    </div>

    <?php
    include_once('footer.php');
    ?>

    <!-- <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('sw.js').then(function(registration) {
                console.log('ServiceWorker registrado no seguinte escopo: ', registration.scope);
                }, 
                function(err) {
                console.log('Falha no registro do ServiceWorker.', err);
                });
            });
            var deferredPrompt;
            window.addEventListener('beforeinstallprompt', function (e) {
            console.log('beforeinstallprompt Event fired');
            //e.preventDefault();
            deferredPrompt = e;
            return false;
            });
            btnAddToHomeScreen.addEventListener('click', function () {
            if (deferredPrompt !== undefined) {              
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then(function (choiceResult) {
                    console.log(choiceResult.outcome);
                    if (choiceResult.outcome == 'dismissed') {
                        console.log('User cancelled home screen install');
                    } else {
                        console.log('User added to home screen');
                    }
                    deferredPrompt = null;
                });
            }
        });
    }
    </script>    -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    
<script src="assets/js/alertify.min.js"></script>
<script src="app/index.js"></script>
<script src="app/notification.js"></script>
</body>
</html>