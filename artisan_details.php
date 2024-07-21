<?php
include('layouts/app.php');
?>
<style>
    .details-artisans {
        padding: 50px;
        display: flex;
        flex-direction: row;
        gap: 15px;

    }

    img {
        width: 300px;
    }

    a {
        color: #fff;

    }

    a:hover {
        color: #fff;

    }

    .tel {

        background-color: #1842b6;
        padding: 5px 10px;
        border-radius: 20px;
    }

    .tel:hover {
        background-color: #1842b6;
    }

    .what {

        background-color: #3cd898;
        padding: 5px 10px;
        border-radius: 20px;
    }

    .what:hover {
        background-color: #3cd898;

    }

    .link {
        display: flex;
        flex-direction: row;
        gap: 15px;
    }
</style>
<section class="details-artisans">
    <div>
        <img src="img/admin.jpg" alt="">
    </div>
    <div>
        <h1>John Doe</h1>
        <h2>Plombier</h2>
        <p>john@mail.com</p>
        <p>0987654543212</p>
        <p>Abidjan</p>
        <p>Bac</p>


        <div class="link"><a href="" class="tel">Appel telephonique</a><a href="" class="what">Appel whatsApp</a></div>
    </div>
</section>

<div class="p-5 h-500 rounded contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4050954.5056089084!2d-8.18968960865012!3d7.464115452254907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf961387b049a067%3A0x1f91e627cb9ee40!2sC%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sci!4v1721478766713!5m2!1sfr!2sci" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php
include('footer.php');
?>