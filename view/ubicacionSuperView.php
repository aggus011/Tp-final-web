{{> headerSuper}}
<section  style="margin-left: 80px;">
    <h1 >Ingrese datos de viaje</h1><br><br>
    <form action="/HomeSuper/mostrarUbicacion" method="post" >
        <input class="form-control" name="idViaje" min="1" type="number" required placeholder="Ingrese id viaje">
        <input class="form-control bg-primary text-light mt-3" type="submit" value="Consultar ubicacion">
    </form>
</section>
{{> footer}}
