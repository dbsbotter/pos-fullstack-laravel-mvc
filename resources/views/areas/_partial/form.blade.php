@csrf
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label>Descrição</label>
            <input name="description" value="{{ isset($area) ? $area->description : '' }}" type="text" class="form-control" placeholder="Descrição">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label>Cor</label>
            <input name="color" value="{{ isset($area) ? $area->color : '' }}" type="text" class="form-control" placeholder="Cor">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary float-right">Salvar</button>
