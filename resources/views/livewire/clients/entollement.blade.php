<div>
    <div class="box-body">
        <div class="row mbn-15">
            <div class="col-8">
                <div class="row">
                    <div class="col-lg-6 mb-15">
                        <label for="">Codigo</label>
                        <input type="text" class="form-control" placeholder="Input default">
                    </div>

                    <div class="col-lg-6 mb-15">
                        <label for="">Rut</label>
                        <input type="text" class="form-control" placeholder="Input default">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mb-15">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" placeholder="Input default">
                    </div>

                    <div class="col-lg-6 mb-15">
                        <label for="">Apellido</label>
                        <input type="text" class="form-control" placeholder="Input default">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mb-15">
                        <label for="">Fecha de Nacimiento</label>
                        <input type="text" class="form-control" placeholder="Input default">
                    </div>

                    <div class="col-lg-6 mb-15">
                        <label for="">Edad</label>
                        <input type="text" class="form-control" placeholder="Input default">
                    </div>

                </div>


            </div>

            <div class="col-lg-4 mb-15">
                <img style="width:500px; height:500px" src="{{ $template_image }}" alt="" >
             </div>


             <button wire:click="get_data">capturar datos</button>
             {{-- {{ $contador.'<br>' }} --}}
             {{ $lbl }}
        </div>








    </div>
</div>
