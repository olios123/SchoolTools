<!DOCTYPE html>
<html lang="pl">
<head>
    <?php include './partials/head.php' ?>
</head>
<body>
    
    <?php include './partials/header.php' ?>

    <main style="margin-top: 72px;">
        <section>
            <article>
                <form class="flex-column">
                    <label for="hours">Liczba godzin przedmiotu</label>
                    <input type="number" name="hours" id="hours"        style="margin-bottom: 1em;">

                    <label for="absences">Liczba nieobecności</label>
                    <input type="number" name="absences" id="absences"      style="margin-bottom: 1em;">

                    <input type="submit" value="Oblicz">
                </form>
            </article>
        </section>
        
        <section style="margin-top: 2em;">
            <article>
                <h2>Wyniki:</h2>
            </article>
        </section>
    </main>

    <?php include './partials/footer.php' ?>

</body>
</html>