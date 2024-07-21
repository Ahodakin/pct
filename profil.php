<?php
include('layouts/app.php');
?>
<div class="container-fluid py-5 mb-5" id="contact">
    <div class="container">
        <div class="row justify-content-center"> <!-- Centering the form horizontally -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                <div class="p-5 rounded contact-form">
                    <div class="mt-3 text-center">
                        <h4>Modification du profil</h4>
                    </div>
                    <form>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="exampleInputname" class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" required />
                            </div>
                            <div class="col">
                                <label for="exampleInputprenom" class="form-label">prénom</label>
                                <input type="text" name="prenom" class="form-control" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtel" class="form-label">Téléphone</label>
                            <input type="text" name="tel" class="form-control" required />
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="exampleInputtel" class="form-label">Niveau d'étude</label>
                                <select class="form-select" aria-label="Default select example" required>
                                    <option value="cep">CEP</option>
                                    <option value="bepc">BEPC</option>
                                    <option value="bac">BAC</option>
                                    <option value="bts">BTS</option>
                                    <option value="licence">LICENCE</option>
                                    <option value="master">MASTER</option>
                                    <option value="doctorat">DOCTORAT</option>
                                    <option value="aucun">AUCUN</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleInputtel" class="form-label">Villes/communes</label>
                                <select class="form-select" aria-label="Default select example" required>
                                    <option value="a">Abidjan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="exampleInputname" class="form-label">Longitude</label>
                                <input type="text" name="nom" class="form-control" required />
                            </div>
                            <div class="col">
                                <label for="exampleInputprenom" class="form-label">Lagitude</label>
                                <input type="text" name="prenom" class="form-control" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtel" class="form-label">Profession</label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option value="">couture</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Photo de profil</label>
                            <input type="file" name="" class="form-control" id="exampleInputPassword1" required />
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