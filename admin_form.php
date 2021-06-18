<form action="contenue.php" method="POST">
    <label for="pizza">Pizza</label>
    <input type="checkbox" name="pizza" value="display_pizza" >

    <label for="tiramisu">tiramisu</label>
    <input type="checkbox" name="tiramisu" value="display_tiramisu">

    <label for="centre_interet">Centre intérêt</label>
    <input type="checkbox" name="centre_interet" value="display_interet">
    <input type="hidden" name="posted" value="true">
    <button type="submit">Modifier les contenus à afficher</button>

</form>