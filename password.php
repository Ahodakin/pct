<?php
    include('layouts/app.php');
?>

<div class="container-fluid py-5 mb-5" id="contact">
            <div class="container">
                <div class="row justify-content-center"> <!-- Centering the form horizontally -->
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="p-5 rounded contact-form">
                            <div class="mt-3 text-center">
                                <h4>Modification du mot de passe</h4>
                            </div>
                            <form>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ancien mot de passe</label>
                                    <input type="password" name="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputtel" class="form-label">Nouveau mot de passe</label>
                                    <input type="password" name="" class="form-control" required />
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputtel" class="form-label">Confirmation du nouveau mot de passe</label>
                                    <input type="password" name="" class="form-control" required />
                                </div>
                                <button type="submit" class="btn btn-primary">Modifier</button>
         
                            </form>
                   
                        </div>
                    </div>
                </div>
            </div>
        </div>

                         <?php
    include('footer.php');
?>