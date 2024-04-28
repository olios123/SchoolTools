<!DOCTYPE html>
<html lang="pl">
<head>
    <?php include './partials/head.php' ?>
</head>
<body>
    
    <?php include './partials/header.php' ?>

    <div class="banner">
        <div class="banner-overlay flex-center">
            
        </div>
    </div>

    <main class="flex-center flex-column" id="tools">
        <h2 class="text-center">Nasze narzędzia</h2>
        <p class="text-center">Narzędzia zostały stworzone w celu śledzenia i obliczania swoich postępów szkolnych.</p>
        
        <div class="main-items">
            <div class="main-item">
                <section class="flex-center">
                    <a class="box" href="./attendance.php">
                        <article class="flex-column flex-center">
                            <i class="fi fi-sr-crown"></i>
                            <h2>Kalkulator frekwencji</h2>
                            <p>Oblicz na ile możesz pozwolić sobie na   opuszczenie lekcji i jaki wpływ to będzie miało na    Twoją frekwenjcę.</p>
                        </article>
                    </a>
                </section>
            </div>
            <div class="main-item">
                <section class="flex-center">
                    <a class="box" href="./grades.php">
                        <article class="flex-column flex-center">
                            <i class="fi fi-sr-journal-alt"></i>
                            <h2>Kalkulator średniej ocen</h2>
                            <p>Policz swoją średnią oraz sprawdź jakie oceny musisz dostać aby ją podnieść.</p>
                        </article>
                    </a>
                </section>
            </div>
            <div class="main-item">
                <section class="flex-center">
                    <a class="box" href="./days-off.php">
                        <article class="flex-column flex-center">
                            <i class="fi fi-sr-daily-calendar"></i>
                            <h2>Dni wolne</h2>
                            <p>Zobacz kalendarz roku szkolnego aby sprawdzić takie informacje jak: ferie zimowe, wakacje lub przerwy świąteczne.</p>
                        </article>
                    </a>
                </section>
            </div>
        </div>
    </main>

    <?php include './partials/footer.php' ?>

</body>
</html>