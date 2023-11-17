<x-layout>
    <div class="container">
        <div class="row">
            <div class="m-5 col-12">
                
                <form method="POST" action="{{}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="fs-3 form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    
                    <div class="mb-3">
                        <label for="year" class="fs-4 form-label">Anno</label>
                        <input type="number" class="form-control" id="year" name="year">
                    </div>
                    
                    <div class="mb-3">
                        <label for="devolpeHouse" class="fs-4 form-label">Casa di Sviluppo</label>
                        <input type="text" class="form-control" id="devolpeHouse" name="devolpeHouse">
                    </div>
                    
                    <div class="mb-3">
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="my-5 mb-3">
                        <label class="fs-4 form-label" for="img">
                            Inserisci l'immagine
                        </label>
                        <input type="file" name="img" id="img" class="fom-label form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
                
            </div>
        </div>
    </div>
    
    
</x-layout>