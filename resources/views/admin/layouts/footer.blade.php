<footer class="text-muted mt-3 mb-3">
        <div align="center">
        Desarrollado por <a href="https://www.linkedin.com/in/pedro-gabriel-leal-jimenez-464637141/" target="_blank">Pedro Leal | gaboleal123@gmail.com</a>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
   <!-- Select2 JS -->
   <script type="text/javascript" src="{{ URL::asset('js/select2.min.js') }}"></script>

   <script type="text/javascript" src="{{ URL::asset('js/fontawesome/all.min.js') }}"></script>


    <script type="text/javascript">

        function confirmarEliminar()
        {
        var x = confirm("Estas seguro de Eliminar?");
        if (x)
            return true;
        else
            return false;
        }
        $(document).ready(function() {
            $('.select-cargos').select2();
        });
        </script>
  </body>
</html>
